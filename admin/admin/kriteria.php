<?php
include_once("../library/koneksi.php");
include_once("tglindo.php");

?>

<div class="panel panel-default">
	<div class="panel-heading">
		Data Kriteria
	</div>
	
	<div class="panel-body">
	<a href="?menu=inputkriteria" class="btn btn-info " > Tambah Data </a><br><br>
		<div class="table-responsive">
		
			<table width="1109" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
					<th width="10"><div align="center">No</div></th>
					
					<th width="105"><div align="center">Kriteria </div></th>
					<th width="98"><div align="center">Bobot</div></th>
				
						
					  <th width="45"><div align="center">Aksi</div></th>
					</tr>
				</thead>
			<?php
				$pasienSql = "SELECT * FROM kriteria ORDER BY id_kriteria DESC";
				$pasienQry = mysql_query($pasienSql, $server)  or die ("Query pasien salah : ".mysql_error());
				$nomor  = 0; 
				while ($pasien = mysql_fetch_array($pasienQry)) {
				$nomor++;
			?>
				<tbody>
					<tr>
						<td><?php echo $nomor;?></td>
						
						
						<td><div align="center" ><?php echo $pasien['nama_kriteria'];?></div></td>
						<td><div align="center"><?php echo $pasien['bobot'];?></div></td>
						
					
						
						<td>
						  <div class='btn-group'>
						  <a href="?menu=hapus_kriteria&aksi=hapus&nmr=<?php echo $pasien['id_kriteria']; ?>" class="btn btn-xs btn-danger tipsy-kiri-atas" title="Hapus Data Ini" onclick="return confirm('ANDA YAKIN AKAN MENGHAPUS DATA PENTING INI ... ?')"><i class="icon-remove icon-white"></i></a> 
						  <a href="?menu=edit_kriteria&nmr=<?php echo $pasien['id_kriteria']; ?>" class="btn btn-xs btn-info tipsy-kiri-atas" title='Edit Data ini'> <i class="icon-edit icon-white"></i> </a>						  </div>						</td>
					</tr>
				</tbody>
			<?php } ?>
					
		  </table>
		</div>
	</div>
</div>