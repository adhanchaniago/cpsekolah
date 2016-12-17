<?PHP session_start();include ('../config.php');include ('privat/activasi-login.php'); 
include ('in/ini.php');?>
<!DOCTYPE html>
<html lang="en"><head>
<?PHP include"head.php";?>

</head><body>
<?PHP include"in/header.php";?>
<!-- main content -->
<div id="contentwrapper"><div class="main_content">
<div class="row-fluid">
<div class="span12">
<div class="alert alert-success">Hallo <b><?PHP echo $name_admin;?></b>, Login Ip: <?PHP echo $ip_admin;?>, Browser: <?PHP echo $my_browser;?>, Last Login: <?PHP echo $tgl_akhir;?>
  <button class="close" aria-hidden="true" data-dismiss="alert" type="button">&times;</button></div>
<ul class="dshb_icoNav tac">
<li><a href="<?PHP echo MY_ADMIN?>new/article" style="background-image: url(img/gCons/add-item.png)">
<span class="label label-info"><?PHP echo $jumlah_blog;?></span>New Article</a></li>
<li><a href="<?PHP echo MY_ADMIN?>new/agenda" style="background-image: url(img/gCons/add-item.png)"><span class="label label-info"><?PHP echo $jumlah_agenda;?></span>New Agenda</a></li>
<li><a href="<?PHP echo MY_ADMIN?>post/pages" style="background-image: url(img/gCons/copy-item.png)"><span class="label label-info"><?PHP echo $jumlah_pages;?></span>Pages</a></li>
<li><a href="<?PHP echo MY_ADMIN?>comment/article" style="background-image: url(img/gCons/chat-.png)"><span class="label label-important"><?PHP echo $jumlah_commnet;?></span> Comments</a></li>

<li><a href="<?PHP echo MY_ADMIN?>mailbox" style="background-image: url(img/gCons/chat-02.png)"><span class="label label-info"><?PHP echo $jumlah_mailbox;?></span>Malbox</a></li>

</ul>
</div>
</div>
	<div class="row-fluid"><div class="span12"><div class="heading clearfix">				
<h3 class="heading">Visitors</h3>
<?PHP $a_tanggal_s = ""; $a_hits_s = 0;
$sql = mysql_query("select * from statistik ORDER by statistik.date DESC limit 0, 6");
while ($data_s = mysql_fetch_array($sql)){ $tanggal_s = $data_s['date']; $hits_s = $data_s['hits'];
$a_tanggal_s = "'$tanggal_s',".$a_tanggal_s; $a_hits_s = "$hits_s,".$a_hits_s;}?>
<div id='statistik'></div>
</div></div></div>

<div class="row-fluid"><div class="span6"><div class="heading clearfix">
<h3 class="pull-left">Statistic Browser use by user</h3></div>
<table width="215" class="table table-striped table-bordered mediaTable"><tbody>
<tr>
<td colspan="2"><?PHP $sql_browser = mysql_query("select * from browser"); $all_hits_browser = 0; while($data_browser = mysql_fetch_array($sql_browser)){
$all_hits_browser += $data_browser['hits'];
$nama_browser = $data_browser['name'];
$hits_browser = $data_browser['hits'];
$sql_brow = mysql_query("select * from browser where name='$nama_browser'");
$data_brow = mysql_fetch_array($sql_brow);
define("$nama_browser", $data_brow['hits']); }
//mencari persentasenya di sini
$percen_firefox = Firefox / $all_hits_browser * 100;
$percen_chrome = Chrome / $all_hits_browser * 100;
$percen_opera = Opera / $all_hits_browser * 100;
$percen_ie = IE / $all_hits_browser * 100;
$percen_safari = Safari / $all_hits_browser * 100;
$percen_others = Others / $all_hits_browser * 100; ?>
<div id='statistik2'></div></td>
</tr>
<tr>
<td width="164">Firefox</td>
<td width="39"><?PHP echo substr($percen_firefox,0,4); ?>%</td>
</tr>
<tr>
<td>Google Chrome</td>
<td><?PHP echo substr($percen_chrome,0,4); ?>%</td>
</tr>
<tr>
<td>Safari</td>
<td><?PHP echo substr($percen_safari,0,4); ?>%</td>
</tr>
<tr>
<td>Internet Explorer</td>
<td><?PHP echo substr($percen_ie,0,4); ?>%</td>
</tr>
<tr>
<td>Opera</td>
<td><?PHP echo substr($percen_opera,0,4); ?>%</td>
</tr>
</tbody>
</table>
 </div>
 
<div class="span6"><div class="heading clearfix">
<h3 class="pull-left">Statistik Page </h3>
</div>
<table class="table table-striped table-bordered mediaTable">
<thead><tr><th class="optional">Page Hits</th><th class="essential">Pageviews</th></tr>
</thead><tbody>
<tr><td>Stats</td><td><?PHP echo "$all_hits"; ?></td></tr>
<tr><td>Page Hits Today</td><td><?PHP echo "$hits_today"; ?></td></tr>
<tr><td>Page Hits Yesterday</td><td><?PHP echo "$hits_yesterday"; ?></td></tr>
</tbody></table>													
</div>
<div class="span6"><div class="heading clearfix">
<h3 class="pull-left">Statistik Article</h3>
</div>
<table class="table table-striped table-bordered mediaTable">
<thead><tr>
  <th class="optional">Title</th><th class="essential">Pageviews</th></tr>
</thead><tbody>
<?PHP $sql=mysql_query("SELECT * FROM article order by article.stat ASC limit 5"); 
while($datapost=mysql_fetch_array($sql)){
$title_article = strip_tags(substr($datapost['title'],0,30));
$stat_article = strip_tags($datapost['stat']);  ?>
<tr><td><?PHP echo $title_article;?></td><td><?PHP echo $stat_article;?></td></tr><?PHP }?>
</tbody></table>													
</div>


<div class="span6"><div class="heading clearfix">
</div>
<table class="table table-striped table-bordered mediaTable">
<thead><tr>
  <th colspan="2" class="optional"><h4>Informasi Admin </h4></th></tr>
</thead><tbody>
<tr><td>Name </td><td><?PHP echo $name_admin;?></td></tr>
<tr><td>Start login </td><td><?PHP echo $time_awal;?> / <?PHP echo $tgl_awal;?></td></tr>
<tr><td>Last Login </td><td><?PHP echo $tgl_akhir;?></td></tr>
<tr><td>Last IP</td><td><?PHP echo $ip_admin;?></td></tr>
<tr><td>Browser</td><td><?PHP echo $my_browser;?></td></tr>
</tbody></table>													
</div>

</div>
						
</div></div>
								
                 
<!-- sidebar -->
<?PHP include"in/panel.php";?> 
<?PHP include"head-js.php";?>
<script type="text/javascript">
$(function () {
$('#statistik').highcharts({
chart: {
type: 'line',
marginRight: 50,
marginBottom: 25
},
title: {
text: 'Page Hits',
x: -20 //center
},
<!--subtitle: {
////text: 's-widodo.com',
//x: -20
//}, -->
xAxis: {
categories: [<?PHP echo $a_tanggal_s; ?>]
},


series: [{
name: 'Visits',
data: [<?PHP echo str_replace(",0", "", $a_hits_s); ?>]
}],

yAxis: {
title: {
text: 'Page Hits'
},
plotLines: [{
 value: 0,
                width: 1,
                color: '#808080'
}]
},
tooltip: {
valueSuffix: ' Page Hits'
},
legend: {
layout: 'vertical',
align: 'right',
verticalAlign: 'top',
x: -10,
y: 100,
borderWidth: 0
}

});
});
</script>
<script type="text/javascript">
$(function () {
$('#statistik2').highcharts({
chart: {
plotBackgroundColor: null,
plotBorderWidth: null,
plotShadow: false
},
title: {text: '' },
tooltip: { pointFormat: '{series.name}: <b>{point.percentage}%</b>', percentageDecimals: 0 },
plotOptions: {
pie: {
allowPointSelect: true,
cursor: 'pointer',
dataLabels: {
enabled: true,
color: '#000000',
connectorColor: '#000000',
formatter: function() {
return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
}
}
}
},
series: [{
type: 'pie',
name: 'Browser Use',
data: [
['Firefox',   <?PHP echo substr($percen_firefox,0,4); ?>],
['IE',       <?PHP echo substr($percen_ie,0,4); ?>],
{
name: 'Chrome',
y: <?PHP echo substr($percen_chrome,0,4); ?>,
sliced: true,
selected: true
},
['Safari',    <?PHP echo substr($percen_safari,0,4); ?>],
['Opera',     <?PHP echo substr($percen_opera,0,4); ?>],
['Others',   <?PHP echo substr($percen_others,0,4); ?>]
]
}]
});
});
</script>
<script src="./plugin/highcharts/highcharts.js"></script>
</div></div>
</body></html>