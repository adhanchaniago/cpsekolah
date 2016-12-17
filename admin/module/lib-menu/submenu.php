<?PHP session_start();include ('../../../config.php');include ('../../privat/activasi-login.php');?>
<!DOCTYPE html>
<html lang="en"><head>
<?PHP include"../../head.php";?>
</head><body>
<div class="main_content">
<div class="row-fluid">
<div class="span12">
<div class="tabbable">
<ul class="nav nav-tabs">
<li class="active"><a href="#tab1" data-toggle="tab">Pages</a></li>
<li><a href="#tab2" data-toggle="tab">Categories</a></li>
</ul>

<div class="tab-content">
<div class="tab-pane active" id="tab1">
<table width="100%" class="table table-striped">
<thead><tr>
<th width="30" class="table_checkbox">#</th>
<th width="256">Name</th>
<th width="619">Url</th>
<th width="50">Actions</th>
</tr></thead><tbody>
<?PHP $sql = mysql_query("select * from Pages order by pages.id_pages DESC");$no=0;
$cek_data = mysql_num_rows($sql);
if($cek_data !=0){
	while ($data_pages = mysql_fetch_array($sql)){$no++;
		$title_pages = strip_tags($data_pages['title']);
		$link_pages ="".MY_PATH."pages/".strip_tags($data_pages['link_pages']).".html";?>

<tr>
<td><?PHP echo $no;?></td>
<td><span class="cbox_single"><?PHP echo $title_pages;?></span></td>
<td><?PHP echo $link_pages;?></td>
<td>

<a href="#" onclick="window.opener.document.getElementById('link_menu').value='<?php echo $link_pages;?>';
window.close();/*window.opener.document.location='<?PHP echo MY_ADMIN;?>setting/menu'*/;">
<button class="btn btn-mini btn-warning ttip_t" title="Set"><i class="icon-mail-forward"></i></button></a>

</td></tr><?PHP } }else {echo"<h3>Pages Not Found</h3>";}?></tbody></table>
</div>
<div class="tab-pane" id="tab2">
<table width="100%" class="table table-striped">
<thead><tr>
<th width="30" class="table_checkbox">#</th>
<th width="256">Name</th>
<th width="619">Url</th>
<th width="50">Actions</th>
</tr></thead><tbody>
<?PHP $sql2 = mysql_query("select * from article_categories order by article_categories.id DESC");$no=0;
$cek_data = mysql_num_rows($sql2);
if($cek_data !=0){
	while ($data_categories = mysql_fetch_array($sql2)){$no++;
		$title = strip_tags($data_categories['title']);
		$link_categories ="".MY_PATH."blog/tags/".strip_tags($data_categories['link_categories'])."";?>

<tr>
<td><?PHP echo $no;?></td>
<td><span class="cbox_single"><?PHP echo $title;?></span></td>
<td><?PHP echo $link_categories;?></td>
<td>

<a href="#" onclick="window.opener.document.getElementById('link_menu').value='<?php echo $link_categories;?>';
window.close();/*window.opener.document.location='<?PHP echo MY_ADMIN;?>setting/menu'*/;">
<button class="btn btn-mini btn-warning ttip_t" title="Set"><i class="icon-mail-forward"></i></button></a>

</td></tr><?PHP } }else {echo"<h3>Pages Not Found</h3>";}?></tbody></table>
</div>
								
								</div>
							</div>
						</div></div>
                       <?PHP include"../../head-js.php";?>
</body>
</html>
