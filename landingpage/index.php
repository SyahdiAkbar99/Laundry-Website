<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<style>
  ul.navbar-nav.ml-auto li.nav-item a.nav-link{
       color: white;
       text-align:center;
       margin: 10px;
       border-radius: 20px;
    }
    ul.navbar-nav.ml-auto li.nav-item a.nav-link:hover{
        background-color: lightskyblue;
    }
    .judul{
        font-size: 40px;
        font-weight: bold;
        font-family: gentium basic,serif;
        text-transform: uppercase;
        text-align: center;
    }
    .subJudul{
        padding: 110px 200px;
        line-height: 50px;
        font-size: 37px;
        text-align: center;
        font-weight: bold;
        font-family: gentium basic,serif;

    }
    .home{
        border-bottom: 5px solid darkgrey;
    }
    .textAbout{
        padding: 110px 200px;
        line-height: 50px;
        text-align: center;
        font-family: gentium basic,serif;

    }

    .card{
        margin-bottom: 30px;
    }
    .card img{
        border: none;
        background-color: #f3f9fb;
        width: 200px;
        height: 200px;
    }
    p.card-text{
        text-align:center;
        font: 20px arial,serif;
    }
    @media screen and (min-width: 601px) {
        p.subJudul {
            font-size: 30px;
        }
        p.textAbout{
            font-size: 34px;
        }
    }

    @media screen and (max-width: 600px) {
        p.subJudul{
            font-size: 20px;
            padding:0;
            text-align:justify;
            text-indent: 50px;
        }
        p.textAbout{
            font-size: 20px;
            padding:0;
            text-align:justify;
            text-indent: 50px;
        }
    }
</style>
<body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark static-top">
        <div class="container">
                <a class="navbar-brand" href="#Logo" style="color: white; font-style:italic;">Kuy Laundry
                </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="#home" class="nav-link">Home</a>
                        <span class="sr-only">(current)</span>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#testi" class="nav-link">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navigation -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid bg-dark">
        <div class="jumbotron-background">
            <img src="../assets/images/laundry-machine.jpg" class="blur">
        </div>
        <div class="container text-white">
            <h3 class="display-5" style="text-align: center; font-family: gentium basic,serif; ">KUY LAUNDRY<br>MESIN CUCI DISIINI MENUNGGU KEDATANGANMU</h3><br>
            <p class="lead" style="text-align:center; font-size:25px; font-family:gentium basic">Tempat laundry yang bekerja secara cepat<br>yang menjamin cucianmu akan wangi dan bersih
            </p>
            <hr class="my-4">
            <div class="text-center">
                <a href="#Home" class="btn btn-outline-info btn-lg" role="button" style="font-family: gentium basic, serif">Pelajari</a>
            </div>
        </div>
    </div>
    <!-- end of jumbotron -->
    
    <!-- Home -->
    <div class="home" id="home">
            <div class="d-flex justify-content-center">
                <p class="judul">Apa Sih Kuy Laundry Tuh?</p>
            </div>
                    <div class="mx-auto">
                        <p class="subJudul">Kuy Laundry adalah sistem yang membantu usaha Laundry dengan aplikasi berbasis
                        web. Adanya Kuy Laudry pekerjaan yang menumpuk akan lebih diselesaikan dengan
                        mudah dan cepat. Didukung dengan sistem jadwal cuci maka pencucian akan terasa
                        lebih terarah dan termanajemen.</p>
                    </div>
    </div>
    <!-- end of home -->

    <!-- About -->
    <div class="about" id="about">
            <div class="mx-auto">
                <p class="textAbout">Kuy Laundry dibangun sejak tahun 2020 dengan fasilitas yang dikhususkan untuk
                    Pencatatan Laundry dan Bergerak dibidang ekonomi bisnis. Membantu para outlet
                    Laundry dalam bidang transaksi, keuangan, maupun manajemen. Selain itu Kuy
                    Laundry juga memiliki</p>
            </div>
        <div class="container">   
            <div class="row">
                <div class="col-md-4">  
                    <div class="card mx-auto" style="width: 18rem;">
                        <img class="card-img-top rounded mx-auto d-block" src="../assets/images/adress.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Outlet dan cabangan lebih dari 100</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"> 
                <div class="card mx-auto" style="width: 18rem;">
                        <img class="card-img-top rounded mx-auto d-block" src="../assets/images/people.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Mutasi karyawan antar cabang? dengan Kuy Laundry bisa teratasi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="card mx-auto" style="width: 18rem;">
                        <img class="card-img-top rounded mx-auto d-block" src="../assets/images/new-message.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Kalau cucianmu sudah jadi, akan ada sms langsung ke nomormu</p>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of about -->

    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/jquery.slim.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script>
        $(function(){
            objectFitImages()
        })
    </script>
</body>
    
</html>