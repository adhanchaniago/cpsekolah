<?php session_start(); 
include ('../config.php');
 include('../lib/ini.lib.php');
$config = get_parse_ini('../lib/config.ini.php');
include "../lib/ini.php";?>

<!DOCTYPE html><html lang="id"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Buku Tamu | <?PHP echo $title_web;?></title>
<meta name="description" content="<?PHP echo $keyword_web;?>" />
<meta name="keywords" content="<?PHP echo $keyword_web;?>" />
<meta name="author" content="<?PHP echo $admin_web;?>" />

<meta property="og:title" content="Buku Tamu | <?PHP echo $title_web;?>">
<meta property="og:type" content="article">
<meta property="og:url" content="http://<?php echo $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];?>">
<meta property="og:image" content="">
<meta property="og:site_name" content="<?PHP echo $title_web;?>">
<meta property="og:description" content="<?PHP echo $keyword_web;?>">
<?PHP include "../lib/meta_tag.php";?>
<?PHP include "../head.php";?>
<script src="<?PHP echo MY_PATH;?>js/jquery.js"></script>
<script type="text/javascript" src="<?PHP echo MY_PATH;?>js/jquery.validate.js"></script>
<script type="text/javascript" src="<?PHP echo MY_PATH;?>js/messages_id.js"></script>

</head><body>
<!--Start Wrapper-->
<section class="wrapper">
<?PHP include"../lib/header.php";?>
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-8 margin-top-29" s>
<article class="post_container"><a href="#"><h3>Formulir Buku Tamu</h3></a>
<?PHP include"../action/buku_tamu_procces.php";?>
<form name="add_buku_tamu" class="row" id="form1" method="post" enctype="multipart/form-data">
<table width="84%" class="table table-hover">
<tr>
  <td width="21%">Nama</td>
  <td width="79%"><input type="text" name="nama_buku_tamu" id="nama_buku_tamu" class="required span4"/></td>
</tr>
<tr>
  <td>Email</td>
  <td><input type="text" id="email_buku_tamu" name="email_buku_tamu" class="required email span4"/></td>
</tr>
<tr>
  <td>Pesan</td>
  <td><textarea name="pesan_buku_tamu" id="pesan_buku_tamu" cols="1" rows="3" class="required span6" maxlength="250"  minlength="10"/></textarea> </td>
</tr>
<tr>
  <td>Kode captcha</td>
  <td><div class="col-lg-3 col-md-3 col-sm-3">
 <img class="span5" src="<?PHP echo MY_PATH?>captcha.php" style="float:left;height:30px!important; width:110px;"/>
 </div>
  <div class="col-lg-5 col-md-5 col-sm-5"> <input  name="captcha" id="captcha" type="text" class="required span3" placeholder="Captcha *">
  </div>
  </td></tr>
<tr>
  <td>&nbsp;</td>
  <td> <button class="btn btn-info btn-small" type="submit" name="add_buku_tamu"><i class="icon-save"></i> Submit</button>
  <button class="btn btn-warning btn-small" type="reset"><i class="icon-repeat"></i> Resset</button> </td> 
</tr>
</table>
</form>
<hr>
<h3>List Buku Tamu</h3>
<?PHP 
 $limit =15;  if(isset($_GET['page'])){ $page = mysql_real_escape_string($_GET['page']); } else{ $page = 1;} $offset = ($page - 1) * $limit;
$buku= mysql_query("select * from buku_tamu where status='Publish' order by id_buku DESC LIMIT $offset, $limit") or die(mysql_error() );
$cek_buku = mysql_num_rows($buku);
 if($cek_buku !=0){
while($post_buku=mysql_fetch_array($buku)){
  $nama_buku_tamu = strip_tags($post_buku['nama_buku_tamu']);
  $email_buku_tamu =strip_tags($post_buku['email_buku_tamu']);
  $pesan_buku_tamu = strip_tags($post_buku['pesan_buku_tamu']);
  $date_buku_tamu = strip_tags($post_buku['date_buku_tamu']);
?>
<div class="buku_tamu_list">
<div class="avatar_buku_tamu"><img src="<?PHP echo MY_PATH;?>img/avatar.jpg"/></div>

<div class="buku_tamu_body">
<div class="title_name">
<p class="name"><a href="mailto:<?PHP echo $email_buku_tamu;?>" data-placement="top" data-toggle="tooltip" title="<?PHP echo $email_buku_tamu;?>"><?PHP echo $nama_buku_tamu;?></a></p>
<p class="date"><?PHP echo $date_buku_tamu;?></p>
</div>
<?PHP echo $pesan_buku_tamu;?>
</div>
</div>
<?PHP }?>
<div class="paginate">
<ul class="pagination pagination-sm">
<?php $sql2  =mysql_query("SELECT COUNT(*) AS jumData FROM buku_tamu where status='Publish'");
$data  = mysql_fetch_array($sql2);
$url_page = "".MY_PATH."?page=";
$jumData = $data['jumData'];
// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
$jumPage = ceil($jumData/$limit);
//menampilkan link << Previous
if ($page > 1){
echo '<li><a href="'.$url_page.''.($page-1).'"><i class="icon-double-angle-left"></i></a></li>';
}
//menampilkan urutan paging
for($i = 1; $i <= $jumPage; $i++){
//mengurutkan agar yang tampil i+3 dan i-3
         if ((($i >= $page - 1) && ($i <= $page + 2)) || ($i == 1) || ($i == $jumPage))
         {
            if($i==$jumPage && $page <= $jumPage-3) echo '<li class="disabled"><a href="#">..</a></li>';
            if ($i == $page) echo '<li class="active"><a>'.$i.'</a></li>';
            else echo '<li><a href="'.$url_page.''.$i.'">'.$i.'</a></li>';
            if($i==1 && $page >= 5) echo '<li class="disabled"><a href="#">..</a></li>';
         }
}
//menampilkan link Next >>
if ($page < $jumPage){
echo '<li><a href="'.$url_page.''.($page+1).'"><i class="icon-double-angle-right"></i></a></li>';}?>
</ul>
</div>
<?PHP }else {echo"belum ada data";}?>
</article>

</div>

<?PHP include"../lib/sidebar.php";?>
</div></div>

<?PHP include"../lib/footer.php";?>
</section>
<?PHP include"../js.php";?>
</body>
</html>
