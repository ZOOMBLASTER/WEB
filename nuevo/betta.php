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
         <link rel="stylesheet" href="css/animales_3.css">
    
        <title>Barbo tigre</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">BETTA</h1>
         <p class="landing__text">Betta splendens</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                Originario de los arrozales de Asia, este pequeño pez de agua dulce ha sido criado selectivamente a lo largo de los años para exhibir una amplia gama de colores vibrantes y aletas exuberantes que parecen ondear en el agua como estandartes en un desfile. Conocido por su agresividad hacia otros machos de su especie, el betta masculino despliega su esplendor durante los enfrentamientos, desplegando sus aletas en un impresionante espectáculo de dominio territorial. Sin embargo, detrás de su bravura, el betta también puede ser un compañero tranquilo y solitario, encontrando placer en explorar su entorno y mostrando una conexión única con su cuidador. Con su capacidad de respirar aire directamente de la superficie, su laberinto branquial, el betta es un verdadero superviviente, capaz de adaptarse a una amplia gama de condiciones de vida. Ya sea en un pequeño acuario adornado con plantas vivas o en un elegante tanque comunitario, el Betta splendens siempre destaca como una joya acuática que despierta la curiosidad y la admiración de quienes lo observan.</p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/betta1.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Betta como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Tamaño del acuario adecuado:</b> Proporciona un acuario de al menos 5 galones (unos 19 litros) para un Betta, aunque más grande siempre es mejor. Un espacio más grande permite una mejor calidad del agua y un ambiente más enriquecedor para el pez.</li>
                            <li><b>Filtración eficiente:</b> Instala un filtro adecuado para mantener el agua limpia y saludable. Los bettas son sensibles a la acumulación de desechos, así que asegúrate de elegir un filtro que no genere una corriente demasiado fuerte, ya que esto puede estresar al pez.</li>
                            <li><b>Temperatura del agua:</b> Mantén la temperatura del agua entre 24°C y 27°C (75°F - 80°F) utilizando un calentador si es necesario. Los bettas son peces tropicales y necesitan un ambiente cálido y estable para prosperar.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/betta2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Betta como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Iluminación adecuada:</b> Proporciona iluminación moderada en el acuario, preferiblemente con luz LED de espectro completo. Evita la exposición directa a la luz solar, ya que puede provocar un crecimiento excesivo de algas y cambios bruscos de temperatura.</li>
                            <li><b>Diseño del acuario:</b> Decora el acuario con plantas vivas y otros elementos que proporcionen refugio y lugares para explorar. Los bettas disfrutan de esconderse entre las plantas y de tener lugares donde descansar en la superficie.</li>
                            <li><b>Agua limpia y de calidad:</b>   Realiza cambios parciales de agua regularmente, al menos una vez por semana, para mantener niveles adecuados de amoníaco, nitritos y nitratos. Utiliza un acondicionador de agua para eliminar cloro y cloraminas y asegurarte de que el agua sea segura para los peces.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/betta3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Betta como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación adecuada:</b>  Alimenta a tu Betta con una dieta equilibrada que incluya alimentos específicos para bettas, como pellets de alta calidad y ocasionalmente alimentos vivos o congelados como larvas de mosquito o daphnia. Evita sobrealimentar, ya que puede provocar problemas de salud.</li>
                            <li><b>Control de la calidad del agua:</b> Realiza pruebas regulares del agua para monitorear los niveles de pH, dureza del agua y otros parámetros importantes. Ajusta según sea necesario para mantener un ambiente estable y saludable para tu pez.</li>
                            <li><b>Evita la cohabitación con otros peces:</b> Los bettas son conocidos por su agresividad hacia otros machos de su especie y pueden pelear hasta la muerte. Mantén a tu Betta en un acuario solitario o en compañía de peces pacíficos y compatibles, evitando cualquier especie que pueda provocar estrés o agresión.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/betta1.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/betta2.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/betta3.jpg">
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
 
                <p class="questions__show"> La longevidad del Betta splendens puede variar dependiendo de diversos factores, como la genética, el ambiente y los cuidados recibidos. En promedio, se espera que vivan entre 2 y 5 años en cautiverio. Sin embargo, algunos individuos pueden superar esta expectativa y vivir hasta 7 años o más con los cuidados adecuados. </p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show">La reproducción del Betta splendens es un proceso interesante que implica una serie de comportamientos específicos. Para desencadenar el apareamiento, es importante simular cambios estacionales en la temperatura del agua, así como proporcionar un ambiente propicio que incluya plantas flotantes y refugios. Durante el cortejo, el macho despliega sus aletas y realiza movimientos de cortejo para atraer a la hembra. Una vez que la hembra está lista para desovar, el macho la ayuda a liberar los huevos y los fertiliza. Después de la fertilización, el macho construye un nido de burbujas donde los huevos son depositados y cuidados hasta que eclosionan.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">Los Bettas pueden reproducirse varias veces al año en cautiverio, siempre y cuando se cumplan las condiciones adecuadas. Sin embargo, es importante permitir un período de descanso entre cada puesta de huevos para evitar el agotamiento de los peces.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Huevos y crias
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">Los huevos de los Bettas son pequeños y translúcidos, y son colocados cuidadosamente por la hembra en el nido de burbujas construido por el macho. Una vez que los huevos son fertilizados, el macho se encarga de proteger el nido y los alevines hasta que eclosionan y son capaces de nadar por sí mismos. Durante los primeros días, las crías se alimentan del saco vitelino y luego pueden ser alimentadas con alimentos específicos para alevines, como infusorios, microgusanos u otros alimentos finamente triturados.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> En su hábitat natural, los Bettas suelen encontrarse en aguas poco profundas, como arrozales, pantanos y estanques, donde el agua es cálida y de baja corriente. Son peces anabantidos, lo que significa que pueden respirar aire atmosférico, permitiéndoles sobrevivir en aguas pobres en oxígeno. Sin embargo, su hábitat natural está amenazado por la pérdida de hábitat debido a la urbanización, la agricultura y otras actividades humanas, así como por la contaminación del agua.</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        El cuerpo del Betta splendens es alargado y comprimido lateralmente, lo que le permite moverse con agilidad tanto en el agua como entre las plantas.  </div>
    <div class="item">
        <h1><b>Aletas</b></h1>
        Los bettas son famosos por sus vistosas aletas. Tienen varias aletas, incluyendo la aleta dorsal, la aleta anal, las aletas pectorales y las aletas ventrales. Estas aletas pueden variar en forma y tamaño según la variedad del Betta, pero todas contribuyen a su belleza y movilidad.  </div>
    <div class="item">
        <h1><b>Aleta caudal</b></h1>
        La aleta caudal del Betta es especialmente llamativa. Puede tener una variedad de formas, desde redondeada hasta en forma de lira o de velo. La aleta caudal es una característica distintiva de esta especie y es una parte importante de su identidad visual.    </div>
  
    <div class="item ">
        <h1><b>Boca y ojos</b></h1>
        La boca del Betta splendens es terminal, lo que significa que está ubicada en la parte frontal de la cabeza. Tienen ojos grandes y expresivos, lo que les permite detectar presas y moverse con precisión en su entorno.   </div>
 
    <div class="item ">
        <h1><b>Escamas y coloración</b></h1>
        La piel del Betta está cubierta de escamas que pueden tener una variedad de colores y patrones, desde los tonos más vibrantes hasta los más sutiles. Su coloración y patrones únicos son una de las razones por las que son tan populares entre los aficionados a los peces.  </div>
    <div class="item ">
        <h1><b>Órganos internos</b></h1>
        Al igual que otros peces, el Betta splendens tiene órganos internos como el corazón, los pulmones (para respiración), el hígado, los riñones, etc. Estos órganos son fundamentales para su supervivencia y funcionamiento normal.   </div>
    
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
