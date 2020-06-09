<?php
include_once("../library/koneksi.php");
session_start();
	if($_POST["pasien"]){
			include_once("../library/koneksi.php");


			mysql_query("insert into kriteria values('','$_POST[nama]','$_POST[bobot]')");
			echo"<script>alert('Data Berhasil di Proses');window.location.href='index.php?menu=kriteria'</script>"; 
			echo("<script>
		

swal('Good Job!', 'Data anda sukses tersimpan', 'success');
				
		</script>");
			echo "<center><div class='alert alert-success alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Berhasil menambah ke database!!</b>
			</div><center>
			
			";
			
	}else if(isset($_POST["pasien"])){
		echo "<center><div class='alert alert-warning alert-dismissable'>
                  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					<b>Gagal menambah ke database!!</b>
			</div><center>";
	}
?>
<div class="box">

	<header>
		<h5>Data Kriteria</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal">
			

<div class="form-group">
							<label class="control-label col-lg-4">NAMA KRITERIA</label>
							<div class="col-lg-4">
								 <input type='text' data-field="x_username" id="nm" name='nama'  placeholder="Kriteria" class="form-control">
							</div>
						</div>
					
					<div class="form-group">
							<label class="control-label col-lg-4">BOBOT</label>
							<div class="col-lg-4">
								  <input type='text' data-field="x_username" id="nm" name='bobot'  placeholder="Bobot" class="form-control"> 
							</div>
						</div>
		
						
						
						
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Simpan" class="btn btn-primary" /> 
						</div>

					</form>
	</div>
</div>