<?php 
	session_start();
	require_once './commons/constants.php';
    require_once './commons/db.php';
    require_once './commons/helpers.php';

    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";

    if($email != "" && $password != ""){
    	// lấy dữ liệu từ csdl bảng users dựa vào email
    	$sqlUserQuery = "select * from users where email = '$email'";
    	$user = executeQuery($sqlUserQuery, false);
    	if($user && password_verify($password, $user['password'])){
    		$_SESSION[AUTH] = [
    			"id" => $user['id'],
    			"email" => $user['email'],
    			"name" => $user['name'],
    			"avatar" => $user['avatar'],
    			"status" => $user['status'],
    			"role_id" => $user['role_id']
    		];
    		header('location: ' . BASE_URL);
    		die;
    	}
    }

    header('location: ' . BASE_URL . 'login.php?msg=Email/Mật khẩu không đúng');
    die;


 ?>