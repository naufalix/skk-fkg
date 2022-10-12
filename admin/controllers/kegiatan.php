<?php
	require("../models/kegiatan.php");
	require("../models/mahasiswa.php");
	$kegiatan = new kegiatan();
	$mahasiswa = new mahasiswa();

	/* Tambah */ 
    if (isset($_POST["submit-tambah"])) {
      	if (!empty($_POST["nim"])&&!empty($_POST["nama"])&&!empty($_POST["jabatan"])&&!empty($_POST["nilai"])&&!empty($_POST["jenis"])&&isset($_POST["status"])) {
	        $nim = $_POST['nim'];
	        $jab = $_POST["jabatan"];
	        $nil = $_POST['nilai'];
	        $nam = $_POST["nama"];
	        $jen = $_POST["jenis"];
	        $sta = $_POST["status"];
	        if($mahasiswa->tampil_nim($nim)){
		        $kegiatan->tambah($nim,$jab,$nil,$nam,$jen,$sta);
		        $success = "Kegiatan berhasil ditambahkan";
		    } else {$error = "NIM bukan mahasiswa FKG!";}
        }else {$error = "Semua data wajib diisi!";}
    }

    /* Edit */
    if (isset($_POST["submit-edit"])) {
      if (!empty($_POST["id"])&&!empty($_POST["nama"])&&!empty($_POST["jabatan"])&&!empty($_POST["nilai"])&&!empty($_POST["jenis"])&&isset($_POST["status"])) {
        $id = $_POST['id'];
        $jab = $_POST["jabatan"];
        $nil = $_POST['nilai'];
        $nam = $_POST["nama"];
        $jen = $_POST["jenis"];
        $sta = $_POST["status"];
        $kegiatan->ubah($id,$jab,$nil,$nam,$jen,$sta);
		$success = "Kegiatan berhasil ditambahkan";
      } 
      else {$error = "Edit Gagal! Harap isi semua data dengan benar";}
    }

    /* Hapus */ 
    if (isset($_POST["submit-hapus"])) {
      if (!empty($_POST["id"])) {
      	$id = $_POST["id"];
      	if ($kegiatan->tampil_id($id)) {
	        $kegiatan->hapus($id);
	        $success = "Kegiatan berhasil dihapus";
	    }
	    else {$error = "Mahasiswa tidak ditemukan";}
      }
      else {$error = "Mahasiswa tidak ditemukan.";}
    } 

    $data_kegiatan = $kegiatan->tampil();
?>