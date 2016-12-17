<?php session_start(); 
include ('../config.php');
 include('../lib/ini.lib.php');
$config = get_parse_ini('../lib/config.ini.php');
include "../lib/ini.php";?>

<!DOCTYPE html><html lang="id"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Kontak Kami | <?PHP echo $title_web;?></title>
<meta name="description" content="<?PHP echo $keyword_web;?>" />
<meta name="keywords" content="<?PHP echo $keyword_web;?>" />
<meta name="author" content="<?PHP echo $admin_web;?>" />

<meta property="og:title" content="Kontak Kami | <?PHP echo $title_web;?>">
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
<article class="post_container"><a href="#">
<h3>Formulir Kontak Kami </h3>
</a>
<div class="google_map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.257575458194!2d105.25400597057053!3d-5.377642870054089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dac54f5cec89%3A0xe8e965f31ddb6391!2ss-widodo.com!5e0!3m2!1sid!2s!4v1424247439075" width="100%" height="300" frameborder="0" style="border:0"></iframe>
</div>
<hr>
<ul class="contact-details-alt">
<li><i class="fa icon-phone"></i> <p>No Telepon : <?PHP echo $no_hp1_admin;?></p></li>
<li><i class="fa icon-phone"></i> <p>No Telepon <?PHP echo $no_hp2_admin;?></p></li>
<li><i class="fa icon-tablet"></i> <p>Pin BB : <?PHP echo $pin_admin;?></p></li>
<li><i class="fa icon-envelope"></i> <p>Email : <?PHP echo $email_admin;?></p></li>
<li><i class="fa icon-map-marker"></i> <p>Alamat : <?PHP echo $alamat_admin;?></p></li>
</ul>
<hr>
<?PHP include"../action/contact_proses.php";?>
<form method="post" name="add_contact"  id="contact" action="#contact">
<div class="row-fluid contact_form">
<div class="col-lg-6 col-md-6 col-sm-6 contact_form">
<input class="col-lg-12 col-md-12 col-sm-12" name="nama" type="text" placeholder="Nama anda">
</div>
<div class="col-lg-6 col-md-6 col-sm-6 contact_form">
<input class="col-lg-12 col-md-12 col-sm-12" name="email" type="email" placeholder="E-mail anda">
</div>
<div class="col-lg-12 col-md-12 col-sm-12 comment_form">
<input class="col-lg-12 col-md-12 col-sm-12" name="subject" type="text" placeholder="Subject anda">
</div></div>

<div class="row-fluid"><div class="col-lg-12 col-md-12 col-sm-12">
<textarea name="mail_message" rows="9" class="textarea" placeholder="Pesan"></textarea></div></div>

<div class="row-fluid margin-top-10">
<div class="col-lg-12 col-md-12 col-sm-12 margin-top-10">
<label>Masukkan kode captcha <span class="highlight1">*</span> </label></div>
<div class="col-lg-3 col-md-3 col-sm-3 comment_form">
 <img class="span5" src="<?PHP echo MY_PATH?>captcha.php" style="height:30px!important; width:110px;"/>
 </div>
<div class="col-lg-6 col-md-6 col-sm-6 contact_form">
<input class="span3" name="captcha" type="text" placeholder="Captcha *">
  </div></div>
<div class="col-lg-4 col-md-4 col-sm-4 margin-bottom-29">
<button type="submit" name="add_contact" class="btn btn-info btn-lg"><i class="icon-signin"></i> KIRIM</button>
</div></form>
</article>
</div>

<?PHP include"../lib/sidebar.php";?>
</div></div>
<?PHP include"../lib/footer.php";?>
</section>
<?PHP include"../js.php";?>
</body>
</html>
