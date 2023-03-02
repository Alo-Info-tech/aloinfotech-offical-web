<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ALO Info-tech</title>

  <link rel="icon" type="image/x-icon" href="assets\images\icon.jpg">
  <?php include 'common-files/link.php'; ?>
  <style>
header#headfixed {
    background: white !important;
}
.w3l-breadcrumb {
  display: block;
  margin: 0 auto;
  z-index: 100;
  padding-top: 167px;
  z-index: 99;
}
a.bread {
    text-decoration: none;
    color: black;
    font-weight: 500;
}
.btn-primary:focus {
    color: #fff;
    background-color: #0b5ed7;
    border-color: #0a58ca;
    box-shadow: none !important;
}
.breadcrumbs-custom-path {
    text-align: center;
    display: inline-block;
}

.about-banner {
  background: url(assets/images/blog-banner.jpg) no-repeat center; 

 background-size: cover;
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 -ms-background-size: cover;
 min-height: 700px;
}
h3.title {
    text-align: center;
    font-size: 25px;
    font-weight: 600;
}
span.heading {
    font-weight: 600;
    color: #1a7eb3 !important;
}

p.content {
    text-align: justify;
}

.snip1584 {
  position: relative;
  display: inline-block;
  overflow: hidden;
  margin: 27px;
  min-width: 230px;
  max-width: 315px;
  width: 100%;
  color: #ffffff;
  font-size: 16px;
  text-align: left;
}
.snip1584 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
}
.snip1584:before {
  position: absolute;
  top: 10px;
  bottom: 10px;
  left: 10px;
  right: 10px;
  top: 100%;
  content: '';
  background-color: rgba(51, 51, 51, 0.9);
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
  -webkit-transition-delay: 0.25s;
  transition-delay: 0.25s;
}
.snip1584 img {
  vertical-align: top;
  max-width: 100%;
  backface-visibility: hidden;
}
.snip1584 figcaption {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
  align-items: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
}
.snip1584 h3,
.snip1584 h5 {
  margin: 0;
  opacity: 0;
  letter-spacing: 1px;
}
.snip1584 h3 {
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%);
  text-transform: uppercase;
  font-weight: 400;
  -webkit-transition-delay: 0.05s;
  transition-delay: 0.05s;
  margin-bottom: 5px;
}
.snip1584 h5 {
  font-weight: normal;
  background-color: #ae895d;
  padding: 3px 10px;
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%);
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
}
.snip1584 a {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
}
.snip1584:hover:before,
.snip1584.hover:before {
  top: 10px;
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
}
.snip1584:hover h3,
.snip1584.hover h3,
.snip1584:hover h5,
.snip1584.hover h5 {
  -webkit-transform: translateY(0);
  transform: translateY(0);
  opacity: 1;
}
.snip1584:hover h3,
.snip1584.hover h3 {
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}
.snip1584:hover h5,
.snip1584.hover h5 {
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
}
@media screen and (min-width: 320px) and (max-width: 768px){
h2.mt-5.ps-2.fw-bolder.lh-base {
    margin-top: 19px !important;
}

}

@media (max-width: 780px) {
  .snip1584 {
  margin: 10px;
  display: block;
		width: 95%; 
		margin: 15px auto; 
}

}
@media (max-width: 991px) {
    .w3l-breadcrumb {
    padding-top: 130px;
  }
  /* .snip1584 {
  margin: 10px;
  } */
}
@media (max-width: 1200px) {
.about-banner {
  background: url(assets/images/img-banner.png) no-repeat center; 

 background-size: cover;
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 -ms-background-size: cover;
 min-height: 280px;
}

}
@media screen and (min-width: 1201px) and (max-width: 1500px){
.w3l-breadcrumb{
  display: none;
}
}
@media screen and (min-width:1501px) and (max-width:1920px) {
  .w3l-breadcrumb{
  display: none;
}
}
</style>

</head>

<body>
  <?php include 'common-files/head.php'; ?>




  <section class="about-banner">
      <div class="w3l-breadcrumb">
            <div class="container">
                <h3 class="inner-text-title  font-weight-bold mb-2">Grow with Alo</h3> 
                 <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php" class="bread">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Blogs</li>
  </ol>
</nav> 
            </div>
        </div> 
    </section>


    <h2 class="mt-5 ps-2 fw-bolder lh-base contentheading text-center">Our <span class="color">Gallery</span></h2>

<div class="container mt-5">

 
<figure class="snip1584 "><img src="assets\images\onam.jpg" alt="sample119"/>
  <figcaption>
    
    <h5>Onam</h5>
  </figcaption><a href="onam.php"></a>
</figure>
<figure class="snip1584"><img src="assets\images\pongal.jpg" alt="sample120"/>
  <figcaption>
    
    <h5>Pongal</h5>
  </figcaption><a href="pongal.php"></a>
</figure>

<figure class="snip1584"><img src="assets\images\xmas.jpg" alt="sample87"/>
  <figcaption>
    
    <h5>Christmas</h5>
  </figcaption><a href="christmas.php"></a>
</figure>
<figure class="snip1584"><img src="assets\images\tour.jpg" alt="sample119"/>
  <figcaption>
    
    <h5>Picnic</h5>
  </figcaption><a href="Picnic.php"></a>
</figure>
<figure class="snip1584"><img src="assets\images\Celebration.jpg" alt="sample120"/>
  <figcaption>
    
    <h5>Office Celebration</h5>
  </figcaption><a href="office-celebration.php"></a>
</figure>
<figure class="snip1584"><img src="assets\images\seminar-img.png" alt="sample87"/>
  <figcaption>
    
    <h5>College Seminar</h5>
  </figcaption><a href="college.php"></a>
</figure>
</div>


<!-- <div class="container mt-5 mb-5">

    <figure class="snip1584"><img src="assets\images\xmas.jpg" alt="sample87"/>
  <figcaption>
    
    <h5>Christmas</h5>
  </figcaption><a href="christmas.php"></a>
</figure>
<figure class="snip1584 hover"><img src="assets\images\tour.jpg" alt="sample119"/>
  <figcaption>
    
    <h5>Picnic</h5>
  </figcaption><a href="Picnic.php"></a>
</figure>
<figure class="snip1584"><img src="assets\images\Celebration.jpg" alt="sample120"/>
  <figcaption>
    
    <h5>Office Celebration</h5>
  </figcaption><a href="office-celebration.php"></a>
</figure>

</div> -->

<script>

/* Demo purposes only */
var snippet = [].slice.call(document.querySelectorAll('.hover'));
if (snippet.length) {
  snippet.forEach(function (snippet) {
    snippet.addEventListener('mouseout', function (event) {
      if (event.target.parentNode.tagName === 'figure') {
        event.target.parentNode.classList.remove('hover')
      } else {
        event.target.parentNode.classList.remove('hover')
      }
    });
  });
}

</script>


<?php include 'common-files/footer.php'; ?>

</body>

</html>