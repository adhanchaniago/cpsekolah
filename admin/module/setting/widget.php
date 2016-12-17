<?PHP session_start();include ('../../../config.php');include ('../../privat/activasi-login.php');?>
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
</head><body>
<?PHP include"../../in/header.php";?>
<!-- main content -->
<div id="contentwrapper"><div class="main_content"><nav>
<div id="jCrumbs" class="breadCrumb module"><ul>
<li><a href="<?PHP echo MY_ADMIN?>"><i class="icon-home"></i></a></li><li>Setting</li> 
<li>Widget</li>
</ul>
</div></nav>
<?php if(!empty($_GET['message'])){ $message = $_GET['message']; if (!empty($_GET['reff'])) { if ($_GET['reff'] == 1) { echo '<div class="alert alert-error">File extension must be (txt)..!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 2) { echo '<div class="alert alert-error">Plugin Widget has been installed in your website..!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';} 
else if ($_GET['reff'] == 3) { echo '<div class="alert alert-error">Install Plugin Widget Error...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 4) { echo '<div class="alert alert-success">Install Plugin Widget Succes...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
// WIDGET LEFT
else if ($_GET['reff'] == 5) { echo '<div class="alert alert-error">Add Widget Error...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 6) { echo '<div class="alert alert-success">Add Widget Success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 000) { echo '<div class="alert alert-error">Field can not be empty...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 7) { echo '<div class="alert alert-success">'.$message.'
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 8) { echo '<div class="alert alert-error">Update Widget Error ...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 9) { echo '<div class="alert alert-success">Update Widget Success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 10) { echo '<div class="alert alert-success">Delete Widget Success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}}}?>


<?PHP if(!empty($_GET['refid'])){  
 $refid = $_GET['refid'];$type = $_GET['type'];  
$sql = mysql_query("select * from widget where refid='$refid' and type='$type'");
while($data=mysql_fetch_array($sql)){
$refid= strip_tags($data['refid']);
$title= strip_tags($data['title']);
$icon_widget=htmlentities($data['icon_widget']);
$icon_widget2=$data['icon_widget'];
$content = $data['content'];
$position = strip_tags($data['position']);
$wg_type = strip_tags($data['type']);
$myfile = fopen("../../../public/widget/$content", "r");?>

<?PHP if ($wg_type == "1"){?>
<div class="row-fluid"><div class="span12 form-horizontal well">
<p class="f_legend">Edit Widget - <i><?PHP echo $title;?></i> </p><div class="formSep"><div class="row-fluid">
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>set-wedget-proses/?refid=<?PHP echo $refid;?>&amp;act=editinstal" enctype="multipart/form-data" method="post">

<div class="row-fluid"><div class="span6"><label>Title</label>
<input type="text" name="title" id="w_name" class="span12" value="<?PHP echo $title;?>"></div>

<div class="span4"><label>Icon</label>
<input type="text" name="icon_widget" id="input" value="<?PHP echo $icon_widget;?>" placeholder="Click on icon to get html code" class="span12" required/>
</div>
<div class="span2"><label>&nbsp;</label>
<button type="button" onClick="window.open('<?PHP echo MY_ADMIN;?>icon.html', 'winpopup','toolbar=no,statusbar=no,menubar=no,resizable=no,width=1600,height=700');" class="btn">
<?PHP echo $icon_widget2;?> Cari</button>
</div>
</div>

<div class="row-fluid">
<div class="span12">
<div class="plugin"><h3>Plugin Widget <code style="font-size:16px;"><?PHP echo $content;?></code> </h3><br>
<textarea name="code"  cols="1" rows="25" class="span12" id="editor-area"><?PHP echo fread($myfile,filesize("../../../public/widget/$content")); ?></textarea>

</div></div>

<div class="span12"><label>&nbsp;</label>
<button class="btn btn-primary" name="installwidgetedit" type="submit"><i class="icon-ok"></i> Save</button>
<button type="button" onClick="location.href='<?PHP echo MY_ADMIN?>setting/widget';" class="btn"><i class="icon-mail-reply"></i> Cancel</button></div>
</div>
</form></div></div>
<?PHP }?> 
<?PHP if ($wg_type == "2"){?>
<div class="row-fluid"><div class="span12 form-horizontal well">
<p class="f_legend">Edit Widget - <i><?PHP echo $title;?></i> </p><div class="formSep"><div class="row-fluid">
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>install-blog-html/?refid=<?PHP echo $refid;?>&amp;act=edithtml" enctype="multipart/form-data" method="post">
<div class="row-fluid">
<div class="span6"><label>Icon</label>
<input type="text" name="icon_widget" id="input" value="<?PHP echo $icon_widget;?>" placeholder="Click on icon to get html code" class="span12" required/></div>

<div class="span2"><label>&nbsp; </label>
<button type="button" onClick="window.open('<?PHP echo MY_ADMIN;?>icon.html', 'winpopup','toolbar=no,statusbar=no,menubar=no,resizable=no,width=500,height=700');" class="btn">
<?PHP echo $icon_widget2;?> Cari</button></div>

<div class="span4"><label>Type Widget <span class="f_req">*</span></label>
<select name="position" style="width:100%" required>
<option value="left" <?php if("left" == $position){ echo "selected='selected'"; }?>>Post</option>
<option value="right" <?php if("right" == $position){ echo "selected='selected'"; }?>>Sidebar</option>
</select></div></div>
<div class="row-fluid">
<div class="span12"><label>Title</label>
<input type="text" name="title" id="w_name" value="<?PHP echo $title;?>" class="span12" /></div>
</div>
<div class="row-fluid">
<div class="span12">
<label>HTML <span class="f_req">*</span></label>
<textarea name="content"  cols="1" rows="8" id="editor-area" class="span12" required><?PHP echo $content;?></textarea>
</div>

<div class="span3"><label>&nbsp;</label>
<button class="btn btn-primary" name="widgethtml" type="submit"><i class="icon-ok"></i> Save</button>
<button type="button" onClick="location.href='<?PHP echo MY_ADMIN?>setting/widget';" class="btn"><i class="icon-mail-reply"></i> Cancel</button></div>
</div>
</form></div></div></div></div><?PHP }}?>

<?PHP } else {?>
<div class="row-fluid"><div class="span8 form-horizontal well">
<div class="pull-right">
<a data-toggle="modal" data-backdrop="static" href="#myModal1" class="btn btn-mini btn-inverse"><i class="icon-plus"></i> Add</a></div><p class="f_legend">Post</p>
<div class="control-group">

<!-- start: collum 1 -->
<?PHP $sql2 =mysql_query("select * from widget where position='left' order by widget.number ASC");
$no=0;
while ($data_wg1 = mysql_fetch_array($sql2)){$no++;
$wg_id = $data_wg1['refid'];
$type = $data_wg1['type'];
$wg_number = $data_wg1['number'];$wg_to_up = $wg_number - 1;$wg_to_down = $wg_number + 1;?>
<div class="formSep">
<div class="row-fluid">
<div class="span12"><div class="w-box"><div class="w-box-header"><?PHP echo strip_tags($data_wg1['title']);?>
<div class="pull-right"><div class="btn-group">
<a class="btn dropdown-toggle btn-mini btn-info" data-toggle="dropdown" href="#">
<i class="icon-cog"></i> <span class="caret"></span>
</a>
<ul class="dropdown-menu">
<?PHP if ($wg_number != 1){?>
<li><a href="<?PHP echo MY_ADMIN?>set-wedget-proses?refid=<?PHP echo $wg_id;?>&from=<?PHP echo $wg_number;?>=&to=<?PHP echo $wg_to_up;?>&amp;act=set2"><i class="icon-level-up"></i> Up</a></li><?PHP }?>
<?PHP if ($wg_number != $wg_last_number){?>
<li><a href="<?PHP echo MY_ADMIN?>set-wedget-proses/?refid=<?PHP echo $wg_id;?>&from=<?PHP echo $wg_number;?>=&to=<?PHP echo $wg_to_down;?>&amp;act=set2"><i class="icon-level-down"></i> Down</a></li><?PHP }?>
<li><a href="<?PHP echo MY_ADMIN?>setting/widget/?refid=<?PHP echo $wg_id;?>&amp;type=<?PHP echo $type;?>"><i class="icon-pencil"></i> Edit</a></li>
<li><a href="<?PHP echo MY_ADMIN?>set-wedget-proses/?refid=<?PHP echo $wg_id;?>&amp;action=delete" onClick="return confirm('Are you sure you want ot delete this thread.?');"><i class="icon-trash"></i> Delete</a></li>
</ul>
</div></div></div></div></div></div></div>
<?PHP }?>

<!-- start:MODAL -->
<div class="modal hide" id="myModal1">
<div class="modal-header" style="height:31px;"><button class="close" data-dismiss="modal"><i class="icon-remove"></i></button>
<ul class="nav nav-tabs">
<li class="active"><a href="#tab1" data-toggle="tab">Plugin</a></li>
<li><a href="#tab2" data-toggle="tab">Html</a></li>
</ul></div>
<div class="modal-body"><div class="tab-content">
<div class="tab-pane active" id="tab1">
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>set-wedget-proses/?act=install" enctype="multipart/form-data" method="post">

<div class="row-fluid"><div class="span7"><label>Icon</label>
<input type="text" name="icon_widget" id="input" onClick="window.open('<?PHP echo MY_ADMIN;?>icon.html', 'winpopup','toolbar=no,statusbar=no,menubar=no,resizable=no,width=1600,height=700');" placeholder="Click on icon to get html code" class="span12" /></div>
<div class="span3"><label>Type Widget <span class="f_req">*</span></label>
<select name="position" required>
<option value="left" >Post</option>
<option value="right" >Sidebar</option>
</select>
</div></div>
<div class="row-fluid">
<div class="span12"><label>Title</label>
<input type="text" name="title" id="w_name" class="span12" /></div>
</div>
<hr>
<div class="row-fluid">
<div class="span9">
<label>Install TXT Widget<span class="f_req">*</span></label>
<input type="file" name="content" id="uni_file" class="uni_style" accept="file/*" required/></div>

<div class="span3"><label>&nbsp;</label>
<button class="btn btn-primary" name="installwidget" type="submit"><i class="icon-ok"></i> Install</button></div>
</div>
</form>
<p> Download Plugin <a href="#">View</a></p> </div>
<!-- start:html -->
<div class="tab-pane" id="tab2">
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>install-blog-html?act=sethtml" enctype="multipart/form-data" method="post">
<div class="span7"><label>Icon</label>
<input type="text" name="icon_widget" id="input2" onClick="window.open('<?PHP echo MY_ADMIN;?>icon.html', 'winpopup','toolbar=no,statusbar=no,menubar=no,resizable=no,width=700,height=700');" placeholder="Click on icon to get html code" class="span12" />
</div>

<div class="span3"><label>Type Widget <span class="f_req">*</span></label>
<select name="position" required>
<option value="left">Post</option>
<option value="right">Sidebar</option>
</select></div>
<div class="row-fluid">
<div class="span12"><label>Title</label>
<input type="text" name="title" id="w_name" class="span12" /></div>
</div>

<div class="row-fluid">
<div class="span12">
<label>HTML <span class="f_req">*</span></label>
<textarea name="content"  cols="1" rows="8" id="editor-area"  class="span10"></textarea>
</div>

<div class="span5"><label>&nbsp;</label>
<button class="btn btn-primary" name="widgethtmlblog" type="submit"><i class="icon-ok"></i> Save</button>
<button class="btn" data-dismiss="modal"><i class="icon-remove"></i> Close</button></div>
</div>
</form>
</div></div></div>
<div class="modal-footer">
<a href="#" class="btn" data-dismiss="modal">Close</a>
</div>
</div>
							
</div></div>


<div class="span4 form-horizontal well"><div class="control-group"><div class="formSep">
<div class="pull-right"><a data-toggle="modal" data-backdrop="static" href="#myModal1" class="btn btn-mini btn-inverse"><i class="icon-plus"></i> Add</a></div><p class="f_legend">Widget</p>


<!-- start: collum 1 -->
<?PHP $sql3 =mysql_query("select * from widget where position='right' order by widget.number2 ASC");
$no=0;
while ($data_wg1 = mysql_fetch_array($sql3)){$no++;
$wg_id = $data_wg1['refid'];
$type = $data_wg1['type'];
$wg_number = $data_wg1['number2'];$wg_to_up = $wg_number - 1;$wg_to_down = $wg_number + 1;?>
<div class="row-fluid">
<div class="span12"><div class="w-box"><div class="w-box-header"><?PHP echo strip_tags($data_wg1['title']);?>
<div class="pull-right"><div class="btn-group">
<a class="btn dropdown-toggle btn-mini btn-warning" data-toggle="dropdown" href="#">
<i class="icon-cog"></i> <span class="caret"></span>
</a>
<ul class="dropdown-menu">
<?PHP if ($wg_number != 1){?>
<li><a href="<?PHP echo MY_ADMIN?>set-wedget-proses/?refid=<?PHP echo $wg_id;?>&from=<?PHP echo $wg_number;?>=&to=<?PHP echo $wg_to_up;?>&amp;act=set2"><i class="icon-level-up"></i> Up</a></li><?PHP }?>
<?PHP if ($wg_number !=''){?>
<li><a href="<?PHP echo MY_ADMIN?>set-wedget-proses/?refid=<?PHP echo $wg_id;?>&from=<?PHP echo $wg_number;?>=&to=<?PHP echo $wg_to_down;?>&amp;act=set2"><i class="icon-level-down"></i> Down</a></li><?PHP }?>
<li><a href="<?PHP echo MY_ADMIN?>setting/widget/?refid=<?PHP echo $wg_id;?>&amp;type=<?PHP echo $type;?>"><i class="icon-pencil"></i> Edit</a></li>

<li><a href="<?PHP echo MY_ADMIN?>set-wedget-proses/?refid=<?PHP echo $wg_id;?>&amp;action=delete" onClick="return confirm('Are you sure you want ot delete this thread.?');"><i class="icon-trash"></i> Delete</a></li>
</ul>
</div></div></div></div></div></div>
<?PHP }}?>
</div></div></div></div></div>

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
</div>
</div></div>
</body></html>