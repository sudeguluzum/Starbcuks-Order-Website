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
    <link rel="stylesheet" href="css/kart.css">
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
            <li><a href="#contact">Contact</a></li>
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
  <div class="adres-form">
<h2>Card Info</h2> <hr> <br>
    <form action="kart_kontrol.php" method="POST">
        <label for="kart" id="kart_no">Card Number*</label> <br>
        <input type="text" id="kart_no" name="kart_no" required><br><br>
        
        <label for="date">Expiration date:</label> <br>
    <select id="ay" name="ay">
        <option disabled selected>Month</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
    </select> 
    <select id="yil" name="yil">
        <option disabled selected>Year</option>
        <option value="2023">2023</option>
        <option value="2024">2024</option>
        <option value="2025">2025</option>
        <option value="2026">2026</option>
        <option value="2027">2027</option>
        <option value="2028">2028</option>
        <option value="2029">2029</option>
        <option value="2030">2030</option>
        <option value="2031">2031</option>
        <option value="2032">2032</option>
        <option value="2033">2033</option>
        <option value="2034">2034</option>
    </select> 
    <label id="CVV" for="cvv">CVV*</label> 
        <input type="number" id="CVV" name="CVV" required> <br> <br>
        <button class="buton">Add New Card</button>
    </form> 
</div>

<div class="kayitli-adres">
<div class="kayitli-adres2">

</div>
</div>

   </div>
   

    
</div>

   </body>
</html>
