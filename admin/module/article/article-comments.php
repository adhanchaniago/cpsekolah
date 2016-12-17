<?PHP session_start();include ('../../../config.php'); include ('../../privat/activasi-login.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<?PHP include"../../head.php";?>
</head><body>
<?PHP include"../../in/header.php";?>
<!-- main content -->
<div id="contentwrapper"><div class="main_content"><nav>
<div id="jCrumbs" class="breadCrumb module"><ul>
<li><a href="<?PHP echo MY_ADMIN?>"><i class="icon-home"></i></a></li>
<li><a href="<?PHP echo MY_ADMIN?>post/article">Post Article</a></li>
<li>Comment</li>
</ul>
</div></nav>
<?php  if (!empty($_GET['reff'])) { if ($_GET['reff'] == 1) { echo '<div class="alert alert-success">Comment Article publish error on server...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 2) { echo '<div class="alert alert-success">Publish Aomment article Success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';} 
else if ($_GET['reff'] == 3) { echo '<div class="alert alert-error">Sorry ID not found...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</div>';}
else if ($_GET['reff'] == 4) { echo '<div class="alert alert-error">Delete Comment Article Error On Server...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</div>';}
else if ($_GET['reff'] == 5) { echo '<div class="alert alert-success">Delete Comment Article Success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</div>';}}?>

<div class="row-fluid">
<div class="span12">
<?PHP if(!empty($_GET['refid'])){
	$refid= mysql_real_escape_string($_GET['refid']);
$sqldetail=mysql_query("select * from comment where id_koment='$refid'") or die(mysql_error());
while($datapost=mysql_fetch_array($sqldetail)){
$refid = strip_tags($datapost['id_koment']);
$nama_comment = strip_tags($datapost['nama_comment']);
$email_comment = strip_tags($datapost['email_comment']);
$url_website_komen = strip_tags($datapost['url_website_komen']);
$comment = strip_tags($datapost['comment']);
$date_comment= strip_tags($datapost['date_comment']);
$status = strip_tags($datapost['status']);

$sqlarticle = mysql_query("select * from article where id_article='$refid'") or die(mysql_error());
$post= mysql_fetch_array($sqlarticle);
$a_id = strip_tags($post['id_article']);
$title = strip_tags($post['title']); 

$coment=mysql_query("SELECT * FROM comment WHERE status='Y' and id_koment='$refid'");
$jumlah_koment=mysql_num_rows($coment);?>
<table class="table" width="100%">
<tbody>
<tr>
<td width="15%">Title Article</td>
<td width="85%">: <?PHP echo $title;?></td>
</tr>
<tr><td>Total Comment</td>
<td>: <?PHP echo $jumlah_koment;?></td>
</tr>
</tbody>
</table>
<br>
<h3 class="heading">Personal Comment </h3>
<table class="table" width="100%">
<tbody>
<tr>
<td width="15%">Name</td>
<td width="85%">: <?PHP echo $nama_comment;?></td>
</tr>
<tr>
  <td>Email</td>
  <td>: <?PHP echo $email_comment;?></td>
</tr>
<tr>
  <td>Url</td>
  <td>: <?PHP echo $url_website_komen;?></td>
</tr><tr>
  <td>Date</td>
  <td>: <?PHP echo $date_comment;?></td>
</tr>
<tr>
  <td colspan="2"><hr><?PHP echo $comment;?></td>
  </tr>
</tbody>
</table>
<hr>

<div class="form-actions">
<a class="ttip_t" title="Publish"><button class="btn btn-primary btn-large" type="button" onClick="location.href='<?PHP echo MY_ADMIN?>article-proses/?refid=<?php echo $refid;?>&amp;act=publish';"><i class="icon-save"></i> Publish </button></a>

<a href="<?PHP echo MY_ADMIN?>article-proses/?refid=<?php echo $refid;?>&amp;act=delete" onClick="return confirm('Are you sure you want ot delete this thread.?');"><button class="btn btn-large btn-danger ttip_t" title="Delete"><i class="icon-trash"></i> Delete</button></a>
<button type="reset" class="btn btn-large ttip_t" title="Back" onClick="location.href='<?PHP echo MY_ADMIN?>comment/article/';"><i class="icon-arrow-left"></i> Cancel</button></div>

<?PHP } }else { ?>

<h3 class="heading">Comment Article</h3>
<table width="100%" class="table table-bordered table-striped table_vam" id="datapost">
<thead>
<tr>
<th width="27" class="table_checkbox">#</th>
<th width="365">Title</th>
<th width="174">Name</th>
<th width="246" align="center">Date</th>
<th width="65">Status</th>
<th width="70">Actions</th>
</tr></thead><tbody>
<?php $sql=mysql_query("select * from comment order by comment.id_koment desc");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++;
$id_article= strip_tags($datapost['id_article']);
$id_koment= strip_tags($datapost['id_koment']);
$nama_comment = strip_tags(substr($datapost['nama_comment'],0,28));
$date_comment = strip_tags($datapost['date_comment']);
$status = strip_tags($datapost['status']);
$sql_article=mysql_query("select * from article where id_article='$id_article'");
$post=mysql_fetch_array($sql_article);
$title = strip_tags(substr($post['title'],0,28));
$fulltitle = strip_tags($post['title']);?>
<tr>
<td><?PHP echo $no;?></td>
<td><span class="ttip_r" title="<?PHP echo $fulltitle;?>"><?PHP echo $title;?>..</span></td>
<td><?PHP echo $nama_comment;?></td>
<td align="center"><?PHP echo $date_comment;?></td>
<td align="center"><center><span class="label label-success"><?PHP echo $status;?></span></center></td>
<td>
<a href="<?PHP echo MY_ADMIN?>comment/article/?refid=<?PHP echo $id_koment;?>"><button class="btn btn-mini btn-warning ttip_t" title="View Comment"><i class="icon-zoom-in"></i></button></a>
<a href="<?PHP echo MY_ADMIN?>article-proses/?refid=<?php echo $id_koment;?>&amp;act=delete" onClick="return confirm('Are you sure you want ot delete this thread.?');"><button class="btn btn-mini btn-danger ttip_t" title="Delete"><i class="icon-trash"></i></button></a></td></tr><?PHP }?></tbody></table>
<?PHP }?>
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