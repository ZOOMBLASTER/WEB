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
         <link rel="stylesheet" href="css/animalesS_4.css">
    
        <title>Cangrejo Pom-pom</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">CANGREJO POM-POM</h1>
         <p class="landing__text"> Alpheidae </p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                Estas pequeñas criaturas activas son una maravilla y pueden proporcionar una serie de beneficios para la salud general de su tanque. Pero sus requisitos de cuidado siguen siendo desconcertantes. La práctica de mantener estos cangrejos en acuarios es todavía joven
 
 </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/pompom2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El cangrejo pompom como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Volumen del acuario:</b>  tanque de 10 galones.</li>
                            <li><b> pH:</b>  Monitorea los niveles de pH (6,2 a 7,2) y la dureza del agua (hasta 30 dKH)
                                </li>
                            <li><b>Temperatura del agua:</b>  Mantener la temperatura del agua dentro del rango de 24-28 °C (75-82 °F) es crucial para su salud y bienestar. Un calentador de acuario puede ser necesario para mantener una temperatura estable, especialmente en climas más fríos.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/pompom3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El cangrejo pompom como mascota</div>
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
                <img src="images/pompom4.png">
                <div class="dev_content">
                    <div class="dev_title">El cangrejo fiddler como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b>Son carroñeros expertos y también omnívoros oportunistas. Comerán cualquier cosa que encuentren, como pequeños invertebrados, algas y detritos orgánicos. No se alimentan por filtración.
                            </li>
                            <li><b>Iluminacion:</b>Proporciona una fuente de luz adecuada para estimular su comportamiento natural y resaltar sus colores brillantes.
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/pompom2.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/pompom3.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/pompom4.png">
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
 
                <p class="questions__show"> pueden vivir hasta 2 años con el cuidado adecuado.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> Los cangrejos  atraen a sus parejas mediante feromonas, señales visuales y acústicas. Las hembras llevan los huevos adheridos a su abdomen, donde los protegen hasta que eclosionan. </p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> aproximadamente dos veces al año. </p>

             </div>
        </article>


        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> En estado salvaje, la distribución del cangrejo Pom Pom es bastante amplia. Habita en manantiales de agua dulce y arroyos estrechos de África, Asia y Australia.</p>

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
        Las patas son largas y delgadas. Las cerdas en las garras son más notables en los machos que en las hembras.
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
                <h1><b>Branquias</b></h1>
                Tanto las branquias como su abdomen deben permanecer húmedos para que pueda respirar.</div>
 
    
         
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
