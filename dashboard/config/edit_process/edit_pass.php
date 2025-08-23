<?php 
	require 'koneksi_db.php';
	session_start();

	$id = $_POST['id'];
	$passwordLama = htmlspecialchars(md5($_POST['pass_lama']));
	$passwordBaru = htmlspecialchars(md5($_POST['pass_baru']));

	$sql = "SELECT password FROM dt_admin WHERE password = '$passwordLama'";
	$query = mysqli_query($koneksi, $sql);
	$dataPass = mysqli_fetch_assoc($query);
	$dataAkun = mysqli_num_rows($query);

	if ($dataAkun == 1) {
		if ($passwordLama == $dataPass['password']) {
			$sql = "UPDATE dt_admin SET password = '$passwordBaru' WHERE id = $id";
			$result = mysqli_query($koneksi, $sql);

			if ($result) {
				$_SESSION['status'] = 'success';
				$_SESSION['pesan'] = 'Password baru berhasil diubah!';

				header('Location: ../index.php?halaman=akun');
				exit;
			} else {
				$_SESSION['status'] = 'danger';
				$_SESSION['pesan'] = 'Password baru gagal diubah!';

				header('Location: ../index.php?halaman=akun');
				exit;
			}
		}
	} else {
		$_SESSION['status'] = 'warning';
		$_SESSION['pesan'] = 'Password lama anda tidak valid!';

		header('Location: ../index.php?halaman=akun');
		exit;
	}

?>