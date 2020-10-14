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
    }
</style>
<body>
    <!-- navigation -->
    <nav class="navbar navbar-expand-lg navbar-light static-top" style="background-color:black">
        <div class="container">
                <a class="navbar-brand" href="#Logo" style="color: white; font-style:italic;">Kuy Laundry
                </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a href="#Home" class="nav-link btn btn-outline-info">Home</a>
                        <span class="sr-only">(current)</span>
                    </li>
                    <li class="nav-item">
                        <a href="#About" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Testi" class="nav-link">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Contact" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

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