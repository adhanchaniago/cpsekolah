<?PHP error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$all_hits = 0;
$today = date('Y')."-".date('m')."-".date('d');
#checking date----------------------------------------------------
$sql = mysql_query("select * from statistik where date='$today'");
$result = mysql_num_rows($sql);
#pemasukan data baru jika tanggal sekarang tidak ada di database--
if ($result==0){
//$q = "insert into statistik values('1', '$today')";
//mysql_query($q) or die(mysql_error());
}
else{
$data = mysql_fetch_array($sql);
$hits_today = $data['hits'];
$hits_today++;
//$sql = mysql_query("update statistik set hits='$hits_today' where date='$today'");
}
#all history page--------------------------------------------------
$sql = mysql_query("select * from statistik");
while ($data = (mysql_fetch_array($sql))){
$all_hits +=$data['hits'];
}
#------------------------------------------------------------------
#today-------------------------------------------------------------
$sql = mysql_query("select * from statistik where date='$today'");
$data = mysql_fetch_array($sql);
$hits_today = $data['hits'];
#-------------------------------------------------------------------
#yesterday----------------------------------------------------------
$yesterday = date("Y-m-d", strtotime("-1 day"));
$sql= mysql_query("select * from statistik where date='$yesterday'");
$data = mysql_fetch_array($sql);
$hits_yesterday = $data['hits'];
if (empty($hits_yesterday)){
$hits_yesterday = 0;
}
#-------------------------------------------------------------------
#Online----------------------------------------------------------

#--------------------------------------------------------------------
function selfURL() {
$s = empty($_SERVER["HTTPS"]) ? '' : ($_SERVER["HTTPS"] == "on") ? "s" : "";
$protocol = strleft(strtolower($_SERVER["SERVER_PROTOCOL"]), "/").$s;
$port = ($_SERVER["SERVER_PORT"] == "80") ? "" : (":".$_SERVER["SERVER_PORT"]);
return $protocol."://".$_SERVER['SERVER_NAME'].$port.$_SERVER['REQUEST_URI'];
}
function strleft($s1, $s2) { return substr($s1, 0, strpos($s1, $s2));
}
$my_url = selfURL();
//untuk pemasukan statistik Browser
//include("browser.lib.php");
//mysql_query("UPDATE `browser` SET `hits`=hits+1 where name='$input_ke_browser'");
?>
<?PHP 
function getBrowser()
{
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $bname = 'Unknown';
    $platform = 'Unknown';
    $version= "";
    if (preg_match('/linux/i', $u_agent)) {
        $platform = 'linux';
    }
    elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
        $platform = 'mac';
    }
    elseif (preg_match('/windows|win32/i', $u_agent)) {
        $platform = 'windows';
    }
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Internet Explorer';
        $ub = "MSIE";
    }
    elseif(preg_match('/Firefox/i',$u_agent))
    {
        $bname = 'Mozilla Firefox';
        $ub = "Firefox";
    }
    elseif(preg_match('/Chrome/i',$u_agent))
    {
        $bname = 'Google Chrome';
        $ub = "Chrome";
    }
    elseif(preg_match('/Safari/i',$u_agent))
    {
        $bname = 'Apple Safari';
        $ub = "Safari";
    }
    elseif(preg_match('/Opera/i',$u_agent))
    {
        $bname = 'Opera';
        $ub = "Opera";
    }
    elseif(preg_match('/Netscape/i',$u_agent))
    {
        $bname = 'Netscape';
        $ub = "Netscape";
    }
    $known = array('Version', $ub, 'other');
    $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
    if (!preg_match_all($pattern, $u_agent, $matches)) {
    }
    $i = count($matches['browser']);
    if ($i != 1) {
        if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
            $version= $matches['version'][0];
        }
        else {
            $version= $matches['version'][1];
        }
    }
    else {
        $version= $matches['version'][0];
    }
    if ($version==null || $version=="") {$version="?";}
   
    return array(
        'userAgent' => $u_agent,
        'name'      => $bname,
        'version'   => $version,
        'platform'  => $platform,
        'pattern'    => $pattern
    );
}
$ua=getBrowser();
$my_browser = strtolower($ua['name']." ".$ua['version']);
//echo $my_browser;
if (substr_count($my_browser,"firefox") > 0){
$input_ke_browser = "Firefox";
}
else if (substr_count($my_browser,"chrome") > 0){
$input_ke_browser = "Chrome";
}
else if (substr_count($my_browser,"opera") > 0){
$input_ke_browser = "Opera";
}
else if (substr_count($my_browser,"ie") > 0){
$input_ke_browser = "IE";
}
else if (substr_count($my_browser,"safari") > 0){
$input_ke_browser = "Safari";
}
else{
$input_ke_browser = "Others";
}
?>


