<?PHP session_start();include ('../../../config.php');include ('../../privat/activasi-login.php');
include ('../../in/time-line.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
	<?PHP include"../../head.php";?>
<link rel="stylesheet" href="<?PHP echo MY_ADMIN?>plugin/textarea-higlight/codemirror.css">
<script type="text/javascript" src="<?PHP echo MY_ADMIN?>plugin/textarea-higlight/codemirror.js"></script>
<script type="text/javascript" src="<?PHP echo MY_ADMIN?>plugin/textarea-higlight/javascript.js"></script>
<script type="text/javascript" src="<?PHP echo MY_ADMIN?>plugin/textarea-higlight/css.js"></script>
<script type="text/javascript" src="<?PHP echo MY_ADMIN?>plugin/textarea-higlight/xml.js"></script>
<script type="text/javascript" src="<?PHP echo MY_ADMIN?>plugin/textarea-higlight/htmlmixed.js"></script>
<script type="text/javascript" src="<?PHP echo MY_ADMIN?>plugin/textarea-higlight/zen_codemirror.js"></script>
</head>
    <body>
<?PHP include"../../in/header.php";?>
<!-- main content -->
<div id="contentwrapper"><div class="main_content"><nav>
<div id="jCrumbs" class="breadCrumb module"><ul><li><a href="<?PHP echo MY_ADMIN?>"><i class="icon-home"></i></a></li>
<li>Setting</li><li>Basic</li></ul></div></nav>
<?php  if (!empty($_GET['reff'])) { if ($_GET['reff'] == 1) { echo '<div class="alert alert-error">Canges Setting Basic Eror...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 2) { echo '<div class="alert alert-success">Canges Setting Basic Success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';} 
else if ($_GET['reff'] == 3) { echo '<div class="alert alert-error">Field can not be empty...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['error'] == "images00") { echo '<div class="alert alert-danger">Upload Images Failed, Ekstensi bmp, gif, jpg, jpeg, png...! 
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['error'] == "images01") { echo '<div class="alert alert-danger">Upload Images Failed, Size Images Max 50 KB..!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}}

$myfile = fopen("../../../css/main.css", "r");?>


<div class="row-fluid"><div class="span12">
  <h3 class="heading">Edit Template</h3>
  <form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>article-proses/" enctype="multipart/form-data" method="post">
<div class="formSep">

<div class="row-fluid"><div class="span12">
<textarea name="code"  cols="1" rows="30" class="span12" id="editor-area" required><?PHP echo fread($myfile,filesize("../../../css/main.css")); ?></textarea></div></div>
<div class="form-actions">
<button class="btn btn-primary btn-large" name="addarticle" type="submit"><i class="icon-save"></i> Publish</button>
<button type="reset" class="btn btn-large"><i class="icon-eraser"></i> Reset</button>
</div>
</div></form>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div></div>
								
                    
            
<!-- sidebar -->
<?PHP include"../../in/panel.php";?> 
<?PHP include"../../head-js.php";?>
<script type="text/javascript">
      var delay;
      var editor = CodeMirror.fromTextArea(document.getElementById('editor-area'), {
        mode: 'text/html',
        tabSize:8,
        indentUnit:8,
        matchBrackets: true,
        lineNumbers:true,
        onChange: function() {
          clearTimeout(delay);
          delay = setTimeout(updatePreview, 300);
        },
       	onKeyEvent: function() {
			return zen_editor.handleKeyEvent.apply(zen_editor, arguments);
		}
      });
      

</script>
<script src="<?PHP echo MY_ADMIN?>lib/colorbox/jquery.colorbox.min.js"></script>
<!-- tables functions -->
<script src="<?PHP echo MY_ADMIN?>js/gebo_tables.js"></script>
</div></div>
</body></html>