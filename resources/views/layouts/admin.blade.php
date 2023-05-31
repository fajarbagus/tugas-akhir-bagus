<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- ionic icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>



  </head>

  <body>

      
<div class="d-flex">
  <div class="sidebar p-4">
    <h4>Menu</h4>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="/dashboard">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/user">User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/data">Data</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/comment">Comment</a>
      </li>
    </ul>

    <div class="mt-auto">
      <!-- Logout -->
      <a href="/" class="btn btn-danger">Logout</a>
    </div>
  </div>
  <div class="landing-page">
      
    <div class="container">
       @yield('admin')
       
      </div>
    </div>
    
  </div>
  
  <style>
    .sidebar {
      background-color: #343a40;
      color: #fff;
      height: 100vh;
      display: flex;
      flex-direction: column;
      padding-bottom: 20px;
    }

    .sidebar .nav-link {
      color: #fff;
    }

    .sidebar .nav-link:hover {
      color: #f8f9fa;
    }

    
  </style>


    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  
    
  </body>
  {{-- Footer --}}
  <footer class="bg-primary text-white text-center pb-3">
    <p>Dibuat Oleh <ion-icon name="logo-instagram"></ion-icon> <a href="https://www.instagram.com/baguskelana_/" class="text-white fw-bold">Baguskelana_</a></p>
  </footer>
  <!-- Akhir Footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>