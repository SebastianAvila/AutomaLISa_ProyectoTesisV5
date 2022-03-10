<!doctype html>
<html lang="es">

<head>
    <link rel="stylesheet" type="text/css" href="../resources/css/base.css" />
    <link rel="stylesheet" type="text/css" href=" ../resources/css/content.css" />
    <link rel="stylesheet" type="text/css" href="../resources/css/nav.css" />
    <meta http-equiv="content-type" content="text/html;  charset=utf-8" />
    <title>Automatas Finitos </title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <meta name="author" content="Sebastian Avila" />
    <link rel="license" type="text/html" href="http://creativecommons.org/licenses/by-sa/4.0/" />
    <meta name="generator" content="eXeLearning 2.6 - exelearning.net" />
    <meta name="description" content="Automatas Finitos" />
    <!--[if lt IE 9]><script type="text/javascript" src="exe_html5.js"></script><![endif]-->
    <script type="text/javascript" src="../resources/js/exe_jquery.js"></script>
    <script type="text/javascript" src="../resources/js/common_i18n.js"></script>
    <script type="text/javascript" src="../resources/js/common.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body class="exe-web-site" id="exe-node-0">
    <script type="text/javascript">
        document.body.className += " js"
    </script>
    <div id="content">
        <header id="header">
            <div id="headerContent">Automatas Finitos</div>
        </header>
        <nav id="siteNav">
            <ul>
                <li id="active"><a href="AutomatasFinitos" class="active daddy main-node">Automatas Finitos</a></li>
                <li><a href="AutomatasFinitosDeterministas" class="no-ch">Automatas Deterministas</a></li>
            </ul>
        </nav>
        
        <div id="main-wrapper">
            <section id="main">
                <header id="nodeDecoration">
                    <h1 id="nodeTitle">Automatas Finitos</h1>
                </header>
                <article class="iDevice_wrapper textIdevice em_iDevice em_iDevice_bulb" id="id0">
                    <div class="iDevice emphasis1">
                        <header class="iDevice_header">
                            <h1 class="iDeviceTitle">Introduccion a los automatas finitos</h1>
                        </header>
                        <div class="iDevice_inner">
                            <div class="iDevice_content_wrapper">
                                <div id="ta0_117_2" class="block iDevice_content">
                                    <div class="exe-text"> 
                                        <h1 style="text-align: left;"><span style="font-size: 24pt;">¿Autómatas finitos?</span></h1>
                                        <p style="text-align: left;"> <span style="font-size: 12pt;">Tal vez haz escuchado de ellos, o tal vez te está enseñando sobre ellos, pero no terminas de entenderles, y es normal, así que o te preocupes, aquí te vamos a ayudar, los autómatas finitos son en sí, estados y transiciones que cambian constantemente según el contexto, estos poseen un estado inicial y uno final, en algunos casos un solo estado puede llegar a ser ambos, desde inicio hasta final. </span></p>
                                        <p style="text-align: left;"></p>
                                        <p style="text-align: left;"><img src="../resources/images/ImgAutomatasRepaso/AutomataComun.png" alt="Automata Finito " width="250" height="141" style="display: block; margin-left: auto; margin-right: auto;" /></p>
                                        <pre style="text-align: center;"><em><strong><span style="font-size: 10pt;">Figura 1: Ejemplo de automata finito </span></strong></em></pre>
                                        <h2 style="text-align: left;"><span style="font-size: 18pt;">¿Que son los automatas finitos? </span></h2>
                                        <p><span style="font-size: 12pt;">Los automatas finitos son maquinas abstractas que pueden o no aceptar cadenas de entrada, estos constan de una unidad de control  o unidad de memoria que tiene tienen configuraciones internas llamadas estados finales de de aceptacion asi como un estado inicial, todas estas partes del automata seran analizadas mas adelante con mas detenimiento </span></p>
                                        <h2 style="text-align: left;"><span style="font-size: 18pt;">¿De donde vienen los automatas finitos? </span></h2>
                                        <p><img src="../resources/images/ImgAutomatasRepaso/AlanTuringColor.jpg" alt="Alan Turing" width="250" height="351" style="display: block; margin-left: auto; margin-right: auto;" /></p>
                                        <pre style="text-align: center;"><span style="font-size: 10pt;"><em><strong>Figura 2: Alan Mathison Turing en 1932 (Colorizada)</strong></em></span></pre>
                                        <p style="text-align: left;"><br /><span style="font-size: 12pt;">Para esto tenemos que remontarnos a la decada de los 1900,  donde  un brillante matematico ingles llamado Alan Mathison Turing estudia una maquina abtracta la cual tiene todas las capacidades de una PC actual (Persona Computer por sus siglas en ingles), posterior a esta en la decada de los 50 y 60 disntitos investigadores desarrollan maquinas mas simples a la cual hoy las conocemos como "Automatas finitos", estos hoy en dia forman parte del modelo teorico de funcionamiento de mucho hardware y software actual. </span></p>
                                        <h2 style="text-align: left;"><span style="font-size: 18pt;">Ejemplo de un automata finito comun </span></h2>
                                        <p><span style="font-size: 12pt;">(Hopcroft et al., 2007, p. 3) define un autómata básico como un interruptor de encendido y apagado el cual contiene estado  “ON” y  “OFF”, los cuales va cambiando según su entrada, en este autómata podemos notar que partiendo desde un estado cualquiera, solo contiene una sola forma de ir al siguiente estado (a la cual se le llama “transición”), esta propiedad se le conoce como determinismo y al encontrarse convierte el automta en un “autómata finito determinista” o solo “autómata determinista”,  del cual hablaremos mas adelante. </span></p>
                                        <p> </p>
                                        <p style="text-align: left;"><img src="../resources/images/ImgAutomatasRepaso/AutomataFinitoInterruptor.png" width="337" height="168" alt="Automatata finito como interuptor de encendido/apagado" style="display: block; margin-left: auto; margin-right: auto;" /></p>
                                        <pre style="text-align: center;"><span style="font-size: 10pt;"><em><strong>Figura 3: Automata Finito como un interruoptor de luz</strong></em><em><br /></em></span></pre>
                                        <p style="text-align: left;"></p>
                                        <p><span style="font-size: 12pt;">Como se puede apreciar se pose en aquellas flechas la leyenda "pulsar", esta represanta al usuario el cual pulsa el interruptor para poder apagar ("OFF") o prender ("ON") ya sea un foco o culaquier aparato, cada que se "preciona" el estado cambia, dentro de la imagen podemo notar un flecha con la palabra "inicio" esta es opcional ponerla al momento de crear un automata, este simbolo denota el inicio del automata tambien llamado "estado inicial", para este ejemplo el automata no contiente un"estado final"  (el cual explicaremos mas adelante), ya que siempre cambiara  segun el contexto  al que se aplicom, acontinuacion te hablaremos de un automata que si contiene tanto un "estado inicial" y un "estado final". </span></p>
                                        <p></p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <div id="packageLicense" class="cc cc-by-sa">
                    <p><span>Obra publicada con</span> <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Licencia Creative Commons Reconocimiento Compartir igual 4.0</a></p>
                </div>
            </section>
        </div>
        <div id='bottomPagination'>
            
        </div>
    </div>
    <script type="text/javascript" src="../resources/js/_default_js.js"></script>
</body>

</html>