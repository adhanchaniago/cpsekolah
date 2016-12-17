$(document).ready(function(){
	
   $("#login").click(function(){
		username=$("#user_name").val();
        password=$("#password").val();
var url_admin    = '../';
         $.ajax({
            type: "POST",
           url: "../privat/login_proses.php",
            data: "username="+username+"&password="+password,


            success: function(html){
			
			  if(html=='true')
              {
                $("#login_form").fadeOut("normal");
				$("#shadow").fadeOut();
				// You can redirect to other page here....
				$("#add_err").html('<div class="alert alert-success">Success..</div>');
				 window.location = url_admin;
              }
              else
              { window.location = url_admin;
                    $("#add_err").html('<div class="alert alert-danger">Wrong username or password</div>');
              }
            },
            beforeSend:function()
			{
                 $("#add_err").html('<div class="alert alert-danger"><img src="../img/spinner-mini.gif"><i>Loading..</i></div>')
            }
        });
         return false;
    });
});