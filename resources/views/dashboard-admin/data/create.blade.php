@extends('layouts.admin')

@section('content-admin')
<main class="main-content position-relative border-radius-lg ">
  <!-- Navbar -->
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Tables</h6>
        </nav>
        
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
          <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
              <h6 class="text-capitalize">tambah</h6>
            </div>
            <div class="card-body p-3">
              <form action="data/store" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Merk:</label>
                    <input type="text" class="form-control" id="name" name="merk" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <label for="name">Harga HP:</label>
                    <input type="text" class="form-control" id="name" name="harga_hp" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <label for="name">RAM:</label>
                    <input type="text" class="form-control" id="name" name="RAM" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <label for="name">Internal:</label>
                    <input type="text" class="form-control" id="name" name="Internal" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <label for="name">Kamera:</label>
                    <input type="text" class="form-control" id="name" name="Kamera" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <label for="name">Fingerprint:</label>
                    <input type="text" class="form-control" id="name" name="Fingerprint" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <label for="name">Sistem Operasi:</label>
                    <input type="text" class="form-control" id="name" name="Sistem_Operasi" placeholder="Masukkan nama">
                </div>
                <div class="form-group">
                    <label for="name">Type HP:</label>
                    <input type="text" class="form-control" id="name" name="Type" placeholder="Masukkan nama">
                </div>
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
          </div>
      </div>
    </div>
</main>
@endsection 