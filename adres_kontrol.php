<?php
session_start();
include ("baglan.php");  
    if($baglan){
   if($_POST){ //postun gidip gitmediğini kontrol etmek
      $adres_id=mysqli_insert_id($baglan);
      $il=trim($_POST["il"]);
      $ilce=trim($_POST["ilce"]);
      $mahalle=trim($_POST["mahalle"]);
      $adres=trim($_POST["adres"]);
      $sorgu=mysqli_query($baglan,"INSERT INTO adres (il,ilce,mahalle,adres)
      VALUES ('".$il."','".$ilce."','".$mahalle."','".$adres."')");
      if($sorgu==TRUE){
        //  header('location:adres.php');
         echo '<script type="text/javascript">
         alert("Address Registered");
         location.href = "adres.php";
         </script>';
         exit;
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