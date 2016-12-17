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
<link rel="stylesheet" type="text/css" href="<?PHP echo MY_PATH;?>js/datepicker/css/datepicker.css">
<script src="<?PHP echo MY_PATH;?>js/jquery.js"></script>
<script type="text/javascript" src="<?PHP echo MY_PATH;?>js/jquery.validate.js"></script>
<script type="text/javascript" src="<?PHP echo MY_PATH;?>js/messages_id.js"></script>
<script>
</script>
</head><body>
<!--Start Wrapper-->
<section class="wrapper">
<?PHP include"../lib/header.php";?>
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-sm-8 margin-top-29">
<article class="post_container"><a href="#"><h3>Submit Data Alumni</h3></a>
<?PHP include"../action/alumni-proccess.php";?>
<form name="add_alumni" class="row" id="form1" method="post" enctype="multipart/form-data">
<table width="84%" class="table table-striped table-bordered table-hover">
<tr>
<td width="27%">Jurusan </td>
<td width="73%">
<select name="jurusan" id="jurusan" placeholder="Pilih Jurusan" class="required" required>
<option value="Ipa">Ipa</option>
<option value="Ips">Ips</option>
</select></td>
</tr>
<tr>
<td>Nama </td>
<td><input id="nama" name="nama" class="required span5" value="<?PHP echo $nama_alumni;?>" minlength="5"/></td>
</tr>
<tr>
<td>Jenis Kelamin </td>
<td>
<select name="jenis_kelamin" id="jenis_kelamin" placeholder="Pilih Jenis Kelamin" class="required" required>
<option value="Laki Laki">Laki Laki</option>
<option value="Perempuan">Perempuan</option>
</select></td>
</tr>
<tr>
<td>Tempat Lahir </td>
<td><input type="text" id="tempat_lahir" name="tempat_lahir" value="<?PHP echo $tempat_lahir;?>" class="required span5" minlength="5"/></td>
</tr>
<tr>
  <td>Tanggal Lahir </td>
  <td><input type="text" name="tanggal_lahir" id="datepicker" placeholder="mm-dd-yyyy" value="01-01-1991" class="required"/></td>
</tr>
<tr>
  <td>Alamat</td>
  <td><textarea name="alamat" id="alamat" cols="1" rows="4" class="required span6" minlength="10"/></textarea></td>
</tr>
<tr>
  <td>No Hp </td>
  <td><input type="text" id="no_hp" name="no_hp" class="required number" minlength="11" maxlength="12"/></td>
</tr>
<tr>
  <td>Pin BB</td>
  <td><input  type="text" name="pin" id="pin" class="required span3"> </td>
</tr>
<tr>
  <td>Email</td>
  <td><input  type="text" name="email" id="email" class="required email span4"> </td>
</tr>

<tr>
  <td>Agama</td>
  <td>
<select name="agama" id="agama" class="required span3" placeholder="Pilih Agama Anda" required>
<option value="Islam">Islam</option>
<option value="Kristen">Kristen</option>
<option value="Protestas">Protestan</option>
<option value="Hindu">Hindu</option>
<option value="Budha">Budha</option>
</select></td>
</tr>
<tr>
  <td>Tahun Lulus </td>
  <td><input type="text" id="tahun_lulus" placeholder="2014" name="tahun_lulus" class="required digits span2" maxlength="4" minlength="4"/></td>
</tr>
<tr>
  <td>Status</td>
  <td><textarea name="status" id="status" cols="1" rows="4" class="required span6" minlength="10"/></textarea></td>
</tr>
<tr>
  <td>Nama Instansi </td>
  <td><input type="text" name="nama_instansi" id="nama_instansi" class="required span5"/></td>
</tr>
<tr>
  <td>Alamat Instansi </td>
  <td><textarea name="alamat_instansi" id="alamat_instansi" cols="1" rows="4" class="required span6" minlength="10"></textarea></td>
</tr>
<tr>
  <td>Foto</td>
  <td><input type="file" name="foto_alumni" id="foto_alumni" class="span5" accept="image/*"/><br>
<blockquote>File harus berekstensi jpg, png, gif.
Kapasitas dan Resolusi gambar maksimal 80KB, <i>200x210 </i> pixel</blockquote></td>
</tr>
<tr>
  <td>Kode captcha</td>
  <td>
 <div class="col-lg-3 col-md-3 col-sm-3">
 <img class="span5" src="<?PHP echo MY_PATH?>captcha.php" style="float:left;height:30px!important; width:110px;"/>
 </div>
  <div class="col-lg-5 col-md-5 col-sm-5"> <input  name="captcha" id="captcha" type="text" class="required span3" placeholder="Captcha *">
  </div></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td><button class="btn btn-info btn-small" type="submit" name="add_alumni"><i class="icon-save"></i> Submit</button>
  <button class="btn btn-warning btn-small" type="reset"><i class="icon-repeat"></i> Resset</button>
  <a href="<?PHP echo MY_PATH?>data-alumni/"><button class="btn btn-success btn-small" type="button"><i class="icon-hand-left"></i> Ke Data Alumni</button></a>
</td>
</tr>
</table>
</form>
</div>

<?PHP include"../lib/sidebar.php";?>
</div></div>

<?PHP include"../lib/footer.php";?>
</section>

			
  <script src="<?PHP echo MY_PATH;?>js/datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
$('#datepicker').datepicker({
    format: 'mm-dd-yyyy'
});
</script>

<?PHP include"../js.php";?>


</body>
</html>
