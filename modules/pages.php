<?php 
include ('../config.php');
 include('../lib/ini.lib.php');
$config = get_parse_ini('../lib/config.ini.php');
include "../lib/ini.php";
$link_pages= mysql_real_escape_string(htmlentities($_GET['link_pages']));
$sql_get=mysql_query("select * from pages where link_pages='$link_pages'");
$cari=mysql_fetch_array($sql_get);
$title_pages = strip_tags($cari['title']);
$keyword =strip_tags($cari['keyword']);
$content_pages = $cari['content'];
$frst_image = preg_match_all( '|<img.*?src=[\'"](.*?)[\'"].*?>|i', $content_pages, $matches );
$gambar_pages= $item['image'] = $matches [ 1 ] [ 0 ];?>

<!DOCTYPE html><html lang="id"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?PHP if ($title_pages == ''){echo"Halaman Tidak Ditemukan | ".$title_web."";}else{ echo"".$title_pages." | ".$title_web."";}?></title>
<meta name="description" content="<?PHP echo $keyword;?>" />
<meta name="keywords" content="<?PHP echo $keyword;?>" />
<meta name="author" content="<?PHP echo $admin_web;?>" />

<meta property="og:title" content="<?PHP echo $title_pages;?> | <?PHP echo $title_web;?>">
<meta property="og:type" content="article">
<meta property="og:url" content="http://<?php echo $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];?>">
<meta property="og:image" content="<?PHP echo $gambar_pages;?>">
<meta property="og:site_name" content="<?PHP echo $title_web;?>">
<meta property="og:description" content="<?PHP echo $keyword;?>">
<?PHP include "../lib/meta_tag.php";?>
<?PHP include "../head.php";?>

</head><body>
<!--Start Wrapper-->
<section class="wrapper">
<?PHP include"../lib/header.php";?>
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-8 margin-top-29">
<?PHP  if($link_pages!= ''){
$sql_pages=mysql_query("select * from pages where link_pages='$link_pages'"); 
$cekdata=mysql_num_rows($sql_pages); 
if($cekdata!=0){
while ($post_pages=mysql_fetch_array($sql_pages)) {	
$a_title_pages = htmlentities(strip_tags($post_pages['title']));
// set tanggal indonesia
$date_pages = strip_tags($post_pages['date']);
$tanggal_pages = date('D, d M Y', strtotime($date_pages));
$date_indo = dateindo($tanggal_pages);
$time_pages = strip_tags($post_pages['time']);
$content_pages = $post_pages ['content'];?>
<article class="post_container">
<a href="#"><h3><?PHP echo $a_title_pages;?></h3></a>
 <div class="blog-meta"><ul>
<li class="post-tags"><i class="icon-user"></i><a href="#"><?PHP echo $admin_web;?></a></li>
<li class="post-tags"><i class="icon-time"></i><a href="#"><?PHP echo $time_pages;?></a></li>
<li class="post-tags"><i class="icon-calendar"></i><a href="#"><?PHP echo $date_indo;?></a></li>
</ul></div>
<div class="post_detail">
<?PHP echo $content_pages;?>
</div>
</article>
<?PHP include"../lib/share.php";?>
<?PHP }} else {include'../lib/not_found.php';}}?>
</div>

<?PHP include"../lib/sidebar.php";?>
</div></div>

<?PHP include"../lib/footer.php";?>
</section>
<?PHP include"../js.php";?>

</body>
</html>
