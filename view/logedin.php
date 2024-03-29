<?php
session_start();
require_once 'controller/user/read.php';
$name = isset($_SESSION['data']) ? $_SESSION['data'] : null;


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&display=swap"
    rel="stylesheet">
  <link rel="icon" href="/icons/Main Logo.svg">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/styles/main.css">
  <link rel="stylesheet" href="styles/loader.css">
  <link rel="stylesheet" href="styles/new-menu.css">
  <title>Nextbid - Auction Website</title>
</head>

<body>



  <!-- ....................................Here starts navbar........................................ -->

  <section id="header"> 
    <a href="/main"><img class="image" src="/icons/Nextbid.svg" alt=""></a>
    <div class="navbar-links">
      <ul class="navbar">
        <li><a class="active" href="/main">Home</a></li>
        <li><a href="/view/about.html">About</a></li>
        <li><a href="/view/contact.html">Contact</a></li>
        <li><a href="/new item">Add Product</a></li>


      </ul>
    </div>
    <div class="navbar-icons">
      <div class="search">
        <input type="text" class="search__input" placeholder="Search here">
      </div>
      <a href="cart.php"><img src="/icons/shopping.svg" alt=""></a>
      <a href="/"> log out </a>
    </div>
    <div class="navbar-icons">            
        <a href="/show?name=<?php echo $name ; ?>"><img class="user-profile-icon" src="/icons/user-circle.svg" alt=""></a>
        </div>
    

    <div class="toggle-btn">
      <i class="fa-solid fa-bars fa-lg"></i>
    </div>
  
    <div class="dropdown-menu">
      <li><a class="active" href="/main">Home</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="contact.html">Contact</a></li>
      <li><a href="new item">Add Product</a></li>
    </div>
  </section> 

  <!-- ....................................Here starts hero section........................................ -->

  <section id="hero">
    <div class="hero">
      <h4>ONLINE THRIFT SHOPPING WITH MEANING</h4>
      <h1>Bid Smart, Save Big.</h1>
      <h4>EVERY PURCHASE SUPPORTS THE NEXTBID MISSION</h4>
    </div>
  </section>

  <!-- ....................................Here starts Brands Section........................................ -->

  <section class="brands">
    <div class="brands-text">
      <h4>Iconic Brands we work with</h4>
    </div>
    <div class="brands-hide">
      <div class="first-row">
        <img src="/images/louis-vuitton.svg" alt="">
        <img src="/images/christofle.svg" alt="">
        <img src="/images/hermes.svg" alt="">
        <img src="/images/lego.svg" alt="">
        <img src="/images/macallan.svg" alt="">
        <img src="/images/marklin.svg" alt="">
      </div>
      <div class="second-row">
        <img src="/images/nikon.svg" alt="">
        <img src="/images/omega.svg" alt="">
        <img src="/images/pokemon.svg" alt="">
        <img src="/images/porsche.svg" alt="">
        <img src="/images/rolex.svg" alt="">
        <img src="/images/cartier.svg" alt="">
      </div>
    </div>

    <div class="brands-mobile">
      <div class="first-row-brands-mobile">
        <img src="/images/louis-vuitton.svg" alt="">
        <img src="/images/christofle.svg" alt="">
        <img src="/images/hermes.svg" alt="">
        <img src="/images/lego.svg" alt="">
        <img src="/images/macallan.svg" alt="">
        <img src="/images/marklin.svg" alt="">
        <img src="/images/nikon.svg" alt="">
        <img src="/images/omega.svg" alt="">
        <img src="/images/pokemon.svg" alt="">
        <img src="/images/porsche.svg" alt="">
        <img src="/images/rolex.svg" alt="">
        <img src="/images/cartier.svg" alt="">
      </div>
    </div>
  </section>

  <!-- ....................................Here starts Current Goods........................................ -->

  <div class="current-goods">
    <h2>Featured Products</h2>
    <p>Find your next piece of the action</p>
  </div>

  <!-- ....................................Here starts Carousel Menu........................................ -->

  <section class="card-content-1">
    <div class="wrapper">
      <div class="wrapper-choice first-choice">
        <a href="#">
          <h4>Art</h4>
        </a>
      </div>
      <div class="wrapper-choice">
        <a href="#">
          <h4>Interiors</h4>
        </a>
      </div>
      <div class="wrapper-choice">
        <a href="#">
          <h4>Jewellery</h4>
        </a>
      </div>
      <div class="wrapper-choice">
        <a href="#">
          <h4>Watches</h4>
        </a>
      </div>
      <div class="wrapper-choice">
        <a href="#">
          <h4>Fashion</h4>
        </a>
      </div>
      <div class="wrapper-choice">
        <a href="#">
          <h4>Coins & Stamps</h4>
        </a>
      </div>
      <div class="wrapper-choice">
        <a href="#">
          <h4>Books & Comics</h4>
        </a>
      </div>
      <div class="wrapper-choice">
        <a href="#">
          <h4>Cars & Motorbikes</h4>
        </a>
      </div>
      <div class="wrapper-choice">
        <a href="#">
          <h4>Interiors & Decorations</h4>
        </a>
      </div>
      <div class="wrapper-choice">
        <a href="#">
          <h4>Sports</h4>
        </a>
      </div>
    </div>
  </section>
  <!-- ....................................Here starts products section........................................ -->
  <div class="search__results"></div>

  <?php 
            foreach($data['data'] as $row){
            ?>

  <section class="card-content">
    <div class="wrapper cards">
      <!-- ............................................................................ -->
      <div class="card auction-card">
      
        <div class="auction-card-img">
          <a href="/show item?item_name=<?php echo $row['item_name']?>"><img src="/images/<?php echo $row['item_photo']?>" alt="Product Image" width="300" height="300" style="background-color: #d4f8f4; "></a>
        </div>
        <div class="card-details">
          <div class="like-icon-num">
            <a class="like-button">
              <i class="fa-regular fa-heart fa-lg like1-icon" style="color: #000000;"></i>
              <i class="fa-solid fa-heart fa-lg" style="color: #f92a2a;"></i>
            </a>
            <span class="like-count">0</span>
          </div>
          <h3 class="card-title"><?php echo $row['item_name'] ?></h3>
          <div class="current-price-p">
            <div class="stroke"></div>
            <p class="card-text card-text-2">Your bid: <span class="current-price current-bid">$0</span></p>
            <p class="card-text">Last bid: <span class="current-price last-bid">$<?php echo $row['item_price'] ?></span></p>
          </div>
          <p class="card-text-last card-text-1">Ends in: <span class="closing-time">2023-04-11T08:00:00Z</span></p>
          <div class="card-bid">
            <input type="number" class="bid-input" placeholder="Offer a price">
            <button onclick="bid(this.closest('.auction-card'))">Bid now</button>
          </div>
          <p class="card-text-last card-text">Ends in:<span id="timer" class="countdown-timer"></span></p>
        </div>
      </div>
    </div>
  </section>
<?php } 
?>

  <!-- ....................................Here starts intro section........................................ -->
  <section class="intro">
    <div class="intro-info">
      <h2>EVERYONE DESERVES THE OPPORTUNITY TO THRIVE</h2>
      <h4>Every purchase powers the Nextbid mission</h4>
    </div>
  </section>


  <!-- ....................................Here starts footer........................................ -->


  <footer class="footer">
    <div class="container-1">
      <div class="row">
        <div class="footer-col">
          <h4>company</h4>
          <ul class="footer-ul">
            <li><a href="#">about us</a></li>
            <li><a href="#">new items</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate program</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>get help</h4>
          <ul class="footer-ul">
            <li><a href="#">FAQ</a></li>
            <li><a href="#">shipping</a></li>
            <li><a href="#">returns</a></li>
            <li><a href="#">order status</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>online shop</h4>
          <ul class="footer-ul">
            <li><a href="#">watch</a></li>
            <li><a href="#">bag</a></li>
            <li><a href="#">shoes</a></li>
            <li><a href="#">dress</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <div class="last-div">
    <p>&copy; 2023 NextBid - Auction. All rights reserved.</p>
  </div>

  <!--*************************************Here starts top-to button***************************************-->

  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <img src="/icons/to-top-button.svg" alt="Back to Top">
  </button>

  <!--*************************************Here starts js links***************************************-->

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="/js/script.js"></script>
  <script src="/js/bid.js"></script>
  <script src="/js/scroll.js"></script>
  <script src="/js/top-to-scroll.js"></script>
  <script src="/js/like-counter.js"></script>
  <script src="/js/toggle-btn.js"></script>
  <script src="js/search-filter.js"></script>

</body>

</html>