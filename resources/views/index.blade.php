@extends('layouts.user')
@section('title-user','Dashboard')

@section('content-user')
<body>

    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-6 align-self-center">
                <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                  <div class="row">
                    <div class="col-lg-12">
                      <h2>Get The Latest App From App Stores</h2>
                      <p>Chain App Dev is an app landing page HTML5 template based on Bootstrap v5.1.3 CSS layout provided by TemplateMo, a great website to download free CSS templates.</p>
                    </div>
                    <div class="col-lg-12">
                      <div class="white-button first-button scroll-to-section">
                        <a href="#contact">Free Quote <i class="fab fa-apple"></i></a>
                      </div>
                      <div class="white-button scroll-to-section">
                        <a href="#contact">Free Quote <i class="fab fa-google-play"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                  <img src="assets/user/images/slider-dec.png" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="services" class="services section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
              <h4>Amazing <em>Services &amp; Features</em> for you</h4>
              <img src="assets/user/images/heading-line-dec.png" alt="">
              <div class="tengah">
                <div class="w-75 p-3">
                  <div class="position-relative w-75 mx-auto animated slideInDown">              
                    <select class="form-select form-select-md mb-3 border-0 rounded-pill w-100 py-3 ps-4 pe-10" aria-label=".form-select-md example">
                        <option selected>Pilih Harga</option>
                        <option value="1">1.000.000-1.600.000</option>
                        <option value="2">1.600.001-2.200.000</option>
                        <option value="3">2.200.001-2.800.000</option>
                        <option value="3">2.800.001-3.400.000</option>
                        <option value="3">3.400.001-4.000.000</option>
                    </select>
                      <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                  </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="service-item first-service">
              <img src="assets/user/images/samsungm32.png" class="gambar" alt="samsung m32">
              <h4>Samsung M32</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <div class="text-button">
                <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="service-item second-service">
              <img src="https://fdn2.gsmarena.com/vv/bigpic/huawei-nova-5-.jpg" class="gambar" alt="oppo f5">
              <h4>huawei nova 5z</h4>
              <p>Sed ut perspiciatihgvhvghvghvs unde omnis iste natus error sit voluptatem.</p>
              <div class="text-button">
                <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="service-item third-service">
              <img src="https://p-id.ipricegroup.com/uploaded_d0bea65c479f806515d0719a79413dd5.jpg" class="gambar" alt="oppo f5">
              <h4>Oppo f5</h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
              <div class="text-button">
                <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="service-item fourth-service">
              <img src="https://asia-exstatic-vivofs.vivo.com/PSee2l50xoirPK7y/1591411479016/c6ea838a2b860113e264e999b27ff2c7.png" class="gambar" alt="vivo y11">
              <h4>Vivo y11</h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
              <div class="text-button">
                <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      
    <style>
        .tengah {
          display: flex;
          justify-content: center;
          align-items: center;
        }
        .landing-page {
            background-image: url('https://images.hdqwalls.com/download/coastal-town-minimalist-4k-51-1366x768.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            background-attachment: fixed;
            /* background: transparent url('https://images.hdqwalls.com/download/coastal-town-minimalist-4k-51-1366x768.jpg') no-repeat center center / cover; */
        }

      </style>
</body>


@endsection
