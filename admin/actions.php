<?php
//include 'security.php';
include 'includes/db_admin.php';


if (isset($_POST['register_btn'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
	$usertype = $_POST['usertype'];

	 if ($password === $confirmpassword && !empty($username) && !empty($password)) 
	{
		$query = $link->query("INSERT INTO admins(username,password, usertype) VALUES ('$username','$password', '$usertype')");

	if ($query) {
		$_SESSION['success'] = 'Admin profile added';
		header('Location: index.php');
		}

	else {
		$_SESSION['status'] = 'Admin profile not added';
		header('Location: index.php');
		}

	}
	elseif (empty($username)) {
		$_SESSION['status'] = 'Label username is required';
		header('Location: index.php');
		}
	elseif (empty($password)) {
		$_SESSION['status'] = 'Label password is required';
		header('Location: index.php');
		}

	else {
		$_SESSION['status'] = 'Password and Confrim Password does not match';
		header('Location: index.php');
	}

}



// Оновлення

if (isset($_POST['update_btn'])) {
	$id = $_POST['edit_id'];
	$username = $_POST['edit_username'];
	$password = $_POST['edit_password'];
	$usertype = $_POST['edit_usertype'];

	$query = $link->query("UPDATE admins SET username = '$username', password = '$password', usertype = '$usertype' WHERE id = '$id'");

	if ($query) {
		$_SESSION['success'] = 'Your Data is updated';
		header('Location: index.php');
	}
	else {
		$_SESSION['status'] = 'Your Data is not updated';
		header('Location: index.php');
	}

}

// Видалення
if (isset($_POST['delete_btn'])) {
	$id = $_POST['delete_id'];
	$query = $link->query("DELETE FROM admins WHERE id = '$id'");
	if ($query) {
		$_SESSION['success'] = 'Your Data is deleted';
		header('Location: index.php');
	}
	else {
		$_SESSION['status'] = 'Your Data is not deleted';
		header('Location: index.php');
	}
}



//Авторизація

if (isset($_POST['login_btn'])) {
	$email_login = $_POST['email'];
	$password_login = $_POST['password'];

	$query = $link->query("SELECT * FROM admins WHERE username = '$email_login' AND password = '$password_login'");
	$auth = $query->fetch_assoc();
		if ($auth['usertype'] == 'admin') {
			$_SESSION['username'] = $email_login;
			header('Location:index.php');
		}
		elseif ($auth['usertype'] == 'user') {
			$_SESSION['status'] = 'You don`t have permission';
			header('Location: login.php');
		}
		else {
			$_SESSION['status'] = 'Email or password is invalible';
			header('Location: login.php');
		}
}

// Видалення користувача

if (isset($_POST['delete_user_btn_cat'])) {
	$id = $_POST['delete_id'];
	$query = $link->query("DELETE FROM users WHERE id = '$id'");
	if ($query) {
		$_SESSION['success'] = 'Your Data is deleted';
		header('Location: users.php');
	}
	else {
		$_SESSION['status'] = 'Your Data is not deleted';
		header('Location: users.php');
	}
}
?>
