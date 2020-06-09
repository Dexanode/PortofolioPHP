<?php
include_once("../library/koneksi.php");
session_start();
	if($_POST["pasien"]){
			include_once("../library/koneksi.php");
$id=$_POST["nim"] ;
$pendidikan=$_POST["nm"] ;
$pekerjaan=$_POST["jrsn"] ;
$anak=$_POST["jml"] ;
$pendapatan=$_POST["pendapatan"] ;
$rumah=$_POST["status"] ;

if($pendidikan=='Sertifikat rumah'){
$khasiat='5';
} else if($pendidikan=='Sertifikat tanah'){
$khasiat='4';
} else if($pendidikan=='BPKB Mobil'){
$khasiat='3';
} else if($pendidikan=='BPKB Motor'){
$khasiat='2';
} 

if($pekerjaan=='Honorer'){
$t_pekerjaan='1';
} else if($pekerjaan=='Petani'){
$t_pekerjaan='2';
} else if($pekerjaan=='Wirausaha'){
$t_pekerjaan='3';
} else if($pekerjaan=='P.Swasta'){
$t_pekerjaan='5';
} else if($pekerjaan=='PNS'){
$t_pekerjaan='4';
}

if($anak=='1 orang'){
$t_anak='5';
} else if($anak=='2 orang'){
$t_anak='4';
} else if($anak=='3 orang'){
$t_anak='3';
} else if($anak=='4 orang'){
$t_anak='2';
} else if($anak=='>= 5 orang'){
$t_anak='1';
} 

if($pendapatan=='P <= 4.100.000'){
$t_pendapatan='5';
} else if($pendapatan=='4.000.000 > P >= 3.100.000'){
$t_pendapatan='4';
} else if($pendapatan=='3.000.000 > P >= 2.100.000'){
$t_pendapatan='3';
} else if($pendapatan=='2.000.000 > P >=1.100.000'){
$t_pendapatan='2';
} else if($pendapatan=='P <= 1.000.000'){
$t_pendapatan='1';
}

if($rumah=='P <= 100.000.000'){
$t_rumah='1';
} else if($rumah=='100.000.000 > P >= 80.000.000'){
$t_rumah='2';
}  else if($rumah=='80.000.000 > P >= 50.000.000'){
$t_rumah='3';
}  else if($rumah=='50.000.000 > P >=30.000.000'){
$t_rumah='4';
}  else if($rumah=='P <=30.000.000'){
$t_rumah='5';
}

			mysql_query("insert into tbmatrik values('','$id','$t_pendapatan','$t_pekerjaan','$t_anak','$khasiat','$t_rumah','')");
			echo"<script>alert('Data Berhasil di Proses');window.location.href='index.php?menu=spk'</script>"; 
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
		<h5>Data Matrik</h5>
	</header>
		<div class="body">
			<form action="" method="post" class="form-horizontal">
			

<div class="form-group">
							<label class="control-label col-lg-4">NAMA KEPALA KELUARGA</label>
							<div class="col-lg-4">
								<select name="nim" id="nim" onchange="changeValue(this.value)" class="form-control" >
        <option value=0>-Pilih-</option>
        <?php
    $result = mysql_query("select * from keluarga");   
    $jsArray = "var dtMhs = new Array();\n";       
    while ($row = mysql_fetch_array($result)) {   
        echo '<option value="' . $row['Id_keluarga'] . '">' . $row['Nama'] . '</option>';   
        $jsArray .= "dtMhs['" . $row['Id_keluarga'] . "'] = {nama:'" . addslashes($row['Pendidikan_t']) . "',jrsn:'".addslashes($row['Pekerjaan'])."',jml:'".addslashes($row['Jumla_anak'])."',pendapatan:'".addslashes($row['Pendapatan'])."',status:'".addslashes($row['Status_rumah'])."'};\n";   
    }     
    ?>   
        </select>   
							</div>
						</div>
					
					<div class="form-group">
							<label class="control-label col-lg-4">JAMINAN</label>
							<div class="col-lg-4">
								  <input type='text' data-field="x_username" id="nm" name='nm'  placeholder="Pendidikan" class="form-control"> 
							</div>
						</div>
		<div class="form-group">
							<label class="control-label col-lg-4">PEKERJAAN</label>
							<div class="col-lg-4">
								 <input type='text' data-field="x_username" id="jrsn" name='jrsn' placeholder="Pekerjaan" class="form-control">   
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">JUMLAH TANGGUNGAN</label>
							<div class="col-lg-4">
								<input type='text' data-field="x_username" id="jml" name='jml'  placeholder="Jumlah Anak" class="form-control">   
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">PENDAPATAN</label>
							<div class="col-lg-4">
							 <input type='text' data-field="x_username" id="pendapatan" name='pendapatan'  placeholder="Pendapatan" class="form-control">   
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">PINJAMAN</label>
							<div class="col-lg-4">
								<input type='text' data-field="x_username" id="status" name='status'  placeholder="Status Rumah" class="form-control">   
								
							</div>
						</div>
						
						
						
						
						
						<div class="form-actions no-margin-bottom" style="text-align:center;">
							<input type="submit" name="pasien" value="Proses" class="btn btn-primary" /> <a href="?menu=index" class="btn btn-warning">Back</a>
						</div>

					</form>
	</div>
</div>
<script type="text/javascript">   
    <?php echo $jsArray; ?> 
    function changeValue(Id_keluarga){ 
    document.getElementById('nm').value = dtMhs[Id_keluarga].nama; 
    document.getElementById('jrsn').value = dtMhs[Id_keluarga].jrsn; 
	 document.getElementById('jml').value = dtMhs[Id_keluarga].jml; 
	  document.getElementById('pendapatan').value = dtMhs[Id_keluarga].pendapatan; 
	  document.getElementById('status').value = dtMhs[Id_keluarga].status; 
    };  
    </script> 