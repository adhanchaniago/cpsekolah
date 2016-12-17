<?php error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
function getComments($row) { 
$id_koment = strip_tags($row['id_koment']);
$nama_comment = strip_tags($row['nama_comment']);
$url_website_komen = strip_tags($row['url_website_komen']);
$comment_message = strip_tags($row['comment']);
$date_comment = strip_tags($row['date_comment']);
//$sql=mysql_query("SELECT * FROM tb_user WHERE id_user='$row[id_user]'");
//$member=mysql_fetch_array($sql);$no++;
?>

<li class="comment">
<div class="avatar"><img src="<?PHP echo MY_PATH?>img/avatar.jpg" class="avatar"></div>
<div class="comment-container">
<h4 class="comment-author"><a href="<?PHP echo $url_website_komen;?>" target="_blank"><?PHP echo $nama_comment;?></a></h4>

<div class="comment-meta"><a href="<?PHP echo $url_website_komen;?>" target="_blank" class="comment-date link-style1"><?PHP echo $date_comment;?></a>
<a class="comment-reply-link link-style3 reply" href="#respon" onClick="return show();" id="<?PHP echo $id_koment;?>">Balas</a></div>

<div class="comment-body">
<p><?PHP echo $comment_message;?></p>
</div></div></li>

<?PHP $q = "SELECT * FROM comment WHERE status='Y' and parent_id= ".$row['id_koment']."";  
 $r = mysql_query($q);  
 if(mysql_num_rows($r)>0) // there is at least reply  
  {  
  echo '<ul class="children">';  
  while($row = mysql_fetch_assoc($r)) {  
   getComments($row); 
  }  
   echo"</ul>"; 
  }  
 
}  
?>  