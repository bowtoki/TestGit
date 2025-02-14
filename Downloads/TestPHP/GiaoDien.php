<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewelry Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header-left">
    <button class="menu-btn" onclick="toggleMenu1()"><img src="ac.png"></button>
      <div class="menu-acc" id="menu-acc">
            <a href="#">Log in</a>
            <a href="#">My Account</a>
            <a href="#">My Wishlist</a>
            <a href="#">Find Wishlist</a>
        </div>
    </div>
        <div class="header-right">
            
            <span>
                <img src="cart.png">
                <p>0 items</p>
            </span>
            <a href="#">
                <img src="checkout.png">
                <p>Check out</p>
            </a>
            <div class="search-box">
                <img src="Ss.png">
                <input type="text" placeholder="Search page">
                <button>SEARCH</button>
            </div>
               </div>
                <!-- Nút mở menu -->
               <div class="menu-icon" onclick="toggleMenu()">&#9776;</div>
     
        <div class="logo">
           <h2>APPELBLOM </h2> 
            <p>JEWELRY CO.</p>
        </div>
        <div class="sidebar-menu" id="sidebar-menu">
        <div class="header-right1">
            <div class="search-box">
                <img src="Ss.png">
                <input type="text" placeholder="Search page">
                <button>SEARCH</button>
            </div>
        <nav>
            <ul>
                <li><a href="#">COLLECTION</a></li>
                <li><a href="#">ABOUT US</a>
                <ul class="menucon">
                    <li><a href="">WEDDING & ENGAGEMENT  </a></li>
                    <li><a href="">WEDDING & ENGAGEMENT  </a></li>
                    <li><a href="">WEDDING & ENGAGEMENT  </a></li>
                    <li><a href="">WEDDING & ENGAGEMENT  </a></li>
                    <li><a href="">WEDDING & ENGAGEMENT  </a></li>
                </ul>
                </li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="#">FREE LIFETIME WARRANTY</a></li>
                <li><a href="#">FLEXIBLE</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">PRIVACY POLICY</a></li>
            </ul>
        </nav>
            </div>
    </div>
    
    <section class="slideshow-container">
    <div class="slide fade">
        <img src="img/bai2-51.png" alt="Slide 1">
    </div>
    <div class="slide fade">
        <img src="img/bai2-49.png" alt="Slide 2">
    </div>
    <div class="slide fade">
        <img src="img/bai2-50.png" alt="Slide 3">
    </div>
    <div class="slide fade">
        <img src="img/bai2-52.png" alt="Slide 4">
    </div>
    <div class="slide fade">
        <img src="img/bai2-53.png" alt="Slide 5">
    </div>

    <!-- Nút điều hướng -->
    <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
    <a class="next" onclick="changeSlide(1)">&#10095;</a>
    </section>
    
    <section class="products">
       
        <div class="product">
            <div class="overlay">MORE DETAILS</div>
            <img src="img/bai2-39.png" alt="Ring">
        </div>
        <div class="product">
            <div class="overlay">MORE DETAILS</div>
            <img src="img/bai2-40.png" alt="Ring">
        </div>
         <div class="product">
            <div class="overlay">MORE DETAILS</div>
            <img src="img/bai2-41.png" alt="Ring">
        </div>
        <div class="product">
            <div class="overlay">MORE DETAILS</div>
            <img src="img/bai2-42.png" alt="Ring">
        </div>
        <div class="product">
            <div class="overlay">MORE DETAILS</div>
            <img src="img/bai2-43.png" alt="Ring">
        </div>
        <div class="product">
            <div class="overlay">MORE DETAILS</div>
            <img src="img/bai2-44.png" alt="Ring">
        </div>
    </section>
    <section class="abc">
    <div class="fixed-contact">
    <a href="" title="Hotline">
        <img src="Hotline.png" alt="Hotline">
    </a>
    <a href="https://zalo.me/0123456789" target="_blank" title="Chat Zalo">
        <img src="Zalo.png" alt="Zalo">
    </a>
    <a href="#" title="Tư vấn trực tuyến">
        <img src="chat.png" alt="Tư vấn">
    </a>
</div>

    </section>
    
    <footer>
        <p>Copyright &copy; 2024 Argoworks. Ecommerce Software by Argoworks.</p>
    </footer>
    <script src="slide.js"></script>

</body>
</html>
