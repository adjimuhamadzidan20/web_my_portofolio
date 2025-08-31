<?php  
	require '../koneksi_db.php';
	session_start();

	$akun = $_GET['akun'];
	$link = htmlspecialchars($_POST['link']);
	$idAdmin = $_SESSION['id_admin'];

	if ($akun == 'facebook') {
		$akunFb = "SELECT * FROM dt_sosialmedia WHERE sosial_media = '$akun'";
		$res = mysqli_query($koneksi, $akunFb);
		$sosialFb = mysqli_num_rows($res);

		if ($sosialFb == 1) {
			$_SESSION['status'] = 'warning';
			$_SESSION['pesan'] = 'Sosial media '. $akun .' sudah ada!';
		} 
		else {
			$sql = "INSERT INTO dt_sosialmedia (sosial_media, link, id_admin) VALUES ('$akun', '$link', '$idAdmin')";
			$result = mysqli_query($koneksi, $sql);

			if ($result) {
				$_SESSION['status'] = 'success';
				$_SESSION['pesan'] = 'Sosial media '. $akun .' berhasil ditambahkan!';
			}
			else {
				$_SESSION['status'] = 'danger';
				$_SESSION['pesan'] = 'Sosial media '. $akun .' gagal ditambahkan!';
			}
		}
	}
	else if ($akun == 'instagram') {
		$akunInst = "SELECT * FROM dt_sosialmedia WHERE sosial_media = '$akun'";
		$res = mysqli_query($koneksi, $akunInst);
		$sosialInst = mysqli_num_rows($res);

		if ($sosialInst == 1) {
			$_SESSION['status'] = 'warning';
			$_SESSION['pesan'] = 'Sosial media '. $akun .' sudah ada!';
		}
		else {
			$sql = "INSERT INTO dt_sosialmedia (sosial_media, link, id_admin) VALUES ('$akun', '$link', '$idAdmin')";
			$result = mysqli_query($koneksi, $sql);

			if ($result) {
				$_SESSION['status'] = 'success';
				$_SESSION['pesan'] = 'Sosial media '. $akun .' berhasil ditambahkan!';
			}
			else {
				$_SESSION['status'] = 'danger';
				$_SESSION['pesan'] = 'Sosial media '. $akun .' gagal ditambahkan!';
			}
		}
	}
	else if ($akun == 'twitter') {
		$akunTwit = "SELECT * FROM dt_sosialmedia WHERE sosial_media = '$akun'";
		$res = mysqli_query($koneksi, $akunTwit);
		$sosialTwit = mysqli_num_rows($res);

		if ($sosialTwit == 1) {
			$_SESSION['status'] = 'warning';
			$_SESSION['pesan'] = 'Sosial media '. $akun .' sudah ada!';
		} 
		else {
			$sql = "INSERT INTO dt_sosialmedia (sosial_media, link, id_admin) VALUES ('$akun', '$link', '$idAdmin')";
			$result = mysqli_query($koneksi, $sql);

			if ($result) {
				$_SESSION['status'] = 'success';
				$_SESSION['pesan'] = 'Sosial media '. $akun .' berhasil ditambahkan!';
			}
			else {
				$_SESSION['status'] = 'danger';
				$_SESSION['pesan'] = 'Sosial media '. $akun .' gagal ditambahkan!';
			}
		}
	}
	else if ($akun == 'linkedin') {
		$akunLink = "SELECT * FROM dt_sosialmedia WHERE sosial_media = '$akun'";
		$res = mysqli_query($koneksi, $akunLink);
		$sosialLink = mysqli_num_rows($res);

		if ($sosialLink == 1) {
			$_SESSION['status'] = 'warning';
			$_SESSION['pesan'] = 'Sosial media '. $akun .' sudah ada!';
		}
		else {
			$sql = "INSERT INTO dt_sosialmedia (sosial_media, link, id_admin) VALUES ('$akun', '$link', $idAdmin)";
			$result = mysqli_query($koneksi, $sql);

			if ($result) {
				$_SESSION['status'] = 'success';
				$_SESSION['pesan'] = 'Sosial media '. $akun .' berhasil ditambahkan!';
			}
			else {
				$_SESSION['status'] = 'danger';
				$_SESSION['pesan'] = 'Sosial media '. $akun .' gagal ditambahkan!';
			}
		}
	}
	else if ($akun == 'github') {
		$akunGit = "SELECT * FROM dt_sosialmedia WHERE sosial_media = '$akun'";
		$res = mysqli_query($koneksi, $akunGit);
		$sosialGit = mysqli_num_rows($res);

		if ($sosialGit == 1) {
			$_SESSION['status'] = 'warning';
			$_SESSION['pesan'] = 'Sosial media '. $akun .' sudah ada!';
		}
		else {
			$sql = "INSERT INTO dt_sosialmedia (sosial_media, link, id_admin) VALUES ('$akun', '$link', '$idAdmin')";
			$result = mysqli_query($koneksi, $sql);

			if ($result) {
				$_SESSION['status'] = 'success';
				$_SESSION['pesan'] = 'Sosial media '. $akun .' berhasil ditambahkan!';
			}
			else {
				$_SESSION['status'] = 'danger';
				$_SESSION['pesan'] = 'Sosial media '. $akun .' gagal ditambahkan!';
			}
		}
	}

	header('Location: ../../index.php?halaman=sosial_media');
	exit;

?>