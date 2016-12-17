<?PHP session_start();
$config_='aW5jbHVkZSAoJy4uLy4uLy4uL2NvbmZpZy5waHAnKTsNCmluY2x1ZGUgKCcuLi8uLi9wcml2YXQvYWN0aXZhc2ktbG9naW4ucGhwJyk7ICAgDQppbmNsdWRlKCIuLi8uLi9pbi9yZXBsYWNlX2NoYXJhY3Rlci5waHAiKTs=';
eval(base64_decode($config_));?>


<?PHP if (isset($_POST['add_guru'])) {
// ========SESSION=======================================
$nama= addslashes(trim(strip_tags($_POST['nama'])));
$_SESSION['nama']=$nama;
//=======================================================
$nama_alumni= addslashes(trim(strip_tags($_POST['nama'])));
$_SESSION['nip']=$jenis_kelamin;
//=========================================================
$ttl=trim(strip_tags($_POST['ttl']));
 $_SESSION['ttl']=$ttl;
//=======================================================
$alamat=trim(strip_tags($_POST['alamat']));
$_SESSION['alamat']=$alamat;
//=======================================================
$agama=trim(strip_tags($_POST['agama']));
$_SESSION['agama']=$agama;
//=========================================================
$pendidikan_akhir=mysql_real_escape_string(strip_tags(trim($_POST['pendidikan_akhir'])));
$_SESSION['pendidikan_akhir']=$pendidikan_akhir;
//=========================================================
$jabatan=trim(strip_tags($_POST['jabatan']));
$_SESSION['jabatan']=$jabatan;
//=========================================================
$perangkat=trim(strip_tags($_POST['perangkat']));
$_SESSION['perangkat']=$perangkat;
//=========================================================

//===========================================================================

$error = array();
if (empty($_POST['nama'])) {//if no name has been supplied 
$error[] = 'Nama tidak boleh kosong';
} else {$nama=trim(strip_tags($_POST['nama']));
 }

if (empty($_POST['nip'])) {
$error[] = 'Nip Tidak Boleh kosong';//add to array "error"
} else {
$nip = trim(strip_tags($_POST['nip']));
 }
 
if (empty($_POST['jenis_kelamin'])) {
$error[] = 'Jenis Kelamin Tidak Boleh kosong';
} else {
$jenis_kelamin= trim(strip_tags($_POST['jenis_kelamin']));
 }

if (empty($_POST['ttl'])) { 
$error[] = 'Tempat Tanggal Lahir Tidak Boleh kosong';
} else {
$ttl= trim(strip_tags($_POST['ttl']));
 }

 
  if (empty($_POST['alamat'])) {
$error[] = 'Alamat tidak boleh kosong';
} else {
$alamat= mysql_real_escape_string(trim(strip_tags($_POST['alamat'])));
 }
 
 if (empty($_POST['agama'])) {
$error[] = 'Agama tidak boleh kosong';
} else {
$agama= strip_tags(trim($_POST['agama']));
 }

if (empty($_POST['pendidikan_akhir'])) {
$error[] = 'Pendidikan Terakhir tidak boleh kosong';
} else {
$pendidikan_akhir=trim(strip_tags($_POST['pendidikan_akhir']));
 }
 


if (empty($_POST['jabatan'])) {
$error[] = 'Jabatan tidak boleh kosong';
} else {
$jabatan=trim(strip_tags($_POST['jabatan']));
 }


 
if (empty($_POST['perangkat'])) {
$error[] = 'Perangkat tidak boleh kosong';
} else {
$perangkat=trim(strip_tags($_POST['perangkat']));
 }


$link_guru= strtolower($nama);
$link_guru = str_replace(' ', '-', $link_guru);
$link_guru = replace_character($link_guru);
$link_guru = str_replace("-----", "-", $link_guru);
$link_guru = str_replace("---", "-", $link_guru);
$link_guru = str_replace("--", "-", $link_guru);

//$date_submit = date('d-m-Y');


$chars="123456789AbHjdKdE"; $panjang='10'; $len=strlen($chars);$start=$len-$panjang; $xx=rand('0',$start);$yy=str_shuffle($chars); 
$kode=substr($yy, $xx, $panjang);

$gambar= $_FILES["gambar"]["name"];
$lokasi_file = $_FILES['gambar']['tmp_name'];  
$ukuran_file = $_FILES['gambar']['size'];
$gambar= strtolower(preg_replace("/\s+/", "".$kode."", $gambar));

$MAX_FILE_SIZE = 80000; //60kb

$typeGambar = array('image/bmp', 'image/gif', 'image/jpg', 'image/jpeg', 'image/png');
if(!in_array($_FILES['gambar']['type'],$typeGambar)){  
$error[] = 'Upload Gambar Gagal, Format gambar bmp, gif, jpg, jpeg, png...!';
header("location:".MY_ADMIN."guru/?error=images00");// FGAMBAR ERROR
}

//cek apakah ukuran file diatas 50kb 
if($ukuran_file > $MAX_FILE_SIZE) {
$error[] = 'Upload Gambar gagal, maxsimal ukuran gambar 80 KB..!';
header("location:".MY_ADMIN."guru/?error=images01");// FGAMBAR ERROR
}	
	
if (empty($error)) { 
 move_uploaded_file($lokasi_file, "../../../images/guru/".$gambar);
$sql=mysql_query("insert into guru values('','$nama', '$link_guru', '$gambar', '$nip', '$jenis_kelamin', '$ttl', '$alamat', '$agama', '$pendidikan_akhir', '$jabatan', '$perangkat')") or die (mysql_error());
if(!$sql)  { 
//echo '<div class="alert alert-danger alert-dissmisabble"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Maaf Submit data alumni siswa anda tidak berhasil Dikirim silahkan cobalagi..!</div>';//ERROR
header("location:".MY_ADMIN."new/guru/?reff=3");// Error
} else   {

//echo '<div class="alert alert-success alert-dissmisabble"><button type="button" class="close" data-dismiss="alert" //aria-hidden="true">&times;</button>Submit data alumni siswa berhasil dikirim</div>';
//echo "<meta http-equiv='refresh' content='3; url=".MY_ADMIN."data-guru/'>";
header("location:".MY_ADMIN."data-guru/?reff=4");


} }
 
else {//echo '<div class="alert alert-danger alert-dissmisabble"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><ul class="list_style circle">';
foreach ($error as $key => $values) {      
header("location:".MY_ADMIN."new/guru/?reff=2");    
//echo '<li><i class="icon-chevron-sign-right"></i> '.$values.'</li>';
}
//echo '</ul></div>';
}
unset($_POST['add_guru']);}
?>





<?PHP  if (!empty($_GET['action'])){
$action = htmlentities($_GET['action']);
$refid= htmlentities($_GET['refid']);
if ($action =='update'){
	$error = array();
if (empty($_POST['nama'])) {//if no name has been supplied 
$error[] = 'Nama tidak boleh kosong';
} else {$nama=trim(strip_tags($_POST['nama']));
 }

if (empty($_POST['nip'])) {
$error[] = 'Nip Tidak Boleh kosong';//add to array "error"
} else {
$nip = trim(strip_tags($_POST['nip']));
 }
 
if (empty($_POST['jenis_kelamin'])) {
$error[] = 'Jenis Kelamin Tidak Boleh kosong';
} else {
$jenis_kelamin= trim(strip_tags($_POST['jenis_kelamin']));
 }

if (empty($_POST['ttl'])) { 
$error[] = 'Tempat Tanggal Lahir Tidak Boleh kosong';
} else {
$ttl= trim(strip_tags($_POST['ttl']));
 }

 
  if (empty($_POST['alamat'])) {
$error[] = 'Alamat tidak boleh kosong';
} else {
$alamat= mysql_real_escape_string(trim(strip_tags($_POST['alamat'])));
 }
 
 if (empty($_POST['agama'])) {
$error[] = 'Agama tidak boleh kosong';
} else {
$agama= strip_tags(trim($_POST['agama']));
 }

if (empty($_POST['pendidikan_akhir'])) {
$error[] = 'Pendidikan Terakhir tidak boleh kosong';
} else {
$pendidikan_akhir=trim(strip_tags($_POST['pendidikan_akhir']));
 }
 


if (empty($_POST['jabatan'])) {
$error[] = 'Jabatan tidak boleh kosong';
} else {
$jabatan=trim(strip_tags($_POST['jabatan']));
 }


 
if (empty($_POST['perangkat'])) {
$error[] = 'Perangkat tidak boleh kosong';
} else {
$perangkat=trim(strip_tags($_POST['perangkat']));
 }


$link_guru= strtolower($nama);
$link_guru = str_replace(' ', '-', $link_guru);
$link_guru = replace_character($link_guru);
$link_guru = str_replace("-----", "-", $link_guru);
$link_guru = str_replace("---", "-", $link_guru);
$link_guru = str_replace("--", "-", $link_guru);

 $chars="0123456789"; $panjang='20'; $len=strlen($chars); 
$start=$len-$panjang; $xx=rand('0',$start); 
$yy=str_shuffle($chars); $ID=substr($yy, $xx, $panjang);

$gambar= $_FILES["gambar"]["name"];
$lokasi_file = $_FILES['gambar']['tmp_name'];  
$ukuran_file = $_FILES['gambar']['size'];

$gambar = strtolower(preg_replace("/\s+/", "".$ID."", $gambar));
$MAX_FILE_SIZE = 90000; //50kb
$typeGambar = array('image/bmp', 'image/gif', 'image/jpg', 'image/jpeg', 'image/png');
if(!in_array($_FILES['gambar']['type'],$typeGambar)){  
header("location:".MY_ADMIN."guru/?refid=".$refid."&images00");// FGAMBAR ERROR
}
//cek apakah ukuran file diatas 60kb 
if($ukuran_file > $MAX_FILE_SIZE) {
header("location:".MY_ADMIN."guru/?refid=".$refid."&images01");// GAMBAR ERROR
}

//$datetime = date('d-m-Y');
	
if($gambar == ""){

if(empty($error)){

//$edit=mysql_query("UPDATE galery SET title='$title',categories='$categories',datetime='$datetime' WHERE id_galery='$refid'");

$query = mysql_query("UPDATE guru SET nama='$nama',link_guru='$link_guru',nip='$nip',jenis_kelamin='$jenis_kelamin',ttl='$ttl',alamat='$alamat',agama='$agama',pendidikan_akhir='$pendidikan_akhir',jabatan='$jabatan',perangkat='$perangkat' where id_guru='$refid'")
 or die (mysql_error());
if(!$query) { 
header("location:".MY_ADMIN."edit/guru/?refid=".$refid."&error=1");// Error
} else   {
header("location:".MY_ADMIN."data-guru/?reff=1");// Sukses
} } 

else{ 
foreach ($error as $key => $values) {            
header("location:".MY_ADMIN."edit/guru/?refid=".$refid."&error=2");// Error all

}}
}

else{
$cari= mysql_query("select * from galery where id_guru='$refid'");
$data=mysql_fetch_array($cari);
$gambar_hapus = strip_tags($data['gambar']);
$tmpfile = "".$lokasi_file."../../../images/guru/".$gambar_hapus;
unlink ($tmpfile);

move_uploaded_file($lokasi_file, "../../../images/guru/".$gambar);
$query = mysql_query("UPDATE guru set nama='$nama', nip='$nip', gambar='$gambar',jenis_kelamin='$jenis_kelamin', ttl='$ttl', alamat='$alamat', agama='$agama', pendidikan_akhir='$pendidikan_akhir', jabatan='$jabatan', perangkat='$perangkat' where id_guru='$refid'")
or die (mysql_error());
 if(!$query) { 
header("location:".MY_ADMIN."edit/guru/?refid=".$refid."&error=1");// Error
} else   {
header("location:".MY_ADMIN."data-guru/?reff=1");//sukses
} } 
}
}?>


<?PHP if(!empty($_GET['action'])){
$refid = htmlentities($_GET['refid']);
$action = htmlentities($_GET['action']);
if ($action =='delete'){
$cari=mysql_query("select * from guru where id_guru='$refid'");
$dt=mysql_fetch_array($cari);
$gambar= strip_tags($dt['gambar']);
$tmpfile = "../../../images/gutu/".$gambar;
$sql=mysql_query("delete from guru where id_guru='$refid'");
	if(!$sql){
header("location:".MY_ADMIN."data-guru/?reff=2");// error delet
	}else{
			unlink ($tmpfile);
header("location:".MY_ADMIN."data-guru/?reff=3");// sukses
	}}}?>

