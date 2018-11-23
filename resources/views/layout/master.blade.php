<html>
    <head>
        <title>Rifas online - @yield('title')</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script type="text/javascript">
            window.adblockEnabled = false;
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-6064776652287686",
                enable_page_level_ads: true
            });
        </script>
    </head>
    <body>
        @section('navbar')
            <nav class="navbar navbar-expand-lg navbar-dark bg-blue fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="../">Inicio</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Mi perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Mis sorteos activos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="sorteos">Lista de sorteos</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        @show
        <div class="container">
            <div class="row">
                <h1 class="my-4"><br>
                </h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <!-- fin de publicacion -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-6064776652287686"
                         data-ad-slot="7153496404"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
                <div class="col-md-6">
                    <!-- fin de publicacion -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-6064776652287686"
                         data-ad-slot="7153496404"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
            <div class="row">
                @yield('content')
            </div>            
        </div>
        <script type="text/javascript" src="js/adframe.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.29/dist/sweetalert2.all.min.js"></script>
        <script type="text/javascript">
            if(window.adblockEnabled) {
                swal({
                    allowOutsideClick: false,
                    confirmButton:false,
                    title: '¡Ayuda!',
                    imageUrl: 'img/adblock.png',
                    text: 'Esta pagina vive gracias a la publicidad, deshabilita adblock y ayudanos a segir mejorando, la pagina no funcionara mientras este activado adblock',
                    confirmButtonText: 'Entendido'
                });
            }
        </script>
    </body>
</html>