<?php 
include ('../config.php');
 include('../lib/ini.lib.php');
$config = get_parse_ini('../lib/config.ini.php');
include "../lib/ini.php";
if (isset($_GET['keyword'])){ 
$keyword = htmlentities($_GET['keyword']); 
$keyword = str_replace('-', ' ', $keyword);
} else{ header("location:".MY_PATH.""); } ?>

<!DOCTYPE html><html lang="id"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?PHP echo $keyword;?> | <?PHP echo $title_web;?></title>
<meta name="description" content="<?PHP echo $description_web;?>" />
<meta name="keywords" content="<?PHP echo $keyword_web;?>" />
<meta name="author" content="<?PHP echo $admin_web;?>" />

<meta property="og:title" content="<?PHP echo $keyword;?> | <?PHP echo $title_web;?>">
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
<div class="col-lg-8 col-md-8 col-sm-8 margin-top-29">
<?php $limit =$show_blog; if(isset($_GET['page'])){ $page = $_GET['page']; } 
else{ $page = 1;} $offset = ($page - 1) * $limit;
$query_tags=mysql_query("select * from article where title like '%$keyword%' or categories like '%$keyword%' order by article.id_article desc LIMIT $offset, $limit") or die(mysql_error());
$cek_tags = mysql_num_rows($query_tags); 
if($cek_tags!=0){
while($post_tags=mysql_fetch_array($query_tags)){
$a_category = $post_tags['categories'];
$jumlah_category = substr_count($a_category,",");
$a_category = explode(',',$a_category);
$title_article = trim(stripslashes(strip_tags(substr($post_tags['title'],0,50))));
$link_blog_tags ="".MY_PATH."post/". strip_tags(htmlentities($post_tags['link_article'])).".html";
$content_blog = $post_tags['content'];
$gambar_tags = cek_img_tag($content_blog);
// set tanggal indonesia
$date_tags = strip_tags($post_tags['date']);
$tanggal_tags = date('D, d M Y', strtotime($date_tags));
$date_indo_tags = dateindo($tanggal_tags);
//////////////////////////////////////////////////
$content_blog_tags = trim(stripslashes(strip_tags(substr($post_tags['content'],0,150))));
$datestandar = "tgl_standar";?>

<div class="col-sm-6 col-md-6 col-lg-6">
<div class="blog">
<article class="post_container">
<figure class="post-image touching">
<?PHP if($gambar_tags == ''){?><img src="<?PHP echo MY_PATH?>img/not-images.png" alt="<?PHP echo $title_article?>"/>
<?PHP } else{ ?><?PHP echo $gambar_tags;?><?PHP }?>
</figure>
<div class="post-content"><a href="<?PHP echo $link_blog_tags;?>"><h4><?PHP echo $title_article;?></h4></a>
<div class="blog-meta"><ul>
<li class="post-tags"><i class="icon-user"></i> <a href="#">widodo</a></li>
<li class="post-tags"><i class="icon-time"></i> <?PHP if ($datestandar == $datetime){echo $date_indo_tags; } else {echo $date_tags; }?></a></li>
</ul></div>
<p><?PHP echo $content_blog_tags;?>...</p>
</div>
</article>
</div>
</div>
<?PHP }?>
<div class="paginate">
<ul class="pagination">
<?php $sql2  =mysql_query("SELECT COUNT(*) AS jumData FROM article where title like '%$keyword%' or categories like '%$keyword%'");
$data  = mysql_fetch_array($sql2);
$url_page = "".MY_PATH."berita/search/".$keyword."/";
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
<?PHP } else {include'../lib/not_found.php';} ?>
</div>

<?PHP include"../lib/sidebar.php";?>
</div></div>

<?PHP include"../lib/footer.php";?>
</section>
<?PHP include"../js.php";?>

</body>
</html>
