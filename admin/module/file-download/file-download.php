<?PHP session_start();include ('../../../config.php');include ('../../privat/activasi-login.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
<?PHP include"../../head.php";?>
	<script language="javascript">
function show(){
	if ($(".chang").html()=='Change'){
		$(".chang").html("Cancel");
		$(".file-download").hide();
		$("#favinput").fadeIn('1000');
	}else if ($(".chang").html()=='Cancel'){
		$("#favinput").hide();
		$(".file-download").fadeIn('1000');
		$(".chang").html("Change");
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
<li>File Download </li>
</ul></div></nav>
<?php  if (!empty($_GET['reff'])) { if ($_GET['reff'] == 1) { echo '<div class="alert alert-danger">Upload File Failed, Ekstensi File Pdf, Word (docx), Excel (xlsx), Rar
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 2) { echo '<div class="alert alert-danger">Upload File Failed, Max size 10MB...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';} 
else if ($_GET['reff'] == 3) { echo '<div class="alert alert-danger">Upload file Error on server...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 4) { echo '<div class="alert alert-success">Upload File Success...! 
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 5) { echo '<div class="alert alert-error">Field can not be empty...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}

else if ($_GET['reff'] == 6) { echo '<div class="alert alert-danger">Update File error on server...! 
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 7) { echo '<div class="alert alert-success">Update File Success...! 
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 8) { echo '<div class="alert alert-error">Delete File Error on server...! 
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 9) { echo '<div class="alert alert-success">Delete File Success...! 
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}}?>

								
<?PHP if(!empty($_GET['refid'])){
$refid= htmlentities($_GET['refid']); 
$sql_edit=mysql_query("SELECT * FROM download WHERE code='$refid'");
$post=mysql_fetch_array($sql_edit);
$refid= strip_tags($post['code']);
$title = strip_tags($post['title']);
$download = strip_tags($post['file_download']);
$file_download ="File ".strip_tags($post['file_download'])."";?>
<div class="row-fluid"><div class="span12">
<h3 class="heading">Update File Download: <?PHP echo $title;?></h3>
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>download-proses/?refid=<?PHP echo $refid;?>&action=update" enctype="multipart/form-data" method="post">
<div class="formSep">
<div class="row-fluid">
<div class="span12">
<label>Title <span class="f_req">*</span></label>
<input type="text" name="title" class="span12" value="<?PHP echo $title;?>" placeholder="Title" required/>
</div>
</div>
	
<div class="row-fluid"><div class="span12">
<label>Upload File <span class="f_req">*</span></label>
<div class="file-download">
<?PHP if($download == ''){?>
<blockquote><h2>File <?PHP echo $file_download;?> Not Found</h2></blockquote>
<?PHP } else{ ?>
<blockquote><h2><?PHP echo $file_download;?></h2></blockquote>
<?PHP }?>
<div class="chang" onClick="return show();" style="cursor:pointer;">Change</div></div>

<div id="favinput" style="display:none;">
<div class="span12"><input type="file" name="file_download" id="uni_file" class="uni_style" accept="aplication/*"/></div>
<div class="row-fluid"><div class="span12">
<blockquote><i>Ekstensi File Pdf, Word (docx), Excel (xlsx), Rar dan Max size 10 MB</i></blockquote>
</div></div>

<button class="btn btn-success" onClick="return show();" style="cursor:pointer;"><i class="icon-remove-circle"></i> Cancel</button>
</div>
</div></div><hr>				
<div class="form-actions">
<button class="btn btn-primary btn-large" name="edit" type="submit"><i class="icon-save"></i> Update</button>
<button type="reset" class="btn btn-large"><i class="icon-eraser"></i> Reset</button></div>
</div></form>
</div></div>
<?PHP } else { ?>


<div class="row-fluid"><div class="span12">
  <h3 class="heading">New File Download </h3>
  <form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>download-proses" enctype="multipart/form-data" method="post">
<div class="formSep">
<div class="row-fluid">
<div class="span12">
<label>Title <span class="f_req">*</span></label>
<input type="text" name="title" class="span12" placeholder="Title" required/>
</div>
</div>
	
<div class="row-fluid"><div class="span12">
<label>Upload File <span class="f_req">*</span></label>
<input type="file" name="file_download" id="uni_file" class="uni_style" accept="aplication/*" required/>	  
</div></div>
<div class="row-fluid"><div class="span12">
  <blockquote>Ekstensi File Pdf, Word (docx), Excel (xlsx), Rar dan Max size 10 MB</blockquote>
</div></div>
			
<div class="form-actions">
<button class="btn btn-primary btn-large" name="add_download" type="submit"><i class="icon-save"></i> Publish</button>
<button type="reset" class="btn btn-large"><i class="icon-eraser"></i> Reset</button></div>
</div></form>
</div></div>
<?PHP }?>
<div class="row-fluid">
<div class="span12">
<h3 class="heading">File Download </h3>
<table width="100%" class="table table-bordered table-striped table_vam" id="datapost">
<thead>
<tr>
  <th width="155" class="table_checkbox">#</th>
  <th width="220">Name</th>
  <th width="220">File</th>
  <th width="132">Size</th>
  <th width="124">Date</th>
  <th width="82">Actions</th>
</tr>
</thead>
<tbody>
<?php $sql=mysql_query("select * from download order by download.id_download DESC");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++;
$refid = strip_tags($datapost['code']);
$title= strip_tags(substr($datapost['title'],0,35));
$resize ="".strip_tags($datapost['resize'])." Kb";
$file_download = strip_tags($datapost['file_download']);
$datetime = strip_tags($datapost['datetime']);?>
<tr>
<td><?PHP echo $no;?></td>
<td><?PHP echo $title;?></td>
<td><?PHP echo $file_download;?></td>
<td><?PHP echo $resize;?></td>
<td><?PHP echo $datetime;?></td>
<td>
<a href="<?PHP echo MY_ADMIN?>file-download/?refid=<?PHP echo $refid;?>" target="_self">
<button class="btn btn-mini btn-primary ttip_t" title="Edit"><i class="icon-pencil"></i></button></a>

<a href="<?PHP echo MY_ADMIN?>download-proses/?refid=<?php echo $refid;?>&amp;action=delete"><button onClick="return confirm('Are you sure you want ot delete this thread.?');" class="btn btn-mini btn-danger ttip_t" title="Delete"><i class="icon-trash"></i></button></a></td></tr><?PHP }?></tbody></table>
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