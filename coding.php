<ul class="popular_posts_list">
<?PHP $query_download=mysql_query("select * from  download order by download.id_download LIMIT 5") or die (mysql_error());
$cek_data = mysql_num_rows($query_download);
if($cek_data !=0){
while ($data_download = mysql_fetch_array($query_download)) {
	$title_download = strip_tags($data_download['title']);
	$resize_download = strip_tags($data_download['resize']);
	$stat_download = strip_tags($data_download['stat']);
?>
<li><div class="tumb"><i class="icon-download-alt"></i></div>
<p class="wrap">
<a href="<?php echo $list_link_article;?>" class="title_post"><?PHP echo $title_download;?></a>
<small class="rp_date"><?PHP echo $resize_download;?></small>
</p>
</li><?PHP }} else {echo"<h3>Belum ada File</h3>";}?>
</ul>