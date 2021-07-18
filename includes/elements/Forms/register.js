$(document).ready(function() {

	$(".toRegistration").click(function() {
		$(".loginFormContainer").hide();
		$(".registrationFormContainer").show();
	});

	$(".toLogin").click(function() {
		$(".loginFormContainer").show();
		$(".registrationFormContainer").hide();
	});
});