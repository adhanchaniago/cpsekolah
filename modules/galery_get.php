<?php 
include ('../config.php');
 include('../lib/ini.lib.php');
$config = get_parse_ini('../lib/config.ini.php');
include "../lib/ini.php";
$link_categories = htmlentities(mysql_real_escape_string($_GET['link_categories']));
$categories= mysql_query("select * from galery_categories where link_categories='$link_categories'") or die(mysql_error());
$cari=mysql_fetch_array($categories);
$title_categories =ucfirst($cari['title']);?>

<!DOCTYPE html><html lang="id"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Galery Foto  <?PHP echo $title_categories;?> | <?PHP echo $title_web;?></title>
<meta name="description" content="<?PHP echo $keyword_web;?>" />
<meta name="keywords" content="<?PHP echo $keyword_web;?>" />
<meta name="author" content="<?PHP echo $admin_web;?>" />

<meta property="og:title" content="<?PHP echo $title_categories;?> | <?PHP echo $title_web;?>">
<meta property="og:type" content="article">
<meta property="og:url" content="http://<?php echo $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];?>">
<meta property="og:image" content="">
<meta property="og:site_name" content="<?PHP echo $title_web;?>">
<meta property="og:description" content="<?PHP echo $keyword_web;?>">
<?PHP include "../lib/meta_tag.php";?>
<?PHP include "../head.php";?>
<link rel="stylesheet" type="text/css" href="<?PHP echo MY_PATH?>css/galery/style.css" />
</head><body>
<!--Start Wrapper-->
<section class="wrapper">
<?PHP include"../lib/header.php";?>
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 margin-top-29">
<ul id="list" class="portfolio_list clearfix">
<?php $limit =12; if(isset($_GET['page'])){ $page = $_GET['page']; } else{ $page = 1;} $offset = ($page - 1) * $limit;
$galery=mysql_query("select * from galery  where categories='$link_categories' order by galery.id_galery desc LIMIT $offset, $limit")or die(mysql_error());
$cekdata= mysql_num_rows($galery); 
if($cekdata!=0){
while($post=mysql_fetch_array($galery)){
$title_galery = strip_tags($post['title']);
$gambar_galery = $post['gambar'];
?>
<li class="list_item col-lg-3 col-md-3 col-sm-3">
<div class="recent-item">
<figure>
<div class="bwWrapper touching medium">
<img src="<?PHP echo MY_PATH?>images/galery/<?PHP echo $gambar_galery;?>" alt="<?PHP echo $title_galery;?>"/>
<a href="<?PHP echo MY_PATH?>images/galery/<?PHP echo $gambar_galery;?>" rel="gallery" class="pirobox_gall hover-zoom" title="<?PHP echo $title_galery;?>"><i class="icon-search"></i></a>
</div>
<figcaption class="item-description"><span><?PHP echo $title_galery;?></span></figcaption>
</figure>
</div></li>
<?PHP }?>
</ul>
<div class="paginate">
<ul class="pagination">
<?php $sql2  =mysql_query("SELECT COUNT(*) AS jumData FROM galery where categories='$link_categories'") or die(mysql_error());
$data  = mysql_fetch_array($sql2);
$url_page = "".MY_PATH."galery-foto/".$link_categories."/";
$jumData = $data['jumData'];
// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
$jumPage = ceil($jumData/$limit);
//menampilkan link << Previous
if ($page > 1){
echo '<li><a href="'.$url_page.''.($page-1).'"><i class="icon-double-angle-left"></i></a></li>';
}
//menampilkan urutan paging
for($i = 1; $i <= $jumPage; $i++){
//mengurutkan agar yang tampil i+3 dan i-3
         if ((($i >= $page - 1) && ($i <= $page + 2)) || ($i == 1) || ($i == $jumPage))
         {
            if($i==$jumPage && $page <= $jumPage-3) echo '<li class="disabled"><a href="#">..</a></li>';
            if ($i == $page) echo '<li class="active"><a>'.$i.'</a></li>';
            else echo '<li><a href="'.$url_page.''.$i.'">'.$i.'</a></li>';
            if($i==1 && $page >= 5) echo '<li class="disabled"><a href="#">..</a></li>';
         }
}
//menampilkan link Next >>
if ($page < $jumPage){
echo '<li><a href="'.$url_page.''.($page+1).'"><i class="icon-double-angle-right"></i></a></li>';}?>
</ul>
</div>
<?PHP } else { echo'<section class="error-404" style=width:55%;"><div class="title-404"><h3>404</h3></div>
<div class="404-small">Galery yang anda cari tidak ditemukan</div>
</section>'; } ?>						
</div></div></div>

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
