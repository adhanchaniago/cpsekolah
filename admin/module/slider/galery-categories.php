<?PHP session_start();include ('../../../config.php'); include ('../../privat/activasi-login.php');?>
<!DOCTYPE html>
<html lang="en">
    <head>
<?PHP include"../../head.php";?>
</head><body>
<?PHP include"../../in/header.php";?>
<!-- main content -->
<div id="contentwrapper"><div class="main_content"><nav>
<div id="jCrumbs" class="breadCrumb module"><ul><li><a href="<?PHP echo MY_ADMIN?>"><i class="icon-home"></i></a></li>
<li><a href="<?PHP echo MY_ADMIN?>post/article">Post Article</a></li><li>Categories</li></ul></div></nav>
<?php $warning_='aWYgKCFlbXB0eSgkX0dFVFsncmVmZiddKSkgeyBpZiAoJF9HRVRbJ3JlZmYnXSA9PSAxKSB7IGVjaG8gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LWRhbmdlciI+U3VibWl0IENhdGVnb3JpZXMgRXJyb3IgT24gU2VydmVyLi4uIQ0KPGJ1dHRvbiBjbGFzcz0iY2xvc2UiIGFyaWEtaGlkZGVuPSJ0cnVlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiB0eXBlPSJidXR0b24iPiZ0aW1lczs8L2J1dHRvbj48L2Rpdj4nO30NCmVsc2UgaWYgKCRfR0VUWydyZWZmJ10gPT0gMikgeyBlY2hvICc8ZGl2IGNsYXNzPSJhbGVydCBhbGVydC1zdWNjZXNzIj5TdWJtaXQgQ2F0ZWdvcmllcyBTdWNjZXNzLi4uIQ0KPGJ1dHRvbiBjbGFzcz0iY2xvc2UiIGFyaWEtaGlkZGVuPSJ0cnVlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiB0eXBlPSJidXR0b24iPiZ0aW1lczs8L2J1dHRvbj48L2Rpdj4nO30gDQplbHNlIGlmICgkX0dFVFsncmVmZiddID09IDMpIHsgZWNobyAnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZGFuZ2VyIj5GaWVsZCBjYW4gbm90IGJlIGVtcHR5Li4uISANCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj4mdGltZXM7PC9idXR0b24+PC9kaXY+Jzt9DQplbHNlIGlmICgkX0dFVFsncmVmZiddID09IDQpIHsgZWNobyAnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZGFuZ2VyIj5VcGRhdGUgQ2F0ZWdvcmllcyBFcnJvciBPbiBTZXJ2ZXIuLi4hIA0KPGJ1dHRvbiBjbGFzcz0iY2xvc2UiIGFyaWEtaGlkZGVuPSJ0cnVlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiB0eXBlPSJidXR0b24iPiZ0aW1lczs8L2J1dHRvbj48L2Rpdj4nO30NCmVsc2UgaWYgKCRfR0VUWydyZWZmJ10gPT0gNSkgeyBlY2hvICc8ZGl2IGNsYXNzPSJhbGVydCBhbGVydC1zdWNjZXNzIj5VcGRhdGUgQ2F0ZWdvcmllcyBTdWNjZXNzLi4uISANCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj4mdGltZXM7PC9idXR0b24+PC9kaXY+Jzt9DQplbHNlIGlmICgkX0dFVFsncmVmZiddID09IDYpIHsgZWNobyAnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZXJyb3IiPlNvcnJ5IElEIG5vdCBmb3VuZC4uLiEgDQo8YnV0dG9uIGNsYXNzPSJjbG9zZSIgYXJpYS1oaWRkZW49InRydWUiIGRhdGEtZGlzbWlzcz0iYWxlcnQiIHR5cGU9ImJ1dHRvbiI+JnRpbWVzOzwvYnV0dG9uPjwvZGl2Pic7fQ0KZWxzZSBpZiAoJF9HRVRbJ3JlZmYnXSA9PSA3KSB7IGVjaG8gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LXN1Y2Nlc3MiPkRlbGV0ZSBDYXRlZ29yaWVzIEVycm9yIE9uIFNlcnZlci4uLiEgDQo8YnV0dG9uIGNsYXNzPSJjbG9zZSIgYXJpYS1oaWRkZW49InRydWUiIGRhdGEtZGlzbWlzcz0iYWxlcnQiIHR5cGU9ImJ1dHRvbiI+JnRpbWVzOzwvYnV0dG9uPjwvZGl2Pic7fQ0KZWxzZSBpZiAoJF9HRVRbJ3JlZmYnXSA9PSA4KSB7IGVjaG8gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LXN1Y2Nlc3MiPkRlbGV0ZSBDYXRlZ29yaWVzIFN1Y2Nlc3MuLi4hIA0KPGJ1dHRvbiBjbGFzcz0iY2xvc2UiIGFyaWEtaGlkZGVuPSJ0cnVlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiB0eXBlPSJidXR0b24iPiZ0aW1lczs8L2J1dHRvbj48L2Rpdj4nO319';
eval(base64_decode($warning_));?>

								
<?PHP $ref= htmlentities($_GET['ref']); if($ref!= ''){
$sql_edit=mysql_query("SELECT * FROM article_categories WHERE link_categories='$ref'");
$post=mysql_fetch_array($sql_edit);
$id= strip_tags($post['id']);
$title = strip_tags(substr($post['title'],0,80));?>
<div class="row-fluid"><div class="span12">
<h3 class="heading">Update Categories : <?PHP echo strip_tags(substr($post['title'],0,80));?></h3>
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>article-proses/?id=<?PHP echo $id;?>" method="post">
<div class="formSep">
<div class="row-fluid">
<div class="span12">
<label>Title <span class="f_req">*</span></label>
<input type="text" name="title" class="span12" value="<?PHP echo $title;?>" placeholder="Title" required/>
</div></div>
										
								
<div class="form-actions">
<button class="btn btn-primary btn-large" name="editkategori" type="submit"><i class="icon-ok"></i> Update Categories</button>
<button type="reset" class="btn btn-large"><i class="icon-eraser"></i> Reset</button></div>
</div></form>
</div></div>
<?PHP } else { ?>


<div class="row-fluid"><div class="span12"><h3 class="heading">New Categories</h3>
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>article-proses/"  method="post">
<div class="formSep">
<div class="row-fluid">
<div class="span12">
<label>Title <span class="f_req">*</span></label>
<input type="text" name="title" class="span12" placeholder="Title" required/>
</div></div>
										
								
<div class="form-actions">
<button class="btn btn-primary btn-large" name="addkategori" type="submit"><i class="icon-ok"></i> Publish</button>
<button type="reset" class="btn btn-large"><i class="icon-eraser"></i> Reset</button></div>
</div></form>
</div></div>
<?PHP }?>
<div class="row-fluid">
<div class="span12">
<h3 class="heading">Categories Article </h3>
<table width="100%" class="table table-bordered table-striped table_vam">
<thead>
<tr>
  <th width="55" class="table_checkbox">#</th>
  <th width="782">Title</th>
<th width="107">Actions</th>
</tr>
</thead>
<tbody>
<?php $sql=mysql_query("select * from article_categories  order by article_categories.id DESC");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++;
$ref_idc = strip_tags($datapost['id']);
$title = strip_tags($datapost['title']); 
$link_categories = strip_tags($datapost['link_categories']);?>
<tr>
<td><?PHP echo $no;?></td>
<td><span class="cbox_single"><?PHP echo $title;?></span></td>
<td>
<a href="<?PHP echo MY_ADMIN?>article/categories/?ref=<?PHP echo $link_categories;?>" target="_self">
<button class="btn btn-mini btn-primary ttip_t" title="Edit"><i class="icon-pencil"></i></button></a>

<a href="<?PHP echo MY_ADMIN?>article-proses?refidc=<?php echo $ref_idc; ?>&amp;action=delete_c"><button onClick="return confirm('Are you sure you want ot delete this thread.?');" class="btn btn-mini btn-danger ttip_t" title="Delete"><i class="icon-trash"></i></button></a></td></tr><?PHP }?></tbody></table>
</div></div>					
</div></div>
            
<!-- sidebar -->
<?PHP include"../../in/panel.php";?> 
<?PHP include"../../head-js.php";?>
<script src="<?PHP echo MY_ADMIN?>js/gebo_tables.js"></script>
<script src="<?PHP echo MY_ADMIN?>lib/colorbox/jquery.colorbox.min.js"></script>
<!-- datatable -->
<script src="<?PHP echo MY_ADMIN?>lib/datatables/jquery.dataTables.min.js"></script>
</div></div>
</body></html>