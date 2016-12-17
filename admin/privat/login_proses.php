<?php session_start(); include ('../../config.php');
include ('../in/anti_sql_injection.php');
$salt = '$%DSuTyr47542@#&*!=QxR094{a911}+';
$username = anti_sql_injection($_POST['username']);
$password = anti_sql_injection(hash('sha256',$salt.$_POST['password']));
		$result = mysql_query("SELECT * FROM admin_web WHERE user_name='$username' and pass='$password'") or die(mysql_error());
$num_row = mysql_num_rows($result);
		$row=mysql_fetch_array($result);
		$id_admin=mysql_real_escape_string($row['id_admin']);
		$user_name=mysql_real_escape_string($row['user_name']);
				if( $num_row >=1 ) {
echo 'true';
$_SESSION['id_admin']=$id_admin;			
$_SESSION['username']=$user_name;
}
		else{
			echo 'false';
		}
?>