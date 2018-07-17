<?php
date_default_timezone_set('Asia/Islamabad');
$yx = opendir('sufixd');
while($isi=readdir($yx))
if($isi != '.' && $isi != '..'){ 
$token=$isi;

$jam=array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','00',);
$sapa=array('Met Dini Hari ','Met Dini Hari ','Met Dini Hari ','Met Dini Hari ','Met Pagi ','Met Pagi ','Met Pagi ','Met Pagi ','Met Pagi ','Met Jelang Siang ','Met Siang ','Met Siang ','Met Siang ','Met Siang ','Met Sore ','Met Sore ','Met Petang ','Met Petang ','Met Malem ','Met Malem ','Met Malem ','Met Malem ','Met Malem ','Met Malem ','Met Malem ',);
$ucapan = gmdate('H',time()+7*3600);
$ucapan = str_replace($jam,$sapa,$ucapan);
$me = json_decode(auto('https://graph.facebook.com/me?access_token='.$access_token.'&fields=id,name'),true);$tio = explode(' ',$me[name]); 

$name= json_decode(auto('https://graph.facebook.com/'.$stat[data][$i-1][from][id].'?fields=name&access_token='.$token),true);
$nam=$name[name]; $ama= explode(' ',$nam); $nama=$ama[0]; $mr=''.$nama;
$me= json_decode(auto('https://graph.facebook.com/me?access_token='.$token),true);
$stat= json_decode(auto('https://graph.facebook.com/me/home?fields=id,from,comments&limit=01&access_token='.$token),true);
for($i=1;$i<=count($stat[data]);$i++){ 
$x=$stat[data][$i-1][id].'~'; 
$y= fopen('komen.txt','a');
fwrite($y,$x); fclose($y);

$hari=gmdate("D", time()+60*60*7); 
if((gmdate("D", time()+60*60*7))=="Sun"){ $hari="Sunday"; } 
if((gmdate("D", time()+60*60*7))=="Mon"){ $hari="Monday"; } 
if((gmdate("D", time()+60*60*7))=="Tue"){ $hari="Tuesday"; } 
if((gmdate("D", time()+60*60*7))=="Wed"){ $hari="Wednesday"; } 
if((gmdate("D", time()+60*60*7))=="Thu"){ $hari="Thursday"; } 
if((gmdate("D", time()+60*60*7))=="Fri"){ $hari="Friday"; } 
if((gmdate("D", time()+60*60*7))=="Sat"){ $hari="Saturday"; } 
$jam=" ".gmdate("g:i a", time()+60*60*7); 
$tgl=" ".gmdate("j - m - Y", time()+60*60*7); 
$aiueo = array('A','U','E','O','a','u','e','o',);
$uuu = array('i','i','i','i','i','i','i','i',);
$inc=array('emo_batas.php',);
include $inc[rand(0,count($inc)-1)];
$spatubot = $text[rand(0,count($text)-1)];$inc=array('emo_batas1.php',);
include $inc[rand(0,count($inc)-1)];
$paiton1 = $text1[rand(0,count($text1)-1)];$inc=array('motivasi.php',);
include $inc[rand(0,count($inc)-1)];
$pitan3 = $text[rand(0,count($text)-1)];
$message1 = $arr_mess[rand(0,count($arr_mess)-1)];

$text = array(
'   
'.$spatubot.'

📝'.$pitan3.'

'.$paiton1.' 

💀 Site ~> CHBOTTER-GREETING,TK 💻   ', 
);

$comments = $text[rand(0,count($text)-1)];
$stickers= array('184003212217334', '1616636901740479', '383649078463198','383649128463193', '553453268115348', '396449427165830', '155884458459895', '155886988459642', '155900991791575', '1747083968936188', '1747084802269438',);
$mess=$stickers[rand(0,count($stickers)-1)];
$reaction = $react[rand(0,count($react)-1)];

auto('https://graph.facebook.com/'.$stat[data][$i-1][id].'/comments?message='.urlencode($comments).'&attachment_id='.$mess.'&access_token='.$token.'&method=POST');
echo '<center><hr>Done To => '.$stat[data][$i-1][from][name].' </hr></center>';
}
}

function auto($url) {
$curl = curl_init();
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl,CURLOPT_URL, $url);
$ch = curl_exec($curl);
curl_close($curl); 
return $ch;
}

?>