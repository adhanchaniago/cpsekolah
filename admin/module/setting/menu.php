<?PHP session_start();include ('../../../config.php');include ('../../privat/activasi-login.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<?PHP include"../../head.php";?>
<script type="text/javascript">
function change_to_1(){
$("#advanced_1").fadeIn("slow");
}
function change_to_2(){
$("#advanced_1").fadeOut("slow");
}
function change_to_none(){
$("#advanced_1").fadeOut("slow");
}
</script>
</head>
<body>
<?PHP include"../../in/header.php";?>
<!-- main content -->
<div id="contentwrapper"><div class="main_content"><nav>
<div id="jCrumbs" class="breadCrumb module"><ul>
<li><a href="<?PHP echo MY_ADMIN;?>"><i class="icon-home"></i></a></li>
<li>Setting</li><li>Menu</li></ul>
</div></nav>
<?php if(!empty($_GET['message'])){
		if (!empty($_GET['reff'])) { if ($_GET['reff'] == 1) { echo '<div class="alert alert-success">Add Now Menu Success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 2) { echo '<div class="alert alert-success">Add Now Menu Error On Server...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';} 
else if ($_GET['reff'] == 3) { echo '<div class="alert alert-success">Update Menu Success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 4) { echo '<div class="alert alert-error">Update Menu Error On Server...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 5) { echo '<div class="alert alert-success">'.$message.'<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 6) { echo '<div class="alert alert-success">Delete Menu Success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['reff'] == 000) { echo '<div class="alert alert-error">Field can not be empty...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}}}?>

<?PHP if(!empty($_GET['subid'])){ 
 $subid = abs((int)$_GET['subid']); 
$sql = mysql_query("select * from submenu where id='$subid'");
$data = mysql_fetch_array($sql);
$submenu_name = $data['name'];
$submenu_name = str_replace('"', "'", $submenu_name);
$submenu_link = $data['link'];
$submenu_menu = $data['menu'];
$submenu_target = $data['target'];

$g_sql_menu = mysql_query("select * from menu where id='$submenu_menu'");
if ($g_data_menu = mysql_fetch_array($g_sql_menu)){
$submenu_menu_name = $g_data_menu['name'];?>
<div class="row-fluid">
<div class="span12 well">
<h3 class="heading">Edit Submenu - <?PHP echo $submenu_name;?></h3>
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>submenu_proses/?id=<?PHP echo $subid;?>&act=editmenu" enctype="multipart/form-data" method="post">

<div class="row-fluid"><div class="span12"><label>Name Menu <span class="f_req">*</span></label>
<input type="text" name="submenu_name" id="w_name" class="span12" value="<?PHP echo $submenu_name; ?>" placeholder="Name Menu" required></div></div>

<div class="row-fluid"><div class="span12"><label>Menu Type <span class="f_req">*</span></label>
<select name='submenu_menu' class="span12">
<option value="<?PHP echo $submenu_menu; ?>"><?PHP echo $submenu_menu_name; ?></option>
<?PHP $sql_for_menu = mysql_query("select * from menu where type='2' and id!='$submenu_menu'");
while ($data_for_menu = mysql_fetch_array($sql_for_menu)){
$menu_name = $data_for_menu['name'];
$menu_id = $data_for_menu['id'];
echo "<option value='$menu_id'>$menu_name</option>";}?>
</select>
</div></div>

<div class="row-fluid"><div class="span11">
<label>Url Menu</label>
<input class="span12" name="submenu_link" id="link_menu" type="text" value="<?PHP echo $submenu_link; ?>" placeholder="Link Menu" required>
</div>
<div class="span1"><label>&nbsp;</label>
<button type="button" onClick="window.open('<?PHP echo MY_ADMIN;?>set-menu', 'winpopup','toolbar=no,statusbar=no,menubar=no,resizable=no,width=700,height=700');" class="btn"><i class="icon-zoom-in"></i></button>
</div></div>
<div class="row-fluid"><div class="span12">
<label>Type Link Target :</label>
<select name='submenu_target' style='width:100%'>
<option><?PHP echo $submenu_target; ?></option>
<option value='_self'>Same Windows (_self)</option>
<option value='_blank'>New Windows (_blank)</option>
<option value='_top'>Topmost Windows (_top)</option>
<option value='_parent'>Parent Windows (_parent)</option>
</select>
</div></div>
<hr>
<div class="span3">
<button class="btn btn-primary" name="editsubmenuku" type="submit"><i class="icon-save"></i> Update Submenu</button></div>
</form>
</div></div>
<?php }  } else { ?>
<?PHP  if(!empty($_GET['refid'])){ 
$refid = abs((int)$_GET['refid']);
$sql = mysql_query("select * from menu where id='$refid'");
while($data=mysql_fetch_array($sql)){
$id = $data['id'];
$menu_name = $data['name'];
$menu_name = str_replace('"', "'", $menu_name);
$menu_link = $data['link'];
$menu_type = $data['type'];
$menu_target = $data['target'];

if ($menu_type == 1){
$body = "change_to_1()";
$type_name = "No Submenu";
}
if ($menu_type == 2){
$body = "change_to_2()";
$type_name = "Any Submenu";
}
?>
<div class="row-fluid">
<div class="span12 well">
<h3 class="heading">Edit Menu - <?PHP echo $menu_name ?></h3>
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>menu-proses/?refid=<?PHP echo $id; ?>&act=edit" enctype="multipart/form-data" method="post">

<div class="row-fluid"><div class="span12"><label>Name Menu <span class="f_req">*</span></label>
<input type="text" name="menu_name" id="w_name" class="span12" placeholder="Name Menu" value="<?PHP echo $menu_name; ?>" required>
</div></div>

<input required type='hidden' value='<?PHP echo $id; ?>' name='id' class='span10'/>
<input required type='hidden' value="<?PHP echo $menu_name; ?>" name='real_menu_name' class='span10'/>

<div class="row-fluid"><div class="span12"><label>Menu Type <span class="f_req">*</span></label>
<select name='menu_type' class='span12'>
<option value='<?PHP echo $menu_type; ?>' onclick='change_to_none()'><?PHP echo $type_name; ?></option>
<option value='1' onclick='change_to_1()'>No Submenu</option>
<option value='2' onclick='change_to_2()'>Any Submenu</option></select>
</select>
</div></div>

<div class="tooltip-demo well" id="advanced_1" style="display:none">
<div class="row-fluid"><div class="span12">
<label>Url Menu</label>
<input class="span12" name="menu_link" type="text" value="<?PHP echo $menu_link; ?>" placeholder="Link Menu" required></div>
</div>
<div class="row-fluid"><div class="span12">
<label>Type Link Target :</label><select name='menu_target' style='width:100%'>
<option><?PHP echo $menu_target; ?></option>
<option value='_self'>Same Windows (_self)</option>
<option value='_blank'>New Windows (_blank)</option>
<option value='_top'>Topmost Windows (_top)</option>
<option value='_parent'>Parent Windows (_parent)</option>
</select>
</div></div></div>
<hr>
<div class="span3"><label>&nbsp;</label>
<button class="btn btn-primary" name="editmenubaru" type="submit"><i class="icon-save"></i> Update Menu</button>
</div>
</form>
</div>
</div><?PHP }}}?>

<div class="row-fluid">
<div class="span12">
<h3 class="heading">Menu <button type="button" data-toggle="modal" data-backdrop="static" href="#myModal1" class="btn btn-primary btn-small float-right"><i class="icon-reorder"></i> New Add Menu</button></h3>
<table class="table table-bordered table-striped">
<thead><tr>
<th width="24" class="table_checkbox">#</th>
<th width="246">Name</th>
<th width="213">Type</th>
<th width="108">Target</th>
<th width="114">Actions</th>
</tr></thead><tbody>
<?PHP $sql = mysql_query("select * from menu order by menu.number ASC");$no=0;
while ($data_menu = mysql_fetch_array($sql)){$no++;
$menu_id = $data_menu['id'];
$menu_name = $data_menu['name'];
$menu_link = $data_menu['link'];
$menu_type = $data_menu['type'];
$menu_target = $data_menu['target'];
$menu_number = $data_menu['number'];
$menu_to_up = $menu_number - 1;
$menu_to_down = $menu_number + 1;
if ($menu_type == 1){
$menu_type = "<font color='red'>No Submenu</font>";
$total_submenu_me = "";
}

else{
$menu_type = "<font color='green'>Submenu</font>";
$sql_submenu_count = mysql_query("select * from submenu where menu='$menu_id'");
$total_submenu_me = "(<font color='blue'>".mysql_num_rows($sql_submenu_count)."</font>)";
}
?><tr>
<td><?PHP echo $no;?></td>
<td><span class="cbox_single"><?PHP echo $menu_name;?></span></td>
<td><code><?PHP echo "$menu_type $total_submenu_me";?></code></td>
<td><?PHP echo $menu_target;?></td>
<td>
<?PHP if ($menu_number != 1){?>
<a href="<?PHP echo MY_ADMIN?>menu-proses/?refid=<?PHP echo $menu_id;?>&from=<?PHP echo $menu_number;?>&to=<?PHP echo $menu_to_up;?>&amp;act=set"><button class="btn btn-mini btn-warning ttip_t" title="Up"><i class="icon-level-up"></i></button></a>
<?PHP }?><?PHP if ($menu_number !=''){?>
<a href="<?PHP echo MY_ADMIN?>menu-proses/?refid=<?PHP echo $menu_id;?>&from=<?PHP echo $menu_number;?>&to=<?PHP echo $menu_to_down;?>&amp;act=set"><button class="btn btn-mini btn-warning ttip_t" title="Down"><i class="icon-level-down"></i></button></a><?PHP }?>

<a href="<?PHP echo MY_ADMIN?>setting/menu/?refid=<?PHP echo $menu_id;?>" target="_self">
<button class="btn btn-mini btn-primary ttip_t" title="Edit"><i class="icon-pencil"></i></button></a>

<a href="<?PHP echo MY_ADMIN;?>menu-proses/?refid=<?php echo $menu_id?>&amp;act=delete" onClick="return confirm('Are you sure you want ot delete this thread.?');"><button class="btn btn-mini btn-danger ttip_t" title="Delete"><i class="icon-trash"></i></button></a></td></tr><?PHP }?></tbody></table>
</div></div>
<hr>
		
<?php  if (!empty($_GET['ref'])) { if ($_GET['ref'] == "a1") { echo '<div class="alert alert-success" id="submenu">Add Submenu Success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['ref'] == "a2") { echo '<div class="alert alert-success" id="submenu">Add Submenu Error On Server...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';} 
else if ($_GET['ref'] == "a3") { echo '<div class="alert alert-success" id="submenu">Update Submenu Success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['ref'] == "a4") { echo '<div class="alert alert-error">Update Submenu Error On Server...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['ref'] == "a5") { echo '<div class="alert alert-success" id="submenu">Delete Submenu Success...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['ref'] == "error") { echo '<div class="alert alert-error">Field can not be empty...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}}?>
<div class="row-fluid">
<div class="span12">
<h3 class="heading">Sub Menu <button type="button" data-toggle="modal" data-backdrop="static" href="#myModal12" class="btn btn-primary btn-small float-right"><i class="icon-reorder"></i> New Add Submenu</button></h3>
<table class="table table-bordered table-striped">
<thead><tr>
<th width="24" class="table_checkbox">#</th>
<th width="247">Name</th>
<th width="213">Type</th>
<th width="137">Target</th>
<th width="84">Actions</th>
</tr></thead><tbody>
<?PHP $sql_submenu = mysql_query("select * from submenu ORDER by submenu.menu ASC, submenu.id ASC"); $no_sub=0;
while ($data_submenu = mysql_fetch_array($sql_submenu)){$no_sub++; 
$submenu_id = $data_submenu['id'];
$submenu_name = $data_submenu['name'];
$submenu_link = $data_submenu['link'];
$submenu_menu = $data_submenu['menu'];
//sql for get menu name
$sql_for_name = mysql_query("select * from menu where id='$submenu_menu'");
$data_for_name = mysql_fetch_array($sql_for_name);
$letak_submenunya =  $data_for_name['name'];
//
$submenu_target = $data_submenu['target'];
?><tr>
<td><?PHP echo $no_sub;?></td>
<td><span class="cbox_single"><?PHP echo "$submenu_name"; ?></span></td>
<td><code><font color='#006600'>Submenu ></font> <font color='#000000'><?PHP echo "$letak_submenunya"; ?></font></code></td>
<td><?PHP echo "$submenu_target"; ?></td>
<td>
<a href="<?PHP echo MY_ADMIN?>setting/menu/?subid=<?PHP echo $submenu_id;?>" target="_self">
<button class="btn btn-mini btn-primary ttip_t" title="Edit"><i class="icon-pencil"></i></button></a>

<a href="<?PHP echo MY_ADMIN;?>submenu_proses/?refid=<?php echo $submenu_id;?>&amp;act=delete" onClick="return confirm('Are you sure you want ot delete this thread.?');"><button class="btn btn-mini btn-danger ttip_t" title="Delete"><i class="icon-trash"></i></button></a></td></tr><?PHP }?></tbody></table>
</div></div>
<!-- start:MODAL -->
<div class="modal hide fade" id="myModal1">
<div class="modal-header" style="height:31px;"><button class="close" data-dismiss="modal"><i class="icon-remove"></i></button>
<h3>Add Menu</h3>
</div><div class="modal-body">
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>menu-proses" enctype="multipart/form-data" method="post">

<div class="row-fluid"><div class="span12"><label>Name Menu <span class="f_req">*</span></label>
<input type="text" name="menu_name" id="w_name" class="span12" placeholder="Name Menu" required></div></div>

<div class="row-fluid"><div class="span12"><label>Menu Type <span class="f_req">*</span></label>
<select name='menu_type' class='span12'>
<option value='0' onclick='change_to_none()'>[Select One Option]</option>
<option value='1' onclick='change_to_1()'>No Submenu</option>
<option value='2' onclick='change_to_2()'>Submenu</option>
</select>
</div></div>

<div class="tooltip-demo well" id="advanced_1" style="display:none">
<div class="row-fluid"><div class="span11">
<label>Url Menu</label>
<input class="span12" name="menu_link" id="link_menu" type="text" value="<?PHP echo MY_PATH;?>" placeholder="Link Menu"></div>

<div class="span1"><label>&nbsp;</label>
<button type="button" onClick="window.open('<?PHP echo MY_ADMIN;?>set-menu', 'winpopup','toolbar=no,statusbar=no,menubar=no,resizable=no,width=700,height=700');" class="btn"><i class="icon-zoom-in"></i></button>
</div></div>
<div class="row-fluid"><div class="span12">
<label>Type Link Target :</label><select name='menu_target' style='width:100%'>
<option value='_self'>Same Windows (_self)</option>
<option value='_blank'>New Windows (_blank)</option>
<option value='_top'>Topmost Windows (_top)</option>
<option value='_parent'>Parent Windows (_parent)</option>
</select>
</div></div></div>
<div class="span3"><label>&nbsp;</label>
<button class="btn btn-primary" name="menukubaru" type="submit"><i class="icon-save"></i> Add Menu Now</button></div>
</form></div>
<div class="modal-footer"><a href="#" class="btn" data-dismiss="modal">Close</a></div></div>
	
	
<!-- start:MODAL 2 -->
<div class="modal hide" id="myModal12">
<div class="modal-header" style="height:31px;"><button class="close" data-dismiss="modal"><i class="icon-remove"></i></button>
<h3>Add SubMenu</h3>
</div><div class="modal-body">
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>submenu_proses/?act=addmenu" enctype="multipart/form-data" method="post">

<div class="row-fluid"><div class="span12"><label>Name Menu <span class="f_req">*</span></label>
<input type="text" name="submenu_name" id="w_name" class="span12" placeholder="Name Menu" required></div></div>

<div class="row-fluid"><div class="span12"><label>Menu Type <span class="f_req">*</span></label>
<select name="submenu_menu" data-placeholder="Choose a Country..." class="span12"  style="width:100%">
<option value=""></option> 
<?PHP $sql_for_menu = mysql_query("select * from menu where type='2'");
while ($data_for_menu = mysql_fetch_array($sql_for_menu)){
$menu_name = $data_for_menu['name'];
$menu_name = $data_for_menu['name'];
$menu_id = $data_for_menu['id'];?>
<option  value="<?PHP echo $menu_id;?>"><?PHP echo $menu_name;?></option><?PHP }?>
<!-- echo "<option value='$menu_id'>$menu_name</option>";}?>-->
</select>
</div></div>
<div class="tooltip-demo well">
<div class="row-fluid">
<div class="span11">
<label>Url Menu</label>
<input class="span12" name="submenu_link" id="link_menu" type="text" placeholder="Link Menu" required>
</div>
<div class="span1"><label>&nbsp;</label>
<button type="button" onClick="window.open('<?PHP echo MY_ADMIN;?>set-menu', 'winpopup','toolbar=no,statusbar=no,menubar=no,resizable=no,width=700,height=700');" class="btn"><i class="icon-zoom-in"></i></button>
</div></div>

<div class="row-fluid"><div class="span12">
<label>Type Link Target :</label>
<select name='submenu_target' style='width:100%'>
<option value='_self'>Same Windows (_self)</option>
<option value='_blank'>New Windows (_blank)</option>
<option value='_top'>Topmost Windows (_top)</option>
<option value='_parent'>Parent Windows (_parent)</option>
</select>
</div></div>
</div>
<div class="span3"><label>&nbsp;</label>
<button class="btn btn-primary" name="submenukubaru" type="submit"><i class="icon-save"></i> Add Submenu</button></div>
</form></div>
<div class="modal-footer"><a href="#" class="btn" data-dismiss="modal">Close</a></div></div>
						
</div></div>											
</div></div>





</div></div></div></div>


<!-- sidebar -->
<?PHP include"../../in/panel.php";?> 
<script src="<?PHP echo MY_ADMIN?>js/jquery-1.8.2.min.js" type="text/javascript"></script>
<?PHP include"../../head-js.php";?>

<script src="<?PHP echo MY_ADMIN?>lib/colorbox/jquery.colorbox.min.js"></script>
<!-- tables functions -->
<script src="<?PHP echo MY_ADMIN?>js/gebo_tables.js"></script
></div></div>
</body></html>