<?php 
include ('../config.php');
 include('../lib/ini.lib.php');
$config = get_parse_ini('../lib/config.ini.php');
include "../lib/ini.php";?>

<!DOCTYPE html><html lang="id"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Galery Foto | <?PHP echo $title_web;?></title>
<meta name="description" content="<?PHP echo $keyword_web;?>" />
<meta name="keywords" content="<?PHP echo $keyword_web;?>" />
<meta name="author" content="<?PHP echo $admin_web_web;?>" />

<meta property="og:title" content="Galery | <?PHP echo $title_web;?>">
<meta property="og:type" content="article">
<meta property="og:url" content="http://<?php echo $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];?>">
<meta property="og:image" content="">
<meta property="og:site_name" content="<?PHP echo $title_web;?>">
<meta property="og:description" content="<?PHP echo $keyword_web;?>">
<?PHP include "../lib/meta_tag.php";?>
<?PHP include "../head.php";?>
</head><body>
<!--Start Wrapper-->
<section class="wrapper">
<?PHP include"../lib/header.php";?>
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 margin-top-29">
<ul id="list" class="portfolio_list clearfix">
<?PHP $galery= mysql_query("select * from galery_categories order by galery_categories.id") or die(mysql_error());
while ($post = mysql_fetch_array($galery)){
$title_galery = strip_tags($post['title']);
$categories = strip_tags($post['link_categories']);
$link_galery ="".MY_PATH."galery-foto/".strip_tags($post['link_categories'])."";
$query_galery = mysql_query("select * from galery where categories='$categories' order by rand () limit 1")or die(mysql_error());
$galery_post = mysql_fetch_array($query_galery);
$gambar_galery = $galery_post['gambar'];
?>
<li class="list_item col-lg-3 col-md-3 col-sm-3">
<div class="recent-item">
<figure>
<div class="bwWrapper touching medium">
<img src="<?PHP echo MY_PATH?>images/galery/<?PHP echo $gambar_galery;?>" alt="" />
<a class="hover-link" href="<?PHP echo $link_galery;?>"> <i class="icon-link"></i></a>
</div>
<figcaption class="item-description">
<span><?PHP echo $title_galery;?></span>
</figcaption>
</figure>
</div></li>
<?PHP }?>
</ul></div>
							
</div></div>

<?PHP include"../lib/footer.php";?>
</section>
<!-- galery -->
   <script type="text/javascript" src="<?PHP echo MY_PATH?>js/galery/jquery.min.js"></script>
    <script type="text/javascript" src="<?PHP echo MY_PATH?>js/galery/jquery-ui-1.8.2.custom.min.js"></script>
	 <script type="text/javascript" src="<?PHP echo MY_PATH?>js/galery/pirobox_extended.js"></script>
	 
	 <script type="text/javascript">
$(document).ready(function() {
	$().piroBox_ext({
	piro_speed : 700,
		bg_alpha : 0.5,
		piro_scroll : true // pirobox always positioned at the center of the page
	});
});
</script>
<?PHP include"../js.php";?>
</body>
</html>
