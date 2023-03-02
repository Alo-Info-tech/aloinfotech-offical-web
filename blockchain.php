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
.breadcrumbs-custom-path a {
    color: var(--bs-link-color);
    text-decoration: none;
}
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
    font-weight: 500;
    font-style: normal;
    font-stretch: normal;
    line-height: 1.3;
    letter-spacing: normal;
    }

/* .bgppc{
  background: url(assets/images/background.png) no-repeat center; 

 background-size: cover;
 -webkit-background-size: cover;
 -moz-background-size: cover;
 -o-background-size: cover;
 -ms-background-size: cover;
 min-height: 300px;
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
    font-weight: 600;
    color: #1a7eb3 !important;
}

p.content {
    text-align: justify;
}
*{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}
.color{
    color: #3493ce;
}
.border.border-info {
    border-radius: 10px;
}
.card.bg-light.text-color {
    border: none;
}

/* .bgppc{

background: url(assets/images/background.png) no-repeat center; 

background-size: cover;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
-ms-background-size: cover;
min-height: 350px;
} */

.efficiency{
    /* background: #3493CE; */
   
    border-radius: 40px;
    
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
  
}
.efficiency.m-1 {
    /* color: white; */
    border-radius: 75px;
    border: white;
} 
.efficiency{
    min-width :218px;
}
.border{
    border: 2px solid #3493CE;
    filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
    border-radius: 30px;
}
.smart{
    background-image: url(./images/istockphoto-1225681170-612x612\ 1.png);
    background-size: cover;
    /* background-size: contain; */
}
.efficiency.m-1:hover{
    background: #3493ce;
    color:white;
}

.card.ourservice {
      background: #FFFFFF;
      min-height: 227px !important;
      border: 1px solid #4d93e7;
      box-shadow: 0px 2px 4px rgb(0 0 0 / 17%);
      border-radius: 10px;
    }
    .content.px-3.text-center {
    font-size: 16px !important;
}
    .item {
      margin-bottom: 30px;
    }

    .item .box {
      text-align: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      height: 100%;
      /* min-height: 250px !important; */
      position: relative;
      overflow: hidden;
    }

    /* .people img.img-fluid {
          height: 118px;
      } */
    .item .cover {
      position: absolute;
      top: 0;
      left: 0px;
      width: 100%;
      height: 100%;
      /* min-height: 250px !important; */
      background: #4d93e7;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.17);
      border-radius: 5px;
      transition: opacity 0.15s ease-in;
      opacity: 0;
      /* padding-top:100px !important; */
      color: #fff;
      text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.15);
      align-items: center;
      display: flex;
    }

    .item:hover .cover {
      opacity: 1;
      border: none !important;
    }
.cover:hover {
      opacity: 1;
      border: none !important;
    }
    .item .name {
      font-weight: bold;
      margin-bottom: 8px;
    }

    .item .title {
      text-transform: uppercase;
      font-weight: bold;
      color: #bbd8fb;
      letter-spacing: 2px;
      font-size: 13px;
      margin-bottom: 20px;
    }
    @media screen and (min-width:300px) and (max-width:768px) {
    
    .about-banner {
        min-height: 280px;
    }
    h2.mt-5.fw-bolder.text-center.contentheading {
    margin-top: 0px !important;
}
    }


    
@media (max-width:768px){
    p.text-dark.text.p-2.mt-5 {
        margin-top: 5px !important;
    }
    .col-lg-8.my-4 {
        margin-bottom: 0px !important;
    }
    
    .col-lg-8.mt-4 {
        margin-top: 0px !important;
    }
    .row.mt-3.g-3 {
        margin-top: 0px !important;
    }
    .container.my-5 {
        margin: 5px 0 5px 0 !important;
    }
    .col-lg-8.mt-5 {
        margin-top: 0px !important;
    }
    p.text-dark.px-3.mt-5 {
        margin-top: 5px !important;
    }
    .row{
        padding: 5px;
    }
    .mt-3{
        margin-top: 1 rem !important;
    }
    .contentheading {
      font-size: 26px !important;
    }
    .quatation {
    font-size: 12px;
    }
    h2.ps-2.fw-bolder.contentheading {
    margin-top: -22px !important;
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
    <li class="breadcrumb-item active" aria-current="page">Block chain development</li>
  </ol>
</nav>
            </div>
        </div> 
    </section>




 
    <div class="container mt-5">
        <div class="section mt-2">
        <div class="row">
            <div class="col-lg-8">
            <h2 class="ps-2 fw-bolder  contentheading">Blockchain <span class="color"> Development</span></h2>
                <div>
                    <p class="text-dark quatation text"> We usher the future blockchain applications into the realm of the present. 
                        We have unceasingly helped organizations leverage the immense benefit of building
                        and implementing blockchain applications with unimpeachable security that is the
                        inherent nature of blockchain technology. From Ethereum to IEO to Hyperledger to 
                        Stellar, and many other blockchain technologies, we bring an entire spectrum of 
                        blockchain development solutions when you want to strengthen critical networks 
                        and build foolproof applications. All our blockchain solutions are tailored to your
                        specific needs </p>
                </div>
            </div>
            <div class="col-lg-4 mt-5 text-center">
                <img class="img-fluid" src="assets\images\blockchain-img.png" alt="blockchain">
            </div>
        </div>
    </div>
     
        <div class="text-center p-2">
        <h2 class="mt-5 ps-2 fw-bolder lh-base contentheading text-center">Our Blockchain App <span class="color"> Development Services</span></h2>
        </div>
        <div class="section">
        <div class="border border-info my-2 mb-2">
            <div class="text-center mt-4">
                <h2><b>Blockchain<span class="color"> Technology Consulting</span></b></h2>
            </div>
            <div class="row">
                
                <div class="col-lg-8 mt-4">
                    <p class="text-dark  quatation p-2 mt-3">Through our consulting services, we can help you reduce risks and 
                        improve performance. As a premier blockchain development company
                         we have worked on multiple projects and consequently, have gathered
                         massive experience both in terms of technology and implementation. 
                        We can share with you the insights that are difficult to obtain. We can 
                        recommend the right technologies. We can keep your team focused. We 
                        can share our experience of working on similar blockchain applications 
                        that your team is developing right now.</p>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid" src="assets\images\blockchain-technology.png" alt="blockchain-development">
                </div>
            </div>
        </div>
        </div>
        &nbsp;
        <div class="section">
        <div class=" border border-info my-2 mb-2">
            <div class="text-center mt-4">
                <h2><b>dApps<span class="color"> Development</span></b></h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-fluid" src="assets\images\dapps.png" alt="">
                </div>
                <div class="col-lg-8 mt-4">
                    <p class="text-dark quatation  px-2">Decentralized applications or dApps are a combination of smart contracts 
                        and front-end user interfaces. The entire source code and the data exist on a 
                        decentralized peer-to-peer network. As a trusted Blockchain development 
                        company we can build top-notch decentralized crypto exchanges, distribute 
                        larger networks and peer-to-peer decentralized applications for a wide range 
                        of industries including supply chain management, logistics, banking, healthcare, 
                        transportation, and many more. Through our decentralized development services, 
                        we can immediately bring transparency and security to your business by 
                        democratizing validation and authentication processes</p>
                </div>
                
            </div>
        </div>
        </div>
        &nbsp;
        <div class="section">
        <div class=" border border-info">
            <div class="text-center mt-4">
                <h2><b>Cryptocurrency<span class="color"> Development</span></b></h2>
            </div>
            <div class="row">
                
                <div class="col-lg-8 mt-4">
                    <p class="text-dark  quatation px-2">With an increasing number of gaming, process management, and banks and  
                        financial institutions using decentralized financing, cryptocurrency development has 
                        gained tremendous traction. Cryptocurrency development mostly means building 
                        your own cryptocurrency that you can use as a decentralized mode of the 
                        transaction between customers and clients, gamers, as well as among business 
                        partners. We can build customized cryptocurrency coins, crypto wallets to preserve 
                        and grow stashes of cryptocurrency, crypto exchanges such as IEO for crypto-based
                         equity growth, and complete e-commerce systems enabling people to pay using 
                        cryptocurrencies and crypto coins. We also offer bitcoin development services, one 
                        of the most popular crypto coins in the world these days.</p>
                </div>
                <div class="col-lg-4">
                    <img class="img-fluid" src="assets\images\cryptocurrency-blockchain.png" alt="Cryptocurrency">
                </div>
                
            </div>
        </div>
        </div>
        &nbsp;
        <div class="section">
            <div class="border border-info">
                <div class="text-center mt-4">
                    <h2><b>Token<span class="color"> Development</span></b></h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <img class="img-fluid" src="assets\images\Token.jpg" alt="Cryptocurrency">
                    </div>
                    <div class="col-lg-8 mt-4">
                        <p class="text-dark  quatation px-2">After cryptocurrencies, it is the NFTs (non-fungible tokens) that are among the most 
                            sought-after blockchain solutions. Custom NFTs allow you to convert your real-world assets 
                            into digital entities with all terms and conditions and validations built into the tokens. They 
                            provide you with irrefutable ownership of your digital assets. As a blockchain development 
                            company, we can build custom NFTs for your organization with great utility value and 
                            unimpeachable security. We can build NFTs using all contemporary blockchain technologies 
                            such as BEP20 and other.</p>
                    </div>
                    
                    
                </div>
            </div>
        </div>
        &nbsp;
        <div class="section">
            <div class=" border border-info">
                <div class="text-center my-4">
                    <h2><b>Smart Contracts<span class="color"> Development</span></b></h2>
                </div>
                <div class="row">
                    
                    <div class="col-lg-8 mt-4">
                        <p class="text-dark  quatation px-2">Looking for non-violable contracts and agreements that can be stored on 
                            blockchain using Ethereum or EOS? A great thing about smart contracts is that their  
                            terms and conditions are automatically triggered whenever these contracts are
                            invoked. For these smart contracts to be valid, the entire blockchain network
                            needs to arrive at a consensus, and this makes them invincible.ALO info tech 
                            can help you with digital smart contact architecture, design and development, 
                            optimization, and integration of smart contracts with decentralized applications.</p>
                    </div>
                    <div class="col-lg-4">
                        <img class="img-fluid" src="assets\images\smart-contract.png" alt="Cryptocurrency">
                    </div>
                    
                </div>
            </div>
            </div>
            &nbsp;
            
          
                
            
    </div>

    <div class="section smart  pb-3">
        <div class="container   bgppc">        
            <h2 class="mt-5 fw-bolder text-center  contentheading">Blockchain Development  <span class="color"> Platforms</span></h2>
            <!-- <div class="container my-5">
                <div class="text-center mb-3"> 
                    <div class="row mt-3 g-3">
                        <div class="col-md-4 ">
                            <button class="efficiency m-1"><span class="text-center"><h5 class="p-2 px-5">Security</h5></span></button>
                        </div>
                        <div class="col-md-4">
                            <button class="efficiency m-1"><span class="text-center"><h5 class="p-2 px-5">Efficiency</h5></span></button>
                        </div>
                        <div class="col-md-4">
                            <button class="efficiency m-1"><span class="text-center"><h5 class="p-2 px-5">Reliabilty</h5></span></button>
                        </div>
                    </div>
                    <div class="row mt-3  g-3">
                        <div class="col-md-4">
                            <button class="efficiency m-1"><span class="text-center"><h5 class="p-2 px-5">Low Cost</h5></span></button>
                        </div>
                        <div class="col-md-4">
                            <button class="efficiency m-1"><span class="text-center"><h5 class="p-2 px-5">Transparency</h5></span></button>
                        </div>
                        <div class="col-md-4">
                            <button class="efficiency m-1"><span class="text-center"><h5 class="p-2 px-5">Scalabilty</h5></span></button>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row d-flex justify-content-center mt-5">
        <div class="col-md-4 col-lg-4 item">
          <div class="card ourservice p-4">
            <div class="text-center pt-3">
              <img class="img-fluid " src="assets\images\Corda.png" alt="Corda">
            </div>
            <div class="text-center mt-3">
              <p class="card-text text-small fw-bolder text-center color">Corda</p>
            </div>
              <div class="cover justify-content-center">
                <div class="content px-3 text-center">Need an open-source blockchain development tool? Then you want your next application developed in Corda. Convert your valuable assets into NFTs and cryptocurrencies using the Corda blockchain technology. </div>
              </div>
          </div>


        </div>

        <div class="col-md-4 col-lg-4 item">
          <div class="card ourservice p-4">
            <div class="text-center pt-3">
              <img class="img-fluid text-center" src="assets\images\tezos.png" alt="Cloud">
            </div>
            <div class="text-center mt-3">
              <p class="card-text text-small text-center fw-bolder  color">Tezos</p>
            </div>
              <div class="cover justify-content-center">
                <div class="content px-3 text-center">Looking for highly secure and dependable smart contracts or decentralized applications? With our Tezos development services, we can build multiple solutions over the Tezos distributed blockchain network.</div>
              </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 item">
          <div class="card ourservice p-4">
            <div class="text-center pt-3">
              <img class="img-fluid text-center" src="assets\images\ethereum.png" alt="Business Intelligence">
            </div>
            <div class="text-center mt-3">
              <p class="card-text text-small text-center fw-bolder color">Ethereum</p>
            </div>
              <div class="cover justify-content-center">
                <div class="content px-3 text-center">We can build highly secure, scalable, and reliable solutions with enhanced operational efficiency based on one of the most popular technologies – Ethereum. ERC20 contracts, smart contracts, and much more.</div>
              </div>
          </div>
        </div>
      </div>

      <div class="row d-flex justify-content-center mt-3">
        <div class="col-md-4 col-lg-4 item">
          <div class="card ourservice p-4">
            <div class="text-center pt-3">
              <img class="img-fluid " src="assets\images\Stellar.png" alt="consulting">
            </div>
            <div class="text-center mt-3">
              <p class="card-text text-small text-center fw-bolder color">Stellar</p>
            </div>
              <div class="cover justify-content-center">
                <div class="content px-3 text-center">Power-packed blockchain-based applications using the Stellar blockchain technology. We can build advanced fintech solutions, payment gateways, digital exchanges, wallets, and other immutable finance-based applications with Stellar.</div>
              </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-4 item">
          <div class="card ourservice p-4">
            <div class="text-center pt-3">
              <img class="img-fluid text-center" src="assets\images\Eos.png" alt="Cloud">
            </div>
            <div class="text-center mt-3">
              <p class="card-text text-small text-center fw-bolder color">EOS</p>
            </div>
              <div class="cover justify-content-center">
                <div class="content px-3 text-center">We can help you create a decentralized operating system on an EOS network which is an open-source blockchain platform with a complete ecosystem of features and possibilities.</div>
              </div>
           
          </div>
        </div>
        <div class="col-md-4 col-lg-4 item">
          <div class="card ourservice p-4">
            <div class="text-center pt-3">
              <img class="img-fluid text-center" src="assets\images\Ripple.png" alt="Business Intelligence">
            </div>
            <div class="text-center mt-3">
              <p class="card-text text-small text-center fw-bolder color">Ripple</p>
            </div>
              <div class="cover justify-content-center">
                <div class="content px-3 text-center">Want to leverage a globally secure peer-to-peer transaction system? Then you want your next application developed in Ripple, which is a real-time gross settlement system and a global remittance network.</div>
              </div>
          </div>
        </div>
      </div>

      <div class="row d-flex justify-content-center mt-3">
        <div class="col-md-4 col-lg-4 item">
          <div class="card ourservice p-4">
            <div class="text-center pt-3">
              <img class="img-fluid " src="assets\images\Hyperledger.png" alt="consulting">
            </div>
            <div class="text-center mt-3">
              <p class="card-text text-small text-center fw-bolder color">Hyperledger</p>
            </div>
              <div class="cover justify-content-center">
                <div class="content px-3 text-center">We can build supply chains, identity management systems, transportation solutions, and logistics applications both for web and mobile using our Hyperledger blockchain development services.</div>
              </div>
          </div>
        </div>

        <div class="col-md-4 col-lg-4 item">
          <div class="card ourservice p-4">
            <div class="text-center pt-3">
              <img class="img-fluid text-center" src="assets\images\Multichain.png" alt="Cloud">
            </div>
            <div class="text-center mt-3">
              <p class="card-text text-small text-center fw-bolder color">Multichain</p>
            </div>
              <div class="cover justify-content-center">
                <div class="content px-3 text-center">Get a private blockchain for your organization with Multichain blockchain development. This gives you highly reliable security as a financial institution or an organization sensitive about privacy.</div>
              </div>
           
          </div>
        </div>
        <div class="col-md-4 col-lg-4 item">
          <div class="card ourservice p-4">
            <div class="text-center pt-3">
              <img class="img-fluid text-center" src="assets\images\Quorum.png" alt="Business Intelligence">
            </div>
            <div class="text-center mt-3">
              <p class="card-text text-small text-center fw-bolder color">Quorum</p>
            </div>
              <div class="cover justify-content-center">
                <div class="content px-3 text-center">Grow and operate your blockchain network at scale with Quorum, which is a fully managed ledger service that allows you to build highly intuitive blockchain applications.</div>
              </div>
          </div>
        </div>
      </div>



            </div>
    </div>






<?php include 'common-files/footer.php'; ?>

</body>

</html>