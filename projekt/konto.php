<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Portal do składania ofert oraz zleceń wykonania różnego typu prac.">
        <meta name="keywords" content="praca, oferta, zlecenie, portal">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Portal zleceniowy</title>

        <link rel="stylesheet" href="css/fontello.css" type="text/css" />
        <link rel="stylesheet" href="main.css" type="text/css" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;700&display=swap" rel="stylesheet" type='text/css'>


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    </head>

    <body>
        
        <header>

            <nav class="navbar navbar-expand-lg navbar-light bg-coolors-5 fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand title" href="#">
                        <i class="demo-icon icon-briefcase"></i> DO-THIS
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse" id="navbar">
                        <ul class="navbar-nav me-auto mx-auto">
                            <li class="nav-item"><a class="nav-link"href="#"> Start </a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">Prace</a>
                                <ul class="dropdown-menu bg-coolors-5">
                                    <li><a class="dropdown-item" href="#"> Oferty </a></li>
                                    <li><a class="dropdown-item" href="#"> Zlecenia </a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="faq.html"> FAQ </a></li>
                            <li class="nav-item"><a class="nav-link" href="#"> Konto </a></li>
                            <li class="nav-item"><a class="nav-link" href="#"> Kontakt </a></li>
                            <li class="nav-item"><a class="nav-link" href="#"> Polityka prywatności </a></li>
                        </ul>

                        <form class="d-flex">
                            <input class="form-control me-2" type="text" placeholder="Search">
                            <button class="btn btn-dark bg-coolors-2" type="button"><i class="demo-icon icon-search"></i></button>
                          </form>
                    </div>
                </div>
            </nav>
        </header>

        <main>

            <br /><br /><br /><br />
            
            <form action="zaloguj.php" method="post">
                Login: <br /> <input type="text" name="login"/> <br />
                Hasło: <br /> <input type="password" name="haslo"/> <br /><br />
                <input type="submit" value="Zaloguj się" />
                
            </form>

            



        </main>
    </body>
</html>