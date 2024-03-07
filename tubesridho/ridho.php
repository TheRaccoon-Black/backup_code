<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Sekolah</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Data Sekolah</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Aksi</th>
        </tr>

        <?php
        include "koneksi.php";
        
        // Fungsi untuk mendapatkan data dari database
        function getData() {
            global $koneksi;
            $query = "SELECT * FROM sekolahz";
            $result = mysqli_query($koneksi, $query);
            return $result;
        }

        // Fungsi untuk menambahkan data ke database
        function addData($nama, $alamat, $telepon) {
            global $koneksi;
            $query = "INSERT INTO sekolahz (nama, alamat, telepon) VALUES ('$nama', '$alamat', '$telepon')";
            mysqli_query($koneksi, $query);
        }

        // Fungsi untuk menghapus data dari database
        function deleteData($id) {
            global $koneksi;
            $query = "DELETE FROM sekolahz WHERE id = '$id'";
            mysqli_query($koneksi, $query);
        }

        // Fungsi untuk mengupdate data di database
        function updateData($id, $nama, $alamat, $telepon) {
            global $koneksi;
            $query = "UPDATE sekolahz SET nama = '$nama', alamat = '$alamat', telepon = '$telepon' WHERE id = '$id'";
            mysqli_query($koneksi, $query);
        }

        // Memproses aksi tambah data jika form disubmit
        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $telepon = $_POST['telepon'];

            addData($nama, $alamat, $telepon);
        }

        // Memproses aksi hapus data jika parameter "hapus" diberikan di URL
        if (isset($_GET['hapus'])) {
            $id = $_GET['hapus'];

            deleteData($id);
        }

        // Memproses aksi update data jika form disubmit
        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $telepon = $_POST['telepon'];

            updateData($id, $nama, $alamat, $telepon);
        }

        // Mendapatkan data dari database
        $result = getData();
        $no = 1;

        // Menampilkan data di tabel
        while ($hasil = mysqli_fetch_array($result)) {
          
            $nama = $hasil['nama'];
            $alamat = $hasil['alamat'];
            $telepon = $hasil['telepon'];

            echo "
            <tr>
                <td>$no</td>
                <td>$nama</td>
                <td>$alamat</td>
                <td>$telepon</td>
                <td>
                    <a href='edit.php?id=$no'>Edit</a>
                    <a href='?hapus=$no'>Hapus</a>
                </td>
            </tr>";

            $no++;
        }
        ?>
    </table>

    <h2>Tambah Data Sekolah</h2>
    <form action="" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required><br>

        <label for="telepon">Telepon:</label>
        <input type="text" id="telepon" name="telepon" required><br>

        <input type="submit" name="submit" value="Tambah Data">
    </form>
</body>
</html>
