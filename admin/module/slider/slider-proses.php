<?PHP session_start();
$config_='aW5jbHVkZSAoJy4uLy4uLy4uL2NvbmZpZy5waHAnKTsNCmluY2x1ZGUgKCcuLi8uLi9wcml2YXQvYWN0aXZhc2ktbG9naW4ucGhwJyk7ICAgDQppbmNsdWRlKCIuLi8uLi9pbi9yZXBsYWNlX2NoYXJhY3Rlci5waHAiKTs=';
eval(base64_decode($config_));?>


<!-- PERINTAH TAMBAH KATEGORY PAGE -->
<?PHP if (isset($_POST['add_slider'])) {// UNTUK MENAMBAH POSTINGAN
$error = array();
if (empty($_POST['title_slider'])) {
        $error[] = '';
    } else {
$title_slider = mysql_real_escape_string(addslashes(trim(strip_tags($_POST['title_slider']))));
    }

if (empty($_POST['description'])) {
        $error[] = '';
    } else {
$description= mysql_real_escape_string(addslashes(trim(strip_tags($_POST['description']))));
    }



$chars="0123456789"; $panjang='20'; $len=strlen($chars); $start=$len-$panjang; $xx=rand('0',$start); $yy=str_shuffle($chars); $ID=substr($yy, $xx, $panjang);

$gambar_slider= $_FILES["gambar_slider"]["name"];
$lokasi_file = $_FILES['gambar_slider']['tmp_name'];  
$ukuran_file = $_FILES['gambar_slider']['size'];

$gambar_slider = strtolower(preg_replace("/\s+/", "".$ID."", $gambar_slider));
$MAX_FILE_SIZE = 150000; //150kb
$typeGambar = array('image/bmp', 'image/gif', 'image/jpg', 'image/jpeg', 'image/png');
if(!in_array($_FILES['gambar_slider']['type'],$typeGambar)){  
header("location:".MY_ADMIN."setting/slider/?reff=images00");// FGAMBAR ERROR
}

if($ukuran_file > $MAX_FILE_SIZE) {
header("location:".MY_ADMIN."setting/slider/?reff=images01");// GAMBAR ERROR
exit();}

$date = date('d-m-Y');
if (empty($error)) { 
move_uploaded_file($lokasi_file, "../../../images/slider/".$gambar_slider);

$sql=mysql_query("insert into slider values('','$title', '$gambar_slider', '$discription', '$date')") or die (mysql_error());
if(!$sql)  { 
header("location:".MY_ADMIN."setting/slider/?reff=1");// eror
} else   {
header("location:".MY_ADMIN."setting/slider/?reff=2");// sukses
 }

}
else{ 
foreach ($error as $key => $values) {            
header("location:".MY_ADMIN."setting/slider/?reff=3");// eror all

}}
}
 ?>


<?PHP $act= mysql_real_escape_string($_GET['act']);
if ($act=='update'){
$refid= mysql_real_escape_string(htmlentities($_GET['refid'])); 
$error = array();
if (empty($_POST['title_slider'])) {
        $error[] = '';
    } else {
$title_slider = mysql_real_escape_string(addslashes(trim(strip_tags($_POST['title_slider']))));
    }

if (empty($_POST['description'])) {
        $error[] = '';
    } else {
$description= mysql_real_escape_string(addslashes(trim(strip_tags($_POST['description']))));
    }



$chars="0123456789"; $panjang='20'; $len=strlen($chars); $start=$len-$panjang; $xx=rand('0',$start); $yy=str_shuffle($chars); $ID=substr($yy, $xx, $panjang);

$gambar_slider= $_FILES["gambar_slider"]["name"];
$lokasi_file = $_FILES['gambar_slider']['tmp_name'];  
$ukuran_file = $_FILES['gambar_slider']['size'];

$gambar_slider = strtolower(preg_replace("/\s+/", "".$ID."", $gambar_slider));
$MAX_FILE_SIZE = 150000; //150kb
$typeGambar = array('image/bmp', 'image/gif', 'image/jpg', 'image/jpeg', 'image/png');
if(!in_array($_FILES['gambar_slider']['type'],$typeGambar)){  
header("location:".MY_ADMIN."setting/slider/?reff=images00");// FGAMBAR ERROR
}

 
if($ukuran_file > $MAX_FILE_SIZE) {
header("location:".MY_ADMIN."setting/slider/?reff=images01");// GAMBAR ERROR
exit();}

$date = date('d-m-Y');
	
if($gambar_slider == ""){
if (empty($error)) { 
$edit=mysql_query("UPDATE slider SET title_slider='$title_slider',description='$description',date='$date' WHERE id_slider='$refid'") or die ('script error<br><a href="#" onClick="window.history.back(-1)">Go Back</a>');
if(!$edit) { 
header("location:".MY_ADMIN."setting/slider/?refid=".$refid."&reff=4");// Error
} else   {
header("location:".MY_ADMIN."setting/slider/?reff=5");// Sukses
} } 

else{ 
foreach ($error as $key => $values) {            
header("location:".MY_ADMIN."setting/slider/?refid=".$refid."&reff=3");// Error all

}}
}

else{
$cari= mysql_query("select * from slider where id_slider='$refid'");
$data=mysql_fetch_array($cari);
$gambar = $data['gambar_slider'];
$tmpfile = "".$lokasi_file."../../../images/slider/".$gambar;
unlink ($tmpfile);

move_uploaded_file($lokasi_file, "../../../images/slider/".$gambar_slider);
$edit2=mysql_query("UPDATE slider SET title_slider='$title_slider',gambar_slider='$gambar_slider',description='$description',date='$date' WHERE id_slider='$refid'")or die ('script error<br><a href="#" onClick="window.history.back(-1)">Go Back</a>');
if(!$edit2) { 
header("location:".MY_ADMIN."setting/slider/".$refid."&reff=4");// Error
} else   {
header("location:".MY_ADMIN."setting/slider/?reff=5");// Sukses
} } 
}		
?>


<!-- PERINTAH MENGHAPUS -->
<?PHP $act=mysql_real_escape_string($_GET['act']);//UNTUK MENHAPUS
$refid = htmlentities($_GET['refid']);
if ($act=='delete'){
$cari=mysql_query("select * from slider where id_slider='$refid'") or die ('script error<br><a href="#" onClick="window.history.back(-1)">Go Back</a>');
$dt=mysql_fetch_array($cari);
$gambar= strip_tags($dt['gambar_slider']);
$tmpfile = "".$lokasi_file."../../../images/slider/".$gambar;

$sql=mysql_query("delete from slider where id_slider='$refid'");
	if(!$sql){
header("location:".MY_ADMIN."setting/slider/?reff=6");// error delet
	}else{
unlink ($tmpfile);
header("location:".MY_ADMIN."setting/slider/?reff=7");// sukses
	}
}
?>

<!doctype html><html lang="en"><head><title>Proses slider</title><meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no"></head><body>
<h2>Sorry script is not running..</h2>
<h3 style="text-align:left;font-family:Arial, Helvetica, sans-serif;font-size:25px; cursor:pointer" onClick="window.history.back(-1)">Go Back</h3></body></html>