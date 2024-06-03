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
         <link rel="stylesheet" href="css/animalesM_10.css">
    
        <title>Pez damisela</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
      
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">PEZ ESCORPION</h1>
         <p class="landing__text">Scorpaenidae</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                Este curioso pez, conocido por su aspecto único y su comportamiento intrigante, ha capturado la atención de aficionados a la pesca y amantes de la vida marina por igual. El pez escorpión es uno de los depredadores marinos más fascinantes que existen. Con su apariencia única y su comportamiento depredador, este pez ha capturado la atención de los amantes de la vida marina, pues utiliza su boca extensible para succionar a sus presas de manera rápida y eficiente. Además, cuenta con una amplia variedad de técnicas de caza, desde emboscar a sus presas hasta perseguirlas a gran velocidad.
 </p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/escorpion1.png">
                <div class="dev_content">
                    <div class="dev_title">El pez escorpion como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Tamaño del acuario:</b> Por su carácter y territorialidad, con un mínimo de 400 a 600 litros litros de capacidad.</li>
                            <li><b> Filtración eficiente:</b>  Los filtros mecánicos, biológicos y químicos son esenciales para mantener un ambiente saludable para el pez escorpión.Realiza cambios parciales de agua regularmente para eliminar acumulaciones de sustancias tóxicas y mantener la calidad del agua
                                </li>
                            <li><b>Temperatura del agua:</b>  Temperatura del agua: entre 23 y 28 grados Celsius. </li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/escorpion2.jpeg">
                <div class="dev_content">
                    <div class="dev_title">El pez escorpion como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Control químico del agua:</b>El pH del agua debe estar entre 8.1 y 8.4. En general, se recomienda que el agua contenga entre 5 y 8 mg/L de oxígeno </li>
                            <li><b>Escondites:</b>  Los pececes escorpión son tímidos y prefieren esconderse en cuevas o hendiduras en la decoración del acuario. Proporciona rocas vivas, cuevas o refugios.</li>
                            <li><b>Sustrato:</b>  lecho de arena o grava en el fondo del acuario. Esto les permite enterrarse y camuflarse</li>
                            </ul> 
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/escorpion3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El pez escorpion como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> El pez escorpión es carnívoro y se alimenta principalmente de pequeños crustáceos y peces. Ofrece una dieta variada que incluya alimentos vivos o congelados como camarones, krill y peces pequeños. Alimenta a tu pez escorpión con regularidad pero sin excederte para evitar problemas digestivos</li>
                            <li><b>Iluminacion:</b> no requieren mucha iluminación, pero es importante mantener un ciclo regular de luz y oscuridad. Asegúrate de proporcionar una iluminación tenue. 
                                </li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/escorpion1.png">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/escorpion2.jpeg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/escorpion3.jpg">
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
 
                <p class="questions__show"> En condiciones óptimas, pueden vivir entre 5 y 10 años
                    </p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show">  El pez damisela es ovíparo, lo que significa que pone huevos.
                    La proporción sexual entre hembras y machos puede variar, pero en algunos estudios, se ha observado una proporción cercana a 1:111.
                    El desarrollo gonádico de los ovarios es sincrónico por grupos, y el pez damisela se clasifica como un desovador parcial múltiple.
                    Su temporada de reproducción abarca desde julio hasta diciembre, con mayor intensidad en los meses más cálidos (julio a septiembre
                    )</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproducción
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Dado que la reproducción en cautiverio es muy común, no hay una frecuencia específica para la reproducción en acuarios domésticos.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> En su hábitat natural, los peces damisela se encuentran en arrecifes de coral y aguas tropicales. Son comunes en el Indo-Pacífico y el Mar Rojo. Su población está compuesta principalmente por machos, y las hembras tienen un máximo reproductivo durante los meses cálidos del año</p>

             </div>
        </article>

    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        Blanca con cuatro rayas negras verticales, aunque van desde amarillos y azules brillantes hasta naranjas y morados.</div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        Pequeño pero robusto y aplanado lateralmente.</div>
    <div class="item">
        <h1><b>Tamaño</b></h1>
        suelen medir 6 cm de largo</div>
  
    <div class="item ">
        <h1><b>Aletas</b></h1> 
        redondeadas. aleta anal es de coloración negra bordeada de blanco. Las aletas dorsal y pélvica también son negras y blancas, siguiendo la misma dirección que la banda media vertical.</div>
 
    <div class="item ">
        <h1><b>Boca</b></h1>
        La boca del pez damisela es pequeña y se encuentra en posición terminal.</div>
    
    <div class="item ">
         <h1><b>Ojos</b></h1>
         son oscuros y relativamente pequeños.Algunas especies desarrollan un gran ojo falso en su cuerpo para confundir a los depredadores y alejarlos de la cabeza.</div>


              
         
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
		<h3>Salamandra jaspeada</h3>Línea lateral
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
