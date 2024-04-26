<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Glance | Category</title>
    <!-- Stylesheets -->
    <link href="assets/css/all.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/slick.css" rel="stylesheet" />
    <link href="assets/css/slick-theme.css" rel="stylesheet" />
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <h2 class="page-title">shop category</h2>
            <p>Porem ipsum dolor sit amet consectetur</p>
          </div>
        </div>
      </section>
      <!--page-banner-->

      <section class="top-match-section v2">
        <div class="container-fluid">
          <div class="categories-match-slider">
            <div class="swiper5 shop-categories-section">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="shop-category">
                    <img src="assets/images/resource/rect1.jpg" alt="" />
                    <h3>dresses</h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="shop-category">
                    <img src="assets/images/resource/rect2.jpg" alt="" />
                    <h3>Top & Tees</h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="shop-category">
                    <img src="assets/images/resource/rect3.jpg" alt="" />
                    <h3>Bottomwear</h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="shop-category">
                    <img src="assets/images/resource/rect4.jpg" alt="" />
                    <h3>Jumpsuits</h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="shop-category">
                    <img src="assets/images/resource/rect1.jpg" alt="" />
                    <h3>dresses</h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="shop-category">
                    <img src="assets/images/resource/rect2.jpg" alt="" />
                    <h3>Top & Tees</h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="shop-category">
                    <img src="assets/images/resource/rect3.jpg" alt="" />
                    <h3>Bottomwear</h3>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="shop-category">
                    <img src="assets/images/resource/rect4.jpg" alt="" />
                    <h3>Jumpsuits</h3>
                  </div>
                </div>
              </div>
              <!-- pagination -->
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <!--categories-match-slider-->
        </div>
      </section>

      <section class="shop-page">
        <div class="container-fluid">
          <div class="shop-header">
            <h4>Showing 1–15 of 36 results</h4>
            <div class="switcher">
              <h4>In stock only</h4>
              <label class="switch">
                <input type="checkbox" checked />
                <span class="slider round"></span>
              </label>
            </div>
            <div class="shop-filters">
              <ul class="tabs-icons">
                <li class="current" data-tab="tab-1">
                  <i class="fa fa-list"></i>
                </li>
                <li data-tab="tab-2"><i class="fa fa-th-large"></i></li>
                <li data-tab="tab-3"><i class="fa fa-th"></i></li>
              </ul>
              <ul class="shop-ul">
                <li>
                  <div class="drop-menu">
                    <div class="select">
                      <span>Brands</span>
                      <div class="check-icon">
                        <i class="fa fa-angle-down"></i>
                      </div>
                    </div>
                    <input type="hidden" name="gender" />
                    <ul class="dropeddown">
                      <li>Brand 1</li>
                      <li>Brand 2</li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div class="drop-menu">
                    <div class="select">
                      <span>Colors</span>
                      <div class="check-icon">
                        <i class="fa fa-angle-down"></i>
                      </div>
                    </div>
                    <input type="hidden" name="gender" />
                    <ul class="dropeddown">
                      <li>Red</li>
                      <li>Green</li>
                      <li>Orange</li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div class="drop-menu">
                    <div class="select">
                      <span>Size</span>
                      <div class="check-icon">
                        <i class="fa fa-angle-down"></i>
                      </div>
                    </div>
                    <input type="hidden" name="gender" />
                    <ul class="dropeddown">
                      <li>small</li>
                      <li>medium</li>
                      <li>large</li>
                    </ul>
                  </div>
                </li>
                <li>
                  <div class="drop-menu">
                    <div class="select">
                      <span>Price</span>
                      <div class="check-icon">
                        <i class="fa fa-angle-down"></i>
                      </div>
                    </div>
                    <input type="hidden" name="gender" />
                    <ul class="dropeddown">
                      <li>200$</li>
                      <li>300$</li>
                      <li>400$</li>
                    </ul>
                  </div>
                </li>
              </ul>
              <div class="sort-by">
                <div class="drop-menu">
                  <div class="select">
                    <span>Sort by : Featured</span>
                    <div class="check-icon">
                      <i class="fa fa-angle-down"></i>
                    </div>
                  </div>
                  <input type="hidden" name="gender" />
                  <ul class="dropeddown">
                    <li>trending</li>
                    <li>winter collection</li>
                    <li>summer collection</li>
                    <li>top seller</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="custom-tab-content">
            <div class="custom-tab-pane current" id="tab-1">
              <div class="collection-section bb-0">
                <div class="product-categories v2">
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col1.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col2.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col4.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col1.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col2.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col4.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col1.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col2.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col4.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col1.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col2.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col4.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col1.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col2.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col4.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                </div>
              </div>
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link prev" href="#" aria-label="Previous">
                    <i class="fa fa-long-arrow-alt-left"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link active" href="#">1</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link next" href="#" aria-label="Next">
                    <i class="fa fa-long-arrow-alt-right"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="custom-tab-pane grid-view" id="tab-2">
              <div class="collection-section bb-0">
                <div class="product-categories v2">
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col1.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col2.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col4.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col1.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col2.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col4.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col1.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col2.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col4.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col1.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col2.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col4.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col1.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col2.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col4.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                </div>
              </div>
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link prev" href="#" aria-label="Previous">
                    <i class="fa fa-long-arrow-alt-left"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link next" href="#" aria-label="Next">
                    <i class="fa fa-long-arrow-alt-right"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="custom-tab-pane" id="tab-3">
              <div class="collection-section bb-0">
                <div class="product-categories v2">
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col1.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col2.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col4.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col1.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col2.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col4.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col1.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col2.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col4.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col1.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col2.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col4.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col1.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col2.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col4.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                  <div class="product-cat">
                    <div class="product-img">
                      <img src="assets/images/resource/col5.jpg" alt="" />
                      <span class="pro-category">new</span>
                    </div>
                    <div class="product-hover-info">
                      <div class="product-hover-head">
                        <ul class="pt-links">
                          <li>new</li>
                          <li>sales</li>
                        </ul>
                        <a href="#" title="" class="fvrt-product"
                          ><img src="assets/images/icons/heart.svg" alt=""
                        /></a>
                      </div>
                      <div class="product-info-hover">
                        <h3>
                          <a href="shop-single.php" title="">Casual Jacket</a>
                        </h3>
                        <span>Loues Vuitto</span>
                        <div class="pricee">
                          <span>$25.45</span>
                        </div>
                        <ul class="pro-colors">
                          <li class="clr1"></li>
                          <li class="clr2"></li>
                          <li class="clr3"></li>
                          <li class="clr4"></li>
                        </ul>
                        <ul class="variations">
                          <li>s</li>
                          <li>m</li>
                          <li class="active">l</li>
                        </ul>
                        <ul class="pro-buttons">
                          <li>
                            <a href="#" title="" class="theme-btn">quick add</a>
                          </li>
                          <li>
                            <a href="#" title="" class="theme-btn"
                              >quick view</a
                            >
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!--product-hover-info-->
                    <div class="product-info">
                      <h3>
                        <a href="shop-single.php" title="">Casual Jacket</a>
                      </h3>
                      <span class="product-price">$25.45</span>
                    </div>
                  </div>
                </div>
              </div>
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link prev" href="#" aria-label="Previous">
                    <i class="fa fa-long-arrow-alt-left"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link next" href="#" aria-label="Next">
                    <i class="fa fa-long-arrow-alt-right"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="product-view-section">
        <div class="container-fluid">
          <div class="product-view-banner">
            <h2>Sports</h2>
            <h2 class="v2">Glance</h2>
            <div class="product-view-slider">
              <div class="product-view-slide">
                <div class="product-card">
                  <span>Deodorant</span>
                  <h3>
                    <a href="shop-single.php" title="">Women's Perfume</a>
                  </h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Etiam semper lacus id libero porta blandit.
                  </p>
                  <div class="price">
                    <span>$25.45</span>
                    <del>$35.00</del>
                  </div>
                  <div class="cart-items-add">
                    <div class="quantity">
                      <button class="plus-btn" type="button" name="button">
                        <i class="fa fa-plus"></i>
                      </button>
                      <input type="text" name="name" value="1" />
                      <button class="minus-btn" type="button" name="button">
                        <i class="fa fa-minus"></i>
                      </button>
                    </div>
                    <a href="shop-single.php" title="" class="theme-btn"
                      >buy now</a
                    >
                  </div>
                </div>
                <div class="product-view-image">
                  <img src="assets/images/resource/product-img1.png" alt="" />
                </div>
              </div>
              <!--product-view-slides-->
              <div class="product-view-slide">
                <div class="product-card">
                  <span>Deodorant</span>
                  <h3>
                    <a href="shop-single.php" title="">Women's Perfume</a>
                  </h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Etiam semper lacus id libero porta blandit.
                  </p>
                  <div class="price">
                    <span>$25.45</span>
                    <del>$35.00</del>
                  </div>
                  <div class="cart-items-add">
                    <div class="quantity">
                      <button class="plus-btn" type="button" name="button">
                        <i class="fa fa-plus"></i>
                      </button>
                      <input type="text" name="name" value="1" />
                      <button class="minus-btn" type="button" name="button">
                        <i class="fa fa-minus"></i>
                      </button>
                    </div>
                    <a href="shop-single.php" title="" class="theme-btn"
                      >buy now</a
                    >
                  </div>
                </div>
                <div class="product-view-image">
                  <img src="assets/images/resource/product-img1.png" alt="" />
                </div>
              </div>
              <!--product-view-slides-->
              <div class="product-view-slide">
                <div class="product-card">
                  <span>Deodorant</span>
                  <h3>
                    <a href="shop-single.php" title="">Women's Perfume</a>
                  </h3>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Etiam semper lacus id libero porta blandit.
                  </p>
                  <div class="price">
                    <span>$25.45</span>
                    <del>$35.00</del>
                  </div>
                  <div class="cart-items-add">
                    <div class="quantity">
                      <button class="plus-btn" type="button" name="button">
                        <i class="fa fa-plus"></i>
                      </button>
                      <input type="text" name="name" value="1" />
                      <button class="minus-btn" type="button" name="button">
                        <i class="fa fa-minus"></i>
                      </button>
                    </div>
                    <a href="shop-single.php" title="" class="theme-btn"
                      >buy now</a
                    >
                  </div>
                </div>
                <div class="product-view-image">
                  <img src="assets/images/resource/product-img1.png" alt="" />
                </div>
              </div>
              <!--product-view-slides-->
            </div>
            <!--product-view-slider-->
          </div>
        </div>
      </section>
      <!--product-view-section-->

      <section class="prod-section">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="prod-col">
                <img src="assets/images/resource/prod1.jpg" alt="" />
                <div class="prod-caption">
                  <h3><a href="#" title="">girls hat</a></h3>
                  <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                  <a href="shop-single.php" title="" class="theme-btn"
                    >shop now</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="prod-col">
                <img src="assets/images/resource/prod2.jpg" alt="" />
                <div class="prod-caption">
                  <h3><a href="#" title="">winter collection</a></h3>
                  <p>Lorem ipsum dolor sit consectetur adipiscing elit.</p>
                  <a href="shop-single.php" title="" class="theme-btn"
                    >shop now</a
                  >
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="prod-col">
                <img src="assets/images/resource/prod3.jpg" alt="" />
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
          "window['__CF$cv$params']={r:'86548ffe984b3cb3',t:'MTcxMDU5MDIxMy4yMTYwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/ace796eb5511/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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
