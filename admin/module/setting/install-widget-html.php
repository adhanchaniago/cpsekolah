<?PHP session_start();
$config_='aW5jbHVkZSAoJy4uLy4uLy4uL2NvbmZpZy5waHAnKTsNCmluY2x1ZGUgKCcuLi8uLi9wcml2YXQvYWN0aXZhc2ktbG9naW4ucGhwJyk7ICAgDQppbmNsdWRlKCIuLi8uLi9pbi9yZXBsYWNlX2NoYXJhY3Rlci5waHAiKTs=';
eval(base64_decode($config_));?>


<!-- WIDGET HTML -->
<?PHP $act=mysql_real_escape_string($_GET['act']);if ($act=='sethtml'){ // html
$title = strip_tags(trim($_POST['title']));
$icon_widget = trim($_POST['icon_widget']);
if (empty($_POST['content'])) {
header("location:".MY_ADMIN."setting/widget?reff=000");// eror
 } 
else { 
$content = mysql_real_escape_string($_POST['content']); }

$number2 = "0";
$position= addslashes($_POST['position']);
$type= "2";
$chars="0123456789ABCDEFG"; $panjang='15'; $len=strlen($chars); $start=$len-$panjang; $xx=rand('0',$start); 
$yy=str_shuffle($chars); $refid=substr($yy, $xx, $panjang);

if ($position == "left"){
$sql = mysql_query("select * from widget order by widget.number DESC");
$data_wg = mysql_fetch_array($sql);
$wg_last_number = $data_wg['number'];
$number = $wg_last_number + 1;

$sql=mysql_query("insert into widget values('','$refid', '$title', '$icon_widget', '$content', '$number', '$number2', '$position', '2')");
if(!$sql)  { 
header("location:".MY_ADMIN."setting/widget/?reff=5");// eror
} else   {
header("location:".MY_ADMIN."setting/widget/?reff=6");// sukses
}
}

if ($position == "right"){
$sql = mysql_query("select * from widget order by widget.number2 DESC");
$data_wg = mysql_fetch_array($sql);
$wg_last_number = $data_wg['number2'];
$number2 = $wg_last_number + 1;
$number = "0";
$sql=mysql_query("insert into widget values('','$refid', '$title', '$icon_widget', '$content', '$number', '$number2', '$position', '2')");
if(!$sql)  { 
header("location:".MY_ADMIN."setting/widget/?reff=5");// eror
} else   {
header("location:".MY_ADMIN."setting/widget/?reff=6");// sukses
}}
}
?>

<?PHP $refid= mysql_real_escape_string(htmlentities($_GET['refid'])); 
$act= mysql_real_escape_string(htmlentities($_GET['act']));if ($act=='edithtml'){ // html
$title = strip_tags($_POST['title']);
$icon_widget = trim($_POST['icon_widget']);
$position = strip_tags($_POST['position']);
if (empty($_POST['content'])) {
header("location:".MY_ADMIN."setting/widget/?reff=000");// eror
}  else { 
$content = mysql_real_escape_string($_POST['content']);}
$edit=mysql_query("UPDATE widget SET title='$title',icon_widget='$icon_widget',content='$content',position='$position' WHERE refid='$refid'");
if(!$edit)  { 
header("location:".MY_ADMIN."setting/widget/?reff=8");// eror
} else   {
header("location:".MY_ADMIN."setting/widget/?reff=9");// sukses
}
}?>