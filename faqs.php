<?php include "scripts/config.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Glance | FAQS</title>
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
  </head>

  <body>
    <div class="page-wrapper">
      <div class="pointer" id="pointer"></div>

      <!-- Preloader -->
      <div class="loading">
        <div class="loading-text">
          <span class="loading-text-words">L</span>
          <span class="loading-text-words">O</span>
          <span class="loading-text-words">A</span>
          <span class="loading-text-words">D</span>
          <span class="loading-text-words">I</span>
          <span class="loading-text-words">N</span>
          <span class="loading-text-words">G</span>
        </div>
      </div>
      <?php require("components/header.php");?>
      <!--overlay-menu-->

      <section class="page-banner">
        <div class="container">
          <div class="page-banner-content text-center">
            <h2 class="page-title">faq</h2>
            <p>Porem ipsum dolor sit amet consectetur</p>
          </div>
        </div>
      </section>
      <!--page-banner-->

      <section class="faqs-section-page">
        <div class="container">
          <div class="sec-title mw-100">
            <h2>frequently asked qustions</h2>
            <p>
            Frequently Asked Questions (FAQs) are a compilation of common queries that customers may have about a product, service, or company. They serve as a resource to provide quick answers to commonly encountered questions, thereby saving time for both the customer and the support team. Typically found on websites or product pages, FAQs cover a range of topics such as shipping information, returns and exchanges, product specifications, and more. They aim to address concerns that are frequently raised by customers during their shopping experience.
            </p>
          </div>
          <!--sec-title-->
          <div class="accordion" id="accordionExample">
              <?php
              $Query = "SELECT * FROM faqs WHERE status = 1";
              $Result = mysqli_query($conn, $Query);
              if ($Result->num_rows > 0) {
                  $count = 0;
                  while ($DataRows = mysqli_fetch_array($Result)) {
                      $accordionItemId = "collapse" . $count;
                        ?>
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="heading<?php echo $count; ?>">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $accordionItemId; ?>" aria-expanded="true" aria-controls="<?php echo $accordionItemId; ?>">
                                  <?php echo $DataRows['title']; ?>
                              </button>
                          </h2>
                          <div id="<?php echo $accordionItemId; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $count; ?>" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                  <p>
                                      <?php echo $DataRows['description']; ?>
                                  </p>
                              </div>
                          </div>
                      </div>
                    <?php
                            $count++;
                        }
                    } else {
                        echo "No Result Found";
                    }
                    ?>
                </div>
      </section>
      <!--faqs-section-->

      <section class="marquee-section bt-0 pb-0">
        <div
          class="marquee"
          data-duration="17000"
          data-gap="10"
          data-duplicated="true"
        >
          <h2>The best fashion store can deliver</h2>
        </div>
        <div
          class="marquee2"
          data-duration="17000"
          data-gap="37"
          data-duplicated="true"
        >
          <h2>The best fashion store can deliver</h2>
        </div>
      </section>

      <footer>
        <div class="main-footer">
          <h1 class="section-bg-title">Glance</h1>
          <div class="container-fluid">
            <div class="footer-widgets">
              <div class="widget widget-links wow fadeInLeft">
                <h3 class="widget-title">CUSTOMER SERVICE</h3>
                <ul class="wd-links">
                  <li><a href="#" title="">Contact Support</a></li>
                  <li><a href="#" title="">Track My Order</a></li>
                  <li><a href="#" title="">Returns</a></li>
                  <li><a href="#" title="">Accessibility</a></li>
                </ul>
              </div>
              <!--widget-links-->
              <div
                class="widget widget-links wow fadeInLeft"
                data-wow-delay="200ms"
              >
                <h3 class="widget-title">WEBSITE</h3>
                <ul class="wd-links">
                  <li><a href="#" title="">Terms of Service</a></li>
                  <li><a href="#" title="">Shipping & Returns</a></li>
                  <li><a href="#" title="">Privacy Policy</a></li>
                  <li><a href="#" title="">Affiliates</a></li>
                </ul>
              </div>
              <!--widget-links-->
              <div
                class="widget widget-links wow fadeInLeft"
                data-wow-delay="400ms"
              >
                <h3 class="widget-title">Glance</h3>
                <ul class="wd-links">
                  <li><a href="#" title="">Heritage</a></li>
                  <li><a href="#" title="">Sustainability</a></li>
                  <li><a href="#" title="">Instagram</a></li>
                  <li><a href="#" title="">Contact Us</a></li>
                </ul>
              </div>
              <!--widget-links-->
              <div
                class="widget widget-newsletter wow fadeInLeft"
                data-wow-delay="600ms"
              >
                <h3 class="widget-title">NEWSLETTER</h3>
                <p>Subscribe and get 10% discount on your first purchase.</p>
                <form>
                  <input
                    type="email"
                    name="email"
                    placeholder="Email Address"
                  />
                  <button type="submit" class="theme-btn">subscribe</button>
                </form>
              </div>
              <!--widget-newsletter -->
            </div>
          </div>
        </div>
        <div class="bottom-footer">
          <div class="container">
            <div class="copyright wow slideInUp">
              <p>© 2024 Glance IND - ALL RIGHTS RESERVED</p>
            </div>
          </div>
        </div>
      </footer>
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
          "window['__CF$cv$params']={r:'865490278d6670f3',t:'MTcxMDU5MDIxOS41NTAwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/ace796eb5511/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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
