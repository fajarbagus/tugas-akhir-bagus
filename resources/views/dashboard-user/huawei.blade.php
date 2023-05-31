@extends('layouts.main') 

@section('user')
    <h1>halaman Huawei </h1>
<body>
    <div 
        class="h4 pb-2 mb-4 border-bottom border-secondary">
    </div>
    <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="card">
              <img src="https://telset.id/wp-content/uploads/2021/09/Samsung-Galaxy-M32-5G-indonesia-696x466.jpg" class="gambar" alt="samsung m32">
              <div class="card-body">
                <h5 class="card-title">Samung M32</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="https://www.begawei.com/wp-content/uploads/2019/10/huawei-nova-5z-f.png" class="gambar" alt="huawei 5z">
              <div class="card-body">
                <h5 class="card-title">huawei nova 5z</h5>
                <p class="card-text">Sed ut perspiciatihgvhvghvghvs unde omnis iste natus error sit voluptatem.</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="https://p-id.ipricegroup.com/uploaded_d0bea65c479f806515d0719a79413dd5.jpg" class="gambar" alt="oppo f5">
              <div class="card-body">
                <h5 class="card-title">Oppo f5</h5>
                <p class="card-text">At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="https://asia-exstatic-vivofs.vivo.com/PSee2l50xoirPK7y/1591411479016/c6ea838a2b860113e264e999b27ff2c7.png" class="gambar" alt="vivo y11">
              <div class="card-body">
                <h5 class="card-title">Vivo y11</h5>
                <p class="card-text">At vero eos et accusamus et iusto odio dignissimos ducimus.</p>
                <a href="#" class="btn btn-primary">Read More</a>
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
        .gambar {
            width: 200px;
            height: 200px;
        }

      </style>
</body>

@endsection