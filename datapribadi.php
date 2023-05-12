<?php
session_start();
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

    <!-- end judul -->
    <!-- form start -->
    <form class="form" method="POST" action="dataayahkandung.php" style="padding-top: 2rem;">

        <div class="judulform">
            <h5>Data Pribadi</h5>
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 11. </label>
            <label class="judul-label" for=""> Nama Lengkap </label>
            <input class="input" type="text" name="nama_lengkap">
        </div>
        <div class="label mb-3" style="display: flex;">
            <label for="" class="nomor-label"> 12. </label>
            <label class="judul-label" for="" style="width: 18rem;"> Jenis Kelamin </label>
            <div style="display: flex;">
                <div style="padding-left: 8px;"> <input class="radiobtn" type="radio" name="jenis_kelamin" value="L"> Laki-Laki</div>

                <div style="padding-left: 10rem;"> <input class="radiobtn" type="radio" name="jenis_kelamin" value="P"> Perempuan </div>
            </div>
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 13. </label>
            <label class="judul-label" for=""> NISN </label>
            <input class="input" type="number" name="nisn">
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 14. </label>
            <label class="judul-label" for=""> NIK </label>
            <input class="input" type="number" name="nik">
        </div>
        <div class="label mb-3" style="display: flex;">
            <label for="" class="nomor-label"> 15. </label>
            <label class="judul-label" for="" style="width: 18.6rem;"> Tanggal Lahir </label>
            <input type="date" name="tanggal_lahir">
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 16. </label>
            <label class="judul-label" for="" style="width: 18rem;"> Tempat Lahir </label>
            <input type="text" name="tempat_lahir">
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 17. </label>
            <label class="judul-label" for=""> Agama</label>
            <input class="input" type="text" name="agama" style="width: 6rem ;">
            <label for="">01)Islam</label>
            <label for="">02)Kristem/Protestan</label>
            <label for="">03)Katholik</label>
            <label for="">04)Hindhu</label>
            <label for="">05)Budha</label>
            <label for="">06)Kong Hu Chu</label>
            <label for="">99)Lainnya</label>
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 18. </label>
            <label class="judul-label" for=""> Berkebutuhan Khusus</label>
            <input class="input" type="text" name="kebutuhan_khusus" style="width: 6rem ;">
            <label for="" style="font-size: 0.8em;"> 01)Tidak</label>
            <label for="" style="font-size: 0.8em;">02)Netra (A)</label>
            <label for="" style="font-size: 0.8em;">03)Rungu (B)</label>
            <label for="" style="font-size: 0.8em;">04)Grahita Ringan (C)</label>
            <label for="" style="font-size: 0.8em;">05)Grahita Sedang (C1)</label>
            <label for="" style="font-size: 0.8em;">06)Daksa Ringan (D)</label>
            <label for="" style="font-size: 0.8em;">07)Daksa Sedang (D1)</label>
            <label for="" style="margin-left: 26rem;" style="font-size: 0.8em;">08)Laras (E)</label>
            <label for="" style="font-size: 0.8em;">09)Wicara (F)</label>
            <label for="" style="font-size: 0.8em;">10)Tuna Ganda (G)</label>
            <label for="" style="font-size: 0.8em;">11)Hiper Aktif (H)</label>
            <label for="" style="font-size: 0.8em;">12)Cerdas Istimewa (I)</label>
            <label for="" style="font-size: 0.8em;">13)Bakat Istimewa (J)</label>
            <label for="" style="font-size: 0.8em;">14)Kesulitan Belajar (K)</label>
            <label for="" style="margin-left: 26rem;" style="font-size: 0.8em;">15)Narkoba (N)</label>
            <label for="" style="font-size: 0.8em;">16)Indigo (O)</label>
            <label for="" style="font-size: 0.8em;">17)Down Sindrome (P)</label>
            <label for="" style="font-size: 0.8em;">18)Autis (Q)</label>
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 19. </label>
            <label class="judul-label" for=""> Alamat Jalan </label>
            <input class="input" type="text" name="alamat_jalan">
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 20. </label>
            <label class="judul-label" for=""> RT </label>
            <input class="input" type="number" name="rt" style="width: 6rem ;">
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 21. </label>
            <label class="judul-label" for=""> RW </label>
            <input class="input" type="number" name="rw" style="width: 6rem ;">
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 22. </label>
            <label class="judul-label" for=""> Nama Dusun </label>
            <input class="input" type="text" name="nama_dusun">
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 23. </label>
            <label class="judul-label" for=""> Nama Kelurahan/Desa </label>
            <input class="input" type="text" name="nama_kelurahan">
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 24. </label>
            <label class="judul-label" for=""> Kecamatan </label>
            <input class="input" type="text" name="Kecamatan">
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 25. </label>
            <label class="judul-label" for=""> Kode Pos </label>
            <input class="input" type="number" name="kode_pos" style="width: 6rem ;">
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 26. </label>
            <label class="judul-label" for=""> Tempat Tinggal </label>
            <input class="input" type="text" name="tempat_tinggal" style="width: 6rem ;">
            <label for="">1. Bersama Orang Tua</label>
            <label for="">2. Wali</label>
            <label for="">3. Kos</label>
            <label for="">4. Asrama</label>
            <label for="">5. Panti Asuhab</label>
            <label for="">6. Lainnya</label>
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 27. </label>
            <label class="judul-label" for=""> Moda Transportasi</label>
            <input class="input" type="text" name="moda_transportasi" style="width: 6rem ;">
            <label for="">01) Jalan Kaki </label>
            <label for="">02) Kendaraan Pribadi</label>
            <label for="">03) Kendaraan Umum/Angkot</label>
            <label for="">04) Jemputan Sekolah</label>
            <label for="">05) Kereta Api</label>
            <label for="">06) Ojek</label>
            <label for="" style="margin-left: 26rem;">07) Andong/Bendi/Delman/Becak</label>
            <label for="">08)Perahu Penyebrangan/Rakit/Gelek</label>
            <label for="">99)Lainnya</label>
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 28. </label>
            <label class="judul-label" for=""> Nomor HP </label>
            <input class="input" type="number" name="nomor_hp">
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 29. </label>
            <label class="judul-label" for=""> Nomor Telepon </label>
            <input class="input" type="number" name="nomor_telepon">
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 30. </label>
            <label class="judul-label" for=""> Email Pribadi </label>
            <input class="input" type="text" name="email_pribadi">
        </div>
        <div class="label mb-3" style="display: flex;">
            <label for="" class="nomor-label"> 31. </label>
            <label class="judul-label" for="" style="width: 18rem;"> Penerima KPS/PKH/KIP </label>
            <div style="display: flex;">
                <div style="padding-left: 8px;"> <input class="radiobtn" type="radio" name="penerima_kps" value="Y"> Ya</div>

                <div style="padding-left: 10rem;"> <input class="radiobtn" type="radio" name="penerima_kps" value="T"> Tidak </div>
            </div>
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 32. </label>
            <label class="judul-label" for=""> No. KPS/KKS/PKH/KIP </label>
            <input class="input" type="number" name="no_kps">
            <label>*) apabila menerima</label>
        </div>

        <div class="label mb-3" style="display: flex;">
            <label for="" class="nomor-label"> 33. </label>
            <label class="judul-label" for="" style="width: 18rem;"> Kewarganegaraan </label>
            <div style="display: flex;">
                <div style="padding-left: 8px;"> <input class="radiobtn" type="radio" name="kewarganegaraan" value="WNI"> Indonesia (WNI)</div>

                <div style="padding-left: 10rem;"> <input class="radiobtn" type="radio" name="kewarganegaraan" value="WNA"> Asing(WNA) </div>
            </div>
        </div>
        <!-- <input type=" text" name="kewarganegaraan" id="" style="padding-left: 1rem;"> -->

        </div>
        <input type="submit" value="Next">
        <!-- <button type="submit" class="btn btn-primary" style="padding-right: 1rem;"> <a href="dataayahkandung.php" style="color: #000;"> Next</a> </button> -->
    </form>
    <?php
    // Set session untuk menyimpan data dari form 2
    $_SESSION['formdatapribadi_data'] = $_POST;
    ?>
    <!-- form end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>