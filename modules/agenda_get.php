<?php 
include ('../config.php');
 include('../lib/ini.lib.php');
$config = get_parse_ini('../lib/config.ini.php');
include "../lib/ini.php";
$link_agenda= mysql_real_escape_string(htmlentities($_GET['link_agenda']));
$sql_get=mysql_query("select * from agenda where link_agenda='$link_agenda'");
$cari=mysql_fetch_array($sql_get);
$title_agenda =trim(strip_tags($cari['title']));
$keyword = trim(strip_tags($cari['keyword']));?>

<!DOCTYPE html><html lang="id"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?PHP if ($title_agenda == ''){echo"Agenda Tidak Ditemukan | ".$title_web."";}else{ echo"".$title_agenda." | ".$title_web."";}?></title>
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
<?PHP  if($link_agenda!= ''){
$agenda=mysql_query("select * from agenda where link_agenda='$link_agenda'");
$cekdata=mysql_num_rows($agenda); 
if($cekdata!=0){
	while($post_agenda=mysql_fetch_array($agenda)){
$a_title_agenda = htmlentities(strip_tags($post_agenda['title']));
// set tanggal indonesia
$date_agenda = strip_tags($post_agenda['date']);
$tanggal_agenda = date('D, d M Y', strtotime($date_agenda));
$date_indo = dateindo($tanggal_agenda);
$time_agenda = strip_tags($post_agenda['time']);
$location = strip_tags($post_agenda ['location']);
$content_agenda = $post_agenda ['content'];?>
<article class="post_container">
<a href="#"><h3><?PHP echo $a_title_agenda;?></h3></a>
 <div class="blog-meta"><ul>
<li class="post-tags"><i class="icon-user"></i><a href="#"><?PHP echo $admin_web;?></a></li>
<li class="post-tags"><i class="icon-time"></i><a href="#"><?PHP echo $time_agenda;?></a></li>
<li class="post-tags"><i class="icon-calendar"></i><a href="#"><?PHP echo $date_indo;?></a></li>
</ul></div>
<div class="post_agenda">
<table width="100%" class="table table-striped">
<tr>
<td width="15%"><i class="icon-heart"></i> Judul</td>
<td width="2%">:</td>
<td width="83%"><?PHP echo $a_title_agenda;?></td>
</tr>
<tr>
<td><i class="icon-map-marker"></i> Tempat</td>
<td>:</td>
<td><?PHP echo $location;?></td>
</tr>
<tr>
<td><i class="icon-calendar"></i> Tanggal</td>
<td>:</td>
<td><?PHP echo $date_indo;?></td>
</tr>
<tr>
<td><i class="icon-time"></i> Jam</td>
<td>:</td>
<td><?PHP echo $time_agenda;?></td>
</tr>
<tr>
  <td colspan="3"><?PHP echo $content_agenda;?></td>
  </tr>
</table>  

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
