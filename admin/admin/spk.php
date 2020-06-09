<?php
include_once("../library/koneksi.php");
include_once("tglindo.php");


?>
<p>

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
	
	//Setelah bobot terbuat select semua di tabel Matrik
	$sql = mysql_query("SELECT * FROM tbmatrik");
	//Buat tabel untuk menampilkan hasil
	
	echo "<H3>Matrik Awal</H3>
	<table class='table table-striped table-bordered table-hover' >
		<tr>
			<td>No</td><td>Nama</td><td>C1</td><td>C2</td><td>C3</td><td>C4</td><td>C5</td>
		</tr>
		";
	$no = 1;
	while ($dt = mysql_fetch_array($sql)) {
		echo "<tr>
			<td>$no</td><td>".getNama($dt['id_keluarga'])."</td><td>$dt[Kriteria1]</td><td>$dt[Kriteria2]</td><td>$dt[Kriteria3]</td><td>$dt[Kriteria4]</td><td>$dt[Kriteria5]</td>
		</tr>";
	$no++;
	}
	echo "</table>";

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
	echo" <br>";
	echo "<H3>Matrik Normalisasi</H3>
	<table class='table table-striped table-bordered table-hover'>
		<tr>
			<td>No</td><td>Nama</td><td>C1</td><td>C2</td><td>C3</td><td>C4</td><td>C5</td>
		</tr>
		";
	$no = 1;
	while ($dt2 = mysql_fetch_array($sql2)) {
		echo "<tr>
			<td>$no</td><td>".getNama($dt2['id_keluarga'])."</td><td>".round($dt2['Kriteria1']/$max['maxK1'],2)."</td><td>".round($dt2['Kriteria2']/$max['maxK2'],2)."</td><td>".round($dt2['Kriteria3']/$max['maxK3'],2)."</td><td>".round($dt2['Kriteria4']/$max['maxK4'],2)."</td><td>".round($dt2['Kriteria5']/$max['maxK5'],2)."</td>
		</tr>";
	$no++;
	}
	echo "</table>";

	//Proses perangkingan dengan rumus langkah 3
	$sql3 = mysql_query("SELECT * FROM tbmatrik");
	//Buat tabel untuk menampilkan hasil
	echo" <br>";
	echo "<H3>Hasil Analisa</H3>
	<table class='table table-striped table-bordered table-hover'>
		<tr>
			<td>No</td><td>Nama</td><td>Nilai</td>
		</tr>
		";
	$no = 1;
	//Kita gunakan rumus (Normalisasi x bobot)
	while ($dt3 = mysql_fetch_array($sql3)) {
		echo "<tr>
			<td>$no</td><td>".getNama($dt3['id_keluarga'])."</td>
			<td>"
			.round(
			(($dt3['Kriteria1']/$max['maxK1'])*5)+
			(($dt3['Kriteria2']/$max['maxK2'])*4)+
			(($dt3['Kriteria3']/$max['maxK3'])*4)+
			(($dt3['Kriteria4']/$max['maxK4'])*4)+
			(($dt3['Kriteria5']/$max['maxK5'])*3),2)."</td>
		</tr>";
	$no++;
	}
	echo "</table>";

?>
<a href="proses.php" class="btn btn-warning">Simpan</a>
	</div>
</div>