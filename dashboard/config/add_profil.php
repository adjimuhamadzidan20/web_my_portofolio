<?php 
	require 'koneksi_db.php';
	session_start();

	$nama = htmlspecialchars($_POST['nama']);
	$status = htmlspecialchars($_POST['status']);
	$alamat = htmlspecialchars($_POST['alamat']);
	
	$namaFile = $_FILES['foto']['name'];
	$tempatFile = $_FILES['foto']['tmp_name'];
	$ukuranFile = $_FILES['foto']['size'];
	$errorFile = $_FILES['foto']['error'];

	$formatFile = pathinfo($namaFile, PATHINFO_EXTENSION);
	$sizeGambar = 2048000;

	if ($formatFile === 'jpg' || $formatFile === 'jpeg' || $formatFile === 'png') {
		if ($ukuranFile > $sizeGambar) {
			$_SESSION['status'] = 'warning';
			$_SESSION['pesan'] = 'Ukuran file foto maksimal 2MB!';

			header('Location: ../index.php?halaman=profil');
			exit;
		} 
		else {
			$idfile = uniqid();
			$fileFoto = $idfile .'.'. $formatFile;
			move_uploaded_file($tempatFile, '../file_foto/'. $fileFoto);
			
			$sql = "INSERT INTO dt_profil VALUES ('', '$nama', '$status', '$alamat', '$fileFoto')";
			$result = mysqli_query($koneksi, $sql);

			if ($result) {
				$_SESSION['status'] = 'success';
				$_SESSION['pesan'] = 'Profile berhasil ditambahkan!';

				header('Location: ../index.php?halaman=profil');
				exit;
			}
			else {
				$_SESSION['status'] = 'danger';
				$_SESSION['pesan'] = 'Profile gagal ditambahkan!';

				header('Location: ../index.php?halaman=profil');
				exit;
			}
		}
	} 
	else {
		$_SESSION['status'] = 'warning';
		$_SESSION['pesan'] = 'file extension harus berupa gambar (jpg, jpeg, png)!';

		header('Location: ../index.php?halaman=profil');
		exit;
	}

?>