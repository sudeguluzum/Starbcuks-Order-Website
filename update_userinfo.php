<?php
session_start();
include ("baglan.php");
if (!isset($_SESSION['musteri_id'])) {
    // Kullanıcı giriş yapmamışsa, bu sayfaya erişimi engelle veya giriş sayfasına yönlendir.
    header("Location: login.php"); // login.php, giriş sayfanızın URL'si olsun.
    exit;
}

$musteri_id = $_SESSION['musteri_id']; 

// Formdan gelen verileri al
$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$email = $_POST['email'];
$telefon = $_POST['telefon'];
$dogumTarihi = $_POST['dogumTarihi'];

$sql = "UPDATE musteriler SET";
if (!empty($ad)) {
    $sql .= " ad='$ad',";
}
if (!empty($soyad)) {
    $sql .= " soyad='$soyad',";
}
if (!empty($email)) {
    $sql .= " mail='$email',";
}
if (!empty($telefon)) {
    $sql .= " tel_no='$telefon',";
}
if (!empty($dogumTarihi)) {
    $sql .= " d_tarihi='$dogumTarihi',";
}

// Son virgülü kaldırın
$sql = rtrim($sql, ",");

// WHERE koşulu ekleyin
$sql .= "WHERE musteri_id=$musteri_id";

if ($baglan->query($sql) === TRUE) {
    // echo "Veriler başarıyla güncellendi.";
   

        echo '<script type="text/javascript">
        alert("Veriler başarıyla güncellendi.");
        location.href = "userinfo.php";
        </script>';
       
    
} else {
    echo "Hata: " . $baglan->error;
}


// Veritabanı bağlantısını kapatma
$baglan->close();
?>
