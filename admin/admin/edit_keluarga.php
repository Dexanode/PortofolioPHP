<?php
include_once("../library/koneksi.php");
$sql_edit = mysql_query("SELECT * FROM keluarga WHERE Id_keluarga='$_GET[nmr]'");
$editDb  =  mysql_fetch_array($sql_edit);
?>
<div class="box">

	<header>
		<h5 align="center" >Data Penerimaan Jamskesmas</h5>
	</header>
		<div class="body">
				<form action="" method="post" class="form-horizontal">
			<div class="form-group">
							<label class="control-label col-lg-4">Nama</label>
							<div class="col-lg-4">
								<input type="hidden" name="id" value="<?php  $editDb["id_keluarga"];?>" autofocus required class="form-control" />
								<input type="text" name="nm" value="<?php echo $editDb["Nama"];?>" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Alamat</label>
							<div class="col-lg-4">
								<input type="text" name="al" value="<?php echo $editDb["Alamat"];?>" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">No Hp</label>
							<div class="col-lg-4">
								<input type="text" name="tel" value="<?php echo $editDb["NoKK"];?>" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Jenis Kelamin</label>
							<div class="col-lg-4">
								<select name="jk" class="form-control"><option value="<?php echo $editDb["jk"];?>"><?php echo $editDb["jk"];?></option>
								<option value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option></select>
								
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Jaminan</label>
							<div class="col-lg-4">
								<input type="text" name="pd" value="<?php echo $editDb["Pendidikan_t"];?>" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Pekerjaan</label>
							<div class="col-lg-4">
								<input type="text" name="pk" value="<?php echo $editDb["Pekerjaan"];?>" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Jumlah Tanggungan</label>
							<div class="col-lg-4">
								<input type="text" name="jma" value="<?php echo $editDb["Jumla_anak"];?>" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Pendapatan</label>
							<div class="col-lg-4">
								<input type="text" name="pdt" value="<?php echo $editDb["Pendapatan"];?>" autofocus required class="form-control" />
							</div>
						</div>
							<div class="form-group">
							<label class="control-label col-lg-4">Pinjaman</label>
							<div class="col-lg-4">
								<select name="st" class="form-control">
								  <option value="<?php echo $editDb["Status_rumah"];?>">&lt;?php echo $editDb[&quot;Status_rumah&quot;];?&gt;</option>
								  <option value="SC5&lt; 30.000.000" selected="selected">SC5&lt; 30.000.000</option>
								  <option value="50.000.000 &gt; SC5 &gt;=30.000.000">50.000.000 &gt; SC5 &gt;=30.000.000</option>
								  <option value="80.000.000 &gt; SC5 &gt;= 50.000.000">80.000.000 &gt; SC5 &gt;= 50.000.000</option>
								  <option value="100.000.000 &gt; SC5 &gt;= 80.000.000">100.000.000 &gt; SC5 &gt;= 80.000.000</option>
								  <option value="SC5 &gt;= 100.000.000">SC5 &gt;= 100.000.000</option>
                                                                                                                                </select>
								
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
			mysql_query("update keluarga set 
			Nama='$_POST[nm]',
			Alamat='$_POST[al]',
			NoKK='$_POST[tel]',
			jk='$_POST[jk]',
			Pendidikan_t='$_POST[pd]',
			Pekerjaan='$_POST[pk]',
			Jumla_anak='$_POST[jma]',
			Pendapatan='$_POST[pdt]',
			Status_rumah='$_POST[st]'
			 where Id_keluarga='$_GET[nmr]'");
			echo "<meta http-equiv='refresh' content='0; url=?menu=datakeluarga'>";
}
?>