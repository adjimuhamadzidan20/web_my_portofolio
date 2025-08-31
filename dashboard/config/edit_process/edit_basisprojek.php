<?php 
	require '../koneksi_db.php';
	session_start();

	$id = $_POST['id'];
	$basisProjek = htmlspecialchars($_POST['basis']);
	
	$sql = "UPDATE dt_basisprojek set nama_basis = '$basisProjek' WHERE id = $id";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Basis projek berhasil diubah!';

		header('Location: ../../index.php?halaman=basis');
		exit;
	} else {
		$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Basis projek gagal diubah!';

		header('Location: ../../index.php?halaman=basis');
		exit;
	}
?>