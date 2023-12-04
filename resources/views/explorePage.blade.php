<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PawnShop</title>
</head>
<link rel="stylesheet" href="/css/styles.css">
<body>
    <header>
    <nav>
        <ul class="nav_link">
            <li><a class="navbar" href="/">home</a></li>
            <li><a class="navbar" href="">room</a></li>
            <li><a class="navbar" href="https://linktr.ee/pawnshop.binus">contact</a></li>
            <li><a class="navbar" href="/list">list</a></li>
            <li><a class="navbar" href="">bonus</a></li>
        </ul>
    </nav>
    <!-- <a class="cta" href="loginPage.html"><button class="user">User</button></a> -->
    </header>


    <div class="search-bar">
    <!-- <h1>Auctionable Items</h1> -->
        <form action="" class="bar">
            <input type="text" placeholder="Search Items. . ." name="q">
        </form>

        <div class="nav_catalog">
            <ul class="catalog">
                <li><a href="#">Sport</a></li>
                <li><a href="#">Casual</a></li>
                <li><a href="#">Hiking</a></li>
                <li><a href="#">Formal</a></li>
            </ul>
        </div>
        <div class="catalog_product">

        </div>
        <div class="product-card">
            <div class="product-image">
                <div class="timer" data-duration="1800">
                    <div class="timer-display">00:00:00</div>
                  </div>
              <img src="images/photo1.jpg" alt="Product Image" width="100%" height="auto">
            </div>
            <div class="product-title">Beige Loved</div>
            <div class="product-price">RP 600.000</div>
            <button class="bid-button" data-redirect-url="/room/room1">Bid</button>
          </div>

          <div class="product-card1">
            <div class="product-image">
                <div class="timer" data-duration="1120">
                    <div class="timer-display">00:00:00</div>
                  </div>
              <img src="images/photob.jpg" alt="Product Image" width="100%" height="auto">
            </div>
            <div class="product-title">Balenciaga Pro</div>
            <div class="product-price">RP 200.000</div>
            <button class="bid-button" data-redirect-url="/room/room2">Bid</button>
          </div>
          
          <div class="product-card2">
            <div class="product-image">
                <div class="timer" data-duration="3000">
                    <div class="timer-display">00:00:00</div>
                  </div>
              <img src="images/card3.jpg" alt="Product Image" width="100%" height="auto">
            </div>
            <div class="product-title">WildVenture GTX</div>
            <div class="product-price">RP 250.000</div>
            <button class="bid-button">Bid</button>
          </div>

          <div class="product-card3">
            <div class="product-image">
                <div class="timer" data-duration="32000">
                    <div class="timer-display">00:00:00</div>
                  </div>
              <img src="images/card4.jpg" alt="Product Image" width="100%" height="auto">
            </div>
            <div class="product-title">TrekForce Elite</div>
            <div class="product-price">RP 425.000</div>
            <button class="bid-button">Bid</button>
          </div>
    </div>
 

    <script src="/js/script.js"></script>
</html>