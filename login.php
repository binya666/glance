<?php 
include("database-helper.php");
if(isset($_REQUEST['submit']))
{
    $Email=$_REQUEST['email'];
    $Password=$_REQUEST['password'];
if ($db_name != null) {
    $Query = "SELECT * FROM signup WHERE email='$Email' AND password='$Password'";
    $Result = mysqli_query($conn, $Query);
    if (mysqli_num_rows($Result) > 0) {
        $memory=mysqli_fetch_object($Result);
        $_SESSION['SESSION_ID']=$memory->id;
        header("Location: index.php");
    exit();
    }
}
else{
    echo '<script> alert("Email or Password incorrect") </script>';
}}?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Glance | Login</title>
    <!-- Stylesheets -->
    <link href="assets/css/all.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/slick.css" rel="stylesheet" />
    <link href="assets/css/slick-theme.css" rel="stylesheet" />
    <link href="assets/css/swiper-bundle.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />

    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
  </head>

  <body>
    <div class="lg-page">
      <div class="lg-popup">
        <div class="lg-content">
          <div class="lg-content-inner">
            <a href="index.php" title="" class="close-pop"
              ><img src="assets/images/close2.png" alt=""
            /></a>
            <h3>login</h3>
            <p>Lorem ipsum dolor sit amet, consectetur</p>
            <ul class="lg-social">
              <li>
                <a href="#" title=""
                  ><span><img src="assets/images/google.svg" alt="" /></span> sign with
                  google</a
                >
              </li>
              <li>
                <a href="#" title=""
                  ><span><img src="assets/images/fb.svg" alt="" /></span> sign with
                  facebook</a
                >
              </li>
            </ul>
            <div class="or">
              <span>Or sign in with email</span>
            </div>
            <form action="#" method="post" onsubmit="return validateForm()">
              <div class="input-field">
                <label>Email</label>
                <input
                  type="email"
                  name="email"
                  placeholder="florence@support.com"
                />
              </div>
              <div class="input-field">
                <label>Password</label>
                <input
                  type="password"
                  name="password"
                  placeholder="*********************"
                />
              </div>
              <div class="remember-password">
                <div class="agree-terms">
                  <label class="containerr"
                    >remember Me
                    <input type="checkbox" checked="checked" />
                    <span class="checkmark"></span>
                  </label>
                </div>
                <div class="recovery-password">
                  <a href="new-password.php" title="">recovery password</a>
                </div>
              </div>
              <button type="submit" name="submit" class="theme-btn v2 w-100">login</button>
            </form>
            <div class="btm">
              <span
                >Don't have an account yet ?<a href="signup.php" title=""
                  >Signup</a
                ></span
              >
            </div>
          </div>
        </div>
        <div class="lg-image">
          <img src="assets/images/resource/pop1.jpg" alt="" />
          <a href="index.php" title="" class="close-pop"
            ><img src="assets/images/icons/cancle-img.png" alt=""
          /></a>
        </div>
      </div>
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
          "window['__CF$cv$params']={r:'865491400d6670f3',t:'MTcxMDU5MDI2NC40MzEwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/ace796eb5511/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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
    <script>
        // Function to validate the form before submission
        function validateForm() {
            var email = document.getElementsByName("email")[0].value;
            var password = document.getElementsByName("password")[0].value;

            // Check if email or password is empty
            if (email === "" || password === "") {
                alert("Please fill in all fields.");
                return false; // Prevent form submission
            }

            // If everything is filled, allow form submission
            return true;
        }
    </script>
  </body>
</html>
