<?PHP session_start();include ('../../../config.php'); include ('../../privat/activasi-login.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<?PHP include"../../head.php";?>
</head>
<body>
<?PHP include"../../in/header.php";?>
<!-- main content -->
<div id="contentwrapper"><div class="main_content"><nav>
<div id="jCrumbs" class="breadCrumb module"><ul><li><a href="<?PHP echo MY_ADMIN?>"><i class="icon-home"></i></a></li>
<li><a href="<?PHP echo MY_ADMIN?>mailbox">Guesbook</a><li></ul></div></nav>
<?php $warning='IGlmICghZW1wdHkoJF9HRVRbJ3JlZmYnXSkpIHsNCiBpZiAoJF9HRVRbJ3JlZmYnXSA9PSAxKSB7IGVjaG8gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LXN1Y2Nlc3MiPkRlbGV0ZSBHdWVzdGJvb2sgU3VjY2Vzcy4uLiENCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj7XPC9idXR0b24+PC9kaXY+Jzt9DQplbHNlIGlmICgkX0dFVFsncmVmZiddID09IDIpIHsgZWNobyAnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZXJyb3IiPkRlbGV0ZSBHdWVzdGJvb2sgZXJyb3IuLi4hDQo8YnV0dG9uIGNsYXNzPSJjbG9zZSIgYXJpYS1oaWRkZW49InRydWUiIGRhdGEtZGlzbWlzcz0iYWxlcnQiIHR5cGU9ImJ1dHRvbiI+1zwvYnV0dG9uPjwvZGl2Pic7fSANCmVsc2UgaWYgKCRfR0VUWydyZWZmJ10gPT0gMykgeyBlY2hvICc8ZGl2IGNsYXNzPSJhbGVydCBhbGVydC1lcnJvciI+SUQgR3Vlc3Rib29rIGVtcHR5Li4uIQ0KPGJ1dHRvbiBjbGFzcz0iY2xvc2UiIGFyaWEtaGlkZGVuPSJ0cnVlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiB0eXBlPSJidXR0b24iPtc8L2J1dHRvbj48L2Rpdj4nO30NCmVsc2UgaWYgKCRfR0VUWydyZWZmJ10gPT0gNCkgeyBlY2hvICc8ZGl2IGNsYXNzPSJhbGVydCBhbGVydC1lcnJvciI+UHVibGlzaCBHdWVzdGJvb2sgZXJyb3IuLiENCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj7XPC9idXR0b24+PC9kaXY+Jzt9DQplbHNlIGlmICgkX0dFVFsncmVmZiddID09IDUpIHsgZWNobyAnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtc3VjY2VzcyI+UHVibGlzaCBHdWVzdGJvb2sgc3VjY2Vzcy4uIQ0KPGJ1dHRvbiBjbGFzcz0iY2xvc2UiIGFyaWEtaGlkZGVuPSJ0cnVlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiB0eXBlPSJidXR0b24iPtc8L2J1dHRvbj48L2Rpdj4nO319';
eval (base64_decode($warning));?>

<?PHP if(!empty($_GET['refid'])){
 $refid= mysql_real_escape_string($_GET['refid']); 
$sqldata=mysql_query("select * from  buku_tamu where id_buku='$refid'");
while($post=mysql_fetch_array($sqldata)){
$id_buku = strip_tags($post['id_buku']);
$nama_buku_tamu = strip_tags($post['nama_buku_tamu']);
$pesan_buku_tamu = strip_tags($post['pesan_buku_tamu']);
$date_buku_tamu = strip_tags($post['date_buku_tamu']);
?>
<div class="doc_view">
<div class="doc_view_header">
<dl class="dl-horizontal">
<dt>Name</dt><dd><?PHP echo $nama_buku_tamu;?></dd>
<dt>Date</dt><dd><?PHP echo $date_buku_tamu;?></dd>
</dl></div>
<div class="doc_view_content"><?PHP echo $pesan_buku_tamu;?></div>
<div class="doc_view_footer clearfix">
<div class="btn-group pull-left">
<a href="<?PHP echo MY_ADMIN?>guestbook-action/?refid=<?php echo $id_buku;?>&amp;action=publish" class="btn"><i class="icon-pencil"></i> Publish</a>
<a href="<?PHP echo MY_ADMIN?>guestbook-action/?refid=<?php echo $id_buku;?>&amp;action=delete" class="btn" onClick='return confirm("Are you sure you want ot delete this thread.?")'><i class="icon-trash"></i> Delete</a>
<a class="btn" onClick="location.href='<?PHP echo MY_ADMIN?>guestbook/';"><i class="icon-arrow-left"></i> Back</a>
</div>
<div class="pull-right"><span class="label label-success"><?PHP echo strip_tags($post['status']);?></span></div>
</div>

</div>
</div>
<?PHP }?><?PHP } else {?>
<!--- email post --->
<div class="row-fluid">
<div class="span12">
<div class="mbox">
<div class="tabbable">
<div class="heading">
<ul class="nav nav-tabs">
<li class="active"><a href="#mbox_new" data-toggle="tab"><i class="icon-book"></i> Draft 
<span class="label label-warning"><?PHP  echo $jumlah_buku_tamu;?></span></a></li>
<li><a href="#mbox_inbox" data-toggle="tab"><i class="icon-book"></i> Publish</a></li>
</ul>
</div>
<div class="tab-content">
<div class="tab-pane active" id="mbox_new">	
<table width="100%" class="table table-striped" id="datapost">
<thead>
<tr>
<th width="29">#</th>
<th width="237">Name</th>
<th width="335">Message</th>
<th width="207">Date</th>
<th width="127">&nbsp;</th>
</tr>
</thead>
<tbody>
<?php $sql=mysql_query("select * from buku_tamu where status='draft' order by buku_tamu.id_buku desc");
$no=0;while($post_buku=mysql_fetch_array($sql)){  $no++;
$id_buku = strip_tags($post_buku['id_buku']);
$nama_buku_tamu = strip_tags($post_buku['nama_buku_tamu']);
$pesan_buku_tamu = strip_tags(substr($post_buku['pesan_buku_tamu'],0,100));
$date_buku_tamu = strip_tags($post_buku['date_buku_tamu']); ?>
<tr>
<td><?PHP echo $no;?></td>
<td style="cursor:pointer" onClick="location.href='<?PHP echo MY_ADMIN?>guestbook/?refid=<?PHP echo $id_buku;?>';">
<?PHP echo $nama_buku_tamu;?></td>
<td><?PHP echo $pesan_buku_tamu;?></td>
<td><?PHP echo $date_buku_tamu;?></td>
<td>
<a href="<?PHP echo MY_ADMIN;?>guestbook/?refid=<?PHP echo $id_buku;?>"><button class="btn btn-mini btn-warning ttip_t" title="View Guestbook"><i class="icon-zoom-in"></i></button></a>

<a href="<?PHP echo MY_ADMIN?>guestbook-action/?refid=<?php echo $id_buku;?>&amp;action=publish" target="_self">
<button class="btn btn-mini btn-primary ttip_t" title="Publish"><i class="icon-share-alt"></i></button></a>

<a href="<?PHP echo MY_ADMIN?>guestbook-action/?refid=<?php echo $id_buku;?>&amp;action=delete" onClick="return confirm('Are you sure you want ot delete this thread.?');"><button class="btn btn-mini btn-danger ttip_t" title="Delete"><i class="icon-trash"></i></button></a>
</td>
</tr>
<?PHP }?></tbody></table>
</div>
<div class="tab-pane" id="mbox_inbox">	
<table width="100%" class="table table-striped" id="datapostmail">
<thead>
<tr>
<th width="29">#</th>
<th width="237">Name</th>
<th width="335">Message</th>
<th width="207">Date</th>
<th width="127">&nbsp;</th>
</tr>
</thead>
<tbody>
<?php $sql=mysql_query("select * from buku_tamu where status='Publish' order by buku_tamu.id_buku desc");
$no=0;while($post_buku=mysql_fetch_array($sql)){  $no++;
$id_buku = strip_tags($post_buku['id_buku']);
$nama_buku_tamu = strip_tags($post_buku['nama_buku_tamu']);
$pesan_buku_tamu = strip_tags(substr($post_buku['pesan_buku_tamu'],0,100));
$date_buku_tamu = strip_tags($post_buku['date_buku_tamu']); ?>
<tr>
<td><?PHP echo $no;?></td>
<td style="cursor:pointer" onClick="location.href='<?PHP echo MY_ADMIN?>guestbook/?refid=<?PHP echo $id_buku;?>';">
<?PHP echo $nama_buku_tamu;?></td>
<td><?PHP echo $pesan_buku_tamu;?></td>
<td><?PHP echo $date_buku_tamu;?></td>
<td>
<a href="<?PHP echo MY_ADMIN;?>guestbook/?refid=<?PHP echo $id_buku;?>"><button class="btn btn-mini btn-warning ttip_t" title="View Guestbook"><i class="icon-zoom-in"></i></button></a>

<a href="<?PHP echo MY_ADMIN?>guestbook-action/?refid=<?php echo $id_buku;?>&amp;action=delete" onClick="return confirm('Are you sure you want ot delete this thread.?');"><button class="btn btn-mini btn-danger ttip_t" title="Delete"><i class="icon-trash"></i></button></a>
</td>
</tr>
<?PHP }?></tbody></table>
</div>
								
</div></div></div>
</div><?PHP }?>
</div></div></div></div>
<!-- sidebar -->
<?PHP include"../../in/panel.php";?> 
<?PHP include"../../head-js.php";?>
<link rel="stylesheet" type="text/css" href="<?PHP echo MY_ADMIN?>/img/splashy/splashy.css">
<link rel="stylesheet" type="text/css" href="<?PHP echo MY_ADMIN?>lib/datatables/jquery.dataTables.css">
<script src="<?PHP echo MY_ADMIN?>lib/datatables/jquery.dataTables.min.js"></script>
<script src="<?PHP echo MY_ADMIN?>lib/datatables/dataTables.bootstrap.js"></script>
<script src="<?PHP echo MY_ADMIN?>lib/colorbox/jquery.colorbox.min.js"></script>
</div></div>
</body></html>