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
         <link rel="stylesheet" href="css/animalesM_7.css">
    
        <title>Pez cirujano</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
        
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">PEZ CIRUJANO </h1>
         <p class="landing__text">Paracanthurus hepatus</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                El pez cirujano recibe su nombre de las espinas en forma de bisturí a lo largo de la parte superior e inferior de su cuerpo. Estas espinas, que se asemejan a las herramientas utilizadas por los cirujanos, pueden ser fijadas en su lugar o abisagradas en la parte posterior para que puedan abrirse hacia afuera y dirigirse hacia adelante. Además de su nombre, estos peces son conocidos por su color azul intenso y su habilidad para mantener los arrecifes de coral limpios y saludables.            </p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/cirujano1.jpg">
                <div class="dev_content">
                    <div class="dev_title">El pez cirujano como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Tamaño del acuario:</b> Los peces cirujano amarillos necesitan un acuario grande, con un mínimo de 200 litros de capacidad.</li>
                            <li><b> Filtración eficiente:</b>  Un buen sistema de filtración es esencial para mantener la calidad del agua. Asegúrate de que el acuario tenga un sistema de filtración eficiente para eliminar los desechos y mantener el agua limpia.
                                •	Control químico del agua: la salinidad en el rango de 1.022 a 1.025.  rango de pH entre 8.1 y 8.4.
                                </li>
                            <li><b>Temperatura del agua:</b>  Mantén la temperatura del agua entre 22 y 28 grados Celsius </li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/cirujano2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El pez cirujano como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Control químico del agua:</b> Gravedad específica del agua de 1.023 a 1.025 SG. pH de 8.1 a 8.4.</li>
                            <li><b>Escondites:</b>   Proporciona rocas vivas y cuevas como escondites. Estos peces disfrutan explorando y refugiándose en lugares seguros. Las rocas horadadas y las formaciones rocosas les brindarán refugio y les permitirán sentirse más cómodos en el acuario.</li>
                            <li><b>Sustrato:</b>   Utiliza un sustrato de arena o grava fina en el fondo del acuario. Esto imitará el lecho marino natural y permitirá que los peces cirujano busquen alimento y exploren. Además, asegúrate de que el sustrato esté bien limpio y no contenga partículas afiladas que puedan dañar sus delicadas aletas.</li>
                            </ul> 
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/cirujano3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El pez cirujano como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> Es fundamental que le proporciones todo tipo de alimentos preparados, congelados y vivos. Puedes mezclar alimentos vegetales, carnosos como calamares picados, vieiras y camarones, también alimentos preparados con esponja marina y tunicados. Para mejorar el color de tus peces, puedes preparar una mezcla de mejillón, calamar y espinacas. Aliméntalo de 2 a 3 veces al día en cantidades pequeñas.</li>
                            <li><b>Iluminacion:</b> El pez cirujano necesita una iluminación de moderada a alta. Puedes lograr esto utilizando una combinación de halogenuros metálicos y fluorescentes T5. La iluminación adecuada no solo resaltará sus colores brillantes, sino que también ayudará a prevenir enfermedades.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/cirujano1.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/cirujano2.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/cirujano3.jpg">
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
 
                <p class="questions__show"> En su hábitat natural, estos peces pueden vivir más de 30 años.Estado en la naturaleza:  habita en los arrecifes de coral del Indo-Pacífico. El pez cirujano azul no se encuentra actualmente en peligro de extinción, pero enfrenta amenazas debido a la destrucción de los hábitats de los arrecifes de coral y la explotación para el comercio de acuarios
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
 
                <p class="questions__show">  Los machos y las hembras forman grupos de reproducción espontáneos que se disuelven y reagrupan varias veces antes de ocurrir el desove. Los machos cortejan a las hembras de manera agresiva, y esto suele terminar en una carrera de desove hacia la superficie.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproducción
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Dado que la reproducción en cautiverio es poco común, no hay una frecuencia específica para la reproducción en acuarios domésticos.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Se encuentra en áreas donde abundan las algas, como arrecifes o lagunas. Cuando no está alimentándose, generalmente reside en grietas de roca, cuevas o debajo de pequeñas repisas para protegerse de los depredadores más grandes.</p>

             </div>
        </article>

    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        Presenta una coloración amarilla intensa con rayas azules en todo el cuerpo. Tiene una mancha negra en la base de la cola</div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        Es aplanado y comprimido lateralmente</div>
    <div class="item">
        <h1><b>Tamaño</b></h1>
        En cautiverio como mascota o en acuarios, el pez cirujano amarillo puede alcanzar hasta 20 cm de longitud.</div>
  
    <div class="item ">
        <h1><b>Aletas</b></h1> 
        Las aletas dorsal y ventral del pez cirujano amarillo son del mismo tamaño. En su aleta caudal, como en todos los peces cirujanos, tiene dos espinas extraíbles a cada lado. Estas espinas se supone que son utilizadas para defenderse de otros peces.</div>
 
    <div class="item ">
        <h1><b>Boca</b></h1>
        La boca del pez cirujano amarillo es pequeña y protráctil. Se encuentra en la parte inferior de la cabeza.</div>
    
    <div class="item ">
         <h1><b>Ojos</b></h1>
         La coloración de los ojos del pez cirujano amarillo es gris violácea. Presenta una mancha difusa amarilla alrededor de los ojos y el hocico</div>


              
         
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
