
<?php  

	$kdpesan = $_GET["kdpesan"];
	include "koneksi.php";
	$sql = "select * from pemesanan where kdpesan = '$kdpesan' ";
	$hasil = mysqli_query($kon,$sql);
	if (!$hasil) die ("Gagal query...");
	
	$data = mysqli_fetch_array($hasil);
		$jum   = $data["jum"];
		$nama  = $data["nama"];
		$email = $data["email"];
		$telepon = $data["telepon"];
?>

<div class="container">
	<div class="container-fluid">
	<h2>EDIT DATA PESANAN</h2> <br /> <br /> 
		<form name="form" action="proses_pesan.php" method="post">
		<input type="hidden" name="kdpesan" value="<?php echo $kdpesan;?>" />
			<table border="1">
				
				<tr>
					<td>Jumlah Peserta</td>
					<td><input type="text" name="jum" value="<?php echo $jum;?>" placeholder="Dewasa"></td>
					<td><input type="text" name="jum" value="<?php echo $jum;?>" placeholder="Anak"></td>
				</tr>
				
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"  value="<?php echo $nama?>" size="25" class="texbox"></td>
				</tr>
				
				<tr>
					<td>Email</td>
					<td><input type="text" name="email"  value="<?php echo $email;?>" size="25" class="texbox"></td>
				</tr>
				
				<tr>
					<td>Telepon</td>
					<td><input type="text" name="telepon"  value="<?php echo $telepon;?>" size="25" class="texbox"></td>
				</tr>
				
				<tr>
				<td> <button type="submit" name="kirim" class="btn btn-success"> Perbarui </button> &nbsp; &nbsp;
					 <button type="reset" name="batal" class="btn btn-danger"> Batal </button> </td>
				</tr>
				
			</table>
		</form>
	</div>
</div>
