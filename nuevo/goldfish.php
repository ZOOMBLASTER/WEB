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
         <link rel="stylesheet" href="css/animales_8.css">
    
        <title>Goldfish</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">GOLDFISH</h1>
         <p class="landing__text">Crocodylus cataphractus</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                El Carassius auratus, conocido comúnmente como pez dorado, es una especie de pez de agua dulce que ha cautivado a los amantes de la acuarofilia durante siglos. Originario de Asia Oriental, este fascinante pez presenta una amplia variedad de colores, que van desde el naranja brillante hasta el blanco perlado, con diversas combinaciones de manchas y patrones. Su cuerpo es generalmente redondeado y comprimido lateralmente, con aletas delicadamente adornadas que le confieren una elegancia serena mientras nada. El pez dorado es apreciado tanto por su belleza visual como por su comportamiento tranquilo, lo que lo convierte en una adición encantadora a cualquier acuario doméstico. Su naturaleza pacífica y su capacidad para adaptarse a una variedad de condiciones hacen que sea un compañero ideal para aquellos que disfrutan de la observación relajante de la vida acuática.
            </p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/ad8.jpeg">
                <div class="dev_content">
                    <div class="dev_title">El Goldfish como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Tamaño del acuario:</b> Los peces dorados necesitan espacio suficiente para nadar y crecer adecuadamente. Se recomienda al menos 20 galones (unos 75 litros) por cada pez dorado.</li>
                            <li><b> Filtración eficiente:</b>   Los peces dorados generan una cantidad considerable de desechos, por lo que un sistema de filtración potente y eficiente es esencial para mantener la calidad del agua.</li>
                            <li><b>Temperatura del agua:</b>  Prefieren temperaturas más frescas, idealmente entre 18-22°C (65-72°F). Es importante evitar extremos de temperatura.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/goldfish2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Goldfish como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Decoración segura:</b> Utilizar decoraciones no abrasivas y sin bordes afilados en el acuario para evitar lesiones en los peces. Además, proporcionar plantas vivas y refugios para que los peces se sientan seguros y cómodos.</li>
                            <li><b>Monitorización de la calidad del agua:</b> Utilizar kits de prueba para monitorear los niveles de amoníaco, nitritos, nitratos, pH y dureza del agua, y tomar medidas correctivas según sea necesario.</li>
                            <li><b>Mantenimiento regular del agua :</b>   Realizar cambios parciales de agua regularmente (al menos del 20-30% semanalmente) para eliminar los desechos y mantener los niveles óptimos de nitratos y otros compuestos.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/goldfish3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Guppy como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> Ofrecer una dieta variada que incluya alimentos comerciales de calidad para peces dorados, así como verduras frescas y ocasionalmente proteínas como camarones o larvas de mosquito.</li>
                            <li><b>Iluminacion:</b> Proporcionar iluminación moderada, evitando la luz solar directa, para evitar el crecimiento excesivo de algas.</li>
                            <li><b>Control de la alimentacion:</b> Evitar sobrealimentarlos, ya que los peces dorados son propensos a la obesidad y problemas digestivos. Alimentarlos solo lo que puedan consumir en unos pocos minutos, varias veces al día.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/ad8.jpeg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/goldfish2.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/goldfish3.jpg">
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
 
                <p class="questions__show"> Los goldfish pueden vivir hasta varios años en condiciones adecuadas. En promedio, pueden vivir entre 10 y 15 años, pero con cuidados óptimos, algunos individuos han alcanzado edades de más de 20 años e incluso más.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> Los goldfish son ovíparos, lo que significa que se reproducen poniendo huevos. La reproducción generalmente ocurre durante la primavera y el verano, cuando las temperaturas del agua son más cálidas y favorables. Durante el cortejo, los machos persiguen a las hembras y las golpean suavemente con sus aletas para estimular la liberación de huevos.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> En condiciones ideales, los goldfish pueden reproducirse varias veces durante la temporada de reproducción, especialmente si se les proporcionan estímulos adecuados como cambios en la temperatura y la calidad del agua.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Huevos y crias
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Después de la fertilización, los huevos son pegajosos y se adhieren a las plantas, rocas u otros objetos en el acuario. Los huevos eclosionan generalmente dentro de unos días, dependiendo de la temperatura del agua. Las crías, llamadas alevines, son muy pequeñas y frágiles al nacer. Necesitan cuidados especiales, como alimentación adecuada y protección contra depredadores, para sobrevivir.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> En su hábitat natural, los goldfish se encuentran en aguas dulces, como estanques, lagos y arroyos de Asia Oriental, particularmente en China y Japón. Sin embargo, debido a su popularidad como mascotas, han sido introducidos en cuerpos de agua en todo el mundo, donde a menudo pueden prosperar y convertirse en una especie invasora.</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        Su coloración puede variar mucho, desde dorado hasta blanco, negro, rojo y una variedad de patrones y tonos intermedios.</div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        Tiene un cuerpo ovalado y comprimido lateralmente. Su forma varía según la especie y la variedad, pero generalmente es bastante alargada.
</div>
    <div class="item">
        <h1><b>Aletas</b></h1>
        Posee aletas pectorales, aletas dorsales, aletas ventrales, aletas anales y una aleta caudal. Estas aletas pueden ser de diferentes tamaños y formas dependiendo de la variedad.</div>
  
    <div class="item ">
        <h1><b>Ojos</b></h1> Los ojos del pez dorado son prominentes y están situados a los lados de la cabeza, lo que le proporciona un amplio campo de visión.</div>
 
    <div class="item ">
        <h1><b>Boca</b></h1>
        Tiene una boca terminal, lo que significa que está ubicada en la parte delantera de la cabeza. Esta boca es pequeña y generalmente se usa para recoger alimentos del fondo o de la superficie del agua.</div>
    
    <div class="item ">
            <h1><b>Escamas</b></h1>
            Está cubierto de escamas que le proporcionan protección y contribuyen a su colorido variado. Estas escamas pueden ser de diferentes tamaños y disposiciones.</div>

    <div class="item ">
                <h1><b>Organos internos</b></h1>
                Al igual que otros peces, el pez dorado tiene órganos internos como el corazón, los riñones, el hígado, el intestino y las branquias, que son fundamentales para sus funciones vitales.</div>

                <div class="item ">
                    <h1><b>Linea lateral</b></h1>
                    Es un órgano sensorial que recorre los costados del pez y le permite detectar cambios en la presión del agua y movimientos cercanos.</div>
       
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

