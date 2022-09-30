<?php
	require("../models/probinmaba.php");
	$prob = new probinmaba();
	$data_prob = $prob->tampil_nim($nim);
	//var_dump($data_prob);
?>