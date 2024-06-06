<?php 
// membuat fungsi menampilkan
function select($query){
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

function createBarang($post){
    global $db;

    $nama = htmlspecialchars($post['nama']);
    $jumlah = htmlspecialchars($post['jumlah']);
    $harga = htmlspecialchars($post['harga']);

    $query = "INSERT INTO barang VALUES (NULL, '$nama', '$jumlah', '$harga', NOW())";

    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
};