<header>
<div class="navbar navbar-fixed-top">
<div class="navbar-inner">
<div class="container-fluid">
<a class="brand" href="<?PHP echo MY_ADMIN?>"><i class="icon-home icon-white"></i> <?PHP echo $title_web;?></a>
<ul class="nav user_menu pull-right">
<li class="hidden-phone hidden-tablet">
<div class="nb_boxes clearfix">
<a data-toggle="modal" data-backdrop="static" href="#myMail" class="label ttip_b" title="New messages">
<i class="icon-envelope"></i> <?PHP echo $jumlah_mailbox;?></a>
<a href="<?PHP echo MY_ADMIN;?>guestbook/" data-backdrop="static" class="label ttip_b" title="Guestbook"><i class="icon-book"></i> <?PHP  echo $jumlah_buku_tamu;?></a>

</div>
</li>
<li class="divider-vertical hidden-phone hidden-tablet"></li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?PHP //echo $name_admin;?><b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="<?PHP echo MY_ADMIN;?>account"><i class="icon-user"></i> My Profile</a></li>
<li class="divider"></li>
<li><a onClick="location.href='<?PHP echo MY_ADMIN?>logout/?ref=logout';" style="cursor:pointer"><i class="icon-signout"></i> Log Out</a></li>
</ul>
</li>
</ul>
<a data-target=".nav-collapse" data-toggle="collapse" class="btn_menu">
<span class="icon-align-justify icon-white"></span>
</a>
<nav>
<div class="nav-collapse">
<ul class="nav">
<li class="dropdown">
<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-folder-close icon-white"></i> Article <b class="icon-chevron-down"></b></a>

<ul class="dropdown-menu">
<li><a href="<?PHP echo MY_ADMIN?>new/article">New Article</a></li>
<li><a href="<?PHP echo MY_ADMIN?>post/article">Article Publish</a></li>
<li><a href="<?PHP echo MY_ADMIN?>article/categories">Categories</a></li>
</ul>
</li>

<li class="dropdown">
<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-calendar icon-white"></i> Agenda <b class="icon-chevron-down"></b></a>
<ul class="dropdown-menu">
<li><a href="<?PHP echo MY_ADMIN?>new/agenda">New Add Agenda </a></li>
<li><a href="<?PHP echo MY_ADMIN?>post/agenda">Agenda Publish</a></li>
</ul>
</li>

<li class="dropdown">
<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-file-text-alt icon-white"></i> Pages<b class="icon-chevron-down"></b></a>
<ul class="dropdown-menu">
<li><a href="<?PHP echo MY_ADMIN?>new/pages">New Add Pages</a></li>
<li><a href="<?PHP echo MY_ADMIN?>post/pages">Pages Publish</a></li>
</ul></li>


<li class="dropdown">
<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-indent-right icon-white"></i> Bank Data<b class="icon-chevron-down"></b></a>
<ul class="dropdown-menu">
<li><a href="<?PHP echo MY_ADMIN?>post/siswa">Data siswa</a></li>
<li><a href="<?PHP echo MY_ADMIN?>data-alumni">Data Alumni</a></li>
<li><a href="<?PHP echo MY_ADMIN?>data-guru">Data Guru</a></li></ul>
</li>

<li class="dropdown">
<a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="icon-book icon-white"></i> Mailbox <b class="icon-chevron-down"></b></a>
<ul class="dropdown-menu">
<li><a href="<?PHP echo MY_ADMIN?>guestbook">Guestbook</a></li>
<li><a href="<?PHP echo MY_ADMIN?>mailbox">Mailbox</a></li>
</ul>
</li>
<li>
</li>

</ul>
</div>
</nav>
</div>
</div>
</div>
<div class="modal hide fade" id="myMail">
<div class="modal-header"><button class="close" data-dismiss="modal">&times;</button>
<h3>New messages</h3></div>
<div class="modal-body">
<table class="table table-condensed table-striped" data-rowlink="a">
<thead><tr>
<th>Sender</th>
<th>Subject</th>
<th>Date</th></tr></thead>
<tbody><tr>
<?php $sql=mysql_query("select * from contact where status='Belum Dibaca' order by contact.id desc");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++;
$kode= strip_tags($datapost['kode']);
$nama= strip_tags(substr($datapost['nama'],0,28));
$subject= strip_tags(substr($datapost['subject'],0,28));
$datetime = strip_tags($datapost['datetime']);?>
<td><?PHP echo $nama;?></td>
<td><a href="<?PHP echo MY_ADMIN?>mailbox/?refid=<?PHP echo $kode;?>"><?PHP echo $subject;?></a></td>
<td><?PHP echo $datetime;?></td>
</tr><?PHP }?>
</tbody>
</table>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal">&times; Close</button>
<a href="<?PHP echo MY_ADMIN?>mailbox" class="btn">Go to mailbox</a>
</div>
</div>
<div class="modal hide fade" id="myTasks">
<div class="modal-header">
<button class="close" data-dismiss="modal">&times;</button>
<h3>New Ads </h3>
</div>
<div class="modal-body">
<table class="table table-condensed table-striped" data-rowlink="a">
<thead><tr><th>Title</th><th>Date</th></tr></thead><tbody>
<tr>
<?php //$sql=mysql_query("select * from iklan where status='Draft' order by iklan.id desc");$no=0;
//while($datapost=mysql_fetch_array($sql)){$no++;
//$ID= strip_tags($datapost['ID']);
//$title= strip_tags(substr($datapost['title'],0,28));
//$date = strip_tags($datapost['date']);?>
<td><a href="<?PHP echo MY_ADMIN?>draft/iklan/?refid=<?PHP //echo $ID;?>"><?PHP //echo $title;?></a></td>
<td><?PHP //echo $date;?></td>
</tr><?PHP //}?></tbody>
</table>
</div>
<div class="modal-footer">
<button class="btn" data-dismiss="modal">&times; Close</button>
<a href="<?PHP echo MY_ADMIN?>draft/iklan" class="btn">Go to Draft Ads</a>

</div>
</div>
</header>

