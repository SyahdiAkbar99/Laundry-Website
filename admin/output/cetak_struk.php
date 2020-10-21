<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Laundry</title>
    
    <link href="../../assets/css/bootstrap-3.css" rel="stylesheet" />
    <link href="../../assets/css/semantic.css" rel="stylesheet" />
    <style>
        h4{
            text-align:center;
        }
        h5{
            font-weight:bold;
        }
        p.name{
            text-align:left;
            font-size:15px;
        }
        .container{
            border: 1px solid black;
            margin-top:20px;
            width:300px;
        }
        .border-fix{
            border: 1px solid black;
        }
        .mtop{
            margin-top:-10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h4>Kuy Laundry <br>
                Jalan Hayam Wuruk No 149
                <br>+6281373230877</h4>
            </div>
        </div>
        <br>
      
        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="qrcode">
                    <canvas id = "canvas"></canvas>
                </div><br>
                <button class="btn btn-default ui primary button" onclick="genQR()">Generate QR Code</button>     
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-xs-6 text-left">
                <p class="name">Pelanggan&nbsp;:&nbsp;Garini Azzahra</p>
            </div>
            <div class="col-xs-6">
                <p class="name">Kasir&nbsp;:&nbsp;Andi Pras</p>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-xs-6">
                <form name="random_form">
                    <input type="text" class="form-control ui input" name="disini" value="" style="width:100%" disabled>
                </form>
            </div>
            <div class="col-xs-6"><input type="button" class="btn btn-success ui primary button" value="No Pesanan" onClick="random_all();"></div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-6 text-left">Jam&nbsp;:&nbsp;09.18</div>
            <div class="col-xs-6 text-left">Tgl&nbsp;:&nbsp;12-11-98</div>
        </div>       
        <hr>
        <div class="row">
            <div class="col-xs-8">CUCI KERING BAJU 4KG</div>
        </div>
        <div class="row">
            <div class="col-xs-4 text-left">4 x 3000</div>
            <div class="col-xs-4 col-xs-offset-4">12000</div><hr width="85%"> 
        </div>

        <div class="row">
            <div class="col-xs-8">SETRIKA BAJU 2KG</div>
        </div>
        <div class="row">
            <div class="col-xs-4 text-left">2 x 3500</div>
            <div class="col-xs-4 col-xs-offset-4">7000</div><hr width="86%"> 
        </div>

        <div class="row">
            <div class="col-xs-8">CUCI BONEKA 2 KG</div>
        </div> 
        <div class="row">
            <div class="col-xs-4 text-left">2 X 7000</div>
            <div class="col-xs-4 col-xs-offset-4">14.000</div><hr width="85%"> 
        </div>
        <div class="row">
            <div class="col-xs-4 text-left">TOTAL</div>
            <div class="col-xs-4 col-xs-offset-4">33.000</div>
        </div>
        <div class="row">
            <div class="col-xs-4 text-left">BAYAR</div>
            <div class="col-xs-4 col-xs-offset-4">50.000</div>
        </div>
        <div class="row">
            <div class="col-xs-4 text-left">KEMBALI</div>
            <div class="col-xs-4 col-xs-offset-4">17.000</div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xs-12 text-center">
                <h5>CUCIAN YANG TELAH DIBAWA PULANG DILUAR TANGGUNG JAWAB KAMI</h5>
            </div>
        </div><br>
        <div class="row">
            <div class="col-xs-12 text-center">
                <h5>TERIMAKASIH TELAH MEMAKAI JASA KUY LAUNDRY</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 text-center">
            <input type="button" value="Batal" class="btn ui primary button" onClick="window.location.href='../../admin/input/dashboard_i.php';">
                <input type="button" value="Print" class="btn ui primary button" onClick="window.print()">               
            </div>
        </div>
        <br>
    </div>
    

    <script src="../../assets/js/jquery-1.10.2.js"></script>
    <script src="../../assets/js/bootstrap-3.min.js"></script>
    <script src="../../assets/js/qrcode.min.js"></script>
    <script language="javascript" type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );

        function genQR(str) {
            var str = document.querySelector("input").value;
            QRCode.toCanvas(document.getElementById("canvas"), str, function(error) {
                if (error) console.error(error);
                console.log("success!");
            });
        }
        function random_all() {
        var campur = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
        var panjang = 9;
        var random_all = '';
        for (var i=0; i<panjang; i++) {
            var hasil = Math.floor(Math.random() * campur.length);
            random_all += campur.substring(hasil,hasil+1);
        }
        document.random_form.disini.value = random_all;
    }
    </script>
</body>
</html>
