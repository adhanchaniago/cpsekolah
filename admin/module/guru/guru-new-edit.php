<?PHP session_start();
$config_='aW5jbHVkZSAoJy4uLy4uLy4uL2NvbmZpZy5waHAnKTsgDQppbmNsdWRlICgnLi4vLi4vcHJpdmF0L2FjdGl2YXNpLWxvZ2luLnBocCcpOw0K';
eval(base64_decode($config_));
$nama='';
$nip='';
$ttl='';
$alamat='';
$pendidikan_akhir='';
$jabatan='';
$perangkat='';?>
<!DOCTYPE html>
<html lang="en"><head>
<?PHP include"../../head.php";?>
<script language="javascript">
function show(){
  if ($(".chang").html()=='Change Images'){
    $(".chang").html("Cancel");
    $(".gb-profile").hide();
    $("#favinput").fadeIn('1000');
  }else if ($(".chang").html()=='Cancel'){
    $("#favinput").hide();
    $(".gb-profile").fadeIn('1000');
    $(".chang").html("Change Images");
  }
  return false;
}

function upload(){

return false;
}
</script>
</head><body>
<?PHP include"../../in/header.php";?>
<!-- main content -->
<div id="contentwrapper"><div class="main_content"><nav>
<div id="jCrumbs" class="breadCrumb module"><ul><li><a href="<?PHP echo $nama_admin;?>"><i class="icon-home"></i></a></li>
<li><a href="<?PHP echo MY_ADMIN?>data-guru/">Data Guru </a></li>
<li><?PHP if (empty($_GET['refid'])){ echo"New Data Guru";} else {echo"Update Data Guru"; }?></li></ul></div></nav>

<?php  if (!empty($_GET['error'])) { if ($_GET['error'] == 1) { echo '<div class="alert alert-success">Update Data Guru Error...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['error'] == 2) { echo '<div class="alert alert-error">Field can not be empty...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['error'] == 3) { echo '<div class="alert alert-error">Submit Data Guru Error on server...!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['error'] == 'images0') { echo '<div class="alert alert-error">Upload Gambar Gagal, Format gambar bmp, gif, jpg, jpeg, png..!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}
else if ($_GET['error'] == 'images1') { echo '<div class="alert alert-error">Upload Gambar gagal, maxsimal ukuran gambar 80 KB..!
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>';}}?>


								
<?PHP if(!empty($_GET['refid'])){
$refid =  mysql_real_escape_string(htmlentities($_GET['refid'])); 
$query = mysql_query("select * from guru where id_guru='$refid'") or die (mysql_error());
while($data_post= mysql_fetch_array($query)) {
$refid =  mysql_real_escape_string(htmlentities($data_post['id_guru'])); 
$nama= strip_tags($data_post['nama']);
$nip = strip_tags($data_post['nip']);
$jenis_kelamin= strip_tags($data_post['jenis_kelamin']);
$ttl = strip_tags($data_post['ttl']);
$alamat = strip_tags($data_post['alamat']);
$agama = strip_tags($data_post['agama']);
$pendidikan_akhir = strip_tags($data_post['pendidikan_akhir']);
$jabatan = strip_tags($data_post['jabatan']);
$perangkat = strip_tags($data_post['perangkat']);
$gambar = strip_tags($data_post['gambar']);
}?>
<div class="row-fluid"><div class="span12">
  <h3 class="heading">Update Data Guru: <?PHP echo $nama;?></h3>
<form name="add_alumni" class="row" id="form1" method="post" action="<?PHP echo MY_ADMIN;?>guru-proses/?refid=<?PHP echo $refid;?>&action=update" enctype="multipart/form-data">
<input name="refid" type="hidden" value="<?PHP echo $refid;?>">
<table width="84%" class="table table-striped table-bordered table-hover">
<tr>
<td width="27%">Nama </td>
<td width="73%"><input id="nama" name="nama" class="required span6" value="<?PHP echo $nama;?>" minlength="5" required></td>
</tr>
<tr>
  <td width="27%">Nip</td>
  <td><input id="nip" name="nip" class="required span6" value="<?PHP echo $nip;?>" minlength="5" required></td>
</tr>
<tr>
<td>Jenis Kelamin </td>
<td>
<select name="jenis_kelamin" id="jenis_kelamin" class="required span6" required>
 <option>Pilih Jenis Kelamin</option>
<option value="Laki-Laki" <?PHP if($jenis_kelamin =="Laki-Laki"){ echo 'selected="selected"';}?>>Laki-Laki</option>
<option value="Perempuan" <?PHP if($jenis_kelamin =="Perempuan"){ echo 'selected="selected"';}?>>Perempuan</option>
</select></td>
</tr>
<tr>
<td>Tempat Tanggal Lahir </td>
<td><input type="text" id="ttl" name="ttl" value="<?PHP echo $ttl;?>" class="required span6" minlength="5" required></td>
</tr>
<tr>
  <td>Alamat</td>
  <td><textarea name="alamat" id="alamat" cols="1" rows="4" class="required span11" minlength="10" required><?PHP echo $alamat;?></textarea></td>
</tr>

<tr>
  <td>Agama</td>
  <td>
<select name="agama" id="agama" class="required span6" required>
<option value="Islam" <?PHP if($agama =="Islam") { echo'selected="selected"';}?>>Islam</option>
<option value="Kristen" <?PHP if($agama =="Kristen") {echo'selected="selected"';}?>>Kristen</option>
<option value="Protestas" <?PHP if($agama =="Protestan") { echo'selected="selected"';}?>>Protestan</option>
<option value="Hindu" <?PHP if($agama =="Hidu"){ echo'selected="selected"';}?>>Hindu</option>
<option value="Budha" <?PHP if($agama == "Budha"){ echo'selected="selected"';}?>>Budha</option>
</select></td>
</tr>
<tr>
  <td>Pendidikan Terakhir</td>
  <td><input type="text" id="tahun_lulus" name="pendidikan_akhir" class="span6" value="<?PHP echo $pendidikan_akhir;?>" maxlength="4" minlength="4" required></td>
</tr>
<tr>
  <td>Jabatan</td>
  <td><input type="text" name="jabatan" id="nama_instansi" value="<?PHP echo $jabatan;?>" class="required span6" required></td>
</tr>
<tr>
  <td>Perangkat</td>
  <td><input type="text" name="perangkat" value="<?PHP echo $perangkat;?>" id="nama_instansi2" class="required span6" required></td>
</tr>
<tr>
  <td>Foto</td>
  <td>
  <div class="gb-profile">
<?PHP if($gambar == ''){?>
<img src="<?PHP echo MY_ADMIN?>img/no_img_180.png" width="160" height="150" style="width:160px; height:150px;"/>
<?PHP } else{ ?>
<img src="<?PHP echo MY_PATH;?>images/guru/<?PHP echo $gambar;?>" width="160" height="160" style="width:160px; height:160px;"/><?PHP }?>
<div class="chang" onClick="return show();" style="cursor:pointer;">Change Images</div></div>

<div id="favinput" style="display:none;">
<div class="span12"><input type="file" name="gambar" id="uni_file" class="uni_style" accept="image/*"/></div>
<div class="row-fluid"><div class="span12">
<blockquote><i>Ekstensi bmp, gif, jpg, jpeg, png dan Max size 90 KB / Size : 600 x 500 px</i></blockquote>
</div></div>

<button class="btn btn-success" onClick="return show();" style="cursor:pointer;"><i class="icon-remove-circle"></i> Cancel</button>
</div>

  </td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td><button class="btn btn-info btn-large" type="submit" name="edit_guru"><i class="icon-save"></i> Save</button>
  <button class="btn btn-warning btn-large" type="reset"><i class="icon-repeat"></i> Resset</button></td>
</tr>
</table>
</form>
</div></div>
<?PHP } else { ?>

<div class="row-fluid"><div class="span12">
  <h3 class="heading">New Data Guru</h3>
  
<form name="add_alumni" class="row" id="form1" method="post" action="<?PHP echo MY_ADMIN?>guru-proses/" enctype="multipart/form-data">
<table width="84%" class="table table-striped table-bordered table-hover">
<tr>
<td width="27%">Nama </td>
<td width="73%"><input id="nama" name="nama" class="required span6" value="<?PHP echo $nama;?>" minlength="5" required></td>
</tr>
<tr>
  <td width="27%">Nip</td>
  <td><input id="nip" name="nip" class="required span6" value="<?PHP echo $nip;?>" minlength="5" required></td>
</tr>
<tr>
<td>Jenis Kelamin </td>
<td>
<select name="jenis_kelamin" id="jenis_kelamin" class="required span6" required>
<option value="Laki-Laki">Laki-Laki</option>
<option value="Perempuan">Perempuan</option>
</select></td>
</tr>
<tr>
<td>Tempat Tanggal Lahir </td>
<td><input type="text" id="ttl" name="ttl" value="<?PHP echo $ttl;?>" class="required span8" minlength="5" required></td>
</tr>
<tr>
  <td>Alamat</td>
  <td><textarea name="alamat" id="alamat" cols="1" rows="4" class="required span10" minlength="10" required><?PHP echo $alamat;?></textarea></td>
</tr>

<tr>
  <td>Agama</td>
  <td>
<select name="agama" id="agama" class="required span6" required>
<option value="Islam">Islam</option>
<option value="Kristen">Kristen</option>
<option value="Protestas">Protestan</option>
<option value="Hindu">Hindu</option>
<option value="Budha">Budha</option>
</select></td>
</tr>
<tr>
  <td>Pendidikan Terakhir</td>
  <td><input type="text" id="tahun_lulus" class="span6" name="pendidikan_akhir" value="<?PHP echo $pendidikan_akhir;?>" maxlength="4" minlength="4" required></td>
</tr>
<tr>
  <td>Jabatan</td>
  <td><input type="text" name="jabatan" id="nama_instansi" value="<?PHP echo $jabatan;?>" class="required span6" required></td>
</tr>
<tr>
  <td>Perangkat</td>
  <td><input type="text" name="perangkat" value="<?PHP echo $perangkat;?>" id="nama_instansi2" class="required span6" required></td>
</tr>
<tr>
  <td>Foto</td>
  <td><input type="file" name="gambar" id="foto_alumni" class="span6" accept="image/*" required><br>
<blockquote>File harus berekstensi jpg, png, gif.
Kapasitas dan Resolusi gambar maksimal 80KB, <i>200x210 </i> pixel</blockquote></td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td><button class="btn btn-info btn-large" type="submit" name="add_guru"><i class="icon-save"></i> Save</button>
  <button class="btn btn-warning btn-large" type="reset"><i class="icon-repeat"></i> Resset</button></td>
</tr>
</table>
</form>
</div></div>
<?PHP }?>



</div></div>
								
                    
            
<!-- sidebar -->
<?PHP include"../../in/panel.php";?> 
<?PHP include"../../head-js.php";?>
<script src="<?PHP echo MY_ADMIN?>js/forms/jquery.inputmask.min.js"></script>
<script src="<?PHP echo MY_ADMIN?>js/forms/jquery.autosize.min.js"></script>
<script src="<?PHP echo MY_ADMIN?>js/forms/jquery.counter.min.js"></script>
<script src="<?PHP echo MY_ADMIN?>js/forms/jquery.ui.touch-punch.min.js"></script>
<script src="<?PHP echo MY_ADMIN?>js/forms/jquery.spinners.min.js"></script>    
<!-- datepicker -->
<script src="<?PHP echo MY_ADMIN?>lib/datepicker/bootstrap-datepicker.js"></script>
<script src="<?PHP echo MY_ADMIN?>lib/datepicker/bootstrap-timepicker.min.js"></script>
<!-- validation -->
<script src="<?PHP echo MY_ADMIN?>js/gebo_forms.js"></script>
</div></div>
</body></html>