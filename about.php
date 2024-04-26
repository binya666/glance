<?php include "scripts/config.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Glance | About </title>
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
            <h2 class="page-title">About us</h2>
            <p>Porem ipsum dolor sit amet consectetur</p>
          </div>
        </div>
      </section>
      <!--page-banner-->

      <section class="page-content">
        <div class="container-fluid">
          <div class="row align-items-end about-top">
            <div class="col-lg-6 text-column">
              <h2><span>GLANCE</span> Themes are compatible</h2>
            </div>
            <div class="col-lg-6 text-para">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                luctus leo sit amet lorem egestas iaculis. Donec nibh enim,
                pharetra vel turpis non, vulputate luctus ex. Phasellus pharetra
                ut dolor ac rutrum. Curabitur molestie nec mi in congue. Nam
                luctus ante quis urna molestie, ut venenatis diam sagittis. Nam
                ligula velit,
              </p>
            </div>
          </div>
          <div class="full-image">
            <img src="assets/images/resource/about-img1.jpg" alt="" />
          </div>
          <div class="row images-row">
            <div class="col-lg-7">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-4 image-column">
                  <div class="image">
                    <img src="assets/images/resource/abt1.jpg" alt="" />
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-4 image-column">
                  <div class="image">
                    <img src="assets/images/resource/abt2.jpg" alt="" />
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-4 image-column">
                  <div class="image">
                    <img src="assets/images/resource/abt3.jpg" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 title-column">
              <div class="inner-column">
                <h2>
                  <span>GLANCE</span> Themes are compatible with major plugins
                  and much more!
                </h2>
                <p>
                  Donec ullamcorper, dolor a suscipit pellentesque, justo mi
                  facilisis quam, a ornare justo risus et felis. Morbi bibendum
                  dapibus dapibus. Morbi euismod, leo sed
                </p>
              </div>
            </div>
          </div>
          <div class="about-bottom">
            <h2>
              GLANCE Themes are compatible with major plugins and much more!
            </h2>
            <div class="row">
              <div class="col-lg-6">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Mauris vitae eros venenatis tellus faucibus tincidunt.
                  Pellentesque in neque magna. Integer placerat purus nec
                  rhoncus convallis. Nam et sodales mauris. Nulla gravida justo
                  tellus, ac faucibus dui placerat quis. Donec cursus a lacus id
                  dictum. Nulla eget tincidunt ligula, eget vulputate elit.
                  Morbi hendrerit, orci at dapibus auctor, nunc lacus pretium
                  velit, eu condimentum odio risus non magna. Duis sit amet nisi
                  odio. Vivamus non facilisis sapien.
                </p>
              </div>
              <div class="col-lg-6">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Mauris vitae eros venenatis tellus faucibus tincidunt.
                  Pellentesque in neque magna. Integer placerat purus nec
                  rhoncus convallis. Nam et sodales mauris. Nulla gravida justo
                  tellus, ac faucibus dui placerat quis. Donec cursus a lacus id
                  dictum. Nulla eget tincidunt ligula, eget vulputate elit.
                  Morbi hendrerit, orci at dapibus auctor, nunc lacus pretium
                  velit, eu condimentum odio risus non magna. Duis sit amet nisi
                  odio. Vivamus non facilisis sapien.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--page-content-->

      <section class="team-section-page">
        <div class="container">
          <div class="sec-title">
            <h2>Glance team</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus
              leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel
              turpis
            </p>
          </div>
          <!--sec-title-->
          <div class="row teams">
          <?php
                        $Query = "SELECT * FROM teammember WHERE status = 1";
                        $Result = mysqli_query($conn, $Query);
                        if ($Result->num_rows > 0) {
                            $count = 0;
                            while ($DataRows = mysqli_fetch_array($Result)) {
                        ?>
            <div class="col-lg-2 team-column">
              <div class="inner-column">
                <div class="team-img-v2">
                  <img src="<?php echo "uploads/teammembers/".$DataRows['image']; ?>" alt="" />
                </div>
                <div class="team-info-v2">
                  <h3><?php echo $DataRows['name']; ?></h3>
                  <span><?php echo $DataRows['designation']; ?></span>
                </div>
              </div>
            </div>
            <?php
                            }
                        } else {
                            echo "No Result Found";
                        }
                        ?>
          </div>
        </div>
      </section>
      <!--team-section-->

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
      <?php require("components/footer.php");?>
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
          "window['__CF$cv$params']={r:'865490220e9a70f3',t:'MTcxMDU5MDIxOC42NzQwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/ace796eb5511/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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
