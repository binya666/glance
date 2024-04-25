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

      <div class="cart-sidebar">
        <div class="cart-sidebar-header">
          <h3>shopping cart</h3>
          <a href="#" title="" class="cls-btn">
            <svg
              width="16"
              height="16"
              viewBox="0 0 16 16"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M12.6657 11.7242C12.926 11.9846 12.926 12.4067 12.6656 12.667C12.4052 12.9274 11.9831 12.9274 11.7228 12.667L7.99931 8.94285L4.27551 12.6666C4.01518 12.927 3.59304 12.927 3.33271 12.6666C3.07238 12.4063 3.07238 11.9842 3.33271 11.7238L7.05658 7.99998L3.33298 4.27573C3.07271 4.01535 3.07271 3.59325 3.33311 3.33292C3.59344 3.07259 4.01558 3.07263 4.27591 3.333L7.99944 7.05718L11.7233 3.33332C11.9836 3.07297 12.4057 3.07297 12.6661 3.33332C12.9264 3.59367 12.9264 4.01578 12.6661 4.27613L8.94211 8.00005L12.6657 11.7242Z"
                fill="white"
              />
            </svg>
          </a>
        </div>
        <div class="cart-body">
          <ul class="cart-tabs">
            <li class="active">
              <a href="#" title="">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M16.3617 20.625H5.63672C3.36797 20.625 1.51172 18.7687 1.51172 16.5V16.3625L1.92422 5.3625C1.99297 3.09375 3.84922 1.375 6.04922 1.375H15.9492C18.1492 1.375 20.0055 3.09375 20.0742 5.3625L20.4867 16.3625C20.5555 17.4625 20.143 18.4937 19.3867 19.3188C18.6305 20.1438 17.5992 20.625 16.4992 20.625C16.4992 20.625 16.4305 20.625 16.3617 20.625ZM6.04922 2.75C4.53672 2.75 3.36797 3.91875 3.29922 5.3625L2.88672 16.5C2.88672 18.0125 4.12422 19.25 5.63672 19.25H16.4992C17.2555 19.25 17.943 18.9062 18.4242 18.3563C18.9055 17.8062 19.1805 17.1187 19.1805 16.3625L18.768 5.3625C18.6992 3.85 17.5305 2.75 16.018 2.75H6.04922Z"
                    fill="white"
                  />
                  <path
                    d="M11 9.625C8.31875 9.625 6.1875 7.49375 6.1875 4.8125C6.1875 4.4 6.4625 4.125 6.875 4.125C7.2875 4.125 7.5625 4.4 7.5625 4.8125C7.5625 6.7375 9.075 8.25 11 8.25C12.925 8.25 14.4375 6.7375 14.4375 4.8125C14.4375 4.4 14.7125 4.125 15.125 4.125C15.5375 4.125 15.8125 4.4 15.8125 4.8125C15.8125 7.49375 13.6813 9.625 11 9.625Z"
                    fill="white"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" title="">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M7.16661 3.93291C8.34435 3.95711 9.49152 4.49391 10.3138 5.91878C10.6194 6.44727 11.3821 6.44727 11.6888 5.91878C12.5114 4.49416 13.6586 3.95736 14.8361 3.93291C16.0138 3.90725 17.2194 4.46262 17.963 5.35631C19.3979 7.08283 19.5812 10.1 17.4805 12.2137L11.0012 17.7963L4.52099 12.2137C2.42146 10.1002 2.60357 7.08283 4.03968 5.35631C4.78328 4.46262 5.98888 3.90725 7.16661 3.93291ZM7.20083 2.34305C5.51784 2.30711 3.88446 3.05854 2.81746 4.3404C0.844058 6.71371 0.725502 10.6603 3.39924 13.3428C3.41341 13.3572 3.42857 13.3709 3.44397 13.3848L10.4832 19.4473C10.7812 19.7032 11.2217 19.7032 11.5194 19.4473L18.5599 13.3848C18.5753 13.3709 18.5893 13.3572 18.6034 13.3428C21.2772 10.66 21.1571 6.71371 19.184 4.3404C18.1185 3.05829 16.4836 2.30687 14.8016 2.34305C13.4063 2.37189 12.0606 3.14727 11.0012 4.41667C9.94203 3.14727 8.59637 2.37189 7.20083 2.34305Z"
                    fill="#C5C5C5"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" title="">
                <svg
                  width="26"
                  height="26"
                  viewBox="0 0 26 26"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M25.8348 12.4942C25.6025 12.1765 20.0682 4.71423 12.9999 4.71423C5.93157 4.71423 0.397009 12.1765 0.164989 12.4939C-0.0549962 12.7954 -0.0549962 13.2042 0.164989 13.5057C0.397009 13.8234 5.93157 21.2857 12.9999 21.2857C20.0682 21.2857 25.6025 13.8233 25.8348 13.5059C26.055 13.2045 26.055 12.7954 25.8348 12.4942ZM12.9999 19.5714C7.79331 19.5714 3.28388 14.6185 1.94899 12.9994C3.28215 11.3788 7.78214 6.42851 12.9999 6.42851C18.2062 6.42851 22.7153 11.3805 24.0508 13.0005C22.7176 14.6211 18.2176 19.5714 12.9999 19.5714Z"
                    fill="#C5C5C5"
                  />
                  <path
                    d="M13.0003 7.85718C10.1646 7.85718 7.85742 10.1643 7.85742 13.0001C7.85742 15.8358 10.1646 18.1429 13.0003 18.1429C15.836 18.1429 18.1432 15.8358 18.1432 13.0001C18.1432 10.1643 15.836 7.85718 13.0003 7.85718ZM13.0003 16.4286C11.1097 16.4286 9.57175 14.8906 9.57175 13.0001C9.57175 11.1095 11.1098 9.5715 13.0003 9.5715C14.8908 9.5715 16.4289 11.1095 16.4289 13.0001C16.4289 14.8906 14.8909 16.4286 13.0003 16.4286Z"
                    fill="#C5C5C5"
                  />
                </svg>
              </a>
            </li>
            <li>
              <a href="#" title="">
                <svg
                  width="22"
                  height="22"
                  viewBox="0 0 22 22"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <g clip-path="url(#clip0_770_540)">
                    <path
                      d="M17.0716 7.04342C16.9251 6.90102 16.7196 6.83627 16.5183 6.8694C16.3168 6.90236 16.1427 7.0289 16.0492 7.21048C15.7276 7.83521 15.3191 8.40931 14.8385 8.91682C14.8864 8.55025 14.9106 8.18141 14.9106 7.81162C14.9106 7.10203 14.8155 6.37182 14.6278 5.64114C14.0109 3.2409 12.3932 1.21097 10.1895 0.0719572C9.99777 -0.0272147 9.76904 -0.0236483 9.58024 0.0812384C9.39152 0.186211 9.2679 0.378668 9.25097 0.593942C9.07918 2.77521 7.95559 4.75972 6.16671 6.03984C6.143 6.0569 6.11949 6.07418 6.09599 6.09136C6.04735 6.12703 6.00141 6.16067 5.95857 6.18895C5.95187 6.19341 5.94521 6.19797 5.93864 6.20265C4.81354 7.00819 3.8852 8.08198 3.25391 9.30826C2.61238 10.5556 2.28711 11.8941 2.28711 13.2865C2.28711 13.9959 2.3822 14.726 2.56976 15.4569C3.55954 19.3094 7.02643 21.9999 11.0006 21.9999C15.8049 21.9999 19.7136 18.0911 19.7136 13.2865C19.7136 10.9172 18.7753 8.70004 17.0716 7.04342ZM11.0006 20.7109C7.61506 20.7109 4.66161 18.4185 3.81834 15.1364C3.65768 14.5103 3.57617 13.8879 3.57617 13.2866C3.57617 12.1012 3.85341 10.9611 4.4001 9.89814C4.93639 8.85645 5.72461 7.94353 6.68011 7.25728C6.7449 7.21401 6.8048 7.17009 6.85808 7.13108C6.87866 7.11595 6.89933 7.10083 6.91854 7.08699C8.73865 5.78448 9.97224 3.85785 10.3984 1.69712C11.8652 2.70714 12.9317 4.22016 13.3794 5.96194C13.54 6.58778 13.6215 7.21014 13.6215 7.81166C13.6215 8.69243 13.4601 9.56878 13.1417 10.4163C13.0443 10.6754 13.1234 10.9678 13.338 11.1426C13.5527 11.3174 13.8549 11.3357 14.089 11.188C15.1525 10.5168 16.0563 9.62614 16.7397 8.58243C17.8316 9.90652 18.4245 11.5486 18.4245 13.2866C18.4245 17.3804 15.0941 20.7109 11.0006 20.7109Z"
                      fill="#C5C5C5"
                    />
                  </g>
                  <defs>
                    <clipPath id="clip0_770_540">
                      <rect width="22" height="22" fill="white" />
                    </clipPath>
                  </defs>
                </svg>
              </a>
            </li>
          </ul>
          <ul class="cart-sidebar-products">
            <li>
              <div class="cart-product-column">
                <div class="card-product-thumb-sd">
                  <img src="assets/images/resource/cr1.jpg" alt="" />
                </div>
                <div class="card-product-thumb-info">
                  <a href="#" title="" class="close-cart-product">
                    <svg
                      width="11"
                      height="11"
                      viewBox="0 0 11 11"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g opacity="0.2">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M8.62485 7.99394C8.79918 8.16832 8.79916 8.45095 8.6248 8.62528C8.45044 8.79961 8.16778 8.79961 7.99345 8.62524L5.50004 6.1314L3.00643 8.62501C2.8321 8.79934 2.54942 8.79934 2.37509 8.62501C2.20076 8.45068 2.20076 8.168 2.37509 7.99367L4.86875 5.50001L2.37527 3.00609C2.20098 2.83174 2.20098 2.54908 2.37536 2.37475C2.54969 2.20042 2.83236 2.20045 3.0067 2.3748L5.50013 4.86867L7.99376 2.37502C8.1681 2.20068 8.45076 2.20068 8.6251 2.37502C8.79945 2.54936 8.79945 2.83202 8.6251 3.00637L6.13138 5.50006L8.62485 7.99394Z"
                          fill="black"
                        />
                      </g>
                    </svg>
                  </a>
                  <a href="#" title="" class="edit-btn">Edit</a>
                  <span>short one piece</span>
                  <h4><a href="#" title="">Women's summer</a></h4>
                  <div class="price-sd">
                    <del>$98.00</del>
                    <span>$50.00</span>
                  </div>
                  <div class="quantity">
                    <button class="minus-btn" type="button" name="button">
                      <i>-</i>
                    </button>
                    <input type="text" name="name" value="1" />
                    <button class="plus-btn" type="button" name="button">
                      <i>+</i>
                    </button>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="cart-product-column">
                <div class="card-product-thumb-sd">
                  <img src="assets/images/resource/cr2.jpg" alt="" />
                </div>
                <div class="card-product-thumb-info">
                  <a href="#" title="" class="close-cart-product">
                    <svg
                      width="11"
                      height="11"
                      viewBox="0 0 11 11"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g opacity="0.2">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M8.62485 7.99394C8.79918 8.16832 8.79916 8.45095 8.6248 8.62528C8.45044 8.79961 8.16778 8.79961 7.99345 8.62524L5.50004 6.1314L3.00643 8.62501C2.8321 8.79934 2.54942 8.79934 2.37509 8.62501C2.20076 8.45068 2.20076 8.168 2.37509 7.99367L4.86875 5.50001L2.37527 3.00609C2.20098 2.83174 2.20098 2.54908 2.37536 2.37475C2.54969 2.20042 2.83236 2.20045 3.0067 2.3748L5.50013 4.86867L7.99376 2.37502C8.1681 2.20068 8.45076 2.20068 8.6251 2.37502C8.79945 2.54936 8.79945 2.83202 8.6251 3.00637L6.13138 5.50006L8.62485 7.99394Z"
                          fill="black"
                        />
                      </g>
                    </svg>
                  </a>
                  <a href="#" title="" class="edit-btn">Edit</a>
                  <span>short one piece</span>
                  <h4><a href="#" title="">Women's summer</a></h4>
                  <div class="price-sd">
                    <del>$98.00</del>
                    <span>$50.00</span>
                  </div>
                  <div class="quantity">
                    <button class="minus-btn" type="button" name="button">
                      <i>-</i>
                    </button>
                    <input type="text" name="name" value="1" />
                    <button class="plus-btn" type="button" name="button">
                      <i>+</i>
                    </button>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="cart-product-column">
                <div class="card-product-thumb-sd">
                  <img src="assets/images/resource/cr3.jpg" alt="" />
                </div>
                <div class="card-product-thumb-info">
                  <a href="#" title="" class="close-cart-product">
                    <svg
                      width="11"
                      height="11"
                      viewBox="0 0 11 11"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g opacity="0.2">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M8.62485 7.99394C8.79918 8.16832 8.79916 8.45095 8.6248 8.62528C8.45044 8.79961 8.16778 8.79961 7.99345 8.62524L5.50004 6.1314L3.00643 8.62501C2.8321 8.79934 2.54942 8.79934 2.37509 8.62501C2.20076 8.45068 2.20076 8.168 2.37509 7.99367L4.86875 5.50001L2.37527 3.00609C2.20098 2.83174 2.20098 2.54908 2.37536 2.37475C2.54969 2.20042 2.83236 2.20045 3.0067 2.3748L5.50013 4.86867L7.99376 2.37502C8.1681 2.20068 8.45076 2.20068 8.6251 2.37502C8.79945 2.54936 8.79945 2.83202 8.6251 3.00637L6.13138 5.50006L8.62485 7.99394Z"
                          fill="black"
                        />
                      </g>
                    </svg>
                  </a>
                  <a href="#" title="" class="edit-btn">Edit</a>
                  <span>short one piece</span>
                  <h4><a href="#" title="">Women's summer</a></h4>
                  <div class="price-sd">
                    <del>$98.00</del>
                    <span>$50.00</span>
                  </div>
                  <div class="quantity">
                    <button class="minus-btn" type="button" name="button">
                      <i>-</i>
                    </button>
                    <input type="text" name="name" value="1" />
                    <button class="plus-btn" type="button" name="button">
                      <i>+</i>
                    </button>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <div class="cart-product-column">
                <div class="card-product-thumb-sd">
                  <img src="assets/images/resource/cr4.jpg" alt="" />
                </div>
                <div class="card-product-thumb-info">
                  <a href="#" title="" class="close-cart-product">
                    <svg
                      width="11"
                      height="11"
                      viewBox="0 0 11 11"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <g opacity="0.2">
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M8.62485 7.99394C8.79918 8.16832 8.79916 8.45095 8.6248 8.62528C8.45044 8.79961 8.16778 8.79961 7.99345 8.62524L5.50004 6.1314L3.00643 8.62501C2.8321 8.79934 2.54942 8.79934 2.37509 8.62501C2.20076 8.45068 2.20076 8.168 2.37509 7.99367L4.86875 5.50001L2.37527 3.00609C2.20098 2.83174 2.20098 2.54908 2.37536 2.37475C2.54969 2.20042 2.83236 2.20045 3.0067 2.3748L5.50013 4.86867L7.99376 2.37502C8.1681 2.20068 8.45076 2.20068 8.6251 2.37502C8.79945 2.54936 8.79945 2.83202 8.6251 3.00637L6.13138 5.50006L8.62485 7.99394Z"
                          fill="black"
                        />
                      </g>
                    </svg>
                  </a>
                  <a href="#" title="" class="edit-btn">Edit</a>
                  <span>short one piece</span>
                  <h4><a href="#" title="">Women's summer</a></h4>
                  <div class="price-sd">
                    <del>$98.00</del>
                    <span>$50.00</span>
                  </div>
                  <div class="quantity">
                    <button class="minus-btn" type="button" name="button">
                      <i>-</i>
                    </button>
                    <input type="text" name="name" value="1" />
                    <button class="plus-btn" type="button" name="button">
                      <i>+</i>
                    </button>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          <!--cart-sidebar-products-->
        </div>
        <div class="cart-footer">
          <p><span>Congratulations!</span> You’ve got free shipping</p>
          <img src="assets/images/progress.png" alt="" />
          <div class="product-price-total">
            <strong>Subtotal</strong>
            <span>$1,547.00.00</span>
          </div>
          <span
            >Tax included <a href="#" title="">Shipping</a> calculated at
            checkout.</span
          >
          <div class="agree-terms">
            <label class="containerr"
              >I agree with <a href="#" title=""> Terms &amp; Conditions</a>
              <input type="checkbox" />
              <span class="checkmark"></span>
            </label>
          </div>
          <ul class="cart-sidebar-btns">
            <li><a href="#" title="">View cart</a></li>
            <li><a href="#" title="" class="checkout">Check out</a></li>
          </ul>
        </div>
      </div>
      <!--cart-sidebar-->

      <div class="search-box">
        <div class="search-box-content">
          <form>
            <div class="input_field">
              <input type="text" name="search" placeholder="Search our store" />
              <button type="submit"><i class="fa fa-search"></i></button>
            </div>
          </form>
          <a href="#" title="" class="close-search"
            ><img src="assets/images/close2.png" alt=""
          /></a>
        </div>
      </div>

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

      <section class="page-banner">
        <div class="container">
          <div class="page-banner-content text-center">
            <h2 class="page-title">shop single</h2>
            <p>Porem ipsum dolor sit amet consectetur</p>
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
                  <span>GLANCE</span> Themes are compatible with major plugins
                  and much more!
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
                    <img src="assets/images/resource/review4.jpg" alt="" />
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