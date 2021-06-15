<?php

//tabel produk
include 'model.php';

if (isset($_POST['submit_simpan'])) {
    $nama_barang = $_POST['nama_barang'];
    $kode_barang = $_POST['kode_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $ket = $_POST['ket'];
    $model = new Model();
    $model->insert($nama_barang, $kode_barang, $harga, $stok, $ket);
    header('location:produk.php');
}
if (isset($_POST['submit_edit'])) {
    $nama_barang = $_POST['nama_barang'];
    $kode_barang = $_POST['kode_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $ket = $_POST['ket'];
    $model = new Model();
    $model->insert($nama_barang, $kode_barang, $harga, $stok, $ket);
    header('location:produk.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete($id);
    header('location:produk.php');
}

//tabel pembelian
include 'model.php';

if (isset($_POST['submit_simpan'])) {
    $nama_supplier = $_POST['nama_supllier'];
    $nama_barang = $_POST['nama_barang'];
    $kode_barang = $_POST['kode_barang'];
    $jml_barang = $_POST['jml_barang'];
    $harga_satuan = $_POST['harga_satuan'];
    $total = $_POST['total'];
    $model = new Model();
    $model->insert($nama_supplier, $nama_barang, $kode_barang, $jml_barang, $harga_satuan, $total);
    header('location:pembelian.php');
}
if (isset($_POST['submit_edit'])) {
    $nama_supplier = $_POST['nama_supllier'];
    $nama_barang = $_POST['nama_barang'];
    $kode_barang = $_POST['kode_barang'];
    $jml_barang = $_POST['jml_barang'];
    $harga_satuan = $_POST['harga_satuan'];
    $total = $_POST['total'];
    $model = new Model();
    $model->insert($nama_supplier, $nama_barang, $kode_barang, $jml_barang, $harga_satuan, $total);
    header('location:pembelian.php');
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $model = new Model();
    $model->delete($id);
    header('location:pembelian.php');
}
?>