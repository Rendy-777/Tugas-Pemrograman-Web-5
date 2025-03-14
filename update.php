<form action="update.php" method="POST">
    ID: <input type="text" name="id"><br>
    NIM: <input type="text" name="nim"><br>
    Nama: <input type="text" name="nama"><br>
    Jurusan: <input type="text" name="jurusan"><br>
    <input type="submit" name="submit" value="Ubah Data">
</form>

<?php
include 'hello.php';
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    $query = "UPDATE mahasiswa SET nim='$nim', nama ='$nama', jurusan ='$jurusan'
     WHERE id = '$id' ";
    mysqli_query($koneksi, $query);
    echo "Data Berhasil Diubah";
}
?>