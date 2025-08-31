<?php  
	require '../koneksi_db.php';
	session_start();

	$id = $_POST['id'];
	$akun = htmlspecialchars($_POST['sosial']);
	$link = htmlspecialchars($_POST['link']);

	$sql = "UPDATE dt_sosialmedia SET sosial_media = '$akun', link = '$link' WHERE id = $id";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Link sosial media '. $akun .' berhasil diubah!';

		header('Location: ../../index.php?halaman=sosial_media');
		exit;
	}
	else {
		$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Link sosial media '. $akun .' gagal diubah!';

		header('Location: ../../index.php?halaman=sosial_media');
		exit;
	}
	
?>