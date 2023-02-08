<!DOCTYPE html>
<html>
    <head>
        <title>PROSES MENGAJAR</title>
    </head>
    <body>
    <table border="1">
        <h1>KEGIATAN MENGAJAR DISMK N 1 SAYUNG<h1>
        <h4> <a  href="tambah.php" >TAMBAH</a></h4>
        <tr>
            <td bgcolor="pink">Nomer</td>
            <td bgcolor="green">Nama Guru</td>
            <td bgcolor="yellow">Alamat</td>
            <td bgcolor="purple">Jenis kelamin</td>
            <td bgcolor="orange">Nama mapel</td>
            <td bgcolor="chocolate">Ruangan</td>
            <td bgcolor="magenta">mengubah</td>
        </tr> 
        
        <?php
        include("koneksi.php");
        $query = mysqli_query($koneksi, "SELECT * FROM tb_guru INNER JOIN tb_mapel ON tb_guru.kode_mapel = tb_mapel.kode_mapel ");
        
        while($mapel=mysqli_fetch_array($query)){
            echo "<tr>";
                       echo "<td>".$mapel['id_guru']."</td>";
                       echo "<td>".$mapel['nama_guru']."</td>";
                       echo "<td>".$mapel['alamat']."</td>";
                       echo "<td>".$mapel['jenis_kelamin']."</td>";
                       echo "<td>".$mapel['nama_mapel']."</td>";
                       echo "<td>".$mapel['ruangan']."</td>";
                       echo "<td>";
                       echo "<a href='edit.php?id=".$mapel['id_guru']."'>Edit</a> |";
                       echo "<a href='hapus.php?id=".$mapel['id_guru']."'>hapus</a>";
                       echo "</td>";
            echo "</tr>";
           }
        ?>
  </table>
  <h4> <a   href="index.php" >MENU UTAMA</a></h4>
</body>
</html>