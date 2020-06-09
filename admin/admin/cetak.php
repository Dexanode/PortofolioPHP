<?php
include_once("../library/koneksi.php");
include_once("tglindo.php");

$tgl = date('Y');

?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->
<head>
    <meta charset="UTF-8" />
    <title>Administrator</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/theme.css" />
    <link rel="stylesheet" href="../css/MoneAdmin.css" />
    <link rel="stylesheet" href="../css/font-awesome.css" />
	<link rel="stylesheet" href="../css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="../dist/sweetalert.css">
	<script type="text/javascript" src="../dist/sweetalert.min.js"></script>
    <!--END GLOBAL STYLES -->
</head>
<body class="padTop53">
	<div id="wrap">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>

<div class="panel panel-default">
	<div class="panel-heading">
		<p align="center" > <span class="style1"><b>BANK BTPN PADANG</b></span> <br> Laporan Pemberian Kredit <hr></p>
	</div>



<div class="panel panel-default">
	<div class="panel-heading">
		
	<?php
	//Gunakan Koneksi

	//Buat array bobot { C1 = 35%; C2 = 25%; C3 = 25%; dan C4 = 15%.}
	$bobot = array(5, 3, 2, 1, 0);

	//Buat fungsi tampilkan nama
	function getNama($id){
		$q =mysql_query("SELECT * from keluarga where id_keluarga = '$id'");
		$d = mysql_fetch_array($q);
		return $d['Nama'];
		
	}
	
		//Buat fungsi tampilkan nama
	function getal($id){
		$q =mysql_query("SELECT * from keluarga where id_keluarga = '$id'");
		$d = mysql_fetch_array($q);
		return $d['Alamat'];
		
	}
	
	function getjk($id){
		$q =mysql_query("SELECT * from keluarga where id_keluarga = '$id'");
		$d = mysql_fetch_array($q);
		return $d['jk'];
		
	}
	function gethp($id){
		$q =mysql_query("SELECT * from keluarga where id_keluarga = '$id'");
		$d = mysql_fetch_array($q);
		return $d['NoKK'];
		
	}
	
	//Setelah bobot terbuat select semua di tabel Matrik
	$sql = mysql_query("SELECT * FROM tbmatrik");
	//Buat tabel untuk menampilkan hasil
	
	

	//Lakukan Normalisasi dengan rumus pada langkah 2
	//Cari Max atau min dari tiap kolom Matrik
	$crMax = mysql_query("SELECT max(Kriteria1) as maxK1,
						max(Kriteria2) as maxK2,
						max(Kriteria3) as maxK3,
						max(Kriteria4) as maxK4,
						max(Kriteria5) as maxK5
					
			FROM tbmatrik");
	$max = mysql_fetch_array($crMax);
	

	//Hitung Normalisasi tiap Elemen
	$sql2 = mysql_query("SELECT * FROM tbmatrik");
	//Buat tabel untuk menampilkan hasil
	" <br>";
	

	//Proses perangkingan dengan rumus langkah 3
	$sqlk = mysql_query("SELECT * FROM tbmatrik order by nilai DESC");
	$sql3 = mysql_query("SELECT * FROM tbmatrik order by nilai DESC limit 10");
	//Buat tabel untuk menampilkan hasil
	

	//zhe o
	while ($dtz = mysql_fetch_array($sqlk)) {
		$idr=$dtz['idMatrik'];
		round($q=
			(($dtz['Kriteria1']/$max['maxK1'])*5)+
			(($dtz['Kriteria2']/$max['maxK2'])*4)+
			(($dtz['Kriteria3']/$max['maxK3'])*4)+
			(($dtz['Kriteria4']/$max['maxK4'])*4)+
			(($dtz['Kriteria5']/$max['maxK5'])*3),2)."</td>";
			
			$sql="update tbmatrik set nilai='$q' where idMatrik='$idr';";
			
			$jalan=mysql_query($sql);
			
			
			
			if($q>=15){
			$k='Diterima';
			}else{
			$k='Ditolak';
			}
			
	
	}
	
	//zhe
	
	
	
	echo" <br>";
	echo "
	<table width='100%' border='1' align='center' class='table table-striped table-bordered table-hover'>
		<tr>
			<td>No</td><td>Nama</td>
			<td>Jenis Kelamin</td>
			<td>No Hp</td>
			<td>Alamat</td>
			<td>Nilai</td>
			
		</tr>
		";
		
	
		
		
		
		
		
	$no = 1;
	//Kita gunakan rumus (Normalisasi x bobot)
	
	
	
		
	
	
	while ($dt3 = mysql_fetch_array($sql3)) {
		echo "<tr>
			<td>$no</td><td>".getNama($dt3['id_keluarga'])."</td>
			<td>".getjk($dt3['id_keluarga'])."</td>
			<td>".gethp($dt3['id_keluarga'])."</td>
			<td>".getal($dt3['id_keluarga'])."</td>
			
			<td>"
			
			.round($q=
			(($dt3['Kriteria1']/$max['maxK1'])*5)+
			(($dt3['Kriteria2']/$max['maxK2'])*4)+
			(($dt3['Kriteria3']/$max['maxK3'])*4)+
			(($dt3['Kriteria4']/$max['maxK4'])*4)+
			(($dt3['Kriteria5']/$max['maxK5'])*3),2)."</td>";
			if($q>=15){
			$k='Diterima';
			}else{
			$k='Ditolak';
			}
			echo"
			
			
		</tr>";
	$no++;
	}
	
	echo "</table>";
	
?>
<a href="cetak_laporan.php" class="btn btn-info" target="_blank"><i class="icon-print"></i> Print</a>
	</div>
</div>