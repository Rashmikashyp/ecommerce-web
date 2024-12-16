<!DOCTYPE html>
<html lang="en">
  
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
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
   
    <script src="js/modernizr.js"></script>
  </head>
  <style>
        .navbar {
            background-color: #fdd835;
        }

        .product-card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            height: 150px;
            object-fit: cover;
        }

        .price {
            font-weight: bold;
            color: #ff5722;
        }

        .old-price {
            text-decoration: line-through;
            color: gray;
        }

        .btn-primary {
            background-color: #ff5722;
            border: none;
        }

        .btn-primary:hover { background-color: #e64a19;
        }

        .detail-view img {
            max-width: 100%;
            height: auto;
        }
    </style>

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
            <a href="shop.php" title="Men Jackets">Men Jackets</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.php" title="Fashion">Fashion</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.php" title="Casual Wears">Casual Wears</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.php" title="Women">Women</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.php" title="Trending">Trending</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.php" title="Hoodie">Hoodie</a>
          </li>
          <li class="cat-list-item">
            <a href="shop.php" title="Kids">Kids</a>
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
                <!-- <p>Contact me! <strong>+57 444 11 00 35</strong>
                </p>   -->
              </div>
              <div class="col-md-4 shipping-purchase text-center">
                <p></p>
              </div>
              <div class="col-md-4 col-sm-12 user-items">
                <ul class="d-flex justify-content-end list-unstyled">
                  <!-- <li>
                    <a href="user.php">
                      <i class="icon icon-user"></i>
                    </a>
                  </li> -->
                  <li>
                    <a href="cart.php">
                      <i class="icon icon-shopping-cart"></i>
                    </a>
                  </li>
                  <li>
                    <a href="index.php"><i class="icon icon-heart"></i>
                    </a>
                  </li>

                  <!-- <li class="user-items search-item pe-3">
                    <a href="#" class="search-button">
                      <i class="icon icon-search"></i>
                    </a>
                  </li> -->
                </ul>
              </div>
            </div>
          </div>
        </nav>
       
    </header>

    <div class ="container">
    <div class="row">
 <div class="col-sm-6 mt-5">
    <img src="images/product-item1.jpg" alt="Large Lamp"></div>
 <div class="col-sm-6 mt-5">
    <h5> Full sleeve cover shirt</h5>
                    <p>
                        <span class="price">&#8377;1500.00</span>
                        <span class="old-price">&#8377;2900.00</span>
                        <span class="text-danger">30% off</span>
                    </p>
                    <p><strong>Description:</strong> &nbsp;A full-sleeve shirt is a versatile wardrobe essential that combines style and functionality. Designed to cover the entire length of your arms, it offers added warmth and protection, making it ideal for various weather conditions.</p><br>
                    <p><strong>In stock:</strong> Dispatch in 5 working days</p>
                    <!-- <div class="d-flex mb-3"> -->
                        
                        <input type="number" class="form-control w-25 me-2" value="1"><br>
                        <button class="btn btn-primary">Add to Cart</button>    
                        <button class="btn btn-outline-secondary ms-2">Buy Now</button>
                    <!-- </div> -->
                </div>

</div>
</div>

























    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/script.js"></script>
  </body>


</html>