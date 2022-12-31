<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ALO Info-tech</title>
  <link rel="icon" type="image/x-icon" href="assets\images\icon.jpg">
<!-- clients carousel -->
  
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

  <link rel="stylesheet" type="text/css" href=" https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/tiny-slider.css">
  <?php include 'common-files/link.php'; ?>
  <style>
    body {
      font-family: poppins;
      line-height: 35px;
      overflow-x: hidden !important;
    }
    .fixed-top{
      background-color: white;
    }
    .landingbanner {
      background: url(assets/images/landing-banner.png) no-repeat center !important;
      background-size: cover;
      min-height: 780px;
      position: relative;
      max-width: 100% !important;

    }

    .title {
      text-align: center !important;
      color: #3493CE;
    }

    #carouselExampleControlsNoTouching {
      margin-top: 90px;
    }

    .container-fluid.pictureandcarousel.mt-5 {
      max-height: 568px !important;
    }

    /* carouseol button size */
    .carousel-indicators [data-bs-target] {
      width: 10px !important;
      height: 10px !important;
    }

    .name {
      margin-top: 30px !important;
    }
    .item-in{
    /* background: #FFFFFF; */
box-shadow: -4px -4px 4px rgba(0, 0, 0, 0.25), 4px 4px 4px rgba(0, 0, 0, 0.25);
color: rgba(0, 0, 0, 0.6);
}

.title{
  text-align: center;
}
    .aloname {
      font-size: 26px;
      margin-left: 70px;

    }

    .contents {
      font-size: 26px;
      text-align: justify !important;
    }

    .quotes {
      font-size: 16px;
      text-align: justify;
      line-height: 28px;
    }

    .headings {
      font-weight: 700;
      font-size: 30px;

    }
.bottomspace{
  margin-bottom: 72px !important;
}
    /* animation */
    .animated {
      -webkit-animation-duration: 10s;
      animation-duration: 5s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
    }

    .animationx {
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
    }

    @-webkit-keyframes fadeInDown {
      0% {
        opacity: 0;
        -webkit-transform: translateY(-20px);
      }

      100% {
        opacity: 1;
        -webkit-transform: translateY(0);
      }
    }

    @keyframes fadeInDown {
      0% {
        opacity: 0;
        transform: translateY(-100px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .fadeInDown {
      -webkit-animation-name: fadeInDown;
      animation-name: fadeInDown;
      animation-duration: 3s !important;
    }

    @-webkit-keyframes flipInX {
      0% {
        -webkit-transform: perspective(400px) rotateX(90deg);
        opacity: 0;
      }

      40% {
        -webkit-transform: perspective(400px) rotateX(-10deg);
      }

      70% {
        -webkit-transform: perspective(400px) rotateX(10deg);
      }

      100% {
        -webkit-transform: perspective(400px) rotateX(0deg);
        opacity: 1;
      }
    }

    @keyframes flipInX {
      0% {
        transform: perspective(400px) rotateX(90deg);
        opacity: 0;
      }

      40% {
        transform: perspective(400px) rotateX(-10deg);
      }

      70% {
        transform: perspective(400px) rotateX(10deg);
      }

      100% {
        transform: perspective(400px) rotateX(0deg);
        opacity: 1;
      }
    }

    .flipInX {
      -webkit-backface-visibility: visible !important;
      -webkit-animation-name: flipInX;
      backface-visibility: visible !important;
      animation-name: flipInX;
    }

    .animationup {
      -webkit-animation-duration: 10s;
      animation-duration: 10s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
    }

    .reveal {
      position: relative;
      transform: translateY(150px);
      opacity: 0;
      transition: 1s all ease;
    }

    .reveal.active {
      transform: translateY(0);
      opacity: 1;
    }

    .righttoleft {
      position: relative;
      transform: translateX(60px);
      opacity: 0;
      transition: 1s all ease;
    }

    .righttoleft.active {
      transform: translateX(0);
      opacity: 1;
    }

    .lefttoright {
      position: relative;
      transform: translateX(-60px);
      opacity: 0;
      transition: 1s all ease;
    }

    .lefttoright.active {
      transform: translateX(0);
      opacity: 1;
    }

    @-webkit-keyframes fadeIn {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    .fadeIn {
      -webkit-animation-name: fadeIn;
      animation-name: fadeIn;
    }

    .contentheading {
      font-size: 37px;
    font-weight: 600;
    font-style: normal;
    font-stretch: normal;
    line-height: 1.3;
    letter-spacing: normal;
    }

    .quatation {
      font-size: 16px;
      line-height: 29px;
      text-align: justify;
    }

    /* typing effect */

    .typing {
      /* height: 80vh; */
      /* margin-top: 50px; */
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .text-animation {
      white-space: nowrap;
      overflow: hidden;
      text-align: center;
      font-family: poppins;
      font-size: 28px;
      color: black;
    }

    /* Animation */
    .text-animation {
      animation: animated-text 3s steps(30, end) 1s 1 normal both;
    }

    /* text animation */

    @keyframes animated-text {
      from {
        width: 0;
      }

      to {
        width: 472px;
      }
    }

    /* --- */

    /* choose us */

    .rounded-circle {
    border-radius: 50% !important;
}
img {
    max-width: 100%;
    height: auto;
    vertical-align: top;
}

.sub-info{
    font-weight: 600;
    font-family: 'Poppins', sans-serif;
    color: #004975;
}

.display-30 {
    font-size: 0.9rem;
}


/* .borderbox:hover {
  box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.25);
  padding: 20px !important;
} */

/* 
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap');

    :root {
      --red: hsl(0, 78%, 62%);
      --cyan: hsl(180, 62%, 55%);
      --orange: hsl(34, 97%, 64%);
      --blue: hsl(212, 86%, 64%);
      --varyDarkBlue: hsl(234, 12%, 34%);
      --grayishBlue: hsl(229, 6%, 66%);
      --veryLightGray: hsl(0, 0%, 98%);
      --weight1: 200;
      --weight2: 400;
      --weight3: 600;
    }


    .attribution {
      font-size: 11px;
      text-align: center;
    }

    .attribution a {
      color: hsl(228, 45%, 44%);
    }

    h1:first-of-type {
      font-weight: var(--weight1);
      color: var(--varyDarkBlue);

    }

    h1:last-of-type {
      color: var(--varyDarkBlue);
    }

    @media (max-width: 400px) {
      h1 {
        font-size: 1.5rem;
      }
    } */
/* ---- */


/* clients carousel */

/* .logo-item img{
  max-height: 91px;
  max-width: 157px;
  width:100%;
  object-fit: cover;
  margin: 0 auto;
  display: block;
  filter: grayscale(1);
  -webkit-filter: grayscale(1);
  transition: 0.3s all;
  -webkit-transition: 0.3s all;
      cursor: pointer;
}
.logo-item img:hover{
  filter: grayscale(0);
  -webkit-filter: grayscale(0);
}
section.logo-section{
  padding:80px 0;
}
section.logo-section .section-heading {
  text-align: center;
  margin-bottom: 40px;
}
.slick-track *{outline:none;}

.logo-section .slick-prev:before {
  content: '\f053' !important;
  font-family: fontawesome !important;
  color: #8b8b8b !important;

    border-radius: 50%;
    padding: 5px 8px;
}
.logo-section .slick-next:before{
  content: '\f054' !important;
  font-family: fontawesome !important;
  color: #8b8b8b !important; 
    border-radius: 50%;
    padding: 5px 8px;
}
.logo-section .slick-list.draggable {
  margin: 0 30px;
}
.logo-section .slick-next{
  right: 0 !important;
}
.logo-section .slick-prev{
  left: 0 !important;
}
.logo-section .slick-prev, .logo-section .slick-next{
  z-index:5;
} */

/* ------ */

    .header {
      text-align: center;
      line-height: 0.8;
      margin-bottom: 50px;
      margin-top: 100px;
    }



    /* .header p {
    margin: 0 auto;
    line-height: 2;
    color: var(--grayishBlue);
} */


    .box p {
      color: var(--grayishBlue);
    }

    .box {
      border-radius: 5px;
      box-shadow: 0px 30px 40px -20px var(--grayishBlue);
      padding: 12px;
      margin: 25px;
    }

    .imgagess {
      float: right;
      border-radius: 50%;
      border: 2px solid #3493CE;
      padding: 5px;

    }

/* clients carousel */


.slick-slide {
  margin: 0px 20px;
}

/* .slick-slide img {
  width: 100%;
} */

.slick-slider {
  position: relative;
  display: block;
  box-sizing: border-box;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-touch-callout: none;
  -khtml-user-select: none;
  -ms-touch-action: pan-y;
  touch-action: pan-y;
  -webkit-tap-highlight-color: transparent;
}

.slick-list {
  position: relative;
  display: block;
  overflow: hidden;
  margin: 0;
  padding: 0;
}

.slick-list:focus {
  outline: none;
}

.slick-list.dragging {
  cursor: pointer;
  cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list {
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

.slick-track {
  position: relative;
  top: 0;
  left: 0;
  display: block;
}

.slick-track:before,
.slick-track:after {
  display: table;
  content: "";
}

.slick-track:after {
  clear: both;
}

.slick-loading .slick-track {
  visibility: hidden;
}

.slick-slide {
  display: none;
  float: left;
  height: 100%;
  min-height: 1px;
}

/* [dir="rtl"] .slick-slide {
  float: right;
} */

.slick-slide img {
  display: block;
}

.slick-slide.slick-loading img {
  display: none;
}

.slick-slide.dragging img {
  pointer-events: none;
}

.slick-initialized .slick-slide {
  display: block;
}

.slick-loading .slick-slide {
  visibility: hidden;
}

.slick-vertical .slick-slide {
  display: block;
  height: auto;
  border: 1px solid transparent;
}

.slick-arrow.slick-hidden {
  display: none;
}


/* happy clients */
.shadow-effect {
        /* background: #fff; */
        padding: 20px;
        /* border-radius: 4px; */
        text-align: center;
  border:1px solid #ECECEC;
  box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.25);
border-radius: 10px;
background: #3493CE; color: white;
        /* box-shadow: 0 19px 38px rgba(0,0,0,0.10), 0 15px 12px rgba(0,0,0,0.02); */
    }
  
    #customers-testimonials .shadow-effect p {
        font-size: 17px;
        line-height: 1.5;
        margin: 0 0 17px 0;
        font-weight: 300;
        
    }
    .testimonial-name {
        margin: -42px auto 0;
        display: table;
        width: auto;
        /* padding: 9px 35px; */
        border-radius: 50%;
        text-align: center;
        color: #fff;
       
    }
    #customers-testimonials .item {
        text-align: center;
        padding:0 50px;
        /* padding: 50px; */
        /* margin-bottom:80px; */
        opacity: .8;
        -webkit-transform: scale3d(0.8, 0.8, 1);
        transform: scale3d(0.8, 0.8, 1);
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
        
    }
    #customers-testimonials .owl-item.active.center .item {
        opacity: 1;
        -webkit-transform: scale3d(1.0, 1.0, 1);
        transform: scale3d(1.0, 1.0, 1);
        /* background: #3493CE; */
        
    }
    .owl-carousel .owl-item img {
        transform-style: preserve-3d;
        max-width: 90px;
        margin: 0 auto 17px;
        
    }

    #customers-testimonials.owl-carousel.active span,
#customers-testimonials.owl-carousel:hover span {
        background: #3190E7;
        transform: translate3d(0px, -50%, 0px) scale(0.7);
    }
#customers-testimonials.owl-carousel .owl-dots{
  display: inline-block;
  width: 100%;
  text-align: center;
}
#customers-testimonials.owl-carousel{
  display: inline-block;
}
    #customers-testimonials.owl-carousel span {
        background: #3190E7;
        display: inline-block;
        height: 20px;
        margin: 0 2px 5px;
        transform: translate3d(0px, -50%, 0px) scale(0.3);
        transform-origin: 50% 50% 0;
        transition: all 250ms ease-out 0s;
        width: 20px;
    }
    .container-fluid {
      padding-right: 0 !important;
    padding-left: 0 !important;
    }
   #carousel .row {
   
    margin-right: 0;
    margin-left: 0;
}
/* ---- */


/* Logo Slider */
.trust_row{

background: #3493CE;
    width: 30%;
    padding: 26px 21px 41px 12px;
    height: 100%;
    border-radius: 0px 40px 40px 0px;
    top: -2px;
    z-index: 99;
} 
.logo-slider {
	background: white;
	-webkit-box-shadow: 0 0px 0px 0px rgba(0, 0, 0, 0.125);
	box-shadow: 0 0px 0px 0px rgba(0, 0, 0, 0.125);
	margin: auto;
	overflow: hidden;
	position: relative;
	width: 100%;
}

.logo-slider::before, .logo-slider::after {
	background: -webkit-gradient(linear, left top, right top, from(white), to(rgba(255, 255, 255, 0)));
	background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
	content: "";
	/* height: 175px; */
	position: absolute;
	/* width: 200px; */
	z-index: 2;
}

.logo-slider::after {
	right: 0;
	top: 0;
	-webkit-transform: rotateZ(180deg);
	transform: rotateZ(180deg);
}

.logo-slider::before {
	left: 0;
	top: 0;
}

.logo-slider .logo-slide-track {
	-webkit-animation: logo-scroll 60s linear infinite;
	animation: logo-scroll 60s linear infinite;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	width: calc(250px * 14);
  animation-duration: 30s;
  animation-iteration-count: infinite;
}

/* .logo-slider .slide {
 height: 150px; 
	width: 250px; 
	padding: 20px;
} */

@-webkit-keyframes logo-scroll {
	0% {
		-webkit-transform: translateX(0);
		transform: translateX(0);
	}

	100% {
		-webkit-transform: translateX(calc(-250px * 7));
		transform: translateX(calc(-250px * 7));
	}
}

@keyframes logo-scroll {
	0% {
		-webkit-transform: translateX(0);
		transform: translateX(0);
	}

	100% {
		-webkit-transform: translateX(calc(-250px * 7));
		transform: translateX(calc(-250px * 7));
	}
}

/* ---- end ----- */

    /* carousel */

    /* .tns-brands .tns-outer [data-action],
    .tns-brands .tns-nav {
      display: none
    }
    .tns-brands {
    margin-top: 100px !important;
}
    .tns-brands .tns-outer {
      margin-top: 28px;
    }

    .tns-brands .tns-outer [aria-controls] {
      background-color: transparent;
      border: none;
      box-shadow: none;
      color: transparent;
      width: 15px;
      height: 15px;
      padding: 10px;
      box-sizing: border-box;
      border-top: 2px solid #FF8000;
      border-right: 2px solid #FF8000;
      cursor: pointer;
      margin: 0 20px;
      z-index: 2;
    }

    .tns-brands .tns-outer [aria-controls]:nth-child(1) {
      transform: rotate(-135deg)
    }

    .tns-brands .tns-outer [aria-controls]:nth-child(1):active {
      transform: rotate(-135deg) scale(0.9)
    }

    .tns-brands .tns-outer [aria-controls]:nth-last-child(1) {
      transform: rotate(45deg)
    }

    .tns-brands .tns-outer [aria-controls]:nth-last-child(1):active {
      transform: rotate(45deg) scale(0.9)
    }

    .tns-brands .tns-controls {
      display: flex;
      justify-content: space-between;
      margin-bottom: -48px
    }

    .tns-brands .tns-item {
      text-align: center;
      transition: opacity 150ms linear;
    }

    .tns-brands .tns-item:hover {
      opacity: .5
    }

    @media (max-width:992px) {
      .tns-brands .tns-item {
        transform: scale(0.6)
      }
    } */
    @media screen and (min-width: 1200px) and (max-width: 1400px){
      .container-fluid.pictureandcarousel.mt-5 {
    max-height: 630px !important;
}
    }
    @media (max-width: 450px) {
      .box {
        height: 230px;
      }
      .carousel-indicators {
    display: none !important;
}
    }
    @media (max-width: 768px) {
      .carousel-indicators {
    display: none !important;
}  
    }

    @media (max-width: 950px) and (min-width: 450px) {
      .box {
        text-align: center;
        height: 180px;
      }
    

    }

    .box {
      border-top: 10px solid #3493CE;
      border-right: 2px solid #3493CE;
      border-left: 2px solid #3493CE;
      border-bottom: 10px solid #3493CE;
    }

    /* h2 {
    color: var(--varyDarkBlue);
    font-weight: var(--weight3);
} */
    .experience {
      font-size: 23px !important;
    }

    @media screen and (min-width:769px) and (max-width: 1200px){
      .box {
        width: 30%;

      }
      .container-fluid.pictureandcarousel.mt-5 {
    max-height: 630px !important;
}

    }
    @media screen and (min-width: 320px) and (max-width: 767px){
      .newyear{
        display: none;
      }
            #carouselExampleControlsNoTouching {
    margin-top: 0px !important;
}
.landingbanner {
  min-height:0px !important;
    background: none !important;
}
.trust_row{
  padding: 21px 14px 13px 12px !important;
}
.bottomspace{
  margin-bottom: 0px !important;
}
.container-fluid.mt-3.mb-5.p-0 {
    margin-bottom: -28px !important;
}
.row.mt-5 {
    margin-top: -1px !important;
}
.carousel-indicators {
    display: none;
}
/* .container-fluid.pictureandcarousel.mt-5 {
    max-height: 420px!important;
} */
.text-animation {
     font-size: 18px;
}
.contentheading {
    font-size: 28px !important;
}
    .righttoleft {
      position: relative;
      transform: none;
      opacity: 0;
      transition: 0s all ease;
    }

    .righttoleft.active {
      transform: none;
      opacity: 1;
    }

    .lefttoright {
      position: relative;
      transform: none;
      opacity: 0;
      transition: 0s all ease;
    }

    .lefttoright.active {
      transform: none;
      opacity: 1;
    }
    #customers-testimonials .shadow-effect p {
        font-size: 12px;
    }
    .quatation {
    font-size: 12px;
    }

  }
  @media screen and (min-width: 768px) and (max-width: 991px){

.body{
  overflow-x: hidden;
}
#carouselExampleControlsNoTouching {
    margin-top: 55px !important;
}
.trust_row{
  padding: 20px 19px 9px 12px !important;
}
.bottomspace{
  margin-bottom: 0px !important;
}
.landingbanner {
  min-height:0px !important;
    background: none !important;
}
.righttoleft {
      position: relative;
      transform: none;
      opacity: 0;
      transition: 0s all ease;
    }

    .righttoleft.active {
      transform: none;
      opacity: 1;
    }

    .lefttoright {
      position: relative;
      transform: none;
      opacity: 0;
      transition: 0s all ease;
    }

    .lefttoright.active {
      transform: none;
      opacity: 1;
    }
    .carousel-indicators {
    display: none !important;
}
.typing {
    margin-top: 60px !important;
  }

}

  @media screen and (min-width: 992px) and (max-width: 1163px){

    .righttoleft {
      position: relative;
      transform: none;
      opacity: 0;
      transition: 0s all ease;
    }

    .righttoleft.active {
      transform: none;
      opacity: 1;
    }

    .lefttoright {
      position: relative;
      transform: none;
      opacity: 0;
      transition: 0s all ease;
    }

    .lefttoright.active {
      transform: none;
      opacity: 1;
    }


  }
    @media (min-width: 950px) {
      .row1-container {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .row2-container {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .box-down {
        position: relative;
        top: 150px;
      }

      .box {
        width: 20%;

      }
      /* .landingbanner {
        background: none !important;
      min-height:0px !important;
    } */
      .header p {
        width: 30%;
      }
.body{
  overflow-x: hidden ;
}
    }
       @media screen and (min-width: 1401px) and (max-width: 1500px){

    .typing {
    margin-top: 58px !important;
  }
}
  
   @media screen and (min-width:1501px) and (max-width:1920px) {
      .typing {
    margin-top: 75px !important;
  }
}
  
        /* @media (min-width: 320px) and(max-width: 768px) { */
 

  </style>

</head>

<body>
  <?php include 'common-files/head.php'; ?>


  <div id="carousel" class="container-fluid pictureandcarousel mt-5">

    <div class="landingbanner p-0">
      <div class="row">

        <div class="col-xl-6 col-lg-6 col-md-6 ">
          <img src="assets\images\landingalobanner.png" class="img-fluid" alt="work image">
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6">
          <div id="carouselExampleControlsNoTouching" class="carousel slide p-4" data-bs-touch="false" data-bs-interval="false">
            <div id="carouselExampleIndicators" class="carousel slide m-auto" data-bs-ride="carousel">
              <div class="carousel-indicators ">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1" style="background-color:#3493CE;"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2" style="background-color:#3493CE;"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3" style="background-color:#3493CE;"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <h2 class=" ps-1 pt-2 caroheader fw-bolder">Always perform more than expected</h2>
                  <p class="fs-5 text-left pt-2">Don't sit down and wait for the opportunities to come.Get up and make them </p>
                </div>
                <div class="carousel-item">
                  <h2 class="ps-1 pt-2  caroheader fw-bolder">Hire Dedicated Resources</h2>
                  <p class="fs-5 text-left pt-2">Hire our passionate, dedicated developers who can transform your dream idea into reality </p>
                </div>
                <div class="carousel-item">
                  <h2 class="ps-1 pt-2 caroheader fw-bolder">We create Digital Experiences</h2>
                  <p class="fs-5 text-left pt-2">The use of Digital Channels to Market Products and Services in order to Reach Consumers</p>
                </div>              </div>
            </div>
          </div>
        </div>
      </div>
      <marquee  behavior="scroll" direction="right">        
          <img src="assets\images\2023-blue.png" alt="santa"> 
    </marquee> 
    </div>
  </div>

  <!-- </div> -->

  <div class="container">
  <div class="row">
    <div class="col-md-3 co-sm-6">
    <img src="assets\images\output-2.gif" alt="santa"> 
    </div>
    <div class="col-md-6 co-sm-6">
  <div class="typing">
    <p class="text-animation"><b>Start Your IT Transformation With</b></p>
  </div>
  <h3 class="title mt-3 contentheading"><b>ALO INFO-TECH</b></h3>
</div>
 <div class="col-md-3 co-sm-6 newyear">
 <img src="assets\images\output-2.gif" alt="santa"> 
 </div>

  </div>
  </div>
  

  <div class="container animationup fadeIn reveal">
    <div class="row mt-5">
      <div class="col-lg-6 col-md-12">
        <img class="img-fluid" src="assets\images\it-transformation.webp" alt="info">
      </div>
      <div class="col-lg-6 col-md-12">
        <!-- <h3 class=" typingEffect title"><b>Start Your IT Transformation With</b></h3>
        <h2 class="color py-3 aloname"> <b>ALO INFO-TECH</b></h2> -->
        <p class="contents mt-4"><b>Your Business Demands Secure, Reliable And CostEffective Technology</b></p>
        <p class="quotes">We are specialize in the development of software solutions, web based solutions,
          web hosting development, Mobile application development, Digital Marketing as our major categories of business. Our services are completely tailored to meet client's requirements and expectations. We always keep on exploring new innovations and leverage creativity to serve across 360° solutions. Are you ready to grow your business with our expert's assistance?</p>
          <div class="container mb-4" style="text-align:center">
           <button type="button" class="btn btn-primary mt-2"><a href="request-for-services.php" style="color:white;">Get In Touch</a> </button>
        </div>
        </div>
      
    </div>
  </div>
  <!--  -->

<!-- choose us -->

<div class="container">
    <div class="text-center mb-2-8 mb-lg-6">
        <!-- <h2 class="display-18 display-md-16 display-lg-14 font-weight-700">Why choose <strong class="text-primary font-weight-700">Us</strong></h2> -->
        <h2 class="contentheading text-center mt-5 mb-5"><span class="color"><b>Why </span>Choose Us </b></h2>
      </div>
    <div class="row align-items-center mt-5">
        <div class="col-sm-6 col-lg-4 mb-2-9 mb-sm-0">
            <div class="pr-md-3">
                <div class="text-center text-sm-right borderbox lefttoright mb-2-9">
                    <div class="mb-4">
                        <img src="assets\images\experience.png" alt="..." class="rounded-circle">
                    </div>
                    <h4 class="sub-info">2+ years of experience</h4>
                    <p class="display-30 mb-0">We are a vibrant team of experienced digital enthusiasts who provide out-of-the-box ideas and solutions for our clients.</p>
                </div>
                <div class="text-center text-sm-right borderbox lefttoright mt-4">
                    <div class="mb-4">
                        <img src="assets/images/team.png" alt="..." class="rounded-circle">
                    </div>
                    <h4 class="sub-info">Vibrant & Strategy</h4>
                    <p class="display-30 mb-0">We understand your brand and comeup with customized solutions.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 d-none d-lg-block mt-5">
            <div class="why-choose-center-image">
                <img src="assets\images\chooseus.png" alt="..." class="">
            </div>
        </div>
        <div class="col-sm-6 col-lg-4">
            <div class="pl-md-3">
                <div class="text-center text-sm-left borderbox righttoleft mb-2-9">
                    <div class="mb-4">
                        <img src="assets/images/flexible_timing.png" alt="..." class="rounded-circle">
                    </div>
                    <h4 class="sub-info">Flexible Shedule And Timing</h4>
                    <p class="display-30 mb-0">Whatever we believe about ourselves and our ability comes true for us.</p>
                </div>

                <div class="text-center text-sm-left borderbox  righttoleft mt-4">
                    <div class="mb-4">
                        <img src="assets/images/holidays.png" alt="..." class="rounded-circle">
                    </div>
                    <h4 class="sub-info">vacation and holidays</h4>
                    <p class="display-30 mb-0 ">We are creating beautiful memories together that we'll remember for the rest of our lives.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 
  <div class="row1-container">
    <div class="box box-down">
      <h2 class="experience text-center">2+ years of experience</h2>
      <p>Boost your creative practice and expand your professional network. Free Training for N17 </p>
      <div class="image">
        <img src="assets/images/Experience.png" class="img-fluid imgagess" alt="">
      </div>
    </div>

    <div class="box">
      <h2 class="experience text-center">Vibrant & Awesome</h2>
      <p>We are looking for creatives to boost their creative practice, get their skills accredited</p>
      <img src="assets/images/Team.png" class="img-fluid imgagess" alt="">
    </div>

    <div class="box box-down">
      <h2 class="experience text-center">Flexible Shedule And Timing</h2>
      <p>flexible content management systems, multiple users from sales and marketing departments</p>
      <img src="assets/images/Flexible_Timing.png" class="img-fluid imgagess" alt="">
    </div>
  </div>
  <div class="row2-container">
    <div class="box">
      <h2 class="experience text-center">vacation and holidays</h2>
      <p>The “vocation of business” allows each person the freedom to live out his or her unique, personal </p>
      <img src="assets/images/Holidays.png" class="img-fluid imgagess" alt="">
    </div>
  </div> -->




  <!-- <div class="container-fluid mt-5" id="card">

    <h1 class="text-center headings mt-5"><span class="color">Reason for</span> choose us</h1>
    <div class="row mx-5">
      <div class="col-lg-3 col-md-6 ">
        <div class="card shadow p-3 mb-5 bg-white">
            <img src="assets\images\experience.png" class="card-img-top h-25 w-25 m-auto" alt="Experience">
          <div class="card-body">
              <p class="card-text text-small">2+ years of experience</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card shadow p-3 mb-5 bg-white">
            <img src="assets\images\team.png" class="card-img-top h-25 w-25 m-auto" alt="Team">
          <div class="card-body">
            <p class="card-text text-small">Vibrant & Awesome</p>
        </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card shadow p-3 mb-5 bg-white">
            <img src="assets\images\flexible_timing.png" class="card-img-top h-25 w-25 m-auto" alt="Flexible_Timing">
          <div class="card-body">
              <p class="card-text text-small"><small>Flexible Shedule And Timing</small></p>
          </div>
       </div>
      </div>
      <div class="col-lg-3 col-md-6">
          <div class="card shadow p-3 mb-5 bg-white">
              <img src="assets\images\holidays.png" class="card-img-top h-25 w-25 m-auto" alt="Holidays">
            <div class="card-body">
                <p class="card-text text-small">vacation and holidays</p>
            </div>
          </div>
      </div>
  </div>
</div> -->

  <!--  -->


  <div class="container">

    <h2 class="contentheading text-center mt-5 mb-5"><b> What <span class="color"> Our Clients Say</span> </b></h2>
    <section class="testimonials animationup fadeIn reveal">


      <div class="row">
        <div class="col-sm-12">
          <div id="customers-testimonials" class="owl-carousel">

            <!--TESTIMONIAL 2 -->
            <div class="item">
              <div class="shadow-effect">
              <p class="text-center fw-bold">Tom Maclean </p>
                <p class="text-center">We are very satisfied with ALO INFO-TECH because of their excellent support services and project consulting.Appreciate their comprehensive skill set and expertise in different domains.</p>
              </div>
              <div class="testimonial-name">
              <img class="img-rounded" src="assets\images\set-social-people-media-profile-member_24877-53571 1.png" alt="">
              </div>
            </div>
            <!--END OF TESTIMONIAL 2 -->
            <!--TESTIMONIAL 3 -->
            <div class="item">
              <div class="shadow-effect">
              <p class="text-center fw-bold">Linnea </p>
                <p class="text-center mb-4">ALO INFO-TECH is full of dynamic programmers who cater to their client's specific needs. Their team takes the time to listen to input and modify work when needed. 
                  <!-- Customers can expect a supportive group committed to adapting to their client's workflow. -->

                </p>
              </div>
              <div class="testimonial-name">
              <img class="img-rounded" src="assets\images\female.png" alt="">
              </div>
            </div>
            <!--END OF TESTIMONIAL 3 -->
            <!--TESTIMONIAL 4 -->
            <div class="item">
              <div class="shadow-effect">
              <p class="text-center fw-bold">Sriskanthan </p>
                <p class="text-center">ALO INFO-TECH is a terrific mobile application marketer. I confidently say that ALO INFO-TECH really knows what client needs and deliver the right message!</p>
              </div>
              <div class="testimonial-name">
              <img class="img-rounded" src="assets\images\set-social-people-media-profile-member_24877-53571 1.png" alt="">
              </div>
            </div>
            <!--END OF TESTIMONIAL 4 -->
            <!--TESTIMONIAL 5 -->
            <div class="item">
              <div class="shadow-effect">
              <p class="text-center fw-bold">Brain Lee </p>
                <p class="text-center">Positive internal feedback on the finished arm has focused on its functionality and Rs graphics. Expect a partner capable of an effective collaboration even when external resources are limited.</p>
              </div>
              <div class="testimonial-name">
              <img class="img-rounded" src="assets\images\set-social-people-media-profile-member_24877-53571 1.png" alt="">
              </div>
            </div>
            <!--END OF TESTIMONIAL 5 -->
          </div>
        </div>
      </div>
     
    </section> 
    </div>
      
      
      
      
 




  <div class="container  mb-2 animationup fadeIn reveal">
    <div class="row strengthy">
      <div class="col-lg-7 col-md-12 ">
        <h2 class="contentheading "><span class="color"><b>Our</span> Strength</b></h2>
        <p class="text-indent quatation mt-3">Our main strengths are communication, team work, Problem-solving and
          creativity. Clients and employees are the main focus of our company. We offer
          great career opportunities which leads to your future growth. We follow strong
          innovative company culture. We are good at managing people.We always
          complete our projects in time. Deal well with difficult situations. We are able to
          juggle more than one project at a time. Our company has good infrastructure.
          Our employees are friendly natured.</p>
        <p class="quatation">We help to build and implement technologies to keep our clients aware and responsive.
          Our social purpose create environmental and social considerations into every element
          of our business model.</p>
      </div>
      <div class="col-lg-5 col-md-12 text-center mt-4">
        <img class="img-fluid img-fluid-index  careers" src="assets\images\vector-2.png" alt="info">
      </div>
    </div>
  </div>
  <!--  -->
  <div class="container animationup fadeIn reveal">
    <div class="row mt-5">
      <div class="col-lg-5 col-md-12 ">
        <img class="img-fluid img-fluid-index justify-content-end careers" src="assets\images\careers.png" alt="info">
      </div>
      <div class="col-lg-7 col-md-12 ">
        <h2 class="py-3 color text-center contentheading"><b>Careers</b></h2>
        <p class="quatation">Alo Info-Tech is leading growth based Digital marketing
          agency, web design & application development technology
          company. We’re always looking for people who show a
          willingness to collaborate with others in order to execute
          work assignments and accomplish goals. We value inspired,
          skilled self-starters who love to work as part of a team and are
          cool under pressure. If that sounds like you, then what are you
          waiting for? check out our job openings – it could be the first
          step to join in a beautiful family.</p>
        <div class="container mb-4" style="text-align:center">
           <button type="button" class="btn btn-primary mt-3"><a href="contactus.php" style="color:white;">contact</a> </button>
        </div>
      </div>
    </div>
  </div>
  <!-- contact -->


  
<!-- contact,career -->

<!-- <div class="container">
  <div class="row">
    <div class="col-md-6 item">
      <div class="item-in">
       
      <h2 class="contentheading text-center "><span class="color"><b>our</span> strength</b></h2>
       <div class="text-center">
      <img class="img-fluid img-fluid-index w-75 careers mt-2" src="assets\images\img-career.jpg" alt="info">
      </div>
      <p class="text-indent quatation p-3 mb-5">Our main strengths are communication, team work, Problem-solving and
          creativity. Clients and employees are the main focus of our company. We offer
          great career opportunities which leads to your future growth. We follow strong
          innovative company culture. We are good at managing people.We always
          complete our projects in time. Deal well with difficult situations. We are able to
          juggle more than one project at a time. Our company has good infrastructure.
          Our employees are friendly natured.</p>
      
      </div>
      </div>
  
    <div class="col-md-6 item">
      <div class="item-in">
      <h2 class="color text-center contentheading"><b>careers</b></h2>
      <div class="text-center">
      <img class="img-fluid img-fluid-index justify-content-end careers" src="assets\images\career-img.png" alt="info">
      </div>
      <p class="quatation p-3">Alo Info-Tech is leading growth based Digital marketing
          agency, web design & application development technology
          company. We’re always looking for people who show a
          willingness to collaborate with others in order to execute
          work assignments and accomplish goals. We value inspired,
          skilled self-starters who love to work as part of a team and are
          cool under pressure. If that sounds like you, then what are you
          waiting for? check out our job openings – it could be the first
          step to join in a beautiful family.</p>
       
    </div>  </div>
  </div>
</div> -->
<!-- ---- -->




<!-- ----- clients carousel ------ -->
<div class="bottomspace">
  <div class="container-fluid mt-3 mb-5  p-0">
    <h2 class="contentheading text-center mt-3 mb-5"><span class="color"><b>Customers </span> Who Love Us</b></h2>
    
<div class="container-fluid p-0 mark-in ">
        <div class="container-fluid mt-5 mb-3 p-0">
            <div class="row m-0 p-0 d-flex">
                <div class="col-md-3 trust_row">
                    <h3 class="border-right text-white">Trusted By</h3>
                    <p class="text-white">Over 100+ businesses have trusted us in building & marketing applications that help their business.</p>

                </div>



                <div class="col-md-9 p-0">

                <div class="logo-slider p-0">
	<div class="logo-slide-track">
		<div class="slide">
			<img src="assets\images\s7-logo-clients.png" alt="" />
		</div>
		<div class="slide">
			<img src="assets\images\at-logo-clients.png" alt="" />
		</div>
		<div class="slide">
			<img src="assets\images\sealed-logo-clients.png" alt="" />
		</div>
		<div class="slide">
			<img src="assets\images\asmoto-logo-clients.png" alt="" />
		</div>
		<div class="slide">
			<img src="assets\images\freshfish-logo-clients.png" alt="" />
		</div>
		<div class="slide">
			<img src="assets\images\johnson-logo-clients.png" alt="" />
		</div>
		<div class="slide">
			<img src="assets\images\tvb-logo-clients.png" alt="" />
		</div>
		<div class="slide">
			<img src="assets\images\rw-logo-clients.png" alt="" />
		</div>
	
		<div class="slide">
			<img src="assets\images\s7-logo-clients.png" alt="" />
		</div>
		<div class="slide">
			<img src="assets\images\at-logo-clients.png" alt="" />
		</div>
		<div class="slide">
			<img src="assets\images\sealed-logo-clients.png" alt="" />
		</div>
		<div class="slide">
			<img src="assets\images\asmoto-logo-clients.png" alt="" />
		</div>
		<div class="slide">
			<img src="assets\images\freshfish-logo-clients.png" alt="" />
		</div>
		<div class="slide">
			<img src="assets\images\johnson-logo-clients.png" alt="" />
		</div>
		<div class="slide">
			<img src="assets\images\tvb-logo-clients.png" alt="" />
		</div>
		<div class="slide">
			<img src="assets\images\rw-logo-clients.png" alt="" />
		</div>
		
		
	</div>
</div>
    </div>
            </div>
        </div>
    </div>
  </div>
  
  </div>
<!-- ------ -->





  <!-- brand carousel -->
    <!-- <div class="tns-brands">
      <div id="brands-home" class="autoplay  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal">
        <div class="item tns-item"> <img src="assets\images\client-1.png" alt="client" /></div>
        <div class="item tns-item"> <img src="assets\images\client-2.png" alt="client" /></div>
        <div class="item tns-item"> <img src="assets\images\client-3.png" alt="client" /></div>
        <div class="item tns-item"> <img src="assets\images\client-4.png" alt="client" /></div>
        <div class="item tns-item"> <img src="assets\images\client-5.png" alt="client" /></div>
        <div class="item tns-item"> <img src="assets\images\client-6.png" alt="client" /></div>

      </div>
    </div> -->
    <!-- ----- -->



<!-- logo carousel -->

    <!-- <section class=" logo-section" style="background-color:#f5f5f5;">
  <div class="container page-center ">
    <div class="logo-inner">
      

      <div class="logo-block">
        <div class="logo-block-inner responsive">
          
          <div>
            <div class="logo-item">
              <img src="assets\images\clients-as-moto.png" alt="Logo HIGH RES_Enginuity Podcast Group">
            </div>
          </div>
          
          <div>
            <div class="logo-item">
              <img src="assets\images\clients-tyrezone.png" alt="logo_NSH">
            </div>
          </div>

          <div>
            <div class="logo-item">
              <img src="assets\images\clients-sealed.png" alt="Logo_PRX">
            </div>
          </div>
         
          
          <div>
            <div class="logo-item">
              <img src="assets\images\clients-freshfish.png" alt="logo_KUER">
            </div>
          </div>
          
          <div>
            <div class="logo-item">
              <img src="assets\images\clients-header_railwire.png" alt="logo_WFAE">
            </div>
          </div>
          
          <div>
            <div class="logo-item">
              <img src="assets\images\clients-johnson-lifts.png" alt="logo_WAMU">
            </div>
          </div>
          
          <div>
            <div class="logo-item">
              <img src="assets\images\clients-at-Logo.png" alt="logo_WUWM">
            </div>
          </div>
          
          <div>
            <div class="logo-item">
              <img src="assets\images\clients-s7-logo.png" alt="logo_NSH">
            </div>
          </div>
          
          <div>
            <div class="logo-item">
              <img src="assets\images\clients-tvb.png" alt="logo_KNKX">
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- ------- -->



  <!-- <section class="customer-logos slider">
    <div class="slide"><img src="assets\images\client-5.png">
    </div>

    <div class="slide"><img src="assets\images\client-1.png">
    </div>

    <div class="slide"><img src="assets\images\client-3.png">
    </div>

    <div class="slide"><img src="assets\images\AT-Logo.png">
    </div>

    <div class="slide"><img src="assets\images\tvb-white.png">
    </div>

    <div class="slide"><img src="assets\images\sealed.png">
    </div>

    <div class="slide"><img src="assets\images\johnson-lifts-pvt-ltd.png">
    </div>

    <div class="slide"><img src="assets\images\freshfish-logo.png">
    </div>
    <div class="slide"><img src="assets\images\as-moto.png">
    </div>

  </section> -->


  <!-- animation script -->

<script>
  function reveal() {
  var reveals = document.querySelectorAll(".reveal");
  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 80;
    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll", reveal);

// To check the scroll position on page load
reveal();

function righttoleft() {
  var righttoleft = document.querySelectorAll(".righttoleft");
  for (var i = 0; i < righttoleft.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = righttoleft[i].getBoundingClientRect().top;
    var elementVisible = 80;
    if (elementTop < windowHeight - elementVisible) {
      righttoleft[i].classList.add("active");
    } else {
      righttoleft[i].classList.remove("active");      
    }
   
  }
  
}
window.addEventListener("scroll", righttoleft);

// To check the scroll position on page load
righttoleft();

function lefttoright() {
  var lefttoright = document.querySelectorAll(".lefttoright");
  for (var i = 0; i < lefttoright.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = lefttoright[i].getBoundingClientRect().top;
    var elementVisible = 80;
    if (elementTop < windowHeight - elementVisible) {
      lefttoright[i].classList.add("active");
    } else {
      lefttoright[i].classList.remove("active");      
    }
   
  }
  
}
window.addEventListener("scroll", lefttoright);

// To check the scroll position on page load
lefttoright();

</script>
<!-- animation script -->

<script>
  function reveal() {
  var reveals = document.querySelectorAll(".reveal");
  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 80;
    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll", reveal);

// To check the scroll position on page load
reveal();

function righttoleft() {
  var righttoleft = document.querySelectorAll(".righttoleft");
  for (var i = 0; i < righttoleft.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = righttoleft[i].getBoundingClientRect().top;
    var elementVisible = 80;
    if (elementTop < windowHeight - elementVisible) {
      righttoleft[i].classList.add("active");
    } else {
      righttoleft[i].classList.remove("active");      
    }
   
  }
  
}
window.addEventListener("scroll", righttoleft);

// To check the scroll position on page load
righttoleft();

function lefttoright() {
  var lefttoright = document.querySelectorAll(".lefttoright");
  for (var i = 0; i < lefttoright.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = lefttoright[i].getBoundingClientRect().top;
    var elementVisible = 80;
    if (elementTop < windowHeight - elementVisible) {
      lefttoright[i].classList.add("active");
    } else {
      lefttoright[i].classList.remove("active");      
    }
   
  }
  
}
window.addEventListener("scroll", lefttoright);

// To check the scroll position on page load
lefttoright();

</script>

<!-- carousel -->
<script>

$('.responsive').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    focusOnSelect: false,
    focusOnChange: false,
    accessibility: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

</script>


<!-- <script>
$(document).ready(function () {
  $(".customer-logos").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2500,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 1400,
        settings: {
          slidesToShow: 4
        }
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 3
        }
      },
      {
        breakpoint: 520,
        settings: {
          slidesToShow: 2
        }
      }
    ]
  });
});
</script> -->

  <!-- carousel -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
  <script type="module">
    var slider = tns({
      container: '#brands-home',
      items: 2,
      loop: true,
        autoplay: 2000,
        responsiveClass:true,
      speed: 1500,
      slideBy: 'page',
      autoplay: true,
      autoplayHoverPause: true,
      responsive: {
        490: {
          items: 3
        },
        992: {
          items: 4
        }
      }
    });
  </script> -->

<!-- ---- -->
















  <?php include 'common-files/footer.php'; ?>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js
https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>
<script>
    jQuery(document).ready(function($) {
            "use strict";
            //  TESTIMONIALS CAROUSEL HOOK
            $('#customers-testimonials').owlCarousel({
                loop: true,
                center: true,
                items: 3,
                margin: 0,
                autoplay: true,
                autoplaySpeed:2100,
                dots:false,
                
                autoplayTimeout: 8500,
                smartSpeed: 450,
                responsive: {
                  0: {
                    items: 1
                  },
                  768: {
                    items: 2
                  },
                  1170: {
                    items: 3
                  }
                }
            });
          });
</script>

<script>

/** @license
 * DHTML Snowstorm! JavaScript-based snow for web pages
 * Making it snow on the internets since 2003. You're welcome.
 * -----------------------------------------------------------
 * Version 1.44.20131208 (Previous rev: 1.44.20131125)
 * Copyright (c) 2007, Scott Schiller. All rights reserved.
 * Code provided under the BSD License
 * http://schillmania.com/projects/snowstorm/license.txt
 */

/*jslint nomen: true, plusplus: true, sloppy: true, vars: true, white: true */
/*global window, document, navigator, clearInterval, setInterval */

var snowStorm = (function(window, document) {

// --- common properties ---

this.autoStart = true;          // Whether the snow should start automatically or not.
this.excludeMobile = true;      // Snow is likely to be bad news for mobile phones' CPUs (and batteries.) Enable at your own risk.
this.flakesMax = 128;           // Limit total amount of snow made (falling + sticking)
this.flakesMaxActive = 64;      // Limit amount of snow falling at once (less = lower CPU use)
this.animationInterval = 50;    // Theoretical "miliseconds per frame" measurement. 20 = fast + smooth, but high CPU use. 50 = more conservative, but slower
this.useGPU = true;             // Enable transform-based hardware acceleration, reduce CPU load.
this.className = null;          // CSS class name for further customization on snow elements
this.excludeMobile = true;      // Snow is likely to be bad news for mobile phones' CPUs (and batteries.) By default, be nice.
this.flakeBottom = null;        // Integer for Y axis snow limit, 0 or null for "full-screen" snow effect
this.followMouse = false;        // Snow movement can respond to the user's mouse
this.snowColor = '#fff';        // Don't eat (or use?) yellow snow.
this.snowCharacter = '&bull;';  // &bull; = bullet, &middot; is square on some systems etc.
this.snowStick = true;          // Whether or not snow should "stick" at the bottom. When off, will never collect.
this.targetElement = null;      // element which snow will be appended to (null = document.body) - can be an element ID eg. 'myDiv', or a DOM node reference
this.useMeltEffect = true;      // When recycling fallen snow (or rarely, when falling), have it "melt" and fade out if browser supports it
this.useTwinkleEffect = false;  // Allow snow to randomly "flicker" in and out of view while falling
this.usePositionFixed = false;  // true = snow does not shift vertically when scrolling. May increase CPU load, disabled by default - if enabled, used only where supported
this.usePixelPosition = false;  // Whether to use pixel values for snow top/left vs. percentages. Auto-enabled if body is position:relative or targetElement is specified.

// --- less-used bits ---

this.freezeOnBlur = true;       // Only snow when the window is in focus (foreground.) Saves CPU.
this.flakeLeftOffset = 0;       // Left margin/gutter space on edge of container (eg. browser window.) Bump up these values if seeing horizontal scrollbars.
this.flakeRightOffset = 0;      // Right margin/gutter space on edge of container
this.flakeWidth = 8;            // Max pixel width reserved for snow element
this.flakeHeight = 8;           // Max pixel height reserved for snow element
this.vMaxX = 5;                 // Maximum X velocity range for snow
this.vMaxY = 4;                 // Maximum Y velocity range for snow
this.zIndex = 0;                // CSS stacking order applied to each snowflake

// --- "No user-serviceable parts inside" past this point, yadda yadda ---

var storm = this,
features,
// UA sniffing and backCompat rendering mode checks for fixed position, etc.
isIE = navigator.userAgent.match(/msie/i),
isIE6 = navigator.userAgent.match(/msie 6/i),
isMobile = navigator.userAgent.match(/mobile|opera m(ob|in)/i),
isBackCompatIE = (isIE && document.compatMode === 'BackCompat'),
noFixed = (isBackCompatIE || isIE6),
screenX = null, screenX2 = null, screenY = null, scrollY = null, docHeight = null, vRndX = null, vRndY = null,
windOffset = 1,
windMultiplier = 2,
flakeTypes = 6,
fixedForEverything = false,
targetElementIsRelative = false,
opacitySupported = (function(){
  try {
    document.createElement('div').style.opacity = '0.5';
  } catch(e) {
    return false;
  }
  return true;
}()),
didInit = false,
docFrag = document.createDocumentFragment();

features = (function() {

  var getAnimationFrame;

  /**
   * hat tip: paul irish
   * http://paulirish.com/2011/requestanimationframe-for-smart-animating/
   * https://gist.github.com/838785
   */

  function timeoutShim(callback) {
    window.setTimeout(callback, 1000/(storm.animationInterval || 20));
  }

  var _animationFrame = (window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.oRequestAnimationFrame ||
      window.msRequestAnimationFrame ||
      timeoutShim);

  // apply to window, avoid "illegal invocation" errors in Chrome
  getAnimationFrame = _animationFrame ? function() {
    return _animationFrame.apply(window, arguments);
  } : null;

  var testDiv;

  testDiv = document.createElement('div');

  function has(prop) {

    // test for feature support
    var result = testDiv.style[prop];
    return (result !== undefined ? prop : null);

  }

  // note local scope.
  var localFeatures = {

    transform: {
      ie:  has('-ms-transform'),
      moz: has('MozTransform'),
      opera: has('OTransform'),
      webkit: has('webkitTransform'),
      w3: has('transform'),
      prop: null // the normalized property value
    },

    getAnimationFrame: getAnimationFrame

  };

  localFeatures.transform.prop = (
    localFeatures.transform.w3 || 
    localFeatures.transform.moz ||
    localFeatures.transform.webkit ||
    localFeatures.transform.ie ||
    localFeatures.transform.opera
  );

  testDiv = null;

  return localFeatures;

}());

this.timer = null;
this.flakes = [];
this.disabled = false;
this.active = false;
this.meltFrameCount = 20;
this.meltFrames = [];

this.setXY = function(o, x, y) {

  if (!o) {
    return false;
  }

  if (storm.usePixelPosition || targetElementIsRelative) {

    o.style.left = (x - storm.flakeWidth) + 'px';
    o.style.top = (y - storm.flakeHeight) + 'px';

  } else if (noFixed) {

    o.style.right = (100-(x/screenX*100)) + '%';
    // avoid creating vertical scrollbars
    o.style.top = (Math.min(y, docHeight-storm.flakeHeight)) + 'px';

  } else {

    if (!storm.flakeBottom) {

      // if not using a fixed bottom coordinate...
      o.style.right = (100-(x/screenX*100)) + '%';
      o.style.bottom = (100-(y/screenY*100)) + '%';

    } else {

      // absolute top.
      o.style.right = (100-(x/screenX*100)) + '%';
      o.style.top = (Math.min(y, docHeight-storm.flakeHeight)) + 'px';

    }

  }

};

this.events = (function() {

  var old = (!window.addEventListener && window.attachEvent), slice = Array.prototype.slice,
  evt = {
    add: (old?'attachEvent':'addEventListener'),
    remove: (old?'detachEvent':'removeEventListener')
  };

  function getArgs(oArgs) {
    var args = slice.call(oArgs), len = args.length;
    if (old) {
      args[1] = 'on' + args[1]; // prefix
      if (len > 3) {
        args.pop(); // no capture
      }
    } else if (len === 3) {
      args.push(false);
    }
    return args;
  }

  function apply(args, sType) {
    var element = args.shift(),
        method = [evt[sType]];
    if (old) {
      element[method](args[0], args[1]);
    } else {
      element[method].apply(element, args);
    }
  }

  function addEvent() {
    apply(getArgs(arguments), 'add');
  }

  function removeEvent() {
    apply(getArgs(arguments), 'remove');
  }

  return {
    add: addEvent,
    remove: removeEvent
  };

}());

function rnd(n,min) {
  if (isNaN(min)) {
    min = 0;
  }
  return (Math.random()*n)+min;
}

function plusMinus(n) {
  return (parseInt(rnd(2),10)===1?n*-1:n);
}

this.randomizeWind = function() {
  var i;
  vRndX = plusMinus(rnd(storm.vMaxX,0.2));
  vRndY = rnd(storm.vMaxY,0.2);
  if (this.flakes) {
    for (i=0; i<this.flakes.length; i++) {
      if (this.flakes[i].active) {
        this.flakes[i].setVelocities();
      }
    }
  }
};

this.scrollHandler = function() {
  var i;
  // "attach" snowflakes to bottom of window if no absolute bottom value was given
  scrollY = (storm.flakeBottom ? 0 : parseInt(window.scrollY || document.documentElement.scrollTop || (noFixed ? document.body.scrollTop : 0), 10));
  if (isNaN(scrollY)) {
    scrollY = 0; // Netscape 6 scroll fix
  }
  if (!fixedForEverything && !storm.flakeBottom && storm.flakes) {
    for (i=0; i<storm.flakes.length; i++) {
      if (storm.flakes[i].active === 0) {
        storm.flakes[i].stick();
      }
    }
  }
};

this.resizeHandler = function() {
  if (window.innerWidth || window.innerHeight) {
    screenX = window.innerWidth - 16 - storm.flakeRightOffset;
    screenY = (storm.flakeBottom || window.innerHeight);
  } else {
    screenX = (document.documentElement.clientWidth || document.body.clientWidth || document.body.scrollWidth) - (!isIE ? 8 : 0) - storm.flakeRightOffset;
    screenY = storm.flakeBottom || document.documentElement.clientHeight || document.body.clientHeight || document.body.scrollHeight;
  }
  docHeight = document.body.offsetHeight;
  screenX2 = parseInt(screenX/2,10);
};

this.resizeHandlerAlt = function() {
  screenX = storm.targetElement.offsetWidth - storm.flakeRightOffset;
  screenY = storm.flakeBottom || storm.targetElement.offsetHeight;
  screenX2 = parseInt(screenX/2,10);
  docHeight = document.body.offsetHeight;
};

this.freeze = function() {
  // pause animation
  if (!storm.disabled) {
    storm.disabled = 1;
  } else {
    return false;
  }
  storm.timer = null;
};

this.resume = function() {
  if (storm.disabled) {
     storm.disabled = 0;
  } else {
    return false;
  }
  storm.timerInit();
};

this.toggleSnow = function() {
  if (!storm.flakes.length) {
    // first run
    storm.start();
  } else {
    storm.active = !storm.active;
    if (storm.active) {
      storm.show();
      storm.resume();
    } else {
      storm.stop();
      storm.freeze();
    }
  }
};

this.stop = function() {
  var i;
  this.freeze();
  for (i=0; i<this.flakes.length; i++) {
    this.flakes[i].o.style.display = 'none';
  }
  storm.events.remove(window,'scroll',storm.scrollHandler);
  storm.events.remove(window,'resize',storm.resizeHandler);
  if (storm.freezeOnBlur) {
    if (isIE) {
      storm.events.remove(document,'focusout',storm.freeze);
      storm.events.remove(document,'focusin',storm.resume);
    } else {
      storm.events.remove(window,'blur',storm.freeze);
      storm.events.remove(window,'focus',storm.resume);
    }
  }
};

this.show = function() {
  var i;
  for (i=0; i<this.flakes.length; i++) {
    this.flakes[i].o.style.display = 'block';
  }
};

this.SnowFlake = function(type,x,y) {
  var s = this;
  this.type = type;
  this.x = x||parseInt(rnd(screenX-20),10);
  this.y = (!isNaN(y)?y:-rnd(screenY)-12);
  this.vX = null;
  this.vY = null;
  this.vAmpTypes = [1,1.2,1.4,1.6,1.8]; // "amplification" for vX/vY (based on flake size/type)
  this.vAmp = this.vAmpTypes[this.type] || 1;
  this.melting = false;
  this.meltFrameCount = storm.meltFrameCount;
  this.meltFrames = storm.meltFrames;
  this.meltFrame = 0;
  this.twinkleFrame = 0;
  this.active = 1;
  this.fontSize = (10+(this.type/5)*10);
  this.o = document.createElement('div');
  this.o.innerHTML = storm.snowCharacter;
  if (storm.className) {
    this.o.setAttribute('class', storm.className);
  }
  this.o.style.color = storm.snowColor;
  this.o.style.position = (fixedForEverything?'fixed':'absolute');
  if (storm.useGPU && features.transform.prop) {
    // GPU-accelerated snow.
    this.o.style[features.transform.prop] = 'translate3d(0px, 0px, 0px)';
  }
  this.o.style.width = storm.flakeWidth+'px';
  this.o.style.height = storm.flakeHeight+'px';
  this.o.style.fontFamily = 'arial,verdana';
  this.o.style.cursor = 'default';
  this.o.style.overflow = 'hidden';
  this.o.style.fontWeight = 'normal';
  this.o.style.zIndex = storm.zIndex;
  docFrag.appendChild(this.o);

  this.refresh = function() {
    if (isNaN(s.x) || isNaN(s.y)) {
      // safety check
      return false;
    }
    storm.setXY(s.o, s.x, s.y);
  };

  this.stick = function() {
    if (noFixed || (storm.targetElement !== document.documentElement && storm.targetElement !== document.body)) {
      s.o.style.top = (screenY+scrollY-storm.flakeHeight)+'px';
    } else if (storm.flakeBottom) {
      s.o.style.top = storm.flakeBottom+'px';
    } else {
      s.o.style.display = 'none';
      s.o.style.bottom = '0%';
      s.o.style.position = 'fixed';
      s.o.style.display = 'block';
    }
  };

  this.vCheck = function() {
    if (s.vX>=0 && s.vX<0.2) {
      s.vX = 0.2;
    } else if (s.vX<0 && s.vX>-0.2) {
      s.vX = -0.2;
    }
    if (s.vY>=0 && s.vY<0.2) {
      s.vY = 0.2;
    }
  };

  this.move = function() {
    var vX = s.vX*windOffset, yDiff;
    s.x += vX;
    s.y += (s.vY*s.vAmp);
    if (s.x >= screenX || screenX-s.x < storm.flakeWidth) { // X-axis scroll check
      s.x = 0;
    } else if (vX < 0 && s.x-storm.flakeLeftOffset < -storm.flakeWidth) {
      s.x = screenX-storm.flakeWidth-1; // flakeWidth;
    }
    s.refresh();
    yDiff = screenY+scrollY-s.y+storm.flakeHeight;
    if (yDiff<storm.flakeHeight) {
      s.active = 0;
      if (storm.snowStick) {
        s.stick();
      } else {
        s.recycle();
      }
    } else {
      if (storm.useMeltEffect && s.active && s.type < 3 && !s.melting && Math.random()>0.998) {
        // ~1/1000 chance of melting mid-air, with each frame
        s.melting = true;
        s.melt();
        // only incrementally melt one frame
        // s.melting = false;
      }
      if (storm.useTwinkleEffect) {
        if (s.twinkleFrame < 0) {
          if (Math.random() > 0.97) {
            s.twinkleFrame = parseInt(Math.random() * 8, 10);
          }
        } else {
          s.twinkleFrame--;
          if (!opacitySupported) {
            s.o.style.visibility = (s.twinkleFrame && s.twinkleFrame % 2 === 0 ? 'hidden' : 'visible');
          } else {
            s.o.style.opacity = (s.twinkleFrame && s.twinkleFrame % 2 === 0 ? 0 : 1);
          }
        }
      }
    }
  };

  this.animate = function() {
    // main animation loop
    // move, check status, die etc.
    s.move();
  };

  this.setVelocities = function() {
    s.vX = vRndX+rnd(storm.vMaxX*0.12,0.1);
    s.vY = vRndY+rnd(storm.vMaxY*0.12,0.1);
  };

  this.setOpacity = function(o,opacity) {
    if (!opacitySupported) {
      return false;
    }
    o.style.opacity = opacity;
  };

  this.melt = function() {
    if (!storm.useMeltEffect || !s.melting) {
      s.recycle();
    } else {
      if (s.meltFrame < s.meltFrameCount) {
        s.setOpacity(s.o,s.meltFrames[s.meltFrame]);
        s.o.style.fontSize = s.fontSize-(s.fontSize*(s.meltFrame/s.meltFrameCount))+'px';
        s.o.style.lineHeight = storm.flakeHeight+2+(storm.flakeHeight*0.75*(s.meltFrame/s.meltFrameCount))+'px';
        s.meltFrame++;
      } else {
        s.recycle();
      }
    }
  };

  this.recycle = function() {
    s.o.style.display = 'none';
    s.o.style.position = (fixedForEverything?'fixed':'absolute');
    s.o.style.bottom = 'auto';
    s.setVelocities();
    s.vCheck();
    s.meltFrame = 0;
    s.melting = false;
    s.setOpacity(s.o,1);
    s.o.style.padding = '0px';
    s.o.style.margin = '0px';
    s.o.style.fontSize = s.fontSize+'px';
    s.o.style.lineHeight = (storm.flakeHeight+2)+'px';
    s.o.style.textAlign = 'center';
    s.o.style.verticalAlign = 'baseline';
    s.x = parseInt(rnd(screenX-storm.flakeWidth-20),10);
    s.y = parseInt(rnd(screenY)*-1,10)-storm.flakeHeight;
    s.refresh();
    s.o.style.display = 'block';
    s.active = 1;
  };

  this.recycle(); // set up x/y coords etc.
  this.refresh();

};

this.snow = function() {
  var active = 0, flake = null, i, j;
  for (i=0, j=storm.flakes.length; i<j; i++) {
    if (storm.flakes[i].active === 1) {
      storm.flakes[i].move();
      active++;
    }
    if (storm.flakes[i].melting) {
      storm.flakes[i].melt();
    }
  }
  if (active<storm.flakesMaxActive) {
    flake = storm.flakes[parseInt(rnd(storm.flakes.length),10)];
    if (flake.active === 0) {
      flake.melting = true;
    }
  }
  if (storm.timer) {
    features.getAnimationFrame(storm.snow);
  }
};

this.mouseMove = function(e) {
  if (!storm.followMouse) {
    return true;
  }
  var x = parseInt(e.clientX,10);
  if (x<screenX2) {
    windOffset = -windMultiplier+(x/screenX2*windMultiplier);
  } else {
    x -= screenX2;
    windOffset = (x/screenX2)*windMultiplier;
  }
};

this.createSnow = function(limit,allowInactive) {
  var i;
  for (i=0; i<limit; i++) {
    storm.flakes[storm.flakes.length] = new storm.SnowFlake(parseInt(rnd(flakeTypes),10));
    if (allowInactive || i>storm.flakesMaxActive) {
      storm.flakes[storm.flakes.length-1].active = -1;
    }
  }
  storm.targetElement.appendChild(docFrag);
};

this.timerInit = function() {
  storm.timer = true;
  storm.snow();
};

this.init = function() {
  var i;
  for (i=0; i<storm.meltFrameCount; i++) {
    storm.meltFrames.push(1-(i/storm.meltFrameCount));
  }
  storm.randomizeWind();
  storm.createSnow(storm.flakesMax); // create initial batch
  storm.events.add(window,'resize',storm.resizeHandler);
  storm.events.add(window,'scroll',storm.scrollHandler);
  if (storm.freezeOnBlur) {
    if (isIE) {
      storm.events.add(document,'focusout',storm.freeze);
      storm.events.add(document,'focusin',storm.resume);
    } else {
      storm.events.add(window,'blur',storm.freeze);
      storm.events.add(window,'focus',storm.resume);
    }
  }
  storm.resizeHandler();
  storm.scrollHandler();
  if (storm.followMouse) {
    storm.events.add(isIE?document:window,'mousemove',storm.mouseMove);
  }
  storm.animationInterval = Math.max(20,storm.animationInterval);
  storm.timerInit();
};

this.start = function(bFromOnLoad) {
  if (!didInit) {
    didInit = true;
  } else if (bFromOnLoad) {
    // already loaded and running
    return true;
  }
  if (typeof storm.targetElement === 'string') {
    var targetID = storm.targetElement;
    storm.targetElement = document.getElementById(targetID);
    if (!storm.targetElement) {
      throw new Error('Snowstorm: Unable to get targetElement "'+targetID+'"');
    }
  }
  if (!storm.targetElement) {
    storm.targetElement = (document.body || document.documentElement);
  }
  if (storm.targetElement !== document.documentElement && storm.targetElement !== document.body) {
    // re-map handler to get element instead of screen dimensions
    storm.resizeHandler = storm.resizeHandlerAlt;
    //and force-enable pixel positioning
    storm.usePixelPosition = true;
  }
  storm.resizeHandler(); // get bounding box elements
  storm.usePositionFixed = (storm.usePositionFixed && !noFixed && !storm.flakeBottom); // whether or not position:fixed is to be used
  if (window.getComputedStyle) {
    // attempt to determine if body or user-specified snow parent element is relatlively-positioned.
    try {
      targetElementIsRelative = (window.getComputedStyle(storm.targetElement, null).getPropertyValue('position') === 'relative');
    } catch(e) {
      // oh well
      targetElementIsRelative = false;
    }
  }
  fixedForEverything = storm.usePositionFixed;
  if (screenX && screenY && !storm.disabled) {
    storm.init();
    storm.active = true;
  }
};

function doDelayedStart() {
  window.setTimeout(function() {
    storm.start(true);
  }, 20);
  // event cleanup
  storm.events.remove(isIE?document:window,'mousemove',doDelayedStart);
}

function doStart() {
  if (!storm.excludeMobile || !isMobile) {
    doDelayedStart();
  }
  // event cleanup
  storm.events.remove(window, 'load', doStart);
}

// hooks for starting the snow
if (storm.autoStart) {
  storm.events.add(window, 'load', doStart, false);
}

return this;

}(window, document));


</script>


</body>

</html>