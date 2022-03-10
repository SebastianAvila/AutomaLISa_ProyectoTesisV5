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
    <link rel="stylesheet" href="{{ secure_asset('~/resources/css/bootstrap.min.css') }} ">
    <!-- style css -->
    <!-- <link rel="stylesheet" href="../resources/css/style.css"> -->
    <link rel="stylesheet" href="{{secure_asset('~/resources/css/style.css')}}   ">
    <!-- Animation Css Effectt  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Responsive-->
    <link rel="stylesheet" href="../resources/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="../resources/images/favicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="../resources/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    
</head>



<!-- body -->

<body class="main-layout">
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href=""><img src=" ~/resources/images/logoEditado.png" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="#we_do">Sobre este proyecto</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contact">Contactanos</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- end header inner -->
    <!-- end header -->
    <!-- banner -->
    <section class="banner_main">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-4" data-aos="fade-right"  data-aos-duration="2500"    data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
                    <div class="text-bg">
                        <h1>Learn <br>
                            Better <br>
                            Every <br>
                            Day <br>
                            <span class="black">¡Aprende mejor cada dia! </span>
                        </h1>
                        <a href="MenuSeleccion ">Empezar</a>
                    </div>
                </div>
                <div class="col-md-8" data-aos="fade-left" data-aos-duration="2500"   data-aos-anchor="#example-anchor" data-aos-offset="500" data-aos-duration="500">
                    <div class="text-img">
                        <figure><img src="../resources/images/ImgFront1.png" alt="#" /></figure>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- end banner -->
    <!-- we_do -->
    <div id="we_do" class="we_do">
        <div class="container" data-aos="zoom-in"  data-aos-duration="2000">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>¿Por que este proyecto?</h2>
                        <span></span>
                        <strong></strong>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="we_do_box">
                        <i><img class="imgInBlack" src="../resources/images/tesisImg.png" alt="#" /></i>
                        <h4>Proyecto de Tesis</h4>
                        <p>Automa<span>LIS</span>a nace de un proyecto de tesis para poder ayudar a estudiantes de la licenciatura en ingenieria de software en el tema de automatas finitos </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="we_do_box">
                        <i><img src="../resources/images/learning.png" alt="#" /></i>
                        <h4>Aprendizaje</h4>
                        <p>Ese software busca ayudar a estudiantes de carrera afines a la computacion con el tema de los automatas finitos asi como operaciones sencillas relacionadas al tema </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="we_do_box">
                        <i><img class="imgInBlack" src="../resources/images/experienceImg.png" alt="#" /></i>
                        <h4>Experiencia</h4>
                        <p> El desarrolllo de este sistema tambien busca aportar experiencia tanto al desarrollador como a las personas al momento de estudiar el tema principal</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end we_do -->

    <!-- contact -->
    <div id="contact" class="contact" data-aos="fade-up"
     data-aos-anchor-placement="top-bottom" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>¡Contacta con nosotros!</h2><br><br>
                        <h3>Tus comentarios son importates para mejorar este software</h3>
                        <br>
                        <span></span>
                        <strong></strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <form class="main_form">
                        <div class="row">
                            <div class="col-md-12 ">
                                <input class="contactus" placeholder="Nombre" type="text" name="Name">
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Numero telefonico" type="text" name="Phone_Number">
                            </div>
                            <div class="col-md-6">
                                <input class="contactus" placeholder="Carrera" type="text" name="Carrera">
                            </div>
                            <div class="col-md-12">
                                <input class="contactus" placeholder="Email " type="Email" name="Email">
                            </div>
                            <div class="col-md-12">
                                <textarea class="textarea" placeholder="Mensaje" type="text" name="Message"></textarea>
                            </div>
                            <div class="col-sm-12">
                                <button class="send_btn">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

    <!--  footer -->
    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="cont">
                            <h3>Esta pagina es un prototipo, si encuentras una falla y/o error, reportala de inmediato<br>

                            </h3>
                            <span>Sigueme en mis Redes Sociales</span>
                            <a class="read_more" href="#">Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p>Copyright 2021 All Right Reserved By Sebastian Avila</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="../resources/js/jquery.min.js"></script>
    <script src="../resources/js/popper.min.js"></script>
    <script src="../resources/js/bootstrap.bundle.min.js"></script>
    <script src="../resources/js/jquery-3.0.0.min.js"></script>
    <script src="../resources/js/plugin.js"></script>
    <!-- sidebar -->
    <script src="../resources/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../resources/js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <!-- js animation css -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>