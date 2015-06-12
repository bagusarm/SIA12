<?php

$no_ktp = $_GET['no_ktp'];
echo "NO KTP : $no_ktp</br>";
$nama 	= $_GET['nama'];
echo "Nama Lengkap : $nama</br>";
$asal_sekolah = $_GET['asal_sekolah'];
echo "Asal Sekolah : $asal_sekolah</br>";
$PT = $_GET['PT'];
echo "Perguruan Tinggi : $PT</br>";
$BP;
$BL;
$biaya_almamater = $_GET['biaya_almamater'];
$total;
	echo "Jurusan yang anda pilih : <br>";	
	
	
	if (isset($_GET['JTS']))

		{
		echo "1.".$_GET['JTS']."<br>";
		echo "Harga        : Rp " .$harga[0]=2000000;
		echo "<br>";
	}

	if (isset($_GET['JTK']))
	 {  
		echo "2.".$_GET['JTK']."<br>";
		echo "Harga        : Rp " .$harga[1]=2500000;
		echo "<br>";
	}
	if (isset($_GET['JTETI']))
	 {  
		echo "3.".$_GET['JTETI']."<br>";
		echo "Harga        : Rp " .$harga[2]=3000000;
		echo "<br>";
	}
	if (isset($_GET['JTM']))
	 {  
		echo "4.".$_GET['JTM']."<br>";
		echo "Harga        : Rp " .$harga[3]=3500000;
		echo "<br>";
	}
		$totjur =array_sum($harga);
	$BP= $_GET['BP'];
		if ($BP == "YA") {
					   $BP= 300000;
				 } elseif ($BP == "TIDAK") {
					   $BP = 0;
				 }
				echo	"Biaya pendaftaran : Rp. $BP,-</br>";
	$BL = $_GET['BL'];
		if ($BL == "YA") {
					   $BL = 100000;
				 } elseif ($BL == "TIDAK") {
					   $BL = 0;
				 }
				echo	"Biaya Lab : Rp. $BL,-</br>";
	$biaya_almamater = $_GET['biaya_almamater'];
			if ($biaya_almamater == "b") {
							          $biaya_almamater = 300000;
							 } elseif ($biaya_almamater == "t") {
					                          $biaya_almamater = 0;
							 }
				echo	"Biaya Almamater : Rp. $biaya_almamater,-</br>";
	$total = $totjur + $BP + $BL + $biaya_almamater;
				echo "Total = $total</br>";
				

 
?>
<a href = "UTS.php">kembali</a>

</body>
</html>		
