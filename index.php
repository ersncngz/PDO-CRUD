<?php
include "baglanti.php";

if(isset($_GET['sil'])){
    $silsql = "DELETE FROM ogrenci WHERE `ogrenci`.`ogrno` = ?";
    $sorgusil = $db->prepare($silsql);
    $sorgusil->execute([
        $_GET['sil']]);

    header('Location = index.php');
}
$sql = "SELECT * FROM ogrenci";
$sorgu = $db->prepare($sql);
$sorgu->execute();
?>
<!doctype html>
<html lang="tr">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Listeleme Sayfası</title>
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-1 text-center"> Güncelleme Ekranı</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="btn-group">
                        <a href="index.php" class="btn btn-outline-primary">Tüm Öğrenciler</a>
                        <a href="ekle.php" class="btn btn-outline-primary">Öğrenci Ekle</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <table class="table table-hover table-dark table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Ad</th>
                                <th>Soyad</th>
                                <th>İşlem</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                                <tr>
                                    <td><?= $satir['ogrno'] ?></td>
                                    <td><?= $satir['ograd'] ?></td>
                                    <td><?= $satir['ogrsoyad'] ?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="detay.php?ogrno=<?= $satir['ogrno'] ?>" class="btn btn-success">Detay</a>
                                            <a href="guncelle.php?ogrno=<?=$satir["ogrno"]?>" class="btn btn-secondary">Güncelle</a>
                                            <a href="?sil=<?=$satir["ogrno"]?>" onclick="return confirm('Kaydı Sil?')" class="btn btn-danger">Kaldır</a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                </div>
            </div>
        </div>
        </div>
    </main>

</body>

</html>