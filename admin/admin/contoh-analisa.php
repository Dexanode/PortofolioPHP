<div class='alert alert-info'>Contoh Hasil Analisa Data menentukan Jurusan Terbaik Atas Nama : <?php echo "<b>Robby Prihandaya</a></b>"; ?></div>

<?php
	function tampiltabel($arr)
	{
		echo "<table style='border:1px solid #c1c1c1;' class='table table-bordered table-striped'>";
		  for ($i=0;$i<count($arr);$i++)
		  {
		  echo '<tr>';
			  for ($j=0;$j<count($arr[$i]);$j++)
			  {
			    echo '<td >'.$arr[$i][$j].'</td>';
			  }
		  echo '</tr>';
		  }
		echo '</table>';
	}

	function tampilbaris($arr)
	{
		echo "<table style='border:1px solid #c1c1c1;' class='table table-bordered table-striped'>";
		echo '<tr>';
			  for ($i=0;$i<count($arr);$i++)
			  {
			    echo '<td style="width:20%">'.$arr[$i].'</td>';
			  }
		echo "</tr>";
		echo '</table>';
	}

	function tampilkolom($arr)
	{
		echo "<table style='border:1px solid #c1c1c1;' class='table table-bordered table-striped'>";
	  for ($i=0;$i<count($arr);$i++)
	  {
			echo '<tr>';
			    echo '<td >'.$arr[$i].'</td>';
			echo "</tr>";
	   }
		echo '</table>';
	}
	
	$alternatif = array(); 
	
	$queryalternatif = mysql_query("SELECT * FROM rb_alternatif ORDER BY id_alternatif");
	$i=0;
	while ($dataalternatif = mysql_fetch_array($queryalternatif))
	{
		$alternatif[$i] = $dataalternatif['nama_alternatif'];
		$i++;
	}
	
	$kriteria = array();
	
	$costbenefit = array(); 
	
	$kepentingan = array();
	
	$querykriteria = mysql_query("SELECT * FROM rb_kriteria ORDER BY id_kriteria");
	$i=0;
	while ($datakriteria = mysql_fetch_array($querykriteria))
	{
		$kriteria[$i] = $datakriteria['nama_kriteria'];
		$costbenefit[$i] = $datakriteria['costbenefit'];
		$kepentingan[$i] = $datakriteria['kepentingan'];
		$i++;
	}
	
	$alternatifkriteria = array();
	
	$queryalternatif = mysql_query("SELECT * FROM rb_alternatif ORDER BY id_alternatif");
	$i=0;
	while ($dataalternatif = mysql_fetch_array($queryalternatif))
	{
		$querykriteria = mysql_query("SELECT * FROM rb_kriteria ORDER BY id_kriteria");
		$j=0;
		while ($datakriteria = mysql_fetch_array($querykriteria))
		{
			$queryalternatifkriteria = mysql_query("SELECT * FROM rb_alternatif_kriteria WHERE id_alternatif = '$dataalternatif[id_alternatif]' AND id_kriteria = '$datakriteria[id_kriteria]' AND username='robby'");
			$dataalternatifkriteria = mysql_fetch_array($queryalternatifkriteria);
			
			$alternatifkriteria[$i][$j] = $dataalternatifkriteria['nilai'];
			$j++;
		}
		$i++;
	}
	
	$pembagi = array();
	
	for ($i=0;$i<count($kriteria);$i++)
	{
		$pembagi[$i] = 0;
	
			if ($costbenefit[$i] == 'cost')
			{
				for ($j=0;$j<count($alternatif);$j++)
				{
					if ($j == 0) 
					{ 
						$pembagi[$i] = $alternatifkriteria[$j][$i];
					}
					else 
					{
						if ($pembagi[$i] > $alternatifkriteria[$j][$i])
						{
							$pembagi[$i] = $alternatifkriteria[$j][$i];
						}
					}
				}
			}
			else 
			{
				for ($j=0;$j<count($alternatif);$j++)
				{
					if ($j == 0) 
					{ 
						$pembagi[$i] = $alternatifkriteria[$j][$i];
					}
					else 
					{
						if ($pembagi[$i] < $alternatifkriteria[$j][$i])
						{
							$pembagi[$i] = $alternatifkriteria[$j][$i];
						}
					}
				}
			}
		
	}
	
	$normalisasi = array();
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		for ($j=0;$j<count($kriteria);$j++)
		{
			if ($costbenefit[$j] == 'cost')
			{
				$normalisasi[$i][$j] = $pembagi[$j] / $alternatifkriteria[$i][$j];
			}
			else 
			{
				if ($alternatifkriteria[$i][$j] == ''){
					echo "";
				}else{
				$normalisasi[$i][$j] = $alternatifkriteria[$i][$j] / $pembagi[$j];
				}
			}
		}
	}
	
	$hasil = array();
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		$hasil[$i] = 0;
		for ($j=0;$j<count($kriteria);$j++)
		{
			$hasil[$i] = $hasil[$i] + ($normalisasi[$i][$j] * $kepentingan[$j]);
		}
	}
	
	$alternatifrangking = array();
	$hasilrangking = array();
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		$hasilrangking[$i] = $hasil[$i];
		$alternatifrangking[$i] = $alternatif[$i];
	}
	
	for ($i=0;$i<count($alternatif);$i++)
	{
		for ($j=$i;$j<count($alternatif);$j++)
		{
			if ($hasilrangking[$j] > $hasilrangking[$i])
			{
				$tmphasil = $hasilrangking[$i];
				$tmpalternatif = $alternatifrangking[$i];
				$hasilrangking[$i] = $hasilrangking[$j];
				$alternatifrangking[$i] = $alternatifrangking[$j];
				$hasilrangking[$j] = $tmphasil;
				$alternatifrangking[$j] = $tmpalternatif;
			}
		}
	}
?>
<div id="perhitungan" style="display:none;">
<br />
<div class='alert alert-danger'>Alternatif </div>
<?php tampilbaris($alternatif); ?>
<br />
<div class='alert alert-danger'>Kriteria dan Kepentingan </div>
<?php tampilbaris($kriteria); ?>
<?php tampilbaris($kepentingan); ?>
<br />
<div class='alert alert-danger'>Alternatifkriteria </div>
<?php tampiltabel($alternatifkriteria); ?>
<br />
<div class='alert alert-danger'>Pembagi </div>
<?php tampilbaris($pembagi); ?>
<br />
<div class='alert alert-danger'>Normalisasi </div>
<?php tampiltabel($normalisasi); ?>
<br />
<div class='alert alert-danger'>Hasil </div>
<?php tampilkolom($hasil); ?>
<br />
<div class='alert alert-danger'>Hasil Ranking </div>
<?php tampilkolom($hasilrangking); ?>
<br />
<div class='alert alert-danger'>Alternatif Ranking </div>
<?php tampilkolom($alternatifrangking); ?>
<br />
<div class='alert alert-danger'>Alternatif Terbaik = <?php echo $alternatifrangking[0]; ?> Dengan Nilai Terbesar = <?php echo $hasilrangking[0]; ?></div>
</div>

<input type="button" class='btn btn-primary' value="Lihat Perhitungan Manual" onclick="document.getElementById('perhitungan').style.display='block';"/><hr>
<table style='border:1px solid #c1c1c1;' class='table table-bordered table-striped'>
	<tr>
    	<th >Ranking</th>
    	<th >Alternatif</th>
    	<th >Nilai</th>
    </tr>
<?php
	for ($i=0;$i<count($hasilrangking);$i++){	
?>
    <tr>
    	<td ><?php echo ($i+1); ?></td>
    	<td ><?php echo $alternatifrangking[$i]; ?></td>
    	<td ><?php echo $hasilrangking[$i]; ?></td>
    </tr>
<?php
	}
?>
</table>

<div class='alert alert-danger'>Alternatif Jurusan Terbaik = <?php echo $alternatifrangking[0]; ?> dengan Nilai Terbesar = <?php echo $hasilrangking[0]; ?> </div>
<?php
$jumlahnya = mysql_query("SELECT * FROM rb_hasil_analisa where username='robby'");
$total = mysql_num_rows($jumlahnya);
if ($total >= 1){
	mysql_query("UPDATE rb_hasil_analisa set jurusan = '".$alternatifrangking[0]."', nilai = '".$hasilrangking[0]."' where username='robby'");
}else{
	mysql_query("INSERT INTO rb_hasil_analisa (username, jurusan, nilai) VALUES ('robby','".$alternatifrangking[0]."','".$hasilrangking[0]."')");
}
?>