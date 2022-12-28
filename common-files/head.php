<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<!-- Bootstrap 5 CSS -->
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css'>
<!-- Font Awesome CSS -->
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>
<!-- Google Fonts -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&display=swap'>
<!-- Additional CSS (Optional) -->
<link rel="stylesheet" href="css/style.css">

<style>
.mobile-btn {
    visibility: hidden;
}
@media screen and (min-width:300px) and (max-width:991px)  
{
  button.mobilebottom-btn.btn.btn-primary.mt-1.header-center
 {
  display: none;
 }
 .mobile-btn {
    visibility: visible;
}
i.fa.fa-angle-down {
    display: none;
}
i.fa.fa-angle-right.float-end {
    display: none !important;
}

}

@media screen and (min-width:992px) and (max-width:1400px) {
  i.fa.fa-angle-right.float-end {
    padding: 7px 1px;
}

}
 


@media screen and (min-width:300px) and (max-width:1400px)  
{
  body{
  overflow-x: hidden !important;
}
}
  


/* @media screen and (min-width:300px) and (max-width:1023px)  
{

} */
  
</style>

<!-- Bootstrap 5 JS -->


<!-- nav link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->





<script>
// on document ready
$(document).ready(function() {

// show/hide the mobile menu based on class added to container
$('.menu-icon').click(function() {
    $(this).parent().toggleClass('is-tapped');
    $('#hamburger').toggleClass('open');
});

// handle touch device events on drop down, first tap adds class, second navigates
$('.touch .sitenavigation li.nav-dropdown > a').on('touchend',
    function(e) {
        if ($('.menu-icon').is(':hidden')) {
            var parent = $(this).parent();
            $(this).find('.clicked').removeClass('clicked');
            if (parent.hasClass('clicked')) {
                window.location.href = $(this).attr('href');
            } else {
                $(this).addClass('linkclicked');

                // close other open menus at this level
                $(this).parent().parent().find('.clicked').removeClass('clicked');

                parent.addClass('clicked');
                e.preventDefault();
            }
        }
    });

// handle the expansion of mobile menu drop down nesting
$('.sitenavigation li.nav-dropdown').click(
    function(event) {
        if (event.stopPropagation) {
            event.stopPropagation();
        } else {
            event.cancelBubble = true;
        }

        if ($('.menu-icon').is(':visible')) {
            $(this).find('> ul').toggle();
            $(this).toggleClass('unexpanded');
        }
        
    }
);

// prevent links for propagating click/tap events that may trigger hiding/unhiding
$('.sitenavigation a.nav-dropdown, .sitenavigation li.nav-dropdown a').click(
    function(event) {
        if (event.stopPropagation) {
            event.stopPropagation();
        } else {
            event.cancelBubble = true;
        }
    }
);

// javascript fade in and out of dropdown menu
$('.no-touch .sitenavigation li').hover(
    function() {
        if (!$('.menu-icon').is(':visible')) {
            $(this).find('> ul').fadeIn(100);
        }
    },
    function() {
        if (!$('.menu-icon').is(':visible')) {
            $(this).find('> ul').fadeOut(100);
        }
    }
);
});

</script>



</head>
<body>
<header class="fixed-top" id="headfixed">
<div class="container p-0">

  <nav class="navbar " id="nav-fixed" >
    <div class="logo " >
    <a href="index.php" ><img class="img-fluid" src="assets\images\alo-xamslogo.png" alt="Alo logo"></a>
    </div>
    <div class="mobile-btn">
    <button type="button" class=" btn btn-primary mt-1 header-center"><a href="request-for-services.php" style="color:white;">GET QUOTE</a> </button> 
</div>
    <div class="sitenavigation">
 
      <span class="menu-icon">
     
  <a href="#" class="menu example5"><span></span></a>
      <div id="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      </span>
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li class=""><a href="about.php">ABOUT US</a>
        <!-- <ul>
                <li><a href="we_are.php">Who we are</a></li>
                <li><a href="ourteam.php">Our Team</a></li>
              </ul> -->
      </li>
        <li class="nav-dropdown"><a href="#">SERVICE</a>
          <ul>
            <li class="nav-dropdown"><a href="#">Digital marketing <i class="fa fa-angle-right float-end" aria-hidden="true"></i></a>     
            <ul>
                <li><a href="seo.php">SEO</a></li>
                <li><a href="ppc.php">PPC </a></li>
                <li><a href="socialmedia.php">Social Media Marketing</a></li>
                <li><a href="contentmarketing.php">Content Marketing</a></li>
                <li><a href="logodesign.php">Logo Design & Branding </a></li>
              </ul></li>
            <li class="nav-dropdown"><a href="#"> Development <i class="fa fa-angle-right float-end" aria-hidden="true"></i></a>
            <ul>
                <li><a href="web_application.php">Web Application</a></li>
                <li><a href="mobile_application.php">Mobile Application</a></li>
                <li><a href="blockchain.php">Block Chain</a></li>
                <li><a href="testing.php">Testing</a></li>
              </ul>
            </li>
            <li class="nav-dropdown"><a href="#">Recruitment Service <i class="fa fa-angle-right float-end" aria-hidden="true"></i></a>
              <ul>
                <li><a href="it-staffing.php">IT-Staffing</a></li>
              </ul>
            </li>
         
          </ul>
        </li> 
      



       

          <li><a href="careers.php">CAREERS</a></li>
          <li><a href="blogs.php">BLOGS</a></li>
          <li><a href="contactus.php">CONTACT US</a></li>
     
    
          <button type="button" class="mobilebottom-btn btn btn-primary mt-1 header-center"><a href="request-for-services.php" style="color:white;">GET QUOTE</a> </button>    </ul>
    
    </div>
   
  </nav>


</div>
</header>




<script>
         window.onscroll = function() {myFunction()};
            var goup = document.getElementById("headfixed");
            function myFunction() {
            if (window.pageYOffset >= 10) {
              goup.style.backgroundColor = "white";
               
            } else {
              goup.style.backgroundColor = "transparent";
            }
            }
      </script>




</body>
</html>