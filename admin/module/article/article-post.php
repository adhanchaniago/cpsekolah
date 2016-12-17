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
<li>Post Article </li>
<li>Publish</li></ul>
</div></nav>
<?php  if (!empty($_GET['reff'])) { if ($_GET['reff'] == 1) { echo '<div class="alert alert-success">Submit Article Success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 2) { echo '<div class="alert alert-success">Update Article Success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';} 
else if ($_GET['reff'] == 3) { echo '<div class="alert alert-success">Article Success Publish...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 4) { echo '<div class="alert alert-error">Sorry ID not found...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</div>';}
else if ($_GET['reff'] == 5) { echo '<div class="alert alert-error">Delete Article Error On Server...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</div>';}
else if ($_GET['reff'] == 6) { echo '<div class="alert alert-success">Delete Article Success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</div>';}}?>

<div class="row-fluid">
<div class="span12">
<h3 class="heading">Post Article<button type="button" onClick="location.href='<?PHP echo MY_ADMIN?>new/article';" class="btn btn-primary btn-small float-right"><i class="icon-plus"></i> New Add Article</button></h3>
<table width="100%" class="table table-bordered table-striped table_vam" id="datapost">
<thead>
<tr>
<th width="419">Title</th>
<th width="269">Categories</th>
<th width="114" align="center">Date</th>
<th width="18"><i class="icon-comments"></i></th>
<th width="131">Actions</th>
</tr></thead><tbody>
<?php $sql=mysql_query("select * from article order by article.id_article desc");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++;
$refid= strip_tags($datapost['id_article']);
$title = strip_tags(substr($datapost['title'],0,28));
$fulltitle = strip_tags($datapost['title']);
$link_article = strip_tags($datapost['link_article']);
$categories = strip_tags($datapost['categories']);
$time = strip_tags($datapost['time']);
$date = strip_tags($datapost['date']);
$sql_koment=mysql_query("SELECT * FROM comment WHERE id_article='$refid'") or die(mysql_error()); 
$comment=mysql_num_rows($sql_koment);?>
<tr>
<td><span class="ttip_r" title="<?PHP echo $fulltitle;?>"><?PHP echo $title;?>..</span></td>
<td><?PHP echo $categories;?></td>
<td align="center"><?PHP echo $date;?></td>
<td align="center"><span class="label label-success"><?PHP echo $comment;?></span></td>
<td>
<a href="<?PHP echo MY_PATH?>post/<?PHP echo $link_article;?>.html" target="_blank"><button class="btn btn-mini btn-warning ttip_t" title="View Comment"><i class="icon-zoom-in"></i></button></a>

<a href="<?PHP echo MY_ADMIN?>edit/article/<?PHP echo $link_article;?>" target="_self">
<button class="btn btn-mini btn-primary ttip_t" title="Edit"><i class="icon-pencil"></i></button></a>
<a href="<?PHP echo MY_ADMIN?>article-proses/?refid=<?php echo $refid;?>&amp;action=delete" onClick="return confirm('Are you sure you want ot delete this thread.?');"><button class="btn btn-mini btn-danger ttip_t" title="Delete"><i class="icon-trash"></i></button></a></td></tr><?PHP }?></tbody></table>
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