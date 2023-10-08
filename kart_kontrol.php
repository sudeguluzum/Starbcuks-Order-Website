<?php
session_start();
include ("baglan.php");  
    if($baglan){
   if($_POST){ //postun gidip gitmediğini kontrol etmek
      $kart_id=mysqli_insert_id($baglan);
      $kart_no=trim($_POST["kart_no"]);
      $ay=trim($_POST["ay"]);
      $yil=trim($_POST["yil"]);
      $CVV=trim($_POST["CVV"]);
      $sorgu=mysqli_query($baglan,"INSERT INTO kartlar (kart_no,ay,yil,CVV)
      VALUES ('".$kart_no."','".$ay."','".$yil."','".$CVV."')");
      if($sorgu==TRUE){
         header('location:kart.php');
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