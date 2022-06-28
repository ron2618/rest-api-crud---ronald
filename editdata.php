<?php
include('koneksidatabase.php');
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$edit = mysqli_query($konek,"UPDATE `siswa` SET `nama` = '$nama', `alamat` = '$alamat' WHERE `siswa`.`nis` = '$nis';");

$status = array();
if ($edit) {
	$status = array(
		'status' => 'berhasil Mengedit data', 
		'error' => 0
	);
}else{
	$status = array(
		'status' => 'gagal Mengedit data', 
		'error' => 1
	);
}
echo json_encode($status);
?>