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
         <link rel="stylesheet" href="css/animales_7.css">
    
        <title>Caracol manzana</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">COCODRILO ENANO</h1>
         <p class="landing__text">Crocodylus cataphractus</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                El Crocodylus cataphractus, comúnmente conocido como el cocodrilo de hocico agudo o cocodrilo africano del oeste, es una especie fascinante que habita en las aguas dulces y salobres de África occidental. Su nombre científico, "cataphractus", alude a su armadura dérmica característica, que le brinda una apariencia distintiva y una defensa natural contra posibles depredadores. Este imponente reptil se destaca por su hocico alargado y estrecho, adornado con dientes afilados que son herramientas letales en la caza de presas. Su piel, cubierta de escamas y protuberancias, proporciona camuflaje perfecto entre la vegetación ribereña, mientras que su cuerpo robusto y musculoso le otorga una habilidad formidable para la natación ágil y la emboscada silenciosa. El Crocodylus cataphractus desempeña un papel vital en su ecosistema como un depredador tope, regulando las poblaciones de especies de presa y manteniendo el equilibrio en los sistemas acuáticos que llama hogar. Sin embargo, su supervivencia enfrenta desafíos debido a la pérdida de hábitat y la caza furtiva, lo que subraya la importancia de esfuerzos de conservación para proteger a esta majestuosa especie y asegurar su lugar en los ríos y lagos africanos.
            </p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/cocdriloenano1.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Cococdrilo enano como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Tamaño del acuario:</b> El acuario debe ser lo suficientemente grande como para permitir que el cocodrilo nade y se mueva cómodamente. Se recomienda un espacio de al menos 4 veces la longitud total del cocodrilo como mínimo.</li>
                            <li><b>Calidad del agua:</b>   Es crucial mantener la calidad del agua alta. Esto implica un sistema de filtración adecuado y cambios regulares de agua para evitar la acumulación de desechos y mantener niveles óptimos de pH y dureza.</li>
                            <li><b>Temperatura del agua:</b>  El agua del acuario debe mantenerse entre 25-30°C (77-86°F) para replicar las condiciones de su hábitat natural.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/cocdriloenano2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Cococdrilo enano como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Zona de tierra seca:</b> Se debe proporcionar una zona seca en el acuario donde el cocodrilo pueda descansar y tomar el sol. Esto puede ser una plataforma flotante o una área elevada en el acuario.</li>
                            <li><b>Alimentación:</b> Se debe proporcionar una dieta variada que incluya carne, pescado y otros alimentos que imiten su dieta natural. Los alimentos deben ser nutritivos y ofrecidos en cantidades adecuadas para evitar la obesidad o la desnutrición.</li>
                            <li><b>Iluminacion :</b>   Se necesita una iluminación adecuada para simular el ciclo día-noche. Las lámparas UVB son esenciales para ayudar al cocodrilo a sintetizar vitamina D3, necesaria para la salud ósea.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/cocdriloenano3.JPG">
                <div class="dev_content">
                    <div class="dev_title">El Cococdrilo enano como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Escondites:</b>  Se deben proporcionar escondites y refugios donde el cocodrilo pueda retirarse para descansar o sentirse seguro.</li>
                            <li><b>Seguridad de recinto:</b> El acuario debe estar asegurado con una tapa segura para evitar que el cocodrilo escape y para prevenir accidentes.</li>
                            <li><b>Supervisión y manejo adecuado:</b> Debido a la naturaleza peligrosa del Crocodylus cataphractus, es crucial que sea manejado solo por personal capacitado y con experiencia. La supervisión constante es necesaria para garantizar la seguridad del animal y de quienes lo cuidan.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/cocdriloenano1.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/cocdriloenano2.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/cocdriloenano3.JPG">
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
 
                <p class="questions__show"> El Crocodylus cataphractus, o caimán de Cuvier, tiene una longevidad notable. En la naturaleza, se estima que pueden vivir entre 50 y 70 años. Sin embargo, en cautiverio, donde reciben cuidados constantes y una alimentación controlada, pueden superar los 70 años e incluso llegar a los 80 años en algunos casos.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show">  La madurez sexual en los caimanes de Cuvier se alcanza entre los 10 y 13 años de edad, aunque puede variar ligeramente dependiendo de diversos factores como la disponibilidad de alimento y las condiciones ambientales. Durante la temporada de reproducción, que suele coincidir con la época de lluvias, los machos emiten vocalizaciones para atraer a las hembras y establecer su dominancia territorial.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">Por lo general, estos caimanes se reproducen una vez al año. Sin embargo, la frecuencia puede variar según las condiciones ambientales y la disponibilidad de recursos. En áreas con condiciones más favorables, es posible que se reproduzcan con mayor frecuencia.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Huevos y crias
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Las hembras construyen nidos utilizando montículos de vegetación cerca del agua, donde depositan sus huevos. El tamaño de la nidada puede oscilar entre 20 y 40 huevos. Estos son incubados por la hembra durante aproximadamente 90 días antes de la eclosión. Una vez que los huevos eclosionan, las crías son cuidadas y protegidas por la madre durante un período inicial. Durante esta etapa, son particularmente vulnerables a los depredadores, como aves rapaces y mamíferos acuáticos.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> El Crocodylus cataphractus está clasificado como una especie vulnerable en la Lista Roja de la UICN debido a diversas amenazas, incluida la pérdida de hábitat, la caza furtiva y la degradación ambiental. La destrucción de su hábitat natural, principalmente por la deforestación y la expansión agrícola, representa una amenaza significativa para su supervivencia. La implementación de medidas de conservación, como la protección de su hábitat y la regulación de la caza, son esenciales para garantizar la supervivencia a largo plazo de esta especie.</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Cabeza</b></h1>
        Tiene una cabeza grande y robusta, con una mandíbula potente equipada con numerosos dientes afilados adaptados para desgarrar la carne de presas pequeñas y medianas.</div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        Su cuerpo es largo y cilíndrico, con una cola fuerte y musculosa que le ayuda a propulsarse a través del agua.
</div>
    <div class="item">
        <h1><b>Piel</b></h1>
        Está cubierto por una piel gruesa y escamosa, con placas óseas en el dorso que le dan una apariencia acorazada. Estas placas óseas son una característica distintiva de esta especie.</div>
  
    <div class="item ">
        <h1><b>Extremidades</b></h1>
        Tiene cuatro patas cortas y robustas, cada una equipada con cinco dedos palmeados que le permiten moverse ágilmente tanto en tierra como en el agua.</div>
 
    <div class="item ">
        <h1><b>Ojos y orejas</b></h1>
        Tiene ojos y orejas situados en la parte superior de la cabeza, lo que le permite ver y oír fácilmente mientras permanece parcialmente sumergido en el agua.</div>
    
        <div class="item ">
            <h1><b>Sistema respiratorio</b></h1>
            Posee un sistema respiratorio adaptado para la vida semiacuática. Puede permanecer sumergido durante largos períodos de tiempo, emergiendo solo ocasionalmente para respirar.</div>

            <div class="item ">
                <h1><b>Sistema digestivo</b></h1>
                Su sistema digestivo está adaptado para una dieta carnívora, con un estómago robusto capaz de digerir grandes cantidades de carne.</div>

                <div class="item ">
                    <h1><b>Sistema nervioso y sensorial</b></h1>
                    Tiene un sistema nervioso bien desarrollado que le permite detectar cambios en su entorno y responder rápidamente a estímulos externos, lo que es crucial para la caza y la supervivencia.</div>

         
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
