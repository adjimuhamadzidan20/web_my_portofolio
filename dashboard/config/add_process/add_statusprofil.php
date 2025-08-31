<?php 
	require '../koneksi_db.php';
	session_start();

	$status = htmlspecialchars($_POST['status']);
	$idAdmin = $_SESSION['id_admin'];
	
	$sql = "INSERT INTO dt_statusprofil (nama_status, id_admin) VALUES ('$status', '$idAdmin')";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Status profil berhasil ditambahkan!';

		header('Location: ../../index.php?halaman=status');
		exit;
	} else {
		$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Status profil gagal ditambahkan!';

		header('Location: ../../index.php?halaman=status');
		exit;
	}

?>