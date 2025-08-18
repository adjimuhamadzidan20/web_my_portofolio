<?php 
	require 'koneksi_db.php';
	session_start();

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
	
	$sql = "INSERT INTO dt_kemampuan (kemampuan, tingkatan, nilai_progres) VALUES ('$kemampuan', '$tingkatan', $progres)";
	$result = mysqli_query($koneksi, $sql);

	if ($result) {
		$_SESSION['status'] = 'success';
		$_SESSION['pesan'] = 'Kemampuan berhasil ditambahkan!';

		header('Location: ../index.php?halaman=kemampuan');
		exit;
	} else {
		$_SESSION['status'] = 'danger';
		$_SESSION['pesan'] = 'Kemampuan gagal ditambahkan!';

		header('Location: ../index.php?halaman=kemampuan');
		exit;
	}
?>