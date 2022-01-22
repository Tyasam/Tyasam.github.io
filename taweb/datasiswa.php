<?php
include 'koneksi.php';
$sql = 'SELECT kode_siswa,nis,nama_siswa,kelamin,agama,tempat_lahir,tanggal_lahir,alamat,no_telepon,foto,tahun_angkatan,status_aktif
        FROM siswa';
        
$query = mysqli_query($koneksi, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($koneksi));
}
?>

<html>
<head>
<title>Data Siswa</title>
</head>
<body>
	<h2>DATA SISWA</h2>
	<br/>
	<a href="tambahsiswa.php">TAMBAH</a>
	<br/><br/>
	<table border="1">
        <thead>
            <tr>
                <th>Kode Siswa</th>
                <th>NIS</th>
                <th>Nama Siswa</th>
                <th>Kelamin</th>
                <th>Agama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>Foto</th>
                <th>Tahun Angkatan</th>
                <th>Status Aktif</th>
            </tr>
        </thead>
</body>
</html>

<?php
while ($row = mysqli_fetch_array($query))
{
    echo '<tr>
            <td>'.$row['kode_siswa'].'</td>
            <td>'.$row['nis'].'</td>
            <td>'.$row['nama_siswa'].'</td>
            <td>'.$row['kelamin'].'</td>
            <td>'.$row['agama'].'</td>
            <td>'.$row['tempat_lahir'].'</td>
            <td>'.$row['tanggal_lahir'].'</td>
            <td>'.$row['alamat'].'</td>
            <td>'.$row['no_telepon'].'</td>
            <td>'.$row['foto'].'</td>
            <td>'.$row['tahun_angkatan'].'</td>
            <td>'.$row['status_aktif'].'</td>
        </tr>';
}
echo '
    </body>
</table>';
?>