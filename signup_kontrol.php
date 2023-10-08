<?php
session_start();
include ("baglan.php");  
    if($baglan){
   if($_POST){ //postun gidip gitmediğini kontrol etmek
      $uye_id=mysqli_insert_id($baglan);
      $ad=trim($_POST["ad"]);
      $soyad=trim($_POST["soyad"]);
      $tel_no=trim($_POST["tel_no"]);
      $mail=trim($_POST["mail"]);
      $sifre=trim($_POST["sifre"]);
      $d_tarihi=trim($_POST["d_tarihi"]);
      $sorgu=mysqli_query($baglan,"INSERT INTO musteriler (ad,soyad,tel_no,mail,sifre,d_tarihi)
      VALUES ('".$ad."','".$soyad."','".$tel_no."','".$mail."','".$sifre."','".$d_tarihi."')");
      if($sorgu==TRUE){
         header('location:order.php');
      }else{
         echo "Hata:".$sorgu."</br>".$baglan->error;
      }
      
      mysqli_close($baglan);
     
   }else{
      echo "Post Hatası";
   }
}else{
      echo "Veritabanına Bağlanmadı";
   } 
 


?>