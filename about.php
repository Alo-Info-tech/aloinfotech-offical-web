<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ALO Info-tech</title>
  <link rel="icon" type="image/x-icon" href="assets\images\icon.jpg">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <?php include 'common-files/link.php'; ?>
  <style>

.body{
    font-family: poppins;
}
.btn-primary:focus {
    color: #fff;
    background-color: #0b5ed7;
    border-color: #0a58ca;
    box-shadow: none !important;
}
.bannerhead{
    margin-top: 100px !important;
    font-size: 47px;
   }
   a.bread {
    text-decoration: none;
    color: black;
    font-weight: 500;
}
      .color{
          color: #26A44A;
      }
      a {
    /* color: var(--bs-link-color); */
    text-decoration: none;
    color: #26A44A;
}
a#button {
  font-size: 12px !important;
}

.breadcrumb-item{
    text-decoration: none;
}
.breadcrumb-item.active {
    color: #26A44A;

}
.breadcrumb-item+.breadcrumb-item::before {
    color: #26A44A;
    float: left;
    padding-right: var(--bs-breadcrumb-item-padding-x);
    content: var(--bs-breadcrumb-divider, "/");
}
.bannerbg{
            background-image: url(assets/images/bgbanners.jfif);background-size: cover;
            background-repeat: no-repeat;
            /* width: 100%;min-height: 300px; */
            height: 308px;
          }
     
/* .banner-shade
{
  background-image: url(assets/images/abstract.svg);
    background-size: cover;
    background-repeat: no-repeat;
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 -ms-background-size: cover;
 min-height: 299px;
    
} */





.w3l-breadcrumb {
  display: block;
  margin: 0 auto;
  z-index: 100;
  padding-top: 167px;
  z-index: 99;
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
.quatation {
    font-size: 16px;
    line-height: 29px;
    text-align: justify;
}
.boldtext{
    font-size: 19px;
}
.contentheading {
      font-size: 37px;
    font-weight: 500;
    font-style: normal;
    font-stretch: normal;
    line-height: 1.3;
    letter-spacing: normal;
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

.color{
    color: #3493CE;
}

.container-fluid.ourvalue {
    background: #F3F5FF;
    max-height: 300px !important;
}

.tab {
  float: left;
  /* width: 30%;
  height: 50px; */
  
}

.tab button {
  display: block;
  background-color: inherit;
  color: black;

  width: 90%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
  margin: 5%;
}
.text-center.tablinks{
  border-bottom: 1px solid rgba(52, 147, 206, 0.25);
}

.tab button.active {
  color:#3493CE;
  font-weight: bold;
}

.tabcontent {
  float: left;
  padding: 0px 12px;
  width: 100%;
  border-left: none;
  height: 400px;
 
}
.counter{
  
    /* background: linear-gradient(to right bottom,#fff 50%, #f9f9f9 51%); */
    text-align: center;
    /* width: 266px; */
    padding: 20px 0 0;
    margin: 0 auto;
    border-radius: 50px 0;
    /* box-shadow: 0 0 15px -5px rgba(0, 0, 0, 0.3); */
    overflow: hidden;
}
.counter .counter-icon{
    font-size: 40px;
    margin: 0 0 10px;
    line-height: 60px;
    font-weight: 700;
}
.counter h3{
    
    font-size: 18px;
    line-height: 36px;
    font-weight: 500;
    text-transform: capitalize;
    margin: 0 0 20px;
}
.counter .counter-value{
    
    background: linear-gradient(#000);
    font-size: 40px;
    font-weight: 700;
    line-height: 40px;
    padding: 7px 0 3px;
    
}
.quick{
    background: linear-gradient(180deg, #3493CE 0%, rgba(52, 147, 206, 0) 100%);
}
.facts{
    color: #FFF;
}
#counter:hover{
    
    background: linear-gradient(180deg, #3493CE 41.98%, rgba(103, 163, 201, 0) 100%);
    filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.5));
    border-radius: 40px 0px;
    color: #fff !important;
}
.row.heading h2 {
    color:#000;
    text-align: center;
    margin: 0 0 40px;
    padding-bottom: 20px;   
}
.positive{
  font-size: 19px;
  text-align: justify;
}
ul{
  margin:0;
  padding:0;
  list-style:none;
}
.heading.heading-icon {
    display: block;
}
.padding-lg {
	display: block;
	padding-top: 30px;
	padding-bottom: 30px;
}
.practice-area.padding-lg {
    padding-bottom: 55px;
    padding-top: 55px;
}
.practice-area .inner{ 
     border:1px solid #999999; 
	 text-align:center; 
	 margin-bottom:28px; 
	 padding:40px 25px;
}
.our-webcoderskull .cnt-block:hover {
    box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    border: 0;
}
.practice-area .inner h3{ 
    color:#3c3c3c; 
	font-size:24px; 
	font-weight:500;
	font-family: 'Poppins', sans-serif;
	padding: 10px 0;
}
.practice-area .inner p{ 
    font-size:14px; 
	line-height:22px; 
	font-weight:400;
}
.practice-area .inner img{
	display:inline-block;
}
.our-webcoderskull .cnt-block{ 
  min-height: 360px;
   width:100%; 
   background:fff; 
   padding:30px 20px; 
   text-align:center; 
   border:1px solid #d5d5d5;
   margin: 0 0 28px;
}
.our-webcoderskull .cnt-block figure{
   width:148px; 
   height:148px; 
   border-radius:100%; 
   display:inline-block;
   margin-bottom: 15px;
}
.our-webcoderskull .cnt-block img{ 
   width:148px; 
   height:148px; 
   border-radius:100%; 
}
.our-webcoderskull .cnt-block h3{ 
   color:#2a2a2a; 
   font-size:20px; 
   font-weight:500; 
   padding:6px 0;
   
}
.our-webcoderskull .cnt-block h3 a{
  text-decoration:none;
	color:#2a2a2a;
}
.our-webcoderskull .cnt-block h3 a:hover{
	color:#3493ce;
}
.our-webcoderskull .cnt-block p{ 
   color:#2a2a2a; 
   font-size:13px; 
   line-height:20px; 
   font-weight:400;
}
.our-webcoderskull .cnt-block .follow-us{
	margin:20px 0 20px;
  padding: 0px;
}
.our-webcoderskull .cnt-block .follow-us li{ 
    display:inline-block; 
	width:auto; 
margin:0 5px;
}
.our-webcoderskull .cnt-block .follow-us li .fa{ 
   font-size:24px; 
   color: #bfbfbf;
}
.our-webcoderskull .cnt-block .follow-us li .fa:hover{ 
   color:#3493ce;
}

@media screen and (max-width:990px)
{
    .counter{ margin-bottom: 40px; }
}


@media screen and (min-width:300px) and (max-width:768px)  {
    
    .team {
        padding-top: 0px;
    }
    .btn{
        padding:0px;
    }
    .img-fluid{
        width: 100% !important;
    }
    #logo-img{
        width: 200px;
        height: auto;
    }
.choose{
  font-size: 12px;
  line-height: 23px;
  text-align: justify;
}
.card.reason {
  font-family: poppins;
    border: 0px;
    box-shadow: rgb(0 0 0 / 35%) 0px 5px 15px;
    margin-top: 12px;
    margin-bottom: 10px;
}
.padding-lg {
	padding-top: 0px;
  padding-bottom: 0px !important;
}
.col-lg-6.col-md-12.col-sm-12.mt-5 {
    margin-top: 10px !important;
}
.row.mb-4.us {
    margin-top: -30px !important;
}
.row.heading h2 {
    padding-bottom: 0px !important;   
}
.about-banner {
    min-height: 280px;
}


    }

@media (max-width: 991px) {
    .w3l-breadcrumb {
    padding-top: 130px;
  }
  .positive{
  font-size: 12px !important;
  }
  .contentheading {
    font-size: 29px;
  }
  .quatation {
    font-size: 12px;
  }
  .text-center.mt-5 {
    margin-top: -70px !important;
}


}

@media (max-width:768px){
#ourvalue{
    display: none;
}
#ourvalues{
    display:block;
}

}

@media screen and (min-width:992px) and (max-width:1199px) {
  .positive{
  font-size: 15px !important;
  }

}


@media screen and (min-width:769px) and (max-width:1440px) {

#ourvalues{
    display:none;
}

}
@media screen and (min-width:1441px) and (max-width:1920px) {
  #ourvalues{
    display:none !important;
}

}
@media screen and (min-width:1921px) and (max-width: 4000px) {
  #ourvalues{
    display:none !important;
}

}

@media screen and (min-width:4001px) and (max-width: 6000px) {
  #ourvalues{
    display:none !important;
}

}

</style>

</head>

<body>
  <?php include 'common-files/head.php'; ?>





  <!-- <section class="about-banner">
      <div class="w3l-breadcrumb">
            <div class="container">
                <h3 class="inner-text-title  font-weight-bold mb-2">Grow with Alo</h3>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">About</li>
  </ol>
</nav>
            </div>
        </div> 
    </section> -->



<section class="about-banner">
      <div class="w3l-breadcrumb">
            <div class="container">
                <h3 class="inner-text-title  font-weight-bold mb-2">Grow with Alo</h3>
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php" class="bread">Home</a></li>
    <li class="breadcrumb-item" aria-current="page">About Us</li>
  </ol>
</nav>
            </div>
        </div> 
    </section>




    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12 mt-5">
          <div class="heading1">
          <h2 class="contentheading"><b>Welcome To<span class="color"> ALO INFO-TECH</b></span></h2>
        </div>

          <p  class="quatation text-indent"> ALO Groups is Leading IT Solution established in 2020.
             The company is located in Nagercoil, Kanyakumari district and was developed by ALO INFO TECH
            and We are a vibrant team of software development experts build innovative
            solutions for innovative companies. We deliver custom,end-to-end AI solutions 
            to help crush your business objectives and dominate the competition. No matter
            the complexity of your requirements, our highly experienced team has likely seen
            it before, solved it within our enterprise-grade secure infrastructure, and built the
            template – or can customize a solution just for you.</p>
          <p class="quatation text-indent">As a Software Developing Company, 
            we value your business first. Our mission is to set a standard for your business. We develop
            products based on your business with creative environment. We believe in investing our time
            to our client and build a authentic relationship. This is a Best platform to choose for your 
            digital solutions</p>
        </div>
        <div class=" col-lg-6 col-md-12 col-sm-12mt-5 ">
          <div class="text-center mt-5">
            <img class="img-fluid mt-5" src="assets\images\about_us.png" alt="info">
          </div>
          
        </div>
      </div>
  </div>


  <div class="container-fluid ourvalue">
        <div class="row" >
            <div style="margin-top: 15px; display:block;"></div>
            <h2 class="contentheading text-center"><b>Our<span class="color"> values</span></b></h2>
                <div class="container" id="ourvalue">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 tab ">
                            <div class="text-center px-5">
                                <button class="text-center tablinks" onclick="openTab(event, 'firstTab')" id="defaultOpen">
                                    <img  class="image-fluid tablinks" style="height:31px ;width:46px;" src="assets\images\our_history.png" alt="history-icon">
                                        Our History
                                </button>
                            </div>
                            <div class="text-center px-5">
                                <button class="text-center tablinks" onclick="openTab(event, 'secondTab')">
                                    <img class="image-fluid tablinks" style="height:31px ;width:46px;" src="assets\images\our_vision.png" alt="vission-icon">
                                        Our Vision
                                </button>
                            </div>
                            <div class="text-center px-5">
                                <button class="text-center tablinks" onclick="openTab(event, 'thirdTab')">
                                    <img class="image-fluid tablinks" style="height:31px ;width:46px;" src="assets\images\goal-setting" alt="mission-icon">
                                        Our Mission 
                                </button>
                            </div>           
                        </div>
        
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 px-5">
                            <div id="firstTab" class="tabcontent px-5">
                                <h3 class="value px-3 mt-3 text-center"><span class="color">History</span></h3>
                                <div class=" px-3"><p class="justify-content positive mt-4">
                                    <b>Alo infotech was started in the year
                                    of 2020 December with 3 members 
                                    and zero clients & now we are 45+ 
                                    employees with 75+ clients.</b></p>
                                </div>
                            </div>

                            <div id="secondTab" class="tabcontent px-5">
                                <h3 class="value  px-3 mt-3 text-center"><span class="color">Vission</span></h3>
                                <div class= "px-3"><p class="justify-content positive mt-4">
                                    <b>Our Vision is to be a globally reputed IT company 
                                    that to provide digital solutions to businesses
                                    with innovation and excellence.</b></p>
                                </div>
                            </div>

                            <div id="thirdTab" class="tabcontent px-5">
                                <h3 class="value  px-3 mt-3 text-center"><span class="color">Mission</span></h3>
                                <div class=" px-3"><p class="justify-content positive mt-4">
                                    <b>Our Mission is to make a positive  and difference in
                                    the businesses of our customers through the
                                    best possible way.</b></p>
                                </div>
                            </div> 
                        </div>

                        
                    </div>
                </div>

                
        <!-- mbl -->
    <div class="container mb-5" id="ourvalues">

<div class="row mb-4 us">
  <div class="col-lg-4 col-md-6 mb-lg-0">
    <!-- Card-->
    <div class="card reason">
      <div class="card-body reason">
      <h3 class="value px-3 mt-3 text-center fw-bolder"><span class="color">Our History</span></h3>
       <!-- <img  class="img-fluid"  src="assets\images\history-mblview.png" alt="history-icon"> -->
        <h5 class="choose">Alo infotech was started in the year of 2020 December with 3 members and zero clients & now we are 45+ employees with 75+ clients.</h5>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6  mb-lg-0">
    <!-- Card-->
    <div class="card reason">
      <div class="card-body reason">
      <h3 class="value px-3 mt-3 text-center fw-bolder"><span class="color"> Our Vision</span></h3>
       <!-- <img  class="img-fluid" src="assets\images\our_history.png" alt="history-icon"> -->
        <h5 class="choose">Our Vision is to be a globally reputed IT company that to provide digital solutions to businesses with innovation and excellence.</h5>
      </div>
    </div>
  </div>

  <div class="col-lg-4 col-md-6  mb-lg-0">
    <!-- Card-->
    <div class="card reason ">
      <div class="card-body reason ">
      <h3 class="value px-3 mt-3 text-center fw-bolder"><span class="color"> Our Mission </span></h3>
       <!-- <img  class="img-fluid"  src="assets\images\mission-mblview.png" alt="history-icon"> -->
        <h5 class="choose">Our Mission is to make a positive and difference in the businesses of our customers through the best possible way.</h5>
      </div>
    </div>
  </div>
 
</div>

</div>
<!-- ----- -->

                </div>
    </div>




                    
                <!-- <div class="container mb-5" id="accordion">
                    <div class="col-sm-12">

                    <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
    </div>
  </div>
</div>
                       

                      </div>
                </div> -->

        
  
<!-- &nbsp; -->
  <div class="container-fluid quick mb-2">
  <!-- <div style="margin-top:35px; display:block;"></div> -->
   
    <div class="container ">
      <div class="row">
      <div class="facts">
      <h2 class="text-center fw-bolder mt-4">Quick facts</h2>
    </div> 
          <div class="col-lg-3 col-md-6 count">
              <div class="counter" id="counter">
                  <div class="counter-icon">
                    <span class="counter-value">100 </span><span>+</span>
                  </div>
                  <h6>TOTAL PROJECTS</h6>
                  
              </div>
          </div>
          <div class="col-lg-3 col-md-6 count ">
              <div class="counter"id="counter">
                  <div class="counter-icon">
                    <span class="counter-value">75</span><span>+</span>
                  </div>
                  <h6>HAPPY CLIENTS</h6>
                  
              </div>
          </div>
          <div class="col-lg-3 col-md-6 count">
            <div class="counter"id="counter">
                <div class="counter-icon">
                  <span class="counter-value">45</span><span>+</span>
                </div>
                <h6>NO OF EMPLOYEES</h6>
                
            </div>
        </div>
        <div class="col-lg-3 col-md-6 count">
          <div class="counter"id="counter">
              <div class="counter-icon">
                <span class="counter-value">4</span>
              </div>
              <h6>AWARDS WON</h6>
              
          </div>
      </div>
      </div>
    </div>
  </div> 


  <!-- <section class="our-webcoderskull padding-lg">
  <div class="container">
    <div class="row heading heading-icon">
    <h2 class="contentheading"><b>Meet Our<span class="color"> Team</b></span></h2> 
    </div>
    <ul class="row">
      
      <li class="col-sm-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="assets\images\ratheesh.jpg" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">Natarajan B</a></h3>
            <span>Directors</span>
            <p>Learn successful business lessons from ALO.</p>
            <ul class="follow-us clearfix">
              <li><a href="https://www.facebook.com/ratheesh.ram.568" target="blank"><i class="fa fa-brands fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href=" https://instagram.com/ratheeshreo?igshid=YmMyMTA2M2Y=" target="blank"><i class="fa fa-brands fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-brands fa-twitter" aria-hidden="true" target="blank"></i></a></li>
              <li><a href="https://www.linkedin.com/in/natarajan-b-345178227" target="blank"><i class="fa fa-brands fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
     
      <li class="col-sm-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Zameel S</a></h3>
            <span>Directors</span>
            <p>Learn successful business lessons from ALO.</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-brands fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-brands fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-brands fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-brands fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
      
      <li class="col-sm-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
            <h3><a href="http://www.webcoderskull.com/">Nishanth R</a></h3>
            <span>Project Manager</span>
            <p>Learn successful business lessons from ALO.</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-brands fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-brands fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-brands fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-brands fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
     
      <li class="col-sm-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Balaji C</a></h3>
            <span>Project Manager</span>
            <p>Learn successful business lessons from ALO.</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-brands fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-brands fa-instagram" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-brands fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-brands fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
          </div>
      </li>
      
    </ul>
  </div>
</section> -->




  <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
 <script>
 $(document).ready(function(){
     $('.counter-value').each(function(){
         $(this).prop('Counter',0).animate({
             Counter: $(this).text()
         },{
             duration: 3500,
             easing: 'swing',
             step: function (now){
                 $(this).text(Math.ceil(now));
             }
         });
     });
 });
  
  function openTab(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();

    </script>
<script>
var coll = document.getElementsByClassName("collapsed");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>









<?php include 'common-files/footer.php'; ?>

</body>

</html>