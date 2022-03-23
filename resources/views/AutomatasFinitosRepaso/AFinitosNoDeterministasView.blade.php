<!doctype html>
<html lang="es">

<head>
    <link rel="stylesheet" type="text/css" href=" assets/css/base.css" />
    <link rel="stylesheet" type="text/css" href=" assets/css/content.css" />
    <link rel="stylesheet" type="text/css" href=" assets/css/nav.css" />
    <meta http-equiv="content-type" content="text/html;  charset=utf-8" />
    <title>Automatas No determinstas | Automatas Finitos </title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <meta name="author" content="Sebastian Avila" />
    <link rel="license" type="text/html" href="http://creativecommons.org/licenses/by-sa/4.0/" />
    <meta name="generator" content="eXeLearning 2.6 - exelearning.net" />
    <!--[if lt IE 9]><script type="text/javascript" src="exe_html5.js"></script><![endif]-->
    <script type="text/javascript" src="assets/js/exe_jquery.js"></script>
    <script type="text/javascript" src="assets/js/common_i18n.js"></script>
    <script type="text/javascript" src="assets/js/common.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body class="exe-web-site" id="exe-node-3">
    <script type="text/javascript">
        document.body.className += " js"
    </script>
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
    <div id="content">
        <header id="header">
            <div id="headerContent">Automatas Finitos</div>
        </header>
        <nav id="siteNav">
            <ul>
                <li><a href="AutomatasFinitos" class="daddy main-node">Automatas Finitos</a></li>
                <li><a href="AutomatasFinitosDeterministas" class="no-ch">Automatas Deterministas</a></li>
                <li><a href="AutomatasFinitosNoDeterministas" class="active no-ch">Automatas No Determinstas</a></li>
                <li> </li>
                <li> </li>
                <li> </li>
                <li><a href="MenuSeleccion" class="  active daddy main-node">Regresar al menu</a></li>
            </ul>
        </nav>


        <div id="main-wrapper">
            <section id="main">
                <header id="nodeDecoration">
                    <h1 id="nodeTitle">Automatas No determinstas</h1>
                </header>
                <article class="iDevice_wrapper textIdevice em_iDevice" id="id2">
                    <div class="iDevice emphasis1">
                        <header class="iDevice_header iDevice_header_noIcon">
                            <h1 class="iDeviceTitle">Automatas No deterministas </h1>
                        </header>
                        <div class="iDevice_inner">
                            <div class="iDevice_content_wrapper">
                                <div id="ta2_115_2" class="block iDevice_content">
                                    <div class="exe-text">
                                        <p><span style="font-size: 14pt;">Anteriormente vimos acerca de los Autómatas
                                                Deterministas, estos poseen la cualidad de que para cada elemento del alfabeto
                                                existe un único elemento de transición por cada estado existente, esta cualidad la
                                                llamamos determinismo, ahora, como podemos notar el nombre, estos autómatas no
                                                poseen esta cualidad, estos a su vez poseen otras características que los
                                                diferencian claramente de otros autómatas</span></p>
                                        <p><span style="font-size: 14pt;">En una definición corta y sencilla, un autómata finito
                                                no determinista o AFND tiene al cualidad de estar en varios estados a la
                                                vez.</span></p>
                                        <p><span style="font-size: 14pt;"><img src="assets/images/ImgAutomatasRepaso/automata1AFND.png" alt="" width="612" height="408" style="display: block; margin-left: auto; margin-right: auto;" /></span></p>
                                        <pre style="text-align: center;"><span style="font-size: 14pt;"><span style="font-size: 10pt;"><em><strong>Figura 1 Ejemplo de un automata finito no determinista</strong></em></span></span></pre>
                                        <h2><span style="font-size: 14pt;">Caracteristicas de un automata finito no
                                                determinista</span></h2>
                                        <p><span style="font-size: 14pt;">En cuestion de caracteristicas este posee la mayoría
                                                de las características del autómata finito deterministas, pero con algunas
                                                excepciones</span></p>
                                        <p><span style="font-size: 14pt;">Empezamos con que un AFND al igual que un AFD tiene un
                                                conjunto finito de estados, un conjunto finito de símbolos de entrada, un estado
                                                inicial y un conjunto de estados de aceptación. También dispone de una función de
                                                transición, La diferencia entre los AFD y los AFND se encuentra en el tipo de
                                                función δ. En los AFND, δ es una función que toma un estado y símbolos de entrada
                                                como argumentos (al igual que la función de transición del AFD), pero devuelve un
                                                conjunto de cero, uno o más estados (en lugar de devolver exactamente un estado,
                                                como lo hacen los AFD)</span></p>
                                        <h2><span style="font-size: 14pt;">Partes de un Automata Finito No Deterministas </span>
                                        </h2>
                                        <p><span style="font-size: 14pt;">Un poco mas gráfico, un autómata finito no
                                                determinista al igual que un Autómata Finito determinista está formado por una
                                                quíntupla</span></p>
                                        <ul>
                                            <li><span style="font-size: 14pt;">Un conjunto de estados finitos denotados por
                                                    “Q”</span></li>
                                            <li><span style="font-size: 14pt;">Un conjunto finito de símbolos de entrada también
                                                    llamado alfabeto, denotado por “Σ”</span></li>
                                            <li><span style="font-size: 14pt;">La función de transición “δ”, la uncia diferencia
                                                    que se tiene con los AFD es el hecho que, en ellos, la función de transición
                                                    devolvía un único estado, con los autómatas finitos no deterministas, puede
                                                    devolver un CONJUNTO de estados, esto da hincapié de que se puede tener uno o
                                                    más estados en los que la función desemboque</span></li>
                                            <li><span style="font-size: 14pt;">Un estado inicial, el cual sera uno de los estados
                                                    finitos de Q</span></li>
                                            <li><span style="font-size: 14pt;">Un conjunto de estados de aceptacion o finales F,
                                                    este es un subconjunto de Q debido a que puden haber mas de un estado final o
                                                    de aceptacion</span></li>
                                        </ul>
                                        <p><span style="font-size: 14pt;">Analicemos este cualidad de manera más grafica con el
                                                siguiente autómata</span></p>
                                        <p style="text-align: center;"><span style="font-size: 14pt;"><img src="assets/images/ImgAutomatasRepaso/202232315421278901021529037731766.gif" alt="" width="328" height="88" /></span></p>
                                        <pre style="text-align: center;"><span style="font-size: 10pt;"><em><strong>Figura 1.1 Automata finito no determinista<br /><br /></strong></em></span></pre>
                                        <p><span style="font-size: 14pt;">Ahora con este autómata podemos denotar lo
                                                siguiente </span></p>
                                        <ul>
                                            <li><span style="font-size: 14pt;">Se cuenta con tres estados, q0, q1y q2.</span>
                                            </li>
                                            <li><span style="font-size: 14pt;">El alfabeto está comprendido por los elementos "a"
                                                    y "b".</span></li>
                                            <li><span style="font-size: 14pt;">El estado inicial es el estado q0. </span></li>
                                            <li><span style="font-size: 14pt;">El estado final es el estado q1.</span><span style="font-size: 14pt;"></span><span style="font-size: 14pt;"></span></li>
                                        </ul>
                                        <p><span style="font-size: 14pt;">Partiendo desde el estado inicial q0, tenemos solo un
                                                "camino" para poder llegar al estado q1, en este caso solo elemento "a", estando
                                                en estado q1 podemos notar aquella propiedad que la nombra como un autómata finito
                                                no determinista, esto debido a que se posee más de un camino para el elemento "a",
                                                según lo la definición de la función de transición, al tomar el elemento a este
                                                nos devuelve más de un estado, para este autómata nos devuelve el estado q0 y q2 y
                                                se puede ver claramente por aquellos arcos que poseen el mismo elemento, ósea el
                                                elemento "a" del alfabeto. </span></p>
                                        <p style="text-align: left;"></p>
                                        <p style="text-align: left;"></p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <div id="packageLicense" class="cc cc-by-sa">
                    <p><span>Obra publicada con</span> <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Licencia Creative Commons Reconocimiento
                            Compartir igual 4.0</a></p>
                </div>
            </section>
        </div>
    </div>
    <script type="text/javascript" src="_default_js.js"></script>
</body>

</html>