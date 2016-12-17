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
<li>Configurasi</li>
</ul></div></nav>
<?php  if (!empty($_GET['reff'])) { 
if ($_GET['reff'] == 1) {echo '<div class="alert alert-success">Configurasi Htaccess success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if($_GET['reff'] == 2) {echo '<div class="alert alert-success">Configurasi Robots success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if($_GET['reff'] == 3) {echo '<div class="alert alert-success">Setting Meta Tag success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}}

$myfile = fopen("../../../.HTACCESS", "r");
$my_robots = fopen("../../../robots.txt", "r");
$meta = fopen("../../../lib/meta_tag.php", "r");?>
<div class="row-fluid"><div class="span12"> 
<div class="tabbable">
<ul class="nav nav-tabs">
<li class="active"><a href="#tab1" data-toggle="tab">Setting Htaccess</a></li>
<li><a href="#tab2" data-toggle="tab">Setting Robots</a></li>
<li><a href="#tab3" data-toggle="tab">Setting Meta Tag</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane active" id="tab1">
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>configurasi-proses/" enctype="multipart/form-data" method="post">
<div class="formSep">

<div class="row-fluid"><div class="span12">
  <textarea name="htaccess" style="height:500px!important;" class="span12" required>
<?PHP echo fread($myfile,filesize("../../../.HTACCESS")); ?></textarea>
</div>
</div>
<div class="form-actions">
<button class="btn btn-primary btn-large" name="setting_htaccess" type="submit"><i class="icon-save"></i> Save</button>
<button type="reset" class="btn btn-large"><i class="icon-eraser"></i> Reset</button>
</div>
</div></form>
</div>
<div class="tab-pane" id="tab2">
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>configurasi-proses/" method="post">
<div class="formSep">

<div class="row-fluid"><div class="span12">
<textarea name="meta" style="height:500px!important;" class="span12">
<?PHP echo fread($my_robots,filesize("../../../robots.txt")); ?></textarea></div></div>
<div class="form-actions">
<button class="btn btn-primary btn-large" name="setting_robots" type="submit"><i class="icon-save"></i> Save</button>
<button type="reset" class="btn btn-large"><i class="icon-eraser"></i> Reset</button>
</div>
</div></form>
</div>

<div class="tab-pane" id="tab3">
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>configurasi-proses/" method="post">
<div class="formSep">

<div class="row-fluid"><div class="span12">
 <textarea name="meta" style="height:500px!important;" class="span12" id="editor-area" required>
<?PHP echo fread($meta,filesize("../../../lib/meta_tag.php")); ?></textarea></div></div>
<div class="form-actions">
<button class="btn btn-primary btn-large" name="setting_meta" type="submit"><i class="icon-save"></i> Save</button>
<button type="reset" class="btn btn-large"><i class="icon-eraser"></i> Reset</button>
</div>
</div></form>
</div>
</div></div>
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
</div></div>
</body></html>