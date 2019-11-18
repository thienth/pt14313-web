<?php 
require_once './commons/db.php';
//https://github.com/fzaninotto/Faker
require_once './libs/Faker/autoload.php';
$faker = Faker\Factory::create();

try{
	$sqlQuery = "select * from products";
	$products = executeQuery($sqlQuery, true);
	
	foreach ($products as $pro) {	
		// $feature_image = str_replace("public", "", $pro['feature_image']);
		// $feature_image = ltrim($pro['feature_image'], "/");
		$proId = $pro['id'];
		$sqlQuery = "update products 
						set feature_image = '$feature_image'
					where id = $proId";
		executeQuery($sqlQuery);
	}
}catch(Exception $ex){
	var_dump($ex->getMessage());
}

// var_dump($faker->imageUrl($width = 640, $height = 480));
// var_dump($faker->image('public/images', 640, 480, 'cats'));
// die;
// $companyName = $faker->company;
// echo $name. "-" . $companyName;
// die;

// tạo dump data cho bảng roles
// $roles = [
// 	['name' => 'member', 'status' => 1],
// 	['name' => 'admin', 'status' => 1],
// 	['name' => 'super admin', 'status' => 1]
// ];
// foreach ($roles as $value) {
// 	extract($value);
// 	$sqlQuery = "insert into roles (name, status)
// 				values ('$name', $status)";
// 	// executeQuery($sqlQuery);
// }
// $users = [
// 	[
// 		'name' => 'Trần Thị Yên',
// 		'email' => 'yentt@gmail.com',
// 		'password' => password_hash('123456', PASSWORD_DEFAULT),
// 		'role_id'=> 1
// 	],
// 	[
// 		'name' => 'Trần Hồng Phước',
// 		'email' => 'phuocth@gmail.com',
// 		'password' => password_hash('123456', PASSWORD_DEFAULT),
// 		'role_id'=> 2
// 	],
// 	[
// 		'name' => 'admin',
// 		'email' => 'admin@gmail.com',
// 		'password' => password_hash('123456', PASSWORD_DEFAULT),
// 		'role_id'=> 2
// 	]
// ];
// foreach ($users as $value) {
// 	extract($value);
// 	$sqlQuery = "insert into users (name, email, password, role_id)
// 			values ('$name', '$email', '$password', $role_id)";
// 	// executeQuery($sqlQuery);
// }

// for ($i=0; $i < 10; $i++) { 
// 	$name = $faker->name;
// 	$desc = $faker->realText($maxNbChars = 200, $indexSize = 2);
// 	//biến đổi dữ liệu / chuẩn hóa dữ liệu cho chức năng
// 	$desc = str_replace("'","\'", $desc);
// 	$showMenu = rand(0, 1);
// 	$sqlQuery = "insert into categories
// 					(name, description, show_menu)
// 				values
// 					('$name', '$desc', $showMenu)";
// 	// echo "<pre>";
// 	// var_dump($sqlQuery);
// 	// executeQuery($sqlQuery);

// }

// // insert dữ liệu mẫu cho bảng products (100 bản ghi)
// for ($i=0; $i < 100; $i++) { 
// 	$name = $faker->name;
// 	$sku = strtoupper(uniqid());
// 	$cate_id = rand(1, 20);
// 	$disabled_comment = rand(0, 1);
// 	$price = rand(1000, 999999999);
// 	$sale_price = rand(1000, 999999999);
// 	$detail = $faker->realText($maxNbChars = 200, $indexSize = 2);
// 	$detail = str_replace("'","\'", $detail);
// 	$feature_image = $faker->image('public/images', 640, 480, 'cats');
// 	$feature_image = str_replace("public", "", $feature_image);
// 	$view_count = rand(0, 999999);
// 	$status = 1;
// 	$rating = rand(1, 5);

// 	$sqlQuery = "insert into products 
// 					(name, 
// 					sku, 
// 					cate_id, 

// 					disabled_comment, 
// 					price, 
// 					sale_price,
					
// 					detail,
// 					feature_image,
// 					view_count,

// 					status,
// 					rating)
// 			values ('$name', 
// 					'$sku', 
// 					'$cate_id', 

// 					'$disabled_comment', 
// 					'$price', 
// 					'$sale_price',
					
// 					'$detail',
// 					'$feature_image',
// 					'$view_count',

// 					'$status',
// 					'$rating')";
// 	// executeQuery($sqlQuery);
// }




 ?>
