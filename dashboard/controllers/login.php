<?php 
  if (isset($_POST["login"],$_POST["nim"])) {
    $nim = $_POST["nim"];

    //cek nim
    require("../models/mahasiswa.php");
    $mhs = new mahasiswa();
    $data = $mhs->tampil_nim($nim);
    if ($data) {
        $nim = $data["nim"];
        $_SESSION['nim'] = $nim;
        header("Location:home"); 
        //echo $id."<br>".$role;
    } else {$error="NIM salah";}
  }
?>