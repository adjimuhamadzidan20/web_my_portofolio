<?php  
	require '../koneksi_db.php';
	session_start();

	$id = $_GET['id'];
	$sql = "DELETE FROM dt_basisprojek WHERE id = $id";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Basis projek berhasil dihapus!';

		header('Location: ../../index.php?halaman=basis');
		exit;
	}
	else {
		$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Basis projek gagal dihapus!';

		header('Location: ../../index.php?halaman=basis');
		exit;
	}

?>