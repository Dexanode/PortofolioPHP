<?php
include_once("../library/koneksi.php");
include_once("tglindo.php");

#untuk paging (pembagian halamanan)
$row = 10;
$hal = isset($_GET['hal']) ? $_GET['hal'] : 0;
$pageSql = "SELECT * FROM keluarga";
$pageQry = mysql_query($pageSql, $server) or die ("error paging: ".mysql_error());
$jml	 = mysql_num_rows($pageQry);
$max	 = ceil($jml/$row);
?>

<div class="panel panel-default">
	<div class="panel-heading">
		Data Nasabah
	</div>
	
	<div class="panel-body">
	<a href="?menu=registrasi" class="btn btn-info " > Tambah Data </a><br><br>
		<div class="table-responsive">
		
			<table width="1109" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
					<th width="32"><div align="center">No</div></th>
					
					<th width="105"><div align="center">Nama </div></th>
					<th width="98"><div align="center">Jenis Kelamin</div></th>
					
					  <th width="106"><div align="center">Alamat </div></th>
						<th width="79"><div align="center">No Hp</div></th>
						
					  <th width="91"><div align="center">Jaminan</div></th>
					  <th width="98"><div align="center">Pekerjaan</div></th>
					  <th width="97"><div align="center">Jumlah Tanggungan</div></th>
					  <th width="131"><div align="center">Pendapatan</div></th>
					  <th width="179"><div align="center">Pinjaman</div></th>
						
						
					  <th width="45"><div align="center">Aksi</div></th>
					</tr>
				</thead>
			<?php
				$pasienSql = "SELECT * FROM keluarga ORDER BY id_keluarga DESC";
				$pasienQry = mysql_query($pasienSql, $server)  or die ("Query pasien salah : ".mysql_error());
				$nomor  = 0; 
				while ($pasien = mysql_fetch_array($pasienQry)) {
				$nomor++;
			?>
				<tbody>
					<tr>
						<td><?php echo $nomor;?></td>
						
						
						<td><div align="center" ><?php echo $pasien['Nama'];?></div></td>
						<td><div align="center"><?php echo $pasien['jk'];?></div></td>
						
						<td><div ><?php echo $pasien['Alamat'];?></div></td>
						<td><div align="center"><?php echo $pasien['NoKK'];?></div></td>
						<td><div align="center"><?php echo $pasien['Pendidikan_t'];?></div></td>
						<td><div align="center"><?php echo $pasien['Pekerjaan'];?></div></td>
						<td><div align="center"><?php echo $pasien['Jumla_anak'];?></div></td>
						<td><div align="center"><?php echo $pasien['Pendapatan'];?></div></td>
						<td><div align="center"><?php echo $pasien['Status_rumah'];?></div></td>
					
						
						<td>
						  <div class='btn-group'>
						  <a href="?menu=hapus_siswa&aksi=hapus&nmr=<?php echo $pasien['Id_keluarga']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="icon-remove icon-white"></i></a> 
						  <a href="?menu=edit_keluarga&nmr=<?php echo $pasien['Id_keluarga']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>						  </div>						</td>
					</tr>
				</tbody>
			<?php } ?>
					
		  </table>
		</div>
	</div>
</div>