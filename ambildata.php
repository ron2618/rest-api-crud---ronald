<?php
include('koneksidatabase.php');
$get = mysqli_query($konek,'SELECT * FROM `siswa`');
$datasiswa = array();
while ($data = mysqli_fetch_assoc($get)) {
	$datasiswa[] = $data;
}
echo json_encode($datasiswa);
?>