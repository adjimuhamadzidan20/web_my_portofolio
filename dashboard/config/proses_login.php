<?php  
	require 'koneksi_db.php';
	session_start();

	// cek cookie remember me
	if (isset($_COOKIE['ID']) && isset($_COOKIE['KEY'])) {
	    $query = mysqli_query($koneksi, "SELECT username FROM dt_admin WHERE id = '$_COOKIE[ID]'");
	    $res = mysqli_fetch_assoc($query);

	    if ($_COOKIE['KEY'] === hash('sha256', $res['username'])) {
	        $_SESSION['login'] = true;
	    }
	}

	// cegah masuk dashboard
	if (isset($_SESSION['login'])) {
	    header('Location: index.php');
	    exit;
	}

	$username = htmlspecialchars($_POST['username']);
	$password = htmlspecialchars($_POST['password']);

	$sql = "SELECT * FROM dt_admin WHERE username = '$username'";
	$query = mysqli_query($koneksi, $sql);
	
	$dataAdmin = mysqli_fetch_assoc($query);
	$jumlahAdmin = mysqli_num_rows($query);
	$decriptPass = md5($password);

	if ($jumlahAdmin == 1) {
		if ($decriptPass == $dataAdmin['password']) {
			$_SESSION['id_admin'] = $dataAdmin['id'];
			$_SESSION['admin'] = $dataAdmin['nama_admin'];
			$_SESSION['login'] = true;
			
			// remember me
			$remember = $_POST['remember'];
			if ($remember) {
				setcookie('ID', $dataAdmin['id'], time()+60, '/');
          		setcookie('KEY', hash('sha256', $dataAdmin['username']), time()+60, '/');
			}

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