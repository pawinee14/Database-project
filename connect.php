<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'gam';

$conn = mysqli_connect($servername, $username, $password, $dbname);

mysqli_set_charset($conn, "utf8");


/*if (!$conn) {
    	die("Connection : failed (เชื่อมต่อฐานข้อมูล ไม่ สำเร็จ)" . mysqli_connect_error());
	} else {
		echo "Connection : OK (เชื่อมต่อฐานข้อมูลสำเร็จ)";
	}*/


?>