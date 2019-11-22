<?php 
require_once './commons/constants.php';
require_once './commons/db.php';
require_once './commons/helpers.php';

// lấy id từ đường dẫn
$product_id = isset($_GET['id']) ? $_GET['id'] : null;

// kiểm tra id có tồn tại không
$sqlQuery = "select * from products where id = $product_id";
$product = executeQuery($sqlQuery);
if(!$product){
	header('location: ' . BASE_URL);
	die;
}

$title = $_POST['title'];
$title = str_replace("'", "\'", $title);
$rating = $_POST['rating'];
$content = $_POST['content'];
$content = str_replace("'", "\'", $content);

$insertQuery = "insert into comments (product_id, title, rating, content)
					values ('$product_id', '$title', '$rating', '$content')";
executeQuery($insertQuery);
header('location: ' . BASE_URL . 'detail.php?id=' . $product_id);
die;

 ?>