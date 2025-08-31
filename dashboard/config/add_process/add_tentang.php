<?php  
	require '../koneksi_db.php';
	session_start();

	$tentang = mysqli_real_escape_string($koneksi, $_POST['tentang']);
	$idAdmin = $_SESSION['id_admin'];

	$sql = "INSERT INTO dt_tentang (deskripsi, id_admin) VALUES ('$tentang', '$idAdmin')";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		$_SESSION['status'] = 'success';	
		$_SESSION['pesan'] = 'Tentang berhasil ditambahkan!';

		header('Location: ../../index.php?halaman=tentang');
		exit;
	} 
	else {
		$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Tentang gagal ditambahkan!';

		header('Location: ../../index.php?halaman=tentang');
		exit;
	}

?>