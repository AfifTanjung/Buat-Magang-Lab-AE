<?php


// Function PHP


// Fungsi Menampilkan PHP

function select($query)

{

// Memanggil Database

    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_array($result)) {
        $rows[] = $row;
    }

    return $rows;

}

// Fungsi Menambah Data Cake

function create_data($post)
{
    global $db;

    $product = $post['product'];
    $taste = $post['taste'];
    $price = $post['price'];
    $ingredient = $post['ingredient'];
    $topping = $post['topping'];
    $expired = $post['expired'];

// Tambah Data

    $query = "INSERT INTO data_cake VALUES(null, '$product', '$taste', '$price', '$ingredient', '$topping','$expired')";
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}


// Fungsi Mengubah Data


function update_data($post) {

    global $db;

    $id_no = $post['id_no'];
    $product = $post['product'];
    $taste = $post['taste'];
    $price = $post['price'];
    $ingredient = $post['ingredient'];
    $topping = $post['topping'];
    $expired = $post['expired'];

// Tambah Data

    $query = "UPDATE data_cake SET product = '$product', taste = '$taste', price = '$price', ingredient = '$ingredient', topping = '$topping', expired= '$expired' WHERE id_no = '$id_no'";   
    
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}



// Fungsi Menghapus Data Barang

function delete_data($id_no){

    global $db;

    // Query Hapus Data

    $query = "DELETE FROM data_cake WHERE id_no = '$id_no'";


    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}
?>