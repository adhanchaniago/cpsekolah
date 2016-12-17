<?php session_start(); 
include ('../config.php');
 include('../lib/ini.lib.php');
$config = get_parse_ini('../lib/config.ini.php');
include "../lib/ini.php";?>

<!DOCTYPE html><html lang="id"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>File Download | <?PHP echo $title_web;?></title>
<meta name="description" content="<?PHP echo $keyword_web;?>" />
<meta name="keywords" content="<?PHP echo $keyword_web;?>" />
<meta name="author" content="<?PHP echo $admin_web_web;?>" />

<meta property="og:title" content="File Download | <?PHP echo $title_web;?>">
<meta property="og:type" content="article">
<meta property="og:url" content="http://<?php echo $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];?>">
<meta property="og:image" content="">
<meta property="og:site_name" content="<?PHP echo $title_web;?>">
<meta property="og:description" content="<?PHP echo $keyword_web;?>">
<?PHP include "../lib/meta_tag.php";?>
<?PHP include "../head.php";?>
<script src="<?PHP echo MY_PATH;?>js/jquery.js"></script>
<script type="text/javascript" src="<?PHP echo MY_PATH;?>js/jquery.validate.js"></script>
<script type="text/javascript" src="<?PHP echo MY_PATH;?>js/messages_id.js"></script>

</head><body>
<!--Start Wrapper-->
<section class="wrapper">
<?PHP include"../lib/header.php";?>
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-8 margin-top-29">
<article class="post_container"><a href="#"><h3>File Download</h3></a>
<div class="download">

<?php $limit =$show_download;  
if(isset($_GET['page'])){ $page = mysql_real_escape_string($_GET['page']); } else{ $page = 1;} $offset = ($page - 1) * $limit;
$sql_download=mysql_query("select * from download order by download.id_download desc LIMIT $offset, $limit");
$cek_download = mysql_num_rows($sql_download); 
if($cek_download!=0){
while($post=mysql_fetch_array($sql_download)){
$title_download=  strip_tags($post['title']);
$link_download ="".MY_PATH."download/files/".strip_tags($post['code'])."";
$resize= "".strip_tags($post['resize'])." kb";
$stat =strip_tags($post['stat']);?>

<li class="col-lg-6 col-md-6 col-sm-6">
<a href="<?PHP echo $link_download;?>" target="_blank">
<div class="download-icon"><i class="icon-file-text-alt"></i></div>
<div class="download-content"><h3><?PHP echo $title_download;?></h3>

<div class="list-download">
<p><i class="icon-bolt"></i> <?PHP echo $resize;?></p> <p><i class="icon-download"></i> <?PHP echo $stat;?> download</p>
</div>
</div>

</a>
</li>

<?PHP }}?>

</div>

<div class="paginate">
<ul class="pagination pagination-xl">
<?php $sql2  =mysql_query("SELECT COUNT(*) AS jumData FROM download");
$data  = mysql_fetch_array($sql2);
$url_page = "".MY_PATH."download/?page=";
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
</article>

</div>

<?PHP include"../lib/sidebar.php";?>
</div></div>

<?PHP include"../lib/footer.php";?>
</section>


<?PHP include"../js.php";?>


</body>
</html>
