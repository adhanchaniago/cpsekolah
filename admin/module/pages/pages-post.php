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
<li><a href="<?PHP echo MY_ADMIN?>"><i class="icon-home"></i></a></li><li>Post Pages</li></ul>
</div></nav>
<?php $warning_='aWYgKCFlbXB0eSgkX0dFVFsncmVmZiddKSkgeyBpZiAoJF9HRVRbJ3JlZmYnXSA9PSAxKSB7IGVjaG8gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LXN1Y2Nlc3MiPlN1Ym1pdCBQYWdlcyBTdWNjZXNzLi4uIQ0KPGJ1dHRvbiBjbGFzcz0iY2xvc2UiIGFyaWEtaGlkZGVuPSJ0cnVlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiB0eXBlPSJidXR0b24iPiZ0aW1lczs8L2J1dHRvbj48L2Rpdj4nO30NCmVsc2UgaWYgKCRfR0VUWydyZWZmJ10gPT0gMikgeyBlY2hvICc8ZGl2IGNsYXNzPSJhbGVydCBhbGVydC1zdWNjZXNzIj5VcGRhdGUgUGFnZXMgU3VjY2Vzcy4uLiENCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj4mdGltZXM7PC9idXR0b24+PC9kaXY+Jzt9IA0KZWxzZSBpZiAoJF9HRVRbJ3JlZmYnXSA9PSAzKSB7IGVjaG8gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LXN1Y2Nlc3MiPkRlbGV0ZSBQYWdlcyBTdWNjZXNzLi4uIQ0KPGJ1dHRvbiBjbGFzcz0iY2xvc2UiIGFyaWEtaGlkZGVuPSJ0cnVlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiB0eXBlPSJidXR0b24iPiZ0aW1lczs8L2J1dHRvbj48L2Rpdj4nO30NCmVsc2UgaWYgKCRfR0VUWydyZWZmJ10gPT0gNCkgeyBlY2hvICc8ZGl2IGNsYXNzPSJhbGVydCBhbGVydC1lcnJvciI+RGVsZXRlIFBhZ2VzIEZhaWxlZHMuLi4hDQo8YnV0dG9uIGNsYXNzPSJjbG9zZSIgYXJpYS1oaWRkZW49InRydWUiIGRhdGEtZGlzbWlzcz0iYWxlcnQiIHR5cGU9ImJ1dHRvbiI+JnRpbWVzOzwvYnV0dG9uPjwvZGl2Pic7fQ0KZWxzZSBpZiAoJF9HRVRbJ3JlZmYnXSA9PSA1KSB7IGVjaG8gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LWVycm9yIj5EZWxldGUgUGFnZXMgRXJyb3IgT24gU2VydmVyLi4uIQ0KPGJ1dHRvbiBjbGFzcz0iY2xvc2UiIGFyaWEtaGlkZGVuPSJ0cnVlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiB0eXBlPSJidXR0b24iPiZ0aW1lczs8L2J1dHRvbj48L2Rpdj4nO319';
eval(base64_decode($warning_)); ?>


<div class="row-fluid">
<div class="span12">
<h3 class="heading">Post Pages <button type="button" onClick="location.href='<?PHP echo MY_ADMIN?>new/pages';" class="btn btn-primary btn-small float-right">New Add Pages</button></h3>
<table width="100%" class="table table-bordered table-striped table_vam" id="datapost">
<thead><tr>
<th width="303">Title</th>
<th width="76">Date</th>
<th width="64">Actions</th></tr></thead><tbody>
<?php $sql=mysql_query("select * from pages order by pages.id_pages desc");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++;
$get_p_='JHJlZmlkID0gc3RyaXBfdGFncygkZGF0YXBvc3RbJ2lkX3BhZ2VzJ10pOw0KJHRpdGxlID0gc3RyaXBfdGFncyhzdWJzdHIoJGRhdGFwb3N0Wyd0aXRsZSddLDAsMzApKTsNCiRmdWxsdGl0bGUgPSBzdHJpcF90YWdzKCRkYXRhcG9zdFsndGl0bGUnXSk7DQokdXJsX3BhZ2VzID0gc3RyaXBfdGFncygkZGF0YXBvc3RbJ2xpbmtfcGFnZXMnXSk7IA0KJGRhdGUgPSBzdHJpcF90YWdzKCRkYXRhcG9zdFsnZGF0ZSddKTs=';
eval(base64_decode($get_p_)); ?><tr>
<td><span class="ttip_r" title="<?PHP echo $fulltitle;?>"><?PHP echo $title;?>..</span></td>
<td><?PHP echo strip_tags($datapost['date']);?></td>
<td>
<a href="<?PHP echo MY_PATH?>pages/<?PHP echo $url_pages;?>.html" target="_blank"><button class="btn btn-mini btn-warning ttip_t" title="View Pages"><i class="icon-zoom-in"></i></button></a>

<a href="<?PHP echo MY_ADMIN?>edit/pages/<?PHP echo $url_pages;?>" target="_self">
<button class="btn btn-mini btn-primary ttip_t" title="Edit"><i class="icon-pencil"></i></button></a>

<a href="<?PHP echo MY_ADMIN?>pages-proses/?refid=<?php echo $refid;?>&amp;action=delete" onClick="return confirm('Are you sure you want ot delete this thread.?');"><button class="btn btn-mini btn-danger ttip_t" title="Delete"><i class="icon-trash"></i></button></a></td></tr><?PHP }?></tbody></table>
</div></div>
							
</div></div>
</div></div></div></div>
<!-- sidebar -->
<?PHP include"../../in/panel.php";?> 
<?PHP include"../../head-js.php";?>
<link rel="stylesheet" type="text/css" href="<?PHP echo MY_ADMIN?>lib/datatables/jquery.dataTables.css">
<script src="<?PHP echo MY_ADMIN?>lib/datatables/jquery.dataTables.min.js"></script>
<script src="<?PHP echo MY_ADMIN?>lib/datatables/dataTables.bootstrap.js"></script>
</div></div>
</body></html>