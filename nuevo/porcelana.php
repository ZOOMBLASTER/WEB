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
         <link rel="stylesheet" href="css/animalesS_5.css">
    
        <title>Cangrejo Porcelana</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
        
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">CANGREJO DE PORCELANA</h1>
         <p class="landing__text"> Porcellanidae </p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                
                Es una especie de crustáceo decápodo de la familia Porcellanidae. Su nombre común es cangrejo porcelana. Decápodo significa "con diez pies", pero su quinto par de patas es muy reducido, quedando en ocasiones oculto por la concha, siendo empleado para mantener limpias las branquias. 
 </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/porcelana2.jpeg">
                <div class="dev_content">
                    <div class="dev_title">El cangrejo porcelana como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Volumen del acuario:</b>  tanque de 10 galones.</li>
                            <li><b> pH:</b>   La salinidad óptima está entre 1.020 y 1.025 de gravedad específica.  El pH adecuado es entre 8.1 y 8.4</li>
                            <li><b>Temperatura del agua:</b>  Mantener la temperatura del agua dentro del rango de 24-28 °C (75-82 °F) es crucial para su salud y bienestar. Un calentador de acuario puede ser necesario para mantener una temperatura estable, especialmente en climas más fríos.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/porcelana3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El cangrejo porcelana como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Sustrato:</b> : La arcilla es una buena opción frente a la grava o la arena, ya que proporciona más nutrientes para la vegetación y mejora la calidad del agua</li>
                            <li><b>Filtracion:</b>  Es crucial contar con un filtro potente en el acuario. Esto ayudará a mantener la calidad del agua y eliminar sustancias tóxicas. Además, realiza cambios de agua periódicos para evitar la acumulación de residuos y mantener un ambiente saludable.</li>
                            <li><b>Escondites :</b>  Puedes usar madera flotante, rocas, macetas de arcilla volteadas, cuevas de resina y plantas vivas.
                            </li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/porcelana4.jpg">
                <div class="dev_content">
                    <div class="dev_title">El cangrejo hermitaño como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b>Los cangrejos porcelana son omnívoros. Puedes alimentarlos con una variedad de alimentos, como: Alimentos comerciales para cangrejos o peces, Algas y vegetales frescos, como espinacas, algas nori y calabacín, Pequeños crustáceos y camarones. Anémonas de los géneros Bunodeopsis o Triactis.
                            </li>
                            <li><b>Iluminacion:</b>Proporciona una fuente de luz adecuada para estimular su comportamiento natural y resaltar sus colores brillantes.
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/porcelana2.jpeg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/porcelana3.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/porcelana4.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
        </div>
        <!-- dev arrows -->
        <div class="dev_arrows">
            <button id="dev_prev">&lt;</button>
            <button id="dev_next">&gt;</button>
        </div>
        <!-- dev time running -->
        <div class="dev_time"></div>
    </div>
    </div>









 <section class="questions container">
    <h2 class="psubtitle">Datos de improtancia</h2>
    <p class="questions__paragraph">Otros datos de importancia de la especie</p>
    <section class="questions__container">
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Longevidad
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> A menudo muestran signos de envejecimiento alrededor de los 4-6 años, dependiendo de la raza y las condiciones de vida.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> Los cangrejos porcelana atraen a sus parejas mediante feromonas, señales visuales, acústicas o vibratorias. El apareamiento se realiza vientre a vientre, y los machos captan las feromonas liberadas por las hembras durante la muda. Las hembras anidan en anémonas urticantes. Después de la fecundación, los óvulos se fijan en el abdomen de la hembra, donde se protegen durante el desarrollo embrionario.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Los cangrejos porcelana no tienen una frecuencia de reproducción específica, ya que no se reproducen continuamente como algunos otros animales. </p>

             </div>
        </article>


        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> se encuentran en el océano Indo-Pacífico, desde la costa oriental africana hasta la Polinesia francesa. En su hábitat natural, forman grupos estrechos conocidos como piaras, que constan de varias hembras y sus crías.</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        Rojo o Pardo, naranja brillante. Varía según su hábitat y alimentación</div>
    <div class="item">
        <h1><b>patas</b></h1>
        Tiene cinco pares de patas, su quinto par de patas es muy reducido y a veces queda oculto por la concha. Estas patas se utilizan para mantener limpias las branquias.
</div>
    <div class="item">
        <h1><b>abdomen</b></h1>
        Blando y Curvo: tiene un abdomen sin exoesqueleto, lo que lo hace vulnerable ante los depredadores. Para protegerse, busca conchas vacías de moluscos y se introduce en ellas, sosteniéndolas con la parte superior de su cuerpo mientras camina.</div>  
    <div class="item ">
        <h1><b>Antenas</b></h1>
        Posee dos antenas largas para tocar y dos antenas cortas para olfatear y detectar sabores. </div>
        <div class="item ">
            <h1><b>Ojos</b></h1>
            ubicados en tallos en la cabeza y tienen la capacidad de descomponer la imagen en varias piezas.</div>
            <div class="item ">
                <h1><b>Pinzas</b></h1>
                son considerables, pero solo se utilizan para la defensa, no para alimentarse. En cambio, el cangrejo tiene largas setas (cerdas) cerca de la boca que utiliza como una escoba para atrapar pequeños organismos, como algas planctónicas y crustáceos de la columna de agua.</div>
 
    
         
    <button id="next">></button>
    <button id="prev"><</button>
</div>
</section>



<div class="card-container"></div>
<h2 class="psubtitle">Familiares de la especie</h2>
<div class="ui-card">
	<img src="images/atig.jpeg">
	<div class="description">
		<h3>Salamadra Tigre</h3>
		<p>Ambystoma Tigrinum</p>
	</div>
</div>
<div class="ui-card">
	<img src="images/amav.jpeg">
	<div class="description">
		<h3>Salamandra tigre barrada</h3>
		<p>Ambystoma Mavortium</p>
	</div>
</div>
<div class="ui-card">
	<img src="images/aopa.jpeg">
	<div class="description">
		<h3>Salamandra jaspeada</h3>
		<p>Ambystoma opacum</p>
	</div>
</div>
</div>


 </section>
</div>
</div>



<?php
include 'inc/footer.php';

?>
