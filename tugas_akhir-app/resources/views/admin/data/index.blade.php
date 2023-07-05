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
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="card-header pb-0">
                <h6>Data Handphone</h6>
                <ul class="navbar-nav  justify-content-end">
                    <li class="nav-item d-flex align-items-center">
                        <a class="btn btn-outline-primary btn-sm mb-0 me-3" href="createdata">Add Data</a>
                    </li>
                </ul>
              </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Merk</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Harga</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Type</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                        <th class="text-secondary opacity-7"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                          $no = 1
                      @endphp
                        @foreach ($handphones as $handphone)
                      <tr>
                        <td>
                          <div class="d-flex px-2 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <p class="text-xs font-weight-bold mb-0">{{ $no++ }}</p>
                            </div>
                          </div>
                        </td>
                          @if ($handphone->merk == 'Oppo')
                            <td>
                              <span class="text-xs font-weight-bold mb-0 badge badge-sm bg-gradient-success">{{ $handphone['merk'] }}</span>
                            </td>
                          @elseif($handphone->merk == 'Samsung')
                            <td>
                              <span class="text-xs font-weight-bold mb-0 badge badge-sm bg-gradient-info">{{ $handphone['merk'] }}</span>
                            </td>
                          @elseif($handphone->merk == 'Vivo')
                            <td>
                              <span class="text-xs font-weight-bold mb-0 badge badge-sm bg-gradient-primary">{{ $handphone['merk'] }}</span>
                            </td>
                          @elseif($handphone->merk == 'Huawei')
                            <td>
                              <span class="text-xs font-weight-bold mb-0 badge badge-sm bg-gradient-danger">{{ $handphone['merk'] }}</span>
                            </td>
                          @elseif($handphone->merk == 'Sony')
                            <td>
                              <span class="text-xs font-weight-bold mb-0 badge badge-sm bg-gradient-dark">{{ $handphone['merk'] }}</span>
                            </td>
                          @elseif($handphone->merk == 'Asus')
                            <td>
                              <span class="text-xs font-weight-bold mb-0 badge badge-sm bg-gradient-light text-dark">{{ $handphone['merk'] }}</span>
                            </td>
                          @endif
                        <td>
                          <span class="text-xs font-weight-bold mb-0">{{ $handphone['harga_hp'] }}</span>
                        </td>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">{{ $handphone['Type'] }} </span>
                        </td>
                        <td class="align-middle text-center">
                          <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                          </a>
                          <span class= "data-toggle">
                            |
                          </span>
                          <a href="{{ url('delete/'.$handphone->id) }};" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Delete Data">
                            Delete
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
</main>
@endsection 


