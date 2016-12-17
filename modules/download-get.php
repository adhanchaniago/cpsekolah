<?php session_start(); 
include ('../config.php');
 include('../lib/ini.lib.php');
$config = get_parse_ini('../lib/config.ini.php');
include "../lib/ini.php";
$link_download= mysql_real_escape_string(htmlentities($_GET['link_download']));
$sql_get=mysql_query("select * from download where code='$link_download'");
$cari=mysql_fetch_array($sql_get);
$title =trim(strip_tags($cari['title']));
$file_download = trim(strip_tags($cari['file_download']));
$baca = $cari['stat']+1;
$updatepembaca=mysql_query("UPDATE download SET stat='$baca' WHERE code='$link_download'");
header("location:".MY_PATH."content/download/".$file_download."");?>
<!DOCTYPE html><html lang="id"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?PHP echo $title;?> | <?PHP echo $title_web;?></title>
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


</head><body>


</body>
</html>
