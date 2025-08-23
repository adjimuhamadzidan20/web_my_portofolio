<?php 
	require 'koneksi_db.php';
	session_start();

	$basisProjek = htmlspecialchars($_POST['basis']);
	
	$sql = "INSERT INTO dt_basisprojek (nama_basis) VALUES ('$basisProjek')";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Basis projek berhasil ditambahkan!';

		header('Location: ../index.php?halaman=basis');
		exit;
	} else {
		$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Basis projek gagal ditambahkan!';

		header('Location: ../index.php?halaman=basis');
		exit;
	}

?>