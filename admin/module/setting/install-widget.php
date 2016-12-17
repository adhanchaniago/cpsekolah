<?PHP session_start();include ('../../../config.php');include ('../../privat/activasi-login.php');  
include("../in/replace_character.php");?>

<?PHP $action = mysql_real_escape_string($_GET['action']);//UNTUK MENHAPUS
$refid = mysql_real_escape_string($_GET['refid']);
$type = mysql_real_escape_string($_GET['type']);
if ($action =='delete'){
if (empty($refid)){
header("location:".MY_ADMIN."setting/widget/?reff=000");// eror
exit();}

$sql = mysql_query("select * from widget where refid='$refid'");
$data = mysql_fetch_array($sql);
$type = $data['type'];
$content = $data['content'];
$lokasi_file = $_FILES['content']['tmp_name'];
$tmpfile = "../../public/widget/".$content;
if ($type == "1"){
$sql = mysql_query("delete from widget where refid='$refid'");
header("location:".MY_ADMIN."setting/widget/?reff=10");// error delet
unlink ($tmpfile);
}

if ($type == "2"){

$sql = mysql_query("delete from widget where refid='$refid'");
//if(!$sql){
header("location:".MY_ADMIN."setting/widget/?reff=10");// error delet
}}
?>

<?PHP  $act= htmlentities($_GET['act']);if ($act=='install'){  // PLUGIN
function get_ext($key) { #function get extension file
$key=strtolower(substr(strrchr($key, "."), 1));
$key=str_replace("jpeg","jpg",$key);
return $key; }
$title = addslashes($_REQUEST['title']);
$icon_widget = trim(addslashes($_REQUEST['icon_widget']));

$file = $_FILES['content']['name'];
$lokasi_file = $_FILES['content']['tmp_name'];

$content = strtolower(preg_replace("/\s+/", "_", $file));
$wg_ext =  get_ext($file);
$position= addslashes($_POST['position']);
$type= "1";
$chars="0123456789ABCDEFG"; $panjang='15'; $len=strlen($chars); $start=$len-$panjang; $xx=rand('0',$start); 
$yy=str_shuffle($chars); $refid=substr($yy, $xx, $panjang);

if ($wg_ext != "txt"){
header("location:".MY_ADMIN."setting/widget/?reff=1");// file extensi salah
//echo "<h1>Error</h1><p>file extension must be <font color='red'>.mgb</font><br><a href='widget.php'>Back</a></p>";
exit();
}
if (file_exists($target)){
header("location:".MY_ADMIN."setting/widget/?reff=2");// install widget salah
//echo "<h1>Error</h1><p>Plugin Widget '$wg_file' has been installed in your website <br><a href='widget.php'>Back</a></p>";
exit();
}

if ($position == "left"){
$sql = mysql_query("select * from widget order by widget.number DESC");
$data_wg = mysql_fetch_array($sql);
$wg_last_number = $data_wg['number'];
$number = $wg_last_number + 1;
$number2 = "0";

move_uploaded_file($lokasi_file, "../../public/widget/".$content);

$sql=mysql_query("insert into widget values('','$refid', '$title', '$icon_widget', '$content', '$number', '$number2', '$position', '$type')");
if(!$sql)  { 
header("location:".MY_ADMIN."setting/widget?reff=3");// eror
} else   {
header("location:".MY_ADMIN."setting/widget?reff=4");// sukses
}
} }

if ($position == "right"){
$sql = mysql_query("select * from widget order by widget.number2 DESC");
$data_wg = mysql_fetch_array($sql);
$wg_last_number = $data_wg['number2'];
$number2 = $wg_last_number + 1;
$number = "0";
move_uploaded_file($lokasi_file, "../../../public/widget/".$content);
$sql=mysql_query("insert into widget values('','$refid', '$title', '$icon_widget', '$content', '$number', '$number2', '$position', '$type')");

if(!$sql)  { 
header("location:".MY_ADMIN."setting/widget/?reff=3");// eror
} else   {
header("location:".MY_ADMIN."setting/widget/?reff=4");// sukses
}}
?>




<?PHP $act=$_GET['act'];// SET ISTALL
$refid = $_GET['refid'];
$from = $_GET['from'];
$to = $_GET['to'];
if ($act=='set'){
if (empty($refid)){
header("location:".MY_ADMIN."setting/widget/?reff=000");// eror
exit();
}
if (empty($from)){
header("location:".MY_ADMIN."setting/widget/?reff=000");// eror
exit();
}
if (empty($to)){
header("location:".MY_ADMIN."setting/widget?reff=000");// eror
exit();
}
//$collum = $_GET['collum'];
$sql_update_you = mysql_query("update widget set number='$from' where number='$to'");
$sql_update_me = mysql_query("update widget set number='$to' where refid='$refid'");
header("location:".MY_ADMIN."setting/widget/?reff=7&message=Succes sorting wideget > from $from to $to");// srong
}

if ($act=='set2'){
if (empty($refid)){
header("location:".MY_ADMIN."setting/widget?reff=000");// eor
exit();
}
if (empty($from)){
header("location:".MY_ADMIN."setting/widget?reff=000");// eror
exit();
}
if (empty($to)){
header("location:".MY_ADMIN."setting/widget?reff=000");// eror
exit();
}
$sql_update_you = mysql_query("update widgetg set number2='$from' where number2='$to'");
$sql_update_me = mysql_query("update widget set number2='$to' where refid='$refid'");
header("location:".MY_ADMIN."setting/widget/?reff=7&message=Succes sorting widget > from $from to $to");// srong
}

?>

<?PHP $up_install_='JHJlZmlkPWh0bWxlbnRpdGllcygkX0dFVFsncmVmaWQnXSk7ICRhY3Q9aHRtbGVudGl0aWVzKCRfR0VUWydhY3QnXSk7DQppZiAoJGFjdD09J2VkaXRpbnN0YWwnKXsgDQokc3FsID0gbXlzcWxfcXVlcnkoInNlbGVjdCAqIGZyb20gd2lkZ2V0IFdIRVJFIHJlZmlkPSckcmVmaWQnIik7DQokZGF0YV93ZyA9IG15c3FsX2ZldGNoX2FycmF5KCRzcWwpOw0KJGNvbnRlbnQgPSAkZGF0YV93Z1snY29udGVudCddOw0KJGRhdGFfdG9fd3JpdGUgPSAkX1BPU1RbJ2NvZGUnXTsNCiRmaWxlX3BhdGggPSAiLi4vLi4vLi4vcHVibGljL3dpZGdldC8kY29udGVudCI7DQokZmlsZV9oYW5kbGUgPSBmb3BlbigkZmlsZV9wYXRoLCAndycpOw0KZndyaXRlKCRmaWxlX2hhbmRsZSwgJGRhdGFfdG9fd3JpdGUpOw0KZmNsb3NlKCRmaWxlX2hhbmRsZSk7DQokaWNvbl93aWRnZXQgPSB0cmltKCRfUE9TVFsnaWNvbl93aWRnZXQnXSk7DQokdGl0bGUgPSBzdHJpcF90YWdzKHRyaW0oJF9QT1NUWyd0aXRsZSddKSk7DQokZWRpdD1teXNxbF9xdWVyeSgiVVBEQVRFIHdpZGdldCBTRVQgdGl0bGU9JyR0aXRsZScsaWNvbl93aWRnZXQ9JyRpY29uX3dpZGdldCcgV0hFUkUgcmVmaWQ9JyRyZWZpZCciKTsNCmlmKCEkZWRpdCkgIHsgIA0KaGVhZGVyKCJsb2NhdGlvbjoiLk1ZX0FETUlOLiJzZXR0aW5nL3dpZGdldD9yZWZmPTgiKTsvLyBlcm9yDQp9IGVsc2UgICB7DQpoZWFkZXIoImxvY2F0aW9uOiIuTVlfQURNSU4uInNldHRpbmcvd2lkZ2V0P3JlZmY9OSIpOy8vIHN1a3Nlcw0KfX0=';
eval(base64_decode($up_install_));?>


<!doctype html><html lang="en"><head><title>Action Widget</title><meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no"></head><body>
<h2>Sorry script is not running..</h2>
<h3 style="text-align:left;font-family:Arial, Helvetica, sans-serif;font-size:25px; cursor:pointer" onClick="window.history.back()">Go Back</h3></body></html>