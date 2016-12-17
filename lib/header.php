<div class="header-top">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-6">
<ul class="top_contact"><li class="t_phone"><p><?PHP echo $no_hp1_admin;?></p></li>
<li class="t_mail"><p><?PHP echo $email_admin;?></p></li></ul></div>
<div class="col-lg-6 col-md-6 col-sm-6">

<ul class="social_media"> 
<li><a href="<?PHP echo $my_facebook;?>" target="_blank" data-placement="bottom" data-toggle="tooltip" class="fa icon-facebook" title="Facebook">Facebook</a></li>
<li><a href="<?PHP echo $my_google;?>" target="_blank" data-placement="bottom" data-toggle="tooltip" class="fa icon-google-plus" title="Google+">Google+</a></li>
<li><a href="<?PHP echo $my_twitter;?>" target="_blank" data-placement="bottom" data-toggle="tooltip" class="fa icon-twitter" title="Twitter">Twitter</a></li>
<li><a href="<?PHP echo $my_pinterest?>" data-placement="bottom" data-toggle="tooltip" class="fa icon-pinterest" title="Pinterest">Pinterest</a></li>
<li><a href="<?PHP echo $my_linkedin;?>" data-placement="bottom" data-toggle="tooltip" class="fa icon-linkedin" title="Linkedin">Linkedin</a></li>
<li><a href="<?PHP echo $my_rss;?>" target="_blank" data-placement="bottom" data-toggle="tooltip" class="fa icon-rss" title="Feedburner">RSS</a></li>
</ul><!-- End Social --> 
</div>
</div>
</div>
</div>

<header class="header">
<div class="header-color">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-8">
<div class="logo">
<a href="<?PHP echo MY_PATH?>"><img alt="<?PHP echo $title_web;?>" src="<?PHP echo MY_PATH?>images/<?PHP echo $logo_web;?>"></a>
</div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12">
<div class="site-search-area">
<form id="site-searchform" action="<?PHP echo MY_PATH?>berita-cari/">
<div>
<input class="input-text" name="keyword" id="s" placeholder="Cari Artikel / Berita..." type="text" />
<input id="searchsubmit" value="Search" type="submit" />
</div>
</form>
</div><!-- end site search -->

</div>

</div></div></div></header>


<div class="menu-wrapper">
<div class="container">

<a id="menu-toggle" title="Menu"><i class="icon-reorder"></i></a>
<nav id="navigation">
<ul id="main-menu">
<?PHP $sql_menu = mysql_query("select * from menu order by menu.number ASC");
$result_menu = mysql_num_rows($sql_menu);
if ($result_menu != 0){
while ($data_menu = mysql_fetch_array($sql_menu)){
$menu_id = strip_tags($data_menu['id']);
$menu_name = strip_tags($data_menu['name']);
$menu_link = strip_tags($data_menu['link']);
$menu_type = strip_tags($data_menu['type']);
$menu_target = strip_tags($data_menu['target']);
if ($menu_type == 1){?>
<li><a href="<?PHP echo $menu_link?>" target="<?PHP echo $menu_target?>"><?PHP echo $menu_name;?></a></li>
<?PHP } else{			
$sql_submenu = mysql_query("select * from submenu where menu='$menu_id'");
$result_submenu = mysql_num_rows($sql_submenu);?>
<li class="parent"><a href="<?PHP echo $menu_link?>" target="<?PHP echo $menu_target?>"><?PHP echo $menu_name;?></a>
<ul class="sub-menu">
<?PHP 
if ($result_submenu != 0){
while ($data_submenu = mysql_fetch_array($sql_submenu)){
$submenu_id = strip_tags($data_submenu['id']);
$submenu_name = strip_tags($data_submenu['name']);
$submenu_link = strip_tags($data_submenu['link']);
$submenu_target = strip_tags($data_submenu['target']);
echo '<li><a href="'.$submenu_link.'" target="'.$submenu_target.'">'.$submenu_name.'</a></li>';
} }echo '</ul></li>';}}}?>
</ul>
</nav>
</div>
</div>

<!--<div class="col-sm-12 col-md-12 col-lg-12" style="margin-top:-1px;">
<div class="welcome">
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="logo-welcome"><img src="img/Logo Tut Wuri Handayani.png" /></div>
Selamat datang di web smkn 1 bandar lampung<br />
</div>

</div></div>-->

<div class="camera_wrap camera_azure_skin" id="slider1">
<?PHP $query_slider = mysql_query("select * from slider") or die (mysql_error());
$cek_slider = mysql_num_rows($query_slider);
if ($cek_slider!=0) {
while ($post_slider = mysql_fetch_array($query_slider)) {
$title_slider = strip_tags($post_slider['title_slider']);
$gambar_slider = strip_tags($post_slider['gambar_slider']);
$description_slider = strip_tags($post_slider['description']);?>
<div data-src="
<?PHP if ($gambar_slider=='') {?><?PHP echo MY_PATH?>images/slider/images_slider_not_found.jpg"><?PHP }
else {?><?PHP echo MY_PATH?>images/slider/<?PHP echo $gambar_slider;?>"><?PHP }?>
<div class="camera_caption fadeFromBottom"><?PHP echo $description_slider;?>
</div> </div>
<?PHP }} else {echo"<h3>Slider masih kosong</h3>";}?>
</div>
