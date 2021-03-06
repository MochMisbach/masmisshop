<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="Shayna Template" />
  <meta name="keywords" content="Shayna, unica, creative, html" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Shayna | Template</title>

  <!-- Google Font -->
  @include('includes.header')
  <!-- Header End -->

  <!-- Hero Section Begin -->
  <section class="hero-section">
    <div class="hero-items owl-carousel">
      <div class="single-hero-items set-bg" data-setbg="{{ asset('frontend/img/masmis/caro.jpg')}}">
        <!-- <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <span>Produk kami</span>
              <h1>Kemasan Besar</h1>

              <a href="#" class="primary-btn">Beli sekarang</a>
            </div>
          </div>
        </div> -->
      </div>
      <div class="single-hero-items set-bg" data-setbg="{{ asset('frontend/img/masmis/caro1.jpg')}}">
        <!-- <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <span>Produk kami</span>
              <h1>Kemasan Medium</h1>

              <a href="#" class="primary-btn">Beli sekarang</a>
            </div>
          </div>
        </div> -->
      </div>
      <div class="single-hero-items set-bg" data-setbg="{{ asset('frontend/img/masmis/caro2.jpg')}}">
        <!-- <div class="container">
          <div class="row">
            <div class="col-lg-5">
              <span>Produk kami</span>
              <h1>Kemasan Kecil</h1>

              <a href="#" class="primary-btn">Beli sekarang</a>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>
  <!-- Hero Section End -->

  <!-- Women Banner Section Begin -->
  <section class="women-banner spad">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 mt-5">
          <div class="product-slider owl-carousel">
            <div class="product-item">
              <div class="pi-pic">
                <img src="{{ asset('frontend/img/masmis/produk_1.png')}}" alt="" />
                <ul>
                  <li class="w-icon active">
                    <a href="#"><i class="icon_bag_alt"></i></a>
                  </li>
                  <li class="quick-view"><a href="product.html">+ Detail</a></li>
                </ul>
              </div>
              <div class="pi-text">
                <div class="catagory-name">Coat</div>
                <a href="#">
                  <h5>Mickey Baggy</h5>
                </a>
                <div class="product-price">
                  $14.00
                  <span>$35.00</span>
                </div>
              </div>
            </div>
            <div class="product-item">
              <div class="pi-pic">
                <img src="{{ asset('frontend/img/masmis/produk_1.png')}}" alt="" />
                <ul>
                  <li class="w-icon active">
                    <a href="#"><i class="icon_bag_alt"></i></a>
                  </li>
                  <li class="quick-view"><a href="#">+ Detail</a></li>
                </ul>
              </div>
              <div class="pi-text">
                <div class="catagory-name">Shoes</div>
                <a href="#">
                  <h5>Guangzhou sweater</h5>
                </a>
                <div class="product-price">
                  $13.00
                </div>
              </div>
            </div>
            <div class="product-item">
              <div class="pi-pic">
                <img src="{{ asset('frontend/img/masmis/produk_1.png')}}" alt="" />
                <ul>
                  <li class="w-icon active">
                    <a href="#"><i class="icon_bag_alt"></i></a>
                  </li>
                  <li class="quick-view"><a href="#">+ Detail</a></li>
                </ul>
              </div>
              <div class="pi-text">
                <div class="catagory-name">Towel</div>
                <a href="#">
                  <h5>Pure Pineapple</h5>
                </a>
                <div class="product-price">
                  $34.00
                </div>
              </div>
            </div>
            <div class="product-item">
              <div class="pi-pic">
                <img src="{{ asset('frontend/img/masmis/produk_1.png')}}" alt="" />
                <ul>
                  <li class="w-icon active">
                    <a href="#"><i class="icon_bag_alt"></i></a>
                  </li>
                  <li class="quick-view"><a href="#">+ Detail</a></li>
                  <li class="w-icon">
                    <a href="#"><i class="fa fa-random"></i></a>
                  </li>
                </ul>
              </div>
              <div class="pi-text">
                <div class="catagory-name">Towel</div>
                <a href="#">
                  <h5>Converse Shoes</h5>
                </a>
                <div class="product-price">
                  $34.00
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Women Banner Section End -->

  <!-- Instagram Section Begin -->
  <div class="instagram-photo">
    <div class="insta-item set-bg" data-setbg="{{ asset('frontend/img/insta-1.jpg')}}">
      <div class="inside-text">
        <i class="ti-instagram"></i>
        <h5><a href="#">shayna_gallery</a></h5>
      </div>
    </div>
    <div class="insta-item set-bg" data-setbg="{{ asset('frontend/img/insta-2.jpg')}}">
      <div class="inside-text">
        <i class="ti-instagram"></i>
        <h5><a href="#">shayna_gallery</a></h5>
      </div>
    </div>
    <div class="insta-item set-bg" data-setbg="{{ asset('frontend/img/insta-3.jpg')}}">
      <div class="inside-text">
        <i class="ti-instagram"></i>
        <h5><a href="#">shayna_gallery</a></h5>
      </div>
    </div>
    <div class="insta-item set-bg" data-setbg="{{ asset('frontend/img/insta-4.jpg')}}">
      <div class="inside-text">
        <i class="ti-instagram"></i>
        <h5><a href="#">shayna_gallery</a></h5>
      </div>
    </div>
    <div class="insta-item set-bg" data-setbg="{{ asset('frontend/img/insta-5.jpg')}}">
      <div class="inside-text">
        <i class="ti-instagram"></i>
        <h5><a href="#">shayna_gallery</a></h5>
      </div>
    </div>
    <div class="insta-item set-bg" data-setbg="{{ asset('frontend/img/insta-6.jpg')}}">
      <div class="inside-text">
        <i class="ti-instagram"></i>
        <h5><a href="#">shayna_gallery</a></h5>
      </div>
    </div>
  </div>
  <!-- Instagram Section End -->

  <!-- Partner Logo Section Begin -->
  <!-- <div class="partner-logo">
    <div class="container">
      <div class="logo-carousel owl-carousel">
        <div class="logo-item">
          <div class="tablecell-inner">
            <img src="{{ asset('frontend/img/logo-carousel/logo-1.png')}}" alt="" />
          </div>
        </div>
        <div class="logo-item">
          <div class="tablecell-inner">
            <img src="{{ asset('frontend/img/logo-carousel/logo-2.png')}}" alt="" />
          </div>
        </div>
        <div class="logo-item">
          <div class="tablecell-inner">
            <img src="{{ asset('frontend/img/logo-carousel/logo-3.png')}}" alt="" />
          </div>
        </div>
        <div class="logo-item">
          <div class="tablecell-inner">
            <img src="{{ asset('frontend/img/logo-carousel/logo-4.png')}}" alt="" />
          </div>
        </div>
        <div class="logo-item">
          <div class="tablecell-inner">
            <img src="{{ asset('frontend/img/logo-carousel/logo-5.png')}}" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- Partner Logo Section End -->

  <!-- Footer Section Begin -->
  @include('includes.footer')
  </body>

</html>