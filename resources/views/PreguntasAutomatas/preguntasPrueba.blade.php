 @include('../layout/header')

 <style>
     p {
         font-size: 21.5px;
     }



     @media (max-width: 800px) {
         .iframe-conted {
             width: 800%;
             height: 500%;
         }
     }
 </style>

 <header id="header">
     <div id="headerContent">
         <h1>Pruebas preguntas</h1>
         <a href="MenuSeleccion">
             <h1>Regresar al menu</h1>
         </a>
     </div>
 </header>
 <div id="content">

     <div class="iDevice_inner">
         <div class="iframe-conted">

             <iframe src="Question" title="Desk" scrolling="no" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
         </div>
     </div>



 </div>




 @include('../layout/footer')