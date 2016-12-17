<?PHP session_start();
$config_='aW5jbHVkZSAoJy4uLy4uLy4uL2NvbmZpZy5waHAnKTsNCmluY2x1ZGUgKCcuLi8uLi9wcml2YXQvYWN0aXZhc2ktbG9naW4ucGhwJyk7ICAgDQppbmNsdWRlKCIuLi8uLi9pbi9yZXBsYWNlX2NoYXJhY3Rlci5waHAiKTs=';
eval(base64_decode($config_));?>

<?PHP if (isset($_POST['addpages'])) {// UNTUK MENAMBAH POSTINGAN
// ========SESSION=======================================
$title = addslashes(trim(strip_tags($_POST['title'])));
$_SESSION['title']=$title;
//=========================================================
 $keyword =strip_tags(trim($_POST['keyword']));
 $_SESSION['keyword']=$keyword;
//=========================================================
$content = htmlentities($_POST['content']);
$_SESSION['content']=$content;
//=========================================================
$add_p_='JGVycm9yID0gYXJyYXkoKTsNCmlmIChlbXB0eSgkX1BPU1RbJ3RpdGxlJ10pKSB7IA0KICAgICAgICAkZXJyb3JbXSA9ICcnOy8vYWRkIHRvIGFycmF5ICJlcnJvciINCiAgICB9IGVsc2Ugew0KJHRpdGxlID0gYWRkc2xhc2hlcyh0cmltKHN0cmlwX3RhZ3MoJF9QT1NUWyd0aXRsZSddKSkpOw0KICAgIH0NCg0KaWYgKGVtcHR5KCRfUE9TVFsna2V5d29yZCddKSkgeyANCiAgICAgICAgJGVycm9yW10gPSAnJzsvL2FkZCB0byBhcnJheSAiZXJyb3IiDQogICAgfSBlbHNlIHsgJGtleXdvcmQgPXN0cmlwX3RhZ3ModHJpbSgkX1BPU1RbJ2tleXdvcmQnXSkpOyANCgl9DQoNCg0KaWYgKGVtcHR5KCRfUE9TVFsnY29udGVudCddKSkgeyANCiAgICAgICAgJGVycm9yW10gPSAnJzsvL2FkZCB0byBhcnJheSAiZXJyb3IiDQogICAgfSBlbHNlIHsgJGNvbnRlbnQgPW15c3FsX3JlYWxfZXNjYXBlX3N0cmluZygkX1BPU1RbJ2NvbnRlbnQnXSk7IH0NCg0KaWYgKGVtcHR5KCRfUE9TVFsndGltZSddKSkgew0KICAgICAgICAkZXJyb3JbXSA9ICcnOy8vYWRkIHRvIGFycmF5ICJlcnJvciINCiAgICB9IGVsc2Ugew0KJHRpbWUgPSBzdHJpcF90YWdzKCRfUE9TVFsndGltZSddKTsgfQ0KDQppZiAoZW1wdHkoJF9QT1NUWydkYXRlJ10pKSB7Ly9pZiBubyBuYW1lIGhhcyBiZWVuIHN1cHBsaWVkIA0KICAgICAgICAkZXJyb3JbXSA9ICcnOy8vYWRkIHRvIGFycmF5ICJlcnJvciINCiAgICB9IGVsc2UgeyAkZGF0ZSA9IHN0cmlwX3RhZ3MoJF9QT1NUWydkYXRlJ10pOyB9DQoNCiRsaW5rX3BhZ2VzID0gc3RydG9sb3dlcigkdGl0bGUpOw0KJGxpbmtfcGFnZXMgPSBzdHJfcmVwbGFjZSgnICcsICctJywgJGxpbmtfcGFnZXMpOw0KJGxpbmtfcGFnZXMgPSByZXBsYWNlX2NoYXJhY3RlcigkbGlua19wYWdlcyk7DQokbGlua19wYWdlcyA9IHN0cl9yZXBsYWNlKCItLS0tLSIsICItIiwgJGxpbmtfcGFnZXMpOw0KJGxpbmtfcGFnZXMgPSBzdHJfcmVwbGFjZSgiLS0tIiwgIi0iLCAkbGlua19wYWdlcyk7DQokbGlua19wYWdlcyA9IHN0cl9yZXBsYWNlKCItLSIsICItIiwgJGxpbmtfcGFnZXMpOw0KDQppZiAoZW1wdHkoJGVycm9yKSkgeyANCiRzcWw9bXlzcWxfcXVlcnkoImluc2VydCBpbnRvIHBhZ2VzIHZhbHVlcygnJywnJHRpdGxlJywgJyRsaW5rX3BhZ2VzJywgJyRrZXl3b3JkJywgJyRjb250ZW50JywgJyRkYXRlJywgJyR0aW1lJykiKTsNCmlmKCEkc3FsKSAgeyANCmhlYWRlcigibG9jYXRpb246Ii5NWV9BRE1JTi4ibmV3L3BhZ2VzLz9lcnJvcj0xIik7Ly8gZXJvcg0KfSBlbHNlICAgew0KaGVhZGVyKCJsb2NhdGlvbjoiLk1ZX0FETUlOLiJwb3N0L3BhZ2VzLz9yZWZmPTEiKTsvLyBzdWtzZXMNCn0gfQ0KDQoNCmVsc2V7IA0KZm9yZWFjaCAoJGVycm9yIGFzICRrZXkgPT4gJHZhbHVlcykgeyAgICAgICAgICAgIA0KaGVhZGVyKCJsb2NhdGlvbjoiLk1ZX0FETUlOLiJuZXcvcGFnZXMvP2Vycm9yPTIiKTsvLyBlcm9yIGFsbA0KfX0=';
eval(base64_decode($add_p_));
}
 ?>

<?PHP $act=mysql_real_escape_string($_GET['act']);if ($act=='update'){
$reff_link_pages = strip_tags($_REQUEST['reff_link_pages']);
$refid= htmlentities($_GET['refid']); 
$error = array();
if (empty($_POST['title'])) {//if no name has been supplied 
        $error[] = '';//add to array "error"
    } else {
$title = addslashes(trim(strip_tags($_POST['title'])));
    }

if (empty($_POST['keyword'])) {
        $error[] = '';//add to array "error"
    } else { $keyword =strip_tags(trim($_POST['keyword'])); 
	}


if (empty($_POST['content'])) {
        $error[] = '';//add to array "error"
    } else {
$content =mysql_real_escape_string($_POST['content']); }

if (empty($_POST['time'])) {
        $error[] = '';//add to array "error"
    } else {
$time = strip_tags($_POST['time']); }

if (empty($_POST['date'])) { 
        $error[] = 'date Berita tidak boleh kosong';//add to array "error"
    } else {
$date = strip_tags($_POST['date']); }

$link_pages = strtolower($title);
$link_pages = str_replace(' ', '-', $link_pages);
$link_pages = replace_character($link_pages);
$link_pages = str_replace("-----", "-", $link_pages);
$link_pages = str_replace("---", "-", $link_pages);
$link_pages = str_replace("--", "-", $link_pages);
if (empty($error)) { 
$edit=mysql_query("UPDATE pages SET title='$title',link_pages='$link_pages',keyword='$keyword',content='$content',date='$date',time='$time' WHERE id_pages='$refid'");
if(!$edit) { 
header("location:".MY_ADMIN."edit/pages/".$reff_link_pages."&error=3");// Error
} else   {
header("location:".MY_ADMIN."post/pages/?reff=2");// Sukses
} } 

else{ 
foreach ($error as $key => $values) {            
header("location:".MY_ADMIN."edit/pages/".$reff_link_pages."&error=2");// Error all
}}
}
?>


<?PHP $action= htmlentities($_GET['action']);//UNTUK MENHAPUS POSTINGAN
$refid = htmlentities($_REQUEST['refid']); 
if ($action=='delete'){ if (empty($refid)){
header("location:".MY_ADMIN."post/pages/?reff=4");// failed
exit();}
$sql = mysql_query("delete from pages where id_pages='$refid'");
if(!$sql){ 
header("location:".MY_ADMIN."post/pages/?reff=5"); //eoro
}
header("location:".MY_ADMIN."post/pages/?reff=3"); //sukses
 }?>


<!doctype html><html lang="en"><head><title>Proses pages</title><meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no"></head><body>
<h2>Sorry script is not running..</h2>
<h3 style="text-align:left;font-family:Arial, Helvetica, sans-serif;font-size:25px; cursor:pointer" onClick="window.history.back()">Go Back</h3></body></html>