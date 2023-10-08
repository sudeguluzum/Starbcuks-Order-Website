<?php
session_start();
include ("baglan.php");
if (!isset($_SESSION['musteri_id'])) { 
    header("Location: login.php"); 
    exit;
}

$musteri_id = $_SESSION['musteri_id']; 

// Formdan gelen verileri al
$oldpassword = $_POST['oldpassword'];
$newpassword = $_POST['newpassword'];
$againpassword = $_POST['againpassword'];

// Kullanıcının mevcut şifresini veritabanından alın
$sql = "SELECT sifre FROM musteriler WHERE musteri_id=$musteri_id";
$result = $baglan->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $veritabani_sifre = $row['sifre'];

    if ($oldpassword === $veritabani_sifre) {
        if ($newpassword === $againpassword) {
            $update_sql = "UPDATE musteriler SET sifre='$newpassword' WHERE musteri_id=$musteri_id";
            
            if ($baglan->query($update_sql) === TRUE) {
                echo '<script type="text/javascript">
                 alert("Şifreniz başarıyla güncellendi.");
                 location.href = "userinfo.php";
                 </script>';
            } else {
                echo "Hata: " . $baglan->error;
            }
        } else {
            echo '<script type="text/javascript">
            alert("Yeni şifreler birbiriyle uyuşmuyor.");
            location.href = "userinfo.php";
            </script>';
        }
    } else {
        echo '<script type="text/javascript">
        alert("Eski şifre yanlış.");
        location.href = "userinfo.php";
        </script>';
    }
} else {
    echo "Kullanıcı bulunamadı.";
}

// Veritabanı bağlantısını kapatma
$conn->close();

?>
