<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- hiden navigasi -->
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
                <a class="navbar-brand" href="index.php"><b><u>La</u>pa<u>k</u> Kay<u>on</u>g</b></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav mr-auto"  style="float: left;">
                    <a class="nav-item active nav-link ml-2" href="#"><img src="icon/download.png" class="mr-2">Download App</a>
                    <a class="nav-item active nav-link ml-2" href="#"><img src="icon/help.png" class="mr-2">Ikuti</a>
                    <a class="nav-item active nav-link ml-2" href="#"><img src="icon/keranjang.png" class="mr-2">Jual</a>
                  </div>
                  <div class="navbar-nav ml-auto" style="float: right; text-align: right;">
                    <a class="nav-item active nav-link ml-2" href="#"><img src="icon/bel-1.png" class="mr-2">Notifikasi</a>
                    <a class="nav-item active nav-link ml-2" href="#"><img src="icon/pesan.png" class="mr-2">Kontak</a>
                    <a class="nav-item active nav-link ml-2" href="{{url('login')}}"><img src="icon/login.png" class="mr-2">Login</a>
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
<!-- Banner !-->
<div class="banner">
  <div class="container-fluid">
    <div class="row p-2">
      <div class="banner-1">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="image/3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="image/2.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="banner-2">
        <div id="banner2" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#banner2" data-slide-to="0" class="active"></li>
            <li data-target="#banner2" data-slide-to="1"></li>
            <li data-target="#banner2" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="image/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="image/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="image/2.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#banner2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#banner2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!--head kategori -->
<div class="container-fluid">
  <div class="head-line my-2">
    <div class="row">
      <div class="col-md-12">
        <div class="ml-3 ">
          <h5>Kategori</h5>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- isi kategori -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 my-3">
      <div class="kategori">
         
         <a href="{{url('detail')}}">
      <div class="kategori-box">
          <img src="kategori/1.png">
          <div class="text-center pt-2">
            <p>Fasion Wanita</p>
          </div>
        </div>
      </a>
      <a href="">
      <div class="kategori-box">
          <img src="kategori/3.png">
          <div class="text-center pt-2">
            <p>Laptop / komputer</p>
          </div>
        </div>
      </a>

      <a href="">
      <div class="kategori-box">
          <img src="kategori/4.jpg">
          <div class="text-center pt-2">
            <p>Handphone</p>
          </div>
        </div>
      </a>
      <a href="">
      <div class="kategori-box">
          <img src="kategori/5.png">
          <div class="text-center pt-2">
            <p>Pakaian Anak</p>
          </div>
        </div>
      </a>
      <a href="">
      <div class="kategori-box">
          <img src="kategori/6.jpg">
          <div class="text-center pt-2">
            <p>Sepatu Pria</p>
          </div>
        </div>
      </a>
      <a href="">
      <div class="kategori-box">
          <img src="kategori/7.jpg">
          <div class="text-center pt-2">
            <p>Aksesoris</p>
          </div>
        </div>
      </a>
      <a href="">
      <div class="kategori-box">
          <img src="kategori/8.jpg">
          <div class="text-center pt-2">
            <p>Elektronik</p>
          </div>
        </div>
      </a>
      <a href="">
      <div class="kategori-box">
          <img src="kategori/9.png">
          <div class="text-center pt-2">
            <p>Hobby Pria</p>
          </div>
        </div>
      </a>
      <a href="">
      <div class="kategori-box">
          <img src="kategori/10.png">
          <div class="text-center pt-2">
            <p>Tas Wanita</p>
          </div>
        </div>
      </a>
      </div>
      <a href="{{url('kategori')}}">
      <div class="kategori-box shadow text-center" style="background-color: #c70039">
        <div class="mx-auto my-4 text-white">
         <b> Lihat semua Kategori </b>
        </div>
      </div>
      </a>
    </div>
  </div>
</div>

<!--head Produk -->
<div class="container-fluid">
  <div class="head-line my-2">
    <div class="row">
      <div class="col-md-12">
        <div class="ml-3 ">
          <h5>Produk Terbaru</h5>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- isi -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 my-3">

     <a href="{{url('detail')}}"> 
      <div class="produk-box shadow mb-3 ml-2">
        <img src="produk/2.jpeg">
         <div class="p-2">
            <h4>Kemeja Pria</h4>
            <h5>Stock: >100 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}"> 
      <div class="produk-box shadow mb-3 ml-2">
        <img src="produk/5.jpg">
         <div class="p-2">
            <h4>Oppo Reno 4</h4>
            <h5>Stock: 6 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 4.999.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="produk/4.jpg">
         <div class="p-2">
            <h4>Kemeja Pria Panjang</h4>
            <h5>Stock: 50 Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 120.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="produk/3.jpg">
         <div class="p-2">
            <h4>Sepatu Wanita</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="produk/1.jpg">
         <div class="p-2">
            <h4>Pakaian Anak</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="produk/2.jpg">
         <div class="p-2">
            <h4>Sepatu wanita</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="produk/6.jpg">
         <div class="p-2">
            <h4>Nama Produk</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

     <<a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="produk/7.jpg">
         <div class="p-2">
            <h4>Nama Produk</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}">  
      <div class="produk-box shadow mb-3 ml-2">
        <img src="produk/9.jpg">
         <div class="p-2">
            <h4>Nama Produk</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 

     <a href="{{url('detail')}}"> 
      <div class="produk-box shadow mb-3 ml-2">
        <img src="produk/10.jpg">
         <div class="p-2">
            <h4>Nama Produk</h4>
            <h5>Stock: Jumlah Produk Unit</h5>
            <h5> Ketapang</h5>
            <h6>Rp. 90.000</h6>
         </div>
      </div>
     </a> 
    </div>
  </div>
</div>

<!-- footer -->
<div class="footer fixed">
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