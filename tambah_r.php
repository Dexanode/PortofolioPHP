<?php

include_once("koneksi.php");
$nm =$_POST['nm'];
$al =$_POST['al'];
$tel =$_POST['tel'];
$jk =$_POST['jk'];
$pd =$_POST['pd'];
$pk =$_POST['pk'];
$jma =$_POST['jma'];
$pdt =$_POST['pdt'];
$st =$_POST['st'];
$user =$_POST['user'];
$pss =$_POST['pss'];
$sqlSimpan	= "insert into keluarga values ('','$nm',
						'$al',
						'$tel',
						'$jk',
						'$pd',
						'$pk',
						 '$jma',
						 '$pdt',
						'$st'
						)";
$querySimpan	= mysql_query($sqlSimpan);





if($querySimpan){

echo "<script type='text/javascript'>
      alert('Data Berhasil Disimpan...!!!');
      </script>";
	  
      echo "<meta http-equiv='refresh' content='0; index.php'>";
}
else
{
echo "<script type='text/javascript'>
      alert('Gagal Pengajuan...!!!');
      </script>";
      echo "<meta http-equiv='refresh' content='0; index.php'>";
}
?>