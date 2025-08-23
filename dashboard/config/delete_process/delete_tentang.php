<?php  
	require 'koneksi_db.php';
	session_start();

	$id = $_GET['id'];
	$sql = "DELETE FROM dt_tentang WHERE id = $id";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Tentang berhasil dihapus!';

		header('Location: ../index.php?halaman=tentang');
		exit;
	} 
	else {
		$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Tentang gagal dihapus!';

		header('Location: ../index.php?halaman=tentang');
		exit;
	}

?>