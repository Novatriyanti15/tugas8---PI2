<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="pembelian.php">Kembali</a>
    <br><br>
    <form action="proces.php" method="post">
        <label>Nama Supplier</label>
        <br>
        <input type="text" name="nama_supplier">
        <br>
        <label>Nama Barang</label>
        <br>
        <input type="text" name="nama_barang">
        <br>
        <label>Kode Barang</label>
        <br>
        <input type="text" name="kode_barang"> 
        <br>
        <label>Jumlah Barang</label>
        <br>
        <input type="number" name="jml_barang">
        <br>
        <label>Harga Satuan</label>
        <br>
        <input type="text" name="harga_satuan">
        <br>
        <label>Total</label>
        <br>
        <input type="text" name="total">
        <br><br>
        <button type="submit" name="submit_simpan">Submit</button>
        <button type="reset">Reset</button>

    </form>
</body>

</html>

