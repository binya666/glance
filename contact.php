<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Glance | Contact</title>
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
            <h2 class="page-title">Contact us</h2>
            <p> Start browsing now and unleash your unique style!</p>
          </div>
        </div>
      </section>
      <!--page-banner-->

      <section class="contact-page-section">
        <div class="container">
          <div class="about-content-v2">
            <h2>
              Style is the
              <img src="assets/images/resource/c1.png" alt="" /> perfection
              <img src="assets/images/resource/c2.png" alt="" /> point of view
              <img src="assets/images/resource/c3.png" alt="" />
            </h2>
            <p>
            Got something on your mind? Drop us a line! Whether it's a question, feedback, or just to say hello, we'd love to hear from you. Reach out to us using the contact form below, and we'll get back to you as soon as possible.
            </p>
            <ul class="contact-links-info">
              <li>
                <div class="ct-icon">
                  <img src="assets/images/ct1.png" alt="" />
                </div>
                <p>House No.32, MIG, Maksi Rd, Tulja Vihar, Awas Dewas, M.P</p>
              </li>
              <li>
                <div class="ct-icon">
                  <img src="assets/images/ct2.png" alt="" />
                </div>
                <a href="#" title="">glance@ support.com</a>
                <a href="#" title=""
                  ><span
                    class="__cf_email__"
                    data-cfemail="26414a47484543665243474b0845494b"
                    >[email&#160;protected]</span
                  ></a
                >
              </li>
              <li>
                <div class="ct-icon">
                  <img src="assets/images/ct3.png" alt="" />
                </div>
                <a href="#" title="">+91 0123 456 789</a>
                <a href="#" title="">+32 145 789 478</a>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section class="map-section-full">
        <div class="container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27457.43347083639!2d73.1097266119936!3d30.657082443443585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b6e4dde0c501%3A0xc37ea3d85326203!2sCOMSATS%20University%20Islamabad%20-%20Sahiwal%20Campus!5e0!3m2!1sen!2s!4v1714093161387!5m2!1sen!2s" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </section>

      <section class="contact-form-section">
        <div class="container">
          <div class="sec-title space-v2">
            <h2>get in touch</h2>
            <p>
            For any inquiries or assistance, please don't hesitate to contact us. We're here to help! You can reach us via email at glance@gmail.com or by phone at +923126036074. Alternatively, you can fill out the contact form below, and we'll get back to you as soon as possible.
            </p>
          </div>
          <form action="contact-script.php" method="post" class="contact_form">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label>first Name</label>
                  <input type="text" id="firstname" name="firstname" placeholder="John" />
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>last Name</label>
                  <input type="text" id="lastname" name="lastname" placeholder="Doe" />
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label>your email</label>
                  <input type="email" id="email" name="email" placeholder="name@example.com"/>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <label>your message</label>
                  <textarea name="message" placeholder="Leave a comment here" id="floatingTextarea2"></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-submit">
                  <button type="submit" name="submit" class="theme-btn v2">send</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </section>
      <!--contact-form-section-->

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

    <script
      data-cfasync="false"
      src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"
    ></script>
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
          "window['__CF$cv$params']={r:'8654900ccbc570f3',t:'MTcxMDU5MDIxNS40NjYwMDA='};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/b/scripts/jsd/ace796eb5511/main.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
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
