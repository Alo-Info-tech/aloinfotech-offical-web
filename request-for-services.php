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
.color{
    color:  #3493ce;
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
.icon.card {
    background: #3493CE;
    
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
.border border-info{
    color: #3493CE;

}
.text{
    text-align: justify;
}

.text-align {
    padding: 20px;
}
.row.border.border-info.mx-2 {
    min-height: 190px;
}
.text-align.followup{
    padding: 15px;
}

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
/* h2.contentheading {
    margin-top: 52px;
} */
.about-banner {
  background: url(assets/images/bgbanners.jfif) no-repeat center; 

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
input[type=text],
    input[type=password],
    /* input[type=email], */
    input[type=file],
    input[type=number] {
        width: 100%;
        padding: 8px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #FFFFFF;
        border: 1px solid rgba(0, 0, 0, 0.1);
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
    }

    label.mulibold{
      font-weight: 600!important;
    color: #003768!important;
    }
    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none; 
    margin: 0; 
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

    .select {
  position: relative;
  display: inline-block;
  width: 100%;
  color: #555;
}
.select select {
  display: inline-block;
  width: 100%;
  margin: 0;
  padding: .5rem 2.25rem .5rem 1rem;
  line-height: 1.5;
  color: #555;
  background-color: #eee;
  border: 0;
  border: 1px solid #D0D0D0;
  border-radius: .25rem;
  cursor: pointer;
  outline: 0;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
select.classic{

   width: 100%;
        padding:8px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #FFFFFF;
        border: 1px solid rgba(0, 0, 0, 0.1);
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
}
/* Undo the Firefox inner focus ring */
.select select:focus:-moz-focusring {
  color: transparent;
  text-shadow: 0 0 0 #000;
}
/* Dropdown arrow */
.select:after {
  position: absolute;
  top: 50%;
  right: 1.25rem;
  display: inline-block;
  content: "";
  width: 0;
  height: 0;
  margin-top: -.15rem;
  pointer-events: none;
  border-top: .35rem solid;
  border-right: .35rem solid transparent;
  border-bottom: .35rem solid transparent;
  border-left: .35rem solid transparent;
}

/* Hover state */
/* Uncomment if you need it, but be aware of the sticky iOS states.
.select select:hover {
  background-color: #ddd;
}
*/

/* Focus */
.select select:focus {
  box-shadow: 0 0 0 .075rem #fff, 0 0 0 .2rem #0074d9;
}

/* Active/open */
.select select:active {
  color: #fff;
  background-color: #0074d9;
}

/* Hide the arrow in IE10 and up */
.select select::-ms-expand {
  display: none;
}

/* Media query to target Firefox only */
@-moz-document url-prefix() {
  /* Firefox hack to hide the arrow */
  .select select {
    text-indent: 0.01px;
    text-overflow: '';
    padding-right: 1rem;
  }

  /* <option> elements inherit styles from <select>, so reset them. */
  .select option {
    background-color: white;
  }
}

@media (max-width: 991px) {
  .whyus{
    display: none;
  }
}

/* IE9 hack to hide the arrow */
@media screen and (min-width:0\0) {
  .select select {
    z-index: 1;
    padding: .5rem 1.5rem .5rem 1rem;
  }
  .select:after {
    z-index: 5;
  }
  .select:before {
    position: absolute;
    top: 0;
    right: 1rem;
    bottom: 0;
    z-index: 2;
    content: "";
    display: block;
    width: 1.5rem;
    background-color: #eee;
  }
  .select select:hover,
  .select select:focus,
  .select select:active {
    color: #555;
    background-color: #eee;
  }
}

@media screen and (min-width:300px) and (max-width:768px)  
{
  
.contentheading {
      font-size: 28px;
    }
    .quatation {
    font-size: 12px !important;
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
    <li class="breadcrumb-item active" aria-current="page">Request For Services</li>
  </ol>
</nav>
            </div>
        </div> 
    </section> 


  <div class="container mt-5 mb-2">
    <div class="row strengthy mt-5">
      <div class="col-lg-6 col-md-12 ">
        <h2 class="contentheading "><span class="color"><b>Request For</span> Services</b></h2>
       
        <form class="mt-3" action="service.php" method="post" name="form" class="signin-form"
                                    autocomplete="off">
                                    <div class="input-grids">
                                    <label class="mulibold">Name*</label>
                                    <input type="text" name="name" id="name"
                                        class="contact-input"  onblur="date()" onkeypress="person1()" required onkeydown="return /[a-z]/i.test(event.key)"/>
                                        <div id="div1"></div>

                                            <label class="mulibold">Email*</label>
                                            <input type="text"  name="email"  onblur="validate()" onkeypress="person2()" id="Email" />
                                            <div id="div2"></div> 
                                            
                                            <label class="mulibold">Company Name*</label>
                                            <input type="text" name="companyname" id="company name" onblur="company()" onkeypress="person3()" required onkeydown="return /[a-z]/i.test(event.key)"/>
                                            <div id="div3"></div> 

                                            <label class="mulibold">Country Code*</label>
                                            <select class="classic" placeholder="Select Country"  name="countrycode" value="<?php echo !empty($postData['position'])?$postData['position']:''; ?>">
                                            <option>Select Country</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="React.js">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bosnia Herzegovina">Bosnia Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso ">Burkina Faso </option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Android.java">Android.java</option>
                                            <option value="Cape Verde Islands">Cape Verde Islands</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic ">Central African Republic </option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Cyprus North">Cyprus North</option>
                                            <option value="Cyprus South">Cyprus South</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="NestJS">NestJS</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Node.js">Node.js</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guinea - Bissau">Guinea - Bissau</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea South">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="React.js">React.js</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macao">Macao</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Micronesia">Micronesia</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Namibia">Namibia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherlands">Netherlands</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Islands">Norfolk Islands</option>
                                            <option value="Northern Marianas">Northern Marianas</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Palau">Palau</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Android.java">Android.java</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome">Sao Tome</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Serbia">Serbia</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovak Republic">Slovak Republic</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="St. Helena">St. Helena</option>
                                            <option value="St. Kitts">St. Kitts</option>
                                            <option value="St. Lucia">St. Lucia</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikstan">Tajikstan</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vatican City">Vatican City</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands - British">Virgin Islands - British</option>
                                            <option value="Virgin Islands - US">Virgin Islands - US</option>
                                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                                            <option value="Yemen (North)">Yemen (North)</option>
                                            <option value="Yemen (South)">Yemen (South)</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                           
                                          </select>
                                     

                           <label class="mulibold">Phone Number*</label>
                                        <input type="number"id="number" name="phonenumber" onblur="time()" onkeypress="person5()"  minlength="10" maxlength="10"
                                         oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        class="contact-input" required />
                                        <div id="div5"></div> 

                                        <!-- <div id="div4"></div> <br> -->
                                        <!-- <input type="text" for="classic" id="classic" class="form-select" placeholder="Position Applying For" name="Position Applying For" required> -->

                                        <label class="mulibold">Interested Services*</label>
                                        <select class="classic mt-3" placeholder="Select interested Services" name="interestedservices" value="<?php echo !empty($postData['experience'])?$postData['experience']:''; ?>">
                                            <option value="Select inrerested Services">Select interested Services</option>
                                            <option value="Mobile Application Development">Mobile Application Development</option>
                                            <option value="Web Application Development">Web Application Development</option>
                                            <option value="Blockchain Development">Blockchain Development</option>
                                            <option value="UI/UX Designing">UI/UX Designing</option>
                                            <option value="Digital Marketing & SEO Services">Digital Marketing & SEO Services</option>
                                            <option value="Mobile App Marketing">Mobile App Marketing</option>
                                            <option value="IT Staffing">IT Staffing</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        <label class="mulibold">Budget*</label>
                                        <select class="classic mt-3" placeholder="Select Budget" name="budget" value="<?php echo !empty($postData['experience'])?$postData['experience']:''; ?>">
                                            <option value="Select Budget">Select  Budget</option>
                                            <option value="less than $10,000">less than $10,000</option>
                                            <option value="$10,000 to $20,000">$10,000 to $20,000</option>
                                            <option value="$20,000 to $30,000">$20,000 to $30,000</option>
                                            <option value="$30,000 +">$30,000 +</option>
                                        </select>


                                   <label class="mulibold">Your Requirements*</label>
                                <textarea name="message" class="form-control" rows="4" name="message" onblur="clock()" onkeypress="person8()" id="message" placeholder="Type your message here"
                                        required></textarea>
                                        <div id="div8"></div> 
                                <button type="submit" name="submit" class="btn btn-primary mt-4 mb-5"><a href="" style="color:white;">Send</a> </button>
                                </form>


      </div>
      </div>
      <div class="col-lg-6 col-md-12 text-center mt-4 whyus">
      <h2 class="contentheading "><b>Why <span class="color"> Us?</b></span></h2>
        <img class="img-fluid img-fluid-index  careers" src="assets\images\why-us.png" alt="info">
      </div>
    </div>
  </div>



  <script>
$(function(){
  $("input[name='numbers']").on('input', function (e) {
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
                    document.getElementById("div1").innerHTML="Please enter your name";
                    document.getElementById("div1").style.color="Red";
                    
                }
                else
                {
                    document.getElementById("div1").innerHTML="";
                }
              }
              function person1(){
                document.getElementById("div1").innerHTML="";
              }
</script>

<script>
       
       function validate()
            {
             
              var Email = document.getElementById("Email").value;
                
                var patcheck = new RegExp("^[a-z0-9]");
                if(Email==="")
                {
                  document.getElementById("div2").innerHTML="Please enter your email address";
                  document.getElementById("div2").style.color="Red";
                }
                else if(Email.indexOf("@")> -1)
                {
                    document.getElementById("div2").innerHTML="";
                }
                 else
                {
                 
                    document.getElementById("div2").innerHTML="Enter the valid email address";
                    document.getElementById("div2").style.color="Red";
                    
                }


              }
              function person2(){
                document.getElementById("div2").innerHTML="";
              }
  </script>

<script>
    function company()
            {
              var name = document.getElementById("company name").value;
              if(name==="")
                {
                    document.getElementById("div3").innerHTML="Please enter your company name";
                    document.getElementById("div3").style.color="Red";
                    
                }
                else
                {
                    document.getElementById("div3").innerHTML="";
                }
              }
              function person3(){
                document.getElementById("div3").innerHTML="";
              }
</script>

<script>
function time()
            {
              var number = document.getElementById("number").value;
              if(number==="")
                {
                    document.getElementById("div5").innerHTML="Please enter your phone number";
                    document.getElementById("div5").style.color="Red";
                    
                }
                else
                {
                    document.getElementById("div5").innerHTML="";
                }
              }
              function person5(){
                document.getElementById("div5").innerHTML="";
              }
              

</script>





<script>
function clock()
            {
              var message = document.getElementById("message").value;
              if(message==="")
                {
                    document.getElementById("div8").innerHTML="Please enter your message";
                    document.getElementById("div8").style.color="Red";
                    
                }
                else
                {
                    document.getElementById("div8").innerHTML="";
                }
              }
              function person8(){
                document.getElementById("div8").innerHTML="";
              }


</script>

<?php include 'common-files/footer.php'; ?>

</body>

</html>