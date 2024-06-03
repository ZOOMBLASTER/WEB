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
         <link rel="stylesheet" href="css/animales_11.css">
    
        <title>Molly</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
     
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">PLATYS</h1>
         <p class="landing__text">Xiphophorus maculatus</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                
                El Xiphophorus maculatus, comúnmente conocido como platy, es una especie de pez de agua dulce que destaca por su llamativa coloración y su fácil mantenimiento en acuarios. Originario de México y América Central, el platy presenta un cuerpo compacto y alargado con aletas distintivas, siendo las aletas dorsales y caudales las más prominentes. Su coloración varía enormemente, desde tonos vibrantes de rojo, naranja, amarillo y azul hasta variaciones más sutiles de blanco y negro, con patrones de manchas o rayas que añaden un atractivo visual único. Además de su belleza, el platy es apreciado por su comportamiento pacífico y su adaptabilidad a una amplia gama de condiciones de agua, lo que lo convierte en una opción popular para acuaristas de todos los niveles de experiencia. Su capacidad de reproducción prolífica y su tolerancia a diferentes tipos de alimentos hacen que sea una adición versátil y atractiva para cualquier acuario comunitario.        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/platy1.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Platy como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Volumen del acuario:</b>  Se recomienda un acuario de al menos 10 galones (aproximadamente 38 litros) para un grupo de platys.</li>
                            <li><b> pH:</b>   : La calidad del agua es crucial. Asegúrate de que el agua esté libre de cloro y cloraminas, y mide regularmente los niveles de amoníaco, nitritos y nitratos. Los platys prefieren un pH ligeramente alcalino, en el rango de 7.0-8.0.</li>
                            <li><b>Temperatura del agua:</b>  El rango de temperatura ideal para los platys es de aproximadamente 20-26 °C (68-78 °F). Mantener un calentador en el acuario puede ayudar a mantener una temperatura estable.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/ad11.jpeg">
                <div class="dev_content">
                    <div class="dev_title">El Platy como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Parametros del agua:</b> Además de la temperatura y el pH, mantén un ojo en otros parámetros del agua como la dureza del agua (GH) y la dureza del carbonato (KH), ya que estos pueden afectar la salud y el comportamiento de los platys.</li>
                            <li><b>Filtracion:</b> Un sistema de filtración adecuado es esencial para mantener la calidad del agua. Un filtro de esponja o un filtro de cascada pueden ser opciones adecuadas para un acuario de platys.</li>
                            <li><b>Escondites :</b>   Proporciona escondites y refugios con plantas vivas o artificiales, así como rocas y troncos. A los platys les gusta explorar y esconderse en su entorno.
                            </li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/platy3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Platy como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b>  Los platys son omnívoros y aceptan una variedad de alimentos, incluyendo escamas, pellets, alimentos vivos y congelados. Proporciona una dieta equilibrada y variada para mantener su salud.
                            </li>
                            <li><b>Iluminacion:</b>Proporciona iluminación adecuada para el crecimiento de las plantas y para mantener un ciclo de luz natural, pero también asegúrate de que haya áreas sombreadas en el acuario para que los platys puedan descansar.</li>
                            <li><b>Compañeros de acuario:</b> Los platys son peces pacíficos que generalmente se llevan bien con otros peces comunitarios de tamaño similar y temperamento tranquilo. Evita mantenerlos con especies agresivas o que puedan intimidarlos.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/platy1.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/ad11.jpeg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/platy3.jpg">
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
 
                <p class="questions__show"> La longevidad del Xiphophorus maculatus en la naturaleza puede variar debido a factores como la disponibilidad de alimentos, la competencia con otras especies y la presencia de depredadores. En cautiverio, donde las condiciones de vida suelen ser más controladas, pueden alcanzar su máximo potencial de longevidad.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> La reproducción del Xiphophorus maculatus es interesante porque es ovovivípara, lo que significa que los huevos se incuban dentro del cuerpo de la hembra y las crías nacen vivas. Esta adaptación les proporciona una mayor tasa de supervivencia, ya que las crías nacen en un estado más desarrollado y pueden escapar de los depredadores más fácilmente que si fueran huevos.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">  La frecuencia de reproducción de los platys en la naturaleza puede depender de factores como la temperatura del agua, la disponibilidad de alimentos y la presencia de depredadores. En condiciones óptimas, pueden reproducirse varias veces al año.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Huevos y crias
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">  Las hembras de Xiphophorus maculatus pueden producir una cantidad considerable de crías en cada parto. La cantidad de crías puede variar ampliamente, desde unas pocas decenas hasta más de cien, dependiendo del tamaño y la salud de la hembra, así como de otros factores ambientales.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> En su hábitat natural, los platys son comunes en una variedad de ambientes acuáticos, desde pequeños arroyos y estanques hasta ríos más grandes y lagunas. Son peces adaptativos y pueden encontrarse en una amplia gama de condiciones de agua, aunque prefieren aguas cálidas y poco profundas. En su entorno natural, juegan un papel importante en la cadena alimentaria, alimentándose de pequeños invertebrados y algas, y sirviendo como presa para una variedad de depredadores acuáticos.</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        La coloración de los platys varía ampliamente según la variante genética y la especie específica, pero comúnmente presentan colores brillantes como naranja, rojo, azul, amarillo y negro. También pueden tener manchas o patrones en su cuerpo.</div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        Los platys tienen un cuerpo corto y redondeado, con aletas dorsales y anales ubicadas en la parte posterior del cuerpo.
</div>
    <div class="item">
        <h1><b>Aletas</b></h1>
        Poseen aletas pectorales y pelvicas que ayudan en la locomoción y maniobrabilidad. Sus aletas dorsal y anal son prominentes y pueden tener patrones de colores llamativos.</div>  
    <div class="item ">
        <h1><b>Ojos y boca</b></h1>
        Tienen ojos prominentes y una boca pequeña con la que se alimentan.</div>
 
    
         
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
