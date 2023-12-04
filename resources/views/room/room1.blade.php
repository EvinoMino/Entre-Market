<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PawnShop</title>
</head>
<link rel="stylesheet" href="/css/room/room.css">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>   -->
<style>
    #leaderboard {
      margin-top: 20px;
    }
    .slideshow-container {
    max-width: 600px;
    position: relative;
    margin: auto;
    justify-content: center;
}

.mySlides {
    display: none;
    justify-content: center;
}

img {
  justify-content: center;
    width: 400px;
    height: 25%;
}

.prev, .next {
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    font-size: 20px;
    cursor: pointer;
    background-color:rgba(255, 255, 255, 0.1);
}

.prev {
    left: 0;
}

.next {
    right: 0;
}
  </style>
<body>
    <header>
    <nav>
        <ul class="nav_link">
            <li><a class="navbar" href="/">home</a></li>
            <li><a class="navbar" href="/room">room</a></li>
            <li><a class="navbar" href="https://linktr.ee/pawnshop.binus">contact</a></li>
            <li><a class="navbar" href="">list</a></li>
            <li><a class="navbar" href="">bonus</a></li>
        </ul>
    </nav>
    <!-- <a class="cta" href="loginPage.html"><button class="user">User</button></a> -->
    </header>
    <div class="wallet-balance">
        <img src="/images/wallet.jpg" alt="">
      <p class="">Wallet : <span id="walletBalance">Rp 500,000</span></p>
      
    </div>
    
    <div class="container">
        <div class="image-container">
          <!-- <img class="promo"src="/images/card1.jpg" alt="Image"> -->
          <div class="slideshow-container">
    <div class="mySlides">
        <img src="/images/photo1.jpg" alt="Slide 1">
    </div>

    <div class="mySlides">
        <img src="/images/photo2.jpg" alt="Slide 2">
    </div>

    <div class="mySlides">
        <img src="/images/photo3.jpg" alt="Slide 3">
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
          <div class="leaderboard">
  <h3>Leaderboard</h3>
  <ul id="leaderboard"></ul>
</div>


        </div>
        <div class="details-container">
          <div id="timer" class="timer">00 minutes 00 seconds left</div>            
          <h2>Beige Loved</h2>
          <p class="price">Current Bid: <span id="currentBid">699.999,00</span></p>
          <p class="start-price">Rp 600.000,00</p>
          <p class="description">Price is set by the Auctioneer</p>
          
          <h3>_______________________________________________</h3>
          <h1>Place a Bid</h1>
          <p id="cooldownTimer" class="cooldown">Biding is ready</p>
          
          <a class="spasing"href="" >|</a>
          <a href="#" onclick="placeBid(5000)" id="bid5000" class="bid-button">
            <span>Rp 5.000</span>
        </a><a class="spasing"href="" >||</a>
        <a href="#" onclick="placeBid(10000)" id="bid10000" class="bid-button">
            <span>Rp 10.000</span><a class="spasing"href="" >||</a>
        </a>
        <a href="#" onclick="placeBid(15000)" id="bid15000" class="bid-button">
            <span>Rp 15.000</span><a class="spasing"href="" >||</a>
        </a>

          
          
          <h3 class="pad">_______________________________________________</h3>
          
          <p class="description">Quality    : Brand New</p>
          <p class="description">Made From  : Italy (2014)</p>
          <p class="description">Size       : 38</p>
          
        </div>
      </div>
      <script src="script.js"></script>
</body>
    <script src="/js/room/room.js"></script>
    <script>
    // JavaScript to control the slideshow
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");

        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }

        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }

        slides[slideIndex - 1].style.display = "block";
    }
</script>
</html>