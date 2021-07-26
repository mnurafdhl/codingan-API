<?php

include "../../../config/koneksi.php";

$id_kategori = md5(@$_POST["id_kategori"]);
$id_pelanggan = @$_POST["id_pelanggan"];
$nm_kategori = @$_POST["nm_kategori"];
$harga = @$_POST["harga"];
$diskon = @$_POST["diskon"];
$total = @$_POST["total"];

$query = mysqli_query($kon, "UPDATE 'kategori' SET 'nm_kategori'='".$nm_kategori."', 'harga'='".$harga."', 'diskon'='".$diskon."', 'total'='".$total."' WHERE 'id_pelanggan'='".$id_pelanggan."', 'id_kategori'='".$id_kategori."");

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