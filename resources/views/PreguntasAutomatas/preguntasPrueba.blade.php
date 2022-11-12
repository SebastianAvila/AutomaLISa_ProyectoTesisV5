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

     .return{
        right: 100;
     }
 </style>

 <header id="header">
     <div id="headerContent">
         <h1>Prueba de conocimiento sobre Autómatas Finitos <a href="MenuSeleccion" class="return">Regresar al menu</a></h1>
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