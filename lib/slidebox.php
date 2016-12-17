<div class="slidebox"><a class="close"><i class="icon-remove-circle"></i></a><div class="title"><h3>Baca Artikel Lainya</h3></div>
<ul class="popular_posts_list">
<?PHP $j_cat = 0; while ($j_cat <= $jumlah_category){ $cat_me = $a_category["$j_cat"];
$sqlrelated=mysql_query("select * from article where categories like '%$cat_me%' and title!='$title' order by id_article LIMIT 2");
while($data_related=mysql_fetch_array($sqlrelated)){
$title_related  = strip_tags(substr($data_related['title'],0,35));
$link_related ="".MY_PATH."post/".$data_related['link_article'].".html";
$content_related = $data_related['content'];
$gambar_related = cek_img_tag($content_related);
// set tanggal indonesia
$date_related = strip_tags($post_blog['date']);
$tanggal_related = date('D, d M Y', strtotime($date_related));
$date_ind_r = dateindo($tanggal_related);?>
<div class="col-lg-12 col-md-12 col-sm-12">
<li><a href="<?PHP echo $link_related;?>">
<div class="recent-img">
<?PHP if($gambar_related == ''){?><img src="<?PHP echo MY_PATH?>img/not-images.png" alt="<?PHP echo $title_related;?>">
<?PHP } else{ ?><?PHP echo $gambar_related;}?></div>
<div class="title_post">
<?PHP echo $title_related;?>..</div>
<small class="rp_date"><?PHP echo $date_ind_r;?></small>
</a></li>
</div><?PHP }$j_cat++; }?>
</ul>
</div>
