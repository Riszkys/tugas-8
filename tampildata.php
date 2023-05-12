<?php
include 'koneksi.php';
session_start();
$data = array_merge(
    $_SESSION['formindex_data'],
    $_SESSION['formdatapribadi_data'],
    $_SESSION['formayahkandung_data'],
    $_SESSION['formibukandung_data']
);

$nama_lengkap = $data['nama_lengkap'];

// Query untuk menampilkan data dari tabel
$sql = "select jenis_pendaftaran, tanggal_masuk_sekolah, nis, nomor_ujian, pernah_paud, pernah_tk, no_skhun, no_ijazah,
hobi, cita_cita, nama_lengkap, jenis_kelamin, nisn, nik, tanggal_lahir, tempat_lahir, agama, kebutuhan_khusus_siswa, 
alamat_jalan, rt, rw, dusun, kelurahan, kecamatan, kode_pos, tempat_tinggal, transportasi, no_hp, no_telp, email, 
penerima_kps, no_kps, kewarganegaraan, ayah_kandung, tahun_lahir_ayah, pendidikan_ayah, pekerjaan_ayah, penghasilan_ayah, kebutuhan_khusus_ayah, 
ibu_kandung, tahun_lahir_ibu, pendidikan_ibu, pekerjaan_ibu, penghasilan_ibu, kebutuhan_khusus_ibu from data_peserta_didik where nama_lengkap ='$nama_lengkap'";
// $sql = "SELECT * FROM data_peserta_didik";
$result = mysqli_query($conn, $sql);

// Cek apakah query berhasil
foreach ($result as $row) {
    // echo "<tr>
    // <td>" . $row['jenis_pendaftaran'] . "</td>
    // </tr>";

    $jenis_pendaftaran = $row['jenis_pendaftaran'];
    $tanggal_masuk_sekolah = $row['tanggal_masuk_sekolah'];
    $nis = $row['nis'];
    $nomor_ujian = $row['nomor_ujian'];
    $pernah_paud = $row['pernah_paud'];
    $pernah_tk = $row['pernah_tk'];
    $no_skhun = $row['no_skhun'];
    $no_ijazah = $row['no_ijazah'];
    $hobi = $row['hobi'];
    $cita_cita = $row['cita_cita'];
    $nama_lengkap = $row['nama_lengkap'];
    $jenis_kelamin = $row['jenis_kelamin'];
    $nisn = $row['nisn'];
    $nik = $row['nik'];
    $tanggal_lahir = $row['tanggal_lahir'];
    $tempat_lahir = $row['tempat_lahir'];
    $agama = $row['agama'];
    $kebutuhan_khusus_siswa = $row['kebutuhan_khusus_siswa'];
    $alamat_jalan = $row['alamat_jalan'];
    $rt = $row['rt'];
    $rw = $row['rw'];
    $dusun = $row['dusun'];
    $kelurahan = $row['kelurahan'];
    $kecamatan = $row['kecamatan'];
    $kode_pos = $row['kode_pos'];
    $tempat_tinggal = $row['tempat_tinggal'];
    $transportasi = $row['transportasi'];
    $no_hp = $row['no_hp'];
    $no_telp = $row['no_telp'];
    $email = $row['email'];
    $penerima_kps = $row['penerima_kps'];
    $no_kps = $row['no_kps'];
    $kewarganergaraan = $row['kewarganegaraan'];
    $ayah_kandung = $row['ayah_kandung'];
    $tahun_lahir_ayah = $row['tahun_lahir_ayah'];
    $pendidikan_ayah = $row['pendidikan_ayah'];
    $pekerjaan_ayah = $row['pekerjaan_ayah'];
    $penghasilan_ayah = $row['penghasilan_ayah'];
    $kebutuhan_khusus_ayah = $row['kebutuhan_khusus_ayah'];
    $ibu_kandung = $row['ibu_kandung'];
    $tahun_lahir_ibu = $row['tahun_lahir_ibu'];
    $pendidikan_ibu = $row['pendidikan_ibu'];
    $pekerjaan_ibu = $row['pekerjaan_ibu'];
    $penghasilan_ibu = $row['penghasilan_ibu'];
    $kebutuhan_khusus_ibu = $row['kebutuhan_khusus_ibu'];
}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <style>
        .judul {
            text-align: center;
            color: blue;
        }

        .content {
            margin: 2rem 2rem 2rem 2rem;
        }

        .content label {
            width: 15rem;
        }
    </style>
</head>

<body>
    <div class="judul">
        <h1>Data Diri Peserta Didik</h1>
    </div>
    <div class="content">
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">JENIS PENDAFTARAN </label>
            <strong name="email" id="email" value="email"> : <?php echo  $jenis_pendaftaran; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">TANGGAL MASUK SEKOLAH</label>
            <strong name="email" id="email" value="email"> : <?php echo  $tanggal_masuk_sekolah; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">NIS</label>
            <strong name="email" id="email" value="email"> : <?php echo  $nis; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">NOMOR UJIAN</label>
            <strong name="email" id="email" value="email"> : <?php echo  $nomor_ujian; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">PERNAH PAUD</label>
            <strong name="email" id="email" value="email"> : <?php echo  $pernah_paud; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">PERNAH TK</label>

            <strong name="email" id="email" value="email"> : <?php echo  $pernah_tk; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">NOMOR SKHUN</label>

            <strong name="email" id="email" value="email"> : <?php echo  $no_skhun; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">NO IJAZAH</label>

            <strong name="email" id="email" value="email"> : <?php echo  $no_ijazah; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">HOBI </label>

            <strong name="email" id="email" value="email"> : <?php echo  $hobi; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">CITA - CITA</label>

            <strong name="email" id="email" value="email"> : <?php echo  $cita_cita; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">NAMA LENGKAP</label>

            <strong name="email" id="email" value="email"> : <?php echo  $nama_lengkap; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">JENIS KELAMIN</label>

            <strong name="email" id="email" value="email"> : <?php echo  $jenis_kelamin; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">NISN</label>

            <strong name="email" id="email" value="email"> : <?php echo  $nisn; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">NIK</label>

            <strong name="email" id="email" value="email"> : <?php echo  $nik; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">TANGGAL LAHIR</label>

            <strong name="email" id="email" value="email"> : <?php echo  $tanggal_lahir; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">TEMPAT LAHIR</label>

            <strong name="email" id="email" value="email"> : <?php echo  $tempat_lahir; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">AGAMA</label>

            <strong name="email" id="email" value="email"> : <?php echo  $agama; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">KEBUTUHAN KHUSUS SISWA</label>

            <strong name="email" id="email" value="email"> : <?php echo  $kebutuhan_khusus_siswa; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">ALAMAT JALAN</label>

            <strong name="email" id="email" value="email"> : <?php echo  $alamat_jalan; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">RT </label>

            <strong name="email" id="email" value="email"> : <?php echo  $rt; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">RW</label>

            <strong name="email" id="email" value="email"> : <?php echo  $rw; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">DUSUN </label>

            <strong name="email" id="email" value="email"> : <?php echo  $dusun; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">KELURAHAN</label>

            <strong name="email" id="email" value="email"> : <?php echo  $kelurahan; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">KECAMATAN</label>

            <strong name="email" id="email" value="email"> : <?php echo  $kecamatan; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">KODE POS</label>

            <strong name="email" id="email" value="email"> : <?php echo  $kode_pos; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">TEMPAT TINGGAL</label>

            <strong name="email" id="email" value="email"> : <?php echo  $tempat_tinggal; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">TRANSPORTASI</label>

            <strong name="email" id="email" value="email"> : <?php echo  $transportasi; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">NO HP</label>

            <strong name="email" id="email" value="email"> : <?php echo  $no_hp; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">NO TELPON</label>

            <strong name="email" id="email" value="email"> : <?php echo  $no_telp; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">EMAIL</label>

            <strong name="email" id="email" value="email"> : <?php echo  $email; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">PENERIMA KPS</label>

            <strong name="email" id="email" value="email"> : <?php echo  $penerima_kps; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">NO KPS</label>

            <strong name="email" id="email" value="email"> : <?php echo  $no_kps; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">KEWARGANEGARAAN</label>

            <strong name="email" id="email" value="email"> : <?php echo  $kewarganergaraan; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">AYAH KANDUNG</label>

            <strong name="email" id="email" value="email"> : <?php echo  $ayah_kandung; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">TAHUN LAHIR AYAH</label>

            <strong name="email" id="email" value="email"> : <?php echo  $tahun_lahir_ayah; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">PENDIDIKAN AYAH</label>

            <strong name="email" id="email" value="email"> : <?php echo  $pendidikan_ayah; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">PEKERJAAN AYAH</label>

            <strong name="email" id="email" value="email"> : <?php echo  $pekerjaan_ayah; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">PENGHASILAN AYAH</label>

            <strong name="email" id="email" value="email"> : <?php echo  $penghasilan_ayah; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">KEBUTUHAN KHUSUS AYAH</label>

            <strong name="email" id="email" value="email"> : <?php echo  $kebutuhan_khusus_ayah; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">IBU KANDUNG</label>

            <strong name="email" id="email" value="email"> : <?php echo  $ibu_kandung; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">TAHUN LAHIR IBU</label>

            <strong name="email" id="email" value="email"> : <?php echo  $tahun_lahir_ibu; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">PENDIDIKAN IBU</label>

            <strong name="email" id="email" value="email"> : <?php echo  $pendidikan_ibu; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">PEKERJAAN IBU</label>

            <strong name="email" id="email" value="email"> : <?php echo  $pekerjaan_ibu; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">PENGHASILAN IBU</label>

            <strong name="email" id="email" value="email"> : <?php echo  $penghasilan_ibu; ?> </strong>
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">KEBUTUHAN KHUSUS IBU</label>

            <strong name="email" id="email" value="email"> : <?php echo  $kebutuhan_khusus_ibu; ?> </strong>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>