<?PHP if (isset($_POST['add_alumni'])) {
include("../lib/replace_character.mgb"); date_default_timezone_set("Asia/Jakarta");
// ========SESSION=======================================
$jurusan_alumni= addslashes(trim(strip_tags($_POST['jurusan'])));
$_SESSION['jurusan']=$jurusan_alumni;
//=======================================================
$nama_alumni= addslashes(trim(strip_tags($_POST['nama'])));
$_SESSION['nama']=$nama_alumni;
//=========================================================
$jenis_kelami=trim(strip_tags($_POST['jenis_kelamin']));
 $_SESSION['jenis_kelamin']=$jenis_kelamin;
//=======================================================
$tempat_lahir=trim(strip_tags($_POST['tempat_lahir']));
$_SESSION['tempat_lahir']=$tempat_lahir;
//=======================================================
$tanggal_lahir=trim(strip_tags($_POST['tanggal_lahir']));
$_SESSION['tanggal_lahir']=$tanggal_lahir;
//=========================================================
$alamat=mysql_real_escape_string(strip_tags(trim($_POST['alamat'])));
$_SESSION['alamat']=$alamat;
//=========================================================
$no_hp=trim(strip_tags($_POST['no_hp']));
$_SESSION['no_hp']=$no_hp;
//=========================================================
$pin=trim(strip_tags($_POST['pin']));
$_SESSION['pin']=$pin;
//=========================================================
$email=trim(strip_tags($_POST['email']));
$_SESSION['email']=$email;
//=========================================================
$agama=trim(strip_tags($_POST['agama']));
$_SESSION['agama']=$agama;
//=========================================================
$tahun_lulus=trim(strip_tags($_POST['tahun_lulus']));
$_SESSION['tahun_lulus']=$tahun_lulus;
//============================================================
$status=trim(strip_tags($_POST['status']));
$_SESSION['status']=$status;
//============================================================
$nama_instansi=trim(strip_tags($_POST['nama_instansi']));
$_SESSION['nama_instansi']=$nama_instansi;
//============================================================
$alamat_instansi=mysql_real_escape_string(strip_tags(trim($_POST['alamat_instansi'])));
$_SESSION['alamat_instansi']=$alamat_instansi;
//===========================================================================

$error = array();
if (empty($_POST['jurusan'])) {//if no name has been supplied 
$error[] = 'Jurusan tidak boleh kosong';
} else {$jurusan=trim(strip_tags($_POST['jurusan']));
 }

if (empty($_POST['nama'])) {
$error[] = 'Nama Tidak Boleh kosong';//add to array "error"
} else {
$nama = trim(strip_tags($_POST['nama']));
 }
 
if (empty($_POST['jenis_kelamin'])) {
$error[] = 'Jenis_kelamin Tidak Boleh kosong';
} else {
$jenis_kelamin= trim(strip_tags($_POST['jenis_kelamin']));
 }

if (empty($_POST['tempat_lahir'])) { 
$error[] = 'Tempat Lahir Tidak Boleh kosong';
} else {
$tempat_lahir = trim(strip_tags($_POST['tempat_lahir']));
 }

if (empty($_POST['tanggal_lahir'])) {
$error[] = 'Tanggal Lahir Tidak tidak boleh kosong';
} else {$tanggal_lahir=trim(strip_tags($_POST['tanggal_lahir'])); }
 
 
  if (empty($_POST['alamat'])) {
$error[] = 'Alamat tidak boleh kosong';
} else {
$alamat= mysql_real_escape_string(trim(strip_tags($_POST['alamat'])));
 }
 
 if (empty($_POST['no_hp'])) {
$error[] = 'No Telepon tidak boleh kosong';
} else {
$nama= strip_tags(trim($_POST['nama']));
 }

if (empty($_POST['pin'])) {
$error[] = 'Pin tidak boleh kosong';
} else {
$pin=trim(strip_tags($_POST['pin']));
 }
 
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$error[] = 'Alamat Email yang anda masukkan salah';
} else {
$email = trim(strip_tags($_POST['email']));
 }

if (empty($_POST['agama'])) {
$error[] = 'Agama tidak boleh kosong';
} else {
$agama=trim(strip_tags($_POST['agama']));
 }


 
if (empty($_POST['tahun_lulus'])) {
$error[] = 'Tahun Lulus tidak boleh kosong';
} else {
$tahun_lulus=trim(strip_tags($_POST['tahun_lulus']));
 }

$date_submit = date('d-m-Y');

$chars="123456789AbHjdKdE"; $panjang='10'; $len=strlen($chars);$start=$len-$panjang; $xx=rand('0',$start);$yy=str_shuffle($chars); 
$kode_alumni=substr($yy, $xx, $panjang);

$foto_alumni= $_FILES["foto_alumni"]["name"];
$lokasi_file = $_FILES['foto_alumni']['tmp_name'];  
$ukuran_file = $_FILES['foto_alumni']['size'];
$foto_alumni = strtolower(preg_replace("/\s+/", "".$kode_alumni."", $foto_alumni));

$MAX_FILE_SIZE = 80000; //60kb

$typeGambar = array('image/bmp', 'image/gif', 'image/jpg', 'image/jpeg', 'image/png');
if(!in_array($_FILES['foto_alumni']['type'],$typeGambar)){  
$error[] = 'Upload Gambar Gagal, Format gambar bmp, gif, jpg, jpeg, png...!';}

//cek apakah ukuran file diatas 50kb 
if($ukuran_file > $MAX_FILE_SIZE) {
$error[] = 'Upload Gambar gagal, maxsimal ukuran gambar 60 KB..!';
	exit(); }	
	
if (empty($error)) { 
if ($_POST['captcha'] == $_SESSION['cap_code']) {
 move_uploaded_file($lokasi_file, "../images/alumni/".$foto_alumni);
$sql=mysql_query("insert into alumni values('','$ref_id_member', '$kode_alumni', '$jurusan', '$nama', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$no_hp', '$pin', '$email', '$agama', '$tahun_lulus', '$status', '$nama_instansi', '$alamat_instansi', '$foto_alumni', '$date_submit', '$status_publish')") or die (mysql_error());
if(!$sql)  { 
echo '<div class="alert alert-danger alert-dissmisabble"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Maaf Submit data alumni siswa anda tidak berhasil Dikirim silahkan cobalagi..!</div>';//ERROR
} else   {

echo '<div class="alert alert-success alert-dissmisabble"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Submit data alumni siswa berhasil dikirim</div>';




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
unset($_POST['addalumi']);}
?>