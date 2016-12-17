<?PHP session_start();
$config_='aW5jbHVkZSAoJy4uLy4uLy4uL2NvbmZpZy5waHAnKTsNCmluY2x1ZGUgKCcuLi8uLi9wcml2YXQvYWN0aXZhc2ktbG9naW4ucGhwJyk7IA==';
eval(base64_decode($config_));?>

<?PHP if (isset($_POST['add_polling'])) {
	$error = array();
if (empty($_POST['soal'])) {
        $error[] = '';//add to array "error"
    } else {
$soal = trim(strip_tags($_POST['soal']));
    }

  if (empty($_POST['status'])){
  	$error[] = '';
  }else {
  	$status = trim(strip_tags($_POST['status']));
  }

if (empty($error)) { 

$sql=mysql_query("insert into polling values('','$soal', '$status')") or die (mysql_error());
if(!$sql)  { 
header("location:".MY_ADMIN."polling//?reff=1");// eror
} else   {
header("location:".MY_ADMIN."polling/?reff=2");// sukses
 }

}
else{ 
foreach ($error as $key => $values) {            
header("location:".MY_ADMIN."polling/?reff=3");// eror all

}}
unset($_POST['add_polling']);
}?>



<?PHP if (isset($_POST['add_polling_vote'])) {
	$error = array();
if (empty($_POST['id_soal'])) {
        $error[] = '';//add to array "error"
    } else {
$id_soal = trim(strip_tags($_POST['id_soal']));
    }

  if (empty($_POST['jawaban'])){
  	$error[] = '';
  }else {
  	$jawaban = trim(strip_tags($_POST['jawaban']));
  }

if (empty($error)) { 

$sql_vote=mysql_query("insert into polling_vote values('','$id_soal', '$jawaban', '0')") or die (mysql_error());
if(!$sql_vote)  { 
header("location:".MY_ADMIN."polling//?ref=1#vote");// eror
} else   {
header("location:".MY_ADMIN."polling/?ref=2#vote");// sukses
 }

}
else{ 
foreach ($error as $key => $values) {            
header("location:".MY_ADMIN."polling/?ref=3#vote");// eror all

}}
unset($_POST['add_polling']);
}?>

<?PHP 

//update polling
if (!empty($_GET['action'])){
$action=mysql_real_escape_string($_GET['action']);
if ($action=='update'){
$refid=htmlentities($_GET['refid']); 

	$error = array();
if (empty($_POST['soal'])) {
        $error[] = '';//add to array "error"
    } else {
$soal = trim(strip_tags($_POST['soal']));
    }

  if (empty($_POST['status'])){
  	$error[] = '';
  }else {
  	$status = trim(strip_tags($_POST['status']));
  }

if (empty($error)) { 
$edit=mysql_query("UPDATE polling SET soal='$soal',status='$status' WHERE id_soal='$refid'");
if(!$edit) { 
header("location:".MY_ADMIN."polling/?refid=".$refid."&reff=4");// Error
} else   {
header("location:".MY_ADMIN."polling/?reff=5");// Sukses
} } 

else{ 
foreach ($error as $key => $values) {            
header("location:".MY_ADMIN."polling/?refid=".$refid."&reff=3");// Error all
}
}}
}


//update pollinr vote
if (!empty($_GET['action'])){
$action=mysql_real_escape_string($_GET['action']);
if ($action=='update2'){
$q_id=htmlentities($_GET['q_id']); 

	$error = array();
if (empty($_POST['id_soal'])) {
        $error[] = '';//add to array "error"
    } else {
$id_soal = trim(strip_tags($_POST['id_soal']));
    }

  if (empty($_POST['jawaban'])){
  	$error[] = '';
  }else {
  	$jawaban = trim(strip_tags($_POST['jawaban']));
  }

if (empty($error)) { 
$edit=mysql_query("UPDATE polling_vote SET id_soal='$id_soal',jawaban='$jawaban' WHERE id_jwb='$q_id'");
if(!$edit) { 
header("location:".MY_ADMIN."polling/?q_id=".$refid."&ref=4#vote");// Error
} else   {
header("location:".MY_ADMIN."polling/?ref=5#vote");// Sukses
} } 

else{ 
foreach ($error as $key => $values) {            
header("location:".MY_ADMIN."polling/?q_id=".$refid."&ref=3#vote");// Error all
}
}}
}


// delete polling
if (!empty($_GET['action'])){
$action=mysql_real_escape_string($_GET['action']);
$refid= htmlentities($_REQUEST['refid']);
 if ($action=='delete'){

$sqldelkat = mysql_query("delete from polling where id_soal='$refid'");
if(!$sql){ 
header("location:".MY_ADMIN."polling/?reff=6"); // error
}
header("location:".MY_ADMIN."polling/?reff=7"); //sukses
}}


// delete polling
if (!empty($_GET['action'])){
$action=mysql_real_escape_string($_GET['action']);
$q_id= htmlentities($_REQUEST['q_id']);
 if ($action=='delete2'){

$sqldelkat = mysql_query("delete from polling_vote where id_jwb='$q_id'");
if(!$sql){ 
header("location:".MY_ADMIN."polling/?ref=6#vote"); // error
}
header("location:".MY_ADMIN."polling/?ref=7#vote"); //sukses
}}?>


<!doctype html><html lang="en"><head><title>Proses</title><meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no"></head><body>
<h2>Sorry script is not running..</h2>
<h3 style="text-align:left;font-family:Arial, Helvetica, sans-serif;font-size:25px; cursor:pointer" onClick="window.history.back()">Go Back</h3></body></html>