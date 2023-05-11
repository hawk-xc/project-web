<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mahasiswa database</title>

    <!-- script area start -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300&family=Pacifico&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="style.css" />
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- script area ends -->
  </head>
  <body>
    <!-- php validation system -->
    <?php
        if (!isset($_GET['nama']) || !isset($_GET['nrp']) || !isset($_GET['jurusan'])) {
            header('Location: index.php');
            exit;
        }
    ?>

    <!-- if value available, then -->
    <h2>Data Mahasiswa</h2>
    <div class="container">
        <?php $gambar = $_GET['media']; ?>
        <img src="<?php echo $gambar; ?>" alt="media image" style="width: 100px; height: 100px;"/>
        <span>
          <?php
            echo "<br>", $_GET['nama'], "<br>";
            echo $_GET['nrp'], "<br>";
            echo $_GET['jurusan'];     
           ?>
           <br>
           <br>
           <a href="index.php">Kembali ...</a>
        </span>
    </div>
  </body>
</html>
