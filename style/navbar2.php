<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="images/png" href="images/Untitled-1.png">

  <!-- Bootstrap CSS -->


  <title>Store</title>
  <style>
    .carousel-item {
      height: 100vh;
      min-height: 300px;
      background: no-repeat center center scroll;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

    .carousel-caption {
      bottom: 270px;
    }

    .carousel-caption h5 {
      font-size: 45px;
      text-transform: uppercase;
      letter-spacing: 2px;
      margin-top: 25px;
    }

    .carousel-caption p {
      width: 75%;
      margin: auto;
      font-size: 18px;
      line-height: 1.9;
    }



    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&display=swap');

    body {
      line-height: 1.5;
      font-family: 'Raleway', sans-serif;
      font-weight: 400;

    }

    body.hidden-scrolling {
      overflow-y: hidden;
    }

    * {
      margin: 0;
      box-sizing: border-box;
    }

    ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    a {
      text-decoration: none;
    }

    /*header*/
    .header {
      position: absolute;
      width: 100%;
      left: 0;
      top: 0;
      z-index: 99;
      padding: 0px;
    }

    .header-main {
      background-color: #ffffff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 0;
      border-radius: 0px;
    }

    .header .logo {
      padding: 0 15px;
      text-decoration: none;
      list-style: none;
    }

    .header .logo a {
      font-size: 30px;
      text-transform: capitalize;
      color: #e91e63;
      font-weight: 600;
      text-decoration: none;
      list-style: none;
    }

    .header .nav-menu {
      padding: 0 15px;
    }

    .header .menu>.menu-item {
      display: inline-block;
      margin-left: 30px;
      position: relative;
    }

    .header .menu>.menu-item>a {
      display: block;
      padding: 12px 0;
      font-size: 16px;
      color: #000000;
      text-transform: capitalize;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .header .menu>.menu-item>a .plus {
      display: inline-block;
      height: 12px;
      width: 12px;
      position: relative;
      margin-left: 5px;
      pointer-events: none;
    }

    .header .menu>.menu-item>a .plus:before,
    .header .menu>.menu-item>a .plus:after {
      content: '';
      position: absolute;
      box-sizing: border-box;
      left: 50%;
      top: 50%;
      background-color: #000000;
      height: 2px;
      width: 100%;
      transform: translate(-50%, -50%);
      transition: all 0.3s ease;
    }

    .header .menu>.menu-item:hover>a .plus:before,
    .header .menu>.menu-item:hover>a .plus:after {
      background-color: #e91e63;
    }

    .header .menu>.menu-item>a .plus:after {
      transform: translate(-50%, -50%) rotate(-90deg);
    }

    .header .menu>.menu-item>.sub-menu>.menu-item>a:hover,
    .header .menu>.menu-item:hover>a {
      color: #e91e63;
      text-decoration: none;
      list-style: none;
    }

    .header .menu>.menu-item>.sub-menu {
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
      width: 220px;
      position: absolute;
      left: 0;
      top: 100%;
      background-color: #ffffff;
      padding: 10px 0;
      border-top: 3px solid #e91e63;
      transform: translateY(10px);
      transition: all 0.3s ease;
      opacity: 0;
      visibility: hidden;
    }

    @media(min-width: 992px) {
      .header .menu>.menu-item-has-children:hover>.sub-menu {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
      }

      .header .menu>.menu-item-has-children:hover>a .plus:after {
        transform: translate(-50%, -50%) rotate(0deg);
      }
    }

    .header .menu>.menu-item>.sub-menu>.menu-item {
      display: block;
    }

    .header .menu>.menu-item>.sub-menu>.menu-item>a {
      display: block;
      padding: 10px 20px;
      font-size: 16px;
      font-weight: 600;
      color: #000000;
      transition: all 0.3s ease;
      text-transform: capitalize;
    }

    .header .open-nav-menu {
      height: 34px;
      width: 40px;
      margin-right: 15px;
      display: none;
      align-items: center;
      justify-content: center;
      cursor: pointer;
    }

    .header .open-nav-menu span {
      display: block;
      height: 3px;
      width: 24px;
      background-color: #000000;
      position: relative;
    }

    .header .open-nav-menu span:before,
    .header .open-nav-menu span:after {
      content: '';
      position: absolute;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: #000000;
      box-sizing: border-box;
    }

    .header .open-nav-menu span:before {
      top: -7px;
    }

    .header .open-nav-menu span:after {
      top: 7px;
    }

    .header .close-nav-menu {
      height: 40px;
      width: 40px;
      background-color: #ffffff;
      margin: 0 0 15px 15px;
      cursor: pointer;
      display: none;
      align-items: center;
      justify-content: center;
    }

    .header .close-nav-menu img {
      width: 16px;
    }

    .header .menu-overlay {
      position: fixed;
      z-index: 999;
      background-color: rgba(0, 0, 0, 0.5);
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      visibility: hidden;
      opacity: 0;
      transition: all 0.3s ease;
    }




    /* responsive */

    @media(max-width: 991px) {
      .header .menu-overlay.active {
        visibility: visible;
        opacity: 1;
      }

      .header .nav-menu {
        position: fixed;
        right: -280px;
        visibility: hidden;
        width: 280px;
        height: 100%;
        top: 0;
        overflow-y: auto;
        background-color: #222222;
        z-index: 1000;
        padding: 0px 0;
        transition: all 0.5s ease;
      }

      .header .nav-menu.open {
        visibility: visible;
        right: 0px;
      }

      .header .menu>.menu-item {
        display: block;
        margin: 0;
      }

      .header .menu>.menu-item-has-children>a {
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .header .menu>.menu-item>a {
        color: #ffffff;
        padding: 12px 15px;
        border-bottom: 1px solid #333333;
      }

      .header .menu>.menu-item:first-child>a {
        border-top: 1px solid #333333;
      }

      .header .menu>.menu-item>a .plus:before,
      .header .menu>.menu-item>a .plus:after {
        background-color: #ffffff;
      }

      .header .menu>.menu-item-has-children.active>a .plus:after {
        transform: translate(-50%, -50%) rotate(0deg);
      }

      .header .menu>.menu-item>.sub-menu {
        width: 100%;
        position: relative;
        opacity: 1;
        visibility: visible;
        border: none;
        background-color: transparent;
        box-shadow: none;
        transform: translateY(0px);
        padding: 0px;
        left: auto;
        top: auto;
        max-height: 0;
        overflow: hidden;
      }

      .header .menu>.menu-item>.sub-menu>.menu-item>a {
        padding: 12px 45px;
        color: #ffffff;
        border-bottom: 1px solid #333333;
      }

      .header .close-nav-menu,
      .header .open-nav-menu {
        display: flex;
      }
    }

    #changedas {
      padding-left: 8px;
      padding-right: 8px;
      font-size: 15px;
      background-color: lightseagreen;
      padding: 12px 15px;
      border: none;
      color: white;
    }

    #changedas:hover {
      background-color: #e91e63;
      color: white;
    }
    
    .main {
        text-align:center;
    }
    .marq {
        padding-top:10px;
        padding-bottom :10px;
    }
    .geek1 {
      font-size: 11px;
    font-weight: 400;
    text-transform: capitalize;
    letter-spacing: .05em;
    text-align: center;
        color:black;
        
    }
    
  </style>
</head>

<body>



<div class = "main">
    <marquee class="marq" bgcolor = "yellow" direction = "left" loop="" >
        <div class="geek1">
  Due to unpredictable supply chains because of the pandemic, orders for accessories might be delayed.</div>
    </marquee>
    </div>

  
<div class="container-fluid header">
<div class = "main">
    <marquee class="marq" bgcolor = "yellow" direction = "left" loop="" >
        <div class="geek1">
  Due to unpredictable supply chains because of the pandemic, orders for accessories might be delayed.</div>
    </marquee>
    </div>

    <div class="header-main">
      
      <div class="logo">
        <a href="">STORE</a>
      </div>
      <div class="open-nav-menu">
        <span></span>
      </div>
      <div class="menu-overlay">
      </div>

      <nav class="nav-menu">
        <div class="close-nav-menu">
          <img src="img/close.svg" alt="close">
        </div>
        <ul class="menu">
          <li class="menu-item">
            <a href="#">Home</a>
          </li>
          <li class="menu-item menu-item-has-children">
            <a href="websitepages/product.php" data-toggle="sub-menu">Products <i class="plus"></i></a>
            <ul class="sub-menu">
              <li class="menu-item"><a href="#">NOKIA</a></li>
              <li class="menu-item"><a href="#">OPPO</a></li>
              <li class="menu-item"><a href="#">IPHONE (APPLE)</a></li>
              <li class="menu-item"><a href="#">SAMSUNG</a></li>
              <li class="menu-item"><a href="#">XIOAMI</a></li>
            </ul>
          </li>
          <li class="menu-item">
            <a href="#">About Us</a>
          </li>
          <li class="menu-item">
            <a href="#">Contact Us</a>
          </li>
          <li class="menu-item">
            <form action="" method="POST">
              <button href="dasboad.php" id="changedas" name="btn">DASHBOARD</button>
          </form>
          <?php
          if (isset($_POST['btn'])) {
            echo "<script>
            location.href='login.php';
            </script>";
            session_start();
            session_unset();
            session_destroy();
          }
          ?>
          </li>
        </ul>
      </nav>

    </div>
  </div>



  

  <!--- ignore the code below-->
  <script>
    (() => {

      const openNavMenu = document.querySelector(".open-nav-menu"),
        closeNavMenu = document.querySelector(".close-nav-menu"),
        navMenu = document.querySelector(".nav-menu"),
        menuOverlay = document.querySelector(".menu-overlay"),
        mediaSize = 991;

      openNavMenu.addEventListener("click", toggleNav);
      closeNavMenu.addEventListener("click", toggleNav);
      // close the navMenu by clicking outside
      menuOverlay.addEventListener("click", toggleNav);

      function toggleNav() {
        navMenu.classList.toggle("open");
        menuOverlay.classList.toggle("active");
        document.body.classList.toggle("hidden-scrolling");
      }

      navMenu.addEventListener("click", (event) => {
        if (event.target.hasAttribute("data-toggle") &&
          window.innerWidth <= mediaSize) {
          // prevent default anchor click behavior
          event.preventDefault();
          const menuItemHasChildren = event.target.parentElement;
          // if menuItemHasChildren is already expanded, collapse it
          if (menuItemHasChildren.classList.contains("active")) {
            collapseSubMenu();
          } else {
            // collapse existing expanded menuItemHasChildren
            if (navMenu.querySelector(".menu-item-has-children.active")) {
              collapseSubMenu();
            }
            // expand new menuItemHasChildren
            menuItemHasChildren.classList.add("active");
            const subMenu = menuItemHasChildren.querySelector(".sub-menu");
            subMenu.style.maxHeight = subMenu.scrollHeight + "px";
          }
        }
      });

      function collapseSubMenu() {
        navMenu.querySelector(".menu-item-has-children.active .sub-menu")
          .removeAttribute("style");
        navMenu.querySelector(".menu-item-has-children.active")
          .classList.remove("active");
      }

      function resizeFix() {
        // if navMenu is open ,close it
        if (navMenu.classList.contains("open")) {
          toggleNav();
        }
        // if menuItemHasChildren is expanded , collapse it
        if (navMenu.querySelector(".menu-item-has-children.active")) {
          collapseSubMenu();
        }
      }

      window.addEventListener("resize", function() {
        if (this.innerWidth > mediaSize) {
          resizeFix();
        }
      });

    })();
  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>