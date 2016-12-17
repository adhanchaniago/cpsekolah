<?PHP session_start();include ('../../../config.php');include ('../../privat/activasi-login.php'); 
 date_default_timezone_set("Asia/Jakarta"); 
include("../../in/replace_character.php");
include('../../../lib/ini.lib.php');
$config = get_parse_ini('../../lib/config.ini.php');
$ini_file = "../../../lib/config.ini.php";?>

<?PHP if (isset($_POST['setbasic'])) {// UNTUK MENAMBAH POSTINGAN
$error = array();
if (empty($_POST['title'])) {//if no name has been supplied 
        $error[] = 'tidak boleh kosong';//add to array "error"
    } else {
$title = addslashes(trim(strip_tags($_POST['title'])));
    }

if (empty($_POST['deskripsi'])) {//if no name has been supplied 
        $error[] = 'tidak boleh kosong';//add to array "error"
    } else { $deskripsi =strip_tags(trim($_POST['deskripsi'])); 
	}


if (empty($_POST['keyword'])) {//if no name has been supplied 
        $error[] = 'Konten Berita tidak boleh kosong';//add to array "error"
    } else {
$keyword = strip_tags($_POST['keyword']); }
$gambar = $_FILES["logo"]["name"];
$lokasi_file = $_FILES['logo']['tmp_name'];  
$ukuran_file = $_FILES['logo']['size'];

$gambar2 = $_FILES["favicon"]["name"];
$lokasi_file2 = $_FILES['favicon']['tmp_name'];  
$ukuran_file2 = $_FILES['favicon']['size'];

$gambarsatu=trim(strip_tags($_POST['gambarsatu']));
$gambardua=trim(strip_tags($_POST['gambardua']));

$chars="0123456789"; $panjang='20'; $len=strlen($chars); $start=$len-$panjang; $xx=rand('0',$start); 
$yy=str_shuffle($chars); $base=substr($yy, $xx, $panjang);
$logo = strtolower(preg_replace("/\s+/", "".$base."", $gambarsatu));
$favicon = strtolower(preg_replace("/\s+/", "".$base."", $gambardua));

$MAX_FILE_SIZE = 20000; //50kb
$MAX_FILE_SIZE2 = 50000; //50kb

$typeGambar = array('image/bmp', 'image/gif', 'image/jpg', 'image/jpeg', 'image/png');
if(!in_array($_FILES['logo']['type'] and $_FILES['favicon']['type'],$typeGambar)){  
header("location:".MY_ADMIN."setting/basic?reff=images00");// GAMBAR ERROR
}

//cek apakah ukuran file diatas 50kb 
if($ukuran_file > $MAX_FILE_SIZE) {
header("location:".MY_ADMIN."setting/basic?reff=images00");// GAMBAR ERROR
	exit(); }
	
//cek apakah ukuran file diatas 50kb 
if($ukuran_file2 > $MAX_FILE_SIZE2) {
header("location:".MY_ADMIN."setting/basic?reff=images01");// GAMBAR ERROR
	exit(); }
	
if($favicon == "" and $logo  == ""){	
if (empty($error)) { 
$edit=mysql_query("UPDATE setting_web SET title='$title',deskripsi='$deskripsi',keyword='$keyword' WHERE id='43545'");
if(!$edit) { 
header("location:".MY_ADMIN."setting/basic/reff=1");// Error
} else   {
header("location:".MY_ADMIN."setting/basic/?reff=2");// Sukses
} } 

else{ echo '<div class="alert alert-error">';
foreach ($error as $key => $values) {            
//echo '	<li>'.$values.'</li><button class="close" data-dismiss="alert" type="button"><i class="icon-remove"></i></button>';
header("location:".MY_ADMIN."setting/basic/?reff=3");// Error all

//echo '</div>';
}}
}

else{
$cari= mysql_query("select * from setting_web where id='43545'");
$data=mysql_fetch_array($cari);
$logo = $data['logo'];
$favicon = $data['favicon'];
//unlink ($tmpfile);

move_uploaded_file($lokasi_file, "../../../images/".$logo);
move_uploaded_file($lokasi_file2, "../../../images/".$favicon);
$edit2 = mysql_query("UPDATE setting_web SET title='$title',deskripsi='$deskripsi',keyword='$keyword',logo='$logo',favicon='$favicon' WHERE id='43545'");
if(!$edit2) { 
header("location:".MY_ADMIN."setting/basic/?reff=1");// Error
} else   {
header("location:".MY_ADMIN."setting/basic/?reff=2");// Sukses
} } 
}	

?>


<?PHP  if (isset($_POST['setpostandcomments'])) { //setting post
$datetime = $_POST['datetime'];
$show_blog= trim(strip_tags($_POST['show_blog']));
$related_blog= trim(strip_tags($_POST['related_blog']));
$show_agenda = trim(strip_tags($_POST['show_agenda']));
$show_download = trim(strip_tags($_POST['show_download']));
$comments_blog = strip_tags(trim($_POST['comments_blog']));

if (!empty($datetime)){;
$ini_value = get_parse_ini($ini_file);
$ini_value['config']['datetime'] = $datetime;
put_ini_file("$ini_file", $ini_value, $i = 0);
///////////////////////////////////////////////////
$ini_value['config']['show_blog'] = $show_blog;
put_ini_file("$ini_file", $ini_value, $i = 0);
$ini_value['config']['related_blog'] = $related_blog;
put_ini_file("$ini_file", $ini_value, $i = 0);
/////////////////////////////////////////////////
$ini_value['config']['show_agenda'] = $show_agenda;
put_ini_file("$ini_file", $ini_value, $i = 0);
$ini_value['config']['show_download'] = $show_download;
put_ini_file("$ini_file", $ini_value, $i = 0);
$ini_value['config']['comments_blog'] = $comments_blog;
put_ini_file("$ini_file", $ini_value, $i = 0);
if ($sql){
header("location:".MY_ADMIN."setting/basic/?reff=2");// eeror
}
else{
header("location:".MY_ADMIN."setting/basic/?reff=1");// sukses
}
}
else{
header("location:".MY_ADMIN."setting/basic/?reff=3");// emty
}
}
?>


<?PHP  if (isset($_POST['setcontact'])) {// setting contact
$no_hp1_admin = $_POST['no_hp1_admin'];
$no_hp2_admin = $_POST['no_hp2_admin'];
$pin_admin= $_POST['pin_admin'];
$email_admin = $_POST['email_admin'];
$alamat_admin = $_POST['alamat_admin'];
if (!empty($alamat_admin)){
$ini_value = get_parse_ini($ini_file);
$ini_value['config']['no_hp1_admin'] = $no_hp1_admin;
put_ini_file("$ini_file", $ini_value, $i = 0);

$ini_value['config']['no_hp2_admin'] = $no_hp2_admin;
put_ini_file("$ini_file", $ini_value, $i = 0);
$ini_value['config']['pin_admin'] = $pin_admin;
put_ini_file("$ini_file", $ini_value, $i = 0);
$ini_value['config']['email_admin'] = $email_admin;
put_ini_file("$ini_file", $ini_value, $i = 0);
$ini_value['config']['alamat_admin'] = $alamat_admin;
put_ini_file("$ini_file", $ini_value, $i = 0);
if ($sql){
header("location:".MY_ADMIN."setting/basic/?reff=2");// success
}
else{
header("location:".MY_ADMIN."setting/basic/?reff=1");// error
}
}
else{
header("location:".MY_ADMIN."setting/basic/?reff=3");// emty
}
}
?>


<?PHP  if (isset($_POST['setsosial'])) {// setting sosial
$my_facebook = strip_tags(trim($_POST['my_facebook']));
$my_twitter = strip_tags(trim($_POST['my_twitter']));
$my_google= strip_tags(trim($_POST['my_google']));
$my_pinterest = strip_tags(trim($_POST['my_pinterest']));
$my_linkedin = strip_tags(trim($_POST['my_linkedin']));
$my_rss = strip_tags(trim($_POST['my_rss']));
if (!empty($my_facebook)){
$ini_value = get_parse_ini($ini_file);
$ini_value['config']['my_facebook'] = $my_facebook;
put_ini_file("$ini_file", $ini_value, $i = 0);

$ini_value['config']['my_twitter'] = $my_twitter;
put_ini_file("$ini_file", $ini_value, $i = 0);
$ini_value['config']['my_google'] = $my_google;
put_ini_file("$ini_file", $ini_value, $i = 0);
$ini_value['config']['my_pinterest'] = $my_pinterest;
put_ini_file("$ini_file", $ini_value, $i = 0);
$ini_value['config']['my_linkedin'] = $my_linkedin;
put_ini_file("$ini_file", $ini_value, $i = 0);
$ini_value['config']['my_rss'] = $my_rss;
put_ini_file("$ini_file", $ini_value, $i = 0);
if ($sql){
header("location:".MY_ADMIN."setting/basic/?reff=2");// succes
}
else{
header("location:".MY_ADMIN."setting/basic/?reff=2");// error
}
}
else{
header("location:".MY_ADMIN."setting/basic/?reff=3");// emty
}
}
?>



<!doctype html><html lang="en"><head><title>Proses Basic</title><meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no"></head><body>
<h2>Sorry script is not running..</h2>
<h3 style="text-align:left;font-family:Arial, Helvetica, sans-serif;font-size:25px; cursor:pointer" onClick="window.history.back()">Go Back</h3></body></html>