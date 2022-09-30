<?php
	require("../models/kegiatan.php");
	$kegiatan = new kegiatan();
	$data_kegiatan = $kegiatan->tampil_nim($nim);
	//var_dump($data_prob);
?>