<?php 
include 'connection.php';
class Model extends Connection
{
    public function connectMysql()
    {
        $this->conn = $this->mysql_connect();
    }

		// tabel produk
		public function insert(){

			if (isset($_POST['submit'])) {
				if (isset($_POST['nama_barang']) && isset($_POST['kode_barang']) && isset($_POST['harga']) && isset($_POST['stok']) && isset($_POST['ket'])) {
					if (!empty($_POST['nama_barang']) && !empty($_POST['kode_barang']) && !empty($_POST['harga']) && !empty($_POST['stok']) && !empty($_POST['ket']) ) {
						
						$nama_barang = $_POST['nama_barang'];
						$kode_barang = $_POST['kode_barang'];
						$harga = $_POST['harga'];
						$stok = $_POST['stok'];
						$ket = $_POST['ket'];

						$query = "INSERT INTO produk (nama_barang,kode_barang,harga,stok,ket) VALUES ('$nama_barang','$kode_barang','$harga','$stok','$ket')";
						if ($sql = $this->conn->query($query)) {
							echo "<script>alert('records added successfully');</script>";
							echo "<script>window.location.href = 'produk.php';</script>";
						}else{
							echo "<script>alert('failed');</script>";
							echo "<script>window.location.href = 'produk.php';</script>";
						}

					}else{
						echo "<script>alert('empty');</script>";
						echo "<script>window.location.href = 'produk.php';</script>";
					}
				}
			}
		}

		public function tampil_onlineshop(){
			$data = null;

			$query = "SELECT * FROM produk";
			if ($sql = $this->conn->mysql_query($query)) {
				while ($row = mysql_fetch_array($sql)) {
					$data[] = $row;
				}
			}
			return $data;
		}

		public function delete($id){

			$query = "DELETE FROM produk where id = '$id'";
			if ($sql = $this->conn->mysql_query($query)) {
				return true;
			}else{
				return false;
			}
		}

		public function fetch_single($id){

			$data = null;

			$query = "SELECT * FROM produk WHERE id = '$id'";
			if ($sql = $this->conn->mysql_query($query)) {
				while ($row = $sql->fetch_assoc()) {
					$data = $row;
				}
			}
			return $data;
		}

		public function edit($id){

			$data = null;

			$query = "SELECT * FROM produk WHERE id = '$id'";
			if ($sql = $this->conn->mysql_query($query)) {
				while($row = $sql->fetch_assoc()){
					$data = $row;
				}
			}
			return $data;
		}

		public function update($data){

			$query = "UPDATE produk SET nama_barang='$data[nama_barang]', kode_barang='$data[kode_barang]', harga='$data[harga]', stok='$data[stok]', ket='$data[ket]' WHERE id='$data[id] '";

			if ($sql = $this->conn->mysql_query($query)) {
				return true;
			}else{
				return false;
			}
		}
	}

	// tabel pembelian
	function connectMysql()
    {
        $this->conn = $this->mysql_connect();
    }

	function insert(){

		if (isset($_POST['submit'])) {
			if (isset($_POST['nama_supplier']) && isset($_POST['nama_barang']) && isset($_POST['kode_barang']) && isset($_POST['jml_barang']) && isset($_POST['harga_satuan']) && isset($_POST['total'])) {
				if (!empty($_POST['nama_supplier']) && !empty($_POST['nama_barang']) && !empty($_POST['kode_barang']) && !empty($_POST['jml_barang']) && !empty($_POST['harga_satuan']) && !empty($_POST['total']) ) {
					
					$nama_supplier = $_POST['nama_supplier'];
					$nama_barang = $_POST['nama_barang'];
					$kode_barang = $_POST['kode_barang'];
					$jml_barang = $_POST['jml_barang'];
					$harga_satuan = $_POST['harga_satuan'];
					$total = $_POST['total'];

					$query = "INSERT INTO pembelian (nama_supplier,nama_barang,kode_barang,jml_barang,harga_satuan,total) VALUES ('$nama_supplier','$nama_barang','$kode_barang','$jml_barang','$harga_satuan','$total')";
					if ($sql = $this->conn->query($query)) {
						echo "<script>alert('records added successfully');</script>";
						echo "<script>window.location.href = 'pembelian.php';</script>";
					}else{
						echo "<script>alert('failed');</script>";
						echo "<script>window.location.href = 'pembelian.php';</script>";
					}

				}else{
					echo "<script>alert('empty');</script>";
					echo "<script>window.location.href = 'pembelian.php';</script>";
				}
			}
		}
	}

	function tampil_onlineshop(){
		$data = null;

		$query = "SELECT * FROM pembelian";
		if ($sql = $this->conn->mysql_query($query)) {
			while ($row = mysqli_fetch_assoc($sql)) {
				$data[] = $row;
			}
		}
		return $data;
	}

	function delete($id){

		$query = "DELETE FROM pembelian where id = '$id'";
		if ($sql = $this->conn->query($query)) {
			return true;
		}else{
			return false;
		}
	}

	function fetch_single($id){

		$data = null;

		$query = "SELECT * FROM pembelian WHERE id = '$id'";
		if ($sql = $this->conn->query($query)) {
			while ($row = $sql->fetch_assoc()) {
				$data = $row;
			}
		}
		return $data;
	}

	function edit($id){

		$data = null;

		$query = "SELECT * FROM pembelian WHERE id = '$id'";
		if ($sql = $this->conn->query($query)) {
			while($row = $sql->fetch_assoc()){
				$data = $row;
			}
		}
		return $data;
	}

	function update($data){

		$query = "UPDATE pembelian SET nama_supplier='$data[nama_supplier]',nama_barang='$data[nama_barang]', kode_barang='$data[kode_barang]', jml_barang='$data[jml_barang]', harga_satuan='$data[harga_satuan]', total='$data[total]' WHERE id='$data[id] '";

		if ($sql = $this->conn->query($query)) {
			return true;
		}else{
			return false;
		}
	}


?>