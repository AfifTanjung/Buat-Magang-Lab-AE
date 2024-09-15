<?php

include 'config/app.php';

$cake = select("SELECT * FROM data_cake");


// Pengecekan Keberhasilan Menambah Data Mahasiswa

if (isset($_POST['tambah'])) {
    if(create_data($_POST) > 0) {
        echo "<script>
                alert('Succeeded!!'); //
                document.location.href = 'index.php';
              </script>";
    } 
    else {
        echo "<script>
                alert('Failed!!'); //
                document.location.href = 'index.php';
              </script>";
        
    }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>New Menu</title>
  </head>

  <body>


<div class="container mt-5">
    <h5>NEW MENU - DELI CAKE</h5>

    <form action='' method="post">

        <div class="row mb-5">
            <label for="product" class="col-sm-2 form-label">Nama Roti</label>

                <div class="col-sm-10">
                     <input type="text" class="form-control" id="product" name="product" placeholder="Nama Roti" Required>
                </div>

        </div>
        <div class="row mb-5">
            <label for="taste" class="col-sm-2 form-label">Rasa</label>

                <div class="col-sm-10">
                     <input type="text" class="form-control" id="taste" name="taste" placeholder="Asin" Required>
                </div>

        </div>

        <div class="row mb-5">
            <label for="price" class="col-sm-2 form-label">Harga</label>

            <div class="col-sm-10">
                <span class="input-group-text">Rp</span> 
                <input type="text" class="form-control" id="price" name="price" placeholder="Rp 15000" Required>
                </div>

        </div>
    
        
       

        <div class="row mb-5">
            <label for="ingredient" class="col-sm-2 form-label">Bahan</label>

                <div class="col-sm-10">
                     <input type="text" class="form-control" id="ingredient" name="ingredient" placeholder="Cokelat" Required>
                </div>

        </div>
        <div class="row mb-5">
            <label for="topping" class="col-sm-2 form-label">Topping</label>

                <div class="col-sm-10">
                     <input type="text" class="form-control" id="topping" name="topping" placeholder="Keju" Required>
                </div>

        </div>
        <div class="row mb-5">
            <label for="expired" class="col-sm-2 form-label">EXP</label>

                <div class="col-sm-10">
                     <input type="date" class="form-control" id="expired" name="expired" placeholder="YYYY-MM-DD" Required>
                </div>

        </div>



        <a href="index.php" class="btn btn-warning">Back</a>
        <button type="submit" name="tambah" class="btn btn-primary">Submit</button>

        
</div>

 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>


