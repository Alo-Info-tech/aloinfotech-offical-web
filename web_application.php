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
.body{
    font-family: poppins;
}
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
.quatation {
    font-size: 16px;
    line-height: 23px;
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

p.content {
    text-align: justify;
}
.our-services{
        margin-top: 75px;
        padding: 0 15px;
        min-height: 198px;
        text-align: center;
        border-radius: 10px;
        background-color: #fff;
        transition: all .4s ease-in-out;
        box-shadow: 0 0 25px 0 rgba(20,27,202,.17)
    }
    .our-services .icon{
        margin-bottom: -21px;
        transform: translateY(-50%);
        text-align: center
    }
    .our-services:hover h4, .our-services:hover p{
        color: #fff
    }
    .speedup:hover{
        box-shadow: 0 0 25px 0 rgba(20,27,201,.05);
        cursor: pointer;
        background-image: linear-gradient(-45deg, #fb0054 0%, #f55b2a 100%)
    }
    .settings:hover{
        box-shadow: 0 0 25px 0 rgba(20,27,201,.05);
        cursor: pointer;
        background-image: linear-gradient(-45deg, #34b5bf 0%, #210c59 100%)
    }
    .privacy:hover{
        box-shadow: 0 0 25px 0 rgba(20,27,201,.05);
        cursor: pointer;
        background-image: linear-gradient(-45deg, #3615e7 0%, #44a2f6 100%)
    }
    .backups:hover{
        box-shadow: 0 0 25px 0 rgba(20,27,201,.05);
        cursor: pointer;
        background-image: linear-gradient(-45deg, #fc6a0e 0%, #fdb642 100%)
    }
    .ssl:hover{
        box-shadow: 0 0 25px 0 rgba(20,27,201,.05);
        cursor: pointer;
        background-image: linear-gradient(-45deg, #8d40fb 0%, #5a57fb 100%)
    
    }
    .database:hover{
        box-shadow: 0 0 25px 0 rgba(20,27,201,.05);
        cursor: pointer;
        background-image: linear-gradient(-45deg, #27b88d 0%, #22dd73 100%)
    }
 
    .card{
        box-shadow: none !important;
    }
    .goals{
        font-size: 20px;
        font-weight: bolder;
    } 
     
    @media screen and (min-width: 320px) and (max-width: 768px) {
        .contentheading {
      font-size: 28px;
        }
        .quatation {
    font-size: 12px;
        }
    
    .about-banner {
        min-height: 280px;
    }
   

    }

        @media (min-width:768px) and (max-width:991px) {
            .our-services {
                height: 291px !important;
            }
        }

        @media (min-width:992px) and (max-width:1199px) {
            .our-services {
                height: 371px;
            }
            .w3l-breadcrumb {
    padding-top: 130px;
  }
        }

        @media (min-width:1200px) {
         
         .our-services {
             height: 355px;
             font-size: 15px;
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
    <li class="breadcrumb-item active" aria-current="page">Web Application</li>
  </ol>
</nav>
            </div>
        </div> 
    </section>


    <div class="container">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 servicepic">
        <img src="assets\images\web_application.png" class="img-fluid p-5" alt="service">
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 pt-5 servicetext">
            <h2 class="mt-5 ps-2 fw-bolder lh-base contentheading">Web <span class="color">Application</span></h2>
            <p class="pt-0 quatation">As a company and beautiful family, we are equipped
                with a dedicated & tenured web application creative 
                team. They scrutinize all the processes to bring a notable
                output with high quality and standards. Creating a well
                seasoned web application continuously obtaining new
                intuitions into what makes ideal applications</p>
        </div>
    </div>
</div>

<div class="container">
<div class="row">
<h2 class="mt-5 ps-2 fw-bolder lh-base text-center contentheading">Our  <span class="color">Web Application</span> Process</h2>
            <div class="col-md-6 col-lg-3">
                <div class="box">
                    <div class="our-services settings" style="border-top: 2px solid #2A5E8B;box-shadow: 0px 4px 20px 2px rgba(59, 154, 217, 0.3);">
                        <div class="icon"> <img src="assets\images\plan.png" style="height:90px;"> </div>
                        <h4 class="goals">Planning</h4>
                        <p class="quatation">Any web application development strategy
                            must start with understanding the client's
                            objectives and provide a better and more
                            comfortable work experience. We have work
                            based on Agile techniques which break the
                            commodities into small incremental builds..</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="box">
                    <div class="our-services speedup" style="border-top: 2.35701px solid #FB0054;box-shadow: 0px 4px 20px 2px rgba(59, 154, 217, 0.3);">
                        <div class="icon"><img src="assets\images\Group 80.png" style="height:100px;"> </div>
                        <h4 class="goals">Designing </h4>
                        <p class="quatation">We are expertise in customized design, layout,
                            and function can fulfill all our client's
                            requirements and demands We make sure
                            the system works well on all devices, and
                            performance is fast for users on any connection.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="box">
                    <div class="our-services privacy" style="border-top: 2.35701px solid #393CEA;box-shadow: 0px 4px 20px 2px rgba(59, 154, 217, 0.3);">
                        <div class="icon"> <img src="assets\images\Group 60.png" style="height:100px;"> </div>
                        <h4 class="goals">Developing</h4>
                        <p class="quatation">We meet our client's requirement with
                            unique features, innovative design, Secure
                            Sockets Layer (SSL), encrypted & creativity.
                            Our testing team will fix and rectify all the
                            bugs and errors to make it flawless</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="box">
                    <div class="our-services backups" style="border-top: 2.35701px solid #FC8923;box-shadow: 0px 4px 20px 2px rgba(59, 154, 217, 0.3);">
                        <div class="icon"><img src="assets\images\Group 61.png" style="height:100px;"> </div>
                        <h4 class="goals">Testing</h4>
                        <p class="quatation">The professional testing team helps us
                            deliver a predictable result at all times. They
                            make sure all applications conform to the
                            latest web standards, thereby ensuring fast
                            web page uploading, increased usability,
                            and the best web design interfaces.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!-- </div> --> 
<div class="container">
    <div class="row">
    <h2 class="mt-5 ps-2 fw-bolder lh-base contentheading text-center">Technologies we are <span class="color"> expert</span> in</h2>
        <div class="row mt-3">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 noborder">
            <div class="card">
            <img src="assets\images\html.png" class="card-img-top h-50 w-50 m-auto resize" alt="HTML">
            <div class="card-body">
                <p class="card-text text-center">Html</p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 noborder">
            <div class="card">
            <img src="assets\images\css.png" class="card-img-top h-50 w-50 m-auto resizesm" alt="Css">
            <div class="card-body">
                <p class="card-text text-center">Css</p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 noborder">
            <div class="card">
            <img src="assets\images\bootstrap.png" class="card-img-top h-50 w-50 m-auto resize" alt="Bootstrap">
            <div class="card-body">
                <p class="card-text text-center">Bootstrap</p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 noborder">
            <div class="card">
            <img src="assets\images\javascript.png" class="card-img-top h-50 w-50 m-auto resize" alt="Java script">
            <div class="card-body">
                <p class="card-text text-center">Java script</p>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 noborder">
            <div class="card">
            <img src="assets\images\java.png" class="card-img-top h-50 w-50 m-auto" alt="Java">
            <div class="card-body">
                <p class="card-text text-center">Java</p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 noborder">
            <div class="card">
            <img src="assets\images\node_js.png" class="card-img-top h-50 w-50 m-auto" alt="Nodejs">
            <div class="card-body">
                <p class="card-text text-center">Nodejs</p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 noborder">
            <div class="card">
            <img src="assets\images\dot_net.png" class="card-img-top h-50 w-50 m-auto" alt="Microsoft.Net">
            <div class="card-body">
                <p class="card-text text-center">Microsoft.Net</p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 noborder">
            <div class="card">
            <img src="assets\images\PHP-logo-img.png" class="card-img-top h-50 w-50 m-auto" alt="Php">
            <div class="card-body">
                <p class="card-text text-center">Php</p>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 noborder">
            <div class="card">
            <img src="assets\images\react.png" class="card-img-top h-50 w-50 m-auto resizesm" alt="React">
            <div class="card-body">
                <p class="card-text text-center">React</p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 noborder">
            <div class="card">
            <img src="assets\images\angular.png" class="card-img-top h-50 w-50 m-auto" alt="Angular">
            <div class="card-body">
                <p class="card-text text-center">Angular</p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 noborder">
            <div class="card">
            <img src="assets\images\mango.png" class="card-img-top h-50 w-50 m-auto" alt="MongoDB">
            <div class="card-body">
                <p class="card-text text-center">MongoDB</p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 noborder">
            <div class="card">
            <img src="assets\images\graph.png" class="card-img-top h-50 w-50 m-auto resize" alt="GraphQL">
            <div class="card-body">
                <p class="card-text text-center">GraphQL</p>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 noborder">
            <div class="card">
            <img src="assets\images\aws.png" class="card-img-top h-50 w-50 m-auto" alt="Aws">
            <div class="card-body">
                <p class="card-text text-center">Aws</p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 noborder">
            <div class="card">
            <img src="assets\images\devoops.png" class="card-img-top h-50 w-50 m-auto" alt="Devops">
            <div class="card-body">
                <p class="card-text text-center">Devops</p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 noborder">
            <div class="card">
            <img src="assets\images\elasticsearch.png" class="card-img-top h-50 w-50 m-auto resize" alt="Elasticsearch">
            <div class="card-body">
                <p class="card-text text-center">Elasticsearch</p>
            </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 noborder">
            <div class="card">
            <img src="assets\images\gatsby.png" class="card-img-top h-50 w-50 m-auto resize" alt="Gatsby">
            <div class="card-body">
                <p class="card-text text-center">Gatsby</p>
            </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- <script>
      window.onscroll = function() {myFunction()};

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
      if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
      } else {
        header.classList.remove("sticky");
      }
    }
</script> -->


<?php include 'common-files/footer.php'; ?>

</body>

</html>