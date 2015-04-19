var FormManager = function(form, validationMap) {
	var self = this,
		validationMap = validationMap || {
			'first_name': 'validName',
			'last_name': 'validName',
			'email': 'validEmail',
			'subject': 'validSubject',
			'message': 'validInput'
		};

	this.init = function() {
		self.validateForm();

		form.on('change', '.form-control', function() {
			self.validateInput($(this));
		});
	};

	this.validateForm = function()
	{
		form.find('.form-group').each(function() {
			if ($(this).find('.errormsg').text().length) {
				self.validateInput($(this).find('.form-control'));
			}
		});
	};

	this.validateInput = function(input)
	{
		var callback;

		if (validationMap[input.attr('name')]) {
			callback = 	validationMap[input.attr('name')];
		} else {
			callback = 'validInput';
		}
		if (self[callback](input.val())) {
			self.setSuccessStatus(input);
		} else {
			self.setErrorStatus(input);
		}
	};

	this.setSuccessStatus = function(input)
	{
		input.siblings('.form-control-feedback').removeClass('fa-close hidden').addClass('fa-check');
		input.siblings('span.sr-only').removeClass('hidden').text('(success)');
		input.closest('.form-group').removeClass('has-error').addClass('has-success').find('.errormsg').empty();
	};

	this.setErrorStatus = function(input)
	{
		input.siblings('.form-control-feedback').removeClass('fa-check hidden').addClass('fa-close');
		input.siblings('span.sr-only').removeClass('hidden').text('(error)');
		input.closest('.form-group').removeClass('has-success').addClass('has-error');
	};

	this.validInput = function(value)
	{
		var value = self.trimSpace(value);

		if (value != '') {
			return true;
		}
		return false;
	};

	this.validName = function(value)
	{
		if (self.validInput(value)) {
			if (value.length <= 255) {
				return true;
			}
		}
		return false;
	};

	this.validSubject = function(value) {
		var alphaDash = /^[a-zA-Z0-9\-\_]+$/;

		if (self.validInput(value)) {
			if (value.match(alphaDash)) {
				return true;
			}
		}
		return false;
	};

	this.validEmail = function(value)
	{
		var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

		if (self.validInput(value)) {
			if (value.match(emailExp)) {
				return true;
			}
		}
		return false;
	};

	this.trimSpace = function(string)
	{
		return string.replace(/^\s+|\s+$/g, '');
	};
};

$(document).ready(function() {
	var form = new FormManager($('#contact_form'));
	form.init();
});
