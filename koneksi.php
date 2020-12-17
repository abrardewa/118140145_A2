<?php
$kon = mysqli_connect("localhost", "root", "", "mahasiswa");
if(!$kon){
    die("Koneksi gagal:".mysqli_connect_error());
}
?>