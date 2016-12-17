<?PHP session_start();
$config_='aW5jbHVkZSAoJy4uLy4uLy4uL2NvbmZpZy5waHAnKTsgDQppbmNsdWRlICgnLi4vLi4vcHJpdmF0L2FjdGl2YXNpLWxvZ2luLnBocCcpOw0KJHRpdGxlPScnOw0KJGxvY2F0aW9uPScnOw0KJGNvbnRlbnQ9Jyc7';
eval(base64_decode($config_));?>
<!DOCTYPE html>
<html lang="en"><head>
<?PHP include"../../head.php";?>
<script src="<?PHP echo MY_ADMIN?>plugin/ckeditor/ckeditor.js"></script>
</head><body>
<?PHP include"../../in/header.php";?>
<!-- main content -->
<div id="contentwrapper"><div class="main_content"><nav>
<div id="jCrumbs" class="breadCrumb module"><ul><li><a href="<?PHP echo MY_ADMIN?>"><i class="icon-home"></i></a></li>
<li><a href="<?PHP echo MY_ADMIN?>post/agenda">Post Agenda </a></li>
<li><?PHP if (empty($_GET['link_agenda'])){ echo"New Agenda";} else {echo"Update Agenda"; }?></li></ul></div></nav>

<?php  $warning_='aWYgKCFlbXB0eSgkX0dFVFsnZXJyb3InXSkpIHsgaWYgKCRfR0VUWydlcnJvciddID09IDEpIHsgZWNobyAnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZGFuZ2VyIj5TdWJtaXQgRXJyb3IgT24gU2VydmVyLi4uIQ0KPGJ1dHRvbiBjbGFzcz0iY2xvc2UiIGFyaWEtaGlkZGVuPSJ0cnVlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiB0eXBlPSJidXR0b24iPtc8L2J1dHRvbj48L2Rpdj4nOw0KJHRpdGxlPSRfU0VTU0lPTlsndGl0bGUnXTsNCiRsb2NhdGlvbj0kX1NFU1NJT05bJ2xvY2F0aW9uJ107DQokY29udGVudD0kX1NFU1NJT05bJ2NvbnRlbnQnXTt9DQplbHNlIGlmICgkX0dFVFsnZXJyb3InXSA9PSAyKSB7IGVjaG8gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LWRhbmdlciI+RmllbGQgY2FuIG5vdCBiZSBlbXB0eS4uLiENCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj7XPC9idXR0b24+PC9kaXY+JzsNCiR0aXRsZT0kX1NFU1NJT05bJ3RpdGxlJ107DQokbG9jYXRpb249JF9TRVNTSU9OWydsb2NhdGlvbiddOw0KJGNvbnRlbnQ9JF9TRVNTSU9OWydjb250ZW50J107fSANCmVsc2UgaWYgKCRfR0VUWydlcnJvciddID09IDMpIHsgZWNobyAnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZGFuZ2VyIj5VcGRhdGUgQWdlbmRhIEVycm9yIE9uIFNlcnZlci4uLiEgDQo8YnV0dG9uIGNsYXNzPSJjbG9zZSIgYXJpYS1oaWRkZW49InRydWUiIGRhdGEtZGlzbWlzcz0iYWxlcnQiIHR5cGU9ImJ1dHRvbiI+1zwvYnV0dG9uPjwvZGl2Pic7fX0=';
eval(base64_decode($warning_));?>

								
<?PHP if(!empty($_GET['link_agenda'])){
$agenda='JGxpbmtfYWdlbmRhID0gIG15c3FsX3JlYWxfZXNjYXBlX3N0cmluZyhodG1sZW50aXRpZXMoJF9HRVRbJ2xpbmtfYWdlbmRhJ10pKTsNCiRzcWxfZWRpdD1teXNxbF9xdWVyeSgiU0VMRUNUICogRlJPTSBhZ2VuZGEgV0hFUkUgbGlua19hZ2VuZGE9JyRsaW5rX2FnZW5kYSciKTsNCiRkYXRhcG9zdD1teXNxbF9mZXRjaF9hcnJheSgkc3FsX2VkaXQpOw0KJHJlZmlkID0gc3RyaXBfdGFncygkZGF0YXBvc3RbJ2lkX2FnZW5kYSddKTsNCiRmdWxsdGl0bGUgPSBzdHJpcF90YWdzKCRkYXRhcG9zdFsndGl0bGUnXSk7DQokcmVmZl9saW5rX2FnZW5kYSA9IHN0cmlwX3RhZ3MoJGRhdGFwb3N0WydsaW5rX2FnZW5kYSddKTsNCiRsb2NhdGlvbj0gc3RyaXBfdGFncygkZGF0YXBvc3RbJ2xvY2F0aW9uJ10pOyANCiRjb250ZW50ID0gaHRtbGVudGl0aWVzKCRkYXRhcG9zdFsnY29udGVudCddKTsNCiRkYXRlID0gc3RyaXBfdGFncygkZGF0YXBvc3RbJ2RhdGUnXSk7DQokdGltZSA9IHN0cmlwX3RhZ3MoJGRhdGFwb3N0Wyd0aW1lJ10pOw==';
eval (base64_decode($agenda)); ?>
<div class="row-fluid"><div class="span12">
  <h3 class="heading">Update Agenda : <?PHP echo $fulltitle;?></h3>
  <form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>agenda-proses/?refid=<?PHP echo $refid;?>&amp;act=update" enctype="multipart/form-data" method="post">
<div class="formSep">
<div class="row-fluid">
<div class="span12">
<label>Title <span class="f_req">*</span></label>
<input type="text" name="title" class="span12" value="<?PHP echo $fulltitle;?>" required/>
</div></div>

<div class="row-fluid"><div class="span12">
<label>Location <span class="f_req">*</span></label>
<input type="text" name="location" class="span12" value="<?PHP echo $location;?>" required/></div></div>

<hr>
<div class="row-fluid"><div class="span12">
<textarea name="content" id="editor1" cols="10" rows="10" class="span12"><?PHP echo $content;?></textarea>
</div></div>	  
<hr>	  
<script language="javascript">
CKEDITOR.replace( 'editor1', {
allowedContent: true 
});</script>

<div class="row-fluid"><div class="span6"><label>Time<span class="f_req">*</span></label>
<input type="text" name="time" class="span12" value="<?PHP echo $time;?>" id="tp_2" required></div>
<div class="span6"><label>Date<span class="f_req">*</span></label>
<input type="text" name="date" class="span12" id="dp1" value="<?PHP echo $date;?>" required></div>
</div>

<input type="hidden" value="<?PHP echo $reff_link_agenda;?>" name="reff_link_agenda" readonly="">		
<div class="form-actions">
<button class="btn btn-primary btn-large" name="editagenda" type="submit"><i class="icon-save"></i> Update Agenda</button>
<button type="button" onClick="window.history.back(-1)" class="btn btn-large"><i class="icon-reply"></i> Back</button></div>
</div></form>
</div></div>
<?PHP } else { ?>

<div class="row-fluid"><div class="span12">
  <h3 class="heading">New Article </h3>
  <form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>agenda-proses/" enctype="multipart/form-data" method="post">
<div class="formSep">
<div class="row-fluid">
<div class="span12">
<label>Title <span class="f_req">*</span></label>
<input type="text" name="title" class="span12" value="<?PHP echo $title;?>" requered/>
</div></div>

<div class="row-fluid"><div class="span12">
<label>Location <span class="f_req">*</span></label>
<input type="text" name="location" class="span12" value="<?PHP echo $location;?>" requered/>
</div></div>
<hr>
<div class="row-fluid"><div class="span12">
<textarea name="content" id="editor1" cols="10" rows="3"  class="span12"><?PHP echo $content;?></textarea>
</div></div>	  
<hr>	  
<script language="javascript">
CKEDITOR.replace( 'editor1', {
extraPlugins: 'magicline',// Ensure that magicline plugin, which is required for this sample, is loaded
allowedContent: true 
});</script>

<div class="row-fluid"><div class="span6"><label>Time <span class="f_req">*</span></label>
<input type="text" name="time" class="span12" value="<?PHP $jam = date('h:i A'); echo $jam;?>" id="tp_2" required></div>
<div class="span6"><label>Date <span class="f_req">*</span></label>
<input type="text" name="date" class="span12" id="dp1" value="<?PHP $tanggal= date('d-m-Y'); echo $tanggal;?>" required></div>
</div>

																		
<div class="form-actions">
<button class="btn btn-primary btn-large" name="addagenda" type="submit"><i class="icon-save"></i> Publish</button>
<button type="reset" class="btn btn-large"><i class="icon-eraser"></i> Reset</button>
</div>
</div></form>
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
</div></div>
</body></html>