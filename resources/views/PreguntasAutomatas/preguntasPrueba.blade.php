 @include('../layout/header')

 <style>
     p{
        font-size:21.5px;
     }
 </style>
 <div id="content">
     <header id="header">
         <div id="headerContent">
             <h1>Pruebas preguntas</h1>
           
             <a href="MenuSeleccion">  <h1>Regresar al menu</h1></a>
         </div>
     </header>
     <section id="main">
         <article class="node level-1-node" id="exe-node-0">
             <header class="nodeDecoration">
                 <h1 id="exenode_0_Inicio" class="nodeTitle">Inicio</h1>
             </header>
             <article class="iDevice_wrapper textIdevice" id="id2-0">
                 <div class="iDevice emphasis0">
                     <div id="ta2_114_2" class="block iDevice_content">
                         <div class="exe-text">
                             <p>Texto antes de la prueba</p>
                         </div>
                         <div class="iDevice_buttons feedback-button js-required"><input type="button" class="feedbackbutton" value="Mostrar retroalimentación" /></div>
                         <div class="feedback js-feedback js-hidden">
                             <p>Retroalimentacion despues del texto </p>
                         </div>
                     </div>
                 </div>
             </article>
             <article class="iDevice_wrapper QuizTestIdevice em_iDevice em_iDevice_question" id="id0-0">
                 <script type="text/javascript">
                     /*<![CDATA[*/
                     var numQuestions = 2;
                     var rawScore = 0;
                     var actualScore = 0;
                     var question0;
                     var question1;
                     var key0 = 0;
                     var key1 = 1;

                     function getAnswer() {
                         for (var i = 0; i < 3; i++) {
                             if (document.getElementById("quizForm0").key0b0[i].checked) {
                                 question0 = document.getElementById("quizForm0").key0b0[i].value;
                                 break;
                             }
                         }

                         for (var i = 0; i < 4; i++) {
                             if (document.getElementById("quizForm0").key1b0[i].checked) {
                                 question1 = document.getElementById("quizForm0").key1b0[i].value;
                                 break;
                             }
                         }
                     }

                     function calcRawScore() {

                         if (question0 == key0) {
                             rawScore++;
                         }
                         if (question1 == key1) {
                             rawScore++;
                         }

                     }

                     function calcScore2() {
                         getAnswer();

                         calcRawScore();
                         actualScore = Math.round(rawScore / numQuestions * 100);
                         var id = "0";
                         document.getElementById("quizForm" + id).submitB.disabled = true;
                         var s = document.getElementById("quizFormScore" + id);
                         var msg_str = "Su puntuación es %d%%";
                         msg_str = msg_str.replace("%d", actualScore).replace("%%", "%");
                         if (s) {
                             s.innerHTML = "<div class='feedback'><p>" + msg_str + "</p></div>";
                         } else {
                             alert(msg_str);
                         }

                     }
                     /*]]>*/
                 </script>
                 <div class="iDevice emphasis1">
                     <header class="iDevice_header">
                         <h2 class="iDeviceTitle">Cuestionario de prueba </h2>
                     </header>
                     <div class="iDevice_inner">
                         <div class="iDevice_content_wrapper">
                             <form name="quizForm0" id="quizForm0" action="#" class="quiz-test-form">
                                 <input type="hidden" name="passrate" id="passrate-0" value="70" />
                                 <section class="question">
                                     <h1 class="js-sr-av">Pregunta</h1>
                                     <div id="taquestion0b0" class="block iDevice_content">
                                         <p>Pregunta de prueba 1 </p>
                                     </div>
                                     <section class="iDevice_answers">
                                         <h1 class="js-sr-av">Respuestas</h1>
                                         <section class="iDevice_answer">
                                             <p class="iDevice_answer-field js-required">
                                                 <label for="key0b01" class="sr-av"><a href="#answer-key0b01">Opción
                                                         1</a></label><input type="radio" name="key0b0" id="key0b01" value="0" />
                                             </p>
                                             <div class="iDevice_answer-content" id="answer-key0b01">
                                                 <div id="taoptionAnswer0q0b0" class="block iDevice_content">
                                                     <p>Opcion 1 </p>
                                                 </div>
                                             </div>
                                         </section>
                                         <section class="iDevice_answer">
                                             <p class="iDevice_answer-field js-required">
                                                 <label for="key0b02" class="sr-av"><a href="#answer-key0b02">Opción
                                                         2</a></label><input type="radio" name="key0b0" id="key0b02" value="1" />
                                             </p>
                                             <div class="iDevice_answer-content" id="answer-key0b02">
                                                 <div id="taoptionAnswer1q0b0" class="block iDevice_content">
                                                     <p>Opcion 2 </p>
                                                 </div>
                                             </div>
                                         </section>
                                         <section class="iDevice_answer">
                                             <p class="iDevice_answer-field js-required">
                                                 <label for="key0b03" class="sr-av"><a href="#answer-key0b03">Opción
                                                         3</a></label><input type="radio" name="key0b0" id="key0b03" value="2" />
                                             </p>
                                             <div class="iDevice_answer-content" id="answer-key0b03">
                                                 <div id="taoptionAnswer2q0b0" class="block iDevice_content">
                                                     <p>Opcion 3 </p>
                                                 </div>
                                             </div>
                                         </section>
                                     </section>
                                 </section>
                                 <section class="question">
                                     <h1 class="js-sr-av">Pregunta</h1>
                                     <div id="taquestion1b0" class="block iDevice_content">
                                         <p>Pregunta 2 </p>
                                     </div>
                                     <section class="iDevice_answers">
                                         <h1 class="js-sr-av">Respuestas</h1>
                                         <section class="iDevice_answer">
                                             <p class="iDevice_answer-field js-required">
                                                 <label for="key1b01" class="sr-av"><a href="#answer-key1b01">Opción
                                                         1</a></label><input type="radio" name="key1b0" id="key1b01" value="0" />
                                             </p>
                                             <div class="iDevice_answer-content" id="answer-key1b01">
                                                 <div id="taoptionAnswer0q1b0" class="block iDevice_content">
                                                     <p>Opcion 1 </p>
                                                 </div>
                                             </div>
                                         </section>
                                         <section class="iDevice_answer">
                                             <p class="iDevice_answer-field js-required">
                                                 <label for="key1b02" class="sr-av"><a href="#answer-key1b02">Opción
                                                         2</a></label><input type="radio" name="key1b0" id="key1b02" value="1" />
                                             </p>
                                             <div class="iDevice_answer-content" id="answer-key1b02">
                                                 <div id="taoptionAnswer1q1b0" class="block iDevice_content">
                                                     <p>Opcion 2 </p>
                                                 </div>
                                             </div>
                                         </section>
                                         <section class="iDevice_answer">
                                             <p class="iDevice_answer-field js-required">
                                                 <label for="key1b03" class="sr-av"><a href="#answer-key1b03">Opción
                                                         3</a></label><input type="radio" name="key1b0" id="key1b03" value="2" />
                                             </p>
                                             <div class="iDevice_answer-content" id="answer-key1b03">
                                                 <div id="taoptionAnswer2q1b0" class="block iDevice_content">
                                                     <p>Opcion  3 </p>
                                                 </div>
                                             </div>
                                         </section>
                                         <section class="iDevice_answer">
                                             <p class="iDevice_answer-field js-required">
                                                 <label for="key1b04" class="sr-av"><a href="#answer-key1b04">Opción
                                                         4</a></label><input type="radio" name="key1b0" id="key1b04" value="3" />
                                             </p>
                                             <div class="iDevice_answer-content" id="answer-key1b04">
                                                 <div id="taoptionAnswer3q1b0" class="block iDevice_content">
                                                     <p>Opcion 4</p>
                                                 </div>
                                             </div>
                                         </section>
                                     </section>
                                 </section>
                                 <div class="block iDevice_buttons">
                                     <p><input type="submit" name="submitB" value="ENVIAR RESPUESTAS" /> <span class="js-hidden js-warning">Habilitar JavaScript</span></p>
                                 </div>
                                 <div id="quizFormScore0"></div>
                             </form>
                         </div>
                     </div>
                 </div>
             </article>
             <article class="iDevice_wrapper textIdevice" id="id1-0">
                 <div class="iDevice emphasis0">
                     <div id="ta1_113_2" class="block iDevice_content">
                         <div class="exe-text">
                             <p>Texto despues de las preguntas </p>
                         </div>
                     </div>
                 </div>
             </article>
         </article>
     </section>
     <div id="packageLicense" class="cc cc-by-sa">
         <p><span>Obra publicada con</span> <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Licencia Creative Commons Reconocimiento Compartir
                 igual 4.0</a></p>
     </div>


 </div>




 @include('../layout/footer')