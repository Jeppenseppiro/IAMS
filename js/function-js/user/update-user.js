$("#update_user").click(function(){

     fullname = $("#name").val();
     username = $("#username").val();
     password = $("#pass").val();
		
	if($("#pass").val() == ''){

        $('#snacker_message').html('Please Enter New Password!');
		message();
    }

    else{

        $.ajax(
            {
                url: "../config/user/profile/update-user.php",
                method: "POST",
                data: {'fullname':fullname, 'username':username, 'password':password},
                success:function(data){
                    $('#snacker_message').html('Successfully Updated!');
                    message();
                    $('#account_settings_modal').modal('toggle'); 
                }  
            });

    }

});

