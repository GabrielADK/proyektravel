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
                    <li><a href="#myPage">Home</a></li>
                  <!--  <li><a href="#band">Profil</a></li> -->
                    <li><a href="#tour">Data Paket Wisata</a></li>
                    <li><a href="#user">User</a></li>
                    <li><a href="#pemesanan">Pemesanan</a></li>
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
    <div id="intro" class="container text-center bg-1">
    <h3>Pemesanan Tickets Travel</h3>
        <h4>Pemesanan Tickets Travel</h4>
<?php
    session_start();
    $nama =$_POST['nama'];
    $jk =$_POST['jk'];
    $umur =$_POST['umur'];
    $Tempat =$_POST['Tempat'];
    $Tgl =$_POST['Tgl'];
    $Bln =$_POST['Bln'];
    $Thn =$_POST['Thn'];
    $telepon =$_POST['telepon'];
    $email =$_POST['email'];
    $alamat =$_POST['alamat'];
    $nick =$_POST['nick'];
    $password =md5($_POST['password']);
    
$dataValid="YA";
if (strlen(trim($nama))==0){
echo "Nama Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($jk))==0){
echo "Jenis Kelamin Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($umur))==0){
echo "Umur Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($Tempat))==0){
echo "Tempat Tanggal Lahir Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($Tgl))==0){
echo "Tanggal Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($Bln))==0){
echo "Bulan Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($Thn))==0){
echo "Tahun Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($telepon))==0){
echo "Nomor Telepon Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($alamat))==0){
echo "Alamat Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($email))==0){
echo "Email Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($nick))==0){
echo "Nick User Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if (strlen(trim($password))==0){
echo "Password User Harus Diisi <br/ >";
$dataValid="TIDAK";
}
if ($dataValid=="TIDAK"){
echo "Masih ada kesalahan, silakan perbaiki! </br>";
echo "<input type='button' value='Kembali'
    onClick='self.history.back()'>";
exit;
}
echo "<b>Selamat Anda Behasil Mendaftar </b></br>";
echo "Nama Lengkap              : $nama<br>";
echo "Jenis Kelamin             : $jk<br>";
echo "Umur                      : $umur<br>";
echo "Tempat dan Tanggal Lahir  : $Tempat, $Tgl/$Bln/$Thn<br>";
echo "Nomor Telepon             : $telepon<br>";
echo "Email                     : $email<br>";
echo "Alamat                    : $alamat<br>";
echo "Nick User                 : $nick<br>";
echo "Password User             : $password<br>";
echo "<h3>Dipersilahkan Anda Untuk Login</h3>";
?>
    </div>


    <!-- Container (TOUR Section) -->
    <!--  <div id="tour">
          <div class="container">
              <h3 class="text-center">TOUR DATES</h3>
              <p class="text-center">Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</p>
              <ul class="list-group">
                  <li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
                  <li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li>
                  <li class="list-group-item">November <span class="badge">3</span></li>
              </ul>

              <div class="row text-center">
                  <div class="col-sm-4">
                      <div class="thumbnail">
                          <img src="paris.jpg" alt="Paris" width="400" height="300">
                          <p><strong>Paris</strong></p>
                          <p>Friday 27 November 2015</p>
                          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="thumbnail">
                          <img src="newyork.jpg" alt="New York" width="400" height="300">
                          <p><strong>New York</strong></p>
                          <p>Saturday 28 November 2015</p>
                          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="thumbnail">
                          <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
                          <p><strong>San Francisco</strong></p>
                          <p>Sunday 29 November 2015</p>
                          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
                      </div>
                  </div>
              </div>
          </div> -->
    <!-- Modal -->
    <!--  <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog"> -->
    <!-- Modal content-->
    <!--  <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">�</button>
                        <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
                                <input type="number" class="form-control" id="psw" placeholder="How many?">
                            </div>
                            <div class="form-group">
                                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
                                <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                            </div>
                            <button type="submit" class="btn btn-block">
                                Pay
                                <span class="glyphicon glyphicon-ok"></span>
                            </button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove"></span> Cancel
                        </button>
                        <p>Need <a href="#">help?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Container (Contact Section) -->
    <div id="contact" class="container bg-1">
        <h3 class="text-center">Contact</h3>
        <p class="text-center"><em>We love our visitors!</em></p>

        <div class="row">
            <div class="col-md-4">
                <p>Visitors? Drop a note.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span>Pemesanan Tickets Travel</p>
                <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1234567890</p>
                <p><span class="glyphicon glyphicon-envelope"></span>Email: ticketstravel@mail.com</p>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                <br>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <button class="btn pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
        <br>


    </div>

    <footer class="text-center">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a><br><br>
        <p>Website by <a href="">www.ticketstravel.com</a></p>
    </footer>

    <script>
        $(document).ready(function () {
            // Initialize Tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {

                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function () {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        })
    </script>
</body>
</html>
