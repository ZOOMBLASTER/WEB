<?php
include 'inc/header.php';

Session::CheckSession();

?>

      <div class="card ">
        <div class="card-header">
          
<?php
$username = Session::get('username');
if (isset($username)) {
 // echo $username;
}
 ?></span>

        </div>
        <div class="card-body pr-2 pl-2">


          

     <!--=============== REMIXICONS ===============-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


     <!--=============== CSS ===============-->
     <link rel="stylesheet" href="./css/normalize.css">
     <link rel="stylesheet" href="./css/habitats_2.css">

    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">

<body>

<!--==================== Landing ====================-->

<article class="landing">
   <div class="landing__content">
       <h1 class="landing__title">AGUA SALADA</h1>
   </div>
</article>



<section class="knowledge">
   <div class="knowledge__container container">
       <div class="knowledege__texts">
           <h2 class="ksubtitle">Concepto</h2>
           <p class="knowledge__paragraph">El agua salada, también conocida como agua salina, es aquella que contiene una alta concentración de sales disueltas, especialmente cloruro de sodio (sal común). Este tipo de agua es característica de los océanos y mares, y proporciona hábitats específicos para una variedad de organismos acuáticos, incluidos los peces. Los peces que habitan en aguas saladas, llamados peces marinos, han desarrollado adaptaciones fisiológicas para sobrevivir en un ambiente con altos niveles de salinidad. Estas adaptaciones pueden incluir sistemas de regulación osmótica y métodos para mantener el equilibrio de agua y sales dentro de sus cuerpos.
            
           </p>
       </div>
   </div>
</section>


<section class="questions container">
   <h2 class="psubtitle">Datos de improtancia</h2>
   <p class="questions__paragraph">Los datos mas importantes del agua salada</p>
   <section class="questions__container">
       <article class="questions__padding">
           <div class="questions__answer">
               <h3 class="questions__title">Datos fisicos y quimicos del agua salada para un acuario
                   <span class="questions__arrow">
                       <img src="./images/arrow.svg" class="questions__img">
                   </span>
               </h3>

               <ul class="questions__show">
                  <li><b>Temperatura:</b> La temperatura del agua en un acuario de agua salada debe mantenerse dentro de un rango específico para la salud de los peces y otros organismos marinos. La mayoría de las especies tropicales de agua salada prosperan en temperaturas que oscilan entre 24°C y 27°C, pero este rango puede variar según las especies específicas que se mantengan en el acuario.</li>
                  <li><b>pH:</b> El pH del agua salada en un acuario debe estar dentro del rango de 8.0 a 8.4 para replicar las condiciones naturales del océano. Mantener un pH estable es crucial para la salud de los peces y otros organismos marinos, así como para el funcionamiento adecuado del ciclo del nitrógeno en el acuario.</li>
                  <li><b>Dureza total:</b> La dureza del agua en un acuario de agua salada se puede medir en términos de dureza total (GH) y dureza de carbonatos (KH). Los valores típicos para GH son de 8 a 12 dureza alemana (°dGH) y para KH de 7 a 10 dureza alemana (°dKH). Mantener una dureza adecuada es importante para ayudar a mantener un equilibrio químico estable en el acuario.</li>
                  <li><b>Amoníaco, nitrito y nitrato:</b> Estos son productos químicos derivados de los desechos biológicos en el acuario y son altamente tóxicos para los peces y otros organismos marinos en concentraciones elevadas. Los niveles de amoníaco y nitrito deben mantenerse en 0 ppm, mientras que los niveles de nitrato deben mantenerse lo más bajos posible, idealmente por debajo de 10 ppm. Para lograr esto, es esencial contar con un sistema de filtración adecuado y realizar cambios regulares de agua.</li>
                  <li><b>Salinidad:</b> La salinidad del agua salada se puede medir en partes por mil (ppt) o en gramos de sal por litro (g/L). Para la mayoría de los acuarios marinos, se recomienda mantener una salinidad de alrededor de 30-35 ppt (o 1.020-1.025 de densidad específica). Mantener una salinidad estable es esencial para replicar las condiciones naturales del océano y para el bienestar de los organismos marinos en el acuario.</li>
                  <li><b>Oxígeno Disuelto:</b> El oxígeno disuelto es vital para la respiración de los peces y otros organismos acuáticos en el acuario. Los niveles de oxígeno disuelto deben mantenerse en un rango saludable, que generalmente oscila entre 5 y 8 mg/L. Esto se puede lograr mediante la incorporación de una buena superficie de intercambio de gas en el acuario, como salpicaduras o una bomba de aire, así como mediante la circulación adecuada del agua.</li>
              </ul>
           </div>
       </article>

       <article class="questions__padding">
           <div class="questions__answer">
               <h3 class="questions__title">Caracteristicas de las especies de agua salada
                   <span class="questions__arrow">
                       <img src="./images/arrow.svg" class="questions__img">
                   </span>
               </h3>

               <ul class="questions__show">
                  <li><b>Aletas adaptadas:</b> Las especies marinas a menudo tienen aletas especializadas para ayudar en la natación y la estabilidad en el agua salada. Estas aletas pueden variar en forma y tamaño dependiendo de las necesidades de la especie, desde aletas largas y esbeltas para la velocidad hasta aletas robustas para la maniobrabilidad.</li>
                  <li><b>Respiración branquial:</b> La mayoría de las especies de agua salada utilizan branquias para extraer oxígeno del agua y eliminar dióxido de carbono. Estas branquias están altamente adaptadas para maximizar la absorción de oxígeno del agua, lo que les permite respirar eficientemente incluso en entornos con niveles bajos de oxígeno disuelto.</li>
                  <li><b>Tolerancia a la salinidad:</b> Las especies marinas han desarrollado adaptaciones fisiológicas para mantener el equilibrio de sal y agua en sus cuerpos en entornos con salinidad variable. Algunas especies tienen órganos especiales, como células de cloruro en los riñones, que les permiten excretar el exceso de sal, mientras que otras tienen sistemas de regulación osmótica para mantener el equilibrio interno.</li>
                  <li><b>Coloración y camuflaje:</b> Muchas especies marinas tienen colores y patrones únicos que les ayudan a camuflarse en su entorno marino. Desde el mimetismo con el fondo del océano hasta la capacidad de cambiar de color para adaptarse a diferentes condiciones, estas adaptaciones de camuflaje son vitales para evitar la depredación y la detección por parte de los depredadores.</li>
                  <li><b>Adaptaciones alimenticias:</b>Las especies marinas tienen una amplia gama de dietas, que pueden incluir desde plancton y algas hasta otros peces más grandes. Muchas especies están altamente especializadas en la captura de presas específicas, mientras que otras tienen adaptaciones físicas, como dientes afilados o mandíbulas expansibles, para ayudar en la captura y consumo de alimentos.</li>
                  <li><b>Comportamientos sociales:</b> Algunas especies de agua salada exhiben comportamientos sociales complejos, como la formación de cardúmenes o la cooperación en la caza. Estas interacciones sociales pueden ser cruciales para la supervivencia de la especie, ya que proporcionan protección contra los depredadores y aumentan las posibilidades de encontrar alimentos.</li>
              </ul>
           </div>
       </article>

       <article class="questions__padding">
           <div class="questions__answer">
               <h3 class="questions__title">Especies de agua salada mas faciles de cuidar
                   <span class="questions__arrow">
                       <img src="./images/arrow.svg" class="questions__img">
                   </span>
               </h3><ul class="questions__show">
                  <li><b>Peces Damisela:</b> Las damiselas son peces pequeños y coloridos que son resistentes y adaptables a una variedad de condiciones del acuario. Son relativamente robustos y pueden tolerar fluctuaciones en los parámetros del agua mejor que algunas otras especies más sensibles.</li>
                  <li><b>Pez Payaso (Clownfish):</b> Los peces payaso son populares entre los acuaristas debido a su comportamiento interesante y su asociación con anémonas marinas. Son generalmente resistentes y pueden adaptarse bien a los acuarios domésticos. Además, pueden ser criados en cautiverio con relativa facilidad.</li>
                  <li><b>Peces Cirujano (Surgeonfish):</b>  Algunas especies de peces cirujano son adecuadas para principiantes debido a su resistencia y comportamiento pacífico. Sin embargo, es importante elegir especies que no sean demasiado grandes y que tengan requisitos de espacio y dieta apropiados para tu acuario.</li>
                  <li><b>Pez Ángel Enano (Dwarf Angelfish):</b>Algunas variedades de peces ángel enano, como el Centropyge bispinosa o el Centropyge loricula, son relativamente fáciles de cuidar y pueden adaptarse bien a los acuarios de tamaño moderado. Son coloridos y agregan belleza al acuario.</li>
                  <li><b>Pez Palometa (Chromis):</b>  Los peces palometa son similares a las damiselas en términos de resistencia y adaptabilidad. Son peces de cardumen que pueden agregar movimiento y vitalidad al acuario. Son generalmente fáciles de alimentar y pueden prosperar en una variedad de condiciones del agua.</li>
              </ul>
            </div>
       </article>
   </section>

   <h2 class="nsubtitle">Especies de agua salada</h2>
   <p><b>Pon el cursor encima de cada imagen y descubre una nueva especie</b></p>
</section>

   <section>
   <div class="lcontainer">
   <div class="list">

      <div class="item">
         <a href="caballito_de_mar.php">
          <img src="images/as1.jpg" alt="">
          <div class="content">
              <h1>CABALLITO DE MAR</h1>
              <div class="des">
               Hipocampus ssp.              
            </div>
          </div>
         </a>
      </div>
    
      <div class="item">
        <a href="medusa_acropolis.php">
          <img src="images/as2.jpg" alt="">
          <div class="content">
              <h1>MEDUSA ACROPOLIS</h1>
              <div class="des">
               Cassiopeia ssp.              </div>
          </div></a>
      </div>
    
      <div class="item">
        <a href="medusa_luna.php">
          <img src="images/as3.jpg" alt="">
          <div class="content">
              <h1>MEDUSA LUNA</h1>
              <div class="des">
               Aurelia aurita              </div>
          </div></a>
      </div>
    
      <div class="item">
        <a href="pulpo_comun.php" alt="">
          <img src="images/as4.jpg" alt="">
          <div class="content">
              <h1>PULPO COMUN</h1>
              <div class="des">
               Octopus vulgaris              </div>
          </div></a>
      </div>
    
      <div class="item">
        <a href="pulpo_anillos_azules.php" alt="">
          <img src="images/as5.jpeg" alt="">
          <div class="content">
              <h1>PULPO ANILLOS AZULES</h1>
              <div class="des">
               Hapalochlaena lunulata              </div>
          </div></a>
      </div>
    
      <div class="item">
        <a href="pez_angel_emperador.php" alt="">
         <img src="images/as6.jpg" alt="">
         <div class="content">
             <h1>PEZ ANGEL EMPERADOR</h1>
             <div class="des">
               Pomacanthus imperator             </div>
         </div></a>
     </div>
    
     <div class="item">
        <a href="pez_cirujano.php" alt="">
         <img src="images/as7.jpeg" alt="">
         <div class="content">
             <h1>PEZ CIRUJANO</h1>
             <div class="des">
               Paracanthurus hepatus
            </div>
         </div></a>
     </div>
    
     <div class="item">
        <a href="pez_cirujano_amarillo.php" alt="">
         <img src="images/as8.jpeg" alt="">
         <div class="content">
             <h1>CIRUJANO AMARILLO</h1>
             <div class="des">
               Zebrasoma flavescens             </div>
         </div></a>
     </div>
    
     <div class="item">
        <a href="pez_damisela.php" alt="">
         <img src="images/as9.jpg" alt="">
         <div class="content">
             <h1>PEZ DAMISELA</h1>
             <div class="des">
                Chrysiptera cyanea             </div>
         </div></a>
     </div>
    
     <div class="item">
        <a href="pez_escorpion.php" alt="">
         <img src="images/as10.jpeg" alt="">
         <div class="content">
             <h1>PEZ ESCORPION</h1>
             <div class="des">
               Scorpaenidae             </div>
         </div></a>
     </div>
    
     <div class="item">
        <a href="pez_globo.php" alt="">
      <img src="images/as11.jpg" alt="">
      <div class="content">
          <h1>PEZ GLOBO</h1>
          <div class="des">
             Tetraodontidae          </div>
      </div></a>
    </div>
    
    <div class="item">
        <a href="pez_leon.php" alt="">
      <img src="images/as12.jpg" alt="">
      <div class="content">
          <h1>PEZ LEON</h1>
          <div class="des">
             Pterois          </div>
      </div></a>
    </div>
    
    <div class="item">
        <a href="pez_mandarin.php" alt="">
      <img src="images/as13.jpeg" alt="">
      <div class="content">
          <h1>PEZ MANDARIN</h1>
          <div class="des">
            Synchiropus splendidus          </div>
      </div></a>
    </div>
    
    <div class="item">
        <a href="pez_mariposa.php" alt="">
      <img src="images/as14.jpeg" alt="">
      <div class="content">
          <h1>PEZ MARIPOSA</h1>
          <div class="des">
            Chaetodon          </div>
      </div></a>
    </div>
    
    <div class="item">
        <a href="pez_payaso.php" alt="">
      <img src="images/as15.jpeg" alt="">
      <div class="content">
          <h1>PEZ PAYASO</h1>
          <div class="des">
            Amphiprion ocellaris          </div>
      </div></a>
    </div>



   </div>
    </div>
   </section>




        </div>
      </div>



  <?php
  include 'inc/footer.php';

  ?>
