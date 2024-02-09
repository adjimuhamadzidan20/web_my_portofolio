<?php  
	require 'koneksi_db.php';
	session_start();

	$id = $_POST['id'];
	$tentang = $_POST['tentang'];
	
	$sql = "UPDATE dt_tentang SET deskripsi = '$tentang' WHERE id = $id";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Tentang berhasil diubah!';

		header('Location: ../index.php?halaman=tentang');
		exit;
	} 
	else {
		$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Tentang gagal diubah!';

		header('Location: ../index.php?halaman=tentang');
		exit;
	}

?>