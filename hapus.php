<?php
include('koneksidatabase.php');
$nis = $_POST['nis'];

$edit = mysqli_query($konek,"DELETE FROM `siswa` WHERE `siswa`.`nis` = '$nis'");

$status = array();
if ($edit) {
	$status = array(
		'status' => 'berhasil Menghapus data', 
		'error' => 0
	);
}else{
	$status = array(
		'status' => 'gagal Menghapus data', 
		'error' => 1
	);
}
echo json_encode($status);
?>