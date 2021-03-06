<?php
define("KOSZULKA", 14.99); // cena koszulki jako stała
define("SPODNIE", 45.99); // cena spodni
define("CZAPKA", 9.63); // cena czapki
define("P_VAT", 0.23); // wysokość podatku VAT
// przypisanie zmiennych formularza
$ile_koszulki = $_POST['koszulki'];
$ile_spodnie = $_POST['spodnie'];
$ile_czapki = $_POST['czapki'];
// wartość netto zamówionych przedmiotów
$kwota_koszulki_netto = $ile_koszulki * KOSZULKA;
$kwota_spodnie_netto = $ile_spodnie * SPODNIE;
$kwota_czapki_netto = $ile_czapki * CZAPKA;
// cena netto całego zamówienia
$kwota_zamowienia_netto = $kwota_koszulki_netto + $kwota_spodnie_netto + $kwota_czapki_netto;
// wartości brutto
$kwota_koszulki_brutto = $kwota_koszulki_netto + $kwota_koszulki_netto * P_VAT;
$kwota_spodnie_brutto = $kwota_spodnie_netto + $kwota_spodnie_netto * P_VAT;
$kwota_czapki_brutto = $kwota_czapki_netto + $kwota_czapki_netto * P_VAT;
// cena zamówienia brutto
$kwota_zamowienia_brutto = $kwota_koszulki_brutto + $kwota_spodnie_brutto + $kwota_czapki_brutto;
?>

<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Portal do składania ofert oraz zleceń wykonania różnego typu prac.">
        <meta name="keywords" content="praca, oferta, zlecenie, portal">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

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
                        <i class="demo-icon icon-briefcase"></i> PORTAL
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
                            <li class="nav-item"><a class="nav-link" href="konto.php"> Konto </a></li>
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

            <br /><br /><br /><br />Skrypt z zajęć 5: <br /><br />

            <?php
            echo "Cena netto zamówionych koszulek: ".$kwota_koszulki_netto."<br/>";
            echo "Cena netto zamówionych spodni: ".$kwota_spodnie_netto."<br/>";
            echo "Cena netto zamówionych czapek: ".$kwota_czapki_netto."<br/>";
            echo "Wartość netto całego zamówienia: ".$kwota_zamowienia_netto."<br/>";
            echo "Cena brutto zamówionych koszulek: ".$kwota_koszulki_brutto."<br/>";
            echo "Cena brutto zamówionych spodni: ".$kwota_spodnie_brutto."<br/>";
            echo "Cena brutto zamówionych czapek: ".$kwota_czapki_brutto."<br/>";
            echo "Wartość brutto całego zamówienia: ".$kwota_zamowienia_brutto."<br/>";
            ?>



        </main>
    </body>
</html>