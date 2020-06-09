<?php
session_start();
	if($_POST["pasien"]){
			include_once("../library/koneksi.php");
$nipa=$_POST["ipa"] ;
$nips=$_POST["ips"] ;
$psiko=$_POST["psikotest"] ;
$mipa=$_POST["mipa"] ;
$mips=$_POST["mips"] ;

if ($mipa == 'Sangat Minat' )
{
$nh = '10' ;
}
else if ($mipa == 'Minat' )
{
$nh = '8' ;
}
else if ($mipa == 'Cukup' )
{
$nh = '6' ;
}
else if ($mipa == 'Kurang Minat' )
{
$nh = '5' ;
}
else if ($mipa == 'Tidak Minat' )
{
$nh = '2' ;
}

if ($mips == 'Sangat Minat' )
{
$ns = '10' ;
}
else if ($mips == 'Minat' )
{
$ns = '8' ;
}
else if ($mips == 'Cukup' )
{
$ns = '6' ;
}
else if ($mips == 'Kurang Minat' )
{
$ns = '5' ;
}
else if ($mips == 'Tidak Minat' )
{
$ns = '2' ;
}

$ipa=($nipa+$psiko+$nh)/2;
$ips=($nips+$psiko+$ns)/2;

$hasil=max($ipa,$ips);
if ($hasil == $ipa )
{
$ck = 'IPA' ;
}
else if ($hasil == $ips )
{
$ck = 'IPS' ;
}

			mysql_query("insert into siswa set nis='".$_POST["nis"]."', nama='".$_POST["nama"]."', kelas='".$_POST["kelas"]."', ipa='".$_POST["ipa"]."', ips='".$_POST["ips"]."', psikotest='".$_POST["psikotest"]."',mipa='".$_POST["mipa"]."',mips='".$_POST["mips"]."',hasil='".$ck."',nipa='".$ipa."',nips='".$ips."'");
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
		<h5>Data Siswa</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal">
			<div class="form-group">
							<label class="control-label col-lg-4">Nis</label>
							<div class="col-lg-4">
								<input type="text" name="nis" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nama Siswa</label>
							<div class="col-lg-4">
								<input type="text" name="nama" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Kelas</label>
							<div class="col-lg-4">
								<input type="text" name="kelas" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nilai Rata-Rata IPA</label>
							<div class="col-lg-4">
								<input type="text" name="ipa" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nilai Rata-Rata IPS</label>
							<div class="col-lg-4">
								<input type="text" name="ips" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Nilai Psikotest</label>
							<div class="col-lg-4">
								<input type="text" name="psikotest" autofocus required class="form-control" />
							</div>
						</div>
						
						<div class="form-group">
							<label class="control-label col-lg-4">Minat IPA</label>
							<div class="col-lg-4">
								<select name="mipa" class="form-control"><option value="">Silahkan Dipilih...</option>
								<option value="Sangat Minat">Sangat Minat</option>
								<option value="Minat">Minat</option>
								<option value="Cukup">Cukup</option>
								<option value="Kurang Minat">Kurang Minat</option>
								<option value="Tidak Minat">Tidak Minat</option></select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Minat IPS</label>
							<div class="col-lg-4">
								<select name="mips" class="form-control"><option value="">Silahkan Dipilih...</option>
								<option value="Sangat Minat">Sangat Minat</option>
								<option value="Minat">Minat</option>
								<option value="Cukup">Cukup</option>
								<option value="Kurang Minat">Kurang Minat</option>
								<option value="Tidak Minat">Tidak Minat</option></select>
							</div>
						</div>
						
						
						
						
						
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Simpan" class="btn btn-primary" /> <a href="?menu=datasiswa" class="btn btn-warning">Back</a>
						</div>

					</form>
	</div>
</div>