<?PHP session_start();include ('../../../config.php'); include ('../../privat/activasi-login.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
<?PHP include"../../head.php";?>
<style>
.gb-profile{width:160px;height:160px;display:block;overflow:hidden;position:relative;border:solid 2px #eeeeee;}
.gb-profile .chang {text-align:center;width:100%;text-align: center;padding:3px;color:#FF9900;bottom:0px;left:0px;position:absolute;
background:rgba(0, 0, 0, 0.7);color:#ffffff;font-size:15px;}
.chang {font-size:16px;padding:2px;background:#eeeeee;color:#333333;width:100px; text-align:center;margin-top:2px;}
.chang:hover{background:#333333;color:#ffffff;}

</style>
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
<li>Slider</li>
</ul></div></nav>
<?php $warning_='IGlmICghZW1wdHkoJF9HRVRbJ3JlZmYnXSkpIHsgaWYgKCRfR0VUWydyZWZmJ10gPT0gMSkgeyBlY2hvICc8ZGl2IGNsYXNzPSJhbGVydCBhbGVydC1kYW5nZXIiPlN1Ym1pdCBTbGlkZXIgZXJyb3Igb24gc2VydmVyLi4uIQ0KPGJ1dHRvbiBjbGFzcz0iY2xvc2UiIGFyaWEtaGlkZGVuPSJ0cnVlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiB0eXBlPSJidXR0b24iPiZ0aW1lczs8L2J1dHRvbj48L2Rpdj4nO30NCmVsc2UgaWYgKCRfR0VUWydyZWZmJ10gPT0gMikgeyBlY2hvICc8ZGl2IGNsYXNzPSJhbGVydCBhbGVydC1zdWNjZXNzIj5TdWJtaXQgU2xpZGVyIHN1Y2Nlc3MuLi4hDQo8YnV0dG9uIGNsYXNzPSJjbG9zZSIgYXJpYS1oaWRkZW49InRydWUiIGRhdGEtZGlzbWlzcz0iYWxlcnQiIHR5cGU9ImJ1dHRvbiI+JnRpbWVzOzwvYnV0dG9uPjwvZGl2Pic7fSANCmVsc2UgaWYgKCRfR0VUWydyZWZmJ10gPT0gMykgeyBlY2hvICc8ZGl2IGNsYXNzPSJhbGVydCBhbGVydC1kYW5nZXIiPkZpZWxkIGNhbiBub3QgYmUgZW1wdHkuLi4hIA0KPGJ1dHRvbiBjbGFzcz0iY2xvc2UiIGFyaWEtaGlkZGVuPSJ0cnVlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiB0eXBlPSJidXR0b24iPiZ0aW1lczs8L2J1dHRvbj48L2Rpdj4nO30NCg0KZWxzZSBpZiAoJF9HRVRbJ3JlZmYnXSA9PSA0KSB7IGVjaG8gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LWRhbmdlciI+VXBkYXRlIFNsaWRlciBFcnJvciBPbiBTZXJ2ZXIuLi4hIA0KPGJ1dHRvbiBjbGFzcz0iY2xvc2UiIGFyaWEtaGlkZGVuPSJ0cnVlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiB0eXBlPSJidXR0b24iPiZ0aW1lczs8L2J1dHRvbj48L2Rpdj4nO30NCmVsc2UgaWYgKCRfR0VUWydyZWZmJ10gPT0gNSkgeyBlY2hvICc8ZGl2IGNsYXNzPSJhbGVydCBhbGVydC1zdWNjZXNzIj5VcGRhdGUgU2xpZGVyICBTdWNjZXNzLi4uISANCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj4mdGltZXM7PC9idXR0b24+PC9kaXY+Jzt9DQplbHNlIGlmICgkX0dFVFsncmVmZiddID09IDYpIHsgZWNobyAnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZGFuZ2VyIj5EZWxldGUgU2xpZGVyIGVycm9yLi4uISANCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj4mdGltZXM7PC9idXR0b24+PC9kaXY+Jzt9DQplbHNlIGlmICgkX0dFVFsncmVmZiddID09IDcpIHsgZWNobyAnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtc3VjY2VzcyI+RGVsZXRlIFNsaWRlciBTdWNjZXNzLi4uISANCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj4mdGltZXM7PC9idXR0b24+PC9kaXY+Jzt9DQplbHNlIGlmICgkX0dFVFsncmVmZiddID09ICJpbWFnZXMwMCIpIHsgZWNobyAnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZGFuZ2VyIj5VcGxvYWQgSW1hZ2VzIEZhaWxlZCwgRWtzdGVuc2kgYm1wLCBnaWYsIGpwZywganBlZywgcG5nLi4uISANCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj4mdGltZXM7PC9idXR0b24+PC9kaXY+Jzt9DQplbHNlIGlmICgkX0dFVFsncmVmZiddID09ICJpbWFnZXMwMSIpIHsgZWNobyAnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZGFuZ2VyIj5VcGxvYWQgSW1hZ2VzIEZhaWxlZCwgU2l6ZSBJbWFnZXMgTWF4IDkwIEtCLi4hDQo8YnV0dG9uIGNsYXNzPSJjbG9zZSIgYXJpYS1oaWRkZW49InRydWUiIGRhdGEtZGlzbWlzcz0iYWxlcnQiIHR5cGU9ImJ1dHRvbiI+JnRpbWVzOzwvYnV0dG9uPjwvZGl2Pic7fX0=';
eval(base64_decode($warning_));?>

								
<?PHP if (!empty($_GET['refid'])) {
$refid= mysql_real_escape_string($_GET['refid']);
if ($_GET['refid'] == $refid) { 
$query='JHNxbF9lZGl0PW15c3FsX3F1ZXJ5KCJTRUxFQ1QgKiBGUk9NIHNsaWRlciBXSEVSRSBpZF9zbGlkZXI9JyRyZWZpZCciKTsNCiRwb3N0PW15c3FsX2ZldGNoX2FycmF5KCRzcWxfZWRpdCk7DQokcmVmaWQ9IHN0cmlwX3RhZ3MoJHBvc3RbJ2lkX3NsaWRlciddKTsNCiR0aXRsZV9zbGlkZXI9IHN0cmlwX3RhZ3MoJHBvc3RbJ3RpdGxlX3NsaWRlciddKTsNCiRkZXNjcmlwdGlvbiA9IHN0cmlwX3RhZ3MoJHBvc3RbJ2Rlc2NyaXB0aW9uJ10pOw0KJGdhbWJhcl9zbGlkZXI9IHN0cmlwX3RhZ3MoJHBvc3RbJ2dhbWJhcl9zbGlkZXInXSk7';
eval (base64_decode($query))?>
<div class="row-fluid"><div class="span12">
<h3 class="heading">Update slider : <?PHP echo $title_slider;?></h3>
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>slider-proses/?refid=<?PHP echo $refid;?>&act=update" enctype="multipart/form-data" method="post">
<div class="formSep">
<div class="row-fluid">
<div class="span12">
<label>Title <span class="f_req">*</span></label>
<input type="text" name="title_slider" class="span12" value="<?PHP echo $title_slider;?>" placeholder="Title" required/>
</div>

<div class="row-fluid"><div class="span12">
<label>Upload Images <span class="f_req">*</span></label>
<div class="gb-profile">
<?PHP if($gambar_slider == ''){?>
<img src="<?PHP echo MY_ADMIN?>img/no_img_180.png" width="160" height="150" style="width:160px; height:150px;"/>
<?PHP } else{ ?>
<img src="<?PHP echo MY_PATH;?>images/slider/<?PHP echo $gambar_slider;?>" width="160" height="160" style="width:160px; height:160px;"/><?PHP }?>
<div class="chang" onClick="return show();" style="cursor:pointer;">Change Images</div></div>

<div id="favinput" style="display:none;">
<div class="span12"><input type="file" name="gambar_slider" id="uni_file" class="uni_style" accept="image/*"/></div>
<div class="row-fluid"><div class="span12">
<blockquote><i>Ekstensi bmp, gif, jpg, jpeg, png dan Max size 150KB / Size : 1100 x 500 px</i></blockquote>
</div></div>

<button class="btn btn-success" onClick="return show();" style="cursor:pointer;"><i class="icon-remove-circle"></i> Cancel</button>
</div>
</div></div>
	
<hr>	
<div class="row-fluid"><div class="span12">
<label>Description max 200 character<span class="f_req">*</span></label>
<textarea name="description" id="txtarea_limit_chars" cols="1"  rows="4" class="span12" required oninvalid="this.setCustomValidity('please insert description')"><?PHP echo $description;?></textarea>
</div></div>
			
<div class="form-actions">
<button class="btn btn-primary btn-large" name="editslider" type="submit"><i class="icon-save"></i> Update Slider</button>
<button type="reset" class="btn btn-large"><i class="icon-eraser"></i> Reset</button></div>
</div></form>
</div></div>
<?PHP } }else { ?>


<div class="row-fluid"><div class="span12">
  <h3 class="heading">New Slider</h3>
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>slider-proses/" enctype="multipart/form-data" method="post">
<div class="formSep">
<div class="row-fluid">
<div class="span12">
<label>Title <span class="f_req">*</span></label>
<input type="text" name="title_slider" class="span12" placeholder="Title" required/>
</div></div>

<div class="row-fluid"><div class="span12">
<label>Images<span class="f_req">*</span></label>

<input type="file" name="gambar_slider" id="uni_file" class="uni_style" accept="image/*" required/>	  
  <blockquote>Ekstensi bmp, gif, jpg, jpeg, png dan Max size 150 KB / Size : 1100 x 500 px</blockquote>
</div>
</div>
	
<div class="row-fluid"><div class="span12">
<label>Description max : 200 character<span class="f_req">*</span></label>
<textarea name="description" id="txtarea_limit_chars" cols="1"  rows="4" class="span12" required oninvalid="this.setCustomValidity('please insert description')"></textarea>
</div></div>

			
<div class="form-actions">
<button class="btn btn-primary btn-large" name="add_slider" type="submit"><i class="icon-save"></i> Publish</button>
<button type="reset" class="btn btn-large"><i class="icon-eraser"></i> Reset</button></div>
</div></form>
</div></div>
<?PHP }?>
<div class="row-fluid">
<div class="span12">
<h3 class="heading">Slider</h3>
<table width="100%" class="table table-bordered table-striped table_vam" id="datapost">
<thead>
<tr>
  <th width="155" class="table_checkbox">Images</th>
  <th width="196">Title</th>
  <th width="378">Description</th>
  <th width="124">Date</th>
  <th width="82">Actions</th>
</tr>
</thead>
<tbody>
<?php $sql=mysql_query("select * from slider order by slider.id_slider DESC");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++;
$refid = strip_tags($datapost['id_slider']);
$title_slider = strip_tags(substr($datapost['title_slider'],0,30));
$description = strip_tags(substr($datapost['description'],0,100));
$gambar_slider = strip_tags($datapost['gambar_slider']);
$date = strip_tags($datapost['date']);?>
<tr>
<td>
<?PHP if($gambar_slider == ''){?>
<img src="<?PHP echo MY_ADMIN?>img/no_img_180.png" width="50" height="50"/>
<?PHP } else{ ?>
<img src="<?PHP echo MY_PATH?>images/slider/<?PHP echo $gambar_slider;?>" width="50" height="50" /><?PHP }?></td>
<td><?PHP echo $title_slider;?></td>
<td><?PHP echo $description;?></td>
<td><?PHP echo $date;?></td>
<td>
<a href="<?PHP echo MY_ADMIN?>setting/slider/?refid=<?PHP echo $refid;?>" target="_self">
<button class="btn btn-mini btn-primary ttip_t" title="Edit"><i class="icon-pencil"></i></button></a>

<a href="<?PHP echo MY_ADMIN?>slider-proses/?refid=<?php echo $refid;?>&amp;act=delete"><button onClick="return confirm('Are you sure you want ot delete this thread.?');" class="btn btn-mini btn-danger ttip_t" title="Delete"><i class="icon-trash"></i></button></a></td></tr><?PHP }?></tbody></table>
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