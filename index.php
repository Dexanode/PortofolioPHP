<?php
session_start();
include"koneksi.php";
if(!empty($_SESSION['username']) AND !empty($_SESSION['password'])){
echo"<script>window.location.href='./media.php'</script>";
}
?>
<html>
<head>
<title>SISTEM PENDUKUNG KEPUTUSAN </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div id="main">
<div id="logo"><img src='images/Logo_BTPN.png' width="150px"></div>
<div id="menu">
		<ul>
		   <li><a href="./">Home</a></li>
		   	  
				   
				
		   <li><a href="./index.php?page=profil">Profil Perusahaan</a>
				
		   </li>
		   <li><a href="./index.php?page=daftar">Pengajuan Kredit</a>
				
		   </li>
		   <li><a href="./index.php?page=hasil">Hasil Pemberian Kredit</a></li>
		    <li><a href="./admin">Login</a></li>
		</ul>
</div>



  
	
	
	<?php
$page = isset($_GET['page']) ? $_GET['page'] :'';


if($page=="profil"){ include"profil.php"; }
else if($page=="hasil"){ include"cetak_laporan.php"; }
else if($page=="daftar"){ include"registrasi.php"; }
else {
include"home.php"; }





?>
	

  
 
  
  
  
</div>


</div>

</body>
</html>

<?php
// 1. set variabel yang dibutuhkan
$username = isset($_POST['username']) ? $_POST['username'] :'';
$password = isset($_POST['password']) ? $_POST['password'] :'';
$level    = isset($_POST['level']) ? $_POST['level'] :'';
// 2. Cek apakah tombol login diklik untuk login
if(isset($_POST['login'])){
// 3. Buat query untuk mencari data ke tabel
	   // cek level apa user yang login
	   if($level=="Pimpinan"){$tabel="admin";}else{$tabel="admin";}
$sql = mysqli_query($konek,"SELECT * FROM $tabel 
					WHERE username='".$username."' AND 
					password='".$password."' AND level='$level'");
$jml = mysqli_num_rows($sql); // Hitung jmlah record	
$row = mysqli_fetch_array($sql);	// tampung record ke data array	
// 4. cek berapa jml data yg ditemukan
	if($jml > 0){
	// Mulai Session Baru 
	session_start();
	$_SESSION['username'] = $row['username'];
	$_SESSION['password'] = $row['password'];
	$_SESSION['level'] 	  = $level;
	$_SESSION['id']=$row['kd_admin'];
	$_SESSION['nm']=$row['nm_lengkap'];
	echo"<script>window.location.href='./media.php'</script>";
	}else{
	echo"<script>window.location.href='./?page=anda-gagal-login'</script>";	
	}
}
?>