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
                        <h2>Form Pemesanan</h2>
                    </div>
                </div>
                <!-- /. baris  -->
                <hr />
                <div class="row">
                   <div class="col-md-12 table-responsive">
                        <div class="container">
                            <h2>Input Data Pemesanan</h2>
                            <p>Usahakan pengisian data dengan jelas dan akurat</p>
                            <form class="form-inline" action="../../admin/output/dashboard.php" name="random_form">
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="no_pemesanan">No Pemesanan :</label><br>
                                        <input type="text" class="form-control" id="no_pemesanan" placeholder="No Pemesanan" name="no_psn" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="nama_customer">Nama Customer :</label><br>
                                        <input type="text" class="form-control" id="nama_customer" placeholder="Nama Customer" name="nm_cst" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="nama_kasir">Nama Kasir :</label><br>
                                        <input type="text" class="form-control" id="nama_kasir" placeholder="Nama Kasir" name="nm_ksr" required>
                                    </div>
                                    <br>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="Jenis Cuci" >Jenis Cucian :</label><br>
                                        <select id="jenis_cuci" class="form-control" name="jenis_cuci" required>
                                            <option value="">Pilih...</option>
                                            <option value="0">Baju (Rp.3000)</option>
                                            <option value="1">Boneka (Rp.7000)</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="paket">Paket :</label><br>
                                        <select id="paket" class="form-control" name="paket" required>
                                            <option value="">Pilih...</option>
                                            <option value="0">Paket Kilat (1 Hari - Kering) </option>
                                            <option value="1">Paket Normal (2 Hari - Kering)</option>
                                            <option value="2">Paket Kilat (1 Hari - Setrika) </option>
                                            <option value="3">Paket Normal (2 Hari - Setrika)</option>
                                        </select>
                                    </div>
                                    <br>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <div class="input-group">
                                            <label for="berat_cuci">Berat Cucian :</label><br>
                                            <div class="input-group">
                                                <input type="text" class="form-control" aria-label="Amount (rounded to the nearest dollar)" placeholder="1"  name="berat_cuci" required>
                                                <span class="input-group-addon">Kg</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="parfum">Parfum :</label><br>
                                        <select id="parfum" class="form-control" name="parfum" required>
                                            <option value="">Pilih...</option>
                                            <option value="0">Parfum Sakura (Rp.1000)</option>
                                            <option value="1">Parfum Casablance (Rp.2000)</option>
                                        </select>
                                    </div>
                                    <br>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="Waktu Pemesanan">Waktu Pemesanan :</label><br>
                                        <input type="time" class="form-control" id="Waktu_pesan" placeholder="Waktu Pesan" name="wkt_psn" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Tanggal Pemesanan">Tanggal Pemesanan :</label><br>
                                        <input type="date" class="form-control" id="tanggal_pesan" placeholder="Tanggal Pesan" name="tgl_psn" required>
                                    </div>
                                    <br>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="Status" >Status :</label><br>
                                        <select id="status" class="form-control" name="status" required>
                                            <option value="">Pilih...</option>
                                            <option value="0">Tunggu</option>
                                            <option value="1">Cuci</option>
                                            <option value="2">Setrika</option>
                                            <option value="3">Selesai</option>
                                        </select>
                                    </div> <br></br>
                                    <div class="form-group col-md-6">
                                        <label for="total">Harga Total :</label><br>
                                        <div class="input-group">
                                            <span class="input-group-addon">Rp</span>
                                            <input type="text" class="form-control input-lg" aria-label="Amount (rounded to the nearest dollar)" placeholder="1"  name="total" disabled>
                                            <span class="input-group-addon">,00</span>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="form-group col-md-6 col-md-offset-6">
                                        <a href="../../admin/output/dashboard.php" style="border-radius:20px;" class="btn btn-default" role="button">Batal</a>
                                        <a href="../../admin/output/cetak_struk.php" style="border-radius:20px;" class="btn btn-info" role="button" target="_blank">Print Preview</a>
                                        <button type="submit" class="btn btn-info" style="border-radius:20px;">Simpan</button>
                                    </div>
                                    <br>
                                </div>
                            </form>
                        </div>
                   </div>
                </div>

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
