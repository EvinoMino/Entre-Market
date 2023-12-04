<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PawnShop</title>
</head>
<style>
        .slideshow-container {
            position: relative;
            margin: auto;
        }

        .mySlides {
            display: none;
        }

        .slideshow-container img {
            padding-top:20px;
            position: center;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
            width:77%;
            cursor: pointer;
        }

        /* /* Add animation for the slideshow */
        .fade {
            animation: fade 50s ease-in-out infinite;
        }

        @keyframes fade {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        } */
    </style>
<link rel="stylesheet" href="/css/homePage.css">
<body>
    
    <!-- HEADER -->
    <header>
    <nav>
        <ul class="nav_link">
            <li><a class="navbar" href="">home</a></li>
            <li><a class="navbar" href="/room">room</a></li>
            <li><a class="navbar" href="https://linktr.ee/pawnshop.binus">contact</a></li>
            <li><a class="navbar" href="/list">list</a></li>
            <li><a class="navbar" href="https://cdn.discordapp.com/attachments/1151357866184286274/1177448258205921321/shared_QR.png?ex=65728b24&is=65601624&hm=5e446f3ed0fd94bb36d23e18e08084dfbf70b6c28fae90f0ebf763c1498688c5&">bonus</a></li>
        </ul>
    </nav>
    <!-- <a class="cta" href="loginPage.html"><button class="user">User</button></a> -->
    </header>

    <div class="slideshow-container">
    <div class="mySlides fade">
        <img src="/images/2.png" alt="Slide 1">
    </div>
    <div class="mySlides fade">
        <img src="/images/2.png" alt="Slide 1">
    </div>
    <div class="mySlides fade">
        <img src="/images/4.png" alt="Slide 2">
    </div>
    <div class="mySlides fade">
        <img src="/images/4.png" alt="Slide 2">
    </div>
    <div class="mySlides fade">
        <img src="/images/Current_Bid_5.png" alt="Slide 2">
    </div>
    <div class="mySlides fade">
        <img src="/images/Current_Bid_5.png" alt="Slide 2">
    </div>
    <!-- <div class="mySlides fade">
        <img src="/images/promo1.png" alt="Slide 3">
    </div> -->
</div>

    <section class="product"> 
    <h2 class="product-category"><a href="/room">See More Shoes</a></h2>
    <button class="pre-btn"><img src="/images/arrow.png" alt=""></button>
    <button class="nxt-btn"><img src="/images/arrow.png" alt=""></button>
    <div class="product-container">
        <div class="product-card">
            <div class="product-image">
                <img src="/images/photo1.jpg" class="product-thumb" alt="">
                <button class="card-btn" data-redirect-url="/room/room1">BID</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Beige Loved</h2>
                <div class="timer" data-duration="180">
                    <div class="timer-display">00:00:00</div>
                  </div>
                <span class="price">Rp600.000 ⏏</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="/images/photob.jpg" class="product-thumb" alt="">
                <button class="card-btn" data-redirect-url="/room/room2">BID</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">Balenciaga Pro</h2>
                <div class="timer" data-duration="1200">
                    <div class="timer-display">00:00:00</div>
                  </div>
                <span class="price">Rp200.000 ⏏</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="/images/card3.jpg" class="product-thumb" alt="">
                <button class="card-btn">BID</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">WildVenture GTX</h2>
                <div class="timer" data-duration="1320">
                    <div class="timer-display">00:00:00</div>
                  </div>
                <span class="price">Rp250.000 ⏏</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">                
                <img src="/images/card4.jpg" class="product-thumb" alt="">
                <button class="card-btn">BID</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">TrekForce Elite</h2>
                <div class="timer" data-duration="12110">
                    <div class="timer-display">00:00:00</div>
                  </div>
                <span class="price">Rp425.000 ⏏</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">               
                <img src="/images/card5.jpg" class="product-thumb" alt="">
                <button class="card-btn">BID</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">AlpineX GTX</h2>
                <div class="timer" data-duration="12320">
                    <div class="timer-display">00:00:00</div>
                  </div>
                <span class="price">Rp350.000 ⏏</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">                
                <img src="/images/card6.jpg" class="product-thumb" alt="">
                <button class="card-btn">BID</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">TerrainTrek Pro</h2>
                <div class="timer" data-duration="500">
                    <div class="timer-display">00:00:00</div>
                  </div>
                <span class="price">Rp1.529.000 ⏏</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                
                <img src="/images/card7.jpg" class="product-thumb" alt="">
                <button class="card-btn">BID</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">PeakVenture</h2>
                <div class="timer" data-duration="11220">
                    <div class="timer-display">00:00:00</div>
                  </div>
                <span class="price">Rp2.999.000 ⏏</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                
                <img src="/images/card8.jpg" class="product-thumb" alt="">
                <button class="card-btn">BID</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">HorizonHike XT</h2>
                <div class="timer" data-duration="1230">
                    <div class="timer-display">00:00:00</div>
                  </div>
                <span class="price">Rp390.599 ⏏</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                
                <img src="/images/card9.jpg" class="product-thumb" alt="">
                <button class="card-btn">BID</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">EverTrail GTX</h2>
                <div class="timer" data-duration="7220">
                    <div class="timer-display">00:00:00</div>
                  </div>
                <span class="price">Rp1.200.000 ⏏</span>
            </div>
        </div>
        <div class="product-card">
            <div class="product-image">
                <img src="/images/card10.jpg" class="product-thumb" alt="">
                <button class="card-btn">BID</button>
            </div>
            <div class="product-info">
                <h2 class="product-brand">HorizonHike XT</h2>
                <div class="timer" data-duration="1320">
                    <div class="timer-display">00:00:00</div>
                  </div>
                <span class="price">Rp410.000 ⏏</span>
            </div>
        </div>
    </div>
</section>
<script src="/js/script.js"></script>
<script>
    // JavaScript to control the slideshow
    var slideIndex = 0;

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change slide every 2 seconds
    }

    showSlides(); // Initial call to start the slideshow
</script>
</body>

</html>