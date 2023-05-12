<?php
session_start();
// Set session untuk menyimpan data dari form 1
$tanggal = date('d/m/Y');
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORM REGISTRASI</title>
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <!-- judul -->
    <div>
        <h2 class="judul-form">FORMULIR PESERTA DIDIK</h2>
    </div>
    <!-- end judul -->
    <!-- form start -->
    <form class="form" method="POST" action="datapribadi.php">
        <div class="tanggal" style="display: flex; justify-content: space-between;">
            <div class="content-tanggal">
                <h5>Tanggal : </h5>
                <h5 style="padding-left: 1rem;"> <?php echo $tanggal ?></h5>
            </div>
            <div class="kotak">
                <h5 style="padding-left: 2.45rem;">F-PD</h5>
            </div>
        </div>
        <div class="judulform">
            <h5>Registrasi Peserta Didik</h5>
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 1. </label>
            <label class="judul-label" for=""> Jenis Pendaftaran </label>
            <input class="input" type="text" name="jenis_pendaftaran">
            <label for=""> 01) Siswa Baru</label>
            <label for=""> 02) Pindahan</label>
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 2. </label>
            <label class="judul-label" for="" style="width: 18rem;"> Tanggal Masuk Sekolah </label>
            <input class="input-date" type="date" name="tanggal_masuk">
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 3. </label>
            <label class="judul-label" for=""> NIS </label>
            <input class="input" type="text" name="nis">
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 4. </label>
            <label class="judul-label" for=""> Nomor Peserta Ujian </label>
            <input class="input" type="text" name="no_peserta_ujian">
            <p style="padding-left: 20rem; font-style: italic; ">Nomor Peserta Ujian adalah 20 digit yang diterima dalam sertifikat <span style="color: red;">SKHUN SD</span> diisi bagi peserta didik jenjang SMP</p>

        </div>
        <div class="label mb-3" style="display: flex;">
            <label for="" class="nomor-label"> 5. </label>
            <label class="judul-label" for="" style="width: 18rem;"> Apakah Pernah PAUD </label>
            <div style="display: flex;">
                <div style="padding-left: 8px;"> <input class="radiobtn" type="radio" name="pernah_paud" value="Y"> Ya</div>

                <div style="padding-left: 10rem;"> <input class="radiobtn" type="radio" name="pernah_paud" value="T"> Tidak </div>
            </div>
        </div>
        <div class="label mb-3" style="display: flex;">
            <label for="" class="nomor-label"> 6. </label>
            <label class="judul-label" for="" style="width: 18rem;"> Apakah Pernah TK </label>
            <div style="display: flex;">
                <div style="padding-left: 8px;"> <input class="radiobtn" type="radio" name="pernah_tk" value="Y"> Ya</div>

                <div style="padding-left: 10rem;"> <input class="radiobtn" type="radio" name="pernah_tk" value="T"> Tidak </div>
            </div>
        </div>
        <div class="label mb-3" style="display :flex;">
            <label for="" class="nomor-label"> 7. </label>
            <label class="judul-label" for="" style="width: 15.6rem;"> NO. Seri SKHUN Sebelumnya</label>
            <input class="input" type="text" name="no_skhun">
            <p style="padding-left: 10px; font-size: 0.8em; font-style: italic;">Diisi 16 Digit yang tertera di <span style="color: red;">SKHUN</span> - diisi Bagi PD Jenjang SMP</p>
        </div>
        <div class="label mb-3" style="display :flex;">
            <label for="" class="nomor-label"> 8. </label>
            <label class="judul-label" for="" style="width: 15.6rem;"> NO. Seri Ijazah Sebelumnya</label>
            <input class="input" type="text" name="no_ijazah">
            <p style="padding-left: 10px; font-size: 0.8em; font-style: italic;">Diisi 16 Digit yang tertera di <span style="color: red;">Ijazah SD</span> - diisi Bagi PD Jenjang SMP</p>
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 9. </label>
            <label class="judul-label" for="" style="width: 18rem"> Hobi </label>
            <select name="hobi" id="hobi">
                <option value="olahraga">Olahraga</option>
                <option value="kesenian">Kesenian</option>
                <option value="membaca">Membaca</option>
                <option value="menulis">Menulis</option>
                <option value="traveling">Traveling</option>
                <option value="lainnya">Lainnya</option>
            </select>
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 10. </label>
            <label class="judul-label" for="" style="width: 18rem"> Cita-Cita </label>
            <select name="cita_cita" id="cita_cita">
                <option value="pns">PNS</option>
                <option value="tni/polri">TNI/POLRI</option>
                <option value="guru/dosen">Guru/Dosen</option>
                <option value="dokter">Dokter</option>
                <option value="politikus">Politikus</option>
                <option value="wiraswasta">Wiraswasta</option>
                <option value="seni/lukis/artis/sejenisnya">Seni/Lukis/Artis/Sejenisnya</option>
                <option value="lainnya">Lainnya</option>
            </select>
        </div>
        <input type="submit" value="Next">
        <!-- <button type="submit" class="btn btn-primary" style="padding-right: 1rem;"> <a href="datapribadi.php" style="color: #000;"> Next</a> </button> -->
    </form>
    <?php
    $_SESSION['formindex_data'] = $_POST;
    ?>
    <!-- form end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>