<?PHP session_start();
$config_='aW5jbHVkZSAoJy4uLy4uLy4uL2NvbmZpZy5waHAnKTsNCmluY2x1ZGUgKCcuLi8uLi9wcml2YXQvYWN0aXZhc2ktbG9naW4ucGhwJyk7ICAgDQppbmNsdWRlKCIuLi8uLi9pbi9yZXBsYWNlX2NoYXJhY3Rlci5waHAiKTs=';
eval(base64_decode($config_));?>



<?PHP $action= htmlentities($_GET['action']);//UNTUK MENHAPUS POSTINGAN
$refid = htmlentities($_REQUEST['refid']); 
if ($action=='delete'){ if (empty($refid)){
header("location:".MY_ADMIN."data-alumni?reff=1");// failed
exit();}
$sql = mysql_query("delete from alumni where id_alumni='$refid'");
if(!$sql){ 
header("location:".MY_ADMIN."data-alumni?reff=2"); //error
}
header("location:".MY_ADMIN."data-alumni?reff=3"); //sukses
 }?>


<!doctype html><html lang="en"><head><title>Proses alumni</title><meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no"></head><body>
<h2>Sorry script is not running..</h2>
<h3 style="text-align:left;font-family:Arial, Helvetica, sans-serif;font-size:25px; cursor:pointer" onClick="window.history.back()">Go Back</h3></body></html>