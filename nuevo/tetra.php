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
         <link rel="stylesheet" href="css/animales_14.css">
    
        <title>Tetra</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">TETRA</h1>
         <p class="landing__text"> Paracheirodon innesi </p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                
                El Paracheirodon innesi, comúnmente conocido como el tetra neón, es una especie de pez pequeño y vibrante que cautiva a los entusiastas de la acuariofilia con su belleza y su comportamiento grácil. Originario de las aguas dulces de América del Sur, este pez posee un cuerpo alargado y compacto adornado con un colorido distintivo: una franja azul neón que recorre su costado desde la parte superior de la cabeza hasta la base de la cola, contrastando maravillosamente con su plateado iridiscente. Su aleta dorsal exhibe una tonalidad rojiza, aportando un toque adicional de elegancia a su aspecto. Además de su atractivo físico, el tetra neón es conocido por su comportamiento pacífico y su capacidad para habitar en grupos, lo que lo convierte en una adición popular a los acuarios comunitarios. Su naturaleza activa y su hábito de moverse en bancos añaden un dinamismo encantador a cualquier tanque, creando un espectáculo hipnotizante mientras se desliza entre las plantas y los refugios en busca de alimento. En resumen, el Paracheirodon innesi es mucho más que un simple pez de acuario; es una joya viviente que ilumina y anima cualquier entorno acuático con su presencia radiante y su comportamiento fascinante. </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/tetra1.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Tetra como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Volumen del acuario:</b>   Un acuario de al menos 10 galones (aproximadamente 38 litros) es adecuado para un pequeño grupo de tetras neón.</li>
                            <li><b> pH:</b>   : Mantén el pH del agua ligeramente ácido a neutro, idealmente entre 6.5 y 7.0.</li>
                            <li><b>Temperatura del agua:</b>   Mantén la temperatura del agua entre 24-27 °C (75-80 °F). Los tetras neón son originarios de aguas tropicales y prefieren temperaturas cálidas y estables.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/tetra2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Tetra como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Dureza del agua:</b> Prefieren aguas suaves a moderadamente duras, con una dureza generalmente entre 4-8 dH.</li>
                            <li><b>Filtracion:</b>  Instala un sistema de filtración eficaz para mantener el agua limpia y libre de desechos. Los tetras neón son sensibles a la acumulación de amoníaco y nitritos, por lo que una buena filtración es crucial.</li>
                            <li><b>Iluminacion :</b>    Proporciona iluminación moderada en el acuario. No necesitan luz intensa, pero asegúrate de que haya suficiente luz para promover el crecimiento de las plantas vivas si las tienes en el acuario.
                            </li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/tetra3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Tetra como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> Proporciona una dieta variada que incluya alimentos de calidad específicamente formulados para tetras, así como alimentos vivos o congelados como larvas de mosquito, dafnias y artemia. Aliméntalos dos veces al día en cantidades pequeñas que puedan consumir en unos pocos minutos.
                            </li>
                            <li><b>Acondicionamiento del agua:</b>Utiliza un acondicionador de agua para eliminar el cloro y los metales pesados, así como para neutralizar cualquier amoníaco y nitritos presentes en el agua.</li>
                            <li><b>Compañeros de acuario:</b>Los tetras neón son pacíficos y se llevan bien con otras especies de peces de tamaño similar y temperamento tranquilo. Evita mantenerlos con peces agresivos o que puedan intimidarlos.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/tetra1.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/tetra2.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/tetra3.jpg">
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
 
                <p class="questions__show"> La longevidad del tetra neón puede variar significativamente dependiendo de diversos factores, incluyendo la calidad del agua, la alimentación, el tamaño del acuario y el cuidado general proporcionado. En condiciones ideales, donde se mantienen parámetros del agua estables y se proporciona una alimentación equilibrada, los tetras neón pueden vivir hasta 5 años o incluso más en cautiverio. Sin embargo, factores como el estrés, enfermedades y condiciones del agua fuera de los rangos óptimos pueden reducir su esperanza de vida.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> La reproducción del tetra neón en cautiverio puede ser un desafío para los acuaristas debido a sus necesidades específicas. Para inducir la reproducción, generalmente se necesita un tanque de cría separado con condiciones específicas, incluyendo una dieta nutritiva y variada, cambios parciales de agua regulares, y una iluminación y temperatura adecuadas. Además, es beneficioso proporcionar plantas vivas densas donde los peces puedan depositar sus huevos y los alevines puedan encontrar refugio una vez que nazcan.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">  En su hábitat natural, los tetras neón a menudo se reproducen durante la temporada de lluvias, cuando las condiciones del agua cambian, estimulando así el desove. En cautiverio, la frecuencia de reproducción puede variar y dependerá de factores como la edad y la salud de los peces, así como de las condiciones del acuario. Algunos acuaristas pueden experimentar con métodos de inducción de la reproducción, como simular cambios estacionales mediante cambios controlados en la temperatura del agua y la iluminación.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Huevos y crias
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">  Los tetras neón son peces ovíparos, lo que significa que las hembras ponen huevos en lugar de dar a luz a crías vivas. Después de la fertilización, los huevos son pegajosos y tienden a adherirse a las plantas, decoraciones u otras superficies dentro del acuario. Los padres no proporcionan cuidado parental y pueden comerse sus propios huevos si no se los separa a tiempo. Una vez que los huevos eclosionan, las crías, llamadas alevines, son pequeñas y vulnerables. Requieren una alimentación especializada, como infusorios o alimentos para alevines, y un entorno seguro con plantas vivas y refugios para sobrevivir y crecer con éxito.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">Los tetras neón son nativos de América del Sur, específicamente de la cuenca del río Amazonas y de algunas regiones de Colombia, Perú y Brasil. Se encuentran en aguas tranquilas y poco profundas, generalmente en arroyos, lagos y zonas inundadas con vegetación densa. En su hábitat natural, los tetras neón viven en cardúmenes, lo que les proporciona protección contra depredadores y les ayuda a encontrar alimentos. Sin embargo, debido a la deforestación, la contaminación y la sobrepesca en algunas áreas, el hábitat natural de los tetras neón está amenazado. Como resultado, la captura y exportación de tetras neón para la industria de la acuariofilia ha llevado a una disminución de las poblaciones silvestres en algunas regiones. Por esta razón, muchos acuaristas prefieren obtener tetras neón criados en cautiverio en lugar de capturar ejemplares salvajes.</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        Su coloración distintiva es lo que lo hace tan popular en acuarios. Tienen un cuerpo plateado a azul iridiscente, con una franja azul eléctrico que recorre longitudinalmente desde la parte delantera de su cabeza hasta la base de su aleta adiposa. Por debajo de esta franja azul, tienen una franja roja más delgada que se extiende hasta la base de la aleta caudal.</div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        El tetra neón tiene un cuerpo alargado y ligeramente comprimido lateralmente, típico de los peces tetra. Su forma es aerodinámica, lo que le permite nadar fácilmente a través del agua.
</div>
    <div class="item">
        <h1><b>Aletas</b></h1>
        Tienen aletas pectorales, dorsales, anales y caudales típicas de los peces tetra. Sus aletas pectorales y ventrales son transparentes, mientras que las aletas dorsal, anal y caudal pueden tener un ligero tinte azulado o verde.</div>  
    <div class="item ">
        <h1><b>Ojos</b></h1>
        Los ojos del tetra neón son relativamente grandes en proporción a su cuerpo y tienen una coloración oscura.</div>
        <div class="item ">
            <h1><b>Boca</b></h1>
            Poseen una boca pequeña dirigida hacia arriba, adaptada para alimentarse de pequeños invertebrados y partículas en suspensión en el agua.</div>
            <div class="item ">
                <h1><b>Tamaño</b></h1>
                Los neones suelen medir entre 3 y 4 centímetros de longitud cuando están completamente desarrollados.</div>
 
    
         
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
