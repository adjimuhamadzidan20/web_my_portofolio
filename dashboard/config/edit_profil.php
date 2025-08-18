<?php 
	require 'koneksi_db.php';
	session_start();

	$id = $_POST['id'];
	$nama = htmlspecialchars($_POST['nama']);
	$telp = htmlspecialchars($_POST['telp']);
	$email = htmlspecialchars($_POST['email']);
	$alamat = htmlspecialchars($_POST['alamat']);
	$fotoLama = htmlspecialchars($_POST['foto_lama']);

	$namaFile = $_FILES['foto']['name'];
	$tempatFile = $_FILES['foto']['tmp_name'];
	$ukuranFile = $_FILES['foto']['size'];
	$errorFile = $_FILES['foto']['error'];

	$formatFile = pathinfo($namaFile, PATHINFO_EXTENSION);
	$sizeGambar = 2048000;
	
	if ($errorFile == 4) {
		$fileFoto = $fotoLama;

		$sql = "UPDATE dt_profil SET nama_lengkap = '$nama', no_telp = '$telp', email = '$email', alamat = '$alamat', 
		foto = '$fileFoto' WHERE id = $id";
		$result = mysqli_query($koneksi, $sql);

		if ($result) {
			$_SESSION['status'] = 'success';
			$_SESSION['pesan'] = 'Profile berhasil disunting!';

			header('Location: ../index.php?halaman=profil');
			exit;
		}
		else {
			$_SESSION['status'] = 'danger';
			$_SESSION['pesan'] = 'Profile gagal disunting!';

			header('Location: ../index.php?halaman=profil');
			exit;
		}
	} 
	else {
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

				$sql = "UPDATE dt_profil SET nama_lengkap = '$nama', no_telp = '$telp', email = '$email', 
				alamat = '$alamat', foto = '$fileFoto' WHERE id = $id";
				$result = mysqli_query($koneksi, $sql);

				// menghapus gambar/foto di local folder
			  if (isset($fotoLama)) {
			  	unlink('../file_foto/'. $fotoLama);
			  }

				if ($result) {
					$_SESSION['status'] = 'success';
					$_SESSION['pesan'] = 'Profile berhasil disunting!';

					header('Location: ../index.php?halaman=profil');
					exit;
				}
				else {
					$_SESSION['status'] = 'danger';
					$_SESSION['pesan'] = 'Profile gagal disunting!';

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
	}

?>