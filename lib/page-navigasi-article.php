<?PHP 
$sql=mysql_query("SELECT * FROM article WHERE id_article='$cari[id_article]' limit 1");while($pageblog=mysql_fetch_array($sql)){
$a_id =strip_tags($pageblog ['id_article']);?>
<?PHP $sqlback=mysql_query("SELECT * FROM article WHERE id_article >'$a_id'"); $pageback=mysql_fetch_array($sqlback);
$title_pageback = strip_tags($pageback['title']);
$url_pageback ="".strip_tags($pageback['link_article']).".html";?>
<?php if ($pageback > "".$_GET['link_article'].""){?>
<a class="left" href="<?PHP echo $url_pageback;?>"><?PHP echo $title_pageback;?><p><i class=" icon-double-angle-left"></i> Sebelumnya</p></a><?PHP }?>

<?PHP $sqlnext=mysql_query("SELECT * FROM article WHERE id_article <'$a_id' order by id_article desc"); $pagenext=mysql_fetch_array($sqlnext);
$title_pagenext = strip_tags($pagenext['title']);
$url_pagenext ="".strip_tags($pagenext['link_article']).".html";?>
<?php if ($pagenext > "".$_GET['link_article'].""){?>
<a class="right" href="<?PHP echo $url_pagenext;?>"><?PHP echo $title_pagenext;?><p>Selanjutnya <i class="icon-double-angle-right"></i></p></a><?PHP }?>
<?PHP } ?>