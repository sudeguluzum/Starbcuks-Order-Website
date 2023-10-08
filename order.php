<?php
$con=mysqli_connect('localhost','root','','2020469136');
$conn=mysqli_connect('localhost','root','','2020469136');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Starbucks Coffee</title>
    <link rel="icon" href="img/starbucks2.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/order_style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  
</head>
<body>

      <header>
         <a href="#home" class="logo"><img src="img/logo.png" alt=""></a>
         <div class="bx bx-menu" id="menu-icon"></div>
         <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#shop">Shop</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="account"><a href=""><i class='bx bx-user'></i><span class="links_name">Account</span></a>
               
                <ul class="dropdown-menu" id="dropdown-menu">
                    <li><a class="dropdown-item" href="userinfo.php">User Information</a></li>
                    <li><a class="dropdown-item" href="#">All Orders</a></li>
                    <li><hr class="log_out"><a href="logout.php"><i class='bx bx-log-out-circle'></i><span class="links_name">Log Out</span></a></li>
                  </ul>
            </li>

            <li class="order"><a href="#"><i class='bx bx-shopping-bag'></i><span class="links_name">Cart</span></a></li>
         </ul>
      </header>

      <main class="c-main-container">
        <section class="home" id="home">
        <div class="home-img">
               <img src="img/orderfoto.png" alt="">
            </div>
            <div class="home-text">
               <h2>Welcome,     </h2>
              
               <h1> <?php
               session_start();
               if(isset($_SESSION['ad'])) {
               $musteri_id = $_SESSION['musteri_id'];
               $sql = "SELECT ad FROM musteriler WHERE musteri_id = $musteri_id";
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
               $row = $result->fetch_assoc();
               $ad = $row['ad'];
               echo " $ad";
               }
                else {
                    echo "Kullanıcı bulunamadı.";
                     }
               }
                 else {
                  echo "Giriş yapmış bir kullanıcı bulunamadı.";
               }
               ?>
               </h1> <br> <br>
               <p id="intro">Introducing our Caramel Macchiato with a perfectly balanced taste.</p>
               <span>Buy one fall drink, get one free </span> <br> <br><br>
               <a href="#shop" class="buton">Order Now</a>
            </div>
           
         </section>

         <section class="shop" id="shop">
            <div class="heading">
               <span>Shop Now</span>
               <h1>COFFEES</h1>
            </div>
         </section>

         <div class="kahvemenu">
            <div class='tikla' id="tikla1">
               <img src="img/caffelatte.png" alt="Latte"> 
               <h3>Latte</h3>
            </div>
            <div class='tikla' id="tikla2">
               <img src="img/americano.png" alt="Americano"> 
               <h3>Americano</h3>
            </div>
            <div class='tikla'id="tikla3">
               <img src="img/caramelmac.png" alt="Macchiato">
               <h3>Macchiato</h3>
            </div>
            <div class='tikla'id="tikla4">
               <img src="img/mocha.png" alt="Mocha">
               <h3>Mocha</h3>
            </div>
            <div class='tikla'id="tikla5">
               <img src="img/cap.png" alt="Cappuccino">
               <h3>Cappuccino</h3>
            </div>
            <div class='tikla'id="tikla6">
               <img src="img/espermac.png" alt="Espresso">
               <h3>Espresso</h3>
            </div>
            <div class='tikla'id="tikla7">
               <img src="img/filtrekahve.png" alt="Filtre Kahveler">
               <h3>Filter Coffees</h3>
            </div>
            <div class='tikla'id="tikla8">
               <img src="img/coollime.png" alt="Starbucks Refresha® Drinks">
               <h3>Starbucks Refresha® Drinks</h3>
            </div>
            <div class='tikla'id="tikla9">
               <img src="img/caramelfra.png" alt="Frappuccino® Karışım İçecekler">
               <h3>Frappuccino® Mixed Drinks</h3>
            </div>
            <div class='tikla'id="tikla10">
               <img src="img/affogato.png" alt="Dondurmalı İçecekler">
               <h3>Ice Cream Drinks</h3>
            </div>
            <div class='tikla'id="tikla11">
               <img src="img/chaitea.png" alt="Teavana™ Tea Latte">
               <h3>Teavana™ Tea Latte</h3>
            </div>
         </div>

         <div class="shop-container" id="shop-container1" style="display:none;">
            <div class="box">
               <div class="box-img">
                  <img src="img/flatwhite.png" alt="Flat White">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Flatt White</h2> 
               <span>

               <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=603
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> 
               </span> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/ristrettobianco.png" alt="Ristretto Bianco">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Ristretto Bianco</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=605
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/buzlulatte.png" alt="Buzlu Caffè Latte">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
               </div>
               <h2>Iced Caffè Latte</h2>
              <span>
               <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=602
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) {
                echo  "$" . $result['fiyat'];
                }
                
               ?> </span> 
                <br> <br>
               <a href="#" class="btn">Add to Cart</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/caffelatte.png" alt="Caffè Latte">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Caffè Latte</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=604
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/cortado.png" alt="Cortado">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Cortado</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=601
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn"> Add to Card</a>
            </div>
         </div>

         <div class="shop-container" id="shop-container2" style="display:none;">
            <div class="box">
               <div class="box-img">
                  <img src="img/americano.png" alt="Caffè Americano">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Caffè Americano</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=500
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/buzluamericano.png" alt="Buzlu Caffè Americano">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Iced Caffè Americano</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=501
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br>
               <a href="#" class="btn">Add to Card</a>
            </div>
         </div>
         
         <div class="shop-container" id="shop-container3" style="display:none;">
            <div class="box">
               <div class="box-img">
                  <img src="img/caramelmac.png" alt="Caramel Macchiato">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Caramel Macchiato</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=402
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/buzlucaramelmac.png" alt="Buzlu Caramel Macchiato">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Iced Caramel Macchiato</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=401
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/lattemac.png" alt="Latte Macchiato">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Latte Macchiato</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=400
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
         </div>

         <div class="shop-container" id="shop-container4" style="display:none;">
            <div class="box">
               <div class="box-img">
                  <img src="img/buzluwhitemocha.png" alt="Buzlu White Chocolate Mocha">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Iced White Chocolate Mocha</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=200
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/buzlumocha.png" alt="Buzlu Caffè Mocha">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Iced Caffè Mocha</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=203
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/mocha.png" alt="Caffè Mocha">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Caffè Mocha</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=201
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/whitemocha.png" alt="White Chocolate Mocha">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>White Chocolate Mocha</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=202
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
         </div>

         <div class="shop-container" id="shop-container5" style="display:none;">
            <div class="box">
               <div class="box-img">
                  <img src="img/buzlucap.png" alt="Iced Cappuccino">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Iced Cappuccino</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=300
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/cap.png" alt="Cappuccino">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Cappuccino</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=301
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
         </div>

         <div class="shop-container" id="shop-container6" style="display:none;">
            <div class="box">
               <div class="box-img">
                  <img src="img/espermac.png" alt="Espresso Macchiato">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Espresso Macchiato</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=101
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span>
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/esperconpanna.png" alt="Espresso Con Panna">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Espresso Con Panna</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=100
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/esper.png" alt="Espresso">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Espresso</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=102
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
         </div>

         <div class="shop-container" id="shop-container7" style="display:none;">
            <div class="box">
               <div class="box-img">
                  <img src="img/misto.png" alt="Caffè Misto">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Caffè Misto</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=701
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/filtrekahve.png" alt="Filter coffee">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
               </div>
               <h2>Filter Coffee</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=703
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/coldbrew.png" alt="Cold Brew">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Cold Brew</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=700
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/coldbrewlatte.png" alt="Cold Brew Latte">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Cold Brew Latte</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=702
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
         </div>

         <div class="shop-container" id="shop-container8" style="display:none;">
            <div class="box">
               <div class="box-img">
                  <img src="img/coollime.png" alt="Cool Lime">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
               </div>
               <h2>Cool Lime</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=2000
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/berry.png" alt="Berry Hibiscus">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Berry Hibiscus</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=2001
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/orange.png" alt="Orange Mango">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Orange Mango</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=2002
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
         </div>

         <div class="shop-container" id="shop-container9" style="display:none;">
            <div class="box">
               <div class="box-img">
                  <img src="img/chofra.png" alt="Chocolate Cream Frappuccino">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
               </div>
               <h2>Chocolate Cream Frappuccino</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=807
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/cilekfra.png" alt="Strawberries & Cream Frappuccino">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Strawberries & Cream Frappuccino</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=808
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/chaifra.png" alt="Chai Cream Frappuccino">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Chai Cream Frappuccino</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=809
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/caramelcreamfra.png" alt="Caramel Cream Frappuccino">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Caramel Cream Frappuccino®</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=810
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/javachipfra.png" alt="Java Chip Chocolate Cream Frappuccino">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
               </div>
               <h2>Java Chip Chocolate Cream Frappuccino</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=811
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/vanillafra.png" alt="Vanilla Cream Frappuccino">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Vanilla Cream Frappuccino</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=806
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/whitemochafra.png" alt="White Chocolate Mocha Frappuccino">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>White Chocolate Mocha Frappuccino</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=805
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span><br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/mocjafra.png" alt="Mocha Frappuccino">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2> Mocha Frappuccino</h2> <br>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=803
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span><br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/coffeefra.png" alt="Coffee Frappuccino">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Coffee Frappuccino</h2> <br>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=802
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span><br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/caramelfra.png" alt="Caramel Frappuccino">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Caramel Frappuccino</h2> <br>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=801
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span><br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/javachipfra.png" alt=" Java Chip Frappuccino">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2> Java Chip Frappuccino</h2> <br>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=804
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/espfra.png" alt=" Espresso Frappuccino®">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2> Espresso Frappuccino</h2> <br>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=800
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
         </div>

         <div class="shop-container" id="shop-container10" style="display:none;">
            <div class="box">
               <div class="box-img">
                  <img src="img/coldbrew.png" alt="Cold Brew Float">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Cold Brew Float</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=900
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span> <br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/affogato.png" alt="Affogato">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Affogato</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=901
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span><br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
         </div>

         <div class="shop-container" id="shop-container11" style="display:none;">
            <div class="box">
               <div class="box-img">
                  <img src="img/chaitea.png" alt="Chai Tea Latte">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Chai Tea Latte</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=1000
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span><br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
            <div class="box">
               <div class="box-img">
                  <img src="img/buzluchaitea.png" alt="Buzlu Chai Tea Latte">
               </div>
               <div class="stars">
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star"></i>
                  <i class="bx bxs-star-half"></i>
               </div>
               <h2>Iced Chai Tea Latte</h2>
               <span>  <?php 
                $sql="SELECT kahve_boyut.fiyat FROM kahveler, kahve_boyut WHERE kahveler.kahve_id=1001
                AND kahveler.kahve_id=kahve_boyut.kahve_id AND kahve_boyut.boyut_id=1 ";
                $fire=mysqli_query($con,$sql);
                while($result = mysqli_fetch_assoc($fire)) { 
                echo  "$" . $result['fiyat'] ;
                }
                ?> </span><br> <br> 
               <a href="#" class="btn">Add to Card</a>
            </div>
         </div>

      </main>
      
   <footer id="about" class="about">
        
     <img src="img/aboutkahve2.jpg" alt="aboutimages"> 
      <div class="aboutinfo">
         <h1> About Us</h1>
         <p>It would not be wrong to say that Starbucks purchases and roasts the highest quality coffee beans. This is the foundation of what we do, but it's not our whole story. <br> <br>
         <span class="farkli">Our guests choose Starbucks because they know they can count on friendly service, a warm atmosphere, and a cup of expertly roasted and seasoned coffee every time.</span> </p>
      </div>
   </footer>
   <section class="contact" id="contact">
      <div class="social">
         <a href="https://www.facebook.com/StarbucksTurkiye" target="_blank"><i class='bx bxl-facebook-circle'></i></a>
         <a href="https://twitter.com/Starbucks" target="_blank"><i class='bx bxl-twitter' ></i></a>
         <a href="https://www.instagram.com/starbucks/" target="_blank"><i class='bx bxl-instagram-alt' ></i></a>
         <a href="https://www.youtube.com/@starbucks"target="_blank"><i class='bx bxl-youtube' ></i></a>
         
      </div> 
   </section>

<script src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script>
        $(function(){
            $('#tikla1').click(function(e){
                $('.shop-container').hide();
                $('#shop-container1').show();

            });
            $('#tikla1').dblclick(function(e){
                $('#shop-container1').hide();
            });
        })
    </script>

    <script>
        $(function(){
            $('#tikla2').click(function(e){
                $('.shop-container').hide();
                $('#shop-container2').show();
            });
            $('#tikla2').dblclick(function(e){
                $('#shop-container2').hide();
            });
        })
    </script>

    <script>
        $(function(){
            $('#tikla3').click(function(e){
                $('.shop-container').hide();
                $('#shop-container3').show();
            });
            $('#tikla3').dblclick(function(e){
                $('#shop-container3').hide();
            });
        })
    </script>

    <script>
        $(function(){
            $('#tikla4').click(function(e){
                $('.shop-container').hide();
                $('#shop-container4').show();
            });
            $('#tikla4').dblclick(function(e){
                $('#shop-container4').hide();
            });
        })
    </script>

    <script>
        $(function(){
            $('#tikla5').click(function(e){
                $('.shop-container').hide();
                $('#shop-container5').show();
            });
            $('#tikla5').dblclick(function(e){
                $('#shop-container5').hide();
            });
        })
    </script>

    <script>
        $(function(){
            $('#tikla6').click(function(e){
                $('.shop-container').hide();
                $('#shop-container6').show();
            });
            $('#tikla6').dblclick(function(e){
                $('#shop-container6').hide();
            });
        })
    </script>

    <script>
        $(function(){
            $('#tikla7').click(function(e){
                $('.shop-container').hide();
                $('#shop-container7').show();
            });
            $('#tikla7').dblclick(function(e){
                $('#shop-container7').hide();
            });
        })
    </script>

    <script>
        $(function(){
            $('#tikla8').click(function(e){
                $('.shop-container').hide();
                $('#shop-container8').show();
            });
            $('#tikla8').dblclick(function(e){
                $('#shop-container8').hide();
            });
        })
    </script>

    <script>
        $(function(){
            $('#tikla9').click(function(e){
                $('.shop-container').hide();
                $('#shop-container9').show();
            });
            $('#tikla9').dblclick(function(e){
                $('#shop-container9').hide();
            });
        })
    </script>

    <script>
        $(function(){
            $('#tikla10').click(function(e){
                $('.shop-container').hide();
                $('#shop-container10').show();
            });
            $('#tikla10').dblclick(function(e){
                $('#shop-container10').hide();
            });
        })
    </script>

    <script>
        $(function(){
            $('#tikla11').click(function(e){
                $('.shop-container').hide();
                $('#shop-container11').show();
            });

            $('#tikla11').dblclick(function(e){
                $('#shop-container11').hide();
            });
        })
    </script>  

   </body>
</html>
