<?php 
include ('./config.php');
 include('./lib/ini.lib.php');
$config = get_parse_ini('./lib/config.ini.php');
include "./lib/ini.php";?>

<!DOCTYPE html><html lang="id"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?PHP echo $title_web;?></title>
<meta name="description" content="<?PHP echo $deskripsi_web;?>" />
<meta name="keywords" content="<?PHP echo $keyword_web;?>" />
<meta name="author" content="<?PHP echo $admin_web;?>" />
<?PHP include "./lib/meta_tag.php";?>
<script type='text/javascript' src='./js/jquery.js'></script>
<?PHP include "./head.php";?>
<link type="text/css" rel="stylesheet" href="css/slider-berita/base.css"/>
<link type="text/css" rel="stylesheet" href="css/slider-berita/theme.css"/>
</head><body>
<!--Start Wrapper-->
<section class="wrapper">

<?PHP include"./lib/header.php";?>
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-8 margin-top-29">
<?PHP include"./lib/slider-berita.php";?>
<hr>
<?php $limit =$show_blog;  if(isset($_GET['page'])){ $page = mysql_real_escape_string($_GET['page']); } else{ $page = 1;} $offset = ($page - 1) * $limit;
$sqlartikel=mysql_query("select * from article order by article.id_article desc LIMIT $offset, $limit");
$cekartikel = mysql_num_rows($sqlartikel); 
if($cekartikel!=0){
while($post=mysql_fetch_array($sqlartikel)){
$a_category = $post['categories'];
$jumlah_category = substr_count($a_category,",");
$a_category = explode(',',$a_category);
$title_article = trim(stripslashes(strip_tags(substr($post['title'],0,50))));
$link_blog ="".MY_PATH."post/". strip_tags(htmlentities($post['link_article'])).".html";
$content_blog = $post['content'];
$gambar_blog = cek_img_tag($content_blog);
// set tanggal indonesia
$date = strip_tags($post['date']);
$tanggal = date('D, d M Y', strtotime($date));
$date_ind = dateindo($tanggal);
//////////////////////////////////////////////////
$content = trim(stripslashes(strip_tags(substr($post['content'],0,200))));
$datestandar = "tgl_standar";?>
<div class="col-sm-6 col-md-6 col-lg-6">
<div class="blog">
<article class="post_container">
<figure class="post-image touching">
<?PHP if($gambar_blog == ''){?><img src="<?PHP echo MY_PATH?>img/not-images.png" alt="<?PHP echo $title_article?>"/>
<?PHP } else{ ?><?PHP echo $gambar_blog;?><?PHP }?>
</figure>
<div class="post-content"><a href="<?PHP echo $link_blog;?>"><h4><?PHP echo $title_article;?></h4></a>
<div class="blog-meta"><ul>
<li class="post-tags"><i class="icon-user"></i> <a href="#"><?PHP echo $admin_web;?></a></li>
<li class="post-tags"><i class="icon-time"></i> <a href="#"><?PHP if ($datestandar == $datetime){echo $date_ind; } else {echo $date; }?></a></li>
</ul></div>
<p><?PHP echo $content;?>...</p>
</div>
</article>
</div>
</div>
<?PHP }}?>
<div class="paginate">
<ul class="pagination">
<?php $sql2  =mysql_query("SELECT COUNT(*) AS jumData FROM article");
$data  = mysql_fetch_array($sql2);
$url_page = "".MY_PATH."?page=";
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
</div>

<!-- Sidebar -->
<div class="col-sm-4 col-md-4 col-lg-4 margin-top-30">
<?PHP $sidebar_='JHNxbF93aWRnZXRfdXRhbWEgPSBteXNxbF9xdWVyeSgic2VsZWN0ICogZnJvbSB3aWRnZXQgd2hlcmUgcG9zaXRpb249J3JpZ2h0JyBvcmRlciBieSB3aWRnZXQubnVtYmVyMiBBU0MiKTsNCndoaWxlICgkZGF0YV93aWRnZXQgPSBteXNxbF9mZXRjaF9hcnJheSgkc3FsX3dpZGdldF91dGFtYSkpew0KJHRpdGxlX3dpZGdldF9ibG9nID0gc3RyaXBfdGFncygkZGF0YV93aWRnZXRbJ3RpdGxlJ10pOw0KJGljb25fd2lkZ2V0PSRkYXRhX3dpZGdldFsnaWNvbl93aWRnZXQnXTsNCiRjb250ZW50X3dpZGdldCA9ICRkYXRhX3dpZGdldFsnY29udGVudCddOw0KJHR5cGVfd2lkZ2V0ID0gJGRhdGFfd2lkZ2V0Wyd0eXBlJ107DQppZiAoJHR5cGVfd2lkZ2V0ID09IDEpew0KZWNobyc8ZGl2IGNsYXNzPSJ3aWRnZXRfY29udGVudCI+JzsNCmlmICgkdGl0bGVfd2lkZ2V0X2Jsb2cgPT0gJycpey8va29zb25nLw0KfSBlbHNlIHsgDQplY2hvJzxkaXYgY2xhc3M9InRpdGxlX3dpZGdldCI+PHNwYW4gY2xhc3M9Imljb24td2lkZ2V0Ij4nLiRpY29uX3dpZGdldC4nPC9zcGFuPjxzcGFuIGNsYXNzPSJ0aXRsZS10ZXh0Ij4nLiR0aXRsZV93aWRnZXRfYmxvZy4nPC9zcGFuPjwvZGl2Pic7DQp9IA0KaW5jbHVkZSAnLi9wdWJsaWMvd2lkZ2V0LycuJGNvbnRlbnRfd2lkZ2V0LicnOw0KZWNobyAnPC9kaXY+JzsNCn0gaWYgKCR0eXBlX3dpZGdldCA9PSAyKXsNCmVjaG8nPGRpdiBjbGFzcz0id2lkZ2V0X2NvbnRlbnQiPg0KPGRpdiBjbGFzcz0idGl0bGVfd2lkZ2V0Ij48c3BhbiBjbGFzcz0iaWNvbi13aWRnZXQiPicuJGljb25fd2lkZ2V0Lic8L3NwYW4+PHNwYW4gY2xhc3M9InRpdGxlLXRleHQiPicuJHRpdGxlX3dpZGdldF9ibG9nLic8L3NwYW4+PC9kaXY+DQonLiRjb250ZW50X3dpZGdldC4nJzsNCmVjaG8gJzwvZGl2Pic7fX0=';
echo eval(base64_decode($sidebar_));?>				
</div>
<!-- end:sidebar -->
</div></div>

<?PHP include"./lib/footer.php";?>
</section>
<?PHP include"./js.php";?>
<script src="./js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.accessible-news-slider.js"></script>

</body>
</html>
