<?php
	if (isset($_POST['kdpesan'])){
        $kdpesan = $_POST['kdpesan'];
        $simpan ="EDIT";
    }else{
        $simpan ="BARU";
        }	

    $jum =$_POST['jum'];
    $nama =$_POST['nama'];
    $email =$_POST['email'];
    $telepon =$_POST['telepon'];

	
$dataValid="YA";
if (strlen(trim($jum))==0){
echo "Jumlah Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($nama))==0){
echo "Nama Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($email))==0){
echo "Email Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($telepon))==0){
echo "Telepon Harus Diisi <br/ >";
$dataValid="TIDAK";
}

if ($dataValid=="TIDAK"){
echo "Masih ada kesalahan, silakan perbaiki! </br>";
echo "<input type='button' value='Kembali'
	onClick='self.history.back()'>";
exit;
}

	include "koneksi.php";
	if($simpan == "EDIT"){
        $sql = "update pemesanan set
                jum = '$jum',
                nama = '$nama',
                email = '$email',
                telepon = '$telepon'
                where kdpesan = $kdpesan";
    }else {
		$sql = "insert into pemesanan (jum, nama, email, telepon)
				values ($jum, '$nama', '$email', '$telepon')";
    }
		
	$hasil = mysqli_query($kon, $sql);

	if (!$hasil) {
		echo "Gagal Simpan, silahkan diulangi!<br />";
		echo mysqli_error($kon);
		echo "<br /><input type='button' value='Kembali' 
			OnClick='self.history.back()'>";
		exit;
	} else {
		echo "Simpan data berhasil";
	}

	header("location:tampil_pesanan.php");


?>