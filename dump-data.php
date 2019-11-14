<?php 
require_once './commons/db.php';
// tạo dump data cho bảng roles
$roles = [
	['name' => 'member', 'status' => 1],
	['name' => 'admin', 'status' => 1],
	['name' => 'super admin', 'status' => 1]
];
foreach ($roles as $value) {
	extract($value);
	$sqlQuery = "insert into roles (name, status)
				values ('$name', $status)";
	// executeQuery($sqlQuery);
}
$users = [
	[
		'name' => 'Trần Thị Yên',
		'email' => 'yentt@gmail.com',
		'password' => password_hash('123456', PASSWORD_DEFAULT),
		'role_id'=> 1
	],
	[
		'name' => 'Trần Hồng Phước',
		'email' => 'phuocth@gmail.com',
		'password' => password_hash('123456', PASSWORD_DEFAULT),
		'role_id'=> 2
	],
	[
		'name' => 'admin',
		'email' => 'admin@gmail.com',
		'password' => password_hash('123456', PASSWORD_DEFAULT),
		'role_id'=> 2
	]
];

 ?>