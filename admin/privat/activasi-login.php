<?PHP  //error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$id_admin=$_SESSION['id_admin'];
	$user_name=$_SESSION['username'];
$sql=mysql_query("select * from admin_web where user_name='$user_name' and id_admin='$id_admin'");
	$log=mysql_num_rows($sql);
	$admin_widodo = mysql_fetch_array($sql);
	if($log == '0'){ 
	header("location:".MY_ADMIN."login/");
	  //echo "Login itu hukumnya adalah <h1>Wajib</h1> ^_^";
	  } else {
$ip=$_SERVER['REMOTE_ADDR'];
$agent = $_SERVER['HTTP_USER_AGENT'];// type browser
//$asli = $_SERVER['HTTP_X_FORWARDED_FOR'];//* Proxy asli
$tgl_akhir= date("h:i A - d-m-Y"); 
$jam=date("h:i:m"); 
$ip=$_SERVER['REMOTE_ADDR'];
$save=mysql_query("update admin_web set tgl_akhir='$tgl_akhir', ip='$ip' where id_admin='$id_admin'");

 $refid_admin  = strip_tags($admin_widodo['refid_admin']);
 $name_admin = strip_tags($admin_widodo['nama']);
 $user_name = strip_tags($admin_widodo['user_name']);
 $no_hp = strip_tags($admin_widodo['no_hp']);
$email = strip_tags($admin_widodo['email']);
$avatar= strip_tags($admin_widodo['avatar']);
$alamat= strip_tags($admin_widodo['alamat']);
 $tgl_awal = strip_tags($admin_widodo['tgl']);
 $time_awal = strip_tags($admin_widodo['jam']);
 $tgl_akhir = strip_tags($admin_widodo['tgl_akhir']);
 $ip_admin = strip_tags($admin_widodo['ip']);
 ?>
 <?PHP }?>

<?PHP $sql_basic=mysql_query("select * from setting_web order by setting_web.id ASC");$databasic=mysql_fetch_array($sql_basic);
     $title_basic = strip_tags($databasic ['title']);
	 $deskripsi_basic = strip_tags($databasic['deskripsi']);
	 $keyword_basic = strip_tags($databasic['keyword']);
	 $favicon_basic = strip_tags($databasic['favicon']);
	 $logo_basic = strip_tags($databasic['logo']);
	 ?>

<?PHP $sqlmailbox=mysql_query("select count(*) as jumlah_mailbox from contact where status='Belum Dibaca'"); 
$mailboxjuml = mysql_fetch_array($sqlmailbox);
$jumlah_mailbox = strip_tags($mailboxjuml['jumlah_mailbox']);

$sqlbuku=mysql_query("select count(*) as jumlah_buku_tamu from buku_tamu where status='draft'"); 
$bukujuml = mysql_fetch_array($sqlbuku);
$jumlah_buku_tamu = strip_tags($bukujuml['jumlah_buku_tamu']);

//================================================================

$draftblog=mysql_query("select count(*) as jumlah_blog from article"); 
$totalblog = mysql_fetch_array($draftblog);
$jumlah_blog = strip_tags($totalblog['jumlah_blog']);
//=========== AGENDA =============================================
$agenda=mysql_query("select count(*) as jumlah_agenda from agenda"); 
$row = mysql_fetch_array($agenda);
$jumlah_agenda = strip_tags($row['jumlah_agenda']);
//===================== PAGES ======================================
$jumpages=mysql_query("select count(*) as jumlah_pages from pages"); 
$totalpages= mysql_fetch_array($jumpages);
$jumlah_pages = strip_tags($totalpages['jumlah_pages']);

//========================= komentar ======================================
$comment=mysql_query("select count(*) as jumlah_comment from comment where status='Y'"); 
$totalcommnet = mysql_fetch_array($comment);
$jumlah_commnet = strip_tags($totalcommnet['jumlah_comment']);
?>