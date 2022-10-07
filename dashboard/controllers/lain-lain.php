<?php
	require("../models/kegiatan.php");
	$kegiatan = new kegiatan();

	/* Tambah */ 
    if (isset($_POST["submit-tambah"])) {
      	if (!empty($_POST["nama"])&&!empty($_POST["jabatan"])) {
	        $na = $_POST["nama"];
	        $ja = $_POST["jabatan"];
	        $je = "LAIN-LAIN";
	        $ni = $_SESSION['nim'];
	        $kegiatan->tambah($ni,$ja,0,$na,$je,0);
	        $success = "Kegiatan berhasil ditambahkan";
        }else {
            $error = "Semua data wajib diisi!";
        }
    }

	$data_kegiatan = $kegiatan->tampil_nim($nim);
?>