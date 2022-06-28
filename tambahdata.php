<?php
include('koneksidatabase.php');
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];

$tambah = mysqli_query($konek,"INSERT INTO `siswa` (`nis`, `nama`, `alamat`) VALUES (NULL, '$nama', '$alamat');");

$status = array();
if ($tambah) {
	$status = array(
		'status' => 'berhasil menambah data', 
		'error' => 0
	);
}else{
	$status = array(
		'status' => 'gagal menambah data', 
		'error' => 1
	);
}
echo json_encode($status);
?>