<?PHP session_start();include ('../../../config.php');include ('../../privat/activasi-login.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<?PHP include"../../head.php";?>
</head>
<body>
<?PHP include"../../in/header.php";?>
<!-- main content -->
<div id="contentwrapper"><div class="main_content"><nav>
<div id="jCrumbs" class="breadCrumb module"><ul>
<li><a href="<?PHP echo MY_ADMIN;?>"><i class="icon-home"></i></a></li>
<li>Polling</li></ul>
</div></nav>
<?php if (!empty($_GET['reff'])) { if ($_GET['reff'] == 1) { echo '<div class="alert alert-errong">Add New Polling error on server...!<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 2) { echo '<div class="alert alert-success">Add New Polling sucess..!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';} 
else if ($_GET['reff'] == 3) { echo '<div class="alert alert-error">Field can not be empty...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}

else if ($_GET['reff'] == 4) { echo '<div class="alert alert-error">Update Polling Error On Server...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 5) { echo '<div class="alert alert-success">Update Polling Success...!<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}

else if ($_GET['reff'] == 6) { echo '<div class="alert alert-success">Delete Polling Erro on server...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 7) { echo '<div class="alert alert-error">Delete Polling Success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}}?>


<div class="row-fluid"><div class="span12"> 
<?PHP  if(!empty($_GET['q_id'])){ 
$q_id = $_GET['q_id'];
$sql = mysql_query("select * from polling_vote where id_jwb='$q_id'");
$data = mysql_fetch_array($sql);
$refid = strip_tags($data['id_jwb']);
$title_jawaban = strip_tags($data['jawaban']);
$id_soal = strip_tags($data['id_soal']);


$g_sql = mysql_query("select * from polling where id_soal='$id_soal'");
if ($g_data= mysql_fetch_array($g_sql)){
$title_soal = strip_tags($g_data['soal']);
$id_soal = strip_tags($g_data['id_soal']);

?>
<div class="row-fluid">
<div class="span12 well">
<h3 class="heading">Update Polling Vote - <?PHP echo $title_jawaban ?></h3>
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>polling-proses?q_id=<?PHP echo $refid;?>&action=update2" method="post">

<div class="row-fluid"><div class="span12"><label>Questions <span class="f_req">*</span></label>
<select name="id_soal" class="span12"  style="width:100%">
<option value=""></option> 
<?PHP $sql_for_polling = mysql_query("select * from polling");
while ($data_polling = mysql_fetch_array($sql_for_polling)){
$id_soal = strip_tags($data_polling['id_soal']);
$title_soal = strip_tags($data_polling['soal']);?>
<option  value="<?PHP echo $id_soal;?>" <?PHP if($id_soal==$id_soal){?> selected="selected"<?PHP }?>><?PHP echo $title_soal;?></option><?PHP } ?>
</select>
</div></div>

<input name="q_id" type="hidden" value="<?PHP echo $refid;?>" readonly="">
<div class="row-fluid"><div class="span12">
<label>Answer Questions <span class="f_req">*</span></label>
<input type="text" name="jawaban" class="span12" value="<?PHP echo $title_jawaban;?>" placeholder="Answer Questions" required></div></div>

<hr>
<div class="span3">
<button class="btn btn-primary" name="update_polling_vote" type="submit"><i class="icon-save"></i> Save</button>
</div>
</form>
</div>
</div>

<hr>
<?php }  } else {
if(!empty($_GET['refid'])){
$refid = $_GET['refid'];
$sql = mysql_query("select * from polling where id_soal='$refid'") or die (mysql_error());
while($data=mysql_fetch_array($sql)){
$title_polling = strip_tags($data['soal']);
$status = strip_tags($data['status']);
$refid=  strip_tags($data['id_soal']);
?>

<div class="row-fluid">
<div class="span12 well">
<h3 class="heading">Update Polling- <?PHP echo $title_polling ?></h3>
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>polling-proses?refid=<?PHP echo $refid;?>&action=update" method="post">

<input name="refid" type="hidden" value="<?PHP echo $refid;?>" readonly="">
<div class="row-fluid"><div class="span12">
  <label>Questions <span class="f_req">*</span></label>
<textarea name="soal" id="txtarea_limit_chars" cols="1" rows="2" class="span12"><?PHP echo $title_polling;?></textarea>
</div></div>


<div class="row-fluid"><div class="span8">
<label>Status</label>
<input class="span12" name="status" type="text" value="<?PHP echo $status;?>" placeholder="Status"></div>
</div>
<hr>
<div class="span3">
<button class="btn btn-primary" name="update_polling" type="submit"><i class="icon-save"></i> Save</button>
</div>
</form>
</div>
</div>

<hr>

<?PHP }}}?>



<h3 class="heading">Polling 
  <button type="button" data-toggle="modal" data-backdrop="static" href="#myModal1" class="btn btn-primary btn-small float-right"><i class="icon-check"></i> New Add Polling</button>
</h3>
<table width="100%" class="table table-bordered table-striped">
<thead><tr>
<th width="63" class="table_checkbox">#</th>
<th width="814"> Questions</th>
<th width="66">Actions</th>
</tr></thead><tbody>
<?PHP $query= mysql_query("select * from polling order by polling.id_soal") or die(mysql_error());
$cek_data = mysql_num_rows($query); $no=0;
if($cek_data !=0){
	while ($data_polling= mysql_fetch_array($query)){$no++;
		$ref_id = strip_tags($data_polling['id_soal']);
$title_polling = strip_tags($data_polling['soal']);
?>
<tr>
<td><?PHP echo $no;?></td>
<td><span class="cbox_single"><?PHP echo $title_polling;?></span></td>
<td>
<a href="<?PHP echo MY_ADMIN?>polling/?refid=<?PHP echo $ref_id;?>" target="_self">
<button class="btn btn-mini btn-primary ttip_t" title="Edit"><i class="icon-pencil"></i></button></a>

<a href="<?PHP echo MY_ADMIN;?>polling-proses/?refid=<?php echo $ref_id?>&amp;action=delete" onClick="return confirm('Are you sure you want ot delete this thread.?');"><button class="btn btn-mini btn-danger ttip_t" title="Delete"><i class="icon-trash"></i></button></a></td></tr>
<?PHP }} else { echo"DATA NOT FOUND";}?>

</tbody></table>
</div></div>
<hr>
		
<?php  if (!empty($_GET['ref'])) { if ($_GET['ref'] == "1") {
 echo '<div class="alert alert-error" id="submenu">Add New Polling  Vote error on server...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['ref'] == "2") { echo '<div class="alert alert-success" id="submenu">Add New Polling Vote success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';} 
else if ($_GET['ref'] == 3) { echo '<div class="alert alert-error">Field can not be empty...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}

else if ($_GET['ref'] == "4") { echo '<div class="alert alert-error">Update Polling Vote Error On Server...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}

else if ($_GET['ref'] == "5") { echo '<div class="alert alert-success">Update Polling Vote Success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}

else if ($_GET['ref'] == "6") { echo '<div class="alert alert-error">Delete Polling Vote Error on Server...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['ref'] == "7") { echo '<div class="alert alert-success">Delete Polling Vote Success..!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}}?>
<div class="row-fluid" id="vote">
<div class="span12">
<h3 class="heading">Polling Vote 
  <button type="button" data-toggle="modal" data-backdrop="static" href="#myModal12" class="btn btn-primary btn-small float-right"><i class="icon-check"></i> New Add Polling Vote</button>
</h3>
<table width="100%" class="table table-bordered table-striped">
<thead><tr>
<th width="40" class="table_checkbox">#</th>
<th width="545">Answer Questions</th>
<th width="226">Answer</th>
<th width="55">Vote</th>
<th width="69">Actions</th>
</tr></thead><tbody>
<?PHP  $polling_vote = mysql_query("select * from polling_vote order by polling_vote.id_jwb") or die (mysql_error());
$cek_jawab = mysql_num_rows($polling_vote); $no=0;
if($cek_jawab !=0){
	while($post_jawab = mysql_fetch_array($polling_vote)){$no++;
		$id_jwb = strip_tags($post_jawab['id_jwb']);
		$id_soal = strip_tags($post_jawab['id_soal']);
		$title_jawaban = strip_tags($post_jawab['jawaban']);
		$vote ="".strip_tags($post_jawab['vote'])." %";


	//sql for get menu name
$sql_for_polling= mysql_query("select * from polling where id_soal='$id_soal'");
$data_for_polling = mysql_fetch_array($sql_for_polling);
$title_polling = strip_tags($data_for_polling['soal']);
?><tr>
<td><?PHP echo $no;?></td>
<td><span class="cbox_single"><?PHP echo $title_polling; ?></span></td>
<td><code><?PHP echo $title_jawaban;?></code></td>
<td><span class="label label-warning"><?PHP echo $vote;?></label></td>
<td>

<a href="<?PHP echo MY_ADMIN?>polling/?q_id=<?PHP echo $id_jwb;?>" target="_self">
<button class="btn btn-mini btn-primary ttip_t" title="Edit"><i class="icon-pencil"></i></button></a>

<a href="<?PHP echo MY_ADMIN;?>polling-proses/?q_id=<?php echo $id_jwb;?>&amp;action=delete2" onClick="return confirm('Are you sure you want ot delete this thread.?');"><button class="btn btn-mini btn-danger ttip_t" title="Delete"><i class="icon-trash"></i></button></a></td></tr>
<?PHP }} else {echo"DATA POLLING VOTE NOT FOUND"; }?></tbody></table>
</div></div>



<!-- start:MODAL -->
<div class="modal hide" id="myModal1">
<div class="modal-header" style="height:31px;"><button class="close" data-dismiss="modal"><i class="icon-remove"></i></button>
<h3>Add New Polling</h3>
</div><div class="modal-body">
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>polling-proses" method="post">
<div class="row-fluid"><div class="span12">
  <label>Questions <span class="f_req">*</span></label>
<textarea name="soal" id="txtarea_limit_chars" cols="1" rows="2" class="span12"></textarea>
</div></div>


<div class="row-fluid"><div class="span5">
<label>Status</label>
<input class="span12" name="status"  type="text" placeholder="Status"></div>
</div>

<div class="span3"><label>&nbsp;</label>
<button class="btn btn-primary" name="add_polling" type="submit"><i class="icon-save"></i> Save Polling</button>
</div>
</form></div>
<div class="modal-footer"><a href="#" class="btn" data-dismiss="modal">Close</a></div></div>
	
	
<!-- start:MODAL 2 -->
<div class="modal hide" id="myModal12">
<div class="modal-header" style="height:31px;"><button class="close" data-dismiss="modal"><i class="icon-remove"></i></button>
<h3>Add Polling Vote</h3>
</div><div class="modal-body">
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>polling-proses/" method="post">

<div class="row-fluid"><div class="span12"><label>Questions <span class="f_req">*</span></label>
<select name="id_soal" data-placeholder="Choose a Country..." class="span12"  style="width:100%">
<option value=""></option> 
<?PHP $sql_for_polling = mysql_query("select * from polling");
while ($data_polling = mysql_fetch_array($sql_for_polling)){
$id_soal = strip_tags($data_polling['id_soal']);
$title_soal = strip_tags($data_polling['soal']);?>
<option  value="<?PHP echo $id_soal;?>"><?PHP echo $title_soal;?></option><?PHP }?>
<!-- echo "<option value='$menu_id'>$menu_name</option>";}?>-->
</select>
</div></div>

<div class="row-fluid"><div class="span12">
<label>Answer Questions <span class="f_req">*</span></label>
<input type="text" name="jawaban" id="w_name" class="span12" placeholder="Name Menu" required></div></div>


<div class="span3"><label>&nbsp;</label>
<button class="btn btn-primary" name="add_polling_vote" type="submit"><i class="icon-save"></i> Add Polling Vote</button></div>
</form></div>
<div class="modal-footer"><a href="#" class="btn" data-dismiss="modal">Close</a></div></div>
						
</div></div>											



<!-- sidebar -->
<?PHP include"../../in/panel.php";?> 
<script src="<?PHP echo MY_ADMIN?>js/jquery-1.8.2.min.js" type="text/javascript"></script>
<?PHP include"../../head-js.php";?>

<script src="<?PHP echo MY_ADMIN?>lib/colorbox/jquery.colorbox.min.js"></script>
<!-- tables functions -->
<script src="<?PHP echo MY_ADMIN?>js/gebo_tables.js"></script></div></div>
</body></html>