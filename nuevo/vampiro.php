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
         <link rel="stylesheet" href="css/animalesS_2.css">
    
        <title>Cangrejo vampiro</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
      
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">CANGREJO VAMPIRO</h1>
         <p class="landing__text"> Geosesarma </p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                
                Los cangrejos vampiros son una de las criaturas más impresionantes que puedes mantener en cautiverio. ¡Sus colores únicos son algo que necesitas ver para creer!
 </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/vampiro2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El cangrejo vampiro como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Volumen del acuario:</b>  El tamaño ideal es de aproximadamente 40 litros..</li>
                            <li><b> pH:</b>   La salinidad óptima  está entre 1.020 y 1.025 de gravedad específica.  El pH adecuado es entre 8.1 y 8.4</li>
                            <li><b>Temperatura del agua:</b>  Mantener la temperatura del agua dentro del rango de 24-28 °C (75-82 °F) es crucial para su salud y bienestar. Un calentador de acuario puede ser necesario para mantener una temperatura estable, especialmente en climas más fríos.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/vampiro3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El cangrejo vampiro como mascota</div>
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
                <img src="images/vampiro4.jpg">
                <div class="dev_content">
                    <div class="dev_title">El cangrejo vampiro como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b>son omnívoros y se alimentan de una combinación de materia vegetal y pequeños invertebrados. En su hábitat natural, suelen capturar insectos y detritos de plantas
                            </li>
                            <li><b>Iluminacion:</b>son nocturnos, por lo que es importante vigilar tanto los cambios de temperatura como el fotoperiodo. Mantén una iluminación de 12 horas para simular su entorno natural.
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/vampiro2.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/vampiro3.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/vampiro4.jpg">
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
 
                <p class="questions__show"> : 2 años como máximo, tanto en cautiverio como en la naturaleza</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> No se conoce mucha información sobre la reproducción de los cangrejos vampiros. De sus huevos nacerá entre 50 y 60 crías que la hembra cargará en el abdomen hasta que los suelta en el agua cuando alcanzan el tamaño de una mosca de la fruta</p>

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
                <p class="questions__show"> son endémicos de la isla de Java. Su hábitat único consiste en áreas sombreadas cerca de arroyos y ríos, donde pueden buscar refugio bajo el follaje y troncos caídos.</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        llamativo color violeta, entre naranja y rojo. Sus cuerpos están cubiertos de un tono púrpura oscuro. Además, el color es más brillante en sus patas y garras. En algunos ejemplares, las garras adquieren un tono rosado más claro</div>
    <div class="item">
        <h1><b>patas</b></h1>
        sus patas son rojas con tonos de amarillo. Su apariencia es terrorífica y la gran migración ha hecho que en algunas partes se les llame “cangrejos zombie” debido a su aspecto inusual
</div>
    <div class="item">
        <h1><b>tamaño</b></h1>
        aproximadamente 2 pulgadas de ancho. Esta medida incluye la longitud de sus piernas. El caparazón, que es su cuerpo principal, mide solo alrededor de una pulgada de ancho</div>  
    <div class="item ">
        <h1><b>Antenas</b></h1>
        Posee dos antenas largas para tocar y dos antenas cortas para olfatear y detectar sabores. </div>
        <div class="item ">
            <h1><b>Ojos</b></h1>
            ubicados en tallos en la cabeza y tienen la capacidad de descomponer la imagen en varias piezas.</div>
            <div class="item ">
                <h1><b>caparazon</b></h1>
                El caparazón de los cangrejos vampiros es negro.</div>
 
    
         
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
