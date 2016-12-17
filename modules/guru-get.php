<?php 
include ('../config.php');
 include('../lib/ini.lib.php');
$config = get_parse_ini('../lib/config.ini.php');
include "../lib/ini.php";
$link_guru= mysql_real_escape_string(htmlentities($_GET['link_guru']));
$sql_get=mysql_query("select * from guru where link_guru='$link_guru'");
$cari=mysql_fetch_array($sql_get);
$nama_guru =trim(strip_tags($cari['nama']));?>

<!DOCTYPE html><html lang="id"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?PHP if ($nama_guru == ''){echo"Halaman Tidak Ditemukan | ".$title_web."";}else{ echo"".$nama_guru." | ".$title_web."";}?></title>
<meta name="description" content="<?PHP echo $keyword_web;?>" />
<meta name="keywords" content="<?PHP echo $keyword_web;?>" />
<meta name="author" content="<?PHP echo $admin_web;?>" />

<meta property="og:title" content="<?PHP echo $nama_guru;?> | <?PHP echo $title_web;?>">
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
<?PHP  if($link_guru!= ''){
$query_guru = mysql_query("select * from guru where link_guru='$link_guru'") or die(mysql_error());
$cek_data = mysql_num_rows($query_guru);
if ($cek_data !=0){
  while($data_guru=mysql_fetch_array($query_guru)){
    $nama_guru = strip_tags($data_guru['nama']);
    $gambar_guru = strip_tags($data_guru['gambar']);
    $nip = strip_tags($data_guru['nip']);
      $jenis_kelamin = strip_tags($data_guru['jenis_kelamin']);
      $ttl = strip_tags($data_guru['ttl']);
      $alamat = strip_tags($data_guru['alamat']);
      $agama = strip_tags($data_guru['agama']);
      $pendidikan_akhir = strip_tags($data_guru['pendidikan_akhir']);
      $jabatan = strip_tags($data_guru['jabatan']);
      $perangkat = strip_tags($data_guru['jabatan']);

?>
<article class="post_container">
<a href="#"><h3>Data : <?PHP echo $nama_guru;?></h3></a>
<div class="post_agenda">
<table width="100%" class="table table-striped table-bordered table-hover">
<tr>
<td width="24%" rowspan="3"><div class="images_siswa">
<?PHP if($gambar_guru==''){?>
<img src="<?PHP echo MY_PATH;?>img/avatar.jpg"/><?PHP } else {?>
<img src="<?PHP echo MY_PATH?>images/guru/<?PHP echo $gambar_guru;?>"/><?PHP }?>
</div></td>
<td width="12%">Nama</td>
<td width="64%"><?PHP echo $nama_guru;?></td>
</tr>
<tr>
<td>NIP</td>
<td><?PHP echo $nip;?></td>
</tr>
<tr>
<td>Jabatan </td>
<td><?PHP echo $jabatan;?></td>
</tr>
<tr>
  <td>Tempat Tanggal Lahir </td>
  <td colspan="2"><?PHP echo $ttl;?></td>
</tr>
<tr>
  <td>Jenis Kelamin </td>
  <td colspan="2"><?PHP echo $jenis_kelamin;?></td>
</tr>
<tr>
  <td>Agama</td>
  <td colspan="2"><?PHP echo $agama;?></td>
</tr>
<tr>
  <td>Alamat</td>
  <td colspan="2"><?PHP echo $alamat;?></td>
</tr>
<tr>
  <td>Pendidikan Terakhir </td>
  <td colspan="2"><?PHP echo $pendidikan_akhir?></td>
</tr>
<tr>
  <td>Perangkat</td>
  <td colspan="2"><?PHP echo $perangkat;?></td>
</tr>
</table>  

</div>
</article>
<hr>
<a href="<?PHP echo MY_PATH?>anggota/"><button class="btn btn-info btn-small"><i class="icon-hand-left"></i> Kembali</button></a>
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
