<?php
	require("../models/mahasiswa.php");
	require("../models/probinmaba.php");
	$mahasiswa = new mahasiswa();
	$probinmaba = new probinmaba();

	/* Tambah */ 
    if (isset($_POST["submit-tambah"])) {
      	if (isset($_POST["nim"],$_POST["pk2maba"],$_POST["bkm"],$_POST["pkmmaba"],$_POST["penmas"])) {
	        $n = $_POST["nim"];
	        if($mahasiswa->tampil_nim($n)){
	        	if(!$probinmaba->tampil_nim($n)){
			        $p1 = $_POST["pk2maba"];
			        $b1 = $_POST["bkm"];
			        $p2 = $_POST["pkmmaba"];
			        $p3 = $_POST["penmas"];
			        $probinmaba->tambah($n,$p1,$b1,$p2,$p3);
			        $success = "Probinmaba berhasil ditambahkan";
			    } else {$error = "Data sudah ada!";}
		    } else {$error = "NIM bukan mahasiswa FKG!";}
        } else {$error = "Semua data wajib diisi!";}
    }

    /* Edit */
    if (isset($_POST["submit-edit"])) {
      if (isset($_POST["id"],$_POST["pk2maba"],$_POST["bkm"],$_POST["pkmmaba"],$_POST["penmas"])) {
        $id = $_POST["id"];
        $p1 = $_POST["pk2maba"];
        $b1 = $_POST["bkm"];
        $p2 = $_POST["pkmmaba"];
        $p3 = $_POST["penmas"];
        if ($probinmaba->tampil_id($id)) {
          $probinmaba->ubah($id,$p1,$b1,$p2,$p3);
          $success = "Data berhasil diedit";
        }
        else {$error = "Mahasiswa tidak ditemukan";}
      } 
      else {$error = "Edit Gagal! Harap isi semua data dengan benar";}
    }

    /* Hapus */ 
    if (isset($_POST["submit-hapus"])) {
      if (!empty($_POST["id"])) {
      	if ($probinmaba->tampil_id($id)) {
	        $i = $_POST["id"];
	        $n = $mahasiswa->tampil_nim($probinmaba->tampil_id($i)["nim"])["nama"];
	        $probinmaba->hapus($i);
	        $success = $n." berhasil dihapus";
	    }
	    else {$error = "Mahasiswa tidak ditemukan";}
      }
      else {$error = "Mahasiswa tidak ditemukan.";}
    } 

	$data_mhs = $mahasiswa->tampil();
	$data_prob = $probinmaba->tampil();
	//var_dump($data_prob);
?>