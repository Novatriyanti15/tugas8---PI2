<!doctype html>
<html lang="en">

<head>
    <title>Tambah Produk</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="produk.php">Kembali</a>
    <br><br>
    <form action="proces.php" method="post">
        <label>Nama Barang</label>
        <br>
        <input type="text" name="nama_barang">
        <br>
        <label>Kode Barang</label>
        <br>
        <input type="text" name="kode_barang"> 
        <br>
        <label>Harga</label>
        <br>
        <input type="text" name="harga">
        <br>
        <label>Stok</label>
        <br>
        <input type="number" name="stok">
        <br>
        <label>Keterangan</label>
        <br>
        <input type="text" name="ket">
        <br><br>
        <button type="submit" name="submit_simpan">Submit</button>
        <button type="reset">Reset</button>

    </form>
</body>

</html>

