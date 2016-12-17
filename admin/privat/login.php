<?PHP session_start();include ('../../config.php'); include ('../in/ini.php');?>
<?php if(empty($_SESSION['username'])) { 
} else {
header("location:../");
echo "<meta http-equiv='refresh' content='0; url=../'>";
}?>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
/* : coki widodo */
body {background:#eeeeee!important; overflow:hidden!important}
.wrapper {margin:auto;margin-top:6%; width:100%;}
.wrapper .images {margin:auto; width:200px; margin-bottom:5px;}
.wrapper .images img{margin:auto; width:200px;}
.wrapper-login {width:30%; margin:auto; background:#ffffff url(../img/header-strip-login.png) repeat-x top; padding:20px;
  padding-top:40px;}
.wrapper-login input { width:86%!important;}
.wrapper-login .input-prepend{ margin-bottom:20px!important}
.wrapper-login .err { margin-top:5px; margin-bottom:5px;}
</style>

<script src="../js/jquery-1.8.2.min.js"></script>
<script src="../privat/proses-login.js"></script>
<?PHP include"../head.php";?>
</head><body>
<div class="wrapper">
<div class="images">
<img src="../img/logo_admin_school.png"/>
</div>
<div class="wrapper-login">
<form action="">

<div class="input-prepend"><label>Username</label>
<span class="add-on"><i class="icon-user"></i></span><input type="text"  id="user_name"  name="user_name" placeholder="Username" />
</div>

<div class="input-prepend"><label>Password</label>
<span class="add-on"><i class="icon-lock"></i></span><input type="password" id="password"  name="password" placeholder="Password" />
</div>
<div class="err" id="add_err"></div>
<button class="btn btn-success btn-large" id="login" type="submit"><i class="icon-signin"></i> Login</button>
	</form><!-- form -->
</div></div>
</body></html>