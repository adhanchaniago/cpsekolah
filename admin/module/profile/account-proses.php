<?PHP session_start();include ('../../../config.php');include ('../privat/activasi-login.php');
date_default_timezone_set("Asia/Jakarta"); include ('../../in/anti_sql_injection.php');?>

<?PHP if (isset($_POST['gantiprofile'])) {
$refid_admin=htmlentities(trim(strip_tags($_GET['refid_admin'])));
$error = array();
if (empty($_POST['nama'])) {//if no name has been supplied 
$error[] = 'Nama Iklan Tidak Boleh Kosong';//add to array "error"
} else {
$nama=htmlentities(trim(strip_tags(mysql_real_escape_string($_POST['nama']))));//else assign it a variable
 }

if (empty($_POST['no_hp'])) {//if no name has been supplied 
$error[] = '';//add to array "error"
} else {
$no_hp=htmlentities(trim(strip_tags(mysql_real_escape_string($_POST['no_hp']))));//else assign it a variable
 }


$email = strip_tags($_POST['email']);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
header("location:".MY_ADMIN."account/?reff=mail");// error
} else {
$email=htmlentities(trim(strip_tags(mysql_real_escape_string($_POST['email']))));//else assign it a variable
 }
 


if (empty($_POST['alamat'])) {//if no name has been supplied 
$error[] = '';//add to array "error"
} else {
$alamat=trim(strip_tags(mysql_real_escape_string($_POST['alamat'])));//else assign it a variable
 }
 $tgl_akhir= date("h:i A - d-m-Y");
 $ip=$_SERVER['REMOTE_ADDR'];
 
$avatar = $_FILES["avatar"]["name"];
$lokasi_file = $_FILES['avatar']['tmp_name'];  
$ukuran_file = $_FILES['avatar']['size'];
$chars="0123456789"; $panjang='10'; $len=strlen($chars); 
$start=$len-$panjang; $xx=rand('0',$start); 
$yy=str_shuffle($chars); $base=substr($yy, $xx, $panjang);
$avatar = strtolower(preg_replace("/\s+/", "".$base."", $avatar));

$MAX_FILE_SIZE = 50000; //50kb

if($avatar == ""){
if (empty($error)) { 
$edit=mysql_query("UPDATE admin_web SET nama='$nama',no_hp='$no_hp',email='$email',alamat='$alamat',tgl_akhir='$tgl_akhir',ip='$ip' WHERE refid_admin='$refid_admin'")or die (mysql_error());
		if(!$edit){ 
header("location:".MY_ADMIN."account/?reff=1");// error

}else{ header("location:".MY_ADMIN."account/?reff=2");// berhasill disimpan
}}
else{ 
foreach ($error as $key => $values) {            
header("location:".MY_ADMIN."account/?reff=3");// emty
}}
}

else{
$cari= mysql_query("select * from admin_web where refid_admin='$refid_admin'");
$data=mysql_fetch_array($cari);
$$avatar = $data['$avatar'];
$tmpfile = "".$lokasi_file."../../img/avatar/".$avatar;
unlink ($tmpfile);

$typeGambar = array('image/bmp', 'image/gif', 'image/jpg', 'image/jpeg', 'image/png');
if(!in_array($_FILES['avatar']['type'],$typeGambar)){  
header("location:".MY_ADMIN."account/?reff=images1");// error type
}

//cek apakah ukuran file diatas 50kb 
if($ukuran_file > $MAX_FILE_SIZE) {
header("location:".MY_ADMIN."account/?reff=images2");// GAMBAR ERROR size
	exit(); }
	
move_uploaded_file($lokasi_file, "../../img/avatar/".$avatar);
$edit2=mysql_query("UPDATE admin_web SET nama='$nama',no_hp='$no_hp',email='$email',alamat='$alamat',avatar='$avatar',tgl_akhir='$tgl_akhir',ip='$ip' WHERE refid_admin='$refid_admin'")or die (mysql_error());
if(!$edit2) { 
header("location:".MY_ADMIN."account/?reff=1");//error
} else   {
header("location:".MY_ADMIN."account/?reff=2");//success
} } 
}	

?>


<?PHP if (isset($_POST['setaccount'])) {
$refid_admin=htmlentities(trim(strip_tags($_GET['refid_admin'])));
$error = array();
if (empty($_POST['user_name'])) {//if no name has been supplied 
$error[] = '';//add to array "error"
} else {
$user_name= strip_tags($_POST['user_name']);
 }
	
if (empty($_POST['pass'])) {//if no name has been supplied 
$error[] = '';//add to array "error"
} else {
$salt = '$%DSuTyr47542@#&*!=QxR094{a911}+';
$pass = mysql_real_escape_string(hash('sha256',$salt.$_POST['pass']));
 }
 
if(strlen($pass) <4) {
header("location:".MY_ADMIN."account/?reff=4");// min4 arakter
exit();}

$tgl_akhir= date("h:i A - d-m-Y");
 $ip=$_SERVER['REMOTE_ADDR'];
if (empty($error)) {

$edit=mysql_query("UPDATE admin_web SET user_name='$user_name',pass='$pass',tgl_akhir='$tgl_akhir' WHERE refid_admin='$refid_admin'");
if($edit){ 
header("location:".MY_PATH."");// sukses
//echo'<script language="javascript">history.go(1);';
session_destroy();
unset($_SESSION['username']);
unset($_SESSION['id_admin']);
}
else{ header("location:".MY_ADMIN."account/?reff=6");// error
}}
else{ 
foreach ($error as $key => $values) {            
header("location:".MY_ADMIN."account/?reff=3");// emty
}}}

?>

<!doctype html><html lang="en"><head><title>Proses account</title><meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no"></head><body>
<h2>Sorry script is not running..</h2>
<h3 style="text-align:left;font-family:Arial, Helvetica, sans-serif;font-size:25px; cursor:pointer" onClick="window.history.back()">Go Back</h3></body></html>