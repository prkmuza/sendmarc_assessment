//javascript to handle the submit of the registration form...
$(function(e) {

	var working = false;
	
	
	
	
	$("#registerForm").submit(function(e) {		
	$("#loadingLoginR").show();
		//prevent the default of form submission...
		e.preventDefault();	
		
		if (working) return false;
		working = true;
		$('.error').remove();
		
		//post it up for validation...
        $.post('../UserFunctions/validateRegister.php', $(this).serialize(), function(msg)
		{
			working = false;
			//if a message in status comes back (status will be 1), then great...callback function to tell them to check their email and activate their account...
			if (msg.status)
			{//if it has worked, then redirect the person back to the place they were..
				window.location.replace("index.php");
			}
			
			else{
			
			//else there was an error in the validation of the form... so for each error:
				$.each(msg.errors, function(k, v){
				$("#loadingLoginR").hide();
					//put the result in the label below that div...
					$('label[for="'+k+'"]').append(v);
				})
			}
		}, 'json');
    });
});