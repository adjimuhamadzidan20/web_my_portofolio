<?php
	error_reporting(error_reporting() & ~E_NOTICE);
	
	if (isset($_GET['halaman'])) {

		if ($_GET['halaman'] == 'dashboard') {
			require 'pages/dashboard.php';
		} 
		else if ($_GET['halaman'] == 'profil') {
			require 'pages/profil.php';
		}
		else if ($_GET['halaman'] == 'tambah_data_profil') {
			require 'pages/add_pages/tambah_profil.php';
		} 
		else if ($_GET['halaman'] == 'akun') {
			require 'pages/pengaturan_akun.php';
		}
		else if ($_GET['halaman'] == 'tentang') {
			require 'pages/tentang.php';
		}
		else if ($_GET['halaman'] == 'tambah_tentang') {
			require 'pages/add_pages/tambah_hal_tentang.php';
		}
		else if ($_GET['halaman'] == 'edit_tentang') {
			require 'pages/edit_pages/edit_hal_tentang.php';
		}
		else if ($_GET['halaman'] == 'portofolio') {
			require 'pages/portofolio.php';
		}
		else if ($_GET['halaman'] == 'tambah_porto') {
			require 'pages/add_pages/tambah_hal_portofolio.php';
		}
		else if ($_GET['halaman'] == 'edit_porto') {
			require 'pages/edit_pages/edit_hal_portofolio.php';
		}
		else if ($_GET['halaman'] == 'sosial_media') {
			require 'pages/sosialmedia.php';
		}
		else if ($_GET['halaman'] == 'kemampuan') {
			require 'pages/kemampuan.php';
		}
		else if ($_GET['halaman'] == 'tambah_kemampuan') {
			require 'pages/add_pages/tambah_hal_kemampuan.php';
		}
		else if ($_GET['halaman'] == 'edit_kemampuan') {
			require 'pages/edit_pages/edit_hal_kemampuan.php';
		}
		else if ($_GET['halaman'] == 'basis') {
			require 'pages/basis_projek.php';
		} 
		else if ($_GET['halaman'] == 'tambah_basis') {
			require 'pages/add_pages/tambah_hal_basisprojek.php';
		} 
		else if ($_GET['halaman'] == 'edit_basis') {
			require 'pages/edit_pages/edit_hal_basisprojek.php';
		}  
		else if ($_GET['halaman'] == 'status') {
			require 'pages/status_profil.php';
		} 
		else if ($_GET['halaman'] == 'tambah_status') {
			require 'pages/add_pages/tambah_hal_statusprofil.php';
		} 
		else if ($_GET['halaman'] == 'edit_status') {
			require 'pages/edit_pages/edit_hal_statusprofil.php';
		} 
		else if ($_GET['halaman'] == 'kontak') {
			require 'pages/kontak.php';
		} 
		else {
			require 'pages/404_error.php';
		} 
	} 
	else {
		require 'pages/dashboard.php';
	}

?>