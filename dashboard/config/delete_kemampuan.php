<?php  
	require 'koneksi_db.php';
	session_start();

	$id = $_GET['id'];

	$sql = "DELETE FROM dt_kemampuan WHERE id = $id";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Kemampuan berhasil dihapus!';

		header('Location: ../index.php?halaman=kemampuan');
		exit;
	}
	else {
		$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Kemampuan gagal dihapus!';

		header('Location: ../index.php?halaman=kemampuan');
		exit;
	}

?>