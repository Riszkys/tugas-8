<?php
include 'koneksi.php';
session_start();
// Menggabungkan data dari ketiga form yang disimpan pada session
$data = array_merge(
    $_SESSION['formindex_data'],
    $_SESSION['formdatapribadi_data'],
    $_SESSION['formayahkandung_data'],
    $_SESSION['formibukandung_data']
);
$nama_ibu = $_POST['nama_ibu'];
$tahun_lahir_ibu = $_POST['tahun_lahir_ibu'];
$pendidikan_ibu = $_POST['pendidikan_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$penghasilan_bulanan_ibu = $_POST['penghasilan_bulanan_ibu'];
$kebutuhan_khusus_ibu = $_POST['kebutuhan_khusus_ibu'];

$query = "INSERT INTO data_peserta_didik (jenis_pendaftaran, tanggal_masuk_sekolah, nis, nomor_ujian, pernah_paud, pernah_tk, no_skhun, no_ijazah, hobi,
cita_cita, nama_lengkap, jenis_kelamin, nisn, nik, tanggal_lahir, tempat_lahir, agama, kebutuhan_khusus_siswa, alamat_jalan, rt,
rw, dusun, kelurahan, kecamatan, kode_pos, tempat_tinggal, transportasi, no_hp, no_telp, email,
penerima_kps, no_kps, kewarganegaraan, ayah_kandung, tahun_lahir_ayah, pendidikan_ayah, pekerjaan_ayah, penghasilan_ayah, kebutuhan_khusus_ayah, ibu_kandung, tahun_lahir_ibu,
pendidikan_ibu, pekerjaan_ibu, penghasilan_ibu, kebutuhan_khusus_ibu) VALUES ('$data[jenis_pendaftaran]', '$data[tanggal_masuk]', '$data[nis]', '$data[no_peserta_ujian]', '$data[pernah_paud]', '$data[pernah_tk]', '$data[no_skhun]', 
'$data[no_ijazah]', '$data[hobi]', '$data[cita_cita]', '$data[nama_lengkap]', '$data[jenis_kelamin]', '$data[nisn]', '$data[nik]',
'$data[tanggal_lahir]', '$data[tempat_lahir]', '$data[agama]', '$data[kebutuhan_khusus]', '$data[alamat_jalan]', '$data[rt]', '$data[rw]',
'$data[nama_dusun]', '$data[nama_kelurahan]', '$data[Kecamatan]', '$data[kode_pos]', '$data[tempat_tinggal]', '$data[moda_transportasi]', '$data[nomor_hp]',
'$data[nomor_telepon]', '$data[email_pribadi]', '$data[penerima_kps]', '$data[no_kps]', '$data[kewarganegaraan]', '$data[nama_ayah]', '$data[tahun_lahir_ayah]', '$data[pendidikan_ayah]',
'$data[pekerjaan_ayah]', '$data[penghasilan_bulanan_ayah]', '$data[kebutuhan_khusus_ayah]', '$nama_ibu', '$tahun_lahir_ibu', '$pendidikan_ibu', '$pekerjaan_ibu', '$penghasilan_bulanan_ibu', '$kebutuhan_khusus_ibu')";
mysqli_query($conn, $query);
$result = mysqli_query($conn, $query);
if ($result) {
    echo "<script>alert('Data Berhasil di Input.')</script>";

    // Hapus session setelah data tersimpan
    unset($_SESSION['form1_data']);
    unset($_SESSION['form2_data']);
    unset($_SESSION['form3_data']);

    header("location:tampildata.php");
} else {
    echo "<script>alert('Woops! Something Wrong Went.')</script>";
}
