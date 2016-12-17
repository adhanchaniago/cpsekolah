<?PHP session_start();include ('../../../config.php');include ('../../privat/activasi-login.php');   
include("../../in/replace_character.php");?>

<?PHP  $act= htmlentities($_GET['act']); if ($act=='addmenu'){
$submenu_name = addslashes($_POST['submenu_name']);
$submenu_name = str_replace('"', "'", $submenu_name);
$submenu_menu = $_POST['submenu_menu'];
$submenu_link = $_POST['submenu_link'];
$submenu_target = $_POST['submenu_target'];
if (empty($submenu_name)){
header("location:".MY_ADMIN."setting/lmenu/?ref=error#submenu");// kosonh
}

$sql = "insert into submenu values('', '$submenu_name', '$submenu_link', '$submenu_menu', '$submenu_target')";
if (mysql_query($sql)){
header("location:".MY_ADMIN."setting/menu/?ref=a1#submenu");// sukses
}
else{
header("location:".MY_ADMIN."setting/menu/?ref=a2#submenu");// error
}
}
?>


<?PHP $act=$_GET['act']; if ($act=='editmenu'){
$id = $_POST['id'];
$id=abs((int)$_GET['id']);
$submenu_name = addslashes($_POST['submenu_name']);
$submenu_name = str_replace('"', "'", $submenu_name);
$submenu_menu = $_POST['submenu_menu'];
$submenu_link = $_POST['submenu_link'];
$submenu_target = $_POST['submenu_target'];
if (empty($submenu_name)){
header("location:".MY_ADMIN."setting/menu/?ref=error#submenu");// kosonh
}

$sql = "update submenu set name='$submenu_name', link='$submenu_link', menu='$submenu_menu', target='$submenu_target' where id='$id'";
if (mysql_query($sql)){
header("location:".MY_ADMIN."setting/menu/?ref=a3#submenu");// succes
}
else{
echo "Error, Because ",mysql_error();
header("location:".MY_ADMIN."setting/menu/?ref=a4#submenu");// error
}
}
?>



<?PHP $act=$_GET['act'];//UNTUK MENHAPUS 
$refid = $_REQUEST['refid']; if ($act=='delete'){
if (empty($refid)){
header("location:".MY_ADMIN."setting/menu/?ref=error#submenu");// kosonh
exit();}
$sql = mysql_query("delete from submenu where id='$refid'");
header("location:".MY_ADMIN."setting/menu/?ref=a5#submenu");// succes
}?>
<!doctype html><html lang="en"><head><title>Proses Submenu</title><meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no"></head><body>
<h2>Sorry script is not running..</h2>
<h3 style="text-align:left;font-family:Arial, Helvetica, sans-serif;font-size:25px; cursor:pointer" onClick="window.history.back()">Go Back</h3></body></html>