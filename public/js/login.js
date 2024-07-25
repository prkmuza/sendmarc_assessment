// JavaScript Document to run the login of users...
$(document).ready(function(e) {
//	alert("Clicked");
	$("#email").focus();
	
	var working = false;
	
	//use JQuery to submit the login form....
	$("#loginForm").submit(function(e) {
	$("#loadingLogin").show();
		//prevent the default submitting 
		e.preventDefault();
		
		if (working) return false;
		working = true;
		$('.error').remove();
		
		//send it up for validation in the validationLogin file..
        $.post('../UserFunctions/validateLogin.php', $(this).serialize(), function(msg) {
			
			working = false;
			if (msg.status) {
				
				//if it has worked, then redirect the person back to the place they were..
				window.location.replace("index.php");
			
			//else if there are any errors, then put each one of them in their respective labels..
			} else {
			 
				$.each(msg.errors, function(k, v) {
                    $("#loadingLogin").hide();
					$('label[for="'+k+'"]').append(v);
					 
				})
			}
		}, 'json');
    });
	
	
	
	
});