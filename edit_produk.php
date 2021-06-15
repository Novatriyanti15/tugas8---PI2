<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ONLINE SHOP</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1 class="text-center">DATA PRODUK</h1>
          <hr style="height: 1px;color: black;background-color: black;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 mx-auto">
          <?php

              include 'model.php';
              $model = new Model();
              $id = $_REQUEST['id'];
              $row = $model->edit($id);

              if (isset($_POST['update'])) {
                if (isset($_POST['nama_barang']) && isset($_POST['kode_barang']) && isset($_POST['harga']) && isset($_POST['stok']) && isset($_POST['ket'])) {
                  if (!empty($_POST['nama_barang']) && !empty($_POST['kode_barang']) && !empty($_POST['harga']) && !empty($_POST['stok']) && !empty($_POST['ket']) ) {
                    
                    $data['id'] = $id;
                    $data['nama_barang'] = $_POST['nama_barang'];
                    $data['kode_barang'] = $_POST['kode_barang'];
                    $data['harga'] = $_POST['harga'];
                    $data['stok'] = $_POST['stok'];
                    $data['ket'] = $_POST['ket'];

                    $update = $model->update($data);

                    if($update){
                      echo "<script>alert('produk update successfully');</script>";
                      echo "<script>window.location.href = 'produk.php';</script>";
                    }else{
                      echo "<script>alert('produk update failed');</script>";
                      echo "<script>window.location.href = 'produk.php';</script>";
                    }

                  }else{
                    echo "<script>alert('empty');</script>";
                    header("Location: edit_produk.php?id=$id");
                  }
                }
              }

          ?>
          <form action="" method="post">
            <div class="form-group">
              <label for="">Nama Barang</label>
              <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Kode Barang</label>
              <input type="email" name="kode_barang" value="<?php echo $row['kode_barang']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">stok</label>
              <input type="text" name="stok" value="<?php echo $row['stok']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <label for="">Keterangan</label>
              <input type='text' name="ket" value="<?php echo $row['ket']; ?>" class="form-control">
            </div>
            <div class="form-group">
              <button type="submit" name="update" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>