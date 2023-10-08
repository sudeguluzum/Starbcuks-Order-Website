<?php
$con=mysqli_connect('localhost','root','','2020469136');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Starbucks Coffee</title>
    <link rel="icon" href="img/starbucks2.ico" type="image/x-icon">
    <link rel="stylesheet" href="userinfo_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  
</head>
<body>

      <header>
         <a href="#home" class="logo"><img src="img/logo.png" alt=""></a>
         <div class="bx bx-menu" id="menu-icon"></div>
         <ul class="navbar">
            <li><a href="order.php">Home</a></li>
            <li><a href="order.php">Shop</a></li>
            <li><a href="order.php">About</a></li>
            <li><a href="order.php">Contact</a></li>
            <li class="account"><a href=""><i class='bx bx-user'></i><span class="links_name">Account</span></a>
               
                <ul class="dropdown-menu" id="dropdown-menu">
                    <li><a class="dropdown-item" href="#">User Information</a></li>
                    <li><a class="dropdown-item" href="#">All Orders</a></li>
                    <li><hr class="log_out"><a href="logout.php"><i class='bx bx-log-out-circle'></i><span class="links_name">Log Out</span></a></li>
                  </ul>
            </li>

            <li class="order"><a href="#"><i class='bx bx-shopping-bag'></i><span class="links_name">Cart</span></a></li>

            <!-- <li class="log_out"><a href="logout.php"><i class='bx bx-log-out-circle'></i><span class="links_name">Log Out</span></a></li> -->
         </ul>
      </header>

  <div class="container">
   <div class="sidebar">
        <ul>
            <li id="1"><a href="userinfo.php"><i class='bx bx-user'></i><span>User Information</span></a></li>
            <li id="2"><a href="adres.php"><i class='bx bx-map'></i><span>Address Info</span></a></li>
            <li id="3"><a href="kart.php"><i class='bx bx-credit-card-alt'></i><span>Registered Credit Cards</span></a></li>
        </ul>
    </div> 

  <div class="right">
      <div id="member" class="member-form">
         <h2>Membership Information</h2> <hr> <br> 
        <form action="update_userinfo.php" method="POST">
           <label for="ad">Name</label> <br>
           <input type="text" id="ad" name="ad" ><br><br>
        
           <label for="soyad">Surname</label> <br>
           <input type="text" id="soyad" name="soyad" ><br><br>
        
           <label for="email">E-mail</label> <br>
           <input type="email" id="email" name="email" ><br><br>
        
            <label for="telefon">Phone Number</label> <br>
            <input type="tel" id="telefon" name="telefon">
            <br><br>
        
           <label for="dogumTarihi">Date of Birthday</label> <br>
           <input type="date" id="dogumTarihi" name="dogumTarihi" requred><br><br>
        
            <button class="buton">Update</button>
       </form> 
      </div> 


    <div class="password-form">
        <h2>Password Update</h2> <hr> <br>
        <form action="password_update.php" method="POST">
        <label for="password">Current Password</label> <br>
        <input type="password" id="oldpassword" name="oldpassword" required><br><br>
        
        <label for="password">New Password</label> <br>
        <input type="password" id="newpassword" name="newpassword" required><br><br>
        
        <label for="password">New Password (Again)</label> <br>
        <input type="password" id="againpassword" name="againpassword" required><br><br>
       
        <button class="buton">Update</button>
        </form> 
    </div> 
   </div>
   

    
</div>



   </body>
</html>
