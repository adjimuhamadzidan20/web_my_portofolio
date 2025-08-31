<?php 
	require '../koneksi_db.php';
	session_start();

	$id = $_POST['id'];
	$status = htmlspecialchars($_POST['status']);

	$sql = "UPDATE dt_statusprofil set nama_status = '$status' WHERE id = $id";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Status profil berhasil diubah!';

		header('Location: ../../index.php?halaman=status');
		exit;
	} else {
		$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Status profil gagal diubah!';

		header('Location: ../../index.php?halaman=status');
		exit;
	}

?>