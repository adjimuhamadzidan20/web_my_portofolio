<?php

	if (isset($_GET['halaman'])) {

		if ($_GET['halaman'] == 'dashboard') {
			require 'pages/dashboard.php';
		} 
		else if ($_GET['halaman'] == 'profil') {
			require 'pages/profil.php';
		}
		else if ($_GET['halaman'] == 'tambah_data_profil') {
			require 'pages/tambah_profil.php';
		}
		else if ($_GET['halaman'] == 'tentang') {
			require 'pages/tentang.php';
		}
		else if ($_GET['halaman'] == 'tambah_tentang') {
			require 'pages/tambah_hal_tentang.php';
		}
		else if ($_GET['halaman'] == 'edit_tentang') {
			require 'pages/edit_hal_tentang.php';
		}
		else if ($_GET['halaman'] == 'portofolio') {
			require 'pages/portofolio.php';
		}
		else if ($_GET['halaman'] == 'tambah_porto') {
			require 'pages/tambah_hal_portofolio.php';
		}
		else if ($_GET['halaman'] == 'edit_porto') {
			require 'pages/edit_hal_portofolio.php';
		}
		else if ($_GET['halaman'] == 'sosial_media') {
			require 'pages/sosialmedia.php';
		} 
		else {
			require 'pages/404_error.php';
		} 
	} 
	else {
		require 'pages/dashboard.php';
	}


?>