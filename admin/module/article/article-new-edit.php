<?PHP session_start();
$config_='aW5jbHVkZSAoJy4uLy4uLy4uL2NvbmZpZy5waHAnKTsgDQppbmNsdWRlICgnLi4vLi4vcHJpdmF0L2FjdGl2YXNpLWxvZ2luLnBocCcpOw0K';
eval(base64_decode($config_));
$title='';
$keyword='';
$content='';?>
<!DOCTYPE html>
<html lang="en"><head>
<?PHP include"../../head.php";?>
<script src="<?PHP echo MY_ADMIN?>plugin/ckeditor/ckeditor.js"></script>
</head><body>
<?PHP include"../../in/header.php";?>
<!-- main content -->
<div id="contentwrapper"><div class="main_content"><nav>
<div id="jCrumbs" class="breadCrumb module"><ul><li><a href="<?PHP echo $nama_admin;?>"><i class="icon-home"></i></a></li>
<li><a href="<?PHP echo MY_ADMIN?>post/article">Post Article </a></li>
<li><?PHP if (empty($_GET['link_article'])){ echo"New Article";} else {echo"Update Article"; }?></li></ul></div></nav>

<?php  $warning_='aWYgKCFlbXB0eSgkX0dFVFsnZXJyb3InXSkpIHsgaWYgKCRfR0VUWydlcnJvciddID09IDEpIHsgZWNobyAnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZGFuZ2VyIj5TdWJtaXQgRXJyb3IgT24gU2VydmVyLi4uIQ0KPGJ1dHRvbiBjbGFzcz0iY2xvc2UiIGFyaWEtaGlkZGVuPSJ0cnVlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiB0eXBlPSJidXR0b24iPtc8L2J1dHRvbj48L2Rpdj4nOw0KJHRpdGxlPSRfU0VTU0lPTlsndGl0bGUnXTsgDQoka2V5d29yZD0kX1NFU1NJT05bJ2tleXdvcmQnXTsgDQokY2F0ZWdvcmllcz0kX1NFU1NJT05bJ2NhdGVnb3JpZXMnXTsgDQokY29udGVudD0kX1NFU1NJT05bJ2NvbnRlbnQnXTt9DQplbHNlIGlmICgkX0dFVFsnZXJyb3InXSA9PSAyKSB7IGVjaG8gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LWRhbmdlciI+RmllbGQgY2FuIG5vdCBiZSBlbXB0eS4uLiENCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj7XPC9idXR0b24+PC9kaXY+JzsNCiR0aXRsZT0kX1NFU1NJT05bJ3RpdGxlJ107IA0KJGtleXdvcmQ9JF9TRVNTSU9OWydrZXl3b3JkJ107IA0KJGNhdGVnb3JpZXM9JF9TRVNTSU9OWydjYXRlZ29yaWVzJ107IA0KJGNvbnRlbnQ9JF9TRVNTSU9OWydjb250ZW50J107O30gDQplbHNlIGlmICgkX0dFVFsnZXJyb3InXSA9PSAzKSB7IGVjaG8gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LWRhbmdlciI+VXBkYXRlIEFydGljbGUgRXJyb3IgT24gU2VydmVyLi4uISANCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj7XPC9idXR0b24+PC9kaXY+Jzt9fQ==';
eval(base64_decode($warning_));?>

								
<?PHP if(!empty($_GET['link_article'])){

$link_article =  mysql_real_escape_string(htmlentities($_GET['link_article'])); 
$get_='JHNxbF9lZGl0PW15c3FsX3F1ZXJ5KCJTRUxFQ1QgKiBGUk9NIGFydGljbGUgV0hFUkUgbGlua19hcnRpY2xlPSckbGlua19hcnRpY2xlJyIpOw0KJGRhdGFwb3N0PW15c3FsX2ZldGNoX2FycmF5KCRzcWxfZWRpdCk7DQokcmVmaWQgPSBzdHJpcF90YWdzKGh0bWxlbnRpdGllcygkZGF0YXBvc3RbJ2lkX2FydGljbGUnXSkpOw0KJHRpdGxlID0gc3RyaXBfdGFncygkZGF0YXBvc3RbJ3RpdGxlJ10pOw0KJGtleXdvcmQgPSBzdHJpcF90YWdzKCRkYXRhcG9zdFsna2V5d29yZCddKTsNCiRjb250ZW50ID0gaHRtbGVudGl0aWVzKCRkYXRhcG9zdFsnY29udGVudCddKTsNCiRyZWZmX2xpbmtfYXJ0aWNsZSA9IHN0cmlwX3RhZ3MoJGRhdGFwb3N0WydsaW5rX2FydGljbGUnXSk7DQokYV9jYXRlZ29yeSA9IHN0cmlwX3RhZ3MoJGRhdGFwb3N0IFsnY2F0ZWdvcmllcyddKTsNCiR0aW1lID0gc3RyaXBfdGFncygkZGF0YXBvc3RbJ3RpbWUnXSk7DQokZGF0ZSA9IHN0cmlwX3RhZ3MoJGRhdGFwb3N0WydkYXRlJ10pOw==';
eval(base64_decode($get_));?>
<div class="row-fluid"><div class="span12">
  <h3 class="heading">Update Article : <?PHP echo $title;?></h3>
  <form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>article-proses/?refid=<?PHP echo $refid;?>&amp;act=update" enctype="multipart/form-data" method="post">
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

<div class="row-fluid"><div class="span12">
<label>Categories<span class="f_req">*</span></label>
<select name="categories[]" data-placeholder="Select Categories" class="chosen-select" style="width:100%" multiple tabindex="4" required>
<?PHP $a_category = explode(',',$a_category);
$j_cat = 0;
while ($j_cat <= $jumlah_category){
$title = $a_category["$j_cat"];
echo "<option selected value='$title'>$title</option>";
$disabled = "title != $title";$j_cat++; }
$sql = mysql_query("select * from article_categories");
while($data = mysql_fetch_array($sql)){
$title = $data['title'];
echo "<option value='$title'>$title</option>";}?>
</select>
</div></div> <hr>
<div class="row-fluid"><div class="span12">
<textarea name="content" id="editor1" cols="10" rows="10" class="span12"><?PHP echo $content;?></textarea>
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
<input type="text" name="time" class="span12" value="<?PHP echo $time;?>" id="tp_2" required></div>
<div class="span6"><label>Date<span class="f_req">*</span></label>
<input type="text" name="date" class="span12" id="dp1" value="<?PHP echo $date;?>" required></div>
</div>

<input type="hidden" value="<?PHP echo $reff_link_article;?>" name="reff_link_article" readonly="">		
<div class="form-actions">
<button class="btn btn-primary btn-large" name="editarticle" type="submit"><i class="icon-save"></i> Update Article</button>
<button type="button" onClick="window.history.back(-1)" class="btn btn-large"><i class="icon-reply"></i> Back</button></div>
</div></form>
</div></div>
<?PHP } else { ?>

<div class="row-fluid"><div class="span12">
  <h3 class="heading">New Article </h3>
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>article-proses/" enctype="multipart/form-data" method="post">
<div class="formSep">
<div class="row-fluid">
<div class="span12">
<label>Title <span class="f_req">*</span></label>
<input type="text" name="title" class="span12" value="<?PHP echo $title;?>" />
</div></div>

<div class="row-fluid"><div class="span12">
<label>Keyword<span class="f_req">*</span></label>
<textarea name="keyword" id="txtarea_limit_chars" cols="1" rows="4" class="span12" required oninvalid="this.setCustomValidity('please insert keyword')"><?PHP echo $keyword;?></textarea>
</div></div>

<div class="row-fluid"><div class="span12">
<label>Categories<span class="f_req">*</span></label>
<select name="categories[]" data-placeholder="Select Categories" class="chosen-select" style="width:100%" multiple tabindex="4" required>
<?PHP $sql = mysql_query("select * from article_categories  order by article_categories.title asc"); 
while($data = mysql_fetch_array($sql)){
$categories = $data['title'];echo "<option value='$categories'>$categories</option>";}?>
</select></div></div>
	  <hr>
<div class="row-fluid"><div class="span12">
<textarea name="content" id="editor1" cols="10" rows="3"  class="span12"><?PHP echo $content;?></textarea>
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
<button class="btn btn-primary btn-large" name="addarticle" type="submit"><i class="icon-save"></i> Publish</button>
<button type="reset" class="btn btn-large"><i class="icon-eraser"></i> Reset</button>
</div>
</div></form>
</div></div>
<?PHP }?>



</div></div>
								
                    
            
<!-- sidebar -->
<?PHP include"../../in/panel.php";?> 
<script src="<?PHP echo MY_ADMIN?>js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="<?PHP echo MY_ADMIN?>lib/chosen/coosen.js" type="text/javascript"></script>
<script type="text/javascript">
var config = {
'.chosen-select'           : {},
'.chosen-select-deselect'  : {allow_single_deselect:true},
'.chosen-select-no-single' : {disable_search_threshold:10},
'.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
'.chosen-select-width'     : {width:"95%"}}
for (var selector in config) {
$(selector).chosen(config[selector]);}
</script>

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