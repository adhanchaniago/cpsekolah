<?php 
include ('../config.php');
 include('../lib/ini.lib.php');
$config = get_parse_ini('../lib/config.ini.php');
include "../lib/ini.php";
$link_article=htmlentities($_GET['link_article']);
$sql_get=mysql_query("select * from article where link_article='$link_article'");
$cari=mysql_fetch_array($sql_get);
$title_blog = strip_tags( $cari['title']);
$keyword =strip_tags(time( $cari['keyword']));
$a_category =htmlentities(strip_tags($cari['categories']));
$jumlah_category = substr_count($a_category,",");
$a_category = explode(',',$a_category);
$content_blog = $cari['content'];
$frst_image = preg_match_all( '|<img.*?src=[\'"](.*?)[\'"].*?>|i', $content_blog, $matches );
$gambar_blog = $item['image'] = $matches [ 1 ] [ 0 ];
//==================================================
$nama_comment=''; $email_comment=''; $url_website_komen	='';?>

<!DOCTYPE html><html lang="id"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?PHP if ($title_blog == ''){echo"Artikel Tidak Ditemukan | ".$title_web."";}else{ echo"".$title_blog." | ".$title_web."";}?></title>
<meta name="description" content="<?PHP echo $keyword;?>" />
<meta name="keywords" content="<?PHP echo $keyword;?>" />
<meta name="author" content="<?PHP echo $admin_web;?>" />

<meta property="og:title" content="<?PHP echo $title_blog;?> | <?PHP echo $title_web;?>">
<meta property="og:type" content="article">
<meta property="og:url" content="http://<?php echo $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];?>">
<meta property="og:image" content="<?PHP echo $gambar_blog;?>">
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
<?PHP  if($link_article!= ''){
$sql=mysql_query("select * from article where link_article='$link_article'");
$cekdata=mysql_num_rows($sql); 

if($cekdata!=0){
while ($post_blog = mysql_fetch_array($sql)) {
	$baca = $post_blog['stat']+1;
$a_id = htmlentities(strip_tags($post_blog['id_article']));
$a_title_blog = htmlentities(strip_tags($post_blog['title']));
$link_article ="".MY_PATH."post/". strip_tags(htmlentities($post_blog['link_article'])).".html";
// set tanggal indonesia
$date_blog = strip_tags($post_blog['date']);
$tanggal = date('D, d M Y', strtotime($date_blog));
$date_ind = dateindo($tanggal);
$content_blog = $post_blog ['content'];
$dibaca_blog = strip_tags($post_blog['stat']);
$updatepembaca=mysql_query("UPDATE article SET stat='$baca' WHERE id_article='$a_id'");
$coment=mysql_query("SELECT * FROM comment WHERE status='Y' and id_article='$a_id'");$komentar=mysql_num_rows($coment);?>
<article class="post_container">
<a href="#"><h3><?PHP echo $a_title_blog;?></h3></a>
 <div class="blog-meta"><ul>
<li class="post-tags"><i class="icon-user"></i><a href="#"><?PHP echo $admin_web;?></a></li>
<li class="post-tags"><i class="icon-time"></i><a href="#"><?PHP echo $date_ind;?></a></li>
<li class="post-tags"><i class="icon-tag"></i><?PHP $j_cat = 0; while ($j_cat <= $jumlah_category){$cat_me = $a_category["$j_cat"];
$cat_link2 = strtolower($cat_me); $cat_link2 = str_replace(" ", "-", $cat_link2);
echo '<a href="'.MY_PATH.'berita/tags/'.$cat_link2.'">'.$cat_me.', </a>'; $j_cat++;}?></li>
<li class="post-tags"><i class="icon-comments"></i><a href="#"><?PHP echo $komentar;?> komentar</a></li>
<li class="post-tags"><i class="icon-bullhorn"></i><a href="#"><?PHP echo $dibaca_blog;?> pembaca</a></li>
</ul></div>
<div class="post_detail">
<?PHP echo $content_blog;?>
</div>
</article>
<?PHP include"../lib/share.php";?>
<div class="blog_tags"><ul>
<?PHP $j_cat = 0; while ($j_cat <= $jumlah_category){$cat_me = $a_category["$j_cat"];
$cat_link2 = strtolower($cat_me); $cat_link2 = str_replace(" ", "-", $cat_link2);
echo '<li><a href="'.MY_PATH.'blog/tags/'.$cat_link2.'">#'.$cat_me.'</a></li>';$j_cat++;}?>
</ul>
</div>

<div class="widget_content last"><div class="title_widget">
<span class="icon-widget"><i class="icon-bookmark"></i></span><span class="title-text">Artikel Lainya..</span></div>
<div class="related_article"><ul class="popular_posts_list">
<?PHP $j_cat = 0; while ($j_cat <= $jumlah_category){ $cat_me = $a_category["$j_cat"];
$sqlrelated=mysql_query("select * from article where categories like '%$cat_me%' and title!='$title' order by RAND()LIMIT 5");
while($data_related=mysql_fetch_array($sqlrelated)){
$title_related  = strip_tags(substr($data_related['title'],0,28));
$link_related ="".MY_PATH."post/".$data_related['link_article'].".html";
$content_related = $data_related['content'];
$gambar_related = cek_img_tag($content_related);
// set tanggal indonesia
$date_related = strip_tags($post_blog['date']);
$tanggal_related = date('D, d M Y', strtotime($date_related));
$date_ind_r = dateindo($tanggal_related);?>
<div class="col-lg-6 col-md-6 col-sm-6">
<li><a href="<?PHP echo $link_related;?>">
<div class="recent-img">
<?PHP if($gambar_related == ''){?><img src="<?PHP echo MY_PATH?>img/not-images.png" alt="<?PHP echo $title_related;?>">
<?PHP } else{ ?><?PHP echo $gambar_related;}?></div>
<div class="title_post">
<?PHP echo $title_related;?>..</div>
<small class="rp_date"><?PHP echo $date_ind_r;?></small>
</a></li>
</div><?PHP }$j_cat++; }?>
</ul>
</div></div>
<div class="page-detail">
<?PHP include"../lib/page-navigasi-article.php";?>
</div>
<!-- Start:komentar -->
<div class="widget_content"><div class="title_widget">
<span class="icon-widget" id="batal"><i class="icon-comments"></i></span><span class="title-text">Komentar</span></div>
<div class="news_comments"><ul id="comment-list">
<?PHP include "../lib/comment.php";?>

</ul>
</div>

</div>
<?PHP 
include"../lib/form-comment.php";?>
<?PHP include"../lib/slidebox.php";?>
<?PHP }} else {include'../lib/not_found.php';}}?>

</div>

<?PHP include"../lib/sidebar.php";?>
</div></div>

<?PHP include"../lib/footer.php";?>
</section>
<?PHP include"../js.php";?>
<script type="text/javascript">

$(function() {
	$(window).scroll(function(){
	var distanceTop = $('.last').offset().top - $(window).height();
		
		if  ($(window).scrollTop() > distanceTop)
			$('.slidebox').animate({'right':'0px'},300);
		else 
			$('.slidebox').stop(true).animate({'right':'-430px'},100);	
	});

	$('.slidebox .close').bind('click',function(){
		$(this).parent().remove();
	});
});

</script>
</body>
</html>
