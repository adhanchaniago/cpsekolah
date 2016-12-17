<?PHP session_start(); error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));?>

<?PHP  include ('../config.php');date_default_timezone_set("Asia/Jakarta");
if(isset($_POST['action_comment'])){
isset($_COOKIE["action_comment"]);
$id_article = strip_tags($_POST['id_article']);
$link_article = strip_tags($_POST['link_article']);
//==================================================
$nama_comment = mysql_real_escape_string(trim(strip_tags($_POST['nama_comment'])));
 $_SESSION['nama_comment']=$nama_comment; 
//==================================================
$email_comment = trim(strip_tags($_POST['email_comment']));
 $_SESSION['email_comment']=$email_comment; 
//==================================================
$url_website_komen = trim(strip_tags($_POST['url_website_komen']));
 $_SESSION['url_website_komen']=$url_website_komen; 
//================================================================

$nama_comment=$_SESSION['nama_comment'];
setcookie("nama_comment", $nama_comment, time()+3600);
$nama_comment = $_COOKIE['nama_comment'];
//=========================================
$email_comment=$_SESSION['email_comment'];
setcookie("email_comment", $email_comment, time()+3600);
$email_comment = $_COOKIE['email_comment'];
//==========================================

$url_website_komen=$_SESSION['url_website_komen'];
setcookie("url_website_komen", $url_website_komen, time()+3600);
$url_website_komen = $_COOKIE['url_website_komen'];



$error = array();
if (empty($_POST['nama_comment'])) {//if no name has been supplied 
$error[] = 'Nama tidak boleh kosong';//add to array "error"
} else {
$nama_comment = mysql_real_escape_string(trim(strip_tags($_POST['nama_comment'])));//else assign it a variable
 }

if (empty($_POST['email_comment'])) {//if no name has been supplied 
$error[] = 'Alamat Email tidak boleh kosong';//add to array "error"
} else {
$email_comment = mysql_real_escape_string(strip_tags($_POST['email_comment']));//else assign it a variable
 }
 
 if (empty($_POST['comment'])) {//if no name has been supplied 
$error[] = 'Pesan komentar tidak boleh kosong';//add to array "error"
} else {
$comment= mysql_real_escape_string(nl2br(strip_tags($_POST['comment'])));
 }

 if (empty($_POST['url_website_komen'])) {//if no name has been supplied 
$error[] = 'Url web tidak boleh kosong';//add to array "error"
} else {
$url_website_komen = mysql_real_escape_string(strip_tags($_POST['url_website_komen']));
}

if (empty($error)) //send to Database if there's no error '
{ 


$parent_id = mysql_real_escape_string(strip_tags($_POST['parent_id']));
$date_comment=date("h:i:s-j-M-Y");
$status = mysql_real_escape_string(strip_tags($_POST['status']));
 $result = filter_var($url_website_komen, FILTER_VALIDATE_URL, FILTER_FLAG_HOST_REQUIRED);
if ($_POST['captcha'] == $_SESSION['cap_code']) {
 if ( $result ){
if (preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['email_comment'])) {

           //regular expression for email validation
$q=mysql_query("insert into comment values('','$id_article','$nama_comment','$parent_id','$email_comment','$url_website_komen','$comment','$date_comment','Y')");
$r = mysql_query($q);
if(mysql_affected_rows()==1) {
//echo '<div class="alert alert-error"> Komentar tidak dapat diposting Silakan coba lagi..! <button class="close" data-dismiss="alert" type="button"><i class="icon-remove"></i></button></div>';
header("location:".$link_article."#ID=error21345y6734h");//direk eror
} else {
//echo '<div class="alert">Komentar Berhasil di Terbitkan....! <button class="close" data-dismiss="alert" type="button"><i class="icon-remove"></i></button></div>';
//echo "<meta http-equiv='refresh' content='0; url=#comments'>";
header("location:".$link_article."#ID=1334hhy6734h");//direk sukses
} }
else {
//echo '<div class="alert alert-error">  Maaf Alamat Email  Salah...! <button class="close" data-dismiss="alert" type="button">
//<i class="icon-remove"></i></button></div>';
header("location:".$link_article."#ID=erremail1334hhy6734h");//direk sukses
} }
else {
//echo '<div class="alert alert-error"> Maaf Url Website Anda  Salah...! <button class="close" data-dismiss="alert" type="button">
//<i class="icon-remove"></i></button></div>';
header("location:".$link_article."#ID=errorweb1334hhy6734h");//direk sukses
} }


else {
//echo '<div class="alert alert-error">Maaf Kode Captcha Salah...! <button class="close" data-dismiss="alert" type="button">
//<i class="icon-remove"></i></button></div>';
header("location:".$link_article."#ID=errorkode1334hhy6734h");//kode salah

}
}
else{ echo '<div class="alert alert-error">';
foreach ($error as $key => $values) {            
//echo '	<li>'.$values.'</li><button class="close" data-dismiss="alert" type="button"><i class="icon-remove"></i></button>';
header("location:".$link_article."#ID=errorall1334hhy6734h");//direk error all
}
//echo '</div>';
}}?>

<!DOCTYPE html><html lang="id"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Komentar</title>
</head><body>
</body></html>