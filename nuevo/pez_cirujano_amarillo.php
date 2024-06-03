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
         <link rel="stylesheet" href="css/animalesM_8.css">
    
        <title>Pez cirujano amarillo</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
      
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">PEZ CIRUJANO AMARILLO</h1>
         <p class="landing__text">Zebrasoma flavescens</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                este llamativo pez de agua salada que se ha vuelto cada vez más popular entre los entusiastas de los acuarios.
Su coloración amarilla vibrante, combinada con sus elegantes patrones de natación, lo convierten en una atractiva adición a cualquier configuración marina. Su nombre proviene de las dos espinas que tiene en la base de la cola. Estas espinas son afiladas y venenosas, y el pez las utiliza para defenderse de los depredadores.
El pez cirujano amarillo es un pez muy sociable. Se suele encontrar en grupos de varios individuos.
Estos peces son muy territoriales, y los machos defienden sus territorios de otros machos.
El pez cirujano amarillo es un pez muy resistente. Puede adaptarse a una amplia gama de condiciones ambientales.
 </p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/amarillo1.jpg">
                <div class="dev_content">
                    <div class="dev_title">El pez cirujano amarillo como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Tamaño del acuario:</b> Los peces cirujano amarillos necesitan un acuario grande, con un mínimo de 200 litros de capacidad.</li>
                            <li><b> Filtración eficiente:</b>  Utiliza un sistema de filtración bien establecido en el acuario.
                                •	La filtración mecánica ayudará a eliminar partículas de desecho del agua.
                                •	La filtración biológica es esencial para mantener una buena calidad del agua. Las bacterias benéficas ayudan a procesar los desechos nitrogenados.
                                
                                </li>
                            <li><b>Temperatura del agua:</b>  Temperatura del agua: entre 23 y 28 grados Celsius. </li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/amarillo2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El pez cirujano amarillo como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Control químico del agua:</b>•	Mantén una buena calidad del agua con un nivel de pH entre 8.1 y 8.4. La salinidad debe estar entre 1021 y 1024. </li>
                            <li><b>Escondites:</b>   : Proporciona rocas vivas donde puedan esconderse y explorar</li>
                            <li><b>Sustrato:</b>   : proporciona un sustrato adecuado, como roca viva, para promover el desarrollo de algas</li>
                            </ul> 
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/amarillo3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El pez cirujano amarillo como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> son herbívoros y se alimentan principalmente de algas marinas como las nori.</li>
                            <li><b>Iluminacion:</b> La iluminación debe ser intensa para promover el desarrollo de algas, que forman parte importante de su dieta.
                                •	Utiliza lámparas o luces específicas para acuarios marinos que emitan una luz brillante.
                                </li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/amarillo1.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/amarillo2.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/amarillo3.jpg">
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
 
                <p class="questions__show">  La reproducción es sexual, con producción de huevos (ovíparos) y fecundación externa.Utilizan estrategias como agregaciones, formación de harenes y desoves en las zonas de alimentación. Sorprendentemente, los peces cirujanos amarillos pueden tener una fecundidad anual de más de 1,050,000 huevas a lo largo de todo el año</p>

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
                <p class="questions__show"> Se distribuyen en los océanos Pacífico e Índico. Prefieren vivir en arrecifes de coral, aunque también se les encuentra en zonas costeras con oleaje, fondos arenosos o rocosos. Su mayor diversidad se encuentra en las aguas tropicales y subtropicales.</p>

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
