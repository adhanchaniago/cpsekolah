<?PHP session_start();
$config_='aW5jbHVkZSAoJy4uLy4uLy4uL2NvbmZpZy5waHAnKTsNCmluY2x1ZGUgKCcuLi8uLi9wcml2YXQvYWN0aXZhc2ktbG9naW4ucGhwJyk7ICAgDQppbmNsdWRlKCIuLi8uLi9pbi9yZXBsYWNlX2NoYXJhY3Rlci5waHAiKTs=';
eval(base64_decode($config_));?>


<!-- PERINTAH TAMBAH KATEGORY PAGE -->
<?PHP if (isset($_POST['add_download'])) {
	$error = array();
if (empty($_POST['title'])) {
        $error[] = '';//add to array "error"
    } else {
$title = addslashes(trim(strip_tags($_POST['title'])));
    }


$chars="0123456789"; $panjang='20'; $len=strlen($chars); 
$start=$len-$panjang; $xx=rand('0',$start); 
$yy=str_shuffle($chars); 
$code=substr($yy, $xx, $panjang);

$file_download= $_FILES["file_download"]["name"];
$lokasi_file = $_FILES['file_download']['tmp_name'];  
$resize = $_FILES['file_download']['size'];
$info = pathinfo($file_download);

$file_download = strtolower(preg_replace("/\s+/", "".$code."", $file_download));
$MAX_FILE_SIZE = 1000000; //10mb

if($info['extension'] == 'pdf' || $info['extension'] == 'rar' || $info['extension'] == 'docx' || $info['extension'] == 'xlsx'){ 
header("location:".MY_ADMIN."file-download/?reff=1");// error file

} else{
 exit('<!doctype html><html lang="en"><head><title>Proses</title><meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no"></head><body>
<div style="width:400px; background:#eee; padding:10px">Sorry Upload File Failed, Ekstensi File Pdf, Word (docx), Excel (xlsx), Rar</div>
<h3 style="text-align:left;font-family:Arial, Helvetica, sans-serif;font-size:25px; cursor:pointer" onClick="window.history.back()">Go Back</h3></body></html>');
//header("location:".MY_ADMIN."file-download/?reff=1");// error file
    }
	
//cek apakah ukuran file diatas 10mb
if($resize > $MAX_FILE_SIZE) {
header("location:".MY_ADMIN."file-download/?reff=2");// error size
}

$stat='0';
$datetime = date('d-m-Y');
if (empty($error)) { 
move_uploaded_file($lokasi_file, "../../../content/download/".$file_download);

$sql=mysql_query("insert into download values('','$code', '$title', '$file_download', '$resize', '$datetime', '$stat')") or die (mysql_error());
if(!$sql)  { 
header("location:".MY_ADMIN."file-download/?reff=3");// eror
} else   {
header("location:".MY_ADMIN."file-download/?reff=4");// sukses
 }

}
else{ 
foreach ($error as $key => $values) {            
header("location:".MY_ADMIN."file-download/?reff=5");// eror all

}}

$add='';
eval(base64_decode($add));
}

//update
$action=mysql_real_escape_string($_GET['action']);
if ($action=='update'){
$refid=htmlentities($_GET['refid']); 
$error = array();
if (empty($_POST['title'])) {
        $error[] = '';//add to array "error"
    } else {
$title = addslashes(trim(strip_tags($_POST['title'])));
    }


$chars="0123456789"; $panjang='20'; $len=strlen($chars); 
$start=$len-$panjang; $xx=rand('0',$start); 
$yy=str_shuffle($chars); 
$code=substr($yy, $xx, $panjang);

$file_download= $_FILES["file_download"]["name"];
$lokasi_file = $_FILES['file_download']['tmp_name'];  
$resize = $_FILES['file_download']['size'];
$info = pathinfo($file_download);

$file_download = strtolower(preg_replace("/\s+/", "".$code."", $file_download));
$MAX_FILE_SIZE = 1000000; //10mb


$datetime = date('d-m-Y');
if($file_download == ""){
if (empty($error)) { 
$edit=mysql_query("UPDATE download SET title='$title',datetime='$datetime' WHERE code='$refid'");
if(!$edit) { 
header("location:".MY_ADMIN."file-download/?refid=".$refid."&reff=6");// Error
} else   {
header("location:".MY_ADMIN."file-download/?reff=7");// Sukses
} } 

else{ 
foreach ($error as $key => $values) {            
header("location:".MY_ADMIN."file-download/?refid=".$refid."&reff=5");// Error all

}}
}

else{
$cari= mysql_query("select * from download where code='$refid'");
$data=mysql_fetch_array($cari);
$file_hapus = strip_tags($data['file_download']);
$tmpfile = "".$lokasi_file."../../../content/download/".$file_hapus;
unlink ($tmpfile);

if($info['extension'] == 'pdf' || $info['extension'] == 'rar' || $info['extension'] == 'docx' || $info['extension'] == 'xlsx'){ 
header("location:".MY_ADMIN."file-download/?reff=1");// error file

} else{
 exit('<!doctype html><html lang="en"><head><title>Proses</title><meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no"></head><body>
<div style="width:400px; background:#eee; padding:10px">Sorry Upload File Failed, Ekstensi File Pdf, Word (docx), Excel (xlsx), Rar</div>
<h3 style="text-align:left;font-family:Arial, Helvetica, sans-serif;font-size:25px; cursor:pointer" onClick="window.history.back()">Go Back</h3></body></html>');
//header("location:".MY_ADMIN."file-download/?reff=1");// error file
    }
//cek apakah ukuran file diatas 10mb
if($resize > $MAX_FILE_SIZE) {
header("location:".MY_ADMIN."file-download/?refid=".refid."&reff=2");// error size
}

move_uploaded_file($lokasi_file, "../../../content/download/".$file_download);
$edit2=mysql_query("UPDATE download SET title='$title',file_download='$file_download',resize='$$resize',datetime='$datetime' WHERE code='$refid'");
if(!$edit2) { 
header("location:".MY_ADMIN."file-download/?refid=".$refid."&reff=6");// Error
} else   {
header("location:".MY_ADMIN."file-download/?reff=7");// Sukses
} } 
}


$up='';
eval (base64_decode($up));

// delete


$acttion= mysql_real_escape_string($_GET['action']);
$refid = htmlentities($_GET['refid']); 
if ($action=='delete'){

	$refid = htmlentities($_GET['refid']);
$cari=mysql_query("select * from download where code='$refid'");
$dt=mysql_fetch_array($cari);
$file_download= strip_tags($dt['file_download']);
$tmpfile = "../../../content/download/".$file_download;
$sql=mysql_query("delete from download where code='$refid'");
	if(!$sql){
header("location:".MY_ADMIN."file-download/?reff=8");// error delet
	}else{
			unlink ($tmpfile);
header("location:".MY_ADMIN."file-download/?reff=9");// sukses
	}

$delete='';
eval (base64_decode($delete));
}
?>

<!doctype html><html lang="en"><head><title>Proses</title><meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no"></head><body>
<h2>Sorry script is not running..</h2>
<h3 style="text-align:left;font-family:Arial, Helvetica, sans-serif;font-size:25px; cursor:pointer" onClick="window.history.back()">Go Back</h3></body></html>