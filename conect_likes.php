<?php
header('Content-Type: application/json');

 require('connect.php');

// $sqlQuery = "SELECT id,names,people_count,changes_count FROM tabledb WHERE changes_count >99 ORDER BY id";
$sqlQuery = "SELECT `Likes`, `Name`
FROM `most_like` WHERE `Likes` ORDER BY `Name` ";

$conn = mysqli_connect('localhost', 'root', '', 'gam');
$result = mysqli_query($conn,$sqlQuery);


$data = array();
foreach ($result as $row) {
	$data[] = $row;
}



// mysqli_close($conn);

echo json_encode($data);
?>