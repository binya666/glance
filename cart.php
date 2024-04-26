<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Glance | Cart</title>
    <!-- Stylesheets -->
    <link href="assets/css/all.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/slick.css" rel="stylesheet" />
    <link href="assets/css/slick-theme.css" rel="stylesheet" />
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/css/select2.min.css" rel="stylesheet" />
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
            <h2 class="page-title">Cart</h2>
            <p>Porem ipsum dolor sit amet consectetur</p>
          </div>
        </div>
      </section>
      <!--page-banner-->

      <section class="cart-page">
        <div class="container">
          <div class="cart-content">
            <div class="top-msg">
              Please, hurry! Someone has placed an order on one of the items you
              have in the cart. We'll keep it for you for 00:24 minutes.
            </div>
            <div class="row">
              <div class="col-lg-12">
                <table class="cart-table">
                  <thead>
                    <tr>
                      <th>Product</th>
                      <th>price</th>
                      <th>quantity</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="cart_product">
                          <div class="cart_product_thumb">
                            <img src="assets/images/resource/cart1.jpg" alt="" />
                          </div>
                          <div class="cart_product_info">
                            <span class="pro-category">short one piece</span>
                            <h3>
                              <a href="#" title=""
                                >Women's summer wrap v neck dress</a
                              >
                            </h3>
                            <span class="new-product">New Product</span>
                            <a href="#" title="" class="edit-product">Edit</a>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="price">
                          <span>$50.00</span>
                        </div>
                      </td>
                      <td>
                        <div class="quantity">
                          <button class="minus-btn" type="button" name="button">
                            <i>-</i>
                          </button>
                          <input type="text" name="name" value="1" />
                          <button class="plus-btn" type="button" name="button">
                            <i>+</i>
                          </button>
                        </div>
                      </td>
                      <td>
                        <div class="price">
                          <span>$200.00</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="cart_product">
                          <div class="cart_product_thumb">
                            <img src="assets/images/resource/cart2.jpg" alt="" />
                          </div>
                          <div class="cart_product_info">
                            <span class="pro-category">short one piece</span>
                            <h3>
                              <a href="#" title=""
                                >Women's summer wrap v neck dress</a
                              >
                            </h3>
                            <span class="new-product">New Product</span>
                            <a href="#" title="" class="edit-product">Edit</a>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="price">
                          <span>$50.00</span>
                        </div>
                      </td>
                      <td>
                        <div class="quantity">
                          <button class="minus-btn" type="button" name="button">
                            <i>-</i>
                          </button>
                          <input type="text" name="name" value="1" />
                          <button class="plus-btn" type="button" name="button">
                            <i>+</i>
                          </button>
                        </div>
                      </td>
                      <td>
                        <div class="price">
                          <span>$200.00</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="cart_product">
                          <div class="cart_product_thumb">
                            <img src="assets/images/resource/cart3.jpg" alt="" />
                          </div>
                          <div class="cart_product_info">
                            <span class="pro-category">short one piece</span>
                            <h3>
                              <a href="#" title=""
                                >Women's summer wrap v neck dress</a
                              >
                            </h3>
                            <span class="new-product">New Product</span>
                            <a href="#" title="" class="edit-product">Edit</a>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="price">
                          <span>$50.00</span>
                        </div>
                      </td>
                      <td>
                        <div class="quantity">
                          <button class="minus-btn" type="button" name="button">
                            <i>-</i>
                          </button>
                          <input type="text" name="name" value="1" />
                          <button class="plus-btn" type="button" name="button">
                            <i>+</i>
                          </button>
                        </div>
                      </td>
                      <td>
                        <div class="price">
                          <span>$200.00</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="cart_product">
                          <div class="cart_product_thumb">
                            <img src="assets/images/resource/cart4.jpg" alt="" />
                          </div>
                          <div class="cart_product_info">
                            <span class="pro-category">short one piece</span>
                            <h3>
                              <a href="#" title=""
                                >Women's summer wrap v neck dress</a
                              >
                            </h3>
                            <span class="new-product">New Product</span>
                            <a href="#" title="" class="edit-product">Edit</a>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="price">
                          <span>$50.00</span>
                        </div>
                      </td>
                      <td>
                        <div class="quantity">
                          <button class="minus-btn" type="button" name="button">
                            <i>-</i>
                          </button>
                          <input type="text" name="name" value="1" />
                          <button class="plus-btn" type="button" name="button">
                            <i>+</i>
                          </button>
                        </div>
                      </td>
                      <td>
                        <div class="price">
                          <span>$200.00</span>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-lg-8">
                <div class="gift-card">
                  <img src="assets/images/gift.png" alt="" />
                  <h5>DO YOU WANT A GIFT WRAP? ONLY FOR $10.00</h5>
                  <a href="#" title="" class="add">add</a>
                </div>
                <div class="additiona-comments">
                  <label>Additional Comments</label>
                  <textarea name="comments"></textarea>
                </div>
                <div class="sc-spon d-flex">
                  <div class="secure-info">
                    <img src="assets/images/exp.png" alt="" />
                    <p>Secure Shopping Guarantee</p>
                  </div>
                  <div class="sponsor">
                    <img src="assets/images/sponsor.png" alt="" />
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="order-summary">
                  <h3>ORDER SUMMARY</h3>
                  <div class="sub-total">
                    <h4>Subtotal</h4>
                    <span>$1,547.00.00</span>
                  </div>
                  <div class="shipping">
                    <form class="row">
                      <div class="col-lg-12">
                        <div class="coupan-code">
                          <h5>Coupon Code</h5>
                          <div class="input-field">
                            <input
                              type="text"
                              name="coupann"
                              placeholder="Enter Coupon Code"
                            />
                            <p>
                              Coupon code will be applied on the checkout page
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="total-amount">
                          <strong>total</strong>
                          <span class="price-amount">$1,547.00.00</span>
                        </div>
                      </div>
                      <div class="col-lg-12">
                        <div class="agree-terms">
                          <label class="containerr"
                            >I agree with
                            <a href="#" title=""> Terms & Conditions</a>
                            <input type="checkbox" checked="checked" />
                            <span class="checkmark"></span>
                          </label>
                        </div>
                        <div class="proceed-buttons">
                          <a href="#" title="" class="checkout-btn">buy now</a>
                        </div>
                        <!--proceed-buttons-->
                      </div>
                    </form>
                  </div>
                </div>
                <!--order-summary-->
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="collection-section bg-change">
        <div class="container-fluid">
          <div class="sec-title wow slideInUp">
            <h2>new collection</h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus
              leo sit amet lorem egestas iaculis. Donec nibh enim, pharetra vel
              turpis
            </p>
          </div>
          <div class="swiper-container swiper2 product-categories v2">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
              <div class="swiper-slide">
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
                        <li>l</li>
                      </ul>
                      <ul class="pro-buttons">
                        <li>
                          <a href="#" title="" class="theme-btn">quick add</a>
                        </li>
                        <li>
                          <a href="#" title="" class="theme-btn">quick view</a>
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
            <!-- scrollbar -->
            <div class="swiper-scrollbar v2">
              <span class="swiper-scrollbar-drag"
                ><span class="drag-inner">DISCOVER MORE</span></span
              >
            </div>
          </div>
        </div>
      </section>
      <!--collection-section-->

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
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery.marquee.min.js"></script>
    <script src="assets/js/script.js"></script>

    <script>
      (function () {
        var js =
          "window['__CF$cv$params']={r:'8654901b8dc070f3',t:'MTcxMDU5MDIxNy42MzIwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/ace796eb5511/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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
