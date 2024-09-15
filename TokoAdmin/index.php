<?php

include 'config/app.php';


$cake = select("SELECT * FROM data_cake ORDER BY id_no ASC");



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>DELI CAKE</title>
  </head>
  <body>



    
       <div class="container mt-5">
          <nav  class="navbar navbar-light"  style= "background-color: #e3f2fd;">
            <div class="container-fluid" >
              <a class="navbar-brand text-center"><p class="fw-bold">Daftar Deli Cake</p></a>
              <form class="d-flex">
                <input class="form-control " type="search" placeholder="Search" aria-label="Search">
                <a href="create.php"  class="btn btn-lg btn-outline-danger">New</a>          
              </form>
            </div>
          </nav>

             <table class="table table-bordered table-striped table-responsive">
               <thead class="table table-primary">
                    <tr>
                        <th>No</th>
                        <th>Nama Roti</th>
                        <th>Rasa</th>
                        <th>Harga</th>
                        <th>Bahan</th>
                        <th>Topping</th>
                        <th>Exp</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;?>
                        <?php foreach ($cake as $data_cake): ?>
                            <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data_cake['product']; ?></td>
                            <td><?php echo $data_cake['taste']; ?></td>
                            <td><?php echo $data_cake['price']; ?></td>
                            <td><?php echo $data_cake['ingredient']; ?></td>
                            <td><?php echo $data_cake['topping']; ?></td>
                            <td><?php echo $data_cake['expired']; ?></td>
                            <td width="20%" class="text-center">
                                <a  href="edit.php?id_no=<?=$data_cake['id_no']; ?>" class="btn btn-success ">Edit</a>
                                <a  href="delete.php?id_no=<?=$data_cake['id_no']; ?>" class="btn btn-danger " onclick= "return confirm ('Apakah Anda Yakin Data Ingin Dihapus');">Delete</a>
                            </td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
