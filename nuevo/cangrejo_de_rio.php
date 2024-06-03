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
         <link rel="stylesheet" href="css/animales_5.css">
    
        <title>Cangrejo de rio</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">CANGREJO DE RIO</h1>
         <p class="landing__text">Austropotamobius pallipes </p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
             El Austropotamobius pallipes, comúnmente conocido como cangrejo de río europeo, es una especie fascinante que habita en los cursos de agua dulce de Europa. Este crustáceo presenta un cuerpo robusto y segmentado, cubierto por un caparazón duro de tonalidades marrones o verdosas, adaptado para la protección frente a depredadores y cambios ambientales. Sus pinzas son una característica distintiva, utilizadas tanto para la captura de alimentos como en comportamientos defensivos y de apareamiento. Con una dieta omnívora, se alimenta principalmente de materia vegetal, insectos acuáticos y otros invertebrados. Aunque su presencia es indicativa de aguas limpias y saludables, el Austropotamobius pallipes enfrenta amenazas significativas debido a la degradación del hábitat, la contaminación y la introducción de especies invasoras. Es objeto de esfuerzos de conservación en toda Europa para proteger su frágil población y preservar la biodiversidad de los ecosistemas acuáticos.</p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/cangrejoderio2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Cangrejo de rio como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Calidad del agua:</b> La calidad del agua es fundamental para la salud de los cangrejos de río. Se debe utilizar agua limpia y libre de cloro, preferiblemente desclorada y, si es necesario, tratada para eliminar metales pesados y otros contaminantes. Un sistema de filtración adecuado, como un filtro de esponja o un filtro externo, ayudará a mantener el agua limpia al eliminar los desechos y mantener una buena circulación.</li>
                            <li><b>Substrato:</b>  El fondo del acuario debe tener un sustrato adecuado que imite el lecho de un río. La grava fina o la arena son opciones ideales, ya que permiten a los cangrejos excavar y buscar alimento. Se debe evitar el uso de sustratos afilados que puedan dañar el caparazón del cangrejo.</li>
                            <li><b>Temperatura del agua:</b>  El Austropotamobius pallipes es sensible a los cambios de temperatura y requiere un entorno acuático estable. El rango de temperatura ideal es de 10°C a 20°C, aunque algunos individuos pueden tolerar temperaturas ligeramente más altas o más bajas. Se puede utilizar un calentador de acuario para mantener la temperatura dentro de este rango.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/cangrejoderio3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Cangrejo de rio como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Escondites:</b> Proporcionar refugios naturales, como cuevas de rocas, troncos o tubos de PVC, es esencial para que el cangrejo se sienta seguro y cómodo en su entorno. Estos refugios también sirven como lugares de descanso y protección durante la muda del caparazón.</li>
                            <li><b>Alimentación:</b> El Austropotamobius pallipes es omnívoro y se alimenta de una variedad de alimentos, incluyendo pellets de calidad para cangrejos, verduras frescas (como espinacas, calabacines o zanahorias), algas y ocasionalmente proteínas de origen animal, como camarones o gusanos. Es importante proporcionar una dieta variada y equilibrada para garantizar una nutrición adecuada.</li>
                            <li><b>Vegetación :</b>  La adición de plantas acuáticas vivas no solo mejora la estética del acuario, sino que también proporciona refugio y alimento adicional para el cangrejo. Las plantas de hojas largas y densas, como Anubias, Vallisneria o helechos de Java, son opciones excelentes.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/cangrejoderio4.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Cangrejo de rio como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Iluminacion:</b>   Se debe proporcionar una iluminación adecuada para el acuario, preferiblemente con luz natural o luces LED de espectro completo. Se recomienda un ciclo de luz y oscuridad regular, con alrededor de 8 a 12 horas de luz al día, para simular las condiciones naturales y promover el comportamiento saludable del cangrejo.</li>
                            <li><b>Espacio:</b>  Es importante proporcionar suficiente espacio en el acuario para que el cangrejo pueda moverse y explorar cómodamente. Se recomienda un acuario más grande, de al menos 20-30 litros por cangrejo, especialmente si se mantienen varios individuos juntos. Un acuario más grande también facilita el mantenimiento de la calidad del agua.</li>
                            <li><b>Parámetros estables:</b> Además de la temperatura, es importante monitorear otros parámetros del agua, como el pH y la dureza. El pH ideal para el Austropotamobius pallipes está en el rango de 7.0 a 8.0, y la dureza del agua debe ser moderada a dura. Se pueden utilizar kits de prueba de agua para monitorear estos parámetros y realizar cambios parciales de agua según sea necesario para mantener condiciones óptimas para el cangrejo.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/cangrejoderio2.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/cangrejoderio3.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/cangrejoderio4.jpg">
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
 
                <p class="questions__show"> La longevidad del Austropotamobius pallipes puede variar dependiendo de factores como la disponibilidad de alimentos, las condiciones del hábitat y la presencia de enfermedades. En general, estos cangrejos pueden vivir hasta aproximadamente 5 años en la naturaleza, aunque algunos individuos pueden alcanzar edades ligeramente mayores en condiciones ideales.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> La reproducción en el Austropotamobius pallipes generalmente ocurre durante la primavera y el verano. Durante este período, los machos buscan activamente a las hembras para el apareamiento. La cópula puede durar desde unos pocos minutos hasta varias horas. Después del apareamiento, las hembras llevan los huevos fertilizados debajo de su abdomen hasta que eclosionan.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> La frecuencia de reproducción puede depender de varios factores, incluida la edad y el tamaño del cangrejo, así como las condiciones ambientales y la disponibilidad de alimentos. En general, los cangrejos de río europeos pueden reproducirse una vez al año, generalmente durante la temporada cálida cuando las condiciones son más propicias para el desarrollo de las crías.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Huevos y crias
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">Después de la fertilización, los huevos fertilizados se adhieren al abdomen de la hembra y son protegidos por una membrana especial. La hembra lleva los huevos hasta que eclosionan, lo que puede llevar varias semanas. Una vez que los huevos eclosionan, las crías emergen como diminutos cangrejos y comienzan a explorar su entorno. La cantidad de huevos fertilizados en una puesta puede variar, pero puede haber cientos de ellos. No todos los huevos eclosionados sobreviven hasta la edad adulta debido a la depredación, la competencia por recursos y otros factores ambientales.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> El Austropotamobius pallipes enfrenta numerosas amenazas en su hábitat natural, incluida la pérdida y degradación del hábitat debido a la urbanización, la agricultura intensiva, la deforestación y la construcción de infraestructuras. Además, la contaminación del agua por productos químicos, desechos agrícolas y urbanos, así como la introducción de especies invasoras como el cangrejo rojo americano (Procambarus clarkii), que puede ser portador de la enfermedad de la peste del cangrejo, también representan graves riesgos para las poblaciones de cangrejos de río europeos. En respuesta a estas amenazas, se están llevando a cabo esfuerzos de conservación que incluyen la protección y restauración de hábitats, así como la implementación de medidas para controlar y gestionar las poblaciones de especies invasoras.</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Caparazon</b></h1>
        Es la cubierta dura que protege el cuerpo del cangrejo. En el A. pallipes, el caparazón es de color verde oscuro a marrón y está cubierto de protuberancias y espinas.</div>
    <div class="item">
        <h1><b>Cefalotorax</b></h1>
        Es la parte del cuerpo que incluye la cabeza y el tórax. En el A. pallipes, el cefalotórax es más ancho que largo y está cubierto por el caparazón.
</div>
    <div class="item">
        <h1><b>Abdomen</b></h1>
        Es la parte del cuerpo que sigue al cefalotórax. En los cangrejos, el abdomen es más estrecho y flexible que el cefalotórax. En el A. pallipes, el abdomen es relativamente largo y está compuesto por varios segmentos.</div>
  
    <div class="item ">
        <h1><b>Quelas</b></h1>
        Son las pinzas que tiene en la parte delantera. En el A. pallipes, las quelas son robustas y están adaptadas para manipular alimentos y defenderse.</div>
 
    <div class="item ">
        <h1><b>Patas</b></h1>
        Tiene cinco pares de patas, todas ellas adaptadas para caminar y nadar. Las patas traseras son especialmente importantes para la natación.</div>
    
        <div class="item ">
            <h1><b>Antenas</b></h1>
            Tiene dos pares de antenas. Las antenas más largas se utilizan para la exploración del entorno y la detección de alimentos y depredadores.</div>

        <div class="item ">
                <h1><b>Ojos</b></h1>
                Tiene un par de ojos compuestos que le permiten detectar la luz y la forma. Están ubicados en la parte superior de la cabeza. </div>

        <div class="item ">
                    <h1><b>Branquias</b></h1>
                    Los cangrejos de río tienen branquias que les permiten extraer oxígeno del agua. Estas branquias suelen estar ubicadas en la base de las patas.</div>
        
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
