<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALO INFO-TECH</title>
    <link rel="icon" type="image/x-icon" href="assets\images\icon.jpg">


    <?php include 'common-files/link.php'; ?>
    <link src=" https://cdnjs.cloudflare.com/ajax/libs/three.js/87/three.js">
    <link src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/617753/ThreeOrbitControls.js">
    <link src="https://rawgit.com/spite/THREE.MeshLine/master/src/THREE.MeshLine.js">


    <style>


    body {
        font-family: poppins;
    }
    a.bread {
    text-decoration: none;
    color: black;
    font-weight: 500;
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
.w3l-breadcrumb {
    display: block;
    margin: 0 auto;
    z-index: 100;
    padding-top: 167px;
    z-index: 99;
}
    .contactcard {
        width:70%;
        /* height: 250px !important; */
        background: #FFFFFF;
        border-top: 13px solid #3493CE !important;
        border-left: 1px solid #3493CE !important;
        border-right: 1px solid #3493CE !important;
        /* border-top: 10px solid #3493CE !important; */
        border-radius: 30px !important;
        justify-content:end;
        /* margin-left:100px; */
        border-bottom: none;
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
      font-size: 30px;
    font-weight: 500;
    font-style: normal;
    font-stretch: normal;
    line-height: 1.3;
    letter-spacing: normal;
    }
    .careerheading {
    font-weight: 700;
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
    input, select {
    line-height: 30px !important;
    padding: 5px;
    width: 100%;
    margin-bottom: 30px;
    background: transparent;
    border: white;
    /* border-bottom: 1px solid black; */
}
    .card {
        border-radius: 10px;
        min-height:450px;
        
    }

    input.fname.mt-3 {
    border-color: #3493CE;
}
    
input.mt-3 {
    border-color:#3493CE;
}


    .contact_form {
        box-sizing: border-box;

        position: absolute;
        width: 150px;
        height: 250px;
        left: 683px;
        /* top: 596px; */

        background: #FFFFFF;
        border: 1px solid #3493CE;
        border-radius: 30px;
    }

    .form-select{
border-bottom: 1px solid #3493CE !important;
box-shadow: none !important;

display: block;
    width: 100%;
    padding: 0.375rem 2.25rem 0.375rem 0.75rem;
    -moz-padding-start: calc(0.75rem - 3px);
    font-size: 1rem;
  
    /* color: #212529; */
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    border-width: 0px 0px 1px 0px !important;
    border-radius: 0px !important;
    background-color: #FFFFFF;
    color: rgba(0, 0, 0, 0.5) !important;
    }
    .form-select option{
        color: black !important;
        background-color: white !important;
    }


p.content {
    font-family: 'Poppins';
font-style: normal;
font-weight: 500;
font-size: 19px;
line-height: 35px;
text-align: justify;
color: #000000;

}


    @media (max-width: 991px) {
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

        p.content {
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    font-size: 16px;
    line-height: 35px;
    text-align: justify;
    color: #000000;
}

        .counters {
            border-right: none;
            min-height: 100px !important;
        }

        .counters {
            border-right: none;
            border-radius: 10px;
            /* background: none; */
            min-height: 139px !important;
        }
        .row.text-center.mt-5 {
    margin-top: 12px !important;
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

    @media (max-width:768px) {
        .contactcard {
    width: 97%;
        }
    }

    @media (max-width:990px) {
        .card {
            box-shadow: none;
            background-color: none;
            border: none;
        }

        .ppc .img-fluid {
            min-height: 80px;
        }
        .contentheading {
      font-size: 23px;
    }

    }
    .card.shadow-inner.contactcard.mx-5.ms-auto.mt-5 {
    background: #FFFFFF;
    border: 1px solid #3493CE;
    border-radius: 30px;
}

    .button1 {
        text-align: initial !important;
    }

    form {
        background: rgba(0, 0, 0, 0.7);
    }

    input,
    select {
        line-height: 30px !important;
        padding: 5px;
        width: 100%;
        margin-bottom: 30px;
        background: transparent;
        border: white;
        border-bottom: 1px solid black;
    }

    input::placeholder {
        color:rgba(0, 0, 0, 0.5);
    }

    option:focus {
        border: none;
    }

    option {
        background: black;
        border: none;
    }

    .border1 {

        border-radius: 5px !important;
        background-color: #00b2f8 !important;

    }

    .wid {
        width: 100% !important;
    }

    :focus-visible {
        outline: -webkit-focus-ring-color auto 0px;
    }

    .st0 {
        fill: blue !important;
    }

    .svg-wrapper {
        opacity: 999 !important;
        display: unset !important;
        position: relative !important;
        width: 80vh !important;
        height: 80% !important;
        left: 0 !important;
        right: 0;
        top: 10%;

    }
.files{
    border-bottom: none !important;
}
    .bgcontact {

        background: url(assets/images/background.png) no-repeat center;

        /* background-size: contain !important; */
        background-size: cover !important;
        /* -moz-background-size: cover!important;
-o-background-size: cover !important;
-ms-background-size: cover !important; */
        min-height: 300px;


    }

    form {
        background: white;
        color: black;
    }

    @media screen and (min-width:300px) and (max-width:768px) {
    
    .about-banner {
        min-height: 280px;
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
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                    aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" class="bread">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Careers</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>



   



    <section class="py-1 mt-2">
        
    <div class="container">
    <div class="row text-center mt-5">
        <div class="col-md-6">
            <h3 class="text-center careerheading">Node.js Developer</h3>
            <img src="assets\images\node-career.jpg" class="img-fluid mt-5" alt="flutter">
            <p class="quatation mt-3">We are looking for a highly capable Node.js developer to optimize our web-based application performance. You will be collaborating with our front-end application developers, designing back- end components, and integrating data storage and protection solutions.</p>
        </div>

                  <div class="col-md-6 mb-5">
                    <h3 class="mb-2 text-center contentheading">DROP YOUR  <span class="heading">INFORMATION</span></h3>
                    <div class="card shadow-inner contactcard mx-5 ms-auto mt-5">
                        <div class="contactclass text-center p-3">
                            <form name="RegForm" method="POST" autocomplete="off" action="developers.php" enctype="multipart/form-data">
                                <input class="fname mt-3" type="text" name="name"  placeholder=" Name" id="name"
                                        class="contact-input"  onblur="date()" onkeypress="person1()" required onkeydown="return /[a-z]/i.test(event.key)"/><br>
                                <div id="nameerr" ></div>

                                <input type="email" class="mt-3" name="email" placeholder="E-mail" name="email"  onblur="validate()" onkeypress="person2()" id="Email" /><br>
                                <div id="mailerr" ></div>

                                <input id="number" class="mt-3" type="text" name="phoneno" placeholder="Phone Number" onblur="time()" onkeypress="person5()" placeholder="Enter Phone" minlength="10" maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        class="contact-input" required />
                                <div id="numbererr"></div>
                            
                                <div class="mb-3">
      
      <select id="Select" class="form-select mt-2" name="Applyforpost"  placeholder="Apply For post">
        <option>Apply For Post</option>
        <option>Node.js Developer</option>
  
      </select>
    </div>
    <div class="mb-3">
      
      <select id="Select" class="form-select mt-2" name="experience" placeholder="Apply For post">
        <option>Experience</option>
        <option>Fresher</option>
        <option>More than 1 Year</option>
   
      </select>
    </div>             
                            
          <div class="file">
            <input type="file" name="file" class="files" >
          </div>                  
                        
                            <div class=" button1 pt-3 text-center">
                                <button type="submit"name="submit" value="Apply Now"  class="btn btn-primary border1" onclick="formsubmit()">Apply Now</button>
                            </div>
                            </form>
                        </div>
                    </div>

                </div>
                
            </div></div>

    </section>



    
    <script>
$(function(){
  $("input[name='message']").on('input', function (e) {
    $(this).val($(this).val().replace(/[^0-9]/g, ''));
  });
});
</script>

    <script>
    function date()
            {
              var name = document.getElementById("name").value;
              if(name==="")
                {
                    document.getElementById("nameerr").innerHTML="Please enter your name";
                    document.getElementById("nameerr").style.color="Red";
                    
                }
                else
                {
                    document.getElementById("nameerr").innerHTML="";
                }
              }
              function person1(){
                document.getElementById("nameerr").innerHTML="";
              }
</script>

<script>
       
       function validate()
            {
             
              var Email = document.getElementById("Email").value;
                
                var patcheck = new RegExp("^[a-z0-9]");
                if(Email==="")
                {
                  document.getElementById("mailerr").innerHTML="Please enter your email address";
                  document.getElementById("mailerr").style.color="Red";
                }
                else if(Email.indexOf("@")> -1)
                {
                    document.getElementById("mailerr").innerHTML="";
                }
                 else
                {
                 
                    document.getElementById("mailerr").innerHTML="Enter the valid email address";
                    document.getElementById("mailerr").style.color="Red";
                    
                }


              }
              function person2(){
                document.getElementById("mailerr").innerHTML="";
              }
  </script>
  <script>
function time()
            {
              var number = document.getElementById("number").value;
              if(number==="")
                {
                    document.getElementById("numbererr").innerHTML="Please enter your phone number";
                    document.getElementById("numbererr").style.color="Red";
                    
                }
                else
                {
                    document.getElementById("numbererr").innerHTML="";
                }
              }
              function person5(){
                document.getElementById("numbererr").innerHTML="";
              }
              
</script>

    <?php include 'common-files/footer.php'; ?>

</body>

</html>