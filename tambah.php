<html>
<head>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="nama_guru">Nama :</label>
                <input type="text" name="nama_guru" />
            </p>
            <p>
                <label for="alamat">alamat :</label>
                <textarea name ="alamat" rows="S"></textarea>
            </p>
            <p>
                <label for="jenis_kelamin">Jurusan :</label>
                <input type="radio"name="jenis_kelamin" value="laki-laki"/>laki-laki
                <input type="radio"name="jenis_kelamin" value="perempuan"/>perempuan
            </p>
            <p>
                <label for="kode_mapel">Kode Mapel :</label>
                <input type="number" name="kode_mapel" />
            </p>
            <p>
                <label for="nama_mapel">Mapel :</label>
                <input type="text" name="nama_mapel" />
            </p>
            <p>
                <label for="ruangan">Ruang :</label>
                <input type="number" name="ruangan"/>
            </p>
            <p>
                <input type="submit" value="tambah" name="tambah" />
            </p>
        </fieldset>
</form>
</center>
</body>
</html>