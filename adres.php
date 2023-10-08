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
    <link rel="stylesheet" href="css/adres_style.css">
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
         </ul>
      </header>

<div class="container">
    <div class=left>
            <div class="sidebar">
             <ul>
            <li id="1"><a href="userinfo.php"><i class='bx bx-user'></i><span>User Information</span></a></li>
            <li id="2"><a href="adres.php"><i class='bx bx-map'></i><span>Address Info</span></a></li>
            <li id="3"><a href="kart.php"><i class='bx bx-credit-card-alt'></i><span>Registered Credit Cards</span></a></li>
            </ul>
            </div> 
    </div>
    <div class="right">
            <div class="adres-form">
            <h2>Address Info</h2> <hr> <br>
            <form action="adres_kontrol.php" method="POST">
            <label for="il">City*</label> <br>
            <input type="text" id="il" name="il" required><br><br>
        
            <label for="ilce">District*</label> <br>
            <input type="text" id="ilce" name="ilce" required><br><br>
        
            <label for="mahalle">Neighbourhood*</label> <br>
            <input type="text" id="mahalle" name="mahalle" required><br><br>
        
            <label for="adres">Address*</label> <br>
            <input type="text" id="adres" name="adres" required>
            <br><br>
            <button class="buton">Add New Address</button>
           </form> 
           </div>

           <div class="show">
                <div class="kayitli-adres">
                <h2>Registered Address Info</h2> <hr> 
                    <span>
                     <?php
                    session_start();
                     if(isset($_SESSION['ad'])) {
                     $musteri_id = $_SESSION['musteri_id'];
                     $sql = "SELECT il, ilce, mahalle,adres FROM adres";
                     $result = $con->query($sql);
                     if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
              
                    echo "City: " . $row["il"]."<br>". " District: " . $row["ilce"]."<br>". " Neighbourhood: " . $row["mahalle"]. "<br>";
                     }
                    else {
                    echo "Kullanıcı bulunamadı.";
                     }
                    }
                    else {
                    echo "Giriş yapmış bir kullanıcı bulunamadı.";
                   }
                   ?>
           
                   </span>
                   <a href=""><i class='bx bx-trash'></i><span>Delete</span>
                  
                </a>
                </div>
           </div>
  

  
   

    </div>
</div>
</body>
</html>

