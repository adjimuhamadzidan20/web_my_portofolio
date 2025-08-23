<?php  
	require 'koneksi_db.php';
	session_start();

	$id = $_GET['id'];
	$thumb = $_GET['thumb'];

	$sql = "DELETE FROM dt_portofolio WHERE id = $id";
	$result = mysqli_query($koneksi, $sql);

	// menghapus gambar/foto di local folder
  if (isset($thumb)) {
  	unlink('../file_thumbnail/'. $thumb);
  }

  if ($result) {
  	$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Portofolio berhasil dihapus!';

		header('Location: ../index.php?halaman=portofolio');
		exit;
  }
  else {
  	$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Portofolio gagal dihapus!';

		header('Location: ../index.php?halaman=portofolio');
		exit;
  }

?>