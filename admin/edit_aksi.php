<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_bangunan'];
$nama = $_POST['nama_bangunan'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];
$fasilitas = $_POST['fasilitas'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// update data ke database
mysqli_query($koneksi, "update bangunan set nama_bangunan='$nama', alamat='$alamat', deskripsi='$deskripsi', fasilitas='$fasilitas', latitude='$latitude', longitude='$longitude' where id_bangunan='$id'");

// mengalihkan halaman kembali ke index.php
header("location:tampil_data.php");
