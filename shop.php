<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from themewagon.github.io/ultras/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2024 12:12:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <title>Ultras - Clothing Store eCommerce Store HTML Website Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" media="all" href="../../maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
  </head>
  <body>

    <div class="preloader-wrapper">
      <div class="preloader">
      </div>
    </div>

    <div class="search-popup">
      <div class="search-popup-container">

        <form role="search" method="get" class="search-form" action="#">
        <input type="search" id="search-form" class="search-field" placeholder="Type and press enter" value="" name="s"  oninput="search_fun(this.value);" />
          <p id="result"></p>
          <button type="submit" class="search-submit"><a href="#"><i class="icon icon-search"></i></a></button>
        </form>

        <script>
	
  function search_fun(data){
    var http = new XMLHttpRequest();
  
    http.onreadystatechange =function(){
      if(this.readyState === 4 && this.status === 200){
        document.getElementById("result").innerHTML = this.responseText;
      }
    }
  http.open("GET" ,"search.php?data="+ data , true);
  http.send();
  
  
  }
  </script>
  



        <h5 class="cat-list-title">Browse Categories</h5>
        
        <ul class="cat-list">
          <li class="cat-list-item">
            <a href="shop.html" title="Men Jackets">Men Jackets</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Fashion">Fashion</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Casual Wears">Casual Wears</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Women">Women</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Trending">Trending</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Hoodie">Hoodie</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.html" title="Kids">Kids</a>
          </li>
        </ul>
      </div>
    </div>
    <header id="header">
      <div id="header-wrap">
        <nav class="secondary-nav border-bottom">
          <div class="container">
            <div class="row d-flex align-items-center">
              <div class="col-md-4 header-contact">
                <!-- <p>Let's talk! <strong>+57 444 11 00 35</strong>
                </p> -->
              </div>
              <div class="col-md-4 shipping-purchase text-center">
                <!-- <p>Free shipping on a purchase value of $200</p> -->
              </div>
              <div class="col-md-4 col-sm-12 user-items">
                <ul class="d-flex justify-content-end list-unstyled">
                  <!-- <li>
                    <a href="index-2.html">
                      <i class="icon icon-user"></i>
                    </a>
                  </li> -->
                  <li>
                    <a href="cart.php">
                      <i class="icon icon-shopping-cart"></i>
                    </a>
                  </li>
                  <li>
                    <a href="index-2.html">
                      <i class="icon icon-heart"></i>
                    </a>
                  </li>
                  <li class="user-items search-item pe-3">
                    <a href="#" class="search-button">
                      <i class="icon icon-search"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <nav class="primary-nav padding-small">
          <div class="container">
            <div class="row d-flex align-items-center">
              <div class="col-lg-2 col-md-2">
                <div class="main-logo">
                  <a href="index.php">
                    <img src="images/main-logo.png" alt="logo">
                  </a>
                </div>
              </div>
              <div class="col-lg-10 col-md-10">
                <div class="navbar">

                  <div id="main-nav" class="stellarnav d-flex justify-content-end right">
                    <ul class="menu-list">

                      <li class="menu-item has-sub">
                      <li><a href="index.php" class="item-anchor" data-effect="home">Home</a></li>
                        <!-- <ul class="submenu">
                          <li><a href="index-2.html" class="item-anchor">Home</a></li>
                          <li><a href="index-2.html" class="item-anchor">Home v2</a></li>
                        </ul> -->
                      </li>

                      <li><a href="about.php" class="item-anchor" data-effect="About">About</a></li>

                      <li class="menu-item has-sub">
                      <a href="shop.php" class="item-anchor " data-effect="About">Shop</a>
                        <ul class="submenu">
                          <!-- <li><a href="shop.php" class="item-anchor active">Shop</a></li>
                          <li><a href="index-2.php" class="item-anchor">Shop slider</a></li>
                          <li><a href="index-2.php" class="item-anchor">Shop grid</a></li> -->
                          <!-- <li><a href="index-2.php" class="item-anchor">Shop list</a></li>
                          <li><a href="index-2.php" class="item-anchor">Single product</a></li> -->
                          <!-- <li><a href="index-2.php" class="item-anchor">Cart</a></li>
                          <li><a href="index-2.php" class="item-anchor">Wishlist</a></li>
                          <li><a href="index-2.php" class="item-anchor">Checkout</a></li> -->
                        </ul>
                      </li>

                      <!-- <li class="menu-item has-sub">
                        <a href="#" class="item-anchor d-flex align-item-center" data-effect="Pages">Pages<i class="icon icon-chevron-down"></i></a>
                        <ul class="submenu">
                          <li><a href="index.php" class="item-anchor">Coming soon</a></li>
                          <li><a href="index.php" class="item-anchor">Login</a></li>
                          <li><a href="index.php" class="item-anchor">FAQs</a></li>
                          <li><a href="styles.php" class="item-anchor">Styles</a></li>
                          <li><a href="thank-you.php" class="item-anchor">Thankyou</a></li>
                          <li><a href="index-2.php" class="item-anchor">Error page</a></li>
                        </ul>
                      </li> -->

                      <li class="menu-item has-sub">
                      <a href="blog.php" class="item-anchor " data-effect="About">Blog</a>
                        <!-- <ul class="submenu">
                          <li><a href="blog.php" class="item-anchor">Blog</a></li>
                          <li><a href="index.php" class="item-anchor">Blog with sidebar</a></li>
                          <li><a href="index.php" class="item-anchor">Blog masonry</a></li>
                          <li><a href="index.php" class="item-anchor">Single post</a></li>
                        </ul> -->
                      </li>

                      <li><a href="index.php" class="item-anchor" data-effect="Contact">Contact</a></li>

                    </ul>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <section class="site-banner jarallax min-height300 padding-large" style="background: url(images/hero-image.jpg) no-repeat; background-position: top;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="page-title">Shop page</h1>
            <div class="breadcrumbs">
              <span class="item">
                <a href="index.php">Home /</a>
              </span>
              <span class="item">
                <a href ="shop.php">Shop</a></span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <style>
  .shop-now-btn {
  background: linear-gradient(90deg, #ff7e5f, #feb47b);
  color: white;
  font-size: 1.2rem;
  font-weight: bold;
  border: none;
  padding: 12px 25px;
  border-radius: 50px;
  transition: all 0.3s ease;
}

.shop-now-btn:hover {
  background: linear-gradient(90deg, #feb47b, #ff7e5f);
  transform: scale(1.1);
  box-shadow: 0px 10px 20px rgba(255, 126, 95, 0.3);
}

.shop-now-btn:focus {
  outline: none;
  box-shadow: 0px 0px 10px rgba(255, 126, 95, 0.7);
}

</style>

    <div class="shopify-grid padding-large">
      <div class="container">
        <div class="row">

          <section id="selling-products" class="col-md-9 product-store">
            <div class="container">
              <ul class="tabs list-unstyled">
                <li data-tab-target="#all" class="active tab">All</li>
                <li data-tab-target="#shoes" class="tab">Shoes</li>
                <li data-tab-target="#tshirts" class="tab">Tshirts</li>
                <li data-tab-target="#pants" class="tab">Pants</li>
                <li data-tab-target="#hoodie" class="tab">Hoodie</li>
                <li data-tab-target="#outer" class="tab">Outer</li>
                <li data-tab-target="#jackets" class="tab">Jackets</li>
                <li data-tab-target="#accessories" class="tab">Accessories</li>
              </ul>

              <div class="tab-content">
                <div id="all" data-tab-content class="active">
                  <div class="row d-flex flex-wrap">
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products1.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Half sleeve T-shirt</a>
                        </h3>
                        <div class="item-price text-primary">₹400</div>
                      </div>

                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products2.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Stylish Grey T-shirt</a>
                        </h3>
                        <div class="item-price text-primary">₹350</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products3.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Silk White Shirt</a>
                        </h3>
                        <div class="item-price text-primary">₹500</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products4.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Grunge Hoodie</a>
                        </h3>
                        <div class="item-price text-primary">₹3000</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products5.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Full sleeve Jeans jacket</a>
                        </h3>
                        <div class="item-price text-primary">₹400</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products6.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Grey Check Coat</a>
                        </h3>
                        <div class="item-price text-primary">₹6500</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products7.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Long Sleeve T-shirt</a>
                        </h3>
                        <div class="item-price text-primary">₹400</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products8.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Half Sleeve T-shirt</a>
                        </h3>
                        <div class="item-price text-primary">₹350</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products13.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Orange white Nike</a>
                        </h3>
                        <div class="item-price text-primary">₹5500</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products14.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Running Shoe</a>
                        </h3>
                        <div class="item-price text-primary">₹6500</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products15.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Tennis Shoe</a>
                        </h3>
                        <div class="item-price text-primary">₹8000</div>
                      </div>
                       <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products16.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Nike Brand Shoe</a>
                        </h3>
                        <div class="item-price text-primary">₹6500</div>
                      </div>
                       <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                  </div>
                </div>
                <div id="shoes" data-tab-content>
                  <div class="row d-flex flex-wrap">
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products13.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Orange white Nike</a>
                        </h3>
                        <div class="item-price text-primary">₹5500</div>
                      </div>
                       <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products14.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Running Shoe</a>
                        </h3>
                        <div class="item-price text-primary">₹6500</div>
                      </div>
                       <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products15.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Tennis Shoe</a>
                        </h3>
                        <div class="item-price text-primary">₹8000</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products16.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Nike Brand Shoe</a>
                        </h3>
                        <div class="item-price text-primary">₹6500</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                  </div>
                </div>
                <div id="tshirts" data-tab-content>
                  <div class="row d-flex flex-wrap">
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products3.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Silk White Shirt</a>
                        </h3>
                        <div class="item-price text-primary">₹3500</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products8.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">White Half T-shirt</a>
                        </h3>
                        <div class="item-price text-primary">₹300</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products5.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Ghee Half T-shirt</a>
                        </h3>
                        <div class="item-price text-primary">₹400</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products7.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Long Sleeve T-shirt</a>
                        </h3>
                        <div class="item-price text-primary">₹400</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                  </div>
                </div>
                <div id="pants" data-tab-content>
                  <div class="row d-flex flex-wrap">
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products1.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Half sleeve T-shirt</a>
                        </h3>
                        <div class="item-price text-primary">₹400</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products4.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Grunge Hoodie</a>
                        </h3>
                        <div class="item-price text-primary">₹3000</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products7.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Long Sleeve T-shirt</a>
                        </h3>
                        <div class="item-price text-primary">₹400</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products2.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Stylish Grey Pant</a>
                        </h3>
                        <div class="item-price text-primary">₹450</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                  </div>
                </div>
                <div id="hoodie" data-tab-content>
                  <div class="row d-flex flex-wrap">
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products17.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">White Hoodie</a>
                        </h3>
                        <div class="item-price text-primary">₹4000</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products4.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Navy Blue Hoodie</a>
                        </h3>
                        <div class="item-price text-primary">₹4500</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products18.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Dark Green Hoodie</a>
                        </h3>
                        <div class="item-price text-primary">₹3500</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                  </div>
                </div>
                <div id="outer" data-tab-content>
                  <div class="row d-flex flex-wrap">
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products3.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Silk White Shirt</a>
                        </h3>
                        <div class="item-price text-primary">₹350</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products4.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Grunge Hoodie</a>
                        </h3>
                        <div class="item-price text-primary">₹3000</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products6.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Grey Check Coat</a>
                        </h3>
                        <div class="item-price text-primary">₹6500</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products7.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Long Sleeve T-shirt</a>
                        </h3>
                        <div class="item-price text-primary">₹400</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                  </div>
                </div>
                <div id="jackets" data-tab-content>
                  <div class="row d-flex flex-wrap">
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products5.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Full Sleeve Jeans Jacket</a>
                        </h3>
                        <div class="item-price text-primary">₹450</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products2.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Stylish Grey Coat</a>
                        </h3>
                        <div class="item-price text-primary">₹3500</div>
                        <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                      </div>
                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products6.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Grey Check Coat</a>
                        </h3>
                        <div class="item-price text-primary">₹3500</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                  </div>
                </div>
                <div id="accessories" data-tab-content>
                  <div class="row d-flex flex-wrap">
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products19.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Stylish Women Bag</a>
                        </h3>
                        <div class="item-price text-primary">₹3500</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                    <div class="product-item col-lg-4 col-md-6 col-sm-6">
                      <div class="image-holder">
                        <img src="images/selling-products20.jpg" alt="Books" class="product-image">
                      </div>
                      <div class="cart-concern">
                        <div class="cart-button d-flex justify-content-between align-items-center">
                          <button type="button" class="btn-wrap cart-link d-flex align-items-center">add to cart <i class="icon icon-arrow-io"></i>
                          </button>
                          <button type="button" class="view-btn tooltip
                              d-flex">
                            <i class="icon icon-screen-full"></i>
                            <span class="tooltip-text">Quick view</span>
                          </button>
                          <button type="button" class="wishlist-btn">
                            <i class="icon icon-heart"></i>
                          </button>
                        </div>
                      </div>
                      <div class="product-detail">
                        <h3 class="product-title">
                          <a href="index-2.html">Stylish Gadgets</a>
                        </h3>
                        <div class="item-price text-primary">₹3000</div>
                      </div>
                      <div class="container text-center mt-5">
                  <a href =""><button class="btn shop-now-btn">Shop Now</button></a>
                </div>

                    </div>
                  </div>
                </div>
              </div>
              
              <nav class="navigation paging-navigation text-center padding-medium" role="navigation">
                <div class="pagination loop-pagination d-flex justify-content-center">
                  <a href="#" class="pagination-arrow d-flex align-items-center">
                    <i class="icon icon-arrow-left"></i>
                  </a>
                  <span aria-current="page" class="page-numbers current">1</span>
                  <a class="page-numbers" href="shop2.php">2</a>
                  <a class="page-numbers" href="shop3.php">3</a>
                  <a href="#" class="pagination-arrow d-flex align-items-center">
                    <i class="icon icon-arrow-right"></i>
                  </a>
                </div>
              </nav>
            </div>
          </section>

          <aside class="col-md-3">
            <div class="sidebar">
              <div class="widgets widget-menu">
                <div class="widget-search-bar">
                  <form role="search" method="get" class="d-flex">
                    <input class="search-field" placeholder="Search" type="text">
                    <button class="btn btn-dark"><i class="icon icon-search"></i></button>
                  </form>
                  
                </div> 
              </div>
              <div class="widgets widget-product-tags">
                <h5 class="widget-title">Tags</h5>
                <ul class="product-tags sidebar-list list-unstyled">
                  <li class="tags-item">
                    <a href="#">White</a>
                  </li>
                  <li class="tags-item">
                    <a href="#">Cheap</a>
                  </li>
                  <li class="tags-item">
                    <a href="#">Branded</a>
                  </li>
                  <li class="tags-item">
                    <a href="#">Modern</a>
                  </li>
                  <li class="tags-item">
                    <a href="#">Simple</a>
                  </li>
                </ul>
              </div>
              <div class="widgets widget-product-brands">
                <h5 class="widget-title">Brands</h5>
                <ul class="product-tags sidebar-list list-unstyled">
                  <li class="tags-item">
                    <a href="#">Nike</a>
                  </li>
                  <li class="tags-item">
                    <a href="#">Adidas</a>
                  </li>
                  <li class="tags-item">
                    <a href="#">Puma</a>
                  </li>
                  <li class="tags-item">
                    <a href="#">Spike</a>
                  </li>
                </ul>
              </div>
              <div class="widgets widget-price-filter">
                <h5 class="widget-title">Filter By Price</h5>
                <ul class="product-tags sidebar-list list-unstyled">
                  <li class="tags-item">
                    <a href="#">Less than $10</a>
                  </li>
                  <li class="tags-item">
                    <a href="#">$10- $20</a>
                  </li>
                  <li class="tags-item">
                    <a href="#">$20- $30</a>
                  </li>
                  <li class="tags-item">
                    <a href="#">$30- $40</a>
                  </li>
                  <li class="tags-item">
                    <a href="#">$40- $50</a>
                  </li>
                </ul>
              </div>
            </div>
          </aside>
          
        </div>        
      </div>      
    </div>

    <hr>
    <section id="latest-blog" class="padding-large">
      <div class="container">
        <div class="section-header d-flex flex-wrap align-items-center justify-content-between">
          <h2 class="section-title">our Journal</h2>
          <div class="btn-wrap align-right">
            <a href="blog.html" class="d-flex align-items-center">Read All Articles <i class="icon icon icon-arrow-io"></i>
            </a>
          </div>
        </div>
        <div class="row d-flex flex-wrap">
          <article class="col-md-4 post-item">
            <div class="image-holder zoom-effect">
              <a href="index-2.html">
                <img src="images/post-img1.jpg" alt="post" class="post-image">
              </a>
            </div>
            <div class="post-content d-flex">
              <div class="meta-date">
                <div class="meta-day text-primary">22</div>
                <div class="meta-month">Aug-2021</div>
              </div>
              <div class="post-header">
                <h3 class="post-title">
                  <a href="index-2.html">top 10 casual look ideas to dress up your kids</a>
                </h3>
                <a href="blog.html" class="blog-categories">Fashion</a>
              </div>
            </div>
          </article>
          <article class="col-md-4 post-item">
            <div class="image-holder zoom-effect">
              <a href="index-2.html">
                <img src="images/post-img2.jpg" alt="post" class="post-image">
              </a>
            </div>
            <div class="post-content d-flex">
              <div class="meta-date">
                <div class="meta-day text-primary">25</div>
                <div class="meta-month">Aug-2021</div>
              </div>
              <div class="post-header">
                <h3 class="post-title">
                  <a href="index-2.html">Latest trends of wearing street wears supremely</a>
                </h3>
                <a href="blog.html" class="blog-categories">Trending</a>
              </div>
            </div>
          </article>
          <article class="col-md-4 post-item">
            <div class="image-holder zoom-effect">
              <a href="index-2.html">
                <img src="images/post-img3.jpg" alt="post" class="post-image">
              </a>
            </div>
            <div class="post-content d-flex">
              <div class="meta-date">
                <div class="meta-day text-primary">28</div>
                <div class="meta-month">Aug-2021</div>
              </div>
              <div class="post-header">
                <h3 class="post-title">
                  <a href="index-2.html">types of comfortable clothes ideas for women</a>
                </h3>
                <a href="blog.html" class="blog-categories">Inspiration</a>
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section id="shipping-information">
      <hr>
      <div class="container">
        <div class="row d-flex flex-wrap align-items-center justify-content-between">
          <div class="col-md-3 col-sm-6">
            <div class="icon-box">
              <i class="icon icon-truck"></i>
              <h4 class="block-title">
                <strong>Free shipping</strong> Over $200
              </h4>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="icon-box">
              <i class="icon icon-return"></i>
              <h4 class="block-title">
                <strong>Money back</strong> Return within 7 days
              </h4>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="icon-box">
              <i class="icon icon-tags1"></i>
              <h4 class="block-title">
                <strong>Buy 4 get 5th</strong> 50% off
              </h4>
            </div>
          </div>
          <div class="col-md-3 col-sm-6">
            <div class="icon-box">
              <i class="icon icon-help_outline"></i>
              <h4 class="block-title">
                <strong>Any questions?</strong> experts are ready
              </h4>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </section>

    
    <footer id="footer">
      <div class="container">
        <div class="footer-menu-list">
          <div class="row d-flex flex-wrap justify-content-between">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Ultras</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <a href="about.php">About us</a>
                  </li>
                  <li class="menu-item">
                    <a href="index.php">Home </a>
                  </li>
                  <li class="menu-item">
                    <a href="shop.php">Shop</a>
                  </li>
                  <li class="menu-item">
                    <a href="blog.php">Blog</a>
                  </li>
                  <!-- <li class="menu-item">
                    <a href="#">Affiliate Programme</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Ultras Press</a>
                  </li> -->
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Customer Service</h5>
                <ul class="menu-list list-unstyled">
                  <li class="menu-item">
                    <a href="index.php">FAQ</a>
                  </li>
                  <li class="menu-item">
                    <a href="contact.php">Contact</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Privacy Policy</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Returns & Refunds</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Cookie Guidelines</a>
                  </li>
                  <li class="menu-item">
                    <a href="#">Delivery Information</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Contact Us</h5>
                <p>Do you have any questions or suggestions? <a href="#" class="email">ultras@gmail.com</a>
                </p>
                <p>Do you need assistance? Give us a call. <br>
                  <strong>+57 444 11 00 35</strong>
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="footer-menu">
                <h5 class="widget-title">Forever 2018</h5>
                <p>Discover a world of convenience and style at your fingertips. From trendy fashion to everyday essentials, our eCommerce platform offers a seamless shopping experience with curated collections, unbeatable prices, and fast delivery.</p>
                <div class="social-links">
                  <ul class="d-flex list-unstyled">
                    <li>
                      <a href="#">
                        <i class="icon icon-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                      <i class="icon icon-instagram"></i>
                      </a>
                    </li>
                    <!-- <li>
                      <a href="#">
                      <i class="icon icon-whatsapp"></i>
                      </a>
                    </li> -->
                    <li>
                      <a href="#">
                        <i class="icon icon-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
    </footer>

    <div id="footer-bottom">
      <div class="container">
        <div class="d-flex align-items-center flex-wrap justify-content-between">
          <div class="copyright">
            <p>Designed By Rashmi Kashyap
            </p>
          </div>
          <div class="payment-method">
            <p>Payment options :</p>
            <div class="card-wrap">
              <img src="images/visa-icon.jpg" alt="visa">
              <img src="images/mastercard.png" alt="mastercard">
              <img src="images/american-express.jpg" alt="american-express">
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
  </body>

<!-- Mirrored from themewagon.github.io/ultras/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Nov 2024 12:12:19 GMT -->
</html>