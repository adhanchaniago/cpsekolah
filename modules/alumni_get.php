<?php 
include ('../config.php');
 include('../lib/ini.lib.php');
$config = get_parse_ini('../lib/config.ini.php');
include "../lib/ini.php";
$kode_alumni= mysql_real_escape_string(htmlentities($_GET['kode_alumni']));
$sql_get=mysql_query("select * from alumni where kode_alumni='$kode_alumni'");
$cari=mysql_fetch_array($sql_get);
$nama_alumni =trim(strip_tags($cari['nama']));
$keyword = trim(strip_tags($cari['keyword']));?>

<!DOCTYPE html><html lang="id"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?PHP if ($nama_alumni == ''){echo"Halaman Tidak Ditemukan | ".$title_web."";}else{ echo"".$nama_alumni." | ".$title_web."";}?></title>
<meta name="description" content="<?PHP echo $keyword_web;?>" />
<meta name="keywords" content="<?PHP echo $keyword_web;?>" />
<meta name="author" content="<?PHP echo $admin_web;?>" />

<meta property="og:title" content="<?PHP echo $nama_alumni;?> | <?PHP echo $title_web;?>">
<meta property="og:type" content="article">
<meta property="og:url" content="http://<?php echo $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];?>">
<meta property="og:image" content="">
<meta property="og:site_name" content="<?PHP echo $title_web;?>">
<meta property="og:description" content="<?PHP echo $keyword_web;?>">
<?PHP include "../lib/meta_tag.php";?>
<?PHP include "../head.php";?>

</head><body>
<!--Start Wrapper-->
<section class="wrapper">
<?PHP include"../lib/header.php";?>
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-8 margin-top-29">
<?PHP  if($kode_alumni!= ''){
$alumni=mysql_query("select * from alumni where kode_alumni='$kode_alumni'");
$cekdata=mysql_num_rows($alumni); 
if($cekdata!=0){
	while($post_alumni=mysql_fetch_array($alumni)){
	$jurusan= strip_tags($post_alumni['jurusan']);
	$nama_alumni= strip_tags($post_alumni['nama']);
	$jenis_kelamin = strip_tags($post_alumni['jenis_kelamin']);
	$tempat_lahir = strip_tags($post_alumni['tempat_lahir']);
	$tanggal_lahir = strip_tags($post_alumni['tanggal_lahir']);
	$alamat_alumni = strip_tags($post_alumni['alamat']);
	$no_hp_alumni = strip_tags($post_alumni['no_hp']);
	$pin_alumni = strip_tags($post_alumni['pin']);
	$email_alumni = strip_tags($post_alumni['email']);
	$agama_alumni = strip_tags($post_alumni['agama']);
	$tahun_lulus = strip_tags($post_alumni['tahun_lulus']);
	$status = strip_tags($post_alumni['status']);
	$nama_instansi = strip_tags($post_alumni['nama_instansi']);
	$alamat_instansi = strip_tags($post_alumni['alamat_instansi']);
	$foto_alumni = strip_tags($post_alumni['foto_alumni']);

?>
<article class="post_container">
<a href="#"><h3>Data : <?PHP echo $nama_alumni;?></h3></a>
<div class="post_agenda">
<table width="100%" class="table table-striped table-bordered table-hover">
<tr>
<td width="14%" rowspan="3"><div class="images_siswa">
<?PHP if($foto_alumni==''){?>
<img src="<?PHP echo MY_PATH;?>img/avatar.jpg"/><?PHP } else {?>
<img src="<?PHP echo MY_PATH?>images/alumni/<?PHP echo $foto_alumni;?>"/><?PHP }?>
</div></td>
<td width="22%">Nama</td>
<td width="64%"><?PHP echo $nama_alumni;?></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td><?PHP echo $jenis_kelamin;?></td>
</tr>
<tr>
<td>Tahun Lulus </td>
<td><?PHP echo $tahun_lulus;?></td>
</tr>
<tr>
<td>Jurusan </td>
<td colspan="2"><?PHP echo $jurusan;?></td>
</tr>
<tr>
  <td>Tempat lahir </td>
  <td colspan="2"><?PHP echo $tempat_lahir;?></td>
</tr>
<tr>
  <td>Tanggal Lahir </td>
  <td colspan="2"><?PHP echo $tanggal_lahir;?></td>
</tr>
<tr>
  <td>Agama</td>
  <td colspan="2"><?PHP echo $agama_alumni;?></td>
</tr>
<tr>
  <td>Alamat</td>
  <td colspan="2"><?PHP echo $alamat_alumni;?></td>
</tr>
<tr>
  <td>No HP  </td>
  <td colspan="2"><?PHP echo $no_hp_alumni;?></td>
</tr>
<tr>
  <td>Pin BB </td>
  <td colspan="2"><?PHP echo $pin_alumni;?></td>
</tr>
<tr>
  <td>Email</td>
  <td colspan="2"><?PHP echo $email_alumni;?></td>
</tr>
<tr>
  <td>Status</td>
  <td colspan="2"><?PHP echo $status;?></td>
</tr>
<tr>
  <td>Nama Instansi </td>
  <td colspan="2"><?PHP echo $nama_instansi;?></td>
</tr>
<tr>
  <td>Alamat Instansi </td>
  <td colspan="2"><?PHP echo $alamat_instansi;?></td>
</tr>
</table>  

</div>
</article>
<hr>
<a href="<?PHP echo MY_PATH?>data-alumni/"><button class="btn btn-info btn-small"><i class="icon-hand-left"></i> Ke Data Alumni</button></a>
<a href="<?PHP echo MY_PATH?>submit/alumni/"><button class="btn btn-warning btn-small"><i class="icon-plus"></i> Tambah Alumni</button></a>
<?PHP include"../lib/share.php";?>
<?PHP }} else {include'../lib/not_found.php';}}?>
</div>

<?PHP include"../lib/sidebar.php";?>
</div></div>

<?PHP include"../lib/footer.php";?>
</section>
<?PHP include"../js.php";?>

</body>
</html>
