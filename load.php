<?php

include "koneksi.php";

$cekfirst = mysql_query ("SELECT id, panggil, loket FROM tbl_umum where loket = 1 and panggil = 2 limit 1");
$shwfirst = mysql_fetch_array ($cekfirst);
$cek = mysql_query ("SELECT id, panggil, loket FROM tbl_umum where loket = 1 and panggil = 1 order by id desc limit 1");
$shw = mysql_fetch_array ($cek);
		
if ($shwfirst['loket'] == 1 and $shwfirst['panggil'] == 2){
	echo"	
	<h1 style='font-size:800%; text-align: center; margin:0; line-height: 0.7;letter-spacing: 8px'>A$shwfirst[id]</h1>";
}else if ($shw['loket'] == 1 and $shw['panggil'] == 1){
	echo"	
	<h1 style='font-size:800%; text-align: center; margin:0; line-height: 0.7;letter-spacing: 8px'>A$shw[id]</h1>";
} 
?>