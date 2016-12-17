$(document).ready(function() {
	var testimonialsManager = new TestimonialsManager($('#testimonial_manager'));
	testimonialsManager.init();
});

function TestimonialsManager(context) {
	var self = this,
		filters = context.find('#testimonial_filters'),
		list = context.find('#testimonial_list');
	
	this.init = function () {
		filters.on('click.filter', 'a[role="tab"]', self.filterTestimonials);
		
		list.on('click.toggle', '.activation-toggle', function () {
			var id = $(this).closest('.testimonial').attr('id');
			var testimonial_id = parseInt(id.substring(12), 10);
			self.toggleActiveStatus(testimonial_id);
		});
	};
	
	this.toggleActiveStatus = function (testimonial_id) {
		var testimonial, toggle;
		
		$.ajax({
			url: '/admin/testimonials/' + testimonial_id + '/toggle-status',
			dataType: 'json',
			type: 'post',
			error: function(err, obj, msg) {
				console.log(msg);
			},
			success: function (response) {
				if (response.data) {
					testimonial = $('#testimonial-' + testimonial_id);
					toggle = testimonial.find('.activation-toggle');
					
					if (response.data.flag_active) {
						testimonial.removeClass('panel-danger').addClass('panel-success');
						toggle.find('i').removeClass('fa-check').addClass('fa-times');
						toggle.find('strong').text('Deactivate');
					} else {
						testimonial.removeClass('panel-success').addClass('panel-danger');
						toggle.find('i').removeClass('fa-times').addClass('fa-check');
						toggle.find('strong').text('Activate');
					}
					
					//hide any testimonials that no longer match active filter status
					filters.find('li.active > a').trigger('click.filter');
				}
			}
		});
	};
	
	this.filterTestimonials = function() {
		var filter = $(this).data('status');
		var testimonials = list.find('.testimonial');
		
		if (filter === 1) {
			testimonials.each(function(id, testimonial) {
				var testimonialObj = $(testimonial),
					wrapper = testimonialObj.closest('.testimonial-wrapper');
				
				if (testimonialObj.hasClass('panel-success')) {
					wrapper.removeClass('hidden');
				} else {
					wrapper.addClass('hidden');
				}
			});
		} else if (filter === 0) {
			testimonials.each(function(id, testimonial) {
				var testimonialObj = $(testimonial),
					wrapper = testimonialObj.closest('.testimonial-wrapper');
				
				if (testimonialObj.hasClass('panel-danger')) {
					wrapper.removeClass('hidden');
				} else {
					wrapper.addClass('hidden');
				}
			});
		} else {
			testimonials.each(function(id, testimonial) {
				$(testimonial).closest('.testimonial-wrapper').removeClass('hidden');
			});
		}
	};
}
