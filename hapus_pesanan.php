<?php
	$kdpesan = $_GET["kdpesan"];
	include "koneksi.php";
	$sql = "select * from pemesanan where kdpesan = '$kdpesan'";
	$hasil = mysqli_query($kon, $sql);
	if (!$hasil) die ("Gagal guery...");
	
	$data = mysqli_fetch_array($hasil);
	$jum = $data['jum'];
	$nama = $data ['nama'];
	$email = $data ['email'];
	$telepon = $data ['telepon'];
	
	echo "<h2>Konfirmasi Hapus</h2>";
	echo "Jumlah Peserta : ".$jum."<br/>";
	echo "Nama : ".$nama."<br/>";
	echo "Email : ".$email."<br/>";
	echo "Telepon : ".$telepon."<br/><br/>";
	echo "APAKAH DATA INI AKAN DI HAPUS ? <br/>";
	echo "<a href='hapus_pesanan.php?kdpesan=$kdpesan&hapus=1'> YA </a>";
	echo "&nbsp;&nbsp;";
	echo "<a href='tampil_pesanan.php'> TIDAK </a> <br/><br/>";
	
	if (isset($_GET['hapus'])) {
		$sql = "delete from pemesanan where kdpesan = '$kdpesan'";
		$hasil = mysqli_query($kon,$sql);
		if (!$hasil){
			echo"Gagal Hapus Pesan : $nama ...<br/>";
			echo"<a href='tampil_pesanan.php'>Kembali ke Pesanan</a>";
		} else {
		  header ('location:tampil_pesanan.php');
		}
	}
?>