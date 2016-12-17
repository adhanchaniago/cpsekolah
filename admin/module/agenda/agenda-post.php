<?PHP session_start();include ('../../../config.php'); include ('../../privat/activasi-login.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<?PHP include"../../head.php";?>
</head><body>
<?PHP include"../../in/header.php";?>
<!-- main content -->
<div id="contentwrapper"><div class="main_content"><nav>
<div id="jCrumbs" class="breadCrumb module"><ul>
<li><a href="<?PHP echo MY_ADMIN?>"><i class="icon-home"></i></a></li>
<li>Post Agenda</li>
<li>Publish</li></ul>
</div></nav>
<?php $warning_='aWYgKCFlbXB0eSgkX0dFVFsncmVmZiddKSkgeyBpZiAoJF9HRVRbJ3JlZmYnXSA9PSAxKSB7IGVjaG8gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LXN1Y2Nlc3MiPlN1Ym1pdCBBZ2VuZGEgU3VjY2Vzcy4uLiENCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj4mdGltZXM7PC9idXR0b24+PC9kaXY+Jzt9DQplbHNlIGlmICgkX0dFVFsncmVmZiddID09IDIpIHsgZWNobyAnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtc3VjY2VzcyI+VXBkYXRlIEFnZW5kYSBTdWNjZXNzLi4uIQ0KPGJ1dHRvbiBjbGFzcz0iY2xvc2UiIGFyaWEtaGlkZGVuPSJ0cnVlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiB0eXBlPSJidXR0b24iPiZ0aW1lczs8L2J1dHRvbj48L2Rpdj4nO30gDQplbHNlIGlmICgkX0dFVFsncmVmZiddID09IDMpIHsgZWNobyAnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtc3VjY2VzcyI+RGVsZXRlIEFnZW5kYSBTdWNjZXNzLi4uIQ0KPGJ1dHRvbiBjbGFzcz0iY2xvc2UiIGFyaWEtaGlkZGVuPSJ0cnVlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiB0eXBlPSJidXR0b24iPiZ0aW1lczs8L2J1dHRvbj48L2Rpdj4nO30NCmVsc2UgaWYgKCRfR0VUWydyZWZmJ10gPT0gNCkgeyBlY2hvICc8ZGl2IGNsYXNzPSJhbGVydCBhbGVydC1lcnJvciI+RGVsZXRlIEFnZW5kYSBGYWlsZWRzLi4uIQ0KPGJ1dHRvbiBjbGFzcz0iY2xvc2UiIGFyaWEtaGlkZGVuPSJ0cnVlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiB0eXBlPSJidXR0b24iPiZ0aW1lczs8L2J1dHRvbj48L2Rpdj4nO30NCmVsc2UgaWYgKCRfR0VUWydyZWZmJ10gPT0gNSkgeyBlY2hvICc8ZGl2IGNsYXNzPSJhbGVydCBhbGVydC1lcnJvciI+RGVsZXRlIEFnZW5kYSBFcnJvciBPbiBTZXJ2ZXIuLi4hDQo8YnV0dG9uIGNsYXNzPSJjbG9zZSIgYXJpYS1oaWRkZW49InRydWUiIGRhdGEtZGlzbWlzcz0iYWxlcnQiIHR5cGU9ImJ1dHRvbiI+JnRpbWVzOzwvYnV0dG9uPjwvZGl2Pic7fX0=';
eval(base64_decode($warning_));?>

<div class="row-fluid">
<div class="span12">
<h3 class="heading">Post Agenda 
  <button type="button" onClick="location.href='<?PHP echo MY_ADMIN?>new/agenda';" class="btn btn-primary btn-small float-right"><i class="icon-plus"></i> New Add Agenda </button>
</h3>
<table width="100%" class="table table-bordered table-striped table_vam" id="datapost">
<thead>
<tr>
<th width="381">Title</th>
<th width="243">Location</th>
<th width="195" align="center">Date</th>
<th width="136">Actions</th>
</tr></thead><tbody>
<?php $sql=mysql_query("select * from agenda order by agenda.id_agenda desc");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++;
$refid= strip_tags($datapost['id_agenda']);
$title = strip_tags(substr($datapost['title'],0,28));
$fulltitle = strip_tags($datapost['title']);
$link_agenda = strip_tags($datapost['link_agenda']);
$location = strip_tags(substr($datapost['location'],0,20));
$time = strip_tags($datapost['time']);
$date = strip_tags($datapost['date']);
$ref_link ="".MY_PATH."post/".$link_agenda.".html";?>
<tr>
<td><span class="ttip_r" title="<?PHP echo $fulltitle;?>"><?PHP echo $title;?>..</span></td>
<td><?PHP echo $location;?></td>
<td align="center"><?PHP echo $time;?> - <?PHP echo $date;?></td>
<td>
<a href="<?PHP echo $ref_link;?>" target="_blank"><button class="btn btn-mini btn-warning ttip_t" title="View Comment"><i class="icon-zoom-in"></i></button></a>

<a href="<?PHP echo MY_ADMIN?>edit/agenda/<?PHP echo $link_agenda;?>" target="_self">
<button class="btn btn-mini btn-primary ttip_t" title="Edit"><i class="icon-pencil"></i></button></a>
<a href="<?PHP echo MY_ADMIN?>agenda-proses/?refid=<?php echo $refid;?>&amp;action=delete" onClick="return confirm('Are you sure you want ot delete this thread.?');"><button class="btn btn-mini btn-danger ttip_t" title="Delete"><i class="icon-trash"></i></button></a></td></tr><?PHP }?></tbody></table>
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