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
     <link rel="stylesheet" href="./css/habitats_1.css">

<body>

<!--==================== Landing ====================-->

<article class="landing">
   <div class="landing__content">
       <h1 class="landing__title">AGUA DULCE</h1>
   </div>
</article>



<section class="knowledge">
   <div class="knowledge__container container">
       <div class="knowledege__texts">
           <h2 class="ksubtitle">Concepto</h2>
           <p class="knowledge__paragraph">El término "agua dulce" se refiere a un tipo de agua que se caracteriza por su baja concentración de sales disueltas en comparación con el agua de mar. Esta denominación proviene de su sabor menos salado en comparación con el agua salada. A nivel químico, el agua dulce está compuesta principalmente por moléculas de dos átomos de hidrógeno y uno de oxígeno (H2O), junto con pequeñas cantidades de minerales y nutrientes disueltos.

            La importancia del agua dulce como hábitat para especies acuáticas radica en su vitalidad como fuente de vida. Este entorno proporciona un hogar para una diversidad asombrosa de organismos, incluyendo peces, crustáceos, anfibios, plantas acuáticas y una gran variedad de microorganismos. Además de servir como refugio, el agua dulce ofrece alimento y sustento para estas especies, creando ecosistemas interdependientes y dinámicos.
            
            Funcionalmente, el agua dulce como hábitat acuático juega varios roles críticos. Actúa como un medio de transporte para nutrientes y minerales esenciales, facilita la reproducción y el ciclo de vida de numerosas especies y regula el clima local al moderar las temperaturas. Además, estos ecosistemas actúan como filtros naturales, purificando el agua a medida que circula a través de ellos y eliminando contaminantes y toxinas.
            
            
           </p>
       </div>
   </div>
</section>


<section class="questions container">
   <h2 class="psubtitle">Datos de improtancia</h2>
   <p class="questions__paragraph">Los datos mas importantes del agua dulce</p>
   <section class="questions__container">
       <article class="questions__padding">
           <div class="questions__answer">
               <h3 class="questions__title">Datos fisicos y quimicos del agua dulce para un acuario
                   <span class="questions__arrow">
                       <img src="./images/arrow.svg" class="questions__img">
                   </span>
               </h3>

               <ul class="questions__show">
                  <li><b>Temperatura:</b> Se mide en grados Celsius (°C) o Fahrenheit (°F). La mayoría de los peces de agua dulce prefieren temperaturas entre 24°C y 28°C (75°F y 82°F).</li>
                  <li><b>pH:</b> Mide la acidez o alcalinidad del agua en una escala de 0 a 14. Se recomienda un pH entre 6.5 y 7.5 para la mayoría de los peces de agua dulce.</li>
                  <li><b>Dureza total:</b> Indica la concentración de minerales disueltos, especialmente calcio y magnesio. Se mide en grados alemanes (°dGH) y se recomienda un rango de 4-8 °dGH.</li>
                  <li><b>Dureza Carbonatada:</b> Mide la cantidad de carbonatos y bicarbonatos en el agua. Se mide en grados alemanes de carbonato (°dKH) y se recomienda un rango de 3-6 °dKH.</li>
                  <li><b>Amoníaco (NH3/NH4+):</b> Es una toxina producida por desechos de peces y alimentos. Se debe mantener a niveles indetectables o muy bajos (0.02 mg/l). </li>
                  <li><b>Nitritos (NO2-):</b> Son tóxicos para los peces y provienen de la descomposición de los desechos. Se deben mantener a niveles indetectables o muy bajos (0.5 mg/L).</li>
                  <li><b>Nitratos (NO3-):</b> Son menos tóxicos que el amoníaco y los nitritos, pero altos niveles (> 40 mg/L) pueden ser dañinos a largo plazo para los peces.</li>
                  <li><b>Oxígeno Disuelto:</b> Es esencial para la respiración de los peces y otros organismos acuáticos. Se mide en miligramos por litro (mg/L) y se recomienda mantener niveles por encima de 5 mg/L.</li>
              </ul>
           </div>
       </article>

       <article class="questions__padding">
           <div class="questions__answer">
               <h3 class="questions__title">Caracteristicas de las especies de agua dulce
                   <span class="questions__arrow">
                       <img src="./images/arrow.svg" class="questions__img">
                   </span>
               </h3>

               <ul class="questions__show">
                  <li><b>Habitat diverso:</b> Las especies de agua dulce pueden encontrarse en una variedad de hábitats, incluyendo ríos, lagos, arroyos, pantanos, y estanques. Algunas pueden ser nativas de aguas tranquilas y claras, mientras que otras prefieren ambientes más turbios y de corriente rápida.</li>
                  <li><b>Adaptaciones anatómicas:</b> Las especies de agua dulce han desarrollado una variedad de adaptaciones anatómicas para sobrevivir en sus hábitats. Esto puede incluir aletas adaptadas para nadar en corrientes fuertes, cuerpos alargados para moverse entre plantas acuáticas, y branquias para respirar oxígeno disuelto en el agua.</li>
                  <li><b>Diversidad de formas y tamaños:</b> Las especies de agua dulce pueden variar enormemente en forma y tamaño. Algunas son pequeñas, como los peces tetra, mientras que otras son gigantes, como los siluros y carpas de gran tamaño. También pueden tener formas y colores muy distintivos adaptados a su entorno específico.</li>
                  <li><b>Dietas variadas:</b> Las especies de agua dulce pueden tener dietas variadas que incluyen herbívoros, carnívoros, omnívoros y detritívoros. Algunas se alimentan de plantas acuáticas, algas o detritos, mientras que otras cazan otros peces, insectos o pequeños invertebrados.</li>
                  <li><b>Comportamiento social:</b> Muchas especies de agua dulce exhiben comportamiento social, viviendo en grupos o colonias para protección, alimentación y reproducción. Esto puede incluir la formación de jerarquías sociales, comportamiento territorial y cooperación en la búsqueda de alimento.</li>
                  <li><b>Ciclo de vida complejo:</b> Las especies de agua dulce pueden tener ciclos de vida complejos que incluyen varias etapas, como larvas, juveniles y adultos. Algunas especies también pueden migrar entre diferentes hábitats de agua dulce durante diferentes etapas de su vida.</li>
                  <li><b>Adaptaciones a cambios estacionales::</b> Muchas especies de agua dulce están adaptadas a cambios estacionales en su entorno, como fluctuaciones en la temperatura del agua, niveles de oxígeno y disponibilidad de alimentos. Algunas especies pueden hibernar o estivar durante períodos de condiciones adversas.</li>
              </ul>
           </div>
       </article>

       <article class="questions__padding">
           <div class="questions__answer">
               <h3 class="questions__title">Especies de agua dulce mas faciles de cuidar
                   <span class="questions__arrow">
                       <img src="./images/arrow.svg" class="questions__img">
                   </span>
               </h3><ul class="questions__show">
                  <li><b>Pez Betta (Betta splendens):</b> Los bettas son peces de agua dulce populares y son conocidos por su belleza y carácter único. Son relativamente resistentes y pueden adaptarse bien a una variedad de condiciones de agua. Sin embargo, es importante proporcionarles un tanque con suficiente espacio y evitar mantenerlos junto a otros peces machos betta debido a su agresividad territorial.</li>
                  <li><b>Pez Guppy (Poecilia reticulata):</b> Los guppys son peces pequeños y coloridos que son ideales para principiantes debido a su resistencia y facilidad de reproducción. Son peces activos y pacíficos que pueden adaptarse bien a una variedad de condiciones de agua.</li>
                  <li><b>Tetras (Tetra spp.):</b> Hay varias especies de tetras disponibles en el mercado, como los tetras neón, tetras cardenal, y tetras limón. Son peces pequeños y activos que son ideales para acuarios comunitarios. Son resistentes y pueden adaptarse a una variedad de condiciones de agua.</li>
                  <li><b>Pez Goldfish (Carassius auratus):</b> Los goldfish son peces de agua fría que son populares entre los principiantes debido a su belleza y longevidad. Son peces tranquilos y pacíficos que pueden adaptarse bien a una amplia gama de condiciones de agua. Sin embargo, es importante proporcionarles un tanque lo suficientemente grande y evitar el sobreabastecimiento.</li>
                  <li><b>Pez Platino (Xiphophorus maculatus):</b> Los platys son peces pequeños y coloridos que son ideales para acuarios comunitarios. Son resistentes y pacíficos, y pueden adaptarse bien a una variedad de condiciones de agua. Son excelentes para principiantes debido a su facilidad de cuidado y reproducción.</li>
              </ul>
            </div>
       </article>
   </section>

   <h2 class="nsubtitle">Especies de agua dulce</h2>
   <p><b>Pon el cursor encima de cada imagen y descubre una nueva especie</b></p>

   <section>
   <div class="lcontainer">
   <div class="list">

      <div class="item">
         <a href="ajolote.php">
          <img src="images/ad1.jpg" alt="">
          <div class="content">
              <h1>AXOLOTE</h1>
              <div class="des">
               Ambystoma mexicanum              
            </div>
          </div>
         </a>
      </div>
    
      <div class="item">
        <a href="barbo.php">
          <img src="images/ad2.jpeg" alt="">
          <div class="content">
              <h1>BARBO TIGRE</h1>
              <div class="des">
               Puntius Tetrazona              </div>
          </div></a>
      </div>
    
      <div class="item">
        <a href="betta.php">
          <img src="images/ad3.jpeg" alt="">
          <div class="content">
              <h1>BETTA</h1>
              <div class="des">
               Betta splendens              </div>
          </div></a>
      </div>
    
      <div class="item">
        <a href="camaron_cristal.php" alt="">
          <img src="images/ad4.jpg" alt="">
          <div class="content">
              <h1>CAMARON CRISTAL</h1>
              <div class="des">
               Palaemonetes paludosus              </div>
          </div></a>
      </div>
    
      <div class="item">
        <a href="cangrejo_de_rio.php" alt="">
          <img src="images/ad5.jpeg" alt="">
          <div class="content">
              <h1>CANGREJO DE RIO</h1>
              <div class="des">
               Austropotamobius pallipes              </div>
          </div></a>
      </div>
    
      <div class="item">
        <a href="caracol_manzana.php" alt="">
         <img src="images/ad6.jpg" alt="">
         <div class="content">
             <h1>CARACOL MANZANA</h1>
             <div class="des">
               Pomacea canaliculata             </div>
         </div></a>
     </div>
    
     <div class="item">
        <a href="cocodrilo_enano.php" alt="">
         <img src="images/ad7.jpeg" alt="">
         <div class="content">
             <h1>COCODRILO ENANO</h1>
             <div class="des">
               Crocodylus cataphractus
            </div>
         </div></a>
     </div>
    
     <div class="item">
        <a href="goldfish.php" alt="">
         <img src="images/ad8.jpeg" alt="">
         <div class="content">
             <h1>GOLDFISH</h1>
             <div class="des">
               Carassius auratus             </div>
         </div></a>
     </div>
    
     <div class="item">
        <a href="guppys.php" alt="">
         <img src="images/ad9.jpg" alt="">
         <div class="content">
             <h1>GUPPYS</h1>
             <div class="des">
               Poecilia reticulata             </div>
         </div></a>
     </div>
    
     <div class="item">
        <a href="molly.php" alt="">
         <img src="images/ad10.jpg" alt="">
         <div class="content">
             <h1>MOLLY</h1>
             <div class="des">
               Poecilia sphenops             </div>
         </div></a>
     </div>
    
     <div class="item">
        <a href="platys.php" alt="">
      <img src="images/ad11.jpeg" alt="">
      <div class="content">
          <h1>PLATYS</h1>
          <div class="des">
            Xiphophorus maculatus          </div>
      </div></a>
    </div>
    
    <div class="item">
        <a href="pez_angel.php" alt="">
      <img src="images/ad12.jpeg" alt="">
      <div class="content">
          <h1>PEZ ANGEL</h1>
          <div class="des">
            Pterophyllum scalare          </div>
      </div></a>
    </div>
    
    <div class="item">
        <a href="pez_disco.php" alt="">
      <img src="images/ad13.jpeg" alt="">
      <div class="content">
          <h1>PEZ DISCO</h1>
          <div class="des">
            Symphysodon spp          </div>
      </div></a>
    </div>
    
    <div class="item">
        <a href="tetra.php" alt="">
      <img src="images/ad14.jpeg" alt="">
      <div class="content">
          <h1>TETRAS</h1>
          <div class="des">
            Paracheirodon innesi          </div>
      </div></a>
    </div>
    
    <div class="item">
        <a href="tortuga_orejas_rojas.php" alt="">
      <img src="images/ad15.jpg" alt="">
      <div class="content">
          <h1>TORTUGA</h1>
          <div class="des">
            Trachemys scripta elegans          </div>
      </div></a>
    </div>
   </div>
    </div>
   </section>
</section>

    
</body>


        </div>
      </div>



  <?php
  include 'inc/footer.php';

  ?>
