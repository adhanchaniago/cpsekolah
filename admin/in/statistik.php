<?PHP //error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));?>
<?PHP $sql=mysql_query("select count(*) as jum_artikle from tb_berita"); $totalpost=mysql_fetch_array($sql);//artikel
$jum_artikle = $totalpost['jum_artikle'];?>

<?PHP $sql=mysql_query("select count(*) as jum_info from tb_informasi"); $totalpost=mysql_fetch_array($sql);//artikel
$jum_info = $totalpost['jum_info'];?>

<?PHP $sql=mysql_query("select count(*) as jum_galeri from tb_galery"); $totalpost=mysql_fetch_array($sql);//artikel
$total_galeri = $totalpost['jum_galeri'];?>

<?PHP $sql=mysql_query("select count(*) as jum_pages from tb_pages"); $totalpost=mysql_fetch_array($sql);//artikel
$total_pages = $totalpost['jum_pages'];?>

<div id="content" class="span11">
<div class="row-fluid">
				
				<div class="stats-date span3">
					<div>Monthly Statistics</div>
					<div class="range"><?php date_default_timezone_set("Asia/Jakarta"); echo date("d F Y ");?></div>
				</div>
				
				<div class="stats span9">
					
					<div class="stat">
						<div class="left">
							<div class="number green"><?PHP echo "$all_hits"; ?></div>
							<div class="title"><span class="color green"></span>Statistik </div>
						</div>
						<div class="right">	
							<div class="arrow">
								<img src="img/uparrow.png" />
							</div>
							<div class="percent"></div>
						</div>
					</div>
					
					<div class="stat">
						<div class="left">
							<div class="number yellow"><?PHP echo "$hits_today"; ?></div>
							<div class="title"><span class="color yellow"></span>Hari ini</div>
						</div>
						<div class="right">	
							<div class="arrow">
								<img src="img/uparrow.png" />
							</div>
							<div class="percent"></div>
						</div>
					</div>
					
					<div class="stat">
						<div class="left">
							<div class="number blue"><?PHP echo "$hits_yesterday"; ?></div>
							<div class="title"><span class="color blue"></span>Kemarin</div>
						</div>
						<div class="right">	
							<div class="arrow">
								<img src="img/downarrow.png" />
							</div>
							<div class="percent"></div>
						</div>
					</div>
					
					<div class="stat">
						<div class="left">
							<div class="number red"><?PHP echo "$jum_artikle"; ?></div>
							<div class="title"><span class="color red"></span>Total Berita</div>
						</div>
						
						
					</div>
						
				</div>
			
			</div>	

			<div class="row-fluid">
				
	<div class="row-fluid sortable">	
				<div class="box span12">
					
					<div class="box-content">
						
<a class="quick-button span2" href="<? echo $nama_folder?>new/artikel">
<i class="fa-icon-folder-open"></i><p>Tambah Berita</p><span class="notification blue"><?PHP echo "$jum_artikle"; ?></span></a>

<a class="quick-button span2" href="<?PHP echo $nama_folder?>post/info"><i class="fa-icon-info-sign"></i>
<p>Informasi</p>
<span class="notification green"><?PHP echo" $jum_info"; ?></span></a>

<a class="quick-button span2" href="<?PHP echo $nama_folder?>galeri"><i class="fa-icon-picture"></i>
<p>Galery</p>
<span class="notification red"><?PHP echo $total_galeri;?></span></a>

<a class="quick-button span2" href="<?PHP echo $nama_folder?>post/pages"><i class="fa-icon-reorder"></i>
<p>Pages</p>
<span class="notification red"><?PHP echo $total_pages;?></span></a>

<a class="quick-button span2" href="<?PHP echo $nama_folder?>mailbox"><i class="fa-icon-envelope"></i>
<p>Pesan Masuk</p>
<span class="notification red"><? $sql=mysql_query("select count(*) as jmlh from tb_contact where status='N' order by id desc"); $dt=mysql_fetch_array($sql);if($dt[jmlh]=='0'){echo "0";}else{ echo "$dt[jmlh]";} ?></span></a>

<div class="clearfix"></div>
					</div>	
				</div><!--/span-->
				
			</div><!--/row-->
			
			</div>


<div class="row-fluid">
<?PHP $a_tanggal_s = ""; $a_hits_s = 0;
$sql = mysql_query("select * from statistik ORDER by statistik.date DESC limit 0, 10");
while ($data_s = mysql_fetch_array($sql)){ $tanggal_s = $data_s['date']; $hits_s = $data_s['hits'];
$a_tanggal_s = "'$tanggal_s',".$a_tanggal_s; $a_hits_s = "$hits_s,".$a_hits_s;}?>
<div id='statistik'></div>
</div>
<div class="row-fluid">
<?PHP
$sql_browser = mysql_query("select * from browser");
$all_hits_browser = 0;
while($data_browser = mysql_fetch_array($sql_browser)){
$all_hits_browser += $data_browser['hits'];
$nama_browser = $data_browser['name'];
$hits_browser = $data_browser['hits'];
$sql_brow = mysql_query("select * from browser where name='$nama_browser'");
$data_brow = mysql_fetch_array($sql_brow);
define("$nama_browser", $data_brow['hits']);
}
//mencari persentasenya di sini
$percen_firefox = Firefox / $all_hits_browser * 100;
$percen_chrome = Chrome / $all_hits_browser * 100;
$percen_opera = Opera / $all_hits_browser * 100;
$percen_ie = IE / $all_hits_browser * 100;
$percen_safari = Safari / $all_hits_browser * 100;
$percen_others = Others / $all_hits_browser * 100;
?>
<div id='statistik2'></div>
</div>
<hr />
<div class="widget span7" ontablet="span7" ondesktop="span7">
<h2><span class="glyphicons charts"><i></i></span> Stats</h2>
<hr /><div class="content">
<div class="sparkLineStats">
<ul class="unstyled">
<? include "conn.php"; $sql=mysql_query("SELECT * FROM tb_berita order by tb_berita.baca ASC limit 5"); while($datapost=mysql_fetch_array($sql)){ ?>
<li><span class="sparkLineStats3"></span> 
<?=$datapost[title]?>: <span class="number"><?=$datapost[baca]?></span></li><? }?>
</ul>
</div><!-- End .sparkStats -->
</div>
				</div>
	
<div class="widget span4" ontablet="span4" ondesktop="span4">
<h2><span class="glyphicons charts"><i></i></span> Stats</h2>
<hr /><div class="content">
<div class="sparkLineStats">
<ul class="unstyled">
<li><span class="sparkLineStats3"></span> 
Stat: <span class="number"><?PHP echo "$all_hits"; ?></span></li>
<li><span class="sparkLineStats5"></span>Page Hits Today: 
 <span class="number"><?PHP echo "$hits_today"; ?></span></li>
<li>Total Page Hits Yesterday : <span class="number"><?PHP echo "$hits_yesterday"; ?></span></li>
</ul>
</div><!-- End .sparkStats -->
</div>
</div></div><!--/span-->

<script type="text/javascript">
					$(function () {
							$('#statistik').highcharts({
								chart: {
									type: 'line',
									marginRight: 50,
									marginBottom: 25
								},
								title: {
									text: 'Dately Average Page Hits',
									x: -20 //center
								},
								subtitle: {
									text: 'Source: megasoft-id.com',
									x: -20
								},
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
					title: {
						text: 'Statistic Browser use by user'
					},
					tooltip: {
						pointFormat: '{series.name}: <b>{point.percentage}%</b>',
						percentageDecimals: 0
					},
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
<!--<script src="<?PHP echo $nama_folder?>plugin/highcharts/highcharts.js"></script>
<script src="<?PHP echo $nama_folder?>plugin/highcharts/modules/exporting.js"></script>
<script src="<?PHP echo $nama_folder?>js/jquery.js"></script> -->

			
	