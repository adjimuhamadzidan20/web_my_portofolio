<?php  
	require 'koneksi_db.php';
	session_start();

	$id = $_GET['id'];

	$sql = "DELETE FROM dt_sosialmedia WHERE id = $id";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Sosial media berhasil dihapus!';

		header('Location: ../index.php?halaman=sosial_media');
		exit;
	}
	else {
		$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Sosial media gagal dihapus!';

		header('Location: ../index.php?halaman=sosial_media');
		exit;
	}

?>