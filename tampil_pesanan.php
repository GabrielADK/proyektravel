<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pemesanan Tiket Travel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css" />
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#myPage">Pemesanan Tiket Travel</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="hal_awal.php">Home</a></li>
                  <!--  <li><a href="#band">Profil</a></li> -->
                    <li><a href="tempat_wisata.php">Paket Wisata</a></li>
                    <li><a href="tampil_pesanan.php">Pemesanan</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/home.jpg" alt="" width="1200" height="700">
            </div>

            <div class="item">
                <img src="images/home1.jpg" alt="" width="1200" height="700">
            </div>

            <div class="item">
                <img src="images/home2.jpg" alt="" width="1200" height="700">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

   <!-- Container (The Band Section) -->
	<div class="container">
	  <table class="table table-bordered">
		<?php
		include "koneksi.php";
		$sql = "select * from pemesanan order by kdpesan asc";
		$hasil = mysqli_query($kon, $sql);
		if(!$hasil)
			die("Gagal query..".mysqli_erorr($kon));
		?>

		<div class="container-fluid">
		  <h2>DAFTAR DATA PEMESANAN</h2> <br />
		  <a href="form-pesan.php"> <button type='button' class='btn btn-success btn-sm'> Tambah </button> </a> <br /> <br />
		  
		  <table class="table table-striped">
			<thead style="bold">
			  <tr>
				<th> JUMLAH PESAN </th>
				<th> NAMA </th>
				<th> EMAIL </th>
				<th> TELEPON </th>
			  </tr>
			</thead>
			<tbody>
			<?php
				$no = 0;
				while($row=mysqli_fetch_assoc($hasil)){
					echo"<tr>";
						echo"<td>".$row['jum']."</td>";
						echo"<td>".$row['nama']."</td>";
						echo"<td>".$row['email']."</td>";
						echo"<td>".$row['telepon']."</td>";						
					
					
					echo"<td>";
					echo"<a href='edit_pesanan.php?kdpesan=" .$row['kdpesan'] ." '>

							<button type='button' class='btn btn-success btn-sm'> UBAH </button>

						 </a>";

					echo" <a href='hapus_pesanan.php?kdpesan=" .$row['kdpesan'] ." '>
							<button type='button' class='btn btn-danger btn-sm'> HAPUS </button>
						 </a>";
				echo"</td>";
				
				echo "</tr>";
					
				}
			?>
    </tbody>
  </table>

</div>
    </div> -->
   
    <footer class="text-center">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
        <p>Website by <a href="">www.ticketstravel.com</a></p>
    </footer>

</body>
</html>
