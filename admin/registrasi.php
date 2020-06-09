
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
		<h5 align="center" >Data Penerimaan Jamskesmas</h5>
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
							<label class="control-label col-lg-4">Telpon</label>
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
							<label class="control-label col-lg-4">Pendidikan</label>
							<div class="col-lg-4">
								<select name="pd" class="form-control"><option value="">Silahkan Dipilih...</option>
								<option value="SD">SD</option>
								<option value="SMP">SMP</option>
								<option value="SMA<">SMA</option></select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Pekerjaan</label>
							<div class="col-lg-4">
								<select name="pk" class="form-control"><option value="">Silahkan Dipilih...</option>
								<option value="Nelayan">Nelayan</option>
								<option value="Petani">Petani</option>
								<option value="P.swasta">P.swasta</option></select>
							</div>
						</div>
						
							<div class="form-group">
							<label class="control-label col-lg-4">Jumlah Anak</label>
							<div class="col-lg-4">
								<select name="jma" class="form-control"><option value="">Silahkan Dipilih...</option>
								<option value="1 anak">1 anak</option>
								<option value="2 anak">2 anak</option>
								<option value=">= 3 anak">>= 3 anak</option></select>
							</div>
						</div>
						
		
						<div class="form-group">
							<label class="control-label col-lg-4">Pendapatan</label>
							<div class="col-lg-4">
								<select name="pdt" class="form-control"><option value="">Silahkan Dipilih...</option>
								<option value=">= 1.000.000">>= 1.000.000</option>
							
								<option value="<= 1.000.000"> < 1.000.000</option></select>
							</div>
						</div>
							<div class="form-group">
							<label class="control-label col-lg-4">Status Rumah</label>
							<div class="col-lg-4">
								<select name="st" class="form-control"><option value="">Silahkan Dipilih...</option>
								<option value="Milik sendiri">Milik sendiri</option>
								<option value="Sewa">Sewa</option></select>
								
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Username</label>
							<div class="col-lg-4">
								<input type="text" name="user" autofocus required class="form-control" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-lg-4">Password</label>
							<div class="col-lg-4">
								<input type="password" name="pss" autofocus required class="form-control" />
							</div>
						</div>
				
						
						
						
							<div class="form-actions no-margin-bottom" style="text-align:center;">
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
