<!DOCTYPE html>
<html lang="en-us">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <title>Marketplace</title>
  <!-- <link rel="icon" type="image/png" href="./images"> -->
  

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/grid.css') }}">



  <!-- <style type="text/css">
    .snowflake {
      color: #fff;
      font-size: 1em;
      font-family: Arial, sans-serif;
      text-shadow: 0 0 5px #000;
    }

    @-webkit-keyframes snowflakes-fall {
      0% {
        top: -10%
      }

      100% {
        top: 100%
      }
    }

    @-webkit-keyframes snowflakes-shake {

      0%,
      100% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
      }

      50% {
        -webkit-transform: translateX(80px);
        transform: translateX(80px)
      }
    }

    @keyframes snowflakes-fall {
      0% {
        top: -10%
      }

      100% {
        top: 100%
      }
    }

    @keyframes snowflakes-shake {

      0%,
      100% {
        transform: translateX(0)
      }

      50% {
        transform: translateX(80px)
      }
    }

    .snowflake {
      position: fixed;
      top: -10%;
      z-index: 9999;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      cursor: default;
      -webkit-animation-name: snowflakes-fall, snowflakes-shake;
      -webkit-animation-duration: 10s, 3s;
      -webkit-animation-timing-function: linear, ease-in-out;
      -webkit-animation-iteration-count: infinite, infinite;
      -webkit-animation-play-state: running, running;
      animation-name: snowflakes-fall, snowflakes-shake;
      animation-duration: 10s, 3s;
      animation-timing-function: linear, ease-in-out;
      animation-iteration-count: infinite, infinite;
      animation-play-state: running, running
    }

    .snowflake:nth-of-type(0) {
      left: 1%;
      -webkit-animation-delay: 0s, 0s;
      animation-delay: 0s, 0s
    }

    .snowflake:nth-of-type(1) {
      left: 10%;
      -webkit-animation-delay: 1s, 1s;
      animation-delay: 1s, 1s
    }

    .snowflake:nth-of-type(2) {
      left: 20%;
      -webkit-animation-delay: 6s, .5s;
      animation-delay: 6s, .5s
    }

    .snowflake:nth-of-type(3) {
      left: 30%;
      -webkit-animation-delay: 4s, 2s;
      animation-delay: 4s, 2s
    }

    .snowflake:nth-of-type(4) {
      left: 40%;
      -webkit-animation-delay: 2s, 2s;
      animation-delay: 2s, 2s
    }

    .snowflake:nth-of-type(5) {
      left: 50%;
      -webkit-animation-delay: 8s, 3s;
      animation-delay: 8s, 3s
    }

    .snowflake:nth-of-type(6) {
      left: 60%;
      -webkit-animation-delay: 6s, 2s;
      animation-delay: 6s, 2s
    }

    .snowflake:nth-of-type(7) {
      left: 70%;
      -webkit-animation-delay: 2.5s, 1s;
      animation-delay: 2.5s, 1s
    }

    .snowflake:nth-of-type(8) {
      left: 80%;
      -webkit-animation-delay: 1s, 0s;
      animation-delay: 1s, 0s
    }

    .snowflake:nth-of-type(9) {
      left: 90%;
      -webkit-animation-delay: 3s, 1.5s;
      animation-delay: 3s, 1.5s
    }

    .snowflake:nth-of-type(10) {
      left: 25%;
      -webkit-animation-delay: 2s, 0s;
      animation-delay: 2s, 0s
    }

    .snowflake:nth-of-type(11) {
      left: 65%;
      -webkit-animation-delay: 4s, 2.5s;
      animation-delay: 4s, 2.5s
    } -->
 
 
  <style type="text/css">* {cursor: url(https://cur.cursors-4u.net/others/oth-7/oth708.cur), auto !important;}</style>
 

<!-- <body onLoad="scrlsts()">
  </head> -->

  <!-- <div class="bg">
    <div class="snowflakes" aria-hidden="true">
      <div class="snowflake">
        ⸸
      </div>
      <div class="snowflake">
        ⸸
      </div>
      <div class="snowflake">
        ⸸
      </div>
      <div class="snowflake">
        ⸸
      </div>
      <div class="snowflake">
        ⸸
      </div>
      <div class="snowflake">
        ⛧
      </div>
      <div class="snowflake">
        ⛧
      </div>
      <div class="snowflake">
        ⛧
      </div>
      <div class="snowflake">
        ⛧
      </div>
      <div class="snowflake">
        ⛧
      </div>
      <div class="snowflake">
        ⛧
      </div>
      <div class="snowflake">
        ⛧
      </div>
    </div> -->

    <body>
      <nav>
        <div class="nav-wrapper">
         
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <img class="brand-logo" src="{{ asset('images/logo.png') }}" height="45px">
          <ul class="nav-container left hide-on-med-and-down">
          
        <li><a href="/">Home</a></li> 
        <li><a href="/products">Products</a></li>
        <li><a href="/faq">FAQ</a></li>
        <ul class="nav navbar-right">
            <li><a href="#">Log In</a></li>
            
            </div>
          </ul>
        </div>
      </nav>
      <br>
      <br>
      <div class="content mt-5">
        <h1
          style="text-align:center; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; font-weight: bolder; font-size: 100px;">
          Simple Laravel <span class="text-danger"> Webshop</span></h1>
      </div>
      <div class="product-container">
        <div class="grids">

          <!-- Copy this -->
          <div class="grid">
            <a class="card" data-shoppy-product="">
              <div class="wrapper">
                <div class="image-wrapper">
                  <img src="{{ asset('images/test-product.jpg') }}">
                </div>
              </div>
              <div class="content">
                <span class="title">Product#1</span>
                <span class="description"></span>
                <div class="card-footer">
                  <button class="button style3 fit" data-sellix-product="61c81515a2681" type="submit"
                    alt="Buy Now">Buy</button>
                  <span class="price">1.50 <span>EUR</span></span>
                </div>
              </div>
            </a>
          </div>
          <!-- Copy this -->


          <div class="grid">
            <a class="card" data-shoppy-product="">
              <div class="wrapper">
                <div class="image-wrapper">
                  <img src="{{ asset('images/test-product.jpg') }}">
                </div>
              </div>
              <div class="content">
                <span class="title">Product#2</span>
                <span class="description"></span>
                <div class="card-footer">
                  <button class="button style3 fit" data-sellix-product="621803c5839c5" type="submit"
                    alt="Buy Now">Buy</button>
                  <span class="price">5.00 <span>EUR</span></span>
                </div>
              </div>
            </a>
          </div>


          <div class="grid">
            <a class="card" data-shoppy-product="">
              <div class="wrapper">
                <div class="image-wrapper">
                  <img src="{{ asset('images/test-product.jpg') }}">
                </div>
              </div>
              <div class="content">
                <span class="title">Product#3</span>
                <span class="description"></span>
                <div class="card-footer">
                  <button class="button style3 fit" data-sellix-product="6218045d1691d" type="submit" alt="Buy Now">Buy</button>
                  <span class="price">1.50 <span>EUR</span></span>
                </div>
              </div>
            </a>
          </div>


          <div class="grid">
            <a class="card" data-shoppy-product="">
              <div class="wrapper">
                <div class="image-wrapper">
                  <img src="{{ asset('images/test-product.jpg') }}">
                </div>
              </div>
              <div class="content">
                <span class="title">Tradingview</span>
                <span class="description"></span>
                <div class="card-footer">
                  <button class="button style3 fit" data-sellix-product="6221d6228e3c6" type="submit" alt="Buy Now">Buy</button>
                  <span class="price">1.50 <span>EUR</span></span>
                </div>
              </div>
            </a>
          </div>

          <div class="grid">
            <a class="card" data-shoppy-product="">
              <div class="wrapper">
                <div class="image-wrapper">
                  <img src="{{ asset('images/test-product.jpg') }}">
                </div>
              </div>
              <div class="content">
                <span class="title">Product#4</span>
                <span class="description"></span>
                <div class="card-footer">
                  <button class="button style3 fit" data-sellix-product="6218045e3d30a" type="submit" alt="Buy Now">Buy</button>
                  <span class="price">1.50 <span>EUR</span></span>
                </div>
              </div>
            </a>
          </div>

          <div class="grid">
            <a class="card" data-shoppy-product="">
              <div class="wrapper">
                <div class="image-wrapper">
                  <img src="{{ asset('images/test-product.jpg') }}">
                </div>
              </div>
              <div class="content">
                <span class="title">Product#5</span>
                <span class="description"></span>
                <div class="card-footer">
                  <button class="button style3 fit" data-sellix-product="62180460c22a1" type="submit" alt="Buy Now">Buy</button>
                  <span class="price">1.50 <span>EUR</span></span>
                </div>
              </div>
            </a>
          </div>
          <div class="grid">
            <a class="card" data-shoppy-product="">
              <div class="wrapper">
                <div class="image-wrapper">
                  <img src="{{ asset('images/test-product.jpg') }}">
                </div>
              </div>
              <div class="content">
                <span class="title">Product#6</span>
                <span class="description"></span>
                <div class="card-footer">
                  <button class="button style3 fit" data-sellix-product="62180461b238d" type="submit" alt="Buy Now">Buy</button>
                  <span class="price">1.50 <span>EUR</span></span>
                </div>
              </div>
            </a>
          </div>

          <div class="grid">
            <a class="card" data-shoppy-product="">
              <div class="wrapper">
                <div class="image-wrapper">
                  <img src="{{ asset('images/test-product.jpg') }}">
                </div>
              </div>
              <div class="content">
                <span class="title">Product#7</span>
                <span class="description"></span>
                <div class="card-footer">
                  <button class="button style3 fit" data-sellix-product="61c81515a2681" type="submit" alt="Buy Now">Buy</button>
                  <span class="price">1.00 <span>EUR</span></span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <a class="discord" href="https://discord.com" target="_blank">
        <img src="{{ asset('images/discord.png') }}">
      </a>
      <div class="footer">
        <div class="footer-container">
          <span>&copy; 2024 Created by Csaba Sallai / https://github.com/csabika98/webshop-lrv-php</span>
        </div>
      </div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        type="3366be35cd06e806310ce7b7-text/javascript"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"
        type="3366be35cd06e806310ce7b7-text/javascript"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timeago/1.6.7/jquery.timeago.min.js"
        type="3366be35cd06e806310ce7b7-text/javascript"></script>
     <!--  <script type="3366be35cd06e806310ce7b7-text/javascript">
     $(document).ready(function () {
        $('.sidenav').sidenav();
        $("time.timeago").timeago();
    }); 
</script> -->

<!--      <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="3366be35cd06e806310ce7b7-|49" defer=""></script>
  -->
    </body>
    <!-- <script src="https://cdn.sellix.io/static/js/embed.js"></script> -->

</html>