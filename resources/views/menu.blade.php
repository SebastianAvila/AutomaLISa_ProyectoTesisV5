<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/df8066961b.js" crossorigin="anonymous"></script>
    <!-- style css -->
    <link rel="stylesheet" href="assets/css/menu-style.css">
    <title>Menu</title>
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

    <div class="center">
        <div class="text">
            <p class="texto">Bienvenido a AutomaLISa, aqui podras aprender, practicar y evaluar tus conocimientos </p>
            <p class="texto"> sobre los automatas finitos y sus operaciones</p>
            <p class="texto">Haz click en alguna de las opciones de abajo para empezar</p>
        </div>
    </div>


    <div>
        <div class="dropdown-section ">

            <div class="dropdown-area repaso">


                <button class="btn dropdown-toggle shadow-lg p-3 btn-dropdown  " href="#" type="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Teoria
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="AutomatasFinitos">Automatas Finitos </a></li>
                    <li><a class="dropdown-item" href="AutomatasFinitosDeterministas">Automatas Finitos Deterministas</a></li>
                    <li><a class="dropdown-item" href="AutomatasFinitosNoDeterministas">Autoamtas Finitos No Deterministas</a></li>
                    <li><a class="dropdown-item" href="layaoutRepasoBase">Operaciones con automatas</a></li>
                </ul>


            </div>

            <div class="dropdown-area practicas">

                <button class="btn dropdown-toggle shadow-lg p-3 btn-dropdown " href="#" type="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Ejemplos
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Automatas Finitos </a></li>
                    <li><a class="dropdown-item" href="#">Ejemplos 1: Automatas Finitos Deterministas</a></li>
                    <li><a class="dropdown-item" href="#">Ejemplos 2: Autoamtas Finitos No Deterministas</a></li>
                    <li><a class="dropdown-item" href="#">Ejemplos 3: Operaciones con automatas</a></li>
                </ul>

            </div>

            <div class="dropdown-area examen">

                <button class="btn dropdown-toggle shadow-lg p-3 btn-dropdown " href="#" type="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Practica
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="PreguntasPrueba">Preguntas</a></li>
                    <li><a class="dropdown-item" href="#">Practica 2: Autoamtas Finitos No Deterministas</a></li>
                    <li><a class="dropdown-item" href="#">Practica 3: Operaciones con automatas</a></li>
                </ul>

            </div>


            <div class="dropdown-area creditos">

                <button class="btn dropdown-toggle shadow-lg p-3 btn-dropdown " href="#" type="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Ejercicios
                </button>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Creditos</a></li>
                    <li><a class="dropdown-item" href="#">Agradecimientos</a></li>

                </ul>

            </div>
        </div>
    </div>


    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-linkedin-in"></i></a>

                <!-- Github -->
                <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>