<?php  
	require 'koneksi_db.php';
	session_start();
	
	$judulPorto = htmlspecialchars($_POST['judul']);
	$tahun = htmlspecialchars($_POST['tahun']);
	$deskripsi = $_POST['deskripsi'];

	$namaFile = $_FILES['thumbnail']['name'];
	$tempatFile = $_FILES['thumbnail']['tmp_name'];
	$ukuranFile = $_FILES['thumbnail']['size'];
	$errorFile = $_FILES['thumbnail']['error'];

	$formatFile = pathinfo($namaFile, PATHINFO_EXTENSION);
	$sizeGambar = 2048000;

	if ($formatFile === 'jpg' || $formatFile === 'JPG' || $formatFile === 'jpeg' || $formatFile === 'JPEG' || $formatFile === 'png' 
	|| $formatFile === 'PNG') {
		if ($ukuranFile > $sizeGambar) {
			$_SESSION['status'] = 'warning';
			$_SESSION['pesan'] = 'Ukuran file thumbnail maksimal 2MB!';

			header('Location: ../index.php?halaman=tambah_porto');
			exit;
		} 
		else {
			$idfile = uniqid();
			$fileThumbnail = $idfile .'.'. $formatFile;
			move_uploaded_file($tempatFile, '../file_thumbnail/'. $fileThumbnail);

			$sql = "INSERT INTO dt_portofolio VALUES ('', '$judulPorto', '$fileThumbnail', '$tahun', '$deskripsi')";
			$result = mysqli_query($koneksi, $sql);

			if ($result) {
				$_SESSION['status'] = 'success';
				$_SESSION['pesan'] = 'Portofolio berhasil ditambahkan!';

				header('Location: ../index.php?halaman=portofolio');
				exit;
			}
			else {
				$_SESSION['status'] = 'danger';
				$_SESSION['pesan'] = 'Portofolio gagal ditambahkan!';

				header('Location: ../index.php?halaman=portofolio');
				exit;
			}
		}
	} 
	else {
		$_SESSION['status'] = 'warning';
		$_SESSION['pesan'] = 'file extension harus berupa gambar (jpg, jpeg, png)!';

		header('Location: ../index.php?halaman=tambah_porto');
		exit;
	}

?>