<?PHP session_start();include ('../../../config.php'); include ('../../privat/activasi-login.php');
include('../../../lib/ini.lib.php');
$config = get_parse_ini('../../../lib/config.ini.php');
$sett_email = $config['config']['sett_email'];
?>
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
<div id="jCrumbs" class="breadCrumb module"><ul><li><a href="<?PHP echo MY_ADMIN?>"><i class="icon-home"></i></a></li>
<li><a href="<?PHP echo MY_ADMIN?>mailbox">Mailbox</a></li><li>Message</li><li><?PHP if (empty($_GET['refid'])){ } else {echo"Inbox"; } if (empty($_GET['mailoutid'])){ } else {echo"Outbox"; } ?></li></ul></div></nav>
<?php $warning='IGlmICghZW1wdHkoJF9HRVRbJ3JlZmYnXSkpIHsgJG1lc3NhZ2UgPSBodG1sZW50aXRpZXMoJF9HRVRbJ21lc3NhZ2UnXSk7DQogaWYgKCRfR0VUWydyZWZmJ10gPT0gMSkgeyBlY2hvICc8ZGl2IGNsYXNzPSJhbGVydCBhbGVydC1lcnJvciI+RGVsZXRlIE1lc3NhZ2UgRmFpbGVkcy4uLiENCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj4mdGltZXM7PC9idXR0b24+PC9kaXY+Jzt9DQplbHNlIGlmICgkX0dFVFsncmVmZiddID09IDIpIHsgZWNobyAnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtc3VjY2VzcyI+RGVsZXRlIE1lc3NhZ2UgU3VjY2Vzcy4uLiENCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj4mdGltZXM7PC9idXR0b24+PC9kaXY+Jzt9IA0KZWxzZSBpZiAoJF9HRVRbJ3JlZmYnXSA9PSAzKSB7IGVjaG8gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LWVycm9yIj5TdWJqZWN0IGlzIHRvbyBzaG9ydCBvciBlbXB0eS4uLiENCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj4mdGltZXM7PC9idXR0b24+PC9kaXY+Jzt9DQplbHNlIGlmICgkX0dFVFsncmVmZiddID09IDQpIHsgZWNobyAnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZXJyb3IiPlBsZWFzZSBlbnRlciBhIHZhbGlkIGVtYWlsLi4hDQo8YnV0dG9uIGNsYXNzPSJjbG9zZSIgYXJpYS1oaWRkZW49InRydWUiIGRhdGEtZGlzbWlzcz0iYWxlcnQiIHR5cGU9ImJ1dHRvbiI+JnRpbWVzOzwvYnV0dG9uPjwvZGl2Pic7fQ0KZWxzZSBpZiAoJF9HRVRbJ3JlZmYnXSA9PSA1KSB7IGVjaG8gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LWVycm9yIj5NZXNzYWdlIGlzIHRvbyBzaG9ydCBvciBlbXB0eS4uLiENCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj4mdGltZXM7PC9idXR0b24+PC9kaXY+Jzt9DQplbHNlIGlmICgkX0dFVFsncmVmZiddID09IDYpIHsgZWNobyAnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtZXJyb3IiPkNvdWxkIG5vdCBzZW5kIG1haWwgRXJyb3IgT24gQ29uZWN0aW9uIG5ldHdvcmsgLi4uIQ0KPGJ1dHRvbiBjbGFzcz0iY2xvc2UiIGFyaWEtaGlkZGVuPSJ0cnVlIiBkYXRhLWRpc21pc3M9ImFsZXJ0IiB0eXBlPSJidXR0b24iPiZ0aW1lczs8L2J1dHRvbj48L2Rpdj4nO30NCmVsc2UgaWYgKCRfR0VUWydyZWZmJ10gPT0gNykgeyBlY2hvICc8ZGl2IGNsYXNzPSJhbGVydCBhbGVydC1zdWNjZXNzIj4nLiRtZXNzYWdlLic8YnV0dG9uIGNsYXNzPSJjbG9zZSIgYXJpYS1oaWRkZW49InRydWUiIGRhdGEtZGlzbWlzcz0iYWxlcnQiIHR5cGU9ImJ1dHRvbiI+JnRpbWVzOzwvYnV0dG9uPjwvZGl2Pic7fQ0KZWxzZSBpZiAoJF9HRVRbJ3JlZmYnXSA9PSA4KSB7IGVjaG8gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LWVycm9yIj5TZXR0aW5nIGVtYWlsIGVycm9yIC4uLiENCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj4mdGltZXM7PC9idXR0b24+PC9kaXY+Jzt9DQplbHNlIGlmICgkX0dFVFsncmVmZiddID09IDkpIHsgZWNobyAnPGRpdiBjbGFzcz0iYWxlcnQgYWxlcnQtc3VjY2VzcyI+U2V0dGluZyBFbWFpbCBTdWNjZXNzIC4uLiENCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj4mdGltZXM7PC9idXR0b24+PC9kaXY+Jzt9DQplbHNlIGlmKCRfR0VUWydyZWZmJ10gPT0gMTAgKSB7IGVjaG8gJzxkaXYgY2xhc3M9ImFsZXJ0IGFsZXJ0LWVycm9yIj5QbGVhc2UgZW50ZXIgYSB2YWxpZCBlbWFpbC4uIS4uLiENCjxidXR0b24gY2xhc3M9ImNsb3NlIiBhcmlhLWhpZGRlbj0idHJ1ZSIgZGF0YS1kaXNtaXNzPSJhbGVydCIgdHlwZT0iYnV0dG9uIj4mdGltZXM7PC9idXR0b24+PC9kaXY+Jzt9fQ==';
eval (base64_decode($warning));?>

<?PHP if(!empty($_GET['refid'])){
 $refid= mysql_real_escape_string($_GET['refid']); 
$sqldata=mysql_query("select * from  contact where kode='$refid'");
while($post=mysql_fetch_array($sqldata)){
$update=mysql_query("UPDATE contact SET status='Sudah Dibaca' WHERE kode='$refid'");
$refid = strip_tags($post['kode']);?>
<div class="doc_view">
<div class="doc_view_header">
<dl class="dl-horizontal">
<dt>Name</dt><dd><?PHP echo strip_tags($post['nama']);?></dd>
<dt>Subject</dt><dd><span><?PHP echo strip_tags($post['subject']);?></span></dd>
<dt>Sender</dt><dd><span><?PHP echo strip_tags($post['email']);?></span></dd>
<dt>Date</dt><dd><?PHP echo strip_tags($post['datetime']);?></dd>
</dl></div>
<div class="doc_view_content"><?PHP echo strip_tags($post['mail_message']);?></div>
<div class="doc_view_footer clearfix">
<div class="btn-group pull-left">
<a class="btn" onclick='change_to_1()'><i class="icon-pencil"></i> Answer</a>
<a href="<?PHP echo MY_ADMIN?>action-mailbox/?refid=<?php echo $refid?>&act=delete" class="btn" onClick='return confirm("Are you sure you want ot delete this thread.?")'><i class="icon-trash"></i> Delete</a>
<a class="btn" onClick="location.href='<?PHP echo MY_ADMIN?>mailbox';"><i class="icon-arrow-left"></i> Back</a>
</div>
<div class="pull-right"><span class="label label-success"><?PHP echo strip_tags($post['status']);?></span></div>
</div>

<div id="advanced_1" style="display:none"><hr>
<div class="row-fluid">
<div style="width:80%; margin:auto!important"><h3 class="heading">Reply To : <?PHP echo strip_tags($post['nama']);?></h3>
<form id="form1" name="form1" method="post" action="<?PHP echo MY_ADMIN?>action-mailbox">
<div class="formSep">
<div class="row-fluid">
<label>Email <span class="f_req">*</span></label>
<input type="email" name="email" class="span12" value="<?PHP echo strip_tags($post['email']);?>" required/>
</div>
<div class="row-fluid">
<label>Subject <span class="f_req">*</span></label>
<input type="text" name="subject" class="span12" required/>
</div>

<div class="row-fluid">
<label>Message <span class="f_req">*</span></label>
<textarea name="mail_message" id="txtarea_limit_chars" cols="1" rows="7" class="span12" required></textarea>
</div>
<input type="hidden" name="nama" class="span3" value="<?PHP echo strip_tags($post['nama']);?>" />
<input type="hidden" name="refid" class="span3" value="<?PHP echo strip_tags($post['kode']);?>" />
<div class="form-actions">
<button class="btn btn-primary btn-small" name="pesanreply" type="submit"><i class="icon-mail-forward"></i> Send Message</button>
<button type="button" onClick="change_to_none()" class="btn btn-small">Cancel</button></div>
</div>
</form>
</div></div></div>

</div>
</div>
<?PHP }?><?PHP } else {?>

<div class="modal hide fade" id="myModal1">
<div class="modal-header" style="height:31px;">
<button class="close" data-dismiss="modal"><i class="icon-remove"></i></button>
<h3>Setting Email Domain</h3></div>

<div class="modal-body">
<form class="form_validation_ttip" name="form1" action="<?PHP echo MY_ADMIN?>action-mailbox" method="post">
<div class="row-fluid"><div class="span12">
<label>Sett Email<span class="f_req">*</span></label>
<input type="text" name="sett_email" id="w_name" class="span12" value="<?PHP echo $sett_email;?>" placeholder="example@domain.com" required></div></div>
<button class="btn btn-primary" name="setemail" type="submit"><i class="icon-save"></i> Save</button>
</form>
</div>

<div class="modal-footer">

<a href="#" class="btn" data-dismiss="modal">Close</a></div>
</div>


<div class="row-fluid">
<div class="span12">
<div class="mbox">
<div class="tabbable">
<div class="heading">
 <button type="button" data-toggle="modal" data-backdrop="static" href="#myModal1" class="btn btn-primary btn-small float-right"><i class="icon-cog"></i> Setting</button>
<ul class="nav nav-tabs">
<li><a href="#mbox_new" data-toggle="tab"><i class="splashy-document_letter_edit"></i> New message</a></li>
<li class="active"><a href="#mbox_inbox" data-toggle="tab"><i class="splashy-mail_light_down"></i>  Inbox 
<span class="label label-warning"><?PHP  echo $jumlah_mailbox;?></span></a></li>
</ul>	



</div>
<div class="tab-content">
<div class="tab-pane" id="mbox_new">
<form id="form1" name="form1" method="post" action="<?PHP echo MY_ADMIN?>action-mailbox">
<div class="row-fluid">
<label>Name <span class="f_req">*</span></label>
<input type="text" name="nama" class="span12" required/>
</div>

<div class="row-fluid">
<label>Email <span class="f_req">*</span></label>
<input type="email" name="email" class="span12" required/>
</div>

<div class="row-fluid">
<label>Subject <span class="f_req">*</span></label>
<input type="text" name="subject" class="span12" required/>
</div>


<div class="row-fluid">
<label>Message <span class="f_req">*</span></label>
<textarea class="span12 auto_expand" rows="12" cols="10" id="mail_message" name="mail_message"></textarea>
</div>

<div class="form-actions">
<button class="btn btn-primary btn-small" name="pesanbaru" type="submit"><i class="icon-mail-forward"></i> Send Message</button>
</div>
</form>
</div>
<div class="tab-pane active" id="mbox_inbox">
<form id="form1" name="form1" method="post" action="<?PHP echo MY_ADMIN?>action-mailbox">
<button class="btn btn-small
" style="position:absolute; margin-left:20%; margin-top:9px; z-index:999; float:left" name="delete" type="submit" onClick='return confirm("Anda yakin ingin menghapus data yang terpilih...?")'><i class="icon-trash"></i> Delete</button>	
<table width="100%" class="table table-striped" id="datapost">
<thead>
<tr>
<th width="17" class="table_checkbox"></th>
<th width="17" class="table_checkbox">&nbsp;</th>
<th width="384">From</th>
<th width="329">Subject</th>
<th width="190">Date</th>
</tr>
</thead>
<tbody>
<?php $sql=mysql_query("select * from contact order by contact.id desc");
$no=1;while($pesan=mysql_fetch_array($sql)){  
$status = strip_tags($pesan['status']);
$nama_mail = strip_tags($pesan['nama']); ?>
<tr>
<td><?php echo"<input type=checkbox name=cek[] value=".$pesan['id']." id=id-".$no.">";?></td>
<td><?PHP if ($status == 'Belum Dibaca'){echo'<i class="splashy-mail_light"></i>';}else{echo'<i class="splashy-mail_light_stuffed"></i>';}?></td>
<td onClick="location.href='<?PHP echo MY_ADMIN?>mailbox/?refid=<?PHP echo strip_tags($pesan['kode']);?>';" style="cursor:pointer"><?PHP if ($status == 'N'){?><b><?PHP echo $nama_mail;?></b><?PHP } else{?> <?PHP echo $nama_mail;?><?PHP }?></td>
<td><?PHP echo strip_tags($pesan['subject']);?></td>
<td><?PHP echo strip_tags($pesan['datetime']);?></td>
</tr><?PHP $no++; }?></tbody></table></form>
</div>
								
</div></div></div>
</div><?PHP }?>
</div></div></div>
<!-- sidebar -->
<?PHP include"../../in/panel.php";?> 
<?PHP include"../../head-js.php";?>
<link rel="stylesheet" type="text/css" href="<?PHP echo MY_ADMIN?>/img/splashy/splashy.css">
<link rel="stylesheet" type="text/css" href="<?PHP echo MY_ADMIN?>lib/datatables/jquery.dataTables.css">
<script src="<?PHP echo MY_ADMIN?>lib/datatables/jquery.dataTables.min.js"></script>
<script src="<?PHP echo MY_ADMIN?>lib/datatables/dataTables.bootstrap.js"></script>
<script src="<?PHP echo MY_ADMIN?>lib/colorbox/jquery.colorbox.min.js"></script>
</div></div>
</body></html>