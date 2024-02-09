<?php  
	require 'koneksi_db.php';
	session_start();

	$tentang = $_POST['tentang'];

	$sql = "INSERT INTO dt_tentang VALUES ('', '$tentang')";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Tentang berhasil ditambahkan!';

		header('Location: ../index.php?halaman=tentang');
		exit;
	} 
	else {
		$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Tentang gagal ditambahkan!';

		header('Location: ../index.php?halaman=tentang');
		exit;
	}

?>