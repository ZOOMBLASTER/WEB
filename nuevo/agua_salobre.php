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
     <link rel="stylesheet" href="./css/habitats_3.css">


<!--==================== Landing ====================-->

<article class="landing">
   <div class="landing__content">
       <h1 class="landing__title">AGUA SALOBRE</h1>
   </div>
</article>



<section class="knowledge">
   <div class="knowledge__container container">
       <div class="knowledege__texts">
           <h2 class="ksubtitle">Concepto</h2>
           <p class="knowledge__paragraph">
            El agua salobre es aquella que tiene una concentración de sales disueltas intermedia entre el agua dulce y el agua de mar. Este tipo de ambiente es un hábitat común para ciertas especies de peces, ya que ofrece condiciones adecuadas para su supervivencia. La salinidad del agua salobre puede variar dependiendo de factores como la ubicación geográfica, la influencia de los ríos y la cantidad de evaporación. En estas aguas, los peces adaptados a esta salinidad pueden prosperar, ya que han evolucionado para vivir en condiciones específicas de salinidad y pueden mantener un equilibrio osmótico adecuado en su cuerpo.
            
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
                  <li><b>Temperatura:</b> La temperatura del agua es un factor importante que afecta el metabolismo, el comportamiento y la salud de las especies acuáticas. Para la mayoría de las especies de agua salobre, la temperatura del agua ideal suele estar en el rango de 24-28°C (75-82°F). Es importante mantener una temperatura estable utilizando calentadores de acuario y monitorearla regularmente.</li>
                  <li><b>pH:</b> El pH del agua debe mantenerse dentro de un rango específico para garantizar la salud y el bienestar de las especies acuáticas. Para la mayoría de las especies de agua salobre, el pH ideal suele estar en el rango de 7.5 a 8.5. Es importante monitorear regularmente el pH y realizar ajustes con productos específicos si es necesario.</li>
                  <li><b>Dureza total:</b> La dureza del agua se refiere a la concentración de minerales disueltos, especialmente calcio y magnesio. Para la mayoría de las especies de agua salobre, se prefiere una dureza total (GH) de 8-12 dGH y una dureza de carbonatos (KH) de 7-10 dKH. Estos valores pueden ayudar a mantener un ambiente estable y saludable en el acuario</li>
                  <li><b>Amonio, nitritos y nitratos:</b>  Estos compuestos son subproductos tóxicos del metabolismo de los peces y otros organismos acuáticos. Los niveles de amonio y nitritos deben mantenerse lo más cercanos a cero posible, ya que pueden ser perjudiciales para los peces. Los nitratos son menos tóxicos, pero aún así deben mantenerse por debajo de 20-40 ppm mediante cambios regulares de agua y filtración adecuada.</li>
                  <li><b>Salinidad:</b> La salinidad del agua se mide generalmente en partes por mil (ppt) o en gramos por litro (g/L). Para un acuario de agua salobre, la salinidad típica puede variar entre 1 y 20 ppt, dependiendo de las especies mantenidas. Es importante usar un refractómetro o un hidrómetro para medir la salinidad con precisión y ajustarla según sea necesario</li>
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
                  <li><b>Habitat diverso:</b> Las especies de agua salobre pueden habitar una variedad de hábitats costeros, incluidos estuarios, deltas de ríos, manglares, lagunas costeras y marismas. Esta diversidad de hábitats les proporciona una amplia gama de recursos alimenticios y refugios.</li>
                  <li><b>Ciclo de vida flexible:</b> Algunas especies de agua salobre tienen ciclos de vida flexibles que les permiten adaptarse a cambios en la salinidad y otras condiciones ambientales. Por ejemplo, pueden migrar entre aguas dulces y salobres durante diferentes etapas de su vida, o pueden reproducirse en diferentes ambientes según las condiciones.</li>
                  <li><b>Tolerancia a la temperatura:</b> Muchas especies de agua salobre son capaces de tolerar una amplia gama de temperaturas, lo que les permite sobrevivir en hábitats que experimentan cambios estacionales en la temperatura del agua.</li>
                  <li><b>Adaptaciones morfológicas:</b> Algunas especies de agua salobre tienen adaptaciones morfológicas específicas, como branquias especializadas o glándulas excretoras, que les permiten vivir en condiciones de salinidad variable.</li>
                  <li><b>Regulación osmótica:</b> Estas especies tienen mecanismos fisiológicos para regular la cantidad de sales en sus cuerpos y mantener un equilibrio osmótico adecuado. Pueden ajustar la concentración de sales en sus tejidos y controlar el paso de agua a través de sus membranas para adaptarse a cambios en la salinidad del agua.</li>
                  <li><b>Tolerancia a la salinidad:</b> Las especies de agua salobre pueden tolerar una amplia gama de salinidades, lo que les permite habitar en áreas donde la salinidad del agua fluctúa, como estuarios, manglares y lagunas costeras.</li>
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
                  <li><b>Molly (Poecilia spp.):</b> Los mollies son peces resistentes y adaptables que pueden vivir en una amplia gama de condiciones de agua salobre. Son bastante activos y vienen en una variedad de colores y patrones. Prefieren aguas ligeramente salobres y son excelentes para principiantes.</li>
                  <li><b>Gobios de agua salobre (Gobiosoma spp.):</b> Estos pequeños peces son muy interesantes de observar y pueden adaptarse bien a los acuarios de agua salobre. Son pacíficos y no demasiado exigentes en cuanto a la salinidad del agua, pero necesitan un sustrato adecuado para esconderse.</li>
                  <li><b>Pez arquero (Toxotes spp.)::</b>  Estos peces son conocidos por su capacidad para disparar chorros de agua para derribar insectos de las ramas sobre el agua. Son resistentes y pueden vivir en aguas salobres, aunque prefieren una salinidad más baja. Son peces únicos y fascinantes de mantener.</li>
                  <li><b>Tetraodon biocellatus (Pez globo de ojos de puntos):</b> Estos peces son pequeños y llenos de personalidad. Aunque son más comunes en agua dulce, también pueden adaptarse a condiciones de agua salobre. Sin embargo, es importante tener en cuenta que son peces globo y pueden inflarse cuando se sienten amenazados.</li>
                  <li><b>Pez Payaso (Amphiprion spp.):</b> Estos coloridos peces son populares en acuarios de agua salada, pero también pueden adaptarse a condiciones de agua salobre. Son peces activos y sociables que pueden vivir en arrecifes artificiales o en tanques comunitarios.</li>
              </ul>
            </div>
       </article>
   </section>

   <h2 class="nsubtitle">Especies de agua salobre</h2>
   <p><b>Pon el cursor encima de cada imagen y descubre una nueva especie</b></p>

   <section>
   <div class="lcontainer">
   <div class="list">

      <div class="item">
         <a href="hermitaño.php">
          <img src="images/ass1.jpeg" alt="">
          <div class="content">
              <h1>CANGREJO HERMITAÑO</h1>
              <div class="des">
                Paguroidea              
            </div>
          </div>
         </a>
      </div>
    
      <div class="item">
        <a href="vampiro.php">
          <img src="images/ass2.jpeg" alt="">
          <div class="content">
              <h1>CANGREJO VAMPIRO</h1>
              <div class="des">
               Geosesarma              </div>
          </div></a>
      </div>
    
      <div class="item">
        <a href="fiddler.php">
          <img src="images/ass3.jpeg" alt="">
          <div class="content">
              <h1>CANGREJO FIDDLER</h1>
              <div class="des">
               UCA              </div>
          </div></a>
      </div>
    
      <div class="item">
        <a href="pompom.php" alt="">
          <img src="images/ass4.jpg" alt="">
          <div class="content">
              <h1>CANGREJO POM POM</h1>
              <div class="des">
                Alpheidae              </div>
          </div></a>
      </div>
    
      <div class="item">
        <a href="porcelana.php" alt="">
          <img src="images/ass5.jpeg" alt="">
          <div class="content">
              <h1>CANGREJO PORCELANA</h1>
              <div class="des">
               Porcellanidae               </div>
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
        <a href="pez_arquero.php" alt="">
         <img src="images/ass7.jpeg" alt="">
         <div class="content">
             <h1>PEZ ARQUERO</h1>
             <div class="des">
               Toxotidae
            </div>
         </div></a>
     </div>
    
     <div class="item">
        <a href="pez_gobio.php" alt="">
         <img src="images/ass8.jpeg" alt="">
         <div class="content">
             <h1>PEZ GOBIO</h1>
             <div class="des">
               Gobiidae             </div>
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
</section>



        </div>
      </div>



  <?php
  include 'inc/footer.php';

  ?>
