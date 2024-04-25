<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Glance | HTML Template | Home Page 01</title>
    <!-- Stylesheets -->
    <link href="assets/css/all.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/slick.css" rel="stylesheet" />
    <link href="assets/css/slick-theme.css" rel="stylesheet" />
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <!--[if lt IE 9
      ]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script
    ><![endif]-->
    <!--[if lt IE 9]><script src="assets/js/respond.js"></script><![endif]-->
  </head>

  <body>
    <div class="page-wrapper">
      <?php require("components/header.php");?>
      <!-- <div class="overlay-menu">
        <ul class="menu-links">
          <li>
            <a href="index.php" title="">Home</a>
          </li>
          <li>
            <a href="#" title="">shop</a>
           <ul>
              <li><a href="shop-category.php" title="">Shop Category</a></li>
              <li><a href="cart.php" title="">Cart</a></li>
            </ul>
          </li>
          <li>
            <a href="single-article.php" title="">blog</a>
          </li>
          <li>
            <a href="contact.php" title="">contact us</a>
          </li>
          <li>
            <a href="#" title="">Pages</a>
            <ul>
              <li><a href="about.php" title="">About</a></li>
              <li><a href="faqs.php" title="">FAQs</a></li>
              <li><a href="signup.php" title="">Sign up</a></li>
              <li><a href="login.php" title="">Login</a></li>
              <li><a href="account.php" title="">account</a></li>
              <li><a href="404.php" title="">404</a></li>
            </ul>
          </li>
        </ul>
        <div
          class="marquee3"
          data-duration="60000"
          data-gap="0"
          data-duplicated="true"
        >
          <ul>
            <li>Glance</li>
            <li>Glance</li>
            <li>Glance</li>
            <li>Glance</li>
            <li>Glance</li>
            <li>Glance</li>
          </ul>
        </div>
      </div> -->
      <!--overlay-menu-->

      <div class="error-page">
        <div class="error-page-content">
          <h2>
            out of <br />
            service
          </h2>
        </div>
        <!--error-page-content-->
        <div
          class="marquee"
          data-duration="17000"
          data-gap="10"
          data-duplicated="true"
        >
          <h2>404 404 404 404 404 404 404 404 404</h2>
        </div>
        <h2 class="error-page-title">glance</h2>
      </div>
      <!--error-page-->
    </div>
    <!-- End Page Wrapper -->

    <!-- Scroll To Top -->
    <div class="scroll-to-top scroll-to-target" data-target="html">
      <span class="fa fa-angle-up"></span>
    </div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-migrate-1.4.1.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/slick-animation.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
      (function () {
        var js =
          "window['__CF$cv$params']={r:'8654916c69db70f3',t:'MTcxMDU5MDI3MS41MjkwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/ace796eb5511/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
        var _0xh = document.createElement("iframe");
        _0xh.height = 1;
        _0xh.width = 1;
        _0xh.style.position = "absolute";
        _0xh.style.top = 0;
        _0xh.style.left = 0;
        _0xh.style.border = "none";
        _0xh.style.visibility = "hidden";
        document.body.appendChild(_0xh);
        function handler() {
          var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
          if (_0xi) {
            var _0xj = _0xi.createElement("script");
            _0xj.innerHTML = js;
            _0xi.getElementsByTagName("head")[0].appendChild(_0xj);
          }
        }
        if (document.readyState !== "loading") {
          handler();
        } else if (window.addEventListener) {
          document.addEventListener("DOMContentLoaded", handler);
        } else {
          var prev = document.onreadystatechange || function () {};
          document.onreadystatechange = function (e) {
            prev(e);
            if (document.readyState !== "loading") {
              document.onreadystatechange = prev;
              handler();
            }
          };
        }
      })();
    </script>
  </body>
</html>
