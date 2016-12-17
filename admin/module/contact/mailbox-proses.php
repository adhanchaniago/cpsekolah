<?PHP session_start();include ('../../../config.php'); include ('../../privat/activasi-login.php');
date_default_timezone_set("Asia/Jakarta"); 
include('../../../lib/ini.lib.php');
$config = get_parse_ini('../../lib/config.ini.php');
$ini_file = "../../../lib/config.ini.php";
$sett_email= $config['config']['sett_email'];

if (isset($_POST['delete'])) {
//if (empty($cek)){
//}
if(count($_POST['cek']) < 1) {
header("location:".MY_ADMIN."mailbox/?reff=1");}
else {
$cek = $_POST['cek'];
for($i=0;$i<count($_POST['cek']);$i++){
$hapus=mysql_query("DELETE FROM  contact WHERE id='$cek[$i]'");
} 
header("location:".MY_ADMIN."mailbox/?reff=2");// sukses 
}} ?>




<?PHP if (isset($_POST['pesanbaru'])) {// pesan baru
$refid = strip_tags(trim($_REQUEST['refid']));
$nama = strip_tags(trim($_POST['nama']));
$email  = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);  //email tujuan 
$subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);   //judul email 
$mail_message = strip_tags(trim($_POST['mail_message']));
$datetime=date("h:i:s-j-M-Y");
$chars="0123456789ABCDEFG"; $panjang='5'; $len=strlen($chars); $start=$len-$panjang; $xx=rand('0',$start); 
$yy=str_shuffle($chars); $kode=substr($yy, $xx, $panjang);

//$to_Email = "no-reply@s-widodo.com"; //Replace with recipient email address
if(strlen($subject)<4) {
header("location:".MY_ADMIN."mailbox/?reff=3");// subject harus diisi
		exit();}
	
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
header("location:".MY_ADMIN."mailbox/reff=4");// email salah
exit();}

if (empty($mail_message)){
header("location:".MY_ADMIN."mailbox/?reff=5");// gak boleh kosong
exit();}

//proceed with PHP email.

$header = "MIME-Version: 1.0" . "\r\n";
$header .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$header .= 'From: '.$title_web.'<'.$sett_email.'>'. "\r\n";
$header .= 'Cc: <'.$sett_email.'>' . "\r\n";

$judul_email  = "Permintaan Katasandi Baru";
$mail_message="From : $nama<br />".$mail_message."<br><br>Salam Kami <br>".title_web."<br>Pesan No Reply</br>";


//$sentMail = mail($email, $subject, $mail_message .'  -'.$nama, $headers);
$sentMail = mail($email,$subject,$mail_message,$headers);


if(!$sentMail) {
header("location:".MY_ADMIN."mailbox/?reff=6");// email gak kekirim
exit();}
else{
header("location:".MY_ADMIN."mailbox/?reff=7&message=Send Message To : ".$nama." Success..!");// email sukses kekirim
$sentMail;}} ?>


<?PHP if (isset($_POST['pesanreply'])) {
$refid = strip_tags(trim($_REQUEST['refid']));
$kode = strip_tags(trim($_REQUEST['refid']));
$nama = strip_tags(trim($_POST['nama']));
$email  = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);  //email tujuan 
$subject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);   //judul email 
$mail_message = strip_tags(trim($_POST['mail_message']));
$datetime=date("h:i:s-j-M-Y");

$to_Email = "no-reply@s-widodo.com"; //Replace with recipient email address
if(strlen($subject) <4) {
header("location:".MY_ADMIN."mailbox/?refid=".$refid."&reff=3");// subject harus diisi
		exit();}
	
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
header("location:".MY_ADMIN."mailbox/?refid=".$refid."&reff=4");// email salah
exit();}

if (empty($mail_message)){
header("location:".MY_ADMIN."mailbox/?refid=".$refid."&reff=5");// gak boleh kosong
}

//proceed with PHP email.
$header = "MIME-Version: 1.0" . "\r\n";
$header .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$header .= 'From: '.$title_web.'<'.$sett_email.'>'. "\r\n";
$header .= 'Cc: <'.$sett_email.'>' . "\r\n";

$mail_message="From : $nama<br>".$mail_message."<br><br>Salam Kami <br>".$title_web."<br>Pesan No Reply</br>";

//$sentMail = mail($email, $subject, $mail_message .'  -'.$nama, $headers);
$sentMail = mail($email,$subject,$mail_message,$headers);
if(!$sentMail) {
header("location:".MY_ADMIN."mailbox/?refid=".$refid."&reff=6");// email gak kekirim
}
else{
header("location:".MY_ADMIN."mailbox/?reff=7&message=Send Message To : ".$nama." Success..!");// email sukses kekirim
$sentMail;
}} ?>



<?PHP $act=$_GET['act'];//UNTUK MENHAPUS 
$refid = $_REQUEST['refid']; if ($act=='delete'){
if (empty($refid)){
header("location:".MY_ADMIN."mailbox/?reff=8");//error
exit();}
$sql = mysql_query("delete from contact where kode='$refid'") or die (mysql_error());
header("location:".MY_ADMIN."mailbox/?reff=9"); }?>


<?PHP  if (isset($_POST['setemail'])) {// setting contact
$sett_email= strip_tags(trim($_POST['sett_email']));
if (!empty($sett_email)){
$ini_value = get_parse_ini($ini_file);
$ini_value['config']['sett_email'] = $sett_email;
put_ini_file("$ini_file", $ini_value, $i = 0);
if ($sql){
header("location:".MY_ADMIN."mailbox/?reff=8");// error
}
else{
header("location:".MY_ADMIN."mailbox/?reff=9");// sukses
}
}
else{
header("location:".MY_ADMIN."mailbox/?reff=10");// emty
}}

?>

<!doctype html><html lang="en"><head><title>Proses Mailbox</title><meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no"></head><body>
<h2>Sorry script is not running..</h2>
<h3 style="text-align:left;font-family:Arial, Helvetica, sans-serif;font-size:25px; cursor:pointer" onClick="window.history.back()">Go Back</h3></body></html>