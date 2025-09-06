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

	$usernameAdmin = htmlspecialchars($_POST['username']);
	$passwordAdmin = htmlspecialchars($_POST['password']);
	$decriptPassword = md5($passwordAdmin);

	$sql = "SELECT * FROM dt_admin WHERE username = ? AND password = ?";
	$query = mysqli_prepare($koneksi, $sql);
	
	mysqli_stmt_bind_param($query, 'ss', $usernameAdmin, $decriptPassword);
	mysqli_stmt_execute($query);
	mysqli_stmt_store_result($query);

	if (mysqli_stmt_num_rows($query) == 1) {
		mysqli_stmt_bind_result($query, $id, $nama_admin, $username, $password);
    	mysqli_stmt_fetch($query);
	
		if ($decriptPassword == $password) {
			$_SESSION['id_admin'] = $id;
			$_SESSION['admin'] = $nama_admin;
			$_SESSION['login'] = true;
			
			// remember me
			$remember = $_POST['remember'];
			if ($remember) {
				setcookie('ID', $id, time()+60, '/');
          		setcookie('KEY', hash('sha256', $username), time()+60, '/');
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

	mysqli_stmt_close($query);
?>