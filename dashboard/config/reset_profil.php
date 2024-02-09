<?php  
	require 'koneksi_db.php';
	session_start();

	$foto = $_GET['foto'];
	$sql = "TRUNCATE TABLE dt_profil";
	$result = mysqli_query($koneksi, $sql);

	// menghapus gambar/foto di local folder
  if (isset($foto)) {
  	unlink('../file_foto/'. $foto);
  }

  if ($result) {
  	$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Profil berhasil dihapus!';

		header('Location: ../index.php?halaman=profil');
		exit;
  }
  else {
  	$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Profil gagal dihapus!';

		header('Location: ../index.php?halaman=profil');
		exit;
  }

?>