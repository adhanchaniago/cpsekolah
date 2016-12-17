<?PHP session_start();
$config='aW5jbHVkZSAoJy4uLy4uLy4uL2NvbmZpZy5waHAnKTtpbmNsdWRlICgnLi4vLi4vcHJpdmF0L2FjdGl2YXNpLWxvZ2luLnBocCcpOw0KJHRpdGxlPScnOw0KJGtleXdvcmQ9Jyc7DQokY29udGVudD0nJzs=';
eval (base64_decode($config));?>
<!DOCTYPE html>
<html lang="en"> <head>
<?PHP include"../../head.php";?>
<script src="<?PHP echo MY_ADMIN?>plugin/ckeditor/ckeditor.js"></script>
</head><body>
<?PHP include"../../in/header.php";?>
<!-- main content -->
<div id="contentwrapper"><div class="main_content"><nav>
<div id="jCrumbs" class="breadCrumb module"><ul><li><a href="<?PHP echo MY_ADMIN?>"><i class="icon-home"></i></a></li>
<li><a href="<?PHP echo MY_ADMIN?>post/pages">Post Pages</a></li><li><?PHP if (empty($_GET['link_pages'])){ echo"New Pages";} else {echo"Update Pages"; }?></li></ul></div></nav>

<?php $warning='IGlmICghZW1wdHkoJF9HRVRbJ2Vycm9yJ10pKSB7IGlmICgkX0dFVFsnZXJyb3InXSA9PSAxKSB7IGVjaG8gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LWRhbmdlciI+U3VibWl0IFBhZ2VzIEVycm9yIE9uIFNlcnZlci4uLiENCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj48aSBjbGFzcz0iaWNvbi1yZW1vdmUiPjwvaT48L2J1dHRvbj48L2Rpdj4nOw0KJHRpdGxlPSRfU0VTU0lPTlsndGl0bGUnXTsNCiRrZXl3b3JkPSRfU0VTU0lPTlsna2V5d29yZCddOw0KJGNvbnRlbnQ9JF9TRVNTSU9OWydjb250ZW50J107fQ0KZWxzZSBpZiAoJF9HRVRbJ2Vycm9yJ10gPT0gMikgeyBlY2hvICc8ZGl2IGNsYXNzPSJhbGVydCBhbGVydC1kYW5nZXIiPkZpZWxkIGNhbiBub3QgYmUgZW1wdHkuLi4hDQo8YnV0dG9uIGNsYXNzPSJjbG9zZSIgYXJpYS1oaWRkZW49InRydWUiIGRhdGEtZGlzbWlzcz0iYWxlcnQiIHR5cGU9ImJ1dHRvbiI+PGkgY2xhc3M9Imljb24tcmVtb3ZlIj48L2k+PC9idXR0b24+PC9kaXY+JzsNCiR0aXRsZT0kX1NFU1NJT05bJ3RpdGxlJ107DQoka2V5d29yZD0kX1NFU1NJT05bJ2tleXdvcmQnXTsNCiRjb250ZW50PSRfU0VTU0lPTlsnY29udGVudCddO30gDQplbHNlIGlmICgkX0dFVFsnZXJyb3InXSA9PSAzKSB7IGVjaG8gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LWRhbmdlciI+VXBkYXRlIFBhZ2VzIEZhaWxlZC4uLiEgDQo8YnV0dG9uIGNsYXNzPSJjbG9zZSIgYXJpYS1oaWRkZW49InRydWUiIGRhdGEtZGlzbWlzcz0iYWxlcnQiIHR5cGU9ImJ1dHRvbiI+PGkgY2xhc3M9Imljb24tcmVtb3ZlIj48L2k+PC9idXR0b24+PC9kaXY+Jzt9fQ==';
eval(base64_decode($warning)); ?>

								
<?PHP if(!empty($_GET['link_pages'])){
$pages='JGxpbmtfcGFnZXMgPSBodG1sZW50aXRpZXMoJF9HRVRbJ2xpbmtfcGFnZXMnXSk7DQokc3FsX2VkaXQ9bXlzcWxfcXVlcnkoIlNFTEVDVCAqIEZST00gcGFnZXMgV0hFUkUgbGlua19wYWdlcz0nJGxpbmtfcGFnZXMnIik7DQokZGF0YXBvc3Q9bXlzcWxfZmV0Y2hfYXJyYXkoJHNxbF9lZGl0KTsNCiRyZWZpZCA9IHN0cmlwX3RhZ3MoJGRhdGFwb3N0WydpZF9wYWdlcyddKTsNCiR0aXRsZSA9IHN0cmlwX3RhZ3Moc3Vic3RyKCRkYXRhcG9zdFsndGl0bGUnXSwwLDI4KSk7DQokZnVsbHRpdGxlID0gc3RyaXBfdGFncygkZGF0YXBvc3RbJ3RpdGxlJ10pOw0KJHJlZmZfbGlua19wYWdlcyA9IHN0cmlwX3RhZ3MoJGRhdGFwb3N0WydsaW5rX3BhZ2VzJ10pOw0KJGtleXdvcmQgPSBzdHJpcF90YWdzKCRkYXRhcG9zdFsna2V5d29yZCddKTsgDQokY29udGVudCA9IGh0bWxlbnRpdGllcygkZGF0YXBvc3RbJ2NvbnRlbnQnXSk7DQokZGF0ZSA9IHN0cmlwX3RhZ3MoJGRhdGFwb3N0WydkYXRlJ10pOw==';
eval(base64_decode($pages)); ?>
<div class="row-fluid"><div class="span12"><h3 class="heading">Update Pages / <?PHP echo $title;?></h3>
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>pages-proses/?refid=<?PHP echo $refid;?>&amp;act=update" enctype="multipart/form-data" method="post">
<div class="formSep">
<div class="row-fluid">
<div class="span12">
<label>Title <span class="f_req">*</span></label>
<input type="text" name="title" class="span12" value="<?PHP echo $fulltitle;?>" required/>
</div></div>

<div class="row-fluid"><div class="span12">
<label>Keyword <span class="f_req">*</span></label>
<textarea name="keyword" id="txtarea_limit_chars" cols="1" rows="4" class="span12"><?PHP echo $keyword;?></textarea>
</div></div>
<hr>
<div class="row-fluid"><div class="span12">
<textarea name="content" id="editor1" cols="6" rows="3" class="span12"><?PHP echo $content;?></textarea>
</div></div>	  
<hr><script language="javascript">
CKEDITOR.replace( 'editor1', {
extraPlugins: 'magicline',// Ensure that magicline plugin, which is required for this sample, is loaded
filebrowserBrowseUrl : '<?PHP echo MY_ADMIN?>plugin/ckfinder/upload-img.html',
filebrowserImageBrowseUrl : '<?PHP echo MY_ADMIN?>plugin/ckfinder/upload-img.html?type=Images',
filebrowserFlashBrowseUrl : '<?PHP echo MY_ADMIN?>plugin/ckfinder/upload-img.html?type=Flash',
filebrowserUploadUrl : '<?PHP echo MY_ADMIN?>plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
filebrowserImageUploadUrl : '<?PHP echo MY_ADMIN?>plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl : '<?PHP echo MY_ADMIN?>plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
allowedContent: true 
});</script>

<div class="row-fluid"><div class="span6"><label>Time<span class="f_req">*</span></label>
<input type="text" name="time" class="span12" value="<?PHP echo $time;?>" id="tp_2" required></div>
<div class="span6"><label>Date<span class="f_req">*</span></label>
<input type="text" name="date" class="span12" id="dp1" value="<?PHP echo $date;?>" required></div>
</div>		
<input name="reff_link_pages" type="hidden" value="<?PHP echo $reff_link_pages;?>" readonly="" />														
<div class="form-actions">
<button class="btn btn-primary btn-large" name="editpages" type="submit"><i class="icon-save"></i> Publish</button>
<button type="reset" class="btn btn-large"><i class="icon-eraser"></i> Reset</button>
</div>

</form>
</div></div>
<?PHP } else { ?>


<div class="row-fluid"><div class="span12"><h3 class="heading">New Pages </h3>
 <form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>pages-proses/" method="post">
<div class="formSep">
<div class="row-fluid">
<div class="span12">
<label>Title <span class="f_req">*</span></label>
<input type="text" name="title" class="span12" value="<?PHP echo $title;?>" required/>
</div></div>

<div class="row-fluid"><div class="span12">
<label>Keyword<span class="f_req">*</span></label>
<textarea name="keyword" id="txtarea_limit_chars" cols="1" rows="4" class="span12"><?PHP echo $keyword;?></textarea>
</div></div>
<hr>
<div class="row-fluid"><div class="span12">
<textarea name="content" id="editor1" cols="10" rows="3" class="span12"><?PHP echo $content;?></textarea>
</div></div>	  
<hr>
<script language="javascript">
CKEDITOR.replace( 'editor1', {
extraPlugins: 'magicline',// Ensure that magicline plugin, which is required for this sample, is loaded
filebrowserBrowseUrl : '<?PHP echo MY_ADMIN?>plugin/ckfinder/upload-img.html',
filebrowserImageBrowseUrl : '<?PHP echo MY_ADMIN?>plugin/ckfinder/upload-img.html?type=Images',
filebrowserFlashBrowseUrl : '<?PHP echo MY_ADMIN?>plugin/ckfinder/upload-img.html?type=Flash',
filebrowserUploadUrl : '<?PHP echo MY_ADMIN?>plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
filebrowserImageUploadUrl : '<?PHP echo MY_ADMIN?>plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl : '<?PHP echo MY_ADMIN?>plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
allowedContent: true 
});</script>


<div class="row-fluid"><div class="span6"><label>Time<span class="f_req">*</span></label>
<input type="text" name="time" class="span12" value="<?PHP $jam = date('h:i A'); echo $jam;?>" id="tp_2" required></div>
<div class="span6"><label>Date<span class="f_req">*</span></label>
<input type="text" name="date" class="span12" id="dp1" value="<?PHP $tanggal= date('d-m-Y'); echo $tanggal;?>" required></div>
</div>																
<div class="form-actions">
<button class="btn btn-primary btn-large" name="addpages" type="submit"><i class="icon-save"></i> Publish</button>
<button type="reset" class="btn btn-large"><i class="icon-eraser"></i> Reset</button>
</div>
</form>
</div></div>
<?PHP }?>
</div></div>							
                          
<!-- sidebar -->
<?PHP include"../../in/panel.php";?> 
<?PHP include"../../head-js.php";?>
<script src="<?PHP echo MY_ADMIN?>js/forms/jquery.inputmask.min.js"></script>
<script src="<?PHP echo MY_ADMIN?>js/forms/jquery.autosize.min.js"></script>
<script src="<?PHP echo MY_ADMIN?>js/forms/jquery.counter.min.js"></script>
<script src="<?PHP echo MY_ADMIN?>js/forms/jquery.ui.touch-punch.min.js"></script>
<script src="<?PHP echo MY_ADMIN?>js/forms/jquery.spinners.min.js"></script>
            
<!-- datepicker -->
<script src="<?PHP echo MY_ADMIN?>lib/datepicker/bootstrap-datepicker.js"></script>
<script src="<?PHP echo MY_ADMIN?>lib/datepicker/bootstrap-timepicker.min.js"></script>
<!-- validation -->
<script src="<?PHP echo MY_ADMIN?>js/gebo_forms.js"></script>
</body></html>