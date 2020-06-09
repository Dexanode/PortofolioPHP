
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD-->
<head>
    <meta charset="UTF-8" />
    
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
	
	    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/login.css" />
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<script type="text/javascript" src="dist/sweetalert.min.js"></script>
	
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/theme.css" />
    <link rel="stylesheet" href="css/MoneAdmin.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/datepicker.css" />
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<script type="text/javascript" src="/dist/sweetalert.min.js"></script>
    <!--END GLOBAL STYLES -->
</head>
<body class="padTop53">
	<div id="wrap">
	<header>
	<div class="box">

	<header>
		<h4 align="center" >Pengajuan Kredit</h4>
	</header>
		<div class="body">
			<form action="tambah_r.php" method="post" class="form-horizontal">
			<div class="form-group">
							<label class="control-label col-lg-4">Nama</label>
							<div class="col-lg-4">
								<input type="text" name="nm" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Alamat</label>
							<div class="col-lg-4">
								<textarea name="al" autofocus required class="form-control" /></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">No Hp</label>
							<div class="col-lg-4">
								<input type="text" name="tel" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Jenis Kelamin</label>
							<div class="col-lg-4">
								<select name="jk" class="form-control"><option value="">Silahkan Dipilih...</option>
								<option value="Laki-laki">Laki-laki</option>
								<option value="Perempuan">Perempuan</option></select>
								
							</div>
						</div>
					<div class="form-group">
							<label class="control-label col-lg-4">Jaminan</label>
							<div class="col-lg-4">
								<select name="pd" class="form-control"><option value="">Silahkan Dipilih...</option>
								  <option value="Sertifikat rumah">Sertifikat rumah</option>
								  <option value="Sertifikat tanah">Sertifikat tanah</option>
								  <option value="BPKB Mobil">BPKB Mobil</option>
								  <option value="BPKB Motor">BPKB Motor</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Pekerjaan</label>
							<div class="col-lg-4">
								<select name="pk" class="form-control"><option value="">Silahkan Dipilih...</option>
								<option value="Honorer">Honorer</option>
								<option value="Petani">Petani</option>
								<option value="Wirausaha">Wirausaha</option>
								<option value="P.Swasta">P.Swasta</option>
								<option value="PNS">PNS</option>
								</select>
							</div>
						</div>
						
							<div class="form-group">
							<label class="control-label col-lg-4">Jumlah Tanggungan</label>
							<div class="col-lg-4">
								<select name="jma" class="form-control"><option value="">Silahkan Dipilih...</option>
								<option value="1 orang">1 Orang</option>
								<option value="2 orang">2 Orang</option>
								<option value="3 orang">3 Orang</option>
								<option value="4 orang">4 Orang</option>
								<option value=">= 5 orang">>= 5 Orang</option></select>
							</div>
						</div>
						
		
						<div class="form-group">
							<label class="control-label col-lg-4">Pendapatan</label>
							<div class="col-lg-4">
								<select name="pdt" class="form-control"><option value="">Silahkan Dipilih...</option>
								<option value="P <= 4.100.000">P >= 4.100.000</option>
							    <option value="4.000.000 > P >= 3.100.000"> 4.000.000 > P >= 3.100.000</option>
								<option value="3.000.000 > P >= 2.100.000"> 3.000.000 > P >= 2.100.000</option>
								<option value="2.000.000 > P >=1.100.000"> 2.000.000 > P >=1.100.000</option>
								<option value="P <= 1.000.000">P <= 1.000.000</option>
								</select>
							</div>
						</div>
							<div class="form-group">
							<label class="control-label col-lg-4">Pinjaman</label>
							<div class="col-lg-4">
								<select name="st" class="form-control"><option value="">Silahkan Dipilih...</option>
								  <option value="P <= 100.000.000"> P >= 100.000.000</option>
								  <option value="100.000.000 > P >= 80.000.000"> 100.000.000 > P >= 80.000.000</option>
								  <option value="80.000.000 > P <= 50.000.000"> 80.000.000 > P >= 50.000.000</option>
								  <option value="50.000.000 > P <=30.000.000">50.000.000 > P >=30.000.000</option>
								  <option value="P <=30.000.000"> P <= 30.000.000</option>
								</select>
								
							</div>
						</div>
						
				
						
						
						
							<div class="form-actions no-margin-bottom" style="text-align:left;">
							<input type="submit"  value="Simpan" class="btn btn-primary" /> <a href="index.php" class="btn btn-warning">Back</a>
						</div>

					</form>
	</div>
</div>
<!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="../js/jquery-2.0.3.min.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
</body>
