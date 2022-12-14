<?php
// KAYIT EKLEME
if(isset($_POST["kaydet"])){
include "baglanti.php";
$sql="INSERT INTO `ogrenci` (`ogrno`, `ograd`, `ogrsoyad`, `cinsiyet`, `dtarih`, `sinif`, `puan`) VALUES (NULL, ?, ?, ?, ?, ?, '0');";
$dizi=[
    $_POST["ad"],
    $_POST["soyad"],
    $_POST["cins"],
    $_POST["dtarih"],
    $_POST["sinif"]

];

  
    $sth=$db->prepare($sql);
   $sonuc = $sth->execute($dizi);
   header("Location:index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!doctype html>
    <html lang="tr">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        
        <title>Öğrenci Ekle</title>
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
            <form action="" method="POST" class="row mt-4 g-3">

                <div class="col-6">
                    <label for="ad" class="form-label">Adınız</label>
                    <input type="text" class="form-control" name="ad">
                </div>
                <div class="col-6">
                    <label for="soyad" class="form-label">Soyadınız</label>
                    <input type="text" class="form-control" name="soyad">
                </div>
                <div class="col-6">
                    <label for="sinif" class="form-label">Sınıf</label>
                    <input type="text" class="form-control" name="sinif">
                </div>
                <div class="col-6">
                    <label for="dtarih" class="form-label">Doğum Tarihi</label>
                    <input type="date" class="form-control" name="dtarih">
                </div>

                <div class="col-6">
                    <label for="" class="form-label">
                        <input type="radio" name="cins" value="E">Erkek
                    </label>
                    <label for="" class="form-label">
                        <input type="radio" name="cins" value="K">Kız
                    </label>
                </div>
                <button  type="submit" name="kaydet" class="btn btn-primary">Kaydet</button>

            </form>
        </div>
    </main>
</body>

</html>