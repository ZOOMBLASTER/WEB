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
         <link rel="stylesheet" href="css/animalesS_8.css">
    
        <title>Pez gobio</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
      
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">PEZ GOBIO</h1>
         <p class="landing__text">  Gobiidae </p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                
                Estos peces se pueden encontrar en todas las aguas cálidas y saladas de nuestro planeta. No obstante, es posible encontrar gobios en agua dulce, puesto que se han adaptado muy bien. El pez gobio no es muy exigente en cuanto a su hábitat se refiere. Puede vivir tanto en las profundidades del mar, en matorrales o debajo de piedras. </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/gobio2.png">
                <div class="dev_content">
                    <div class="dev_title">El Pez gobio como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Volumen del acuario:</b>   al menos 10 galones (37 litros) </li>
                            <li><b> pH:</b>   : En su hábitat natural, suelen habitar en aguas ligeramente ácidas a neutras, con un pH que oscila entre 6.5-7.5. Es importante monitorear regularmente el pH del agua del acuario y ajustarlo según sea necesario para mantenerlo dentro de este rango óptimo.</li>
                            <li><b>Temperatura del agua:</b>  Son peces tropicales que provienen de las cálidas aguas. Mantener la temperatura del agua dentro del rango de 24-28 °C (75-82 °F) es crucial para su salud y bienestar. Un calentador de acuario puede ser necesario para mantener una temperatura estable, especialmente en climas más fríos.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/gobio3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Pez gobio como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Sustrato:</b> grava o arena en el fondo del acuario. Los gobios disfrutan excavando y buscando comida en el sustrato.</li>
                            <li><b>Filtracion:</b>  Un sistema de filtración eficiente es esencial para mantener la calidad del agua en el acuario. Los escalares son sensibles a la acumulación de desechos y requieren un agua limpia y bien oxigenada para prosperar. Se recomienda un filtro que pueda manejar el volumen de agua del acuario y proporcionar una filtración mecánica, biológica y química adecuada.</li>
                            <li><b>Escondites :</b>  Los gobios son tímidos y les gusta esconderse. Agrega rocas, cuevas y plantas para crear refugios. También puedes usar tubos o conchas para que se sientan seguros.
                            </li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/gobio4.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Pez gobio como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> son omnívoros y aceptan una variedad de alimentos. Proporciona una dieta equilibrada que incluya alimentos comerciales para peces, como escamas o gránulos, así como alimentos vivos o congelados como dafnias, artemias y gusanos. Asegúrate de no sobrealimentar; dales pequeñas porciones varias veces al día.
                            </li>
                            <li><b>Iluminacion:</b>no requieren iluminación intensa. Proporciona una luz suave para simular su entorno natural.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/gobio2.png">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/gobio3.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/gobio4.jpg">
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
 
                <p class="questions__show"> Pueden vivir alrededor de 5-7 años.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> Algunos gobios desovan huevos que son fertilizados externamente en el agua. Estos huevos eclosionan en larvas que flotan en la columna de agua. Otros practican la reproducción vivípara, donde las hembras retienen los huevos dentro de su cuerpo hasta que están completamente formados. Luego, dan a luz a crías vivas.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">  Algunos gobios pueden reproducirse varias veces al año, mientras que otros pueden tener ciclos menos frecuentes.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Huevos y crias
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">  Una hembra puede poner cientos de huevos en una sola puesta. Estos huevos son transparentes y adherentes, lo que les permite adherirse a la superficie donde son depositados. Los padres cuidan activamente los huevos y las crías, protegiéndolos de posibles depredadores y proporcionándoles alimento. Durante los primeros días de vida, las crías se alimentan de las reservas de nutrientes contenidas en el saco vitelino, y luego comienzan a consumir pequeños organismos y alimentos vivos. Los padres también pueden secretar sustancias nutritivas de su piel para alimentar a las crías durante los primeros días de vida.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Los gobios se encuentran en una amplia variedad de hábitats acuáticos, desde arrecifes de coral hasta aguas dulces y salobres. Forman parte importante de los ecosistemas acuáticos y desempeñan roles como depredadores, limpiadores y polinizadores.Su estado en la naturaleza varía según la región y las amenazas ambientales. Algunas especies de gobios están en peligro debido a la degradación de su hábitat y la pesca excesiva.</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        La coloración puede variar según la variedad, pero generalmente tienen tonos plateados o plateados con rayas verticales oscuras. También hay variedades de colores más vibrantes y patrones más complejos, criados selectivamente en cautiverio.</div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        Tiene un cuerpo comprimido lateralmente y algo ovalado en forma. El cuerpo es alto y extendido, con aletas largas y esbeltas.Los peces ángel pueden alcanzar longitudes de hasta 15 centímetros en la naturaleza, aunque a menudo son más pequeños en acuarios debido a la limitación del espacio.
</div>
    <div class="item">
        <h1><b>Aletas</b></h1>
        Posee aletas largas y espectaculares, características de los peces ángel. Esto incluye aletas dorsal y anal extendidas, así como aletas pectorales y caudal amplias.</div>  
   
            <div class="item ">
                <h1><b>Cuerpo</b></h1>
                Parte ventral más o menos plana, dorso convexo y obscuro</div>
 
    
         
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
