<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- script area -->
    <title>form input mahasiswa</title>
  </head>
  <body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="container" method="POST">
      <fieldset class="box">
        <legend>Form input mahasiswa</legend>
        <div class="box-form">
          <label for="mhs">Masukkan Nama</label> <br />
          <input type="text" name="mhs" id="mhs" placeholder="nama mahasiswa" />
          <br />
          <br />
          <label for="nim">Masukkan NIM</label><br />
          <input type="text" name="nim" id="nim" placeholder="masukkan NIM" />

          <!-- radio button -->
          <br />
          <br />
          <label for="drone">Laki-laki</label>
          <input type="radio" value="laki-laki" id="drone" name="radio-form" />
          <label for="drone">Perempuan</label>
          <input type="radio" value="perempuan" id="drone" name="radio-form" />

          <br>
	  <br>
	  <label for="alamat">Masukkan Alamat</label>
	  <br>
	  <textarea name="address" cols="40" rows="5" id="alamat"></textarea>
	  <br />
	  <br />
          <button type="submit" name="submit">Kirim</button> <button type="reset">Hapus</button>
        </div>
      </fieldset>
      <fieldset class="box">
        <legend>form yang dikirim</legend>
        <?php
          if (isset($_POST['submit'])) {
            $name = $_POST['mhs'];
            $nim = $_POST['nim'];
	    $jk = $_POST['radio-form'];
	    $alt = $_POST['address'];
	  }
	?>
	<h3>Form Response</h3>
	<br>
	<hr />
	<div class="box-respon">
		<div class="box-1">
			Nama <br />
			NIM <br />
			Jenis Kel <br />
			Alamat <br />
		</div>
		<div class="box-1">
			<?php 
				echo ": $name<br />";
				echo ": $nim<br />";
				echo ": $jk<br />";
				echo ": $alt<br />";
			?>
		</div>
		<?php echo date('Y/m/d'); ?>
	</p>
      </fieldset>
    </form>
  </body>
<style type="text/css">
* {
  padding: 0px;
  margin: 0px;
}

.container {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1rem;
  margin: 5rem;
}

.container .box {
  /* width: 100%; */
  height: 320px;
  padding: 1rem;
}

.container .box .box-form {
  column-gap: 10px;
}

.container .box .box-respon {
  display: grid;
  grid-template-columns: 100px 300px;
}
</style>	
</html>
