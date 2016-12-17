<?PHP session_start();include ('../../../config.php');
 include ('../../privat/activasi-login.php');
date_default_timezone_set("Asia/Jakarta"); ?>

 <?PHP $action = mysql_real_escape_string($_GET['action']);
 if($action='publish'){
 	$refid= mysql_real_escape_string($_GET['refid']);
 $query=mysql_query("UPDATE buku_tamu set status='Publish' where id_buku='$refid'") or die (mysql_error());
if($query){
	header("location:".MY_ADMIN."guestbook/?reff=1");// sukses
} else {
	header("location:".MY_ADMIN."guestbook/?reff=2");//error
}}
?>
<!-- PERINTAH MENGHAPUS -->
<?PHP $action= mysql_real_escape_string($_GET['action']);
$refid = $_REQUEST['refid']; 
if ($action=='delete'){
if (empty($refid)){
header("location:".MY_ADMIN."guestbook/?reff=3");//tidak ditemukan
exit();}
$sql = mysql_query("delete from buku_tamu where id_buku='$refid'") or die (error);
if (!$sql){
header("location:".MY_ADMIN."guestbook/?reff=4");//error
}
else {

header("location:".MY_ADMIN."guestbook/?reff=5");//sukses
 }}?>



<!doctype html><html lang="en"><head><title>Proses Guestbook</title><meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no"></head><body>
<h2>Sorry script is not running..</h2>
<h3 style="text-align:left;font-family:Arial, Helvetica, sans-serif;font-size:25px; cursor:pointer" onClick="window.history.back()">Go Back</h3></body></html>