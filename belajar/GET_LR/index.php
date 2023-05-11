<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <title>Document</title>
  </head>
  <body>
    <!-- php data -->
    <?php
      $data_arr = [
      ['nama'=>'Wahyu', 'nrp'=>'12221171', 'jurusan'=>'SISTEM INFORMATIKA', 'media'=>'media/1.jpg'], 
      ['nama'=>'Denny', 'nrp'=>'12221177', 'jurusan'=>'SISTEM INFORMATIKA', 'media'=>'media/2.jpg'], 
      ['nama'=>'Bagus', 'nrp'=>'12221178', 'jurusan'=>'SISTEM INFORMATIKA', 'media'=>'media/3.jpg'],
      ['nama'=>'Setyaki', 'nrp'=>'12221133', 'jurusan'=>'SISTEM MANAJEMEN BASIS DATA', 'media'=>'media/4.jpg'],
      ['nama'=>'Bambang', 'nrp'=>'12221122', 'jurusan'=>'SISTEM MANAJEMEN BASIS DATA', 'media'=>'media/5.jpg'],
      ['nama'=>'Dimas Atok', 'nrp'=>'12221156', 'jurusan'=>'SISTEM PERANGCANGAN SISTEM KOMPUTER', 'media'=>'media/6.jpg'] 
      ];
    ?>
    <h2>Daftar Mahasiswa Zonasi</h2>
    <div class="container">
      <?php
        foreach ( $data_arr as $data ):
          echo "<a href='mahasiswa.php?nama=", $data['nama'], "&nrp=",  $data['nrp'], "&jurusan=", $data['jurusan'], "&media=", $data['media'], "'>", "<div class='text-box'><i data-feather='user' style='width: 15px;'></i>", "<span>", $data['nama'], "</span>", "</div></a>";
          endforeach;
      ?>
    </div>
  </body>
  <script>
    feather.replace()
  </script>
</html>
