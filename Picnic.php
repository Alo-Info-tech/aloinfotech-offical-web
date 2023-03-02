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

.w3l-breadcrumb {
  display: block;
  margin: 0 auto;
  z-index: 100;
  padding-top: 167px;
  z-index: 99;
}
.btn-primary:focus {
    color: #fff;
    background-color: #0b5ed7;
    border-color: #0a58ca;
    box-shadow: none !important;
}
a.bread {
    text-decoration: none;
    color: black;
    font-weight: 500;
}

.breadcrumbs-custom-path {
    text-align: center;
    display: inline-block;
}

.about-banner {
  background: url(assets/images/img-banner.png) no-repeat center; 

 background-size: cover;
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 -ms-background-size: cover;
 min-height: 300px;
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

* {
	box-sizing: border-box; /* Box model fix */
	margin: 0;
	padding: 0;
}
/* 
==================
Gallery Heading
==================
*/
h1 {
	text-align: center;
}
/* 
==================
Gallery container
==================
*/
.galleryContainer {
	width: 95%; 
	margin: 0 auto; 
}
/* 
==================
Image Container
==================
*/
.imageContainer {
	display: inline-block; 
	width: 30%;
	min-width: 300px; 
	height: 275px;
	margin: 15px 1.33%; 
}
/* 
==================
Image 
==================
*/
img {
	width: 100%; 
	height: 100%;
	object-fit: cover;
	object-position: center;
}

/* 
==================
Break Points
==================
*/

/* First  Break - Not enough space for more than 2 images*/
@media (max-width: 1150px) {
	.imageContainer {
		width: 45%; 
		height: 250px;
		margin: 15px 2.33%; 
	}
}
/* Second Break - Not enough space for more than 1 image*/
@media (max-width: 780px) {
	.imageContainer {
		display: block;
		width: 95%; 
		margin: 15px auto; 
	}
}

p.content {
    text-align: justify;
}
@media (max-width: 991px) {
    .w3l-breadcrumb {
    padding-top: 130px;
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
	<li class="breadcrumb-item active" aria-current="page"><a href="blogs.php" class="bread">Blogs</a></li>
  </ol>
</nav>
            </div>
        </div> 
    </section>





    <h2 class="mt-4 fw-bolder text-center">Picnic</h2>
	<div class="galleryContainer">
		<div class="imageContainer">
			<img src="assets\images\picnic-1.jpeg" alt="img">
		</div>
		<div class="imageContainer">
			<img src="assets\images\picnic-2.jpeg" alt="img">
		</div>
		<div class="imageContainer">
			<img src="assets\images\picnic-3.jpeg" alt="">
		</div>
		<div class="imageContainer">
			<img src="assets\images\picnic-4.jpeg" alt="img">
		</div>
		<div class="imageContainer">
			<img src="assets\images\picnic-5.jpeg" alt="img">
		</div>
		<div class="imageContainer">
			<img src="assets\images\picnic-6.jpeg" alt="img">
		</div>
		<div class="imageContainer">
			<img src="assets\images\picnic-7.jpeg" alt="img">
		</div>
		<div class="imageContainer">
			<img src="assets\images\picnic-8.jpeg" alt="img">
		</div>
		<div class="imageContainer">
			<img src="assets\images\picnic-9.jpeg" alt="img">
		</div>
        <div class="imageContainer">
			<img src="assets\images\picnic-10.jpeg" alt="img">
		</div>
		<div class="imageContainer">
			<img src="assets\images\picnic-11.jpeg" alt="img">
		</div>
		<div class="imageContainer">
			<img src="assets\images\picnic-12.jpeg" alt="img">
		</div>
		<div class="imageContainer">
			<img src="assets\images\picnic-13.jpeg" alt="img">
		</div>
	</div>




<?php include 'common-files/footer.php'; ?>

</body>

</html>