<a href="javascript:void(0)" class="sidebar_switch on_switch ttip_r" title="Hide Sidebar">Sidebar switch</a>
<div class="sidebar">

<div class="antiScroll">
<div class="antiscroll-inner">
<div class="antiscroll-content">

<div class="sidebar_inner">
<div class="avatar-home">
<img src="<?PHP echo MY_ADMIN?>img/avatar/<?PHP echo $avatar;?>" style="width:70px; height:70px;" />
</div>
<div id="side_accordion" class="accordion">

<div class="accordion-group">
<div class="accordion-heading">
<a href="#collapseOne" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
<i class="icon-folder-close"></i> Article</a></div>
<div class="accordion-body collapse" id="collapseOne">
<div class="accordion-inner">
<ul class="nav nav-list">
<li><a href="<?PHP echo MY_ADMIN?>new/article">News Article</a></li>
<li><a href="<?PHP echo MY_ADMIN?>post/article">Article Publish</a></li>
<li><a href="<?PHP echo MY_ADMIN?>article/categories">Categoreis</a></li>
<li><a href="<?PHP echo MY_ADMIN?>comment/article">Comments</a></li>
</ul>
</div>
</div>
</div>
<div class="accordion-group">
<div class="accordion-heading">
<a href="#collapseTwo" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
<i class="icon-file-text"></i> Agenda</a>
</div>
<div class="accordion-body collapse" id="collapseTwo">
<div class="accordion-inner">
<ul class="nav nav-list">
<li><a href="<?PHP echo MY_ADMIN?>new/agenda">News Agenda</a></li>
<li><a href="<?PHP echo MY_ADMIN?>post/agenda">Agenda Publish</a></li>
</ul>
</div>
</div>
</div>

<div class="accordion-group">
<div class="accordion-heading">
<a href="#collapsetree" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
<i class="icon-file-text"></i> Pages</a>
</div>
<div class="accordion-body collapse" id="collapsetree">
<div class="accordion-inner">
<ul class="nav nav-list">
<li><a href="<?PHP echo MY_ADMIN?>new/pages">News Pages</a></li>
<li><a href="<?PHP echo MY_ADMIN?>post/pages">Pages Publish</a></li>
</ul>
</div>
</div>
</div>

<div class="accordion-group">
<div class="accordion-heading">
<a href="#collapport" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
<i class="icon-suitcase icon-white"></i> Galery</a>
</div>
<div class="accordion-body collapse" id="collapport">
<div class="accordion-inner">
<ul class="nav nav-list">
<li><a href="<?PHP echo MY_ADMIN?>galery/">Galery Publish</a></li>
<li><a href="<?PHP echo MY_ADMIN?>galery/categories">Categoreis</a></li>
</ul>
</div>
</div>
</div>

<div class="accordion-group">
<div class="accordion-heading">
<a href="#collapbuku" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
<i class="icon-reorder"></i> Fitur</a>
</div>
<div class="accordion-body collapse" id="collapbuku">
<div class="accordion-inner">
<ul class="nav nav-list">
<li><a href="<?PHP echo MY_ADMIN?>download">Buku Tamu</a></li>
<li><a href="<?PHP echo MY_ADMIN?>polling/">Polling</a></li>
</ul>
</div>
</div>
</div>


<div class="accordion-group">
<div class="accordion-heading">
<a href="#collapmanager" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
<i class="icon-folder-open"></i> Manager</a>
</div>
<div class="accordion-body collapse" id="collapmanager">
<div class="accordion-inner">
<ul class="nav nav-list">
<li><a href="<?PHP echo MY_ADMIN?>file-download">File Download</a></li>
</ul>
</div>
</div>
</div>



<div class="accordion-group">
<div class="accordion-heading">
<a href="#collapseFour" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle"><i class="icon-cog"></i> Setting</a></div>
<div class="accordion-body collapse" id="collapseFour">
<div class="accordion-inner">
<ul class="nav nav-list">
<li><a href="<?PHP echo MY_ADMIN?>setting/basic/">Basic</a></li>
<li><a href="<?PHP echo MY_ADMIN?>setting/slider/">Slider</a></li>
</ul>
</div>
</div>
</div>

<div class="accordion-group">
<div class="accordion-heading">
<a href="#setlayout" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle"><i class="icon-laptop"></i> Layout</a></div>
<div class="accordion-body collapse" id="setlayout">
<div class="accordion-inner">
<ul class="nav nav-list">
<li><a href="<?PHP echo MY_ADMIN?>setting/menu">Menu</a></li>
<li><a href="<?PHP echo MY_ADMIN?>setting/widget">Widget</a></li>
<li><a href="<?PHP echo MY_ADMIN?>setting/template">Edit Template</a></li>
</ul>
</div>
</div>
</div>

<div class="accordion-group">
<div class="accordion-heading">
<a href="#setconfigurasi" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle"><i class="icon-cogs"></i> Configurasi</a></div>
<div class="accordion-body collapse" id="setconfigurasi">
<div class="accordion-inner">
<ul class="nav nav-list">
<li><a href="<?PHP echo MY_ADMIN?>configurasi/">Set Configurasi</a></li>
</ul>
</div>
</div>
</div>

<div class="accordion-group">
<div class="accordion-heading">
<a href="#collapseThree" data-parent="#side_accordion" data-toggle="collapse" class="accordion-toggle">
<i class="icon-user"></i> Account manager
</a>
</div>
<div class="accordion-body collapse" id="collapseThree">
<div class="accordion-inner">
<ul class="nav nav-list">
<li><a href="<?PHP echo MY_ADMIN?>account">Account</a></li>
</ul>

</div>
</div>
</div>


<div class="push"></div>


<div class="sidebar_info">
<ul class="unstyled">
<li>
<span class="act act-warning"><?PHP echo $name_admin;?></span>
<strong>User</strong>
</li>
<li>
<span class="act act-success"><?PHP echo $tgl_akhir;?></span>
<strong>Access</strong>
</li>
<li>
<span class="act act-danger"><?PHP echo $ip;?></span>
<strong>IP</strong>
</li>
</ul>
</div> 

</div>
</div>
</div>

</div>