<!doctype html>
<html lang="es">

<head>
    <link rel="stylesheet" type="text/css" href="assets/css/base.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/content.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/nav.css" />
    <meta http-equiv="content-type" content="text/html;  charset=utf-8" />
    <title>Automatas Deterministas | Automatas Finitos </title>
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

<body class="exe-web-site" id="exe-node-1">
    <script type="text/javascript">
        document.body.className += " js"
    </script>
    <div id="content">
        <header id="header">
            <div id="headerContent">Automatas Finitos</div>
        </header>
        <nav id="siteNav">
            <ul>
                <li><a href="AutomatasFinitos" class="daddy main-node">Automatas Finitos</a></li>
                <li id="active"><a href="AutomatasFinitosdeterministas" class="active no-ch">Automatas Deterministas</a></li>
            </ul>
        </nav>
        <div id="main-wrapper">
            <section id="main">
                <header id="nodeDecoration">
                    <h1 id="nodeTitle">Automatas Deterministas</h1>
                </header>
                <article class="iDevice_wrapper textIdevice" id="id1">
                    <div class="iDevice emphasis0">
                        <div id="ta1_112_2" class="block iDevice_content">
                            <div class="exe-text">
                                <p><span style="font-size: 12pt;">Una vez repasado que son los autómatas finitos ahora pasaremos a estudiar un división de estos, miremos el siguiente autómata: </span></p>
                                <p><span style="font-size: 12pt;"><img src="assets/images/ImgAutomatasRepaso/download.png" alt="Automata Finito" width="272" height="155" style="display: block; margin-left: auto; margin-right: auto;" /></span></p>
                                <pre style="text-align: center;"><span style="font-size: 10pt;"><em><strong>Figura 2: Automata Finito<br /><br /><br /></strong></em></span></pre>
                                <h2><span style="font-size: 18pt;">Definicion de automata finito determinista </span></h2>
                                <p><span style="font-size: 12pt;">Un autómata finito determinista o también abreviado "AFD" es a que únicamente puede estar en un único estado después de leer cual sea su entrada, la palabra "determinista" hace referencia al hecho de que para cada entrada solo existe un único estado</span></p>
                                <h2><span style="font-size: 18pt;">Partes de un autómata determinista </span></h2>
                                <p><span style="font-size: 12pt;">Con ayuda del autómata en la Figura 2 te explicaremos cada parte de un autómata finito determinista este consta de:</span></p>
                                <p><span style="font-size: 12pt;">1.  Un conjunto de finito o contable de estados, estos suelen ser identificados con la letra Q, pero no necesariamente, este puede ser designado a criterio del creador</span></p>
                                <p style="padding-left: 90px;"><span style="font-size: 12pt;">Para el caso de la Figura 2 podemos notar que estos están definidos por la letra "S" y cada estado es enumerado con un pequeño número al costado de la letra que se designe,</span></p>
                                <p style="padding-left: 90px;"><span style="font-size: 12pt;">para el ejemplo podemos notar que el primer estado es "S1" y el segundo es "S2" estos están representados por un círculo.  </span></p>
                                <p style="padding-left: 90px;"></p>
                                <p style="padding-left: 90px;"><spa n style="font-size: 12pt;"><img src="assets/images/ImgAutomatasRepaso/descarga__copia.png" alt="" width="272" height="155" style="display: block; margin-left: auto; margin-right: auto;" /></span></p>
                                <pre style="text-align: center;"><em><strong><span style="font-size: 10pt;">Figura 2.1: Conjunto de estados marcados en un círculo de color rojo</span></strong></em></pre>
                                <p></p>
                                <p style="padding-left: 90px;"><span style="font-size: 12pt;"></span><span style="font-size: 10pt;"><em><strong></strong></em><br /><br /><br /></span></p>
                                <p><span style="font-size: 12pt;">En los estados podemos encontrar internamente una clasificación la cual es la siguiente </span></p>
                                <p><span style="font-size: 12pt;"><img src="assets/images/ImgAutomatasRepaso/descarga__copia_3__copia.png" alt="" width="78" height="79" />  Este es el más común de todos, el solo no posee alguna características hasta que se le dé una, está formada por un círculo de una sola línea con el identificador, para el ejemplo es la letra "S", se le conoce como "<em><strong>Estado</strong></em>". </span></p>
                                <p><span style="font-size: 12pt;"><img src="assets/images/ImgAutomatasRepaso/descarga__copia_2__copia.png" alt="" width="109" height="83" />  Si al estado anterior se le añade una flecha corta apuntando hacia ella, se convierte en un <strong>"Estado Inicial”</strong>, por este estado pasaran todas las cadenas que se pretende que el autómata acepte.</span><span style="font-size: 12pt;"></span><span style="font-size: 12pt;"></span></p>
                                <p><span style="font-size: 12pt;"><img src="assets/images/ImgAutomatasRepaso/descarga__copia_2_.png" alt="" width="74" height="74" />En esta clase de estado destaca el hecho de que al diferencia de un "Estado” normal, este posee doble línea, está la convierte en automático en un "Estado Final" o "Estado de Aceptación", aquí es donde se</span></p>
                                <p><span style="font-size: 12pt;">pretende que la cadena de caracteres que paso primero por el estado de aceptación sea o no aceptado</span></p>
                                <p><span style="font-size: 12pt;"><img src="assets/images/ImgAutomatasRepaso/descarga__copia_4__copia.png" alt="" width="103" height="70" /></span><span style="font-size: 12pt;"></span><span style="font-size: 12pt;">Ahora tenemos un caso particular, aquí podemos notar que se tiene la doble línea del <strong><em>"Estado Final"</em></strong> pero también tenemos la flecha lateral del <em><strong>"Estado Inicial"</strong></em>, en este caso este estado las propiedad de ambos estados, es decir que, por aquí pasarán las cadenas de caracteres al igual que podrán ser o no aceptadas debido a que se tienen las propiedades del <em><strong>"Estado Final" </strong></em></span></p>
                                <p><span style="font-size: 12pt;">2.  Un conjunto finito de símbolos de entrada, a menudo designado como Σ., en el ejemplo de la Figura 2 se puede notar que el alfabeto dentro es "0" y “1", no necesariamente tienen que ser números, el alfabeto puede ser letras, números, caracteres etc., esto depende </span><span style="font-size: 12pt;">del contexto en el que se aplique el autómata creado, así como del creador del mismo autómata.</span></p>
                                <p style="padding-left: 90px;"><span style="font-size: 12pt;"><img src="assets/images/ImgAutomatasRepaso/descarga__copia_4_.png" alt="" width="272" height="155" style="display: block; margin-left: auto; margin-right: auto;" /></span></p>
                                <pre style="padding-left: 90px; text-align: center;"><span style="font-size: 10pt;"><em><strong>Figura 2. 6 elementos del alfabeto del autómata resaltados por una flecha roja<br /><br /></strong></em><em><strong><br /></strong></em></span></pre>
                                <p></p>
                                <p><span style="font-size: 12pt;">3.  Como tercer elemento tenemos la función de transición, esta toma como argumentos un estado y un símbolo de entrada, al final devuelve un estado, esta se designa habitualmente con el símbolo "δ." y la representación grafica por lo general es un arco entre los estados y etiquetas sobre los mismos, estos contienen alguno de los elemento del alfabeto explicados en el punto 2, te explicaremos este proceso con el autómata de la "Figura 2" </span></p>
                                <p><span style="font-size: 12pt;">La siguiente secuencian explica el proceso: </span></p>
                                <p style="padding-left: 330px;">    <img src="assets/images/ImgAutomatasRepaso/paso_2.png" alt="" width="272" height="155" /><img src="assets/images/ImgAutomatasRepaso/flecha.png" alt="" width="100" height="170" /><img src="assets/images/ImgAutomatasRepaso/paso_3.png" alt="" width="272" height="155" /><img src="assets/images/ImgAutomatasRepaso/flecha.png" alt="" width="100" height="170" /><img src="assets/images/ImgAutomatasRepaso/paso_4.png" alt="" width="272" height="155" /></p>
                                <p style="padding-left: 330px;">       Como primer paso se toma como argumento un                                        Se busca que exista un arco con la etiqueta                                          Finamente se devulve un estado final (S2 )</p>
                                <p style="padding-left: 330px;">estado  (S1 )y un simbolo de entrada  en este caso el cero                                      con el mismo simbolo de entrada    </p>
                                <p style="padding-left: 120px;"></p>
                                <p><span style="font-size: 12pt;">4. El cuarto elemento es el estafo inicial, según lo explicado en el punto 1, este es representado por un círculo de una sola línea con una flecha apuntando hacia si mismo<img src="assets/images/ImgAutomatasRepaso/descarga__copia_2__copia.png" alt="" width="109" height="83" style="display: block; margin-left: auto; margin-right: auto;" /></span></p>
                                <pre style="text-align: center;"><span style="font-size: 10pt;"><em><strong>Figura 2.10 Estado inical de un automata comun<br /></strong></em></span></pre>
                                <p style="text-align: left;"><span style="font-size: 12pt;">5. Un conjunto de <em><strong>"Estados Finales"</strong></em> o <em><strong>"Estados de aceptación"</strong></em>, esto da hincapié a que según el contexto del auto amata, así como criterios del creador de este, se puede tener más de un estado final o tambien poder ser un <em><strong>"Estado Inicial" </strong></em></span></p>
                                <p style="text-align: left;"><span style="font-size: 12pt;"><img src="assets/images/ImgAutomatasRepaso/descarga__copia_2_.png" alt="" width="74" height="74" style="display: block; margin-left: auto; margin-right: auto;" /><img src="assets/images/ImgAutomatasRepaso/descarga__copia_4__copia.png" alt="" width="103" height="70" style="display: block; margin-left: auto; margin-right: auto;" /></span></p>
                                <pre style="text-align: center;"><em><strong><span style="font-size: 12pt;">Figuras 2.11 y 2.12 Estado Final y Estado de inicio y final </span></strong></em></pre>
                            </div>
                        </div>
                    </div>
                </article>
                <div id="packageLicense" class="cc cc-by-sa">
                    <p><span>Obra publicada con</span> <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Licencia Creative Commons Reconocimiento Compartir igual 4.0</a></p>
                </div>
            </section>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/_default_js.js"></script>
</body>

</html>