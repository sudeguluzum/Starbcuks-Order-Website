<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Sign Up to Starbucks</title>
   <link rel="icon" href="img/starbucks2.ico" type="image/x-icon">
  
   <link rel="stylesheet" href="login_style.css">

</head>
<body>
   
<div class="form-container">

   <form action="signup_kontrol" method="post">
      <h3>Sign Up to Starbucks</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="ad" required placeholder="Name">
      <input type="text" name="soyad" required placeholder="Surname">
      <input type="tel"  name="telno" required placeholder="Phone Number">
      <input type="email" name="mail" required placeholder="E-mail">
      <input type="password" name="sifre" required placeholder="Password">
      <input type="date" name="d_tarihi" require placeholder="Date Of Birth">
      <input type="submit" name="submit" value="Sign Up" class="form-btn">
      <p>Do you have an account? <a href="login.html">Login</a></p>
   </form>

</div>

</body>
</html>