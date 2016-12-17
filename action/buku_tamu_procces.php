<?PHP if (isset($_POST['add_buku_tamu'])) {
include("../lib/replace_character.mgb"); date_default_timezone_set("Asia/Jakarta");

$error = array();
if (empty($_POST['nama_buku_tamu'])) {//if no name has been supplied 
$error[] = 'Nama tidak boleh kosong';
} else {$nama_buku_tamu=trim(strip_tags(mysql_real_escape_string($_POST['nama_buku_tamu'])));
 }

$email_buku_tamu = trim(strip_tags($_POST['email_buku_tamu']));
if (!filter_var($email_buku_tamu, FILTER_VALIDATE_EMAIL)) {
$error[] = 'Alamat Email yang anda masukkan salah';
} else {
$email_buku_tamu = mysql_real_escape_string(trim(strip_tags($_POST['email_buku_tamu'])));
 }

if (empty($_POST['pesan_buku_tamu'])) {
$error[] = 'Pesan Buku Tamu tidak boleh kosong';
} else {
$pesan_buku_tamu =trim(strip_tags(mysql_real_escape_string($_POST['pesan_buku_tamu'])));
 }

$status ='draft';
$date_buku_tamu = date('g:i: A / d-m-Y');

	
if (empty($error)) { 
if ($_POST['captcha'] == $_SESSION['cap_code']) {
$sql=mysql_query("insert into buku_tamu values('','$nama_buku_tamu', '$email_buku_tamu', '$pesan_buku_tamu', '$date_buku_tamu', '$status')") or die (mysql_error());
if(!$sql)  { 
echo '<div class="alert alert-danger alert-dissmisabble"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Maaf Submit Buku Tamu tidak berhasil Dikirim silahkan cobalagi..!</div>';//ERROR
} else   {

echo '<div class="alert alert-success alert-dissmisabble"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Submit Buku Tamu berhasil dikirim</div>';

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
unset($_POST['add_buku_tamu']);}
?>