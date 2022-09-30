
<?php
  if (!empty($_SESSION['nim'])) {
    $nim = $_SESSION['nim'];
  }

  if (!empty($nim)) {
    require("../models/mahasiswa.php");
    $mhs = new mahasiswa();
    $data = $mhs->tampil_nim($nim);
    $nama = $data["nama"];
  }
  else {header("Location:login");}
?>