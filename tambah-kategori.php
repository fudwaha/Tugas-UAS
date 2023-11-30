<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }

    $query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE admin_id = '".$_SESSION['id']."' ");
    $d = mysqli_fetch_object($query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukawarung</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Saira+Extra+Condensed&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
            <h1><a href="dashboard.php">Bukawarung</a></h1>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="profil.php">Profil</a></li>
                <li><a href="data-kategori.php">Data Kategori</a></li>
                <li><a href="data-produk.php">Data Produk</a></li>
                <li><a href="keluar.php">Keluar</a></li>
            </ul>
        </div>  
    </header>

    <!-- content -->
    <div class="section">
        <div class="container">
            <h3>Tambah Data Kategori</h3>
            <div class="box">
                <form action="" method="POST">
                    <input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->admin_name ?>" required>
                    <input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username ?>"required>
                    <input type="text" name="hp" placeholder="Nomor Hp" class="input-control" value="<?php echo $d->admin_telp ?>"required>
                    <input type="email" name="email" placeholder="Email" class="input-control" value="<?php echo $d->admin_email ?>"required>
                    <input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $d->admin_address ?>"required>
                    <input type="submit" name="submit" value="Ubah Profil" class="btn">
                </form>
               
            </div>
        </div>
    </div>

    <!-- footer-->
    <footer>
        <div class="container">
            <small>Copyright &copy; 2020 - Bukawarung.</small>
        </div>
    </footer>
</body> 
</html>