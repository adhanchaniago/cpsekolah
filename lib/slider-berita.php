<ul id="newsslider">
<?php 
$sql_slider=mysql_query("select * from article order by article.id_article desc LIMIT 10");
$cek_slider = mysql_num_rows($sql_slider); 
if($cek_slider!=0){
while($post_slider=mysql_fetch_array($sql_slider)){
$title_article_s_top = trim(stripslashes(strip_tags(substr($post_slider['title'],0,40))));
$title_article_s = trim(stripslashes(strip_tags(substr($post_slider['title'],0,20))));
$link_blog_s ="".MY_PATH."post/". strip_tags(htmlentities($post_slider['link_article'])).".html";
$content_blog = $post_slider['content'];
$gambar_blog_s = cek_img_tag($content_blog);
$content_s = trim(stripslashes(strip_tags(substr($post_slider['content'],0,270))));?>
<li><a href="<?PHP echo $link_blog_s;?>">
<?PHP if($gambar_blog_s == ''){?><img src="<?PHP echo MY_PATH?>img/not-images.png" alt="<?PHP echo $title_article_s?>"/>
<?PHP } else{ ?><?PHP echo $gambar_blog_s;?><?PHP }?></a>
<a href="<?PHP echo $link_blog_s;?>"><?PHP echo $title_article_s;?>..</a><h3></h3>
<p><b><a href="<?PHP echo $link_blog_s;?>"><?PHP echo $title_article_s_top;?></a></b><br><?PHP echo $content_s;?><br /></p>
</li>
<?PHP } }else {echo"<h3>Artikel Masih Kosong</h3>";}?>
</ul>