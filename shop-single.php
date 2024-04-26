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
            <h2 class="page-title">Best Choice</h2>
            <p>Your ultimate destination for curated men's grooming essentials</p>
          </div>
        </div>
      </section>
      <!--page-banner-->

      <section class="shop-single-section">
        <div class="container-fluid">
          <div class="shop-product-single">
            <div class="shop-product-main-image">
              <div class="cart-product-large-slider">
                <div class="cart-product-large-image">
                  <img src="assets/images/resource/jacket1.png" alt="" />
                </div>
                <div class="cart-product-large-image">
                  <img src="assets/images/resource/jacket2.png" alt="" />
                </div>
                <div class="cart-product-large-image">
                  <img src="assets/images/resource/jacket3.png" alt="" />
                </div>
              </div>
            </div>
            <div class="shop-product-single-info">
              <h3>
                <a href="shop-single.php" title=""
                  >Studiofit Light Grey Hooded Jacket</a
                >
              </h3>
              <div class="prod-ratings">
                <ul class="ratings">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>4.5</span>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                luctus leo sit amet lorem egestas iaculis. Donec nibh enim,
                pharetra vel turpis non, vulputate luctus ex.
              </p>
              <div class="price">
                <span>$25.45</span>
                <del>$35.00</del>
              </div>
              <div class="size-colors">
                <div class="product-size">
                  <span>Size</span>
                  <a href="#" title="" class="size-popup-show">size guide</a>
                  <ul class="size-list">
                    <li class="active">l</li>
                    <li>m</li>
                    <li>s</li>
                    <li>xl</li>
                    <li>xll</li>
                  </ul>
                </div>
                <div class="product-colors">
                  <span>color</span>
                  <ul class="colors-list">
                    <li class="active">
                      <span class="clr1"></span>
                    </li>
                    <li>
                      <span class="clr2"></span>
                    </li>
                    <li>
                      <span class="clr3"></span>
                    </li>
                    <li>
                      <span class="clr4"></span>
                    </li>
                    <li>
                      <span class="clr5"></span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="cart-items-add">
                <div class="quantity">
                  <button class="plus-btn" type="button" name="button">
                    <i class="fa fa-plus"></i>
                  </button>
                  <input
                    type="text"
                    name="name"
                    value="1"
                    aria-autocomplete="list"
                  />
                  <button class="minus-btn" type="button" name="button">
                    <i class="fa fa-minus"></i>
                  </button>
                </div>
                <a href="shop-single.php" title="" class="theme-btn"
                  >buy now</a
                >
                <a href="#" title="" class="theme-btn">add to cart</a>
              </div>
              <div class="cart-product-thumb-slider">
                <div class="cart-product-thumb">
                  <img src="assets/images/resource/jacket1.png" alt="" />
                </div>
                <div class="cart-product-thumb">
                  <img src="assets/images/resource/jacket2.png" alt="" />
                </div>
                <div class="cart-product-thumb">
                  <img src="assets/images/resource/jacket3.png" alt="" />
                </div>
              </div>
              <div class="promo">
                <img src="assets/images/vt.png" alt="" />
                50% off Studiofit Light Grey Hooded Jacket code FGLPW245
              </div>
            </div>
          </div>
          <!--shop-product-singele-->
        </div>
      </section>
      <!--shop-single-section-->

      <div class="size-popup">
        <a href="#" title="" class="close-popup">
          <img src="assets/images/close.png" alt="" />
        </a>
        <div class="popup-title">
          <h2>size chart</h2>
          <p>Lorem ipsum dolor sit amet adipiscing elit</p>
        </div>
        <div class="size-chart">
          <img src="assets/images/resource/chart.png" alt="" />
          <table>
            <tbody>
              <tr>
                <td>size</td>
                <td>XS</td>
                <td>s</td>
                <td>M</td>
                <td>L</td>
                <td>XL</td>
                <td>2XL</td>
              </tr>
              <tr>
                <td>Width</td>
                <td>18</td>
                <td>22</td>
                <td>24</td>
                <td>26</td>
                <td>28</td>
                <td>30</td>
              </tr>
              <tr>
                <td>length</td>
                <td>28</td>
                <td>32</td>
                <td>34</td>
                <td>37</td>
                <td>40</td>
                <td>42</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <section class="lookbook-section">
        <div class="container">
          <div class="lookboo-glance wow slideInUp">
            <div class="lookbook-slider">
              <div class="lookbook">
                <img src="assets/images/resource/img4.jpg" alt="" />
              </div>
              <!--lookbook-->
              <div class="lookbook">
                <img src="assets/images/resource/lookbook2.jpg" alt="" />
              </div>
              <!--lookbook-->
              <div class="lookbook">
                <img src="assets/images/resource/lookbook3.jpg" alt="" />
              </div>
              <!--lookbook-->
              <div class="lookbook">
                <img src="assets/images/resource/lookbook4.jpg" alt="" />
              </div>
              <!--lookbook-->
            </div>
            <h1 class="pb-text wow fadeInUp">Jacket</h1>
          </div>
        </div>
      </section>

      <section class="themes-section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-7">
              <div class="row th-images">
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="th-image">
                    <img src="assets/images/resource/th1.jpg" alt="" />
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                  <div class="th-image">
                    <img src="assets/images/resource/th2.jpg" alt="" />
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-5">
              <div class="th-info">
                <h2>
                  <span>GLANCE</span> Your ultimate destination for curated men's grooming essentials.
                </h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                  luctus leo sit amet lorem egestas iaculis. Donec nibh enim,
                  pharetra vel turpis non, vulputate luctus ex. Phasellus
                  pharetra ut dolor ac rutrum. Curabitur molestie nec mi in
                  congue. Nam luctus ante quis urna molestie, ut venenatis diam
                  sagittis. Nam ligula velit,
                </p>
                <ul class="th-list">
                  <li>
                    <h4>Morbi euismo odio</h4>
                    <span>Donec ullamcorper dolor</span>
                  </li>
                  <li>
                    <h4>Vestibm vehicula</h4>
                    <span>Morbi bibenm dapibus</span>
                  </li>
                  <li>
                    <h4>Quisque digm lacus</h4>
                    <span>Cras elemum tort</span>
                  </li>
                  <li>
                    <h4>Etiam scelerisque</h4>
                    <span>Quisque sed placerat</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="marquee-section v2">
        <div
          class="marquee"
          data-duration="17000"
          data-gap="10"
          data-duplicated="true"
        >
          <h2>The best fashion store can deliver</h2>
        </div>
      </section>

      <section class="images-section">
        <div class="container-fluid">
          <div class="images-sec">
            <div class="image-col">
              <img src="assets/images/resource/image1.jpg" alt="" />
            </div>
            <div class="image-col">
              <img src="assets/images/resource/image2.jpg" alt="" />
            </div>
            <div class="image-col">
              <img src="assets/images/resource/image3.jpg" alt="" />
            </div>
            <div class="image-col">
              <img src="assets/images/resource/shop-img1.jpg" alt="" />
            </div>
            <div class="image-col">
              <img src="assets/images/resource/shop-img2.jpg" alt="" />
            </div>
          </div>
        </div>
      </section>
      <!--images-section-->

      <section class="testimonial-section v2">
        <div class="container">
          <div class="testimonial-slider">
            <div class="testi-slide">
              <p>
                Donec ullamcorper, dolor a suscipit pellentesque, justo mi
                facilisis quam, a ornare justo risus et felis. Morbi bibendum
                dapibus dapibus. Morbi euismod, leo sed sollicitudin porta,
                risus massa venenatis diam, sed efficitur
              </p>
              <div class="testi-footer">
                <img src="assets/images/resource/testi1.jpg" alt="" />
                <h4>Arbaz Ali</h4>
              </div>
            </div>
            <div class="testi-slide">
              <p>
                Donec ullamcorper, dolor a suscipit pellentesque, justo mi
                facilisis quam, a ornare justo risus et felis. Morbi bibendum
                dapibus dapibus. Morbi euismod, leo sed sollicitudin porta,
                risus massa venenatis diam, sed efficitur
              </p>
              <div class="testi-footer">
                <img src="assets/images/resource/testi1.jpg" alt="" />
                <h4>Arbaz Ali</h4>
              </div>
            </div>
            <div class="testi-slide">
              <p>
                Donec ullamcorper, dolor a suscipit pellentesque, justo mi
                facilisis quam, a ornare justo risus et felis. Morbi bibendum
                dapibus dapibus. Morbi euismod, leo sed sollicitudin porta,
                risus massa venenatis diam, sed efficitur
              </p>
              <div class="testi-footer">
                <img src="assets/images/resource/testi1.jpg" alt="" />
                <h4>Arbaz Ali</h4>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--testimonial-section-->

      <section class="blog-posts-section">
        <div class="container">
          <div class="sec-title text-left">
            <h2>Studiofit Light Grey Hooded Man Jacket</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus
              leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel
              turpis non, vulputate luctus ex. Phasellus pharetra ut dolor ac
              rutrum.
            </p>
          </div>
          <!--sec-title-->
          <div class="row blog_posts">
            <div class="col-lg-6">
              <div class="blog_post">
                <div class="blog_post_thumb">
                  <img src="assets/images/resource/postt1.jpg" alt="" />
                </div>
                <div class="blog_post_info">
                  <h3><a href="#" title="">Light Grey Hooded Jacket</a></h3>
                  <p>
                    Vestibulum dignissim imperdiet nunc, mollis gravida sapien
                    ornare eu. Nunc luctus fermentum est. Proin mi dolor,
                    gravida non erat at, eleifend tincidunt mauris. Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit. Vestibulum
                    pretium nisi orci, id bibendum
                  </p>
                </div>
              </div>
              <!--blog_post-->
            </div>
            <div class="col-lg-6">
              <div class="blog_post">
                <div class="blog_post_thumb">
                  <img src="assets/images/resource/postt2.jpg" alt="" />
                </div>
                <div class="blog_post_info">
                  <h3><a href="#" title="">Light Grey Hooded Jacket</a></h3>
                  <p>
                    Vestibulum dignissim imperdiet nunc, mollis gravida sapien
                    ornare eu. Nunc luctus fermentum est. Proin mi dolor,
                    gravida non erat at, eleifend tincidunt mauris. Lorem ipsum
                    dolor sit amet, consectetur adipiscing elit. Vestibulum
                    pretium nisi orci, id bibendum
                  </p>
                </div>
              </div>
              <!--blog_post-->
            </div>
          </div>
        </div>
      </section>
      <!--posts-section-->

      <section class="prod-section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="prod-col">
                <img src="assets/images/resource/shop1.jpg" alt="" />
                <div class="prod-caption">
                  <h3><a href="#" title="">girls hat</a></h3>
                  <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                  <a href="shop-single.php" title="" class="theme-btn"
                    >shop now</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="prod-col">
                <img src="assets/images/resource/shop2.jpg" alt="" />
                <div class="prod-caption">
                  <h3><a href="#" title="">winter collection</a></h3>
                  <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                  <a href="shop-single.php" title="" class="theme-btn"
                    >shop now</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="prod-col">
                <img src="assets/images/resource/shop3.jpg" alt="" />
                <div class="prod-caption">
                  <h3><a href="#" title="">summer girl dress</a></h3>
                  <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                  <a href="shop-single.php" title="" class="theme-btn"
                    >shop now</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="reviews-section">
        <div class="container-fluid">
          <div class="sec-title">
            <h2>Grey Hooded Jacket Reviews</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus
              leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel
              turpis
            </p>
          </div>
          <ul class="reviews-list">
            <li>
              <div class="reviews">
                <div class="review-user">
                  <div class="review-user-img">
                    <img src="assets/images/resource/review.jpg" alt="" />
                  </div>
                  <div class="review-user-info">
                    <h4>Arbaz Ali</h4>
                    <span>Fashio Designer Glanace</span>
                  </div>
                </div>
                <div class="review-info">
                  <p>
                    “Lacus vulputate ac. Vivamus pellentesque, urna scelerisque
                    accumsan placerat, nisi nunc vehicula lorem, quis vulputate
                    ante sem consectetur ipsum. Aenean elementum efficitur
                    libero, rhoncus laoreet felis faucibus a. Nullam ut euismod
                    libero. Cras ante tortor, malesuada a purus vitae”
                  </p>
                </div>
              </div>
            </li>
            <li>
              <div class="reviews">
                <div class="review-user">
                  <div class="review-user-img">
                    <img src="assets/images/resource/review2.jpg" alt="" />
                  </div>
                  <div class="review-user-info">
                    <h4>Arbaz Ali</h4>
                    <span>Fashio Designer Glanace</span>
                  </div>
                </div>
                <div class="review-info">
                  <p>
                    “Lacus vulputate ac. Vivamus pellentesque, urna scelerisque
                    accumsan placerat, nisi nunc vehicula lorem, quis vulputate
                    ante sem consectetur ipsum. Aenean elementum efficitur
                    libero, rhoncus laoreet felis faucibus a. Nullam ut euismod
                    libero. Cras ante tortor, malesuada a purus vitae”
                  </p>
                </div>
              </div>
            </li>
            <li>
              <div class="reviews">
                <div class="review-user">
                  <div class="review-user-img">
                    <img src="assets/images/resource/review3.jpg" alt="" />
                  </div>
                  <div class="review-user-info">
                    <h4>Arbaz Ali</h4>
                    <span>Fashio Designer Glanace</span>
                  </div>
                </div>
                <div class="review-info">
                  <p>
                    “Lacus vulputate ac. Vivamus pellentesque, urna scelerisque
                    accumsan placerat, nisi nunc vehicula lorem, quis vulputate
                    ante sem consectetur ipsum. Aenean elementum efficitur
                    libero, rhoncus laoreet felis faucibus a. Nullam ut euismod
                    libero. Cras ante tortor, malesuada a purus vitae”
                  </p>
                </div>
              </div>
            </li>
            <li>
              <div class="reviews">
                <div class="review-user">
                  <div class="review-user-img">
                    <img src="assets/images/resource/review3.jpg" alt="" />
                  </div>
                  <div class="review-user-info">
                    <h4>Arbaz Ali</h4>
                    <span>Fashio Designer Glanace</span>
                  </div>
                </div>
                <div class="review-info">
                  <p>
                    “Lacus vulputate ac. Vivamus pellentesque, urna scelerisque
                    accumsan placerat, nisi nunc vehicula lorem, quis vulputate
                    ante sem consectetur ipsum. Aenean elementum efficitur
                    libero, rhoncus laoreet felis faucibus a. Nullam ut euismod
                    libero. Cras ante tortor, malesuada a purus vitae”
                  </p>
                </div>
              </div>
            </li>
          </ul>
          <!--reviews-list-->
          <div class="full-button text-center">
            <a href="#" title="" class="theme-btn">more reviews</a>
          </div>
        </div>
      </section>
      <!--reviews-section-->

      <section class="marquee-section abt border-top-0">
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
          "window['__CF$cv$params']={r:'865490031c6d3cb3',t:'MTcxMDU5MDIxMy43MjMwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/ace796eb5511/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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
