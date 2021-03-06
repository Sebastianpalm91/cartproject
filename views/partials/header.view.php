<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/src/styles/main.css">
    <title><?php echo $title; ?></title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white mt-3 ml-4 mr-4">
      <li class="nav-item d-flex flex-row-reverse mb-0">
        <a class="" href="/"><img src="/src/images/logo.png" width="30" height="30" alt=""></a>
      </li>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products">Products</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Login</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="userCart">Go to cart</a>
            </div>
          </li>
        </ul>
      </div>
      <li class="nav-item d-flex flex-row-reverse mb-0">
        <a class="" href="userCart"><img src="/src/images/carticon.png" width="30" height="30" alt=""></a>
      </li>
    </nav>
    <div class="container">
