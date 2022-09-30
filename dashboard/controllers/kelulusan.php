<?php
	require("../models/kegiatan.php");
	require("../models/probinmaba.php");
	$kegiatan = new kegiatan();
	$prob = new probinmaba();
	$data_kegiatan = $kegiatan->tampil_nim($nim);
	$data_prob = $prob->tampil_nim($nim);
?>