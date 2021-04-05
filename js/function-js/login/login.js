//-----------------------------------
// HITTING ENTER BUTTON
// ----------------------------------


user_click = document.getElementById("username");
pass_click = document.getElementById("password");

user_click.addEventListener("keyup", function(event) 
{  
    if (event.keyCode === 13) 
        {
         event.preventDefault();
         document.getElementById("submit").click();
        }
});

pass_click.addEventListener("keyup", function(event) 
{
    if (event.keyCode === 13) 
        {
         event.preventDefault();
         document.getElementById("submit").click();
        }
});



//-----------------------------------
// VALIDATE USER CREDENTIALS
// ----------------------------------

$("#submit").click(function(){

	$('#username').removeClass("animated shake border-danger");
	$('#password').removeClass("animated shake border-danger");
	user = $("#username").val();
	pass = $("#password").val();
	
	$.ajax(
		{
			method: "post",
			url: '../config/user/validate/validate-user.php',
			data: {'user':user,'pass':pass},
			success: function(data)
			{ 
			  if (data == "xuser") {
				$('#snacker_message').html('Unknown Username!');
				message();
				$('#username').addClass("animated shake border-danger");
			  }
			  if (data == "xpass") {
				$('#snacker_message').html('Incorrect Password!');
				message();
				$('#password').addClass("animated shake border-danger");
			  }
			  if (data == "accepted") {
				window.location.href = "main.php";  
			  }
			}
		}); 

});


