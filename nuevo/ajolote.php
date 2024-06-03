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
         <link rel="stylesheet" href="css/animales_1.css">
    
  
         
  
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">AXOLOTE</h1>
         <p class="landing__text">Ambystoma mexicanum</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                El axolote, Ambystoma mexicanum, se erige como una joya de la naturaleza, una criatura extraordinaria arraigada en los lagos y canales de agua dulce cercanos a la Ciudad de México, particularmente en el mágico entorno de Xochimilco. Su figura, tan peculiar como fascinante, despierta la curiosidad y la admiración de quienes tienen el privilegio de contemplarla. Con su cuerpo alargado y suave, adornado con branquias externas que ondulan con gracia en el agua, el axolote parece una criatura salida de un cuento de hadas. Su paleta de colores es tan diversa como la misma naturaleza, presentando tonos que van desde el negro profundo hasta el amarillo brillante, con variaciones en marrón, gris y crema, otorgándole una camuflaje perfecta entre la vegetación acuática que habita. Este anfibio carnívoro, dotado de un sentido del olfato extraordinariamente agudo, se mueve con una elegancia serena en su hábitat acuático, buscando presas entre la maleza y acechando con paciencia a sus presas. Sin embargo, su magia no reside únicamente en su apariencia exterior; el axolote posee un poder de regeneración asombroso, capaz de regenerar extremidades perdidas e incluso tejidos complejos como el corazón y el cerebro, una capacidad que lo ha convertido en objeto de estudio y admiración en la comunidad científica.</p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/img1.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Axolote como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Temperatura del agua:</b> Los axolotes prefieren temperaturas frescas. Mantén el agua del acuario entre 16°C y 20°C (61°F - 68°F). Evita temperaturas superiores a 24°C (75°F), ya que pueden estresar al axolote y afectar su salud.</li>
                            <li><b>Filtración del agua:</b> Un sistema de filtración eficiente es esencial para mantener el agua del acuario limpia y libre de contaminantes. Los axolotes son sensibles a la acumulación de amoníaco y nitratos, por lo que un buen sistema de filtración ayudará a mantener niveles adecuados de agua.</li>
                            <li><b>Tamaño del acuario:</b> Proporciona un acuario lo suficientemente grande para permitir que el axolote nade y se mueva libremente. Se recomienda un mínimo de 20 galones (unos 75 litros) para un axolote adulto.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/img2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Axolote como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>sustrato decuado:</b> Utiliza un sustrato suave y seguro para evitar lesiones en la piel del axolote. La arena fina, el sustrato de sílice o el sustrato especial para acuaterrarios son buenas opciones. Evita usar grava o piedras pequeñas que puedan ser ingeridas accidentalmente.</li>
                            <li><b>Iluminacion:</b> Los axolotes son sensibles a la luz brillante, por lo que se recomienda una iluminación tenue en el acuario. Puedes utilizar luces LED de baja potencia o simplemente mantener el acuario en un área con luz natural indirecta.</li>
                            <li><b>Escondites:</b>  Proporciona refugios y escondites en el acuario donde el axolote pueda sentirse seguro y protegido. Puedes usar cuevas de cerámica, troncos o plantas acuáticas densas para crear lugares para esconderse.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/img3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Axolote como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentacion adecuada:</b>  Los axolotes son carnívoros y necesitan una dieta variada que incluya alimentos vivos o congelados, como gusanos de sangre, gusanos de tierra, camarones y larvas de mosquito. Asegúrate de alimentarlos con alimentos de alta calidad y variados para garantizar una nutrición adecuada.</li>
                            <li><b>Calidad del agua:</b> Realiza cambios parciales de agua regularmente para mantener la calidad del agua óptima. Se recomienda cambiar al menos el 20% del agua del acuario cada semana para eliminar los desechos y mantener niveles saludables de oxígeno.</li>
                            <li><b>Control de la química del agua:</b> Prueba regularmente los niveles de pH, amoníaco, nitritos y nitratos en el agua del acuario y ajústalos según sea necesario. Los axolotes son sensibles a los cambios en la química del agua, por lo que es importante mantener estos parámetros dentro de rangos seguros.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/img1.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/img2.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/img3.jpg">
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
 
                <p class="questions__show">Los ajolotes pueden vivir entre 10 y 15 años 
                    en cautiverio si se les proporciona un cuidado adecuado. </p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show">Los ajolotes alcanzan la madurez sexual 
                    entre los 18 meses y los 2 años de edad. La reproducción 
                    del ajolote se produce mediante la liberación de 
                    espermatozoides y huevos en el agua, donde ocurre la 
                    fertilización externa. A diferencia de la mayoría de las 
                    especies de anfibios, el ajolote retiene su estado larval 
                    incluso después de alcanzar la madurez sexual, un fenómeno 
                    conocido como neotenia. Esto significa que los ajolotes adultos 
                    tienen la capacidad de reproducirse sin metamorfosearse en 
                    una forma terrestre.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">En la naturaleza, la 
                    reproducción del ajolote puede estar influenciada por 
                    factores ambientales, como la temperatura y la disponibilidad 
                    de alimentos. En condiciones óptimas, los ajolotes pueden 
                    reproducirse varias veces al año.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Huevos y crias
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">Después de la fertilización, los huevos se desarrollan 
                    en larvas que eventualmente emergen y continúan su desarrollo en el 
                    agua. Durante esta etapa larval, los ajolotes son completamente acuáticos 
                    y respiran a través de branquias externas. A medida que las larvas crecen, 
                    desarrollan extremidades y eventualmente pueden metamorfosearse en 
                    su forma adulta.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">El ajolote es endémico de México, donde 
                    habita principalmente en cuerpos de agua dulce, como lagos, estanques 
                    y canales. Su hábitat natural se encuentra principalmente en la región del 
                    Valle de México, aunque también se ha encontrado en otras áreas 
                    cercanas. Sin embargo, el hábitat natural del ajolote se ha visto 
                    amenazado por la degradación del medio ambiente, la contaminación 
                    del agua y la pérdida de hábitat debido al desarrollo humano.</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        Los ajolotes son conocidos por su coloración 
        variable, que puede ser gris, marrón, negro o incluso rosado. Su 
        coloración puede cambiar dependiendo de factores como la edad, 
        el estado emocional y el entorno    </div>
    <div class="item">
        <h1><b>Regeneracion</b></h1>
        Tienen la capacidad única de 
        regenerar extremidades, cola, mandíbulas e incluso partes del sistema 
        nervioso central. Esta capacidad regenerativa es objeto de estudio 
        para la investigación médica y científica en el campo de la 
        regeneración de tejidos y órganos en los seres humanos.    </div>
    <div class="item">
        <h1><b>Tamaño</b></h1>
        Los ajolotes adultos suelen tener una longitud 
        que oscila entre los 15 y los 45 centímetros, aunque algunas especies 
        pueden ser más grandes. La cola del ajolote puede ser más larga que 
        el resto de su cuerpo y constituye aproximadamente la mitad de su 
        longitud total.    </div>
    <div class="item ">
        <h1><b>Cuerpo</b></h1>
        El cuerpo del ajolote es alargado y cilíndrico, con una forma 
        aerodinámica que le permite moverse con facilidad en el agua. La 
        anchura del cuerpo puede variar, siendo más estrecho cerca de la 
        cabeza y más ancho en la región del tronco.    </div>
    <div class="item ">
        <h1><b>Extremidades</b></h1>
        Los ajolotes tienen cuatro extremidades cortas, cada 
        una con cuatro dedos. Estas extremidades les ayudan a moverse en el 
        fondo del agua y a impulsarse durante la natación, aunque son menos 
        utilizadas que la cola para la locomoción.    </div>
    <div class="item ">
        <h1><b>Cola</b></h1>
        La cola del ajolote es su característica más distintiva. Es larga y 
        musculosa, y se extiende desde la parte posterior del cuerpo hasta la 
        punta. La cola es prensil, lo que significa que puede enrollarse y 
        desenrollarse para agarrar objetos o propulsarse en el agua.    </div>
    <div class="item ">
        <h1><b>Cabeza</b></h1>
        La cabeza del ajolote es relativamente grande en comparación 
        con el resto de su cuerpo. Tiene una forma cónica y está equipada con 
        una boca ancha y pequeños dientes cónicos. Los ojos del ajolote son 
        pequeños y están situados en la parte superior de la cabeza.   </div>
    <div class="item ">
        <h1><b>Branquias</b></h1>
        A lo largo de los lados de la cabeza del ajolote se 
        encuentran las branquias externas, que son filamentosas y están 
        altamente vascularizadas. Estas branquias le permiten al ajolote extraer 
        oxígeno del agua y respirar mientras permanece sumergido.    </div>
    
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
