<?php  
	require 'koneksi_db.php';
	session_start();

	$id = $_GET['id'];
	$sql = "DELETE FROM dt_statusprofil WHERE id = $id";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Status profil berhasil dihapus!';

		header('Location: ../index.php?halaman=status');
		exit;
	}
	else {
		$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Status profil gagal dihapus!';

		header('Location: ../index.php?halaman=status');
		exit;
	}

?>