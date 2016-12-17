<?PHP session_start();include ('../../../config.php');include ('../../privat/activasi-login.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<?PHP include"../../head.php";?>
</head><body>
<?PHP include"../../in/header.php";?>
<!-- main content -->
<div id="contentwrapper"><div class="main_content"><nav>
<div id="jCrumbs" class="breadCrumb module"><ul>
<li><a href="<?PHP echo MY_ADMIN?>"><i class="icon-home"></i></a></li></li><li>Setting Account</li></ul>
</div></nav>
<?php  if (!empty($_GET['reff'])) { if ($_GET['reff'] == 1) { echo '<div class="alert alert-danger">Setting Profile error on server...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 2) { echo '<div class="alert alert-success">Setting Profile Success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';} 
else if ($_GET['reff'] == 3) { echo '<div class="alert alert-danger">Field can not be empty...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] =='images1') { echo '<div class="alert alert-danger">Upload Images Failed, Ekstensi bmp, gif, jpg, jpeg, png...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] =='images2') { echo '<div class="alert alert-danger">Upload Images Failed, Size Images Max 60 KB..!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 4) { echo '<div class="alert alert-danger">Enter your password min 4 karater..!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 5) { echo '<div class="alert alert-success">Setting account Success..!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 6) { echo '<div class="alert alert-danger">Setting Account Error on Server..!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}}?>

<div class="row-fluid">
<div class="span12">
  <h3 class="heading">Setting Profile</h3>
  <div class="row-fluid">
<div class="span12">
<form class="form-horizontal" name="form1" action="<?PHP echo MY_ADMIN?>setadmin-proses/?refid_admin=<?PHP echo $refid_admin;?>" enctype="multipart/form-data" method="post">
<fieldset>
<div class="control-group formSep">
<label class="control-label">Name Profile</label>
<div class="controls text_line"><strong><?PHP echo $name_admin;?></strong>
</div>
</div>
<div class="control-group formSep">
<label for="fileinput" class="control-label">User avatar</label>
<div class="controls">
<div data-fileupload="image" class="fileupload fileupload-new">
<input type="hidden" />
<div style="width:105px; height:100px;" class="thumbnail">
<?PHP if($avatar == ''){?><img src="<?PHP echo MY_ADMIN?>img/no_img_180.png" height="100" alt="<?PHP echo $name_admin;?>" />
<?PHP } else{ ?><img src="<?PHP echo MY_ADMIN?>img/avatar/<?PHP echo $avatar;?>" alt="<?PHP echo $name_admin;?>" /><?PHP }?></div>
<span class="btn btn-file"><span class="fileupload-new">Select image</span>
<input type="file" id="fileinput" name="avatar" /></span>
</div>	</div></div>
<div class="control-group formSep">
<label for="u_fname" class="control-label">Full name</label>
<div class="controls">
<input type="text" name="nama" id="u_fname" class="span8" value="<?PHP echo $name_admin;?>" />
</div>
</div>
<div class="control-group formSep">
<label for="u_email" class="control-label">Phone</label>
<div class="controls">
<input type="text" id="u_email" name="no_hp" class="span8" value="<?PHP echo $no_hp;?>" />
</div>
</div>

<div class="control-group formSep">
<label for="u_email" class="control-label">Email</label>
<div class="controls">
<input type="email" id="u_email" name="email" class="span8" value="<?PHP echo $email;?>" />
</div>
</div>


<div class="control-group formSep">
<label for="u_email" class="control-label">Email</label>
<div class="controls">
<textarea name="alamat"  cols="1" rows="2" class="span8" placeholder="Alamat Rumah"><?php echo $alamat;?></textarea>
</div>
</div>

<div class="control-group"><div class="controls">
<button class="btn btn-primary btn-large" name="gantiprofile" type="submit"><i class="icon-save"></i> Save Profile </button>
<button type="reset" class="btn btn-large"><i class="icon-eraser"></i> Reset</button></div>

</div>
</fieldset></form>
</div></div>
					
                        
<div class="span12">
  <h3 class="heading">Setting  Account </h3>
  <div class="row-fluid">
<div class="span12">
<form class="form-horizontal" name="form" action="<?PHP echo MY_ADMIN?>setadmin-proses/?refid_admin=<?PHP echo $refid_admin;?>" method="post">
<fieldset>

<div class="control-group formSep">
<label for="u_password" class="control-label">Username</label>
<div class="controls">
<input type="text" id="Username" name="user_name" class="span8" value="<?PHP echo $user_name;?>" />
<span class="help-block">Enter your username</span>
</div></div>
<div class="control-group formSep">
<label for="u_password" class="control-label">New Password</label>
<div class="controls">
<input type="password" id="Pass" name="pass" class="span8" placeholder="Password baru"/>
<span class="help-block">Enter your password min 4 karater</span>
</div></div>
<div class="control-group">
<div class="controls">
<button class="btn btn-primary btn-large" name="setaccount" type="submit"><i class="icon-save"></i> Save Account </button>
<button type="reset" class="btn btn-large"><i class="icon-eraser"></i> Reset</button></div>
</div>
</fieldset>
</form>		
</div></div></div>
</div></div></div></div>

<!-- sidebar -->
<?PHP include"../../in/panel.php";?> 
<?PHP include"../../head-js.php";?>
<link rel="stylesheet" type="text/css" href="<?PHP echo MY_ADMIN?>lib/datatables/jquery.dataTables.css">
<script src="<?PHP echo MY_ADMIN?>lib/datatables/jquery.dataTables.min.js"></script>
<script src="<?PHP echo MY_ADMIN?>lib/datatables/dataTables.bootstrap.js"></script>
<script src="<?PHP echo MY_ADMIN?>lib/colorbox/jquery.colorbox.min.js"></script>

<script type="text/javascript">
$("input#Username").on({
  keydown: function(e) {
    if (e.which === 32)
      return false;
  },
  change: function() {
    this.value = this.value.replace(/\s/g, "");
  }
});

$("input#Pass").on({
  keydown: function(e) {
    if (e.which === 32)
      return false;
  },
  change: function() {
    this.value = this.value.replace(/\s/g, "");
  }
});
</script>
</div></div>
</body></html>