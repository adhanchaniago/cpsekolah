<?php 
include ('../config.php');
 include('../lib/ini.lib.php');
$config = get_parse_ini('../lib/config.ini.php');
include "../lib/ini.php";?>

<!DOCTYPE html><html lang="id"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Anggota | <?PHP echo $title_web;?></title>
<meta name="description" content="<?PHP echo $keyword_web;?>" />
<meta name="keywords" content="<?PHP echo $keyword_web;?>" />
<meta name="author" content="<?PHP echo $admin_web;?>" />

<meta property="og:title" content="Anggota | <?PHP echo $title_web;?>">
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
<?PHP $query= mysql_query("select * from guru order by guru.id_guru desc") or die(mysql_error());
$cek_data = mysql_num_rows($query);
if ($cek_data !=0){
	while ($data_guru = mysql_fetch_array($query)) {
		$nama_guru =  strip_tags($data_guru['nama']);
		$link_guru ="".MY_PATH."anggota/view/".strip_tags($data_guru['link_guru']).".html";
$gambar_guru = strip_tags($data_guru['gambar']);
		# code...
?>
<li class="list_item col-lg-3 col-md-3 col-sm-3">
<div class="anggota">

<div class="content-img">
<?PHP if($gambar_guru==''){?>
<img src="<?PHP echo MY_PATH?>img/not-images.png" alt="<?PHP echo $nama_guru?>"/>
<?PHP } else {?>
<img src="<?PHP echo MY_PATH;?>images/guru/<?PHP echo $gambar_guru;?>"><?PHP }?>
<div class="images-hover">
</div>
<a class="detail" href="<?PHP echo $link_guru;?>"><i class="icon-zoom-in"></i> Detail</a>
</div>

<div class="descripsi">
<h3><?PHP echo $nama_guru;?></h3>
</div>
</div></li>
<?PHP }}?>
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
