<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Manager Laundry</title>
    
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
                    <a class="navbar-brand" href="#"><i class="fa fa-folder-open"></i>&nbsp; MANAGER</a>
                </div>
            </div>
        </div>
        <!-- /. navigation  -->
        <nav class="navbar-default navbar-side" role="navigation" id="side-bar">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu" >
                    <li class="text-center user-image-back" >
                        <img src="../../assets/images/manager.png" class="img-responsive" style="border-radius:50%;"/></br>
                        <p class="text-center" style="font-weight:bold; font-size:18px; font-family:serif; padding 3px;">Selamat Bekerja <?php $name ?></p>
                    </li>

                    <li>
                        <a href="../../manager/output/dashboard_m.php"><i class="fa fa-desktop "></i>Dashboard</a>
                    </li>

                    <li>
                        <a href="../../manager/output/data_pegawai.php"><i class="fa fa-table "></i>Data Pegawai</a>
                    </li>

                    <li>
                        <a href="../../manager/output/pend_bersih.php"><i class="fa fa-qrcode "></i>Pendapatan Bersih</a>
                    </li>

                    <li>
                        <a href="../../manager/output/stok.php"><i class="fa fa-bar-chart-o"></i>Stok</a>
                    </li>

                    <li>
                        <a href="../../manager/output/pend_laundry.php"><i class="fa fa-bar-chart-o"></i>Pendapatan Laundry</a>
                    </li>

                    <li>
                        <a href="../../manager/output/gaji.php"><i class="fa fa-bar-chart-o"></i>Gaji</a>
                    </li>

                    <li>
                        <a href="../../login/login.php"><i class="fa fa-sign-out"></i>Logout</a>
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
                        <h2>Data Pegawai</h2>
                    </div>
                </div>
                <!-- /. baris  -->
                <hr />
                <div class="row">
                   <div class="col-md-12 table-responsive">
                   <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pegawai</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Masuk Tanggal</th>
                                <th>Keluar Tanggal</th>
                                <th>Total Absen</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Jordi Setiawan</td>
                                <td>Jl. Sutoyo</td>
                                <td>Aktif</td>
                                <td>1/2/2020</td>
                                <td>1/5/2020</td>
                                <td>30</td>
                                <td style="text-align:center;">
                                    <a href="#" class="btn btn-warning" role="buttton"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger" role="buttton"><i class="fa fa-eraser"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Isnaini</td>
                                <td>Jl. Utomo</td>
                                <td>Aktif</td>
                                <td>1/5/2020</td>
                                <td>1/8/2020</td>
                                <td>25</td>
                                <td style="text-align:center;">
                                    <a href="#" class="btn btn-warning" role="buttton"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger" role="buttton"><i class="fa fa-eraser"></i></a>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                 <th>No</th>
                                <th>Nama Pegawai</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Masuk Tanggal</th>
                                <th>Keluar Tanggal</th>
                                <th>Total Absen</th>
                                <th>Opsi</th>
                            </tr>
                        </tfoot>
                    </table>
                   </div>
                </div>
                <a href="../../manager/input/data_pegawai_i.php" class="btn btn-info text-center" role="button" style="border-radius:10px;"><i class="fa fa-plus"></i>&nbsp;tambah</a>
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
