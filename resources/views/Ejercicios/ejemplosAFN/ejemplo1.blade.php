@include('../../layout/header')

<style>
    .slide-contenedor {
        max-width: 100%;
        max-height: 100vh;
        width: 50%;
        height: auto;
        position: relative;
        overflow: hidden;
        /* margin: auto; */
    }

    /* .miSlider{
    display: none;
    transition: 2s;
    max-height: 100vh;
        } */

    .miSlider img {
        width: 100%;
        max-height: 100vh;
        height: inherit;
        object-fit: cover;
        vertical-align: top;
        transition: 2s;
    }

    .direcciones {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: 20px;
    }

    .direcciones a {
        color: #fff;
        display: inline-block;
        padding: 20px;
        text-decoration: none;
    }

    .direcciones a:hover {
        background: rgba(0, 0, 0, .5);
        transition: .5s;
    }

    .barras {
        position: absolute;
        bottom: 0;
        width: 100%;
        display: flex;
        justify-content: center;
        margin-bottom: 15px;
    }

    .barra {
        cursor: pointer;
        height: 2px;
        width: 25px;
        margin: 0 2px;
        background: #dcdde1;
        display: inline-block;
        margin-left: 3px;
    }

    .active {
        background-color: #e74c3c;
    }
</style>


<div id="content">
    <header id="header">
        <div id="headerContent">Diseño de un AFN</div>
    </header>
    @include('../../Ejercicios/siteNav-AFN')

    <div id="main-wrapper">
        <section id="main">
            <header id="nodeDecoration">
                <!-- <h1 id="nodeTitle">Diseño de un AFN</h1> -->
            </header>
            <article class="iDevice_wrapper textIdevice em_iDevice em_iDevice_bulb" id="id0">
                <div class="iDevice emphasis1">
                    <header class="iDevice_header">
                        <h1 class="iDeviceTitle">Diseño de un AFN</h1>
                    </header>
                    <div class="iDevice_inner">

                        <!-- area de slidebar -->
                        <div class="slide-contenedor">
                            <div class="miSlider">
                                <img src="assets/images/imagesCarrusel/Diapositiva1.png" alt="Imagen 1 ">
                            </div>
                            <div class="miSlider">
                                <img src="assets/images/imagesCarrusel/Diapositiva2.png" alt="Imagen 2">
                            </div>
                            <div class="miSlider">
                                <img src="assets/images/imagesCarrusel/Diapositiva3.png" alt="Imagen 3">
                            </div>
                            <div class="miSlider">
                                <img src="assets/images/imagesCarrusel/Diapositiva4.png" alt="Imagen 4">
                            </div>
                            <div class="miSlider">
                                <img src="assets/images/imagesCarrusel/Diapositiva5.png" alt="Imagen 5">
                            </div>
                            <div class="miSlider">
                                <img src="assets/images/imagesCarrusel/Diapositiva6.png" alt="Imagen 6">
                            </div>
                            <div class="miSlider">
                                <img src="assets/images/imagesCarrusel/Diapositiva7.png" alt="Imagen 7">
                            </div>
                            <div class="miSlider">
                                <img src="assets/images/imagesCarrusel/Diapositiva8.png" alt="Imagen 8">
                            </div>
                            <div class="direcciones">
                                <a href="#" class="atras" onclick="avanzaSlide(-1)">&#10094;</a>
                                <a href="#" class="adelante" onclick="avanzaSlide(1)">&#10095;</a>
                            </div>
                            <div class="barras">
                                <span class="barra active" onclick="posicionSlide(1)"></span>
                                <span class="barra" onclick="posicionSlide(2)"></span>
                                <span class="barra" onclick="posicionSlide(3)"></span>
                                <span class="barra" onclick="posicionSlide(4)"></span>
                                <span class="barra" onclick="posicionSlide(5)"></span>
                                <span class="barra" onclick="posicionSlide(6)"></span>
                                <span class="barra" onclick="posicionSlide(7)"></span>
                                <span class="barra" onclick="posicionSlide(8)"></span>
                            </div>
                        </div>
                    </div>

                    <script src="assets/js/main.js"></script>
                    @include('../../layout/footer')