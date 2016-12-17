<?PHP session_start();include ('../../../config.php'); include ('../../privat/activasi-login.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<?PHP include"../../head.php";?></head><body>
<?PHP include"../../in/header.php";?>
<!-- main content -->
<div id="contentwrapper"><div class="main_content"><nav>
<div id="jCrumbs" class="breadCrumb module"><ul>
<li><a href="<?PHP echo MY_ADMIN?>"><i class="icon-home"></i></a></li>
<li>Post Article </li>
<li>Publish</li></ul>
</div></nav>
    <?php  if (!empty($_GET['reff'])) { if ($_GET['reff'] == 1) { echo '<div class="alert alert-success">Update Data Guru Success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 2) { echo '<div class="alert alert-error">Delete Data Guru Error...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';} 
else if ($_GET['reff'] == 3) { echo '<div class="alert alert-success">Delete Data Guru Success...!</div>';}}
else if ($_GET['reff'] == 4) { echo '<div class="alert alert-success">Submit Data Guru Seccess..!</div>';}
?>
    <div class="row-fluid">
<div class="span12">
<h3 class="heading">Data Guru
  <button type="button" onClick="location.href='<?PHP echo MY_ADMIN?>new/guru';" class="btn btn-primary btn-small float-right"><i class="icon-plus"></i> New Data Guru</button>
</h3>
<table width="100%" class="table table-bordered table-striped table_vam" id="datapost">
<thead>
<tr>
<th width="327">Name</th>
<th width="186">Nip</th>
<th width="167" align="center">Jenis Kelamin</th>
<th width="142">Jabatan</th>
<th width="129">Actions</th>
</tr></thead><tbody>
<?php $sql=mysql_query("select * from guru order by guru.id_guru desc");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++;
$refid= strip_tags($datapost['id_guru']);
$nama = strip_tags(substr($datapost['nama'],0,28));
$nip = strip_tags($datapost['nip']);
$jenis_kelamin = strip_tags($datapost['jenis_kelamin']);
$jabatan = strip_tags($datapost['jabatan']);
$link_guru ="".MY_PATH."anggota/view/".strip_tags($datapost['link_guru']).".html";
?>
<tr>
<td><span class="ttip_r" title="<?PHP echo $nama;?>"><?PHP echo $nama;?>..</span></td>
<td><?PHP echo $nip;?></td>
<td align="center"><?PHP echo $jenis_kelamin;?></td>
<td align="center"><?PHP echo $jabatan;?></td>
<td>
<a href="<?PHP echo $link_guru;?>" target="_blank"><button class="btn btn-mini btn-warning ttip_t" title="View Guru"><i class="icon-zoom-in"></i></button></a>

<a href="<?PHP echo MY_ADMIN?>edit/guru/?refid=<?PHP echo $refid;?>" target="_self">
<button class="btn btn-mini btn-primary ttip_t" title="Edit"><i class="icon-pencil"></i></button></a>
<a href="<?PHP echo MY_ADMIN?>guru-proses/?refid=<?php echo $refid;?>&amp;action=delete" onClick="return confirm('Are you sure you want ot delete this thread.?');"><button class="btn btn-mini btn-danger ttip_t" title="Delete"><i class="icon-trash"></i></button></a></td></tr><?PHP }?></tbody></table>
</div></div>
							
</div></div>

</div></div></div></div>

<!-- sidebar -->
<?PHP include"../../in/panel.php";?> 
<?PHP include"../../head-js.php";?>
<link rel="stylesheet" type="text/css" href="<?PHP echo MY_ADMIN?>lib/datatables/jquery.dataTables.css">
<script src="<?PHP echo MY_ADMIN?>lib/datatables/jquery.dataTables.min.js"></script>
<script src="<?PHP echo MY_ADMIN?>lib/datatables/dataTables.bootstrap.js"></script>
<script src="<?PHP echo MY_ADMIN?>lib/colorbox/jquery.colorbox.min.js"></script>
</div></div>
</body></html>