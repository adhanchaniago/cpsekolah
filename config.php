<?php //if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>

<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
date_default_timezone_set("Asia/Jakarta");
define('MY_PATH', 'http://demo-sekolah.esy.es/');
define('MY_ADMIN', 'http://demo-sekolah.esy.es/admin/');
$domain = "http://demo-sekolah.esy.es";
$url_share = $domain.$_SERVER['REQUEST_URI'];
$host="mysql.idhostinger.com";
$user="u780549934_schol";
$pass="widodo1991";
$db="u780549934_schol";
	
$koneksi=mysql_connect($host,$user,$pass); mysql_select_db($db,$koneksi);

if($koneksi){
	//echo "Berhasil koneksi";
}else{//header("location:".MY_PATH."maintenance.php");
echo'nampaknya koneksi database gagal';
}

$sql_admin=mysql_query("select * from admin_web order by admin_web.id_admin limit 1"); 
$dataadmin=mysql_fetch_array($sql_admin);
$admin_web = strip_tags($dataadmin['nama']);

$sql_setweb=mysql_query("select * from setting_web");
$datasetweb=mysql_fetch_array($sql_setweb);
$title_web = strip_tags($datasetweb['title']);
$deskripsi_web = strip_tags($datasetweb['deskripsi']);
$keyword_web = strip_tags($datasetweb['keyword']);
$logo_web = strip_tags($datasetweb['logo']);
$icon_web = strip_tags($datasetweb['favicon']);?>

