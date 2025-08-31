<?php 
	require '../koneksi_db.php';
	session_start();

	$id = $_POST['id'];
	$kemampuan = htmlspecialchars($_POST['kemampuan']);
	$tingkatan = htmlspecialchars($_POST['tingkatan']);

	if ($tingkatan == 'Pemula (Begninner)') {
		$progres = 20;
	} else if ($tingkatan == 'Menengah (Intermediate)') {
		$progres = 35;
	} else if ($tingkatan == 'Lanjutan (Advance)') {
		$progres = 45;
	} else if ($tingkatan == 'Mahir (Expert)') {
		$progres = 75;
	} else if ($tingkatan == 'Professional (Professional)') {
		$progres = 85;
	}
	
	$sql = "UPDATE dt_kemampuan set kemampuan = '$kemampuan', tingkatan = '$tingkatan', 
	nilai_progres = $progres WHERE id = $id";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Kemampuan berhasil diubah!';

		header('Location: ../../index.php?halaman=kemampuan');
		exit;
	} else {
		$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Kemampuan gagal diubah!';

		header('Location: ../../index.php?halaman=kemampuan');
		exit;
	}
?>