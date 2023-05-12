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

    <form class="form" method="POST" action="simpan.php" style="padding-top: 2rem ;">
        <div class="judulform">
            <h5>DATA IBU KANDUNG</h5>
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 40. </label>
            <label class="judul-label" for=""> Nama Ibu Kandung </label>
            <input class="input" type="text" name="nama_ibu">
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 41. </label>
            <label class="judul-label" for=""> Tahun Lahir </label>
            <input class="input" type="number" name="tahun_lahir_ibu" style="width: 6rem ;">
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 42. </label>
            <label class="judul-label" for=""> Pendidikan</label>
            <input class="input" type="text" name="pendidikan_ibu" style="width: 6rem ;">
            <label for="" style="font-size: 0.8em;">01)Tidak Sekolah</label>
            <label for="" style="font-size: 0.8em;">02)Putus SD</label>
            <label for="" style="font-size: 0.8em;">03)SD Sederajat</label>
            <label for="" style="font-size: 0.8em;">04)SMP Sederajat</label>
            <label for="" style="font-size: 0.8em;">05)SMA Sederajat</label>
            <label for="" style="font-size: 0.8em;">06)D1</label>
            <label for="" style="font-size: 0.8em;">07)D2</label>
            <label for="" style="font-size: 0.8em;">08)D3</label>
            <label for="" style="font-size: 0.8em;">09)D4/S1</label>
            <label for="" style="font-size: 0.8em;">10)S1</label>
            <label for="" style="font-size: 0.8em;">11)S2</label>
            <label for="" style="font-size: 0.8em;">12)S3</label>
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 43. </label>
            <label class="judul-label" for=""> Pekerjaaan</label>
            <input class="input" type="text" name="pekerjaan_ibu" style="width: 6rem ;">
            <label for="" style="font-size: 0.8em;">01)Tidak Bekerja</label>
            <label for="" style="font-size: 0.8em;">02)Nelayan</label>
            <label for="" style="font-size: 0.8em;">03)Petani</label>
            <label for="" style="font-size: 0.8em;">04)Peternak</label>
            <label for="" style="font-size: 0.8em;">05)PNS/TNI/POLRI</label>
            <label for="" style="font-size: 0.8em;">06)Karyawan Swasta</label>
            <label for="" style="font-size: 0.8em;">07)Pedagang Kecil</label>
            <label for="" style="margin-left: 26rem;" style="font-size: 0.8em;">08)Pedagang Besar</label>
            <label for="" style="font-size: 0.8em;">09)Wiraswasta</label>
            <label for="" style="font-size: 0.8em;">10)Wirausaha</label>
            <label for="" style="font-size: 0.8em;">11)Buruh</label>
            <label for="" style="font-size: 0.8em;">12)Pensiunan</label>
            <label for="" style="font-size: 0.8em;">99)Lain-Lain</label>
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 44. </label>
            <label class="judul-label" for=""> Penghasilan Bulanan</label>
            <input class="input" type="text" name="penghasilan_bulanan_ibu" style="width: 6rem ;">
            <label for="" style="font-size: 0.8em;">1 Kurang dari 500.000</label>
            <label for="" style="font-size: 0.8em;">2 500.000 - 999.000</label>
            <label for="" style="font-size: 0.8em;">3 1 juta - 1.999.999</label>
            <label for="" style="font-size: 0.8em;">4 2 juta - 4.9999.999</label>
            <label for="" style="font-size: 0.8em;">5 5 Juta - 20 Juta</label>
            <label for="" style="font-size: 0.8em;">6 Lebih dari 20 juta</label>
        </div>
        <div class="label mb-3">
            <label for="" class="nomor-label"> 45. </label>
            <label class="judul-label" for=""> Berkebutuhan Khusus</label>
            <input class="input" type="text" name="kebutuhan_khusus_ibu" style="width: 6rem ;">
            <label for="" style="font-size: 0.8em;">01)Tidak</label>
            <label for="" style="font-size: 0.8em;">02)Netra (A)</label>
            <label for="" style="font-size: 0.8em;">03)Rungu (B)</label>
            <label for="" style="font-size: 0.8em;">04)Grahita Ringan (C)</label>
            <label for="" style="font-size: 0.8em;">05)Grahita Sedang (C1)</label>
            <label for="" style="font-size: 0.8em;">06)Daksa Ringan (D)</label>
            <label for="" style="font-size: 0.8em;">07)Daksa Sedang (D1)</label>
            <label for="" style="margin-left: 26rem;">08)Laras (E)</label>
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
        </div>
        <input type="submit" value="Simpan">
        <!-- <button type="submit" class="btn btn-primary" style="padding-right: 1rem;"> <a href="dataayahkandung.php" style="color: #000;"> Next</a> </button>
        <button type="submit" class="btn btn-primary" style="padding-right: 1rem; float: left;" name="submit"> <a href="tampildata.php" style="color: #000;"> SIMPAN DATA</a> </button> -->
    </form>
    <?php
    $_SESSION['formibukandung_data'] = $_POST;
    ?>
    <!-- form end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>