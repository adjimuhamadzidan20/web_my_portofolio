<?php 
	require '../koneksi_db.php';
	session_start();

	$namaLengkap = htmlspecialchars($_POST['nama_lengkap']);
	$email = htmlspecialchars($_POST['email']);
	$noTelp = htmlspecialchars($_POST['no_telp']);
	$pesan = htmlspecialchars($_POST['pesan']);
	
	$sql = "INSERT INTO dt_kontak (nama_lengkap, email, no_telp, pesan) VALUES ('$namaLengkap', '$email', '$noTelp', '$pesan')";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Pesan anda terkirim!';

		header('Location: ../../../index.php#contact');
		exit;
	} else {
		$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Pesan anda tidak terkirim!';

		header('Location: ../../../index.php#contact');
		exit;
	}

?>