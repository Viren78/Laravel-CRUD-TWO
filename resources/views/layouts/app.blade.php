<!doctype html>
<html lang="en">
    <head>
        <title>@yield('title')</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

            <!-- Favicon -->
          <link rel="apple-touch-icon" sizes="180x180" href="https://laravel.com/img/favicon/apple-touch-icon.png">
          <link rel="icon" type="image/png" sizes="32x32" href="https://laravel.com/img/favicon/favicon-32x32.png">
          <link rel="icon" type="image/png" sizes="16x16" href="https://laravel.com/img/favicon/favicon-16x16.png">
          <link rel="manifest" href="https://laravel.com/img/favicon/site.webmanifest">
          <link rel="mask-icon" href="https://laravel.com/img/favicon/safari-pinned-tab.svg" color="#ff2d20">
          <link rel="shortcut icon" href="https://laravel.com/img/favicon/favicon.ico">
          <meta name="msapplication-TileColor" content="#ff2d20">
          <meta name="msapplication-config" content="https://laravel.com/ximg/favicon/browserconfig.xml">
          <meta name="theme-color" content="#ffffff">
          <meta name="color-scheme" content="light">

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

                <!-- Bootstrap JavaScript Libraries -->
                <script
                src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                crossorigin="anonymous"
            ></script>
    
            <script
                src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
                integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
                crossorigin="anonymous"
            ></script>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="/">Products</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                      </li>
                      
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
        </header>

        <main>
            
            @if($message = Session::get('success'))
            <div class="alert alert-success alert-block"><strong>{{ $message }}</strong></div>
            @endif

            @yield('main')

        </main>
    </body>
                    <!-- Bootstrap JavaScript Libraries -->
        <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"
    ></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"
    ></script>
</body>
</html>