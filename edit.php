<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("location:data.php?");
}
   $id=$_GET['id'];
   $sql="SELECT * FROM tb_guru INNER JOIN
   tb_mapel WHERE tb_guru.id_guru='$id'";
   $query= mysqli_query($koneksi, $sql);
   $mapel= mysqli_fetch_assoc($query);

   if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
   }
   ?>

<html>
<head>
</head>
<body>
    <h1>Edit Mapel</h1>
    <form action="proses_edit.php" method="POST">
        <fieldset>
        <input type="hidden" name="id" value="<?php echo $mapel['id_guru']?>" />
            <p>
                <label for="nama_guru">Nama Guru :</label>
                <input type="text" name="nama_guru"  value="<?php echo $mapel['nama_guru']?>" />
            </p>

            <p>
                <label for="alamat">Alamat :</label>
                <input type="text" name="alamat"  value="<?php echo $mapel['alamat']?>"/>
            </p>
            <p>
                    <label for="jenis_kelamin">Jenis Kelamin :</label>
                    <label><input type="radio" name="jenis_kelamin" Value="laki-laki"  value="<?php echo $mapel['jenis_kelamin']?>" />Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" Value="perempuan"  value="<?php echo $mapel['jenis_kelamin']?>" />Perempuan</label>
            </p>
            <p>
                <label for="nama_mapel">Nama Mapel :</label>
                <input type="text" name="nama_mapel"  value="<?php echo $mapel['nama_mapel']?>"/>
            </p>
            <p>
                <label for="ruangan">Ruangan :</label>
                <input type="text" name="ruangan"  value="<?php echo $mapel['ruangan']?>"/>
            </p>
            <p>
                <input type="submit" value="edit" name="edit" />
            </p>
        </fieldset>
</form>
</center>
</body>
</html>