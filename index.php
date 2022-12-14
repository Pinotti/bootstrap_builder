<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Builder</title>

    <link rel="stylesheet" href="_cdn/css/bootstrap_custom.css">
    <link rel="stylesheet" href="_cdn/css/app.css">
</head>
<body>
    
    <header class="main_header">
        <div class="header_bar bg-front">
            <div class="container">
                <div class="row">
                    <div class="col-4 d-flex justify-content-center align-items-center p-2 text-white">
                        <i class="icon-location-arrow"></i>
                        <p class="my-auto ml-3">Avenida Pequeno Príncipe, 0 Campeche<br>Florianópolis/SC</p>
                    </div>

                    <div class="col-4 d-flex justify-content-center align-items-center p-2 text-white">
                        <i class="icon-clock-o"></i>
                        <p class="my-auto ml-3">Seg/Sex: 09:00h - 18:00h<br>Sáb/Dom: Plantão</p>
                    </div>

                    <div class="col-4 d-flex justify-content-center align-items-center p-2 text-white">
                        <i class="icon-envelope"></i>
                        <p class="my-auto ml-3">contato@upinside.com.br</br>+55 (48) 3322-1234</p>
                    </div>
                </div>            
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light my-3">
            <div class="container">
                <div class="navbar-brand">
                    <a href="index.php">
                        <h1 class="d-none">Imobiliária</h1>
                        <img src="assets/images/logo.png" alt="" class="d-inline-block" width="280">
                    </a>
                </div> 
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-front" href="#">Destaque</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Alugar</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Comprar</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <script src="_cdn/js/jquery-3.6.0.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>