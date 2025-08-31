<?php
require '../koneksi_db.php';
session_start();

$id = $_POST['id'];
$judulPorto = htmlspecialchars($_POST['judul']);
$tahun = htmlspecialchars($_POST['tahun']);
$basis = htmlspecialchars($_POST['basis']);
$deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);
$thumbLama = htmlspecialchars($_POST['thumb_lama']);

$namaFile = $_FILES['thumbnail']['name'];
$tempatFile = $_FILES['thumbnail']['tmp_name'];
$ukuranFile = $_FILES['thumbnail']['size'];
$errorFile = $_FILES['thumbnail']['error'];

$formatFile = pathinfo($namaFile, PATHINFO_EXTENSION);
$sizeGambar = 2048000;

if ($errorFile == 4) {
	$fileThumbnail = $thumbLama;

	$sql = "UPDATE dt_portofolio SET judul_portofolio = '$judulPorto', thumbnail = '$fileThumbnail', id_basis = '$basis', 
	tahun_pembuatan = '$tahun', deskripsi = '$deskripsi' WHERE id = $id";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Portofolio berhasil diubah!';

		header('Location: ../../index.php?halaman=portofolio');
		exit;
	} else {
		$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Portofolio gagal diubah!';

		header('Location: ../../index.php?halaman=portofolio');
		exit;
	}
} else {
	if (
		$formatFile === 'jpg' || $formatFile === 'JPG' || $formatFile === 'jpeg' || $formatFile === 'JPEG' || $formatFile === 'png'
		|| $formatFile === 'PNG'
	) {
		if ($ukuranFile > $sizeGambar) {
			$_SESSION['status'] = 'warning';
			$_SESSION['pesan'] = 'Ukuran file thumbnail maksimal 2MB!';

			header('Location: ../../index.php?halaman=edit_porto&edit=' . $id);
			exit;
		} else {
			$idfile = uniqid();
			$fileThumbnail = $idfile . '.' . $formatFile;
			move_uploaded_file($tempatFile, '../../file_thumbnail/' . $fileThumbnail);

			$sql = "UPDATE dt_portofolio SET judul_portofolio = '$judulPorto', thumbnail = '$fileThumbnail', id_basis = '$basis',
			tahun_pembuatan = '$tahun', deskripsi = '$deskripsi' WHERE id = $id";
			$result = mysqli_query($koneksi, $sql);

			// menghapus gambar/foto di local folder
			if (isset($thumbLama)) {
				unlink('../../file_thumbnail/' . $thumbLama);
			}

			if ($result) {
				$_SESSION['status'] = 'success';
				$_SESSION['pesan'] = 'Portofolio berhasil diubah!';

				header('Location: ../../index.php?halaman=portofolio');
				exit;
			} else {
				$_SESSION['status'] = 'danger';
				$_SESSION['pesan'] = 'Portofolio gagal diubah!';

				header('Location: ../../index.php?halaman=portofolio');
				exit;
			}
		}
	} else {
		$_SESSION['status'] = 'warning';
		$_SESSION['pesan'] = 'file extension harus berupa gambar (jpg, jpeg, png)!';

		header('Location: ../../index.php?halaman=edit_porto&edit=' . $id);
		exit;
	}
}
