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
         <link rel="stylesheet" href="css/animales_12.css">
    
        <title>Pez angel</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
        
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">PEZ ANGEL</h1>
         <p class="landing__text"> Pterophyllum scalare </p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                
                El Pterophyllum scalare, comúnmente conocido como el pez ángel, es una especie fascinante de pez de agua dulce perteneciente a la familia Cichlidae. Con su distintiva forma de cuerpo plano y alargado, y sus aletas largas y elegantes, el pez ángel es una joya acuática en cualquier acuario. Su coloración varía desde tonos plateados hasta dorados, con atractivas franjas verticales que le confieren un aspecto majestuoso y etéreo. Originario de las aguas tropicales de América del Sur, este pez se encuentra en arroyos y ríos lentos, donde se mueve con gracia entre las plantas acuáticas. Es apreciado tanto por su belleza como por su comportamiento tranquilo, lo que lo convierte en una adición encantadora a cualquier acuario comunitario. Sin embargo, requiere condiciones específicas de agua y espacio para prosperar, lo que lo convierte en una elección adecuada para acuaristas más experimentados.    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/angel1.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Pez angel como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Volumen del acuario:</b>   Los Pterophyllum scalare son peces que pueden crecer hasta unos 15-20 cm de longitud, por lo que necesitan un acuario lo suficientemente grande como para permitirles nadar y moverse con comodidad. Un acuario de al menos 40-50 galones (150-190 litros) proporciona suficiente espacio para un pequeño grupo de escalares, ya que son peces que prefieren vivir en grupos.</li>
                            <li><b> pH:</b>   : En su hábitat natural, los escalares suelen habitar en aguas ligeramente ácidas a neutras, con un pH que oscila entre 6.5-7.5. Es importante monitorear regularmente el pH del agua del acuario y ajustarlo según sea necesario para mantenerlo dentro de este rango óptimo.</li>
                            <li><b>Temperatura del agua:</b>  Los escalares son peces tropicales que provienen de las cálidas aguas de la cuenca del río Amazonas. Mantener la temperatura del agua dentro del rango de 24-28 °C (75-82 °F) es crucial para su salud y bienestar. Un calentador de acuario puede ser necesario para mantener una temperatura estable, especialmente en climas más fríos.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/angel2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Pez angel como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Dureza del agua:</b> Los Pterophyllum scalare prefieren aguas ligeramente blandas a moderadamente duras, con una dureza total (GH) idealmente entre 5-12 dGH. La dureza del agua se puede ajustar utilizando sustratos específicos o suplementos diseñados para este fin, dependiendo de las necesidades de los peces y de la calidad del agua de tu área.</li>
                            <li><b>Filtracion:</b>  Un sistema de filtración eficiente es esencial para mantener la calidad del agua en el acuario. Los escalares son sensibles a la acumulación de desechos y requieren un agua limpia y bien oxigenada para prosperar. Se recomienda un filtro que pueda manejar el volumen de agua del acuario y proporcionar una filtración mecánica, biológica y química adecuada.</li>
                            <li><b>Escondites :</b>   Los Pterophyllum scalare aprecian un entorno enriquecido con rocas, raíces y plantas vivas que imiten su hábitat natural en la cuenca del río Amazonas. Proporcionar refugios y escondites mediante la inclusión de estructuras como cuevas, troncos huecos y plantas densas ayuda a reducir el estrés y promueve el comportamiento natural de exploración y reproducción de los peces.
                            </li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/angel3.jpeg">
                <div class="dev_content">
                    <div class="dev_title">El Pez angel como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> Los escalares son omnívoros y disfrutan de una dieta variada que incluya alimentos vivos, congelados y secos. Proporcionarles una variedad de alimentos les garantiza una nutrición equilibrada y ayuda a estimular su comportamiento natural de caza.
                            </li>
                            <li><b>Espacio de nado vertical:</b>Los escalares son peces que nadan principalmente en la parte media y superior del acuario, por lo que es importante proporcionarles un espacio vertical adecuado para nadar y explorar. La altura del acuario debe ser suficiente para permitirles estirarse completamente y nadar libremente sin restricciones.</li>
                            <li><b>Compañeros de acuario:</b> Al elegir compañeros de acuario para los Pterophyllum scalare, es importante seleccionar especies pacíficas y compatibles que no compitan por el espacio o agredan a los escalares. Algunas opciones populares incluyen tetras, corydoras, otocinclus, y otros peces comunitarios de tamaño similar y temperamento tranquilo</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/angel1.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/angel2.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/angel3.jpeg">
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
 
                <p class="questions__show"> La longevidad del Pterophyllum scalare puede variar dependiendo de varios factores, como la calidad del agua, la dieta, el tamaño del acuario y la atención veterinaria adecuada. En un entorno bien cuidado, donde se mantengan condiciones estables y óptimas para su salud, estos peces pueden vivir hasta una década o incluso más. Es importante proporcionarles un ambiente adecuado y una alimentación balanceada para promover su longevidad.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> El proceso de reproducción del Pterophyllum scalare es fascinante y se inicia con una danza nupcial entre la pareja. Durante esta danza, los peces realizan movimientos sincronizados, mostrando su disposición para reproducirse. Una vez que la hembra está lista, deposita los huevos en una superficie limpia y plana, como una hoja de planta o una roca. Los machos fertilizan los huevos liberando esperma sobre ellos. Es importante proporcionar a los peces ángel un área de desove adecuada en el acuario, como hojas anchas o superficies verticales, para que puedan realizar este comportamiento natural.</p>

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
                <p class="questions__show">  Una hembra de pez ángel puede poner cientos de huevos en una sola puesta. Estos huevos son transparentes y adherentes, lo que les permite adherirse a la superficie donde son depositados. Los padres cuidan activamente los huevos y las crías, protegiéndolos de posibles depredadores y proporcionándoles alimento. Durante los primeros días de vida, las crías se alimentan de las reservas de nutrientes contenidas en el saco vitelino, y luego comienzan a consumir pequeños organismos y alimentos vivos. Los padres también pueden secretar sustancias nutritivas de su piel para alimentar a las crías durante los primeros días de vida.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> En su hábitat natural en las cuencas del río Amazonas, el Pterophyllum scalare se encuentra en aguas tranquilas y sombreadas, como lagos, lagunas y arroyos lentos. Suelen habitar áreas con vegetación densa y raíces de árboles sumergidos, donde pueden encontrar refugio y protección. Es importante replicar estas condiciones en el entorno del acuario, proporcionando plantas acuáticas, escondites y una decoración que imite su hábitat natural para promover su bienestar y comportamiento natural.</p>

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
        <h1><b>Aleta caudal</b></h1>
        La aleta caudal suele ser larga y bifurcada, dándole un aspecto elegante y distintivo.</div>
        <div class="item ">
            <h1><b>Aleta pectoral</b></h1>
            Las aletas pectorales son largas y puntiagudas, lo que les permite moverse con gracia a través del agua.</div>
            <div class="item ">
                <h1><b>Aleta ventral</b></h1>
                Las aletas ventrales son cortas en comparación con otras aletas y están ubicadas en la parte inferior del cuerpo..</div>
 
    
         
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
