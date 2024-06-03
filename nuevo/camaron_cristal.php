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
         <link rel="stylesheet" href="css/animales_4.css">
    
        <title>Camaron cristal</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">CAMARON CRISTAL</h1>
         <p class="landing__text">Palaemonetes paludosus</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                El Palaemonetes paludosus, comúnmente conocido como camarón de agua dulce del sur, es una especie de crustáceo que habita en hábitats de agua dulce, como arroyos, pantanos y lagos, principalmente en el sureste de Estados Unidos. Este camarón presenta un cuerpo translúcido o ligeramente pigmentado, con bandas longitudinales que van desde tonos marrones hasta verdes, lo que le proporciona camuflaje en su entorno natural. Su tamaño oscila entre los 3 y 5 centímetros, con una forma aerodinámica que facilita su desplazamiento ágil entre la vegetación acuática. Es un omnívoro oportunista, alimentándose de pequeños invertebrados, restos vegetales y materia orgánica en descomposición. Aunque su papel ecológico no es tan prominente como otros crustáceos acuáticos, el Palaemonetes paludosus es un componente importante en las cadenas tróficas de los ecosistemas acuáticos, contribuyendo a la biodiversidad y el equilibrio del ecosistema.</p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/camaroncristal1.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Camaron cristal como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Dureza del agua:</b> Un rango de dureza total (GH) de 4-8 dGH y una dureza de carbonatos (KH) de 3-6 dKH son adecuados para los camarones de cristal.</li>
                            <li><b>pH:</b>  Preferiblemente entre 6.5 y 7.5. Un pH ligeramente ácido a neutro es óptimo para la mayoría de los camarones de agua dulce, incluidos los camarones de cristal.</li>
                            <li><b>Temperatura del agua:</b>  Idealmente, mantenerla en un rango de 20-25°C (68-77°F). Los camarones de cristal son sensibles a los cambios bruscos de temperatura, por lo que es importante mantenerla estable.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/camaroncristal2.jpeg">
                <div class="dev_content">
                    <div class="dev_title">El Camaron cristal como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Iluminación adecuada:</b>  Debe ser moderada. Los camarones de cristal prefieren zonas con sombra y vegetación densa donde puedan esconderse, por lo que la iluminación excesiva puede estresarlos.</li>
                            <li><b>Filtración:</b> Utilizar un filtro de baja potencia o ajustar el flujo del filtro para evitar corrientes fuertes que puedan dañar a los camarones o aspirarlos hacia el filtro. Los filtros con esponjas o prefiltros son ideales para camarones pequeños.</li>
                            <li><b>Vegetación y refugios:</b>   Introducir plantas vivas como musgo de Java, helechos de Java y otras plantas de hojas finas que proporcionen refugio y zonas de alimentación para los camarones. También puedes agregar cuevas o refugios artificiales.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/camaroncristal3.jpeg">
                <div class="dev_content">
                    <div class="dev_title">El Camaron cristal como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Sustrato:</b>  Elegir sustratos suaves como arena fina o grava fina que no dañen las delicadas patas de los camarones. El sustrato oscuro puede resaltar los colores de los camarones y proporcionar un fondo natural.</li>
                            <li><b>Espacio:</b> Calcular un mínimo de 2-5 litros de agua por camarón de cristal, dependiendo de la cantidad de camarones que desees mantener. Proporcionar suficiente espacio y escondites para reducir el estrés y promover un comportamiento natural.</li>
                            <li><b>Parámetros estables:</b> Realizar cambios parciales de agua regularmente (aproximadamente el 10-20% del volumen total) para mantener los niveles de amoníaco, nitritos y nitratos bajo control. Pruebas regulares del agua ayudarán a monitorear los parámetros y tomar medidas correctivas si es necesario.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/camaroncristal1.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/camaroncristal2.jpeg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/camaroncristal3.jpeg">
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
 
                <p class="questions__show"> La longevidad del Palaemonetes paludosus puede variar en función de varios factores, como la disponibilidad de alimentos, la calidad del agua y la presencia de depredadores. En condiciones óptimas, estos camarones pueden vivir hasta 2 años, aunque en la naturaleza, muchas veces su vida se limita a 1 año debido a diversos factores de estrés ambiental. </p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show">La reproducción en el Palaemonetes paludosus es sexual y externa. Las hembras alcanzan la madurez sexual a una edad de unos pocos meses, mientras que los machos pueden tardar un poco más. Durante el proceso de apareamiento, los machos liberan esperma en el agua, que es recogido por las hembras y utilizado para fertilizar sus huevos.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> La frecuencia de reproducción puede variar según la disponibilidad de alimentos y las condiciones ambientales. En general, los camarones de río tienen la capacidad de reproducirse varias veces durante su vida, lo que les permite mantener poblaciones estables en sus hábitats.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Huevos y crias
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">Las hembras de Palaemonetes paludosus llevan los huevos fertilizados adheridos a su abdomen hasta que eclosionan. Dependiendo de la temperatura del agua y otros factores ambientales, el período de incubación puede durar varias semanas. Una vez que los huevos eclosionan, las crías emergen como larvas que pasan por varias etapas de desarrollo antes de convertirse en camarones juveniles. Durante este tiempo, las crías son vulnerables a la depredación y a las condiciones ambientales adversas.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> El Palaemonetes paludosus es una especie adaptable que se encuentra comúnmente en una variedad de hábitats de agua dulce, como arroyos, ríos, estanques y lagos, en América del Norte. A pesar de su presencia común, estos camarones pueden ser sensibles a la contaminación del agua y a la degradación del hábitat, lo que puede afectar negativamente a sus poblaciones. Además, la introducción de especies invasoras y los cambios en los patrones climáticos también pueden representar amenazas para su supervivencia a largo plazo.</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        La cabeza del Palaemonetes paludosus es distintiva, con un par de antenas largas y delgadas que se extienden hacia adelante. También tiene un par de antenas más cortas y una serie de apéndices bucales utilizados para alimentarse.</div>
    <div class="item">
        <h1><b>Torso</b></h1>
        El torso del camarón está compuesto por varias secciones, cada una con un par de patas. Estas patas son importantes para la locomoción y la manipulación de alimentos.
</div>
    <div class="item">
        <h1><b>Abdomen</b></h1>
        El abdomen es la sección más larga del cuerpo y contiene los órganos internos, como el sistema digestivo y los órganos reproductores. En los machos, los pleópodos (apéndices abdominales) a menudo se modifican para la transferencia de esperma durante la reproducción.</div>
  
    <div class="item ">
        <h1><b>Cauda (o cola)</b></h1>
        La cola del camarón suele ser larga y estrecha, y termina en un abanico de aletas que le ayuda a nadar y a mantener el equilibrio.</div>
 
    <div class="item ">
        <h1><b>Caparazón</b></h1>
        Al igual que otros crustáceos, el Palaemonetes paludosus tiene un caparazón duro que protege su cuerpo. Este caparazón es una característica distintiva de los crustáceos y debe ser mudado periódicamente a medida que el camarón crece. </div>
    
    
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
