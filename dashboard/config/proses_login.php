<?php  
	require 'koneksi_db.php';
	session_start();

	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	$sql = "SELECT * FROM dt_admin WHERE username = '$username'";
	$query = mysqli_query($koneksi, $sql);
	
	$dataAdmin = mysqli_fetch_assoc($query);
	$jumlahAdmin = mysqli_num_rows($query);
	$decriptPass = md5($password);

	if ($jumlahAdmin == 1) {
		if ($decriptPass == $dataAdmin['password']) {
			$_SESSION['admin'] = $dataAdmin['nama_admin'];
			$_SESSION['login'] = true;
			
			header('Location: ../index.php');
      exit;
		} 
		else {
			$_SESSION['status'] = 'error'; 
			$_SESSION['pesan'] = 'Username atau password tidak valid!';

			header('Location: ../../login.php');
	    exit;
		}		
	} 
	else {
		$_SESSION['status'] = 'error'; 
		$_SESSION['pesan'] = 'Username atau password tidak valid!';

		header('Location: ../../login.php');
    exit;
	}

?>