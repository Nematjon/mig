
$(document).ready(function() {
	pageSetUp();// DO NOT REMOVE : GLOBAL FUNCTIONS!

	var mt={
		index(){
			var p=location.pathname;
			/*if( p=="/subagent/login" || p="/" ){
				runAllForms();
				// Validation
				$("#login-form").validate({
					// Rules for form validation
					rules : {
						email : {
							required : true,
							email : true
						},
						password : {
							required : true,
							minlength : 3,
							maxlength : 20
						}
					},

					// Messages for form validation
					messages : {
						email : {
							required : 'Please enter your email address',
							email : 'Please enter a VALID email address'
						},
						password : {
							required : 'Please enter your password'
						}
					},

					// Do not change code below
					errorPlacement : function(error, element) {
						error.insertAfter(element.parent());
					}
				});
			}*/
		},menu(){
			//$("nav>ul>li>a").click(function(e){
			$("nav>ul>li ul").closest("li").find(">a").click(function(e){
				return false;
				e.preventdefault();
			});
		}
	}
	mt.menu();
});