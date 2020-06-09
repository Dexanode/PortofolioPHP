<?php
include_once("../library/koneksi.php");
$sql_edit = mysql_query("SELECT * FROM kriteria WHERE id_kriteria='$_GET[nmr]'");
$editDb  =  mysql_fetch_array($sql_edit);
?>
<div class="box">

	<header>
		<h5 align="center" >Data Kriteria</h5>
	</header>
		<div class="body">
				<form action="" method="post" class="form-horizontal">
			<div class="form-group">
							<label class="control-label col-lg-4">Nama Kriteria</label>
							<div class="col-lg-4">
								<input type="hidden" name="id" value="<?php  $editDb["id_kriteria"];?>" autofocus required class="form-control" />
								<input type="text" name="nm" value="<?php echo $editDb["nama_kriteria"];?>" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Bobot</label>
							<div class="col-lg-4">
								<input type="text" name="al" value="<?php echo $editDb["bobot"];?>" autofocus required class="form-control" />
							</div>
						</div>
						
						
						
						
					<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Simpan" class="btn btn-primary" /> <a href="?menu=datakeluarga" class="btn btn-warning">Batal</a>
						</div>
					</form>
	</div>
</div>
					</form>
	</div>
</div>
<?php
error_reporting(0);
if(isset($_POST['pasien'])){
include_once("../library/koneksi.php");
			mysql_query("update kriteria set 
			nama_kriteria='$_POST[nm]',
			bobot='$_POST[al]'
			 where id_kriteria='$_GET[nmr]'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=kriteria'>";
}
?>