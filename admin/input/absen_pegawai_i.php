<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Laundry</title>
    
    <link href="../../assets/css/bootstrap-3.css" rel="stylesheet" />
    
    <link href="../../assets/css/font-awesome.css" rel="stylesheet" />
    
    <link href="../../assets/css/customku.css" rel="stylesheet" />

    <link href="../../assets/css/dataTables.bootstrap.min.css" rel="stylesheet" />
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <style>
        tr,th{
            text-align:center;
        }
    </style>
</head>
<body>
    <div id="wrapper">
    <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-folder-open"></i>&nbsp; ADMIN</a>
                </div>
            </div>
        </div>
        <!-- /. navigation  -->
        <nav class="navbar-default navbar-side" role="navigation" id="side-bar">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu" >
                    <li class="text-center user-image-back" >
                        <img src="../../assets/images/admin.png" class="img-responsive" style="border-radius:50%;"/></br>
                        <p class="text-center" style="font-weight:bold; font-size:18px; font-family:serif; padding 3px;">Selamat Bekerja <?php $name ?></p>
                    </li>

                    <li>
                        <a href="../../admin/output/dashboard.php"><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>

                    <li>
                        <a href="../../admin/output/absen_pegawai.php"><i class="fa fa-table "></i>Absensi Pegawai</a>
                    </li>

                    <li>
                        <a href="../../admin/output/stok_barang.php"><i class="fa fa-qrcode "></i>Stock Barang</a>
                    </li>

                    <li>
                        <a href="../../admin/output/ongkos.php"><i class="fa fa-bar-chart-o"></i>Ongkos</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-sitemap "></i>Opsi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../../login/login.php"> <i class="fa fa-sign-out"></i>Logout</a>
                            </li>
                            <li>
                                <a href="../../landingpage/index.php"> <i class="fa fa-step-backward"></i> Landing Page </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- sidebar  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Absensi Pegawai</h2>
                    </div>
                </div>
                <!-- /. baris  -->
                <hr />
                <div class="row">
                   <div class="col-md-12 table-responsive">
                        <div class="container">
                            <h2>Absensi Pegawai</h2>
                            <p>Usahakan pengisian data dengan jelas dan akurat</p>
                            <form class="form-inline" action="../../admin/output/absen_pegawai.php">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="Nama Pegawai" >Nama Pegawai :</label><br>
                                        <select id="nama_pegawai" class="form-control" name="nm_pegawai" required>
                                            <option value="">Pilih...</option>
                                            <option value="0">Andi Satriawan</option>
                                            <option value="1">Beni Sutarjo</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <label for="Tanggal Hadir">Tanggal hadir :</label><br>
                                                <input type="date" class="form-control" placeholder="dd/mm/yyyy"  name="tgl_h" required> 
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="Presensi" >Presensi</label><br>
                                        <select id="presensi" class="form-control" name="presensi" required>
                                            <option value="">Pilih...</option>
                                            <option value="0">Hadir</option>
                                            <option value="1">Absen</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Jam Masuk">Jam Masuk :</label><br>
                                        <div class="input-group">
                                            <input type="time" name="jam_msk" id="jam_masuk" aria-label="Amount (rounded to the nearest dollar)" required>                        
                                            <span style="display:inline-block; background-color:grey;">WIB</span>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="Jam Keluar">Jam Keluar :</label><br>
                                        <div class="input-group">
                                            <input type="time" name="jam_klr" id="jam_keluar" aria-label="Amount (rounded to the nearest dollar)" required>                        
                                            <span style="display:inline-block; background-color:grey;">WIB</span>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <button type="submit" class="btn btn-default" style="margin-top:10px;border-radius:20px;">Batal</button>
                                        <button type="submit" class="btn btn-info" style="margin-top:10px;border-radius:20px;">Simpan</button>
                                    </div>
                                    <br>
                                </div>
                            </form>
                        </div>
                   </div>
                </div>
                <!-- /. baris  -->
                <hr />
                  <div class="row">

                    </div>
                </div>
                <!-- /. baris  -->

            </div>
            <!-- /. Page Inner  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
        <!-- Footer -->
        <footer class="page-footer font-small bg-info pt-4">
                <!-- Footer Links -->
                <div class="container-fluid text-center text-md-left">
                </div>
                <!-- Footer Links -->
                    <!-- Copyright -->
                    <div class="footer-copyright text-center py-3" style="background-color: #31c2db; color:white; height:50px; font-size:13px; padding-top:15px;">© 2020 Copyright:
                        <a href="https://ideku-reserved.com/" style="font:15 serif; font-weight:bold; color:white"> Ideku reserved.com</a>
                    </div>
                    <!-- Copyright -->
            </footer>
            <!-- Footer -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    
    <script src="../../assets/js/jquery-1.10.2.js"></script>
    
    <script src="../../assets/js/bootstrap-3.min.js"></script>
    
    <script src="../../assets/js/jquery.metisMenu.js"></script>

    <script src="../../assets/js/jquery.dataTables.min.js"></script>
    
    <script src="../../assets/js/dataTables.bootstrap.min.js"></script>
    
    <script src="../../assets/js/custom.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
</body>
</html>
