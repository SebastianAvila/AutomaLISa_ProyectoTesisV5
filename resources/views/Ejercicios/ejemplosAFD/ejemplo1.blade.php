@include('../../layout/header')

<style>
    .buttons {
        text-align: center;
    }
</style>


<div id="content">
    <header id="header">
        <div id="headerContent">Diseño de un AFN</div>
    </header>
    @include('../../Ejercicios/siteNav-AFD')
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

                        <!-- Original Found here: http://jsfiddle.net/k6jq2ym6/6/ -->
                        <section class="slider">

                            <div><img src="assets/images/imagesEjAFN/EJ1 AFD/Diapositiva1.jpg" alt="Diapositiva " srcset=""></div>
                            <div><img src="assets/images/imagesEjAFN/EJ1 AFD/Diapositiva2.jpg" alt="Diapositiva " srcset=""></div>
                            <div><img src="assets/images/imagesEjAFN/EJ1 AFD/Diapositiva3.jpg" alt="Diapositiva " srcset=""></div>
                            <div><img src="assets/images/imagesEjAFN/EJ1 AFD/Diapositiva4.jpg" alt="Diapositiva " srcset=""></div>
                            <div><img src="assets/images/imagesEjAFN/EJ1 AFD/Diapositiva5.jpg" alt="Diapositiva " srcset=""></div>
                            <div><img src="assets/images/imagesEjAFN/EJ1 AFD/Diapositiva6.jpg" alt="Diapositiva " srcset=""></div>
                            <div><img src="assets/images/imagesEjAFN/EJ1 AFD/Diapositiva7.jpg" alt="Diapositiva " srcset=""></div>

                        </section>

                        <div class="buttons">
                            <button type="button" class="btn btn-outline-primary" id="toggle">
                                Play
                            </button>
                        </div>

                    </div>

@include('../.../Ejercicios/js-carrusel/code-carrusel')
@include('../../layout/footer')