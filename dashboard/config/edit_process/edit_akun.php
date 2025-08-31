<?php 
	require '../koneksi_db.php';
	session_start();

	$id = $_POST['id'];
	$nama = htmlspecialchars($_POST['nama_admin']);
	$user = htmlspecialchars($_POST['username']);

	$sql = "UPDATE dt_admin set nama_admin = '$nama', username = '$user' WHERE id = $id";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Akun profil berhasil diubah!';

		header('Location: ../../index.php?halaman=akun');
		exit;
	} else {
		$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Akun profil gagal diubah!';

		header('Location: ../../index.php?halaman=akun');
		exit;
	}

?>