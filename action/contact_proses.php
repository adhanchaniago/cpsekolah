<?PHP if (isset($_POST['add_contact'])) {
include("../lib/replace_character.mgb"); date_default_timezone_set("Asia/Jakarta");

$error = array();
if (empty($_POST['nama'])) {//if no name has been supplied 
$error[] = 'Nama tidak boleh kosong';
} else {$nama=trim(strip_tags(mysql_real_escape_string($_POST['nama'])));
 }

if (empty($_POST['subject'])) {//if no name has been supplied 
$error[] = 'Subject tidak boleh kosong';
} else {$subject=trim(strip_tags(mysql_real_escape_string($_POST['subject'])));
 }

$email = trim(strip_tags($_POST['email']));
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$error[] = 'Alamat Email yang anda masukkan salah';
} else {
$email= mysql_real_escape_string(trim(strip_tags($_POST['email'])));
 }

if (empty($_POST['mail_message'])) {
$error[] = 'Pesan tidak boleh kosong';
} else {
$mail_message =trim(strip_tags(mysql_real_escape_string($_POST['mail_message'])));
 }

$status ='Belum Dibaca';
$datetime = date('g:i: A / d-m-Y');
$chars="123456789AbHjdKdE"; $panjang='10'; $len=strlen($chars);$start=$len-$panjang; $xx=rand('0',$start);$yy=str_shuffle($chars); 
$kode=substr($yy, $xx, $panjang);
	
if (empty($error)) { 
if ($_POST['captcha'] == $_SESSION['cap_code']) {
$sql=mysql_query("insert into contact values('','$kode', '$nama', '$subject', '$email', '$mail_message' , '$datetime', '$status')") or die (mysql_error());
if(!$sql)  { 
echo '<div class="alert alert-danger alert-dissmisabble"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Maaf Pesan tidak berhasil Dikirim silahkan cobalagi..!</div>';//ERROR
} else   {

echo '<div class="alert alert-success alert-dissmisabble"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Pesan berhasil dikirim</div>';

} }
 
 else{ echo '<div class="alert alert-danger alert-dissmisabble"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Maaf kode captcha yang anda masukkan salah..!</div>';
 //ERROR

 }   
}

else {echo '<div class="alert alert-danger alert-dissmisabble"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><ul class="list_style circle">';
foreach ($error as $key => $values) {            
echo '<li><i class="icon-chevron-sign-right"></i> '.$values.'</li>';}
echo '</ul></div>';
}
unset($_POST['add_contact']);}
?>