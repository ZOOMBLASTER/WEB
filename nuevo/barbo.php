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
         <link rel="stylesheet" href="css/animales_2.css">
    
        <title>Barbo tigre</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">BARBO TIGRE</h1>
         <p class="landing__text">Puntius Tetrazona</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                El barbo tigre, científicamente conocido como Barbus tetrazona, es una especie de pez de agua dulce que se destaca por su llamativo patrón de rayas oscuras sobre un fondo dorado o plateado, que se asemeja a la apariencia de un tigre. Originario del sudeste asiático, este pez es popular en acuarios domésticos debido a su vibrante coloración y su comportamiento activo. Es una especie omnívora que se alimenta principalmente de pequeños invertebrados y plantas, y su tamaño suele oscilar entre los cinco y los diez centímetros en cautiverio. Aunque puede mostrarse algo territorial, el barbo tigre es generalmente pacífico y puede coexistir con una variedad de otros peces comunitarios en el acuario. Su distintivo aspecto y su naturaleza dinámica lo convierten en una adición fascinante y atractiva para cualquier aficionado a la acuariofilia.</p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/barbo1.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Barbo tigre como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Tamaño del acuario adecuado:</b> El barbo tigre es un pez activo que necesita espacio para nadar. Se recomienda un acuario de al menos 75 litros para un grupo de cinco a seis ejemplares.</li>
                            <li><b>Calidad del agua:</b> Mantén la calidad del agua óptima con un filtro eficiente y cambios regulares de agua. El pH ideal para el barbo tigre es ligeramente ácido a neutro, entre 6.5 y 7.5.</li>
                            <li><b>Temperatura del agua:</b> El barbo tigre prefiere temperaturas tropicales, entre 22°C y 28°C. Utiliza un calentador para mantener el agua dentro de este rango.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/barbo2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Barbo tigre como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Diseño del acuario:</b> Proporciona escondites y refugios mediante plantas vivas, rocas y troncos. El barbo tigre aprecia un entorno que imite su hábitat natural con áreas para explorar y esconderse.</li>
                            <li><b>Alimentación variada:</b> Ofrece una dieta equilibrada que incluya alimentos comerciales de calidad para peces tropicales, así como alimentos vivos o congelados como larvas de mosquito, daphnia y artemia.</li>
                            <li><b>Compañeros de acuario adecuados:</b>   Evita mantener el barbo tigre con peces pequeños que puedan ser vistos como presas. Prefiere compañeros de acuario pacíficos y de tamaño similar, como otros barbos, danios o tetras.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/barbo3.jpeg">
                <div class="dev_content">
                    <div class="dev_title">El Barbo tigre como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Compañeros de acuario adecuados:</b>  El barbo tigre es un pez gregario y se siente más cómodo en grupos de al menos cinco individuos. Mantenerlos en grupos más pequeños puede resultar en comportamiento agresivo o estresante.</li>
                            <li><b>Iluminación adecuada:</b> Proporciona una iluminación moderada en el acuario, evitando la exposición directa a la luz solar. Esto ayudará a mantener un ambiente confortable y natural para los peces.</li>
                            <li><b>Monitoreo constante::</b> Observa regularmente a tus peces para detectar signos de enfermedad, estrés o agresión. Responde rápidamente a cualquier problema ajustando las condiciones del acuario o proporcionando atención médica según sea necesario.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/barbo1.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/barbo2.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/barbo3.jpeg">
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
 
                <p class="questions__show"> La longevidad del Puntius tetrazona puede variar según las condiciones de cuidado. En un entorno adecuado, como un acuario bien mantenido con agua limpia y parámetros estables, estos peces pueden vivir entre 5 y 7 años. Sin embargo, factores como la calidad del agua, la dieta y el espacio del acuario pueden influir en su longevidad. </p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show">La reproducción del barbo tigre generalmente ocurre en la naturaleza durante la temporada de lluvias, cuando los cambios en el entorno desencadenan el comportamiento reproductivo. En cautiverio, la reproducción puede ser inducida mediante cambios en la temperatura y la alimentación, así como mediante la introducción de plantas u otros sustratos donde los peces puedan depositar sus huevos.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">En condiciones óptimas, los barbos tigre pueden reproducirse varias veces al año, especialmente si se proporcionan estímulos adecuados como cambios en la temperatura del agua y una dieta nutritiva. Sin embargo, la frecuencia exacta puede variar y está influenciada por factores como la edad y la salud de los peces.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Huevos y crias
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">Después de la fertilización, los huevos del Puntius tetrazona son generalmente pegajosos y se adhieren a superficies como plantas, rocas o sustratos en el acuario. Los padres no proporcionan cuidado parental y, en algunos casos, pueden consumir los huevos si se sienten estresados o si no hay suficiente cobertura para proteger los huevos. Una vez que eclosionan, las crías son pequeñas y vulnerables, por lo que es importante proporcionarles un entorno seguro y alimentación adecuada para su crecimiento.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> El Puntius tetrazona es nativo de varios países del sudeste asiático, donde se encuentra en arroyos y ríos con aguas claras y bien oxigenadas. Aunque es una especie relativamente resistente, la degradación del hábitat debido a la deforestación, la contaminación y otras actividades humanas puede amenazar sus poblaciones en la naturaleza. Además, la captura excesiva para el comercio de mascotas también puede representar una amenaza para esta especie en algunas áreas.</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        Tiene un cuerpo alargado y delgado, típico de muchos ciprínidos. Su cuerpo es de color plateado con cuatro rayas negras distintivas a lo largo de los flancos, que le dan su nombre común de "barbo tigre".   </div>
    <div class="item">
        <h1><b>Aletas</b></h1>
        Presenta las aletas típicas de un pez ciprínido, incluyendo las aletas dorsal, caudal, pectorales, ventrales y anales. Estas aletas suelen tener un ligero tinte rojizo o naranja en los bordes, lo que añade a su atractivo.    </div>
    <div class="item">
        <h1><b>Ojos</b></h1>
        Tienen ojos grandes y redondeados, lo que les proporciona una buena visión y les ayuda a detectar alimentos y posibles peligros en su entorno.    </div>
  
    <div class="item ">
        <h1><b>Boca</b></h1>
        La boca del barbo tigre es pequeña y está orientada hacia abajo, adaptada para alimentarse principalmente de alimentos que se encuentran en el fondo del acuario, como pequeños invertebrados y algas.    </div>
 
    <div class="item ">
        <h1><b>Pigmento</b></h1>
        Está cubierto de escamas pequeñas y tiene una pigmentación natural que puede variar ligeramente entre individuos, aunque las cuatro rayas negras características son consistentes en la mayoría de los ejemplares.  </div>
    <div class="item ">
        <h1><b>Tamaño</b></h1>
        Los barbos tigre suelen crecer hasta alcanzar una longitud de unos 5-7 centímetros en condiciones adecuadas de acuario, aunque en la naturaleza pueden crecer un poco más.   </div>
    
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
