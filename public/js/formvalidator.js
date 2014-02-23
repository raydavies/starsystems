<!--

$(document).ready(function(){

	$('#contact_form').submit(function(){
		return verifyForm();
	});

	$('input#name').change(function(event){
		validName();
	});
	$('input#email').change(function(event){
		validEmail();
	});
	$('textarea#message').change(function(event){
		validMessage();
	});
});

function verifyForm(){
	var namevalid=false;
	var emailvalid=false;
	var msgvalid=false;

	if (validName()){
		namevalid=true;
	}
	if (validEmail()){
		emailvalid=true;
	}
	if (validMessage()){
		msgvalid=true;
	}
	if (namevalid==true && emailvalid==true && msgvalid==true){
		return true;
	}
	else {
		return false;
	}
}

	
function validName(){
	var name = document.getElementById("name");
	var nameerror = document.getElementById("nameerror");

	if (trimSpace(name.value)!=''){
		nameerror.style.display="none";
		return true;		
	}
	else {
		nameerror.style.display="inline";
		return false;		
	}
}

function validEmail(){
	var email = document.getElementById("email");
	var emailerror = document.getElementById("emailerror");

	if (trimSpace(email.value)!=''){
		if (realEmail(email)){
			emailerror.style.display="none";
			return true;
		}
	}
	else {
		emailerror.style.display="inline";
		return false;	
	}
}

function validMessage(){
	var message = document.getElementById("message");
	var msgerror = document.getElementById("msgerror");

	if (trimSpace(message.value)!=''){
			msgerror.style.display="none";
			return true;			
		}
		else {
			msgerror.style.display="inline";
			return false;		
		}
}

function realEmail(elem){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;

	if (elem.value.match(emailExp)){
		return true;
	}
	else {
		return false;
	}
}

function trimSpace(elem){
	return elem.replace(/^\s+|\s+$/g, '');
}

//-->
