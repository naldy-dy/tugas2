<!DOCTYPE html>
<html lang="en">
  <head>
<!-- end hiden navigasi -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/style.css">
    <link rel="stylesheet" type="text/css" href="icons">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <title>Lapak Kayong</title>
  </head>
  <body>
    <!-- header -->
    <div class="kepala sticky-top shadow">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <nav class="navbar navbar-expand-lg  container-fluid navbar-dark">
                <a class="navbar-brand" href="{{url('index')}}"><b><u>La</u>pa<u>k</u> Kay<u>on</u>g</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav mr-auto"  style="float: left;">
                    <a class="nav-item active nav-link ml-2" href="#"><img src="icon/download.png" class="mr-2">Download App</a>
                    <a class="nav-item active nav-link ml-2" href="#"><img src="icon/info.png" class="mr-2">Ikuti</a>
                    <a class="nav-item active nav-link ml-2" href="#"><img src="icon/keranjang.png" class="mr-2">Jual</a>
                  </div>
                  <div class="navbar-nav ml-auto" style="float: right; text-align: right;">
                    <a class="nav-item active nav-link ml-2" href="#"><img src="icon/bel-1.png" class="mr-2">Notifikasi</a>
                    <a class="nav-item active nav-link ml-2" href="#"><img src="icon/pesan.png" class="mr-2">Kontak</a>
                    <a class="nav-item active nav-link ml-2" href="#"><img src="icon/login.png" class="mr-2">Login</a>
                  </div>
                </div>
            </nav>
          </div>
        </div>
        <div class="col-md-12">
          <div class="input-group mb-3 sticky-top">
            <input type="text" class="form-control bg-light shadow" placeholder="Cari Produk ..." aria-describedby="button-addon2">
              <div class="input-group-append">
                <button class="btn btn-light bg-danger  border border-light" type="button" id="button-addon2"><img src="icon/search.png" width="20px"></button>
              </div>
        </div>
      </div>
      <div class="col-md-12 pb-3 text-center">
        Belanjanya Mudah, Murah, Dekat!!!
      </div>
    </div>
  </div>

    <!-- end header -->
<!-- isi produk !-->
<div class="container">
  <div class="row">
    <div class="col-md-12 my-3">
      <div class="head-line">
        <div class="ml-3 pt-2 pb-2">
         <b>Sha-Sha Olshop</b>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
      <div class="col-md-6 pb-3">
        <div class="detail-box shadow">
          <img src="produk/1.jpg">
        </div>
      </div>
      <div class="col-md-6">
        <div class="head-line">
          <div class="ml-3">
            Detail Produk
          </div>
        </div>

        <table class="table">
          <tr>
            <td>Nama Produk</td>
            <td>Pakaian Anak</td>
          </tr>
          <tr>
            <td>Lokasi Produk</td>
            <td>Ketapang</td>
          </tr>
          <tr>
            <td>Jumlah Produk</td>
            <td> 7 Unit</td>
          </tr>
          <tr>
            <td>Ukuran Produk</td>
            <td>S</td>
          </tr>
          <tr>
            <td>Diskripsi</td>
            <td>Pakaian Anak buat umur 8 tahun, barang bagus, bahan catton</td>
          </tr>

          <tr>
            <td>Harga</td>
            <td style="color: red;font-weight: bold;">Rp. 90.000</td>
          </tr>
          <tr>
            <td><a href="" class="btn btn-danger shadow"><img src="icon/keranjang.png" width="20px"> Beli</a>
            </td>
            <td></td>
          </tr>
        </table>
      </div>
  </div>


</div>

<!-- end isi produk -->
<!-- footer -->
<div class="footer">
  <div class="container">
        <div class="row">
          <div class="col-md-12 my-5">
          <p class="text-white text-center">&copy; Copyright 2020 | Built By Tim IT <b>Naldy</b>
          </div>
        </div>
      </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.13.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>