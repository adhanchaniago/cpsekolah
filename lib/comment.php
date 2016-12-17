  <script type='text/javascript' src='<?PHP echo MY_PATH?>js/jquery-1.8.3.js'></script> 
  <script type='text/javascript'>
$(function(){
	$("a.reply").click(function() {
		var id = $(this).attr("id");
		$("#parent_id").attr("value", id);
		$("#komentar").focus();
		$("#respon").slideToggle();
	});
});
</script>

<?php include ("../lib/comment-function.php");
$q = "SELECT * FROM comment WHERE status='Y' and parent_id ='0' and id_article='$a_id' order by id_koment asc";
$hitung=0; if (!empty($status['Y'])){ } else {
$r = mysql_query($q); while($row = mysql_fetch_assoc($r)): 
getComments($row); endwhile;
 }?>
 
