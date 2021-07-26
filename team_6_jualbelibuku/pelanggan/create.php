<?php

include "../../../config/koneksi.php";

$id_pelanggan = md5(@$_POST["id_pelanggan"]);
$nama_pelanggan = @$_POST["nama_pelanggan"];
$jenis_kelamin = @$_POST["jenis_kelamin"];
$alamat = @$_POST["alamat"];
$telp_hp= @$_POST["telp_hp"];

$query = mysqli_query($kon, "INSERT INTO 'pelanggan'('id_pelanggan', 'nama_pelanggan', 'jenis_kelamin', 'alamat', 'telp_hp') VALUES ('".$id_pelanggan."', '".$nama_pelanggan."', '".$jenis_kelamin."', '"$alamat."', '".$telp_hp"')");
if($query){
    $status = true;
    $pesan = "data berhasil disimpan";
}else{
    $status = false;
    $pesan = "data gagal disimpan";
}

$json = [
    "status" => $status,
    "pesan" =>$pesan,
    "data"  =>$query
];

header("Content-Type: application/json");
echo json_encode($json);

?>