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
         <link rel="stylesheet" href="css/animales_6.css">
    
        <title>Caracol manzana</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">CARACOL MANZANA</h1>
         <p class="landing__text">Pomacea canaliculata</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                El Pomacea canaliculata, comúnmente conocido como caracol manzana o caracol de agua dulce, es una especie de molusco gasterópodo originario de Sudamérica, aunque ha sido introducido en varias regiones del mundo. Este caracol de gran tamaño destaca por su concha de forma globosa y coloración variable, que puede ir desde tonos marrones hasta amarillos brillantes. Su caparazón presenta una serie de surcos en espiral, lo que le otorga una apariencia distintiva. Con una dieta herbívora, este caracol se alimenta principalmente de plantas acuáticas, aunque puede consumir también algas y detritus. Su capacidad reproductiva es notable, con una alta fecundidad y rápida multiplicación, lo que lo convierte en una especie invasora en muchos ecosistemas acuáticos. Su presencia puede tener un impacto significativo en la flora y fauna local, lo que lo convierte en objeto de preocupación en términos de conservación y manejo de ecosistemas acuáticos.</p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/caracolmanzana1.JPG">
                <div class="dev_content">
                    <div class="dev_title">El Caracol manzana como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Tamaño del acuario:</b> Un acuario de al menos 20 galones (unos 75 litros) proporciona suficiente espacio para que el caracol manzana se mueva cómodamente y tenga espacio para explorar. Un espacio más grande también permite mantener la calidad del agua de manera más estable.</li>
                            <li><b>Calidad del agua:</b>  La calidad del agua es esencial para la salud del caracol. Utiliza un filtro de calidad para mantener el agua limpia y bien oxigenada. Realiza cambios parciales de agua regularmente para eliminar los desechos y mantener los niveles adecuados de pH, dureza y nitritos/amoniaco.</li>
                            <li><b>Temperatura del agua:</b>  Mantener la temperatura del agua en el rango de 20°C a 28°C (68°F a 82°F) es crucial para la salud del caracol. Puedes utilizar calentadores de acuario para controlar la temperatura, asegurándote de que no haya fluctuaciones bruscas que puedan estresar al caracol.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/caracolmanzana2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Caracol manzana como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Decoracion y sustrato:</b> Proporciona un sustrato adecuado, como arena fina o grava, que permita al caracol enterrar sus huevos. Agrega decoraciones naturales como rocas, troncos o plantas vivas para crear un entorno enriquecido que imite su hábitat natural y le proporcione refugio y áreas de exploración.</li>
                            <li><b>Alimentación:</b> Ofrece una dieta variada que incluya alimentos vegetales como hojas de lechuga, espinaca, calabacín o pepino, así como alimentos comerciales para caracoles que contengan calcio para la salud de su caparazón. Evita sobrealimentar y retira los restos de comida no consumida para mantener la calidad del agua.</li>
                            <li><b>Iluminacion :</b>  Proporciona una iluminación adecuada para el acuario. La luz natural o artificial suave es preferible, evitando la exposición directa a la luz solar intensa, que puede provocar un crecimiento excesivo de algas.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/caracolmanzana3.jpeg">
                <div class="dev_content">
                    <div class="dev_title">El Caracol manzana como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Compatibilidad:</b>  Asegúrate de que los compañeros de tanque sean compatibles con el caracol manzana. Evita especies agresivas que puedan dañarlo o competir por recursos, y elige compañeros pacíficos que compartan requisitos similares de agua.</li>
                            <li><b>Control de población:</b>  Dado que los caracoles manzana tienen una alta capacidad reproductiva, es importante controlar su población para evitar un exceso de individuos en el acuario. Retira manualmente los huevos de la superficie del agua y considera introducir depredadores naturales como los peces lochas que se alimenten de los caracoles jóvenes.</li>
                            <li><b>Mantenimiento regular:</b> Realiza un mantenimiento regular del acuario, incluyendo la limpieza de los filtros, la remoción de residuos y la inspección de la salud del caracol para detectar posibles problemas a tiempo. Observa su comportamiento, apariencia y patrones de alimentación para identificar cualquier signo de enfermedad o estrés.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/caracolmanzana1.JPG">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/caracolmanzana2.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/caracolmanzana3.jpeg">
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
 
                <p class="questions__show"> La esperanza de vida de los caracoles manzana en su hábitat natural suele ser de alrededor de 1 a 2 años. Sin embargo, en cautiverio, con cuidados adecuados, pueden vivir más tiempo. La longevidad puede variar según factores como la disponibilidad de alimentos, la calidad del agua y la temperatura.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show">  Los caracoles manzana son hermafroditas, lo que significa que tienen órganos sexuales tanto masculinos como femeninos. Durante el apareamiento, dos caracoles se acoplan y cada uno fertiliza los huevos del otro con su esperma. Este proceso es vital para la reproducción de la especie.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> La frecuencia de reproducción puede variar según las condiciones ambientales. En general, en ambientes cálidos y con abundancia de alimentos, los caracoles manzana pueden reproducirse varias veces al año. Sin embargo, en condiciones desfavorables, como temperaturas frías o escasez de alimentos, la reproducción puede disminuir o detenerse por completo.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Huevos y crias
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">Después del apareamiento, los caracoles manzana depositan sus huevos en masas gelatinosas que adhieren a superficies cercanas al agua, como plantas acuáticas o rocas. Cada masa de huevos puede contener cientos de huevos. Tras un período de incubación que puede durar varias semanas, emergen las crías, que son réplicas en miniatura de los adultos. Estas crías son completamente independientes y comienzan a alimentarse y crecer rápidamente.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> El Pomacea canaliculata es considerado una especie invasora en muchas regiones fuera de su hábitat natural en América del Sur. Se ha introducido en diversos lugares a través del comercio de acuarios y, una vez establecido, puede tener un impacto negativo en los ecosistemas locales. Competir con especies nativas por recursos como alimentos y hábitats, y puede modificar los ecosistemas acuáticos en los que se establece. En consecuencia, se han implementado medidas de control en varios países para limitar su propagación y mitigar su impacto en los ecosistemas nativos.</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Concha</b></h1>
        Es su característica más distintiva. La concha del Pomacea canaliculata es grande, globosa y de forma similar a una manzana, de ahí su nombre común. Puede variar en coloración, desde marrón claro hasta casi negro, con bandas más oscuras o patrones de espirales. La concha proporciona protección al animal y está compuesta principalmente por carbonato de calcio.</div>
    <div class="item">
        <h1><b>Pie</b></h1>
        Es la parte del cuerpo que se extiende debajo de la concha y se mueve cuando el caracol se desplaza. Es musculoso y le permite al caracol moverse en tierra o en el agua.
</div>
    <div class="item">
        <h1><b>Cabeza</b></h1>
        Contiene los órganos sensoriales, como los ojos, los tentáculos y la boca. Los ojos son pequeños y se ubican en la base de los tentáculos superiores, que son más largos que los inferiores. La boca está ubicada en la parte inferior de la cabeza y está equipada con una rádula, una estructura raspadora utilizada para alimentarse.</div>
  
    <div class="item ">
        <h1><b>Organos internos</b></h1>
        Incluyen órganos como el corazón, los pulmones, el hígado, los riñones y el tracto digestivo. El corazón es un órgano tubular que bombea la hemolinfa (el equivalente de la sangre en los moluscos) a través del cuerpo. Los pulmones se encuentran en la cavidad del manto y están adaptados para la respiración aérea. El hígado y los riñones están involucrados en la digestión y la excreción de desechos, respectivamente.</div>
 
    <div class="item ">
        <h1><b>Manto</b></h1>
        Es un pliegue de tejido que rodea los órganos internos y secreta la concha. También tiene una cavidad en la que se encuentran los pulmones y las branquias.</div>
    
        <div class="item ">
            <h1><b>Reproduccion</b></h1>
            El Pomacea canaliculata es hermafrodita, lo que significa que tiene ambos órganos sexuales, pero aún así requiere de otro individuo para la reproducción. Durante el apareamiento, los caracoles intercambian esperma para fertilizar los huevos. Los huevos son depositados en masas gelatinosas y colocados en superficies cercanas al agua.</div>

         
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
