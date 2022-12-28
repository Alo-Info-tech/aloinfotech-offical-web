
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"></head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<style>
  footer a{
     text-decoration: none;
     color: white !important;
 }

 
 
 footer{
    background: url(assets/images/map-bg.jpg) no-repeat center; 

background-size: cover;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
-ms-background-size: cover;
}
.color{
  color: #3493CE;
}
.main-social-footer-29 a {
  margin-right: 10px;
  color: #fff;
  display: inline-block;
  text-align: center;
  font-size: 15px;
  background: rgb(255 255 255 / 9%);
  width: 40px;
  height: 40px;
  line-height: 40px;
  border-radius: 50%;
  transition: 0.3s;
}

.main-social-footer-29 a:hover {
  background: #199ff4;
  transition: 0.3s;
  color: #fff;
}
/* backtotopbutton */
#buttontoback {
  display: inline-block;
    background-color: #199ff4;
    width: 36px;
    height: 36px;
    text-decoration: none;
    text-align: center;
    border-radius: 4px;
    position: fixed;
    bottom: 30px;
    right: 30px;
    transition: background-color .3s, opacity .5s, visibility .5s;
    opacity: 0;
    visibility: hidden;
    z-index: 1000;
}
#buttontoback::after {
    content: "\f077";
    font-family: FontAwesome;
    font-weight: normal;
    font-style: normal;
    text-decoration: none;
    font-size: 1em;
    line-height: 35px;
    color: #fff;
}
#buttontoback:hover {
  cursor: pointer;
  background-color: #333;
}
#buttontoback:active {
  background-color: #555;
}
#buttontoback.show {
  opacity: 1;
  visibility: visible;
}




@media (min-width: 500px) {
  
  #buttontoback {
    margin: 30px;
  }
}




@media screen and (min-width:300px) and (max-width:768px){
.footerres{
    text-align:left;
    padding-left:27px;
}
.footerresponsive{
    text-align:left;
    padding-left:10px;
}
footer{
    background: none;
}
.cont-right{
    font-size:17px;
}
}
</style>
<body>
<footer class="text-lg-start bg-dark text-light">
   <section class="pt-5" style="background: #000000eb;   ">
    <div class="container">
      <div class="row" style="    border-bottom: 1px solid #322929;">
        <div class="col-lg-4 col-md-6 col-sm-12 mx-auto mb-4 footerres">
          <p><img class="w-25" src="assets\images\alo_logo_white.png" alt="Alo logo"></p>
          <h4>contact info</h4>
                    <div class="d-flex icontext">
            <div class="cont-left text-center mr-3" style=" padding-top: 5px;">
                <span class="fas fa-globe-asia pe-2" style="color: white;"></span>
            </div>
            <div class="cont-right">                                    
                <a target="_blank" href="https://goo.gl/maps/1nEptGMzufcwXoTc6">Chettikulam Junction, Hindu College Road,
     Chenthooran Nagar, Nagercoil-1.</a>
                
            </div>
          </div>
          <p><i class="fa fa-envelope cont-right" aria-hidden="true"></i> <span class="ps-1"> <a href="mailto:contact@alogroups.com"> contact@alogroups.com</a></span></p>
          <p><i class="fa fa-phone cont-right" aria-hidden="true"></i> <span class="ps-1"><a href="tel:+(91) 739-585-0903"> +(91) 739-585-0903</a></span></p>
          <!-- <p><ul class="d-flex ps-4">
                      <li class="d-flex me-2"><i class="fa-brands fa-square-facebook"></i></li>
                      <li class="d-flex"><i class="fa-brands fa-square-instagram"></i></li>
                      <li class="d-flex mx-2"><i class="fa-brands fa-linkedin"></i></li>
                </ul></p> -->
                <div class="main-social-footer-29">
                <a target="_blank" href="https://www.facebook.com/Alo-Info-tech-102973818870997/" class="facebook"><span class="fab fa-facebook-f"></span></a>
                            <a target="_blank" href="https://instagram.com/alo_infotech?utm_medium=copy_link" class="instagram"><span class="fab fa-instagram"></span></a>
                            <a target="_blank" href="https://www.linkedin.com/company/alo-info-tech" class="linkedin"><span class="fab fa-linkedin-in"></span></a>    
                </div>
                          </div>
        <div class="col-lg-3 col-md-6 col-sm-12  mx-auto mb-4 footerres">
          <h6 class="text-uppercase fw-bold mb-4 pt-1 pb-3">
          Digital marketing
          </h6>

          <div class="line-height">
          <p>
            <a href="seo.php" class="text-reset">SEO</a>
          </p>
          <p>
            <a href="ppc.php" class="text-reset">PPC</a>
          </p>
          <p>
            <a href="socialmedia.php" class="text-reset">Social Media Marketing</a>
          </p>
          <p>
            <a href="contentmarketing.php" class="text-reset">Content Marketing</a>
          </p>
          <p>
            <a href="logodesign.php" class="text-reset">Logo Design & Branding</a>
          </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12  mx-auto mb-4 footerres">
          <h6 class="text-uppercase fw-bold mb-4 pt-1 pb-3">Development</h6>
          <div class="line-height">
          <p>
            <a href="web_application.php" class="text-reset">Web Application</a>
          </p>
          <p>
            <a href="mobile_application.php" class="text-reset">Mobile Application</a>
          </p>
          <p>
            <a href="blockchain.php" class="text-reset">Blockchain Development</a>
          </p>
          <p>
            <a href="testing.php" class="text-reset">Testing</a>
          </p>
          <!-- <p>
            <a href="#!" class="text-reset">Recruirtment Service</a>
          </p> -->
          <p>
            <a href="it-staffing.php" class="text-reset">IT-Staffing </a>
          </p>
        </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-12 mx-auto mb-md-0 mb-4 footerresponsive">
          <h6 class="text-uppercase fw-bold mb-4 pt-1 pb-3 ps-3">Quicklinks</h6>
          <div class="line-height">
          <p class="ps-3">
            <a href="index.php" class="text-reset">Home</a>
          </p>
          <p class="ps-3">
            <a href="about.php" class="text-reset">About Us</a>
          </p>
          <!-- <p class="ps-3">
            <a href="#!" class="text-reset">Service</a>
          </p>
          <p class="ps-3">
            <a href="testing.php" class="text-reset">Testing</a>
          </p> -->
          <p class="ps-3">
            <a href="careers.php" class="text-reset">Careers</a>
          </p>
          <p class="ps-3">
            <a href="blogs.php" class="text-reset">Blogs</a>
          </p>
    </div>
  </section>
  <!-- Copyright -->
  <div class="text-center" style="background: #000000eb; padding: 5px 0;">
          @ 2022 All Copyright Reserved. Developed by <span class="color fw-bolder">ALO GROUPS</span>
          </div>
          <!-- Copyright -->
                </div>
</footer>

<!-- Back to top button -->
<a id="buttontoback"></a>

<script>

var btn = $('#buttontoback');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});


</script>


</body>
</html>









