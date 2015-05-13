<?php
require 'koneksi.php';

$koneksi = mysqli_connect("mysql.idhostinger.com","u636191200_dika","dikadika","u636191200_tugas");


if(isset($_POST['hapus'])) {
	mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE kd_mhs=".$_POST['hapus']);
} else {

	$kd_mhs	= $_POST['id'];
	$nim	= $_POST['nim'];
	$nama	= $_POST['nama'];
	$alamat	= $_POST['alamat'];
	$kelas	= $_POST['kelas'];
	$status = $_POST['status'];
	
	if($nim!="" && $nama!="" && $alamat!="") {
		if($kd_mhs == 0) {
			mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES('','$nim','$nama','$alamat','$kelas','$status')");
		} else {
			mysqli_query($koneksi,"UPDATE mahasiswa SET 
			nim = '$nim',
			nama = '$nama',
			alamat = '$alamat',
			kelas = '$kelas',
			status = '$status'
			WHERE kd_mhs = $kd_mhs
			");
		}
	}
}



?>
