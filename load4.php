<?php

include "koneksi.php";

$cekfirst = mysql_query ("SELECT id, panggil, loket FROM tbl_bpjs_rajal where loket = 4 and panggil = 2 limit 1");
$shwfirst = mysql_fetch_array ($cekfirst);
$cek = mysql_query ("SELECT id, panggil, loket FROM tbl_bpjs_rajal where loket = 4 and panggil = 1 order by id desc limit 1");
$shw = mysql_fetch_array ($cek);
$date = date("l");
$hour = date("H:i");
$cenvertedTime = date('H:i',strtotime('+10 minutes',strtotime($hour)));
$op = "13:00";
$cl = "07:00";
						
if ($shwfirst['loket'] == 4 and $shwfirst['panggil'] == 2){
	echo"	
	<h1 style='font-size:800%; text-align: center; margin:0; line-height: 0.7;letter-spacing: 8px'>B$shwfirst[id]</h1>";
}else if ($shw['loket'] == 4 and $shw['panggil'] == 1){
	if ($cenvertedTime > $op || $cenvertedTime < $cl){
	echo"	
	<h1 style='font-size:800%; text-align: center; margin:0; line-height: 0.7; letter-spacing: 8px'>-</h1>";
	} else {
	echo"	
	<h1 style='font-size:800%; text-align: center; margin:0; line-height: 0.7; letter-spacing: 8px'>B$shw[id]</h1>";
	} 
}
?>