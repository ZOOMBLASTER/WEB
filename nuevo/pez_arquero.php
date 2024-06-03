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
         <link rel="stylesheet" href="css/animalesS_7.css">
    
        <title>Pez arquero</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">PEZ ARQUERO</h1>
         <p class="landing__text"> Toxotidae </p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                
                El Pez Arquero es una especie carnívora que obtiene su nombre por habilidad para cazar insectos y otros pequeños animales terrestres derribándolos con poderosos chorros de agua. Los peces arquero son increíblemente precisos en su puntería y a menudo pueden golpear a las presas hasta 3 metros por encima de la superficie con un solo disparo.</div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/arquero2.jpeg">
                <div class="dev_content">
                    <div class="dev_title">El Pez arquero como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Volumen del acuario:</b>  Para un solo pez arquero, un acuario de al menos 75 litros (20 galones) es adecuado.</li>
                            <li><b> pH:</b>   : En su hábitat natural, suelen habitar en aguas ligeramente ácidas a neutras, con un pH que oscila entre 6.5-7.5. Es importante monitorear regularmente el pH del agua del acuario y ajustarlo según sea necesario para mantenerlo dentro de este rango óptimo.</li>
                            <li><b>Temperatura del agua:</b>  Los escalares son peces tropicales que provienen de las cálidas aguas de la cuenca del río Amazonas. Mantener la temperatura del agua dentro del rango de 24-28 °C (75-82 °F) es crucial para su salud y bienestar. Un calentador de acuario puede ser necesario para mantener una temperatura estable, especialmente en climas más fríos.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/arquero3.jpeg">
                <div class="dev_content">
                    <div class="dev_title">El Pez arquero como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Sustrato:</b> grava fina o arena. Asegúrate de que no haya bordes afilados</li>
                            <li><b>Filtracion:</b>  Un sistema de filtración eficiente es esencial para mantener la calidad del agua en el acuario. Los escalares son sensibles a la acumulación de desechos y requieren un agua limpia y bien oxigenada para prosperar. Se recomienda un filtro que pueda manejar el volumen de agua del acuario y proporcionar una filtración mecánica, biológica y química adecuada.</li>
                            <li><b>Escondites :</b>  Agrega plantas flotantes, troncos o rocas para crear escondites y zonas de sombra. Los peces arqueros son tímidos y aprecian lugares donde puedan esconderse.
                            </li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/arquero4.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Pez arquero como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> Los peces arqueros son carnívoros. Su dieta debe incluir alimentos vivos o congelados como insectos, larvas de mosquito, camarones y pequeños peces. También puedes ofrecerles alimentos secos específicos para peces arqueros.
                            </li>
                            <li><b>Iluminacion:</b>Proporciona una iluminación moderada. Los peces arqueros no requieren una luz intensa.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/arquero2.jpeg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/arquero3.jpeg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/arquero4.jpg">
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
 
                <p class="questions__show"> En estado salvaje, su esperanza de vida es de aproximadamente dos años. En cautividad, pueden vivir hasta 10 años</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> Los peces arqueros alcanzan la madurez sexual a los 1-2 años. Se cree que nadan desde sus hábitats de aguas salobres hasta los arrecifes de coral y las rocas de coral para reproducirse. La hembra pone entre 20,000 y 150,000 huevos de aproximadamente 0.4 mm de diámetro.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">  La frecuencia de reproducción puede variar según varios factores, incluyendo la edad y la salud de los peces, así como las condiciones ambientales y la disponibilidad de pareja. En general, los peces ángel pueden reproducirse varias veces al año si se les proporciona un entorno propicio y se satisfacen sus necesidades básicas.</p>

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
                <p class="questions__show"> o	El pez arquero se encuentra principalmente en zonas de agua salobre, como los estuarios de manglares.
                    o	También ocasionalmente se traslada río arriba hacia los ríos de agua dulce.
                    o	Está asociado con los arrecifes y se ha reportado que se encuentra cerca de la vegetación
                    </p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        Es de color blanquecino, ligeramente plateado, con 4 o 5 bandas oscuras en los costados. Estas bandas le ayudan a camuflarse entre la vegetación de los manglares donde vive.</div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        El pez arquero tiene un cuerpo estrecho y comprimido lateralmente. Su forma es profunda, y su cabeza es aplanada.
</div>
    <div class="item">
        <h1><b>Aletas</b></h1>
        Posee una aleta dorsal con 4 o 5 espinas. La banda central en su cuerpo es más larga que las restantes</div>  
    <div class="item ">
        <h1><b>Ojos</b></h1>
        Sus ojos son grandes y recorridos por una de las bandas, lo que les da una apariencia oscura.</div>
        
 
    
         
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
