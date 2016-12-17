<?PHP session_start();include ('../../config.php');include ('../privat/activasi-login.php');
$ref=$_GET['ref'];
$user=$_SESSION['username'];
if ($ref=='logout'){
$tgl_akhir= date("h:i A - d-m-Y");$ip=$_SERVER['REMOTE_ADDR'];
$save=mysql_query("update admin_widodo set tgl_akhir='$tgl_akhir', ip='$ip' where user='$user'");
session_destroy();
unset($_SESSION['username']);
unset($_SESSION['password']);
$ip=$_SERVER['REMOTE_ADDR'];;
session_destroy();
header('Location:./');
exit();} ?>

		
