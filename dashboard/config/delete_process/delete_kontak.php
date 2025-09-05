<?php  
	require '../koneksi_db.php';
	session_start();

	$id = $_GET['id'];
	$sql = "DELETE FROM dt_kontak WHERE id = $id";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Kontak pesan berhasil dihapus!';

		header('Location: ../../index.php?halaman=kontak');
		exit;
	}
	else {
		$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Kontak pesan gagal dihapus!';

		header('Location: ../../index.php?halaman=kontak');
		exit;
	}

?>