<?PHP session_start();include ('../../../config.php'); include ('../../privat/activasi-login.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<?PHP include"../../head.php";?>
<style type="text/css">
	.images_siswa {width: 120px; height:120px ; margin:auto; }
	.images_siswa img {width: 120px; height: 120px;}
</style>
</head><body>
<?PHP include"../../in/header.php";?>
<div id="contentwrapper"><div class="main_content">
<nav>
<div id="jCrumbs" class="breadCrumb module">
<ul>
<li><a href="<?PHP echo MY_ADMIN?>"><i class="icon-home"></i></a></li>
<li>Data Alumni </li>
</ul>
</div></nav>
<?php  if (!empty($_GET['reff'])) { if ($_GET['reff'] == 1) { echo '<div class="alert alert-error">Id not Found...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 2) { echo '<div class="alert alert-error">Delete Data Alumni Error...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';} 
else if ($_GET['reff'] == 3) { echo '<div class="alert alert-success">Delete Data Alumni success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}}?>

<div class="row-fluid">
<div class="span12">
<h3 class="heading">Data Alumni</h3>
<?PHP if(!empty($_GET['refid'])){
$refid = mysql_real_escape_string($_GET['refid']);
$query = mysql_query("select * from alumni where id_alumni='$refid'") or die (mysql_error());
while($post_alumni=mysql_fetch_array($query)){
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
	$foto_alumni = strip_tags($post_alumni['foto_alumni']);?>

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

<div class="form-actions">
<button type="button" onClick="window.history.back(-1)" class="btn btn-large"><i class="icon-reply"></i> Back</button></div>
</div>
 
<?PHP }} else {?>

<table width="100%" class="table table-bordered table-striped table_vam" id="datapost">
<thead>
<tr>
<th width="32">No</th>
<th width="249">Nama</th>
<th width="220">Jenis Kelamin</th>
<th width="210">Jurusan</th>
<th width="128" align="center">Tahun Lulus</th>
<th width="108">Actions</th>
</tr></thead><tbody>
<?php $sql= mysql_query("select * from alumni order by alumni.id_alumni") or die(mysql_error() );$no=0;
while($data_alumni= mysql_fetch_array($sql)){$no++;
	$refid = strip_tags($data_alumni['id_alumni']);
	$nama_alumni = strip_tags($data_alumni['nama']);
	$jenis_kelamin= strip_tags($data_alumni['jenis_kelamin']);
	$jurusan = strip_tags($data_alumni['jurusan']);
	$tahun_lulus = strip_tags($data_alumni['tahun_lulus']);
?>
<tr>
<td><?PHP echo $no;?></td>
<td><?PHP echo $nama_alumni;?></td>
<td><?PHP echo $jenis_kelamin;?></td>
<td><?PHP echo $jurusan;?></td>
<td align="center"><?PHP echo $tahun_lulus;?></td>
<td>
<a href="<?PHP echo MY_ADMIN?>data-alumni/?refid=<?PHP echo $refid;?>"><button class="btn btn-mini btn-warning ttip_t" title="View Alumni"><i class="icon-zoom-in"></i></button></a>

<a href="<?PHP echo MY_ADMIN?>alumni-proses/?refid=<?php echo $refid;?>&amp;action=delete" onClick="return confirm('Are you sure you want ot delete this thread.?');"><button class="btn btn-mini btn-danger ttip_t" title="Delete"><i class="icon-trash"></i></button></a></td></tr><?PHP }?>
</tbody></table>
<?PHP }?>
</div></div>
							
</div></div>


<!-- sidebar -->
<?PHP include"../../in/panel.php";?> 
<?PHP include"../../head-js.php";?>
<link rel="stylesheet" type="text/css" href="<?PHP echo MY_ADMIN?>lib/datatables/jquery.dataTables.css">
<script src="<?PHP echo MY_ADMIN?>lib/datatables/jquery.dataTables.min.js"></script>
<script src="<?PHP echo MY_ADMIN?>lib/datatables/dataTables.bootstrap.js"></script>
<script src="<?PHP echo MY_ADMIN?>lib/colorbox/jquery.colorbox.min.js"></script>
</div></div>
</body></html>