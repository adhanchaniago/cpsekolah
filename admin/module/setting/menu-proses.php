<?PHP session_start();include ('../../../config.php');include ('../../privat/activasi-login.php');   
include("../../in/replace_character.php");?>

<?PHP $act=$_GET['act']; if ($act=='set'){
$refid = strip_tags(htmlentities($_GET['refid']));
$from = $_GET['from'];
$to = $_GET['to'];
if (empty($refid)){
header("location:".MY_ADMIN."setting/menu/?reff=000");// kosong
exit();
}
if (empty($from)){
header("location:".MY_ADMIN."setting/menu/?reff=000");// kosong
exit();
}
if (empty($to)){
header("location:".MY_ADMIN."setting/menu/?reff=000");// kosong
exit();
}
$sql_update_you = mysql_query("update menu set number='$from' where number='$to'");
$sql_update_me = mysql_query("update menu set number='$to' where id='$refid'");
header("location:".MY_ADMIN."setting/menu/?reff=5&message=Succes sorting menu > from $from to $to");// kosong
}
?>

<?PHP
if (isset($_POST['menukubaru'])) {// ADD MENU
$sql = mysql_query("select * from menu order by menu.number DESC");
$data_menu = mysql_fetch_array($sql);
$menu_last_number = $data_menu['number'];
$menu_number = $menu_last_number + 1;
$menu_name = addslashes($_POST['menu_name']);
$menu_name = str_replace('"', "'", $menu_name);
$menu_type = $_POST['menu_type'];
if ($menu_type == 0){
header("location:".MY_ADMIN."setting/menu/?reff=000");// kosong
exit();
}
if ($menu_type == 1){
$menu_link = $_POST['menu_link'];
$menu_target = $_POST['menu_target'];
}
if ($menu_type == 2){
$menu_link = '#';
$menu_target = '_self';
}
if (empty($menu_link)){
header("location:".MY_ADMIN."setting/menu/?reff=000");// kosong
exit();
}
else{
$sql = "insert into menu values('', '$menu_name', '$menu_link', '$menu_type', '$menu_target', '$menu_number')";
if (mysql_query($sql)){
header("location:".MY_ADMIN."setting/menu/?reff=1");// sukses
}
else{
//echo "Error, Because ",mysql_error();
header("location:".MY_ADMIN."setting/menu/?reff=2");// error
}
}
}
?>

<?PHP $act=$_GET['act']; $refid = $_REQUEST['refid'];  if ($act=='edit'){// UNTUK MENGEDIT POST
$refid=abs((int)$_GET['refid']);
$sql = mysql_query("select * from menu order by menu.number DESC");
$data_menu = mysql_fetch_array($sql);
$menu_last_number = $data_menu['number'];
$menu_number = $menu_last_number + 1;
$menu_name = addslashes($_POST['menu_name']);
$menu_name = str_replace('"', "'", $menu_name);
$menu_type = $_POST['menu_type'];
$real_menu_name = $_POST['real_menu_name'];
$id = $_POST['id'];
if ($menu_type == 0){
header("location:".MY_ADMIN."setting/menu/?reff=000");// kosong
exit();
}
if ($menu_type == 1){
$menu_link = $_POST['menu_link'];
$menu_target = $_POST['menu_target'];
}
if ($menu_type == 2){
$menu_link = '#';
$menu_target = '_self';
}
if (empty($menu_link)){
header("location:".MY_ADMIN."setting/menu/?reff=000");// kosong
exit();
}
else{
$sql = "update menu set name='$menu_name', link='$menu_link', type='$menu_type', target='$menu_target' where id='$refid'";
if ($menu_type==2){
$sql_submenu = mysql_query("update submenu set menu=replace(menu, '$real_menu_name', '$menu_name')");
}
if (mysql_query($sql)){
header("location:".MY_ADMIN."setting/menu/?reff=3");// sukses
}
else{
header("location:".MY_ADMIN."setting/menu/?reff=4");// error
}
}
}
?>



<?PHP $act=$_GET['act'];//UNTUK MENHAPUS POSTINGAN
$refid = $_REQUEST['refid']; if ($act=='delete'){
if (empty($refid)){
header("location:".MY_ADMIN."setting/menu/?reff=000");// error
exit();}
$sql = mysql_query("delete from menu where id='$refid'");
header("location:".MY_ADMIN."setting/menu/?reff=6");// sukses
 }?>

<!doctype html><html lang="en"><head><title>Proses Menu</title><meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no"></head><body>
<h2>Sorry script is not running..</h2>
<h3 style="text-align:left;font-family:Arial, Helvetica, sans-serif;font-size:25px; cursor:pointer" onClick="window.history.back()">Go Back</h3></body></html>