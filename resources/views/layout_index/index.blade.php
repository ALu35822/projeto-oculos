<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Sglass</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="/assets/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="/assets/css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand mr-5" href="index.html">
            <span>
              Sglass
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('shop')}}"> Shop </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="glass.html"> Glasses </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contact us</a>
                </li>
              </ul>
            </div>
            <div class="quote_btn-container ">
              <a href="">
                Log in
              </a>
              <a href="">
                <img src="/assets/images/cart.png" alt="">
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li> <span>-</span>
        <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
      </ol>
      <div class="glass">
        <h6>
          Glasses
        </h6>
      </div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <div>
                      <h1>
                        Welcome to
                      </h1>
                      <h2>
                        Glasses shop
                      </h2>
                      <div class="btn-box">
                        <a href="" class="btn-1">
                          Buy Now
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <div class="col-md-7">
                  <div class="detail-box">
                    <div>
                      <h1>
                        Welcome to
                      </h1>
                      <h2>
                        Glasses shop
                      </h2>
                      <div class="btn-box">
                        <a href="" class="btn-1">
                          Buy Now
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="custom_carousel-control">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                <span>About</span> our shop
              </h2>
            </div>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when
              looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
              letters,
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="/assets/images/about-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end about section -->

  <!-- glass section -->

  <section class="glass_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span> Our </span> Glasses
        </h2>
      </div>
      <div class="glass_container">
        <div class="box">
          <div class="img-box">
            <img src="/assets/images/g-1.png" alt="">
          </div>
          <div class="price">
            <h6>
              $50
            </h6>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="/assets/images/g-2.png" alt="">
          </div>
          <div class="price">
            <h6>
              $50
            </h6>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="/assets/images/g-3.png" alt="">
          </div>
          <div class="price">
            <h6>
              $50
            </h6>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="/assets/images/g-4.png" alt="">
          </div>
          <div class="price">
            <h6>
              $50
            </h6>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="/assets/images/g-5.png" alt="">
          </div>
          <div class="price">
            <h6>
              $50
            </h6>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="/assets/images/g-6.png" alt="">
          </div>
          <div class="price">
            <h6>
              $50
            </h6>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="/assets/images/g-7.png" alt="">
          </div>
          <div class="price">
            <h6>
              $50
            </h6>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="/assets/images/g-8.png" alt="">
          </div>
          <div class="price">
            <h6>
              $50
            </h6>
            <a href="">
              Buy Now
            </a>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          See More
        </a>
      </div>
    </div>
  </section>


  <!-- end glass section -->

  <!-- quality section -->

  <section class="quality_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span> Best</span> Quality
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <ul class="nav nav-tabs detail-box" id="myTab" role="tablist">
            <li class="">
              <a class=" active" id="QTab1Link" data-toggle="tab" href="#qTab1" role="tab" aria-controls="qTab1" aria-selected="true">
                <h6 id="QTab1Link" data-toggle="tab" href="#qTab1" role="tab" aria-controls="qTab1" aria-selected="true">
                  <span>01</span>
                  It is a long established fact that a reader will be distracted
                </h6>
              </a>
            </li>
            <li class="">
              <a class="" id="QTab2Link" data-toggle="tab" href="#qTab2" role="tab" aria-controls="qTab2" aria-selected="false">
                <h6 id="QTab2Link" data-toggle="tab" href="#qTab2" role="tab" aria-controls="qTab2" aria-selected="false">
                  <span>02</span>
                  by the readable content of a page when looking at its
                </h6>
              </a>
            </li>
            <li class="">
              <a class="" id="QTab3Link" data-toggle="tab" href="#qTab3" role="tab" aria-controls="qTab3" aria-selected="false">
                <h6 id="QTab3Link" data-toggle="tab" href="#qTab3" role="tab" aria-controls="qTab3" aria-selected="false">
                  <span>03</span>
                  layout. The point of using Lorem Ipsum is that it has a
                </h6>
              </a>
            </li>
            <li class="">
              <a class="" id="QTab4Link" data-toggle="tab" href="#qTab4" role="tab" aria-controls="qTab4" aria-selected="false">
                <h6 id="QTab4Link" data-toggle="tab" href="#qTab4" role="tab" aria-controls="qTab4" aria-selected="false">
                  <span>04</span>
                  more-or-less normal distribution of letters,
                </h6>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-6 tab-content">
          <div class="img-container tab-pane  fade show active" id="qTab1" role="tabpanel" aria-labelledby="QTab1Link">
            <div class="img-box ">
              <img src="/assets/images/quality-img.jpg" alt="">
            </div>
          </div>
          <div class="img-container tab-pane fade" id="qTab2" role="tabpanel" aria-labelledby="QTab2Link">
            <div class="img-box  ">
              <img src="/assets/images/buy-img.png" alt="">
            </div>
          </div>
          <div class="img-container tab-pane fade" id="qTab3" role="tabpanel" aria-labelledby="QTab3Link">
            <div class="img-box  ">
              <img src="/assets/images/quality-img.jpg" alt="">
            </div>
          </div>
          <div class="img-container tab-pane fade" id="qTab4" role="tabpanel" aria-labelledby="QTab4Link">
            <div class="img-box  ">
              <img src="/assets/images/buy-img.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end quality section -->

  <!-- offer section -->

  <section class="offer_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7 px-0">
          <div class="img-box">
            <img src="/assets/images/offer-img.jpg" alt="">
            <div class="price">
              <h4>
                $60
              </h4>
            </div>
          </div>
        </div>
        <div class="col-md-4 offset-md-1">
          <div class="detail-box">
            <h2>
              Book <br>
              our <br>
              special <br>
              offer
            </h2>
            <a href="">
              See More offer
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end offer section -->

  <!-- buy section -->

  <section class="buy_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span class="s-1">
            Buy
          </span>
          your stylish
          <span class="s-2">
            glasses
          </span>
        </h2>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="/assets/images/buy-img.png" alt="">
        </div>
        <div class="detail-box">
          <p>
            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
            letters, <br>
            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
            letters,
          </p>
          <a href="">
            Book Now
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end buy section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span> What </span> Says Our Cutomer
        </h2>
      </div>
      <div class="box">
        <div class="detail-box">
          <p>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in
            some form, by injected humour, or randomised words which don't look even slightly believable.There are many
            variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by
            injected humour, or randomised words which don't look even slightly believable.
          </p>
        </div>
        <div class="client-id">
          <div class="img-box">
            <img src="/assets/images/client.png" alt="">
          </div>
          <h5>
            Jacksmith sand
          </h5>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <h2>
        Request A call back
      </h2>
      <div class="">
        <div class="row">
          <div class="col-md-6 mx-auto">
            <form action="">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Name">
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number">
                  </div>
                  <div>
                    <input type="email" placeholder="Email">
                  </div>
                  <div class="">
                    <input type="text" placeholder="Message" class="message_input">
                  </div>
                  <div class="mt-5 d-flex justify-content-center ">
                    <button type="submit">
                      Send
                    </button>
                  </div>
                </div>

              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end contact section -->

  <!-- info section -->

  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h6>
            Subscribe Now
          </h6>
          <form action="">
            <input type="text" placeholder="Enter your email">
            <div class="d-flex justify-content-end">
              <button>
                submit
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-3 offset-md-1">
          <h6>
            Links
          </h6>
          <ul>
            <li>
              <a href="">
                Lorem ipsum dolor sit
              </a>
            </li>
            <li>
              <a href="">
                amet, consectetur adipis
              </a>
            </li>
            <li>
              <a href="">
                cing elit, sed do
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h6>
            Contact us
          </h6>
          <ul>
            <li>
              <a href="">
                Lorem ipsum dolor sit
              </a>
            </li>
            <li>
              <a href="">
                amet, consectetur adipis
              </a>
            </li>
            <li>
              <a href="">
                cing elit, sed do
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->


  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; <span id="displayYear"></span> All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="/assets/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="/assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="/assets/js/custom.js"></script>

</body>

</html>
