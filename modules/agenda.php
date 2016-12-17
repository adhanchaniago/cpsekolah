<?php 
include ('../config.php');
 include('../lib/ini.lib.php');
$config = get_parse_ini('../lib/config.ini.php');
include "../lib/ini.php";?>

<!DOCTYPE html><html lang="id"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Agenda | <?PHP echo $title_web;?></title>
<meta name="description" content="<?PHP echo $keyword;?>" />
<meta name="keywords" content="<?PHP echo $keyword;?>" />
<meta name="author" content="<?PHP echo $admin_web;?>" />

<meta property="og:title" content="<?PHP echo $title_agenda;?> | <?PHP echo $title_web;?>">
<meta property="og:type" content="article">
<meta property="og:url" content="http://<?php echo $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];?>">
<meta property="og:image" content="">
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
<?php $limit =$show_agenda;  if(isset($_GET['page'])){ $page = mysql_real_escape_string($_GET['page']); } else{ $page = 1;} $offset = ($page - 1) * $limit;
$agenda=mysql_query("select * from agenda order by agenda.id_agenda desc LIMIT $offset, $limit");
$cek_agenda = mysql_num_rows($agenda); 
if($cek_agenda!=0){
while($post=mysql_fetch_array($agenda)){
$a_title_agenda = trim(stripslashes(strip_tags(substr($post['title'],0,50))));
$a_link_agenda ="".MY_PATH."agenda/view/". strip_tags(htmlentities($post['link_agenda'])).".html";
// set tanggal indonesia
$a_date = strip_tags($post['date']);
$a_tanggal = date('D, d M Y', strtotime($a_date));
$date_indo = dateindo($a_tanggal);
//////////////////////////////////////////////////
$a_location = strip_tags($post['location']);
$a_content = trim(stripslashes(strip_tags(substr($post['content'],0,100))));?>
<div class="col-sm-6 col-md-6 col-lg-6">
<div class="agenda">
<article class="post_container">
<figure class="agenda-image">
<img src="../img/liner_agenda.jpg" alt="<?PHP echo $a_title_agenda;?>"/>
</figure>
<div class="agenda-content"><a href="<?PHP echo $a_link_agenda;?>"><h4><?PHP echo $a_title_agenda;?></h4></a>
<div class="blog-meta"><ul>
<li class="post-tags"><i class="icon-user"></i> <a href="#"><?PHP echo $admin_web;?></a></li>
<li class="post-tags"><i class="icon-time"></i> <?PHP echo $date_indo;?></a></li>
<li class="post-tags"><i class="icon-map-marker"></i> <?PHP echo $a_location;?></a></li>
</ul></div>
<p><?PHP echo $a_content;?>...</p>
</div>
</article>
</div>
</div>
<?PHP }}?>
<div class="paginate">
<ul class="pagination pagination-lg">
<?php $sql2  =mysql_query("SELECT COUNT(*) AS jumData FROM article");
$data  = mysql_fetch_array($sql2);
$url_page = "".MY_PATH."agenda/page/";
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

<?PHP include"../lib/sidebar.php";?>
</div></div>

<?PHP include"../lib/footer.php";?>
</section>
<?PHP include"../js.php";?>

</body>
</html>
