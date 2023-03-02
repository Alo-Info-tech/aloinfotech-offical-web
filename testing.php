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

*{
  padding: 0px;
  margin: 0px;
  box-sizing: border-box;
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
ul {
    margin: 0;
    padding: 0;
}
.color{
    color: #3493ce;
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
.card{
    background: #FFFFFF;
    box-shadow: 0px -4px 4px #3493CE;
}


/* .background{
    background-image: url(./assets/images/background\.png);
} */




@media screen and (min-width: 300px) and (max-width: 768px){
.quatation {
  margin-top: -50px !important;
  font-size:12px !important;
}
.contentheading {
      font-size: 28px;
        }
        .col-xl-6.col-lg-6.col-md-12.col-sm-12.mt-5.testcontent {
    margin-top: -44px !important;
}
    
    .about-banner {
        min-height: 280px;
    }
    

}
@media screen and (min-width: 768px) and (max-width: 990px){
.quatation {
  margin-top: -50px !important;
  
}
.image{
  margin-left:120px;
}
.card.p-4.mt-3.mb-3 {
    min-height: 333px;
}
p.text-dark.text-justify.mt-5.text.quatation {
    margin-top: -56px !important;
}

}

@media (min-width:990px) and (max-width:1200px){
  .card.p-4.mt-3.mb-3 {
    min-height:309px;
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
    <li class="breadcrumb-item active" aria-current="page">Testing</li>
  </ol>
</nav>
            </div>
        </div> 
    </section>



    
<div class="container mt-3">
<h2 class="text-center fw-bolder contentheading mt-2"><b>Our Unique Testing <span class="color">Just For you</span></b></h2>
    <div class="row">
  
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <img class="img-fluid image" src="assets/images/testing.jpg" alt="Advertising Social Media Marketing">
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 mt-5 testcontent">
       
            <p class="text-dark text-justify mt-5 text quatation">We, as testers, are aware of the various types of Software
                Testing like manual and automation testing.We executes
                a program with the aim of finding errors. To make our 
                software perform well it should be error-free. If testing is 
                done successfully it will remove all the errors from the software.</p>
        </div>
    </div>
</div>





<section class="background">
    <div class="container  mb-3">
        <h2 class="text-center fw-bolder contentheading"><b>Our Testing <span class="color">Process</span></b></h2>
      
  <div class="row">
    <div class="col-md-5 col-lg-5">
      <div class="card p-4 mt-3 mb-3">
        <div class="row">
        <div class="col">
        <img src="assets\images\manual-testing.png" class="img-fluid  rounded-start px-2" alt="...">
        </div>
        <div class="col">
        <h5 class="card-title fw-bold mt-3">Manual <span class="color">Testing</span> </h5>  
      </div>
      </div>
  
    <div class="row">
    <p class="card-text test  mt-2 quatation">Our QA analysts execute tests one-by-one in
                    an individual manner. The purpose of manual
                    testing is to catch bugs and feature issues 
                  before a software application goes live.</p>
    </div>
    </div>
  </div>
<div class="col-md-2 col-lg-2">

</div>
  <div class="col-md-5 col-lg-5">
      <div class="card p-4 mt-3 mb-3" >
        <div class="row">
        <div class="col">
        <img src="assets\images/automation.png" class="img-fluid  rounded-start px-2" alt="...">
        </div>
        <div class="col">
        <h5 class="card-title fw-bold mt-3">Automation <span class="color">Testing</span> </h5>  
      </div>
      </div>
  
    <div class="row">
    <p class="card-text test mt-2 quatation">Our testers writes test scripts which automate 
                  test execution. Test scripts are written in code 
                  like Java, JavaScript, Python, or C#. It 
                  dramatically improves upon the results of 
                  manual testing.</p>
    </div>
    </div>
  </div>
  

</div>
</div>
</section>





<?php include 'common-files/footer.php'; ?>

</body>

</html>