<?PHP session_start();include ('../../../config.php');include ('../../privat/activasi-login.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
<?PHP include"../../head.php";?>
	<script language="javascript">
function show(){
	if ($(".chang").html()=='Change Images'){
		$(".chang").html("Cancel");
		$(".gb-profile").hide();
		$("#favinput").fadeIn('1000');
	}else if ($(".chang").html()=='Cancel'){
		$("#favinput").hide();
		$(".gb-profile").fadeIn('1000');
		$(".chang").html("Change Images");
	}
	return false;
}

function upload(){

return false;
}
</script>
</head><body>
<?PHP include"../../in/header.php";?>
<!-- main content -->
<div id="contentwrapper"><div class="main_content"><nav>
<div id="jCrumbs" class="breadCrumb module"><ul><li><a href="<?PHP echo MY_ADMIN?>"><i class="icon-home"></i></a></li>
<li>Galery</li>
</ul></div></nav>
<?php  if (!empty($_GET['reff'])) { if ($_GET['reff'] == 1) { echo '<div class="alert alert-danger">Submit Galery error on server...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 2) { echo '<div class="alert alert-success">Submit Galery success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';} 
else if ($_GET['reff'] == 3) { echo '<div class="alert alert-danger">Field can not be empty...! 
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}

else if ($_GET['reff'] == 4) { echo '<div class="alert alert-danger">Update Galery Error On Server...! 
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 5) { echo '<div class="alert alert-success">Update Galery  Success...! 
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 6) { echo '<div class="alert alert-danger">Delete Galery error...! 
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 7) { echo '<div class="alert alert-success">Delete Galery Success...! 
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == "images00") { echo '<div class="alert alert-danger">Upload Images Failed, Ekstensi bmp, gif, jpg, jpeg, png...! 
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == "images01") { echo '<div class="alert alert-danger">Upload Images Failed, Size Images Max 90 KB..!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}}?>

								
<?PHP if(!empty($_GET['refid'])){
$refid= htmlentities($_GET['refid']); 
$sql_edit=mysql_query("SELECT * FROM galery WHERE id_galery='$refid'");
$post=mysql_fetch_array($sql_edit);
$refid= strip_tags($post['id_galery']);
$title_galery = strip_tags($post['title']);
$categories = strip_tags($post['categories']);
$gambar_galery = strip_tags($post['gambar']);?>
<div class="row-fluid"><div class="span12">
<h3 class="heading">Update Galery : <?PHP echo $title_galery;?></h3>
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>proses-galery/?refid=<?PHP echo $refid;?>&act=update" enctype="multipart/form-data" method="post">
<div class="formSep">
<div class="row-fluid">
<div class="span6">
<label>Title <span class="f_req">*</span></label>
<input type="text" name="title" class="span12" value="<?PHP echo $title_galery;?>" placeholder="Title" required/>
</div>
<div class="span6">
<label>Categories <span class="f_req">*</span></label>
<select name="categories" class="span12" required>
<?php $sql_tag=mysql_query("SELECT * FROM galery_categories"); while($tag=mysql_fetch_array($sql_tag)){
$title_categories =strip_tags($tag['title']); 
$link_categories =strip_tags($tag['link_categories']);?>
<option value="<?PHP echo $link_categories;?>" <?PHP if($categories==$link_categories){?> selected="selected"<?PHP }?>><?PHP echo $title_categories;?></option><?PHP } ?>
</select>
</div>
</div>
	
<div class="row-fluid"><div class="span12">
<label>Upload Images <span class="f_req">*</span></label>
<div class="gb-profile">
<?PHP if($gambar_galery == ''){?>
<img src="<?PHP echo MY_ADMIN?>img/no_img_180.png" width="160" height="150" style="width:160px; height:150px;"/>
<?PHP } else{ ?>
<img src="<?PHP echo MY_PATH;?>images/galery/<?PHP echo $gambar_galery;?>" width="160" height="160" style="width:160px; height:160px;"/><?PHP }?>
<div class="chang" onClick="return show();" style="cursor:pointer;">Change Images</div></div>

<div id="favinput" style="display:none;">
<div class="span12"><input type="file" name="gambar" id="uni_file" class="uni_style" accept="image/*"/></div>
<div class="row-fluid"><div class="span12">
<blockquote><i>Ekstensi bmp, gif, jpg, jpeg, png dan Max size 90 KB / Size : 600 x 500 px</i></blockquote>
</div></div>

<button class="btn btn-success" onClick="return show();" style="cursor:pointer;"><i class="icon-remove-circle"></i> Cancel</button>
</div>
</div></div><hr>				
<div class="form-actions">
<button class="btn btn-primary btn-large" name="editgalery" type="submit"><i class="icon-save"></i> Update Galery </button>
<button type="reset" class="btn btn-large"><i class="icon-eraser"></i> Reset</button></div>
</div></form>
</div></div>
<?PHP } else { ?>


<div class="row-fluid"><div class="span12">
  <h3 class="heading">New Galery</h3>
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>proses-galery" enctype="multipart/form-data" method="post">
<div class="formSep">
<div class="row-fluid">
<div class="span6">
<label>Title <span class="f_req">*</span></label>
<input type="text" name="title" class="span12" placeholder="Title" required/>
</div>
<div class="span6">
<label>Categories <span class="f_req">*</span></label>
<select name="categories" class="span12" required>
<?PHP $sql=mysql_query("select * from galery_categories order by title desc");
while($datapost= mysql_fetch_array($sql)){
$title_categories = strip_tags($datapost['title']);
$link_categories = strip_tags($datapost['link_categories']);?>
<option value="<?PHP echo $link_categories;?>"><?PHP echo $title_categories;?></option>
<?PHP }?>
</select>
</div>
</div>
	
<div class="row-fluid"><div class="span12">
<label>Upload Images <span class="f_req">*</span></label>
<input type="file" name="gambar" id="uni_file" class="uni_style" accept="image/*" required/>	  
</div></div>
<div class="row-fluid"><div class="span12">
  <blockquote>Ekstensi bmp, gif, jpg, jpeg, png dan Max size 90 KB / Size : 600 x 500 px</blockquote>
</div></div>
			
<div class="form-actions">
<button class="btn btn-primary btn-large" name="addgalery" type="submit"><i class="icon-save"></i> Publish</button>
<button type="reset" class="btn btn-large"><i class="icon-eraser"></i> Reset</button></div>
</div></form>
</div></div>
<?PHP }?>
<div class="row-fluid">
<div class="span12">
<h3 class="heading">Galery </h3>
<table width="100%" class="table table-bordered table-striped table_vam" id="datapost">
<thead>
<tr>
  <th width="155" class="table_checkbox">Images</th>
  <th width="442">Title</th>
  <th width="132">Album</th>
  <th width="124">Date</th>
  <th width="82">Actions</th>
</tr>
</thead>
<tbody>
<?php $sql=mysql_query("select * from galery order by galery.id_galery DESC");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++;
$refid = strip_tags($datapost['id_galery']);
$title_galery = strip_tags(substr($datapost['title'],0,35));
$gambar = strip_tags($datapost['gambar']);
$categories = strip_tags($datapost['categories']);
$date = strip_tags($datapost['datetime']);?>
<tr>
<td>
<?PHP if($gambar == ''){?>
<img src="<?PHP echo MY_ADMIN?>img/no_img_180.png" width="50" height="50"/>
<?PHP } else{ ?>
<img src="<?PHP echo MY_PATH?>images/galery/<?PHP echo $gambar;?>" width="50" height="50" /><?PHP }?></td>
<td><?PHP echo $title_galery;?></td>
<td><?PHP echo $categories;?></td>
<td><?PHP echo $date;?></td>
<td>
<a href="<?PHP echo MY_ADMIN?>galery/?refid=<?PHP echo $refid;?>" target="_self">
<button class="btn btn-mini btn-primary ttip_t" title="Edit"><i class="icon-pencil"></i></button></a>

<a href="<?PHP echo MY_ADMIN?>proses-galery/?refid=<?php echo $refid;?>&amp;act=delete"><button onClick="return confirm('Are you sure you want ot delete this thread.?');" class="btn btn-mini btn-danger ttip_t" title="Delete"><i class="icon-trash"></i></button></a></td></tr><?PHP }?></tbody></table>
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