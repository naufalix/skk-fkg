<?php
	require("../models/mahasiswa.php");
	require("../models/probinmaba.php");
	$mahasiswa = new mahasiswa();
	$probinmaba = new probinmaba();

	/* Tambah */ 
    if (isset($_POST["submit-tambah"])) {
      	if (!empty($_POST["nim"])&&!empty($_POST["pk2maba"])&&!empty($_POST["bkm"])&&!empty($_POST["pkmmaba"])&&!empty($_POST["penmas"])) {
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

	$data_mhs = $mahasiswa->tampil();
	$data_prob = $probinmaba->tampil();
	//var_dump($data_prob);
?>