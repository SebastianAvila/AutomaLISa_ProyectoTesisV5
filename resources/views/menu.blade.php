<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>AutomaLISa</title>
    <meta name="keywords" content="Finite Automata">
    <meta name="description" content="AutomaLisa">
    <meta name="author" content="Sebastian Avila">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/menu-style.css">
    <!-- Animation Css Effectt  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar">
            <div class="header">
                <a href="index">
                    <img src="assets/images/logoEditado.png" alt="AutomaLISa">
                </a>
            </div>
        </nav>
    </header>
    <!-- end header -->
    <div class="center shadow-lg p-3">

        <div class="text">
            <p class="texto">Bienvenido a AutomaLISa, aqui podras repasar, practicar y evaluar tus conocimientos </p>
            <p class="texto">Sobre los automatas finitos y sus operaciones</p>
            <p class="texto">Haz click en alguna de las opciones de abajo</p>
        </div>

        <div class="dropdown-section " data-aos="zoom-out" data-aos-duration="2000">

            <div class="dropdown-area repaso">


                <button class="btn dropdown-toggle shadow-lg p-3  " href="#" type="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Repasar Temas
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="AutomatasFinitos">Automatas Finitos </a></li>
                    <li><a class="dropdown-item" href="AutomatasFinitosDeterministas">Automatas Finitos Deterministas</a></li>
                    <li><a class="dropdown-item" href="#">Autoamtas Finitos No Deterministas</a></li>
                    <li><a class="dropdown-item" href="#">Operaciones con automatas</a></li>
                </ul>


            </div>

            <div class="dropdown-area practicas">

                <button class="btn dropdown-toggle shadow-lg p-3 " href="#" type="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Practicas
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Automatas Finitos </a></li>
                    <li><a class="dropdown-item" href="#">Practica 1: Automatas Finitos Deterministas</a></li>
                    <li><a class="dropdown-item" href="#">Practica 2: Autoamtas Finitos No Deterministas</a></li>
                    <li><a class="dropdown-item" href="#">Practica 3: Operaciones con automatas</a></li>
                </ul>

            </div>

            <div class="dropdown-area examen">

                <button class="btn dropdown-toggle shadow-lg p-3 " href="#" type="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Examenes
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Prueba 1: Automatas Finitos Deterministas</a></li>
                    <li><a class="dropdown-item" href="#">Prueba 2: Autoamtas Finitos No Deterministas</a></li>
                    <li><a class="dropdown-item" href="#">Prueba 3: Operaciones con automatas</a></li>
                </ul>

            </div>


            <div class="dropdown-area creditos">

                <button class="btn dropdown-toggle shadow-lg p-3 " href="#" type="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Extras
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Creditos</a></li>
                    <li><a class="dropdown-item" href="#">Agradecimientos</a></li>

                </ul>

            </div>

        </div>

    </div>

<a href="index"> <input type="button" value="index" ></a>
    

    <!-- Javascript files-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/plugin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- js animation css -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- ejecuta el script de animacion  -->
    <script>
        AOS.init();
    </script>
</body>

</html>