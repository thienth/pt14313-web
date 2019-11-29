<?php 
	require_once './commons/constants.php';
    require_once './commons/db.php';
    require_once './commons/helpers.php';
    $msg = isset($_GET['msg']) ? $_GET['msg'] : "";

 ?>

<!DOCTYPE html>
<html>
<head>
	<base href="<?php echo BASE_URL . "public/" ?>" >
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="<?php echo BASE_URL . "post_login.php" ?>" method="post">
		<?php if ($msg != ""): ?>
			<h3 style="color: red"><?php echo $msg ?></h3>	
		<?php endif ?>
		
		<div>
			email: <input type="text" name="email" value="" placeholder="Enter email">
		</div>
		<div>
			password: <input type="password" name="password" value="" placeholder="Enter password">
		</div>
		<button type="submit">Login</button>
	</form>
</body>
</html>