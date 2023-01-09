<?php

// include koneksi database
include('koneksi.php');

// get data dr form
$id_siswa     = $_POST['id_siswa'];
$nisn         = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat       = $_POST['alamat'];

// update data ke dalam database berdasarakan ID
$query = "UPDATE tbl_siswa SET nisn = '$nisn', nama_lengkap = '$nama_lengkap', alamat = '$alamat' WHERE id_siswa = '$id_siswa'";

// pengecekan kondisi
if($connection->query ($query)) {
    header("location: index.php");
} else {
    echo "Data Gagal Diupdate!";
}
?>