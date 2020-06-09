<?php
include_once("../library/koneksi.php");
include_once("tglindo.php");

#untuk paging (pembagian halamanan)
$row = 20;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM siswa";
$pageQry = mysql_query($pageSql, $server) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>
<p>
<div class="panel panel-default">
	<div class="panel-heading">
		Hasil Penjurusan SMA Dian Andalas Padang
	</div>
	<div class="panel-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
					<th><div align="center">No</div></th>
					<th><div align="center">Nis </div></th>
						<th><div align="center">Nama Siswa </div></th>
						<th><div align="center">Kelas</div></th>
						<th><div align="center">Rata-Rata IPA</div></th>
						<th><div align="center">Rata-Rata IPS</div></th>
						<th><div align="center">Nilai Psikotest</div></th>
						<th><div align="center">Minat IPA</div></th>
						<th><div align="center">Minat IPS </div></th>
						<th><div align="center">Rekomendasi Jurusan </div></th>
						
					</tr>
				</thead>
			<?php
				$pasienSql = "SELECT * FROM siswa ORDER BY nis DESC LIMIT $hal, $row";
				$pasienQry = mysql_query($pasienSql, $server)  or die ("Query pasien salah : ".mysql_error());
				$nomor  = 0; 
				while ($pasien = mysql_fetch_array($pasienQry)) {
				$nomor++;
			?>
				<tbody>
					<tr>
						<td><?php echo $nomor;?></td>
						<td><div align="center" ><?php echo $pasien['nis'];?></div></td>
						<td><div ><?php echo $pasien['nama'];?></div></td>
						<td><div align="center"><?php echo $pasien['kelas'];?></div></td>
						<td><div align="center"><?php echo $pasien['ipa'];?></div></td>
						<td><div align="center"><?php echo $pasien['ips'];?></div></td>
						<td><div align="center"><?php echo $pasien['psikotest'];?></div></td>
						<td><div align="center"><?php echo $pasien['mipa'];?></div></td>
						<td><div align="center"><?php echo $pasien['mips'];?></div></td>
						<td><div align="center"><?php echo $pasien['hasil'];?></div></td>
						
						
					</tr>
				</tbody>
			<?php } ?>
					<tr>
						<td colspan="10" align="right">
						<?php
						for($h = 1; $h <= $max; $h++){
							$list[$h] = $row*$h-$row;
							echo "<ul class='pagination pagination-sm'><li><a href='?menu=datasiswa&hal=$list[$h]'>$h</a></li></ul>";
						}
						?></td>
					</tr>
			</table>
			<a href="cetak.php" class="btn btn-success btn-rect" target="_blank"><i class='icon icon-white icon-print'></i> Cetak Laporan</a>
		</div>
	</div>
</div>