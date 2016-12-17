<?php session_start(); 
include ('../config.php');
 include('../lib/ini.lib.php');
$config = get_parse_ini('../lib/config.ini.php');
include "../lib/ini.php";
$nama_alumni='';?>

<!DOCTYPE html><html lang="id"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Submit Data Alumni | <?PHP echo $title_web;?></title>
<meta name="description" content="<?PHP echo $keyword;?>" />
<meta name="keywords" content="<?PHP echo $keyword;?>" />
<meta name="author" content="<?PHP echo $admin_web;?>" />

<meta property="og:title" content="<?PHP echo $title_pages;?> | <?PHP echo $title_web;?>">
<meta property="og:type" content="article">
<meta property="og:url" content="http://<?php echo $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];?>">
<meta property="og:image" content="<?PHP echo $gambar_pages;?>">
<meta property="og:site_name" content="<?PHP echo $title_web;?>">
<meta property="og:description" content="<?PHP echo $keyword;?>">
<?PHP include "../lib/meta_tag.php";?>
<?PHP include "../head.php";?>


</head><body>
<!--Start Wrapper-->
<section class="wrapper">
<?PHP include"../lib/header.php";?>
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-8 margin-top-29">
<article class="post_container"><a href="#"><h3>Data Alumni</h3></a>
<a href="<?PHP echo MY_PATH?>submit/alumni/"><button class="btn btn-info btn-small"><i class="icon-plus"></i> Tambah Baru</button></a>
<hr>
<table width="100%" class="table table-striped table-bordered" id="datapost">
<thead>
<tr>
<th width="369">Nama</th>
<th width="228">Jenis Kalamin </th>
<th width="103" align="center">Jurusan</th>
<th width="191" align="center">Tahun Lulus </th>
<th width="60">#</th>
</tr></thead><tbody>
<?php $sql=mysql_query("select * from alumni order by alumni.id_alumni asc");
while($datapost=mysql_fetch_array($sql)){
$nama_alumni = strip_tags($datapost['nama']);
$jenis_kelamin = strip_tags($datapost['jenis_kelamin']);
$jurusan = strip_tags($datapost['jurusan']);
$tahun_lulus = strip_tags($datapost['tahun_lulus']);
$link_alumni ="".MY_PATH."data-alumni/view/".strip_tags($datapost['kode_alumni']).".html";?>
<tr>
<td><?PHP echo $nama_alumni;?></td>
<td><?PHP echo $jenis_kelamin;?></td>
<td><?PHP echo $jurusan;?></td>
<td><?PHP echo $tahun_lulus;?></td>
<td>
<a href="<?PHP echo $link_alumni;?>">
<button class="btn btn-mini  btn-warning" title="Buka Detail"><i class="icon-zoom-in"></i>Detail</button>
</a>

</td></tr>
<?PHP }?></tbody></table>
</article>
</div>

<?PHP include"../lib/sidebar.php";?>
</div></div>

<?PHP include"../lib/footer.php";?>
</section>
<script type="text/javascript" src="<?PHP echo MY_PATH;?>js/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="<?PHP echo MY_PATH;?>js/datatables/DT_bootstrap.css">
 <script type="text/javascript" src="<?PHP echo MY_PATH;?>js/datatables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="<?PHP echo MY_PATH;?>js/datatables/DT_bootstrap.js"></script>
   <script type="text/javascript" src="<?PHP echo MY_PATH;?>js/datatables/dynamic-table.js"></script>
<?PHP include"../js.php";?>

</body>
</html>
