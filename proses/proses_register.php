
<?php include "../proses/koneksi.php"; ?>
<?php
		if(isset($_POST['submit'])){
			//memanggil nilai dari sebuah inputan dan ditampung kedalam variabel
			$username		= $_POST['username'];
            $no_hp 		    = $_POST['no_hp'];
            $password     	= $_POST['password'];
            $level      	= $_POST['level'];
                   
            
            $sql = mysqli_query
				    	($koneksi, "INSERT INTO user(username, no_hp, password, level)
				    	VALUES('$username', '$no_hp', md5('$password'), '$level')" ) or die(mysqli_error($koneksi));
                    if($sql){
                        echo '<script>alert("Berhasil menambahkan data - Silahkan Masuk."); document.location="../login/login.php";</script>';
                    }
                    else{
                        echo '<script>alert("Gagal melakukan registrasi!"); document.location="../login/register.php ";</script>';
                    }
        }

            
	?>

