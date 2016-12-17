<?PHP session_start();include ('../../../config.php');include ('../../privat/activasi-login.php');
include ('../../in/time-line.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
<?PHP include"../../head.php";?>
<script type="text/javascript">
function change_to_1(){
$("#advanced_1").fadeIn("slow");
}
function change_to_2(){
$("#advanced_2").fadeIn("slow");
}
function change_to_none(){
$("#advanced_1").fadeOut("slow");
}
function change_to_none2(){
$("#advanced_2").fadeOut("slow");
}
</script>
 <script language="javascript"> 
function changeSatu (form) { form.echo.value = form.images.value }  
function changeDua (form) { form.echodua.value = form.imagesdua.value }  
</script>
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
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}}?>


<?PHP include('../../../lib/ini.lib.php');
$config = get_parse_ini('../../../lib/config.ini.php');
$datetime = $config['config']['datetime'];
$show_blog = $config['config']['show_blog'];
$related_blog = $config['config']['related_blog'];
$show_agenda= $config['config']['show_agenda'];
$show_download = $config['config']['show_download'];
$comments_blog= $config['config']['comments_blog'];
$date=date("d-m-Y");
// set date indo
$tanggal = date('D, d M Y', strtotime($date));
$dateindo = dateindo($tanggal);
/////////////// KONTAK ============= /////////////////
$no_hp1_admin= $config['config']['no_hp1_admin'];
$no_hp2_admin= $config['config']['no_hp2_admin'];
$pin_admin= $config['config']['pin_admin'];
$email_admin= $config['config']['email_admin'];
$alamat_admin= $config['config']['alamat_admin'];

///////////////////////////==SOSIAL==////////////////////////////
$my_facebook= $config['config']['my_facebook'];
$my_twitter= $config['config']['my_twitter'];
$my_google= $config['config']['my_google'];
$my_pinterest= $config['config']['my_pinterest'];
$my_linkedin= $config['config']['my_linkedin'];
$my_rss= $config['config']['my_rss'];
 ?>
<div class="row-fluid"><div class="span12"><h3 class="heading">Setting - Basic</h3> <div class="row-fluid"><div class="span12">
<div class="tabbable">
<ul class="nav nav-tabs">
<li class="active"><a href="#tab1" data-toggle="tab">Basic</a></li>
<li><a href="#tab2" data-toggle="tab">Post  &amp; Comments </a></li>
<li><a href="#tab3" data-toggle="tab">Contact</a></li>
<li><a href="#tab4" data-toggle="tab">Sosial</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="tab1">
<form class="form-horizontal" name="form1" action="<?PHP echo MY_ADMIN?>setting-proses" enctype="multipart/form-data" method="post">
<fieldset>
<div class="control-group formSep">
<div class="span6">
<div class="widgetweb span12">
<div class="w-box">
<div class="w-box-header"><img src="<?PHP echo MY_PATH?>images/<?PHP echo $favicon_basic;?>" width="20" height="20"> Favicon
<div class="pull-right"><div class="btn-group"><a class="btn dropdown-toggle btn-mini btn-info" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
<ul class="dropdown-menu"><li><a onClick="change_to_1()"><i class="icon-pencil"></i> Edit</a></li></ul>
</div></div>
</div></div></div>
<div class="tooltip-demo well" id="advanced_1" style="display:none">
<div class="row-fluid">
<?PHP if($favicon_basic == ''){?>
<img src="<?PHP echo MY_ADMIN?>img/no_img_180.png" width="80" height="80"><?PHP } else{ ?>
<img src="<?PHP echo MY_PATH?>images/<?PHP echo $favicon_basic;?>" width="80" height="80"><?PHP }?>
<label>Ekstensi bmp, gif, jpg, jpeg, png dan Max size : 50x50 / 10 KB</label>
<input type="file" name="favicon" id="images" onChange="changeSatu(this.form)" class="uni_style" accept="image/*"/>	
 <input id="echo" type="hidden" name="gambarsatu" value="<?PHP echo $favicon_basic;?>" readonly="readonly"></input>  
<div class="pull-right"><button class="btn" onClick="change_to_none()" type="button">Cancel</button></div>
</div></div></div>


<div class="span6">
<div class="widgetweb span12">
<div class="w-box">
<div class="w-box-header">
<?PHP if($logo_basic == ''){?>
<img src="<?PHP echo MY_ADMIN?>img/no_img_180.png" width="20" height="20"><?PHP } else{ ?>
<img src="<?PHP echo MY_PATH?>images/<?PHP echo $logo_basic;?>" width="20" height="20"><?PHP }?> Logo
<div class="pull-right"><div class="btn-group"><a class="btn dropdown-toggle btn-mini btn-info" data-toggle="dropdown" href="#"><i class="icon-cog"></i> <span class="caret"></span></a>
<ul class="dropdown-menu"><li><a onClick="change_to_2()"><i class="icon-pencil"></i> Edit</a></li></ul>
</div></div>
</div></div></div>
<div class="tooltip-demo well" id="advanced_2" style="display:none">
<div class="row-fluid">
<img src="<?PHP echo MY_PATH?>images/<?PHP echo $logo_basic;?>" width="130" height="80">
<label>Ekstensi bmp, gif, jpg, jpeg, png dan Max size : 50x50 / 50 KB</label>
<input type="file" name="logo" id="imagesdua" onChange="changeDua(this.form)"  class="uni_style" accept="image/*"/>	
<input id="echodua" type="hidden" name="gambardua" value="<?PHP echo $logo_basic;?>" readonly="readonly"></input>
<div class="pull-right"><button class="btn" onClick="change_to_none2()" type="button">Cancel</button></div>
</div></div></div>

</div>


<div class="control-group formSep"><label for="u_fname" class="control-label">Title Website <span class="f_req">*</span></label>
<div class="controls">
<input type="text" id="u_fname" name="title" class="input-xlarge span12" value="<?PHP echo $title_basic;?>" />
</div></div>
<div class="control-group formSep">
<label for="u_email" class="control-label">Deskripsi <span class="f_req">*</span></label>
<div class="controls">
<textarea rows="3" id="u_signature" name="deskripsi" class="input-xlarge span12"><?PHP echo $deskripsi_basic;?></textarea>
</div></div>

<div class="control-group formSep">
<label for="u_email" class="control-label">Keyword <span class="f_req">*</span></label>
<div class="controls">
<textarea rows="3" id="u_signature" name="keyword" class="input-xlarge span12"><?PHP echo $keyword_basic;?></textarea>
</div></div>

<div class="control-group">
<div class="controls">
<button class="btn btn-primary btn-large" name="setbasic" type="submit"><i class="icon-save"></i> Save changes</button>
<button class="btn btn-large" type="reset"><i class="icon-eraser"></i> Reset</button>
</div>
</div>
</fieldset>
</form>
</div>
<div class="tab-pane" id="tab2">
<form class="form-horizontal" name="form1" action="<?PHP echo $nama_admin?>setting-proses" enctype="multipart/form-data" method="post">
<fieldset>

<div class="control-group formSep">
<label for="u_fname" class="control-label">Title Website </label>
<div class="controls">
<input type="text" id="u_fname" class="input-xlarge span12" value="<?PHP echo $title_basic ;?>" readonly="" />
</div></div>
<div class="control-group formSep">
<label for="u_email" class="control-label">Date <span class="f_req">*</span></label>
<div class="controls">
<select name="datetime" required>
<option value="tgl_berlalu" <?php if($datetime == $datetime){ echo "selected='selected'"; }?>><?PHP echo $date;?></option>
<option value="tgl_standar" <?php if($datetime == "tgl_standar"){ echo "selected='selected'"; }?>><?PHP echo $dateindo;?></option>
</select>
</div></div>

<div class="control-group formSep">
<div class="span6">
<label for="u_email" class="control-label">Show Article <span class="f_req">*</span></label>
<div class="controls">
<input type="number" id="sp_basic" name="show_blog" class="span12" value="<?PHP echo $show_blog;?>" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" required>
</div></div>
<div class="span6">
<label for="u_email" class="control-label">Related Article <span class="f_req">*</span></label>
<div class="controls">
<input type="number" id="sp_basic2" name="related_blog" class="span12" value="<?PHP echo $related_blog;?>" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" required>
</div></div>
</div>


<div class="control-group formSep">
<div class="span6">
<label for="u_email" class="control-label">Show Agenda <span class="f_req">*</span></label>
<div class="controls">
<input type="number" id="sp_basic3" name="show_agenda" class="span12" value="<?PHP echo $show_agenda;?>" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')"  required/>
</div></div>
<div class="span6">
<label for="u_email" class="control-label">Show File Download <span class="f_req">*</span></label>
<div class="controls">
<input type="number" id="sp_basic4" name="show_download" class="span12" value="<?PHP echo $show_download;?>" onKeyUp="this.value=this.value.replace(/[^0-9]/g,'')" required/>
</div></div>
</div>



<div class="control-group formSep">
<div class="span6">
<label for="u_fname" class="control-label">Comments <span class="f_req">*</span></label>
<div class="controls">
<select name="comments_blog" class="span12" required>
<option value="show" <?php if($comments_blog == "show"){ echo "selected='selected'"; }?>>Show</option>
<option value="hidden" <?php if($comments_blog == "hidden"){ echo "selected='selected'"; }?>>Hidden</option>
</select>
</div></div>
</div>

<div class="control-group">
<div class="controls">
<button class="btn btn-primary btn-large" name="setpostandcomments" type="submit"><i class="icon-save"></i> Save changes</button>
<button class="btn btn-large" type="reset"><i class="icon-eraser"></i> Reset</button>
</div>
</div>
</fieldset>
</form>
</div>
<div class="tab-pane" id="tab3">
<form class="form-horizontal" name="form1" action="<?PHP echo MY_ADMIN?>setting-proses" enctype="multipart/form-data" method="post">
<fieldset>
<div class="control-group formSep">
<label for="u_fname" class="control-label">Title Website </label>
<div class="controls">
<input type="text" id="u_fname" class="input-xlarge span12" value="<?PHP echo $title_basic;?>" readonly=""/>
</div></div>
<div class="control-group formSep">
<label for="u_email" class="control-label">No Henpone <span class="f_req">*</span></label>
<div class="controls">
<input type="text" id="u_fname" name="no_hp1_admin" class="input-xlarge span12" value="<?PHP echo $no_hp1_admin ;?>" required/>
</div></div>

<div class="control-group formSep">
<label for="u_email" class="control-label">No Henphone 2 <span class="f_req">*</span></label>
<div class="controls">
<input type="text" id="u_fname" name="no_hp2_admin" class="input-xlarge span12" value="<?PHP echo $no_hp2_admin ;?>" required>
</div></div>

<div class="control-group formSep">
<label for="u_email" class="control-label">Pin <span class="f_req">*</span></label>
<div class="controls">
<input type="text" id="u_fname" name="pin_admin" class="input-xlarge span12" value="<?PHP echo $pin_admin ;?>" required>
</div></div>

<div class="control-group formSep">
<label for="u_email" class="control-label">Email <span class="f_req">*</span></label>
<div class="controls">
<input type="email" id="u_fname" name="email_admin" class="input-xlarge span12" value="<?PHP echo $email_admin ;?>" required>
</div></div>


<div class="control-group formSep">
<label for="u_email" class="control-label">Alamat <span class="f_req">*</span></label>
<div class="controls">
<input type="text" id="u_fname" name="alamat_admin" class="input-xlarge span12" value="<?PHP echo $alamat_admin ;?>" required>
</div></div>

<div class="control-group">
<div class="controls">
<button class="btn btn-primary btn-large" name="setcontact" type="submit"><i class="icon-save"></i> Save changes</button>
<button class="btn btn-large" type="reset"><i class="icon-eraser"></i> Reset</button>
</div>
</div>
</fieldset>
</form>
</div>

<div class="tab-pane" id="tab4">
<form class="form-horizontal" name="form1" action="<?PHP echo MY_ADMIN?>setting-proses" enctype="multipart/form-data" method="post">
<fieldset>
<div class="control-group formSep">
<label for="u_fname" class="control-label">Facebook <span class="f_req">*</span></label>
<div class="controls">
<input type="url" id="u_fname" name="my_facebook" class="input-xlarge span12" placeholder="http://facebook.com/" value="<?PHP echo $my_facebook;?>">
</div></div>
<div class="control-group formSep">
<label for="u_email" class="control-label">Twitter <span class="f_req">*</span></label>
<div class="controls">
<input type="text" id="u_fname" name="my_twitter" class="input-xlarge span12" value="<?PHP echo $my_twitter;?>">
</div></div>

<div class="control-group formSep">
<label for="u_email" class="control-label">Google + <span class="f_req">*</span></label>
<div class="controls">
<input type="text" id="u_fname" name="my_google" class="input-xlarge span12" value="<?PHP echo $my_google;?>">
</div></div>

<div class="control-group formSep">
<label for="u_email" class="control-label">Pinterest <span class="f_req">*</span></label>
<div class="controls">
<input type="text" id="u_fname" name="my_pinterest" class="input-xlarge span12" value="<?PHP echo $my_pinterest?>">
</div></div>

<div class="control-group formSep">
<label for="u_email" class="control-label">Linkedin <span class="f_req">*</span></label>
<div class="controls">
<input type="text" id="u_fname" name="my_linkedin" class="input-xlarge span12" value="<?PHP echo $my_linkedin;?>">
</div></div>


<div class="control-group formSep">
<label for="u_email" class="control-label">Rss <span class="f_req">*</span></label>
<div class="controls">
<input type="text" id="u_fname" name="my_rss" class="input-xlarge span12" value="<?PHP echo $my_rss ;?>">
</div></div>

<div class="control-group">
<div class="controls">
<button class="btn btn-primary btn-large" name="setsosial" type="submit"><i class="icon-save"></i> Save changes</button>
<button class="btn btn-large" type="reset"><i class="icon-eraser"></i> Reset</button>
</div>
</div>
</fieldset>
</form>
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
<script src="<?PHP echo MY_ADMIN?>js/forms/jquery.inputmask.min.js"></script>
<script src="<?PHP echo MY_ADMIN?>js/forms/jquery.autosize.min.js"></script>
<script src="<?PHP echo MY_ADMIN?>js/forms/jquery.counter.min.js"></script>
<script src="<?PHP echo MY_ADMIN?>js/forms/jquery.ui.touch-punch.min.js"></script>
<script src="<?PHP echo MY_ADMIN?>js/forms/jquery.spinners.min.js"></script>
            
<!-- validation -->
<script src="<?PHP echo MY_ADMIN?>js/gebo_forms.js"></script>
</div></div>
</body></html>