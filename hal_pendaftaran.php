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
                    <li><a href="index.php">Home</a></li>
                  <!--  <li><a href="#band">Profil</a></li> -->
                    <li><a href="hal_login.php">Login</a></li>
                    <li><a href="#Pendaftaran">Pendaftaran</a></li>
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
   <div id="intro" class="container text-left bg-1">
             <h3 align="center">Pemesanan Tickets Travel</h3>
        <h2 align="center">Pendaftaran</h2>
<body>
    <table border=0>
        <form action="pendaftaran_proses.php" method="post">
<tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td><input type=text name=nama></td>
</tr>
<tr><td>Jenis Kelamin</td><td>:</td><td><select name="jk" class="texbox" value="<?php $_POST['jk']?>">
<option value="pilih">--Pilih--</option>
<option value="Laki-laki">Laki-laki</option>
<option value="Perempuan">Perempuan</option>
</select></td></tr>
<tr><td>Umur</td> <td>:</td><td><input name="umur"  size="25" class="texbox"></td></tr>
<tr>
<td>Tempat dan Tanggal Lahir</td>
<td>:</td>
<td><input type=text name=Tempat size=15>
<select name=Tgl>
<option name=Tgl>Tgl
<option name=Tgl>1
<option name=Tgl>2
<option name=Tgl>3
<option name=Tgl>4
<option name=Tgl>5
<option name=Tgl>6
<option name=Tgl>7
<option name=Tgl>8
<option name=Tgl>9
<option name=Tgl>10
<option name=Tgl>11
<option name=Tgl>12
<option name=Tgl>13
<option name=Tgl>14
<option name=Tgl>15
<option name=Tgl>16
<option name=Tgl>17
<option name=Tgl>18
<option name=Tgl>19
<option name=Tgl>20
<option name=Tgl>21
<option name=Tgl>22
<option name=Tgl>23
<option name=Tgl>24
<option name=Tgl>26
<option name=Tgl>27
<option name=Tgl>28
<option name=Tgl>29
<option name=Tgl>30
<option name=Tgl>31
</select>
<select name=Bln>
<option name=Bln>Bln
<option name=Bln>Januari
<option name=Bln>Februari
<option name=Bln>Maret
<option name=Bln>April
<option name=Bln>Mei
<option name=Bln>Juni
<option name=Bln>Juli
<option name=Bln>Agustus
<option name=Bln>September
<option name=Bln>Oktober
<option name=Bln>November
<option name=Bln>Desember
</select>
<select name=Thn>
<option name=Thn>Thn
<option name=Thn>2018
<option name=Thn>2017
<option name=Thn>2016
<option name=Thn>2015
<option name=Thn>2014
<option name=Thn>2013
<option name=Thn>2012
<option name=Thn>2011
<option name=Thn>2010
<option name=Thn>2009
<option name=Thn>2008
<option name=Thn>1996
<option name=Thn>1995
<option name=Thn>1994
<option name=Thn>1993
<option name=Thn>1992
</select>
</td>
</tr>
><td>Telepon</td> <td>:</td><td><input name="telepon"  size="25" class="texbox"></td></tr>
<tr><td>Email</td> <td>:</td><td><input name="email"  size="25" class="texbox"></td></tr>
<tr><td>Alamat</td> <td>:</td><td><textarea name="alamat"  cols="25" rows="3" class="texarea"></textarea></td></tr>
<tr><td>Nick User</td> <td>:</td><td><input name="nick"  size="25" class="texbox"></td></tr>
<tr><td>Password User</td> <td>:</td><td><input name="password"  size="25" class="texbox"></td></tr>
<tr><td><input type="submit" value="Simpan" class="btn">
    <input type="hidden" name="act" value="add"></td></tr>
</form>
</table>
</body>
</html>
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
    <!--<div id="contact" class="container bg-1">
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

    </div> -->

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
