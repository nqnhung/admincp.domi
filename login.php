<?php
$u = $_POST['username'];
$p = $_POST['password'];

$db = mysqli_connect("sql6.freesqldatabase.com","sql6416715","GXkCpVlR3q","sql6416715");
$sql = "select * from users where username='$u' and password='$p'";
// echo $sql; exit;
$rs = mysqli_query($db, $sql);

if (mysqli_num_rows($rs) > 0) {
	// code...
	// echo "dang nhap thanh cong";
	header("Location: apsd0923kwndfmsc9ee2309kjdksjldad/dashboard.php");
} else{
	echo "dang nhap that bai";
	require_once'login.html';
}
?>




	