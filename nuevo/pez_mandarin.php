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
         <link rel="stylesheet" href="css/animalesM_13.css">
    
        <title>Pez mandarin</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">PEZ MANDARIN</h1>
         <p class="landing__text"> Synchiropus splendidus </p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                
                el Pez Mandarín es una especie de pez muy atractiva debido a su belleza y exotismo, es un miembro pequeño y brillantemente coloreado de la familia del dragonet, que es muy popular en el comercio del acuario de agua salada. Se describió por primera vez en 1927 por Albert William Herre, que trabajaba en Filipinas; el nombre común de pez mandarín viene de su coloración extremadamente vívida, evocando las túnicas de un mandarín chino imperial.
 </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/mandarin1.jpeg">
                <div class="dev_content">
                    <div class="dev_title">El Pez mandarin como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Volumen del acuario:</b>  : Se recomienda un acuario de al menos 200 litros para proporcionar suficiente espacio. Los mandarines son peces relativamente tímidos y de movimientos lentos que disfrutan de esconderse y patrullar las rocas en busca de comida y refugio</li>
                            <li><b> pH:</b>  En el caso del pez mandarín, el pH óptimo debe estar entre 8.1 y 8.4. La salinidad del agua debe ser alta, con una densidad de alrededor de 1.025</li>
                            <li><b>Temperatura del agua:</b>  Mantener la temperatura del agua dentro del rango de 24-28 °C (75-82 °F) es crucial para su salud y bienestar. Un calentador de acuario puede ser necesario para mantener una temperatura estable, especialmente en climas más fríos.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/mandarin2.jpeg">
                <div class="dev_content">
                    <div class="dev_title">El Pez mandarin como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Sustrato:</b> Agrega roca viva y estructuras para que puedan ocultarse y explorar. Las cuevas, grietas y áreas con vegetación artificial también son ideales para crear refugios</li>
                            <li><b>Filtracion:</b>  Utiliza un buen sistema de filtración para mantener la calidad del agua. Un filtro biológico y un skimmer son esenciales para eliminar los desechos y mantener niveles adecuados de oxígeno</li>
                            <li><b>Escondites :</b>   Agrega roca viva y estructuras para que puedan ocultarse y explorar. Las cuevas, grietas y áreas con vegetación artificial también son ideales para crear refugios
                            </li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/mandarin3.jpeg">
                <div class="dev_content">
                    <div class="dev_title">El Pez angel como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> El pez mandarín es exigente con su alimentación. Prefiere el alimento vivo, como copépodos y artemias. Puedes entrenarlo para que acepte alimento congelado o liofilizado, pero asegúrate de variar su dieta para mantenerlo saludable
                            </li>
                            <li><b>Iluminacion:</b>estándar o LED. Un sistema de iluminación entre 1 a 2 vatios por galón será suficiente para simular un ciclo de día y noche en el acuario</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/mandarin1.jpeg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/mandarin2.jpeg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/mandarin3.jpeg">
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
 
                <p class="questions__show"> : En su hábitat natural, estos peces pueden vivir aproximadamente 10 años.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> : El pez mandarín realiza su desove en las áreas de los arrecifes durante las horas nocturnas. Después de un cortejo, la hembra elige al macho más grande y este libera su esperma en los huevos. La hembra suele desovar solo una vez por noche, aunque puede estar sin hacerlo durante varios días.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">  La frecuencia de reproducción puede variar según varios factores, incluyendo la edad y la salud de los peces, así como las condiciones ambientales y la disponibilidad de pareja. </p>

             </div>
        </article>


        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Los peces mandarines se encuentran en las lagunas coralinas y arrecifes del océano Pacífico. Son originarios de las Islas del Japón al sur de Australia. Su belleza y colores los hacen destacar en su entorno natural.</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        Su piel tiene un fondo verde, azul o, muy rara vez, rojo, con franjas de diferentes colores como anaranjado, azul, rojo y amarillo. La aleta caudal presenta bordes azules sobre un fondo rojo-anaranjado.</div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        A diferencia de otros peces, el pez mandarín no está cubierto por escamas, sino por una película grasa maloliente y tóxica que lo hace más resistente a enfermedades de la piel y posiblemente también lo protege de posibles predadores.
</div>
    <div class="item">
        <h1><b>Tamaño</b></h1>
        El pez mandarín mide aproximadamente entre 7 y 8 centímetros desde la punta del hocico hasta el extremo distal de la aleta caudal.</div>  
    <div class="item ">
        <h1><b>Boca</b></h1>
        Tiene una boca pequeña y protráctil, ligeramente avanzada y armada con varias hileras de dientes muy finos.</div>
        <div class="item ">
            <h1><b>Aletas</b></h1>
            Posee dos aletas dorsales armadas con 4 espinas y 8 radios blandos, respectivamente </div>
            <div class="item ">
                <h1><b>Dimorfismo sexual</b></h1>
                La hembra es ligeramente más pequeña que el macho y tiene colores menos vistosos. Además, la primera espina de la aleta dorsal está mucho más desarrollada en los machos que en las hembras</div>
 
    
         
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
