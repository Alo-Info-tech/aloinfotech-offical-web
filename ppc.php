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

/* 
@media (max-width: 768px) {
 
 #cssmenu {
     display: flex;
     padding: 0px;
   }
} */
.body{
  font-family: poppins;
}
.btn-primary:focus {
    color: #fff;
    background-color: #0b5ed7;
    border-color: #0a58ca;
    box-shadow: none !important;
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
.breadcrumbs-custom-path {
    text-align: center;
    display: inline-block;}
ul {
    margin: 0;
    padding: 0;
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
    /* font-weight: 500; */
    font-style: normal;
    font-stretch: normal;
    line-height: 1.3;
    letter-spacing: normal;
    }
/* 
.bgppc{

  background: url(assets/images/background.png) no-repeat center; 

 background-size: cover;
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 -ms-background-size: cover;
 min-height: 450px;


} */

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
  font-size: 37px;
    /* font-weight: 500; */
    color: #1a7eb3 !important;
}

p.content {
    text-align: justify;
}
.counters{
    background:rgba(249,223,250)!important;
    padding: 23px;
    min-height: 173px!important;
    transition: all 0.3s ease-out 0s;
    border-radius: 4px;
    font-family: 'Poppins';
font-style: normal;
font-weight: 580;
font-size: 14px;

}


.countersmeasuring{
  background:rgb(215,239,250)!important;
    padding: 23px;
    min-height: 173px!important;
    transition: all 0.3s ease-out 0s;
    border-radius: 4px;
    font-family: 'Poppins';
font-style: normal;
font-weight: 580;
font-size: 14px;
}

.countersquality{
  background:rgb(233,220,247)!important;

    padding: 23px;
    min-height: 173px!important;
    transition: all 0.3s ease-out 0s;
    border-radius: 4px;
    font-family: 'Poppins';
font-style: normal;
font-weight: 580;
font-size: 14px;
}
.countersconversion{
  background:rgb(252,223,220)!important;
    padding: 23px;
    min-height: 173px!important;
    transition: all 0.3s ease-out 0s;
    border-radius: 4px;
    font-family: 'Poppins';
font-style: normal;
font-weight: 580;
font-size: 14px;
}
.countersvisibility{
  background:rgb(252,252,214)!important;
    padding: 23px;
    min-height: 173px!important;
    transition: all 0.3s ease-out 0s;
    border-radius: 4px;
    font-family: 'Poppins';
font-style: normal;
font-weight: 580;
font-size: 14px;
}

.countersoutside{
  background:rgb(220,253,223)!important;
    padding: 23px;
    min-height: 173px!important;
    transition: all 0.3s ease-out 0s;
    border-radius: 4px;
    font-family: 'Poppins';
font-style: normal;
font-weight: 580;
font-size: 14px;
}

.countersdeep{
  background:rgba(222,225,225)!important;
    padding: 23px;
    min-height: 173px!important;
    transition: all 0.3s ease-out 0s;
    border-radius: 4px;
    font-family: 'Poppins';
font-style: normal;
font-weight: 580;
font-size: 14px;
}

.card{
      border-radius: 10px;
      height: 180px;
    }
    .numberCircle {
      border-radius: 50%;
      width: 36px;
      height: 36px;
      padding: 8px;
      color: rgba(59, 154, 217, 0.61);
      background: rgba(59, 154, 217, 0.13);
      border: 1.12963px solid rgba(59, 154, 217, 0.16);
      text-align: center;
    }

    .card:hover {
      background: linear-gradient(120.45deg, #0B5281 0%, #3B9AD9 95.77%);
      color: #FFFFFF;
    }

    .card:hover .numberCircle {
      background: #FFFFFF;
      color: #267AB2;
      border: 1.12963px solid rgba(59, 154, 217, 0.16);
    }
    .ppc{
       color: #000000;
       font-weight: 700;}


       .timers {
  font-size: 30px;
  font-weight: 700;
  color: #060606;
  
}

p.count-text {
  text-transform: uppercase;
  color: #060606;
  font-size: 16px;
  font-weight: 580;
}


.counters:hover {
  background:rgba(247,174,249)!important;
}
.countersmeasuring:hover {
  background:rgba(149,216,249)!important;
}
.countersquality:hover {
  background:rgba(198,149,252)!important;

}
.countersconversion:hover {
  background:rgba(253,154,140)!important;
}
.countersvisibility:hover {
  background:rgba(252,252,138)!important;
}
.countersoutside:hover {
  background:rgb(168,252,177)!important;
}
.countersdeep:hover {
  background:rgba(159,160,160)!important;
}



.counters:hover .timers {
  color:black;
}

.counters:hover p.count-text {
  color: black;
}
@media screen and (min-width:300px) and (max-width:767px) {
    
.about-banner {
    min-height: 280px;
}
.contentheading {
      font-size: 26px;
}
span.heading {
    font-size: 26px;
   
}
.quatation{
  font-size: 12px;
}
.counters { 
    min-height: 0 !important;
}
.countersmeasuring{
  min-height: 0 !important;
}
.countersquality{
  min-height: 0 !important;
}
.countersconversion{
  min-height: 0 !important;
}
.countersvisibility{
  min-height: 0 !important;
}
.countersoutside{
  min-height: 0 !important;
}
.countersdeep{
  min-height: 0 !important;
}

}

@media screen and (min-width:768px) and (max-width:991px) {
/* @media (max-width: 991px) { */
    .w3l-breadcrumb {
    padding-top: 130px;
  }

  h3.title-.mb-2 {
    font-size: 23px;
    font-weight: 600;
    text-align: center;
}


  .timers {
    font-size: 35px;
  }

  p.count-text {
    font-size: 13px;
  }

  /* .counters {
    border-right: none;
    min-height: 100px !important;
  } */
 
.counters {
    border-right: none;
    border-radius: 10px;
    /* background: none; */
    min-height:203px !important;
}
.countersmeasuring {
    border-right: none;
    border-radius: 10px;
    /* background: none; */
    min-height:203px !important;
}
.countersquality{
    border-right: none;
    border-radius: 10px;
    /* background: none; */
    min-height:203px !important;
}
.countersconversion{
    border-right: none;
    border-radius: 10px;
    /* background: none; */
    min-height:203px !important;
}
.countersvisibility {
    border-right: none;
    border-radius: 10px;
    /* background: none; */
    min-height:203px !important;
}
.countersoutside{
    border-right: none;
    border-radius: 10px;
    /* background: none; */
    min-height:203px !important;
}
.countersdeep{
    border-right: none;
    border-radius: 10px;
    /* background: none; */
    min-height:203px !important;
}
span.heading {
  font-size: 24px;
}
.contentheading {
      font-size: 26px;
}
.quatation {
    font-size: 12px;
}



}

@media (max-width: 480px) {
  p.count-text {
    font-size: 13px;
    line-height: 20px;
    margin-top: 10px;
  }
  h3.title-.mb-2 {
    font-size: 23px;
    font-weight: 600;
    text-align: center;
}
}



    @media (max-width:990px) {
.card{
   box-shadow: none;
   background-color: none;
   border: none;
 }
.ppc .img-fluid{
min-height: 80px;
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
    <li class="breadcrumb-item active" aria-current="page">PPC</li>
  </ol>
</nav>
            </div>
        </div> 
    </section>




 

    

    <section class="py-1 mt-2">
        <div class="container py-md-2 py-1">
        
            <div class="row align-items-center justify-content-between">
            
           
                <div class="col-lg-7 about-2-secs-left">
                <h2 class=" contentheading mb-2 "><b>Pay Per Click <span class="heading contentheading">Advertising</b></span></h2>
                <p class="quatation mt-2">
                <span style="margin-left: 50px;"> PPC Advertising is on a roll these days. It is one of the most effective advertising strategies of the Internet world, which has spread its wings brilliantly! It is one of the most effective ways to reach your target audience, have business with them and get an increased ROI in return. We at ALO InfoTech are bedecked to a dedicated, professional and qualified workforce that is especially linked with the department of PPC management only. A dedicated staff that works day and night just to make sure that your PPC advertisement turns into a huge success. We don’t just believe in making promises, but fulfilling them as well.
                    </p>
                </div>
                <div class="col-lg-5 about-2-secs-right mt-lg-0 mt-3">
                    <img src="assets\images\ppc-sec.png" alt="ppc-img" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

<div style="margin: 3px auto; display: block; text-align:center;">
</div>

<h2 class="contentheading text-center mb-2"><b>Process of Pay Per Click <span class="heading contentheading">Advertising</b></span></h2>


<div class="container-fluid mb-5 bgppc">
            <div class="container">
  <div class="pt-2">
                <div class="row text-center mt-2">
                    <div class="col-md-3 mt-2">
                        <div class="counters">
                            <div class="timers">01</div>
                            <p class="count-text mt-3">Diverse Strategy</p>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2">
                        <div class="countersmeasuring">
                            <div class="timers">02</div>
                            <p class="count-text mt-3">Measuring Keyword 
Intent</p>
                        </div>
                    </div>
                    <div class="col-md-3  mt-2">
                        <div class="countersquality">
                            <div class="timers" >03</div>
                            <p class="count-text mt-3">Quality Score Best 
Practices</p>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2">
                        <div class="countersconversion border-right-0">
                            <div class="timers">04</div>
                            <p class="count-text mt-3">Conversion and 
Monetization</p>
                        </div>
                    </div>
                </div>
            </div>
          

                <div class="row text-center mt-2 mb-4">
                    <div class="col-md-3 mt-2">
                        <div class="countersvisibility">
                            <div class="timers">05</div>
                            <p class="count-text mt-3">Visibility Across 
Multiple Platforms</p>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2">
                        <div class="countersoutside">
                            <div class="timers">06</div>
                            <p class="count-text mt-3">Outside the box 
testing</p>
                        </div>
                    </div>
                    <div class="col-md-3 mt-2">
                        <div class="countersdeep">
                            <div class="timers">07</div>
                            <p class="count-text mt-3">Deep review of 
analytics data</p>
                        </div>
                    </div>
                </div>
            </div>
           

            </div>






















<?php include 'common-files/footer.php'; ?>

</body>

</html>