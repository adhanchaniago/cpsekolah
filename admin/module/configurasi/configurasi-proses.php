<?PHP session_start();include ('../../../config.php');include ('../../privat/activasi-login.php'); 
 date_default_timezone_set("Asia/Jakarta");?>

<?PHP if (isset($_POST['setting_htaccess'])) {// UNTUK MENAMBAH POSTINGAN
$htaccess = $_POST['htaccess'];
$file_path ="../../../.HTACCESS";
$file_handle = fopen($file_path, 'w');
fwrite($file_handle, $htaccess);
fclose($file_handle);
header("location:".MY_ADMIN."configurasi/?reff=1");// success
unset($_POST['setting_htaccess']);
}?>


<?PHP if (isset($_POST['setting_robots'])) {// UNTUK MENAMBAH POSTINGAN
$robots = $_POST['robots'];
$file_path ="../../../robots.txt";
$file_handle = fopen($file_path, 'w');
fwrite($file_handle, $robots);
fclose($file_handle);
header("location:".MY_ADMIN."configurasi/?reff=2");// success
unset($_POST['setting_robots']);
}?>


<?PHP if (isset($_POST['setting_meta'])) {// UNTUK MENAMBAH POSTINGAN
$meta = $_POST['meta'];
$file_path ="../../../lib/meta_tag.php";
$file_handle = fopen($file_path, 'w');
fwrite($file_handle, $meta);
fclose($file_handle);
header("location:".MY_ADMIN."configurasi/?reff=3");// success
unset($_POST['setting_meta']);
}?>

<!doctype html><html lang="en"><head><title>Configurasi</title><meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no"></head><body>
<h2>Sorry script is not running..</h2>
<h3 style="text-align:left;font-family:Arial, Helvetica, sans-serif;font-size:25px; cursor:pointer" onClick="window.history.back()">Go Back</h3></body></html>