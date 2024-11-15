<!doctype html>
<html lang="en">
  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Med Guardian</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
  <body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img src="assets/logo.svg" alt="">med guardian</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="?page=nova">Agendar nova consulta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=consultas">Consultas agendadas</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <main> 
            <div class="container">
                <div class="row">
                    <div class="col mt-5">
                    <?php

                        include("config.php");
                        switch(@$_REQUEST["page"]){
                            case "nova":
                                include("nova-consulta.php");
                                break;
                            case "consultas":
                                include("consultas.php");
                                break;
                            case "salvar":
                                include("salvar-consulta.php");
                                break;
                            case "editar":
                                include("editar-consulta.php");
                                break;
                            default:
                                print "<div class='boas-vindas'><h3>Bem vindo ao med guardian<h3><p>Seu novo sistema de gestão de consultas.</p>
                                </div>";
                                print "";
                        }
                    ?>
                    </div>
                </div>
            </div>
        </main>
 
    <footer>
        <p>Projeto de Antonio Dias</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>