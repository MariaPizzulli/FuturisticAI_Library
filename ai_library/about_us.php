<?PHP
require_once('db_util.php');

session_start();

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Liberty NFT - Author Detail Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-liberty-market.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo/10.png" alt="" style="border-radius: 60%; max-width: 60px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="explore.php">Biblioteca AI</a></li>
                        <li><a href="news.php">Riviste e news</a></li>
                        <li><a href="about_us.php" class="active">Chi siamo</a></li>
                      <?php
                      if (isset ($_SESSION['logged'])) {
                        echo '<li><a href="logout.php">logout </a></li>';
                      } else {
                        echo '<li><a href="signup.php">Iscriviti/Accedi</a></li>';
                      }
                      ?>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="page-heading normal-space">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>LA TUA LIBRERIA DI INTELLIGENZA ARTIFICIALE PREFERITA, OVUNQUE</h2>
          <p>La Biblioteca virtuale Futuristic AI Library incarna tutto ciò che ami riguardo i tuoi argomenti tecnologici
            preferiti, è stata perfezionata per darti una visione innovativa e futuristica del mondo. La nostra missione è
            diffondere consapevolezza su ciò che ci attende nel prossimo futuro, poiché crediamo che l'intelligenza
            artificiale abbia il potenziale per trasformare infiniti aspetti della società. I libri sull'IA e le altre
            moderne tecnologie ti permetteranno di scoprire i cambiamenti causati da queste innovazioni, di essere più
            preparato per discuterne, per viverli nella società del futuro ed anche per difenderti da eventuali
            conseguenze negative.</p>
<!--
          <span>Home > <a href="#">Chi siamo</a></span>
-->
          <br>
            <div class="row">
                <div class="col-lg-12">
                    <h4><span class="fa fa-phone"></span>Contattaci</h4>
                    <p>EMAIL:</p><span property="email">FuturisticAILibrary@gmail.com</span><br/>
                    <p>TELEFONO:</p><span property="telephone">0288465991</span><br/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="author-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="author">
            <img src="assets/images/logo/10.png" alt="" style="border-radius: 60%; max-width: 170px;">
            <h4>Siamo su Instagram!<br> <a href="#">@futuristic_AI_library</a></h4>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-info">
            <div class="row">
              <div class="col-4">
                <div class="info-item">
                  <i class="fa fa-heart"></i>
                  <h6>1238 <em>Likes</em></h6>
                </div>
              </div>
              <div class="col-4">
                <div class="info-item">
                  <i class="fa fa-hand"></i>
                  <h6>1281 <em>Condivisioni</em></h6>
                </div>
              </div>
              <div class="col-4">
                <div class="info-item">
                  <i class="fa fa-dollar"></i>
                  <h6>1223 <em>Commenti</em></h6>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-5">
                <h5>1259 Followers</h5>
              </div>
              <div class="col-7">
                <div class="main-button">
                  <a href="#">Seguici su @futuristic_AI_library</a>
                </div>
              </div>
            </div>
          </div>
        </div>


          <!--
        <div class="col-lg-12">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Melanie Smith’s <em>Items</em>.</h2>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                </span>
                <img src="assets/images/discover-03.jpg" alt="" style="border-radius: 20px;">
                <h4>Mutant Ape Bored</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="news.html">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/author-02.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                </span>
                <img src="assets/images/discover-06.jpg" alt="" style="border-radius: 20px;">
                <h4>Mutant Ape Bored</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="news.html">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                </span>
                <img src="assets/images/discover-05.jpg" alt="" style="border-radius: 20px;">
                <h4>Mutant Ape Bored</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="news.html">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="assets/images/author-03.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                </span>
                <img src="assets/images/discover-04.jpg" alt="" style="border-radius: 20px;">
                <h4>Mutant Ape Bored</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="news.html">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="create-nft">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Create Your NFT & Put It On The Market.</h2>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="main-button">
            <a href="login signup.html">Create Your NFT Now</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item first-item">
            <div class="number">
              <h6>1</h6>
            </div>
            <div class="icon">
              <img src="assets/images/icon-02.png" alt="">
            </div>
            <h4>Set Up Your Wallet</h4>
            <p>Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item second-item">
            <div class="number">
              <h6>2</h6>
            </div>
            <div class="icon">
              <img src="assets/images/icon-04.png" alt="">
            </div>
            <h4>Add Your Digital NFT</h4>
            <p>Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="item">
            <div class="icon">
              <img src="assets/images/icon-06.png" alt="">
            </div>
            <h4>Sell Your NFT &amp; Make Profit</h4>
            <p>Lorem ipsum dolor sit amet, consectetu dipiscingei elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>-->
      </div>
    </div>
  </div>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2023 <a href="#">Futuristic AI Library</a>
            &nbsp;&nbsp;
            Realizzato da <a title="HTML CSS Templates " target="_blank">Maria Pizzulli e Maria Salas</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>

  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    window.watsonAssistantChatOptions = {
      integrationID: "4d73569b-69e5-4d01-a714-65454f0ecda9", // The ID of this integration.
      region: "au-syd", // The region your integration is hosted in.
      serviceInstanceID: "c5d506db-0266-4276-92c3-e46dc3dc16e7", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
    setTimeout(function(){
      const t=document.createElement('script');
      t.src="https://web-chat.global.assistant.watson.appdomain.cloud/versions/" + (window.watsonAssistantChatOptions.clientVersion || 'latest') + "/WatsonAssistantChatEntry.js";
      document.head.appendChild(t);
    });
  </script>
</body>
</html>