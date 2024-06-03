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
         <link rel="stylesheet" href="css/animales_10.css">
    
        <title>Molly</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">MOLLY</h1>
         <p class="landing__text">Poecilia sphenops</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                
                El Poecilia sphenops, comúnmente conocido como molly negra, es una especie de pez de agua dulce que pertenece a la familia Poeciliidae. Originario de América Central y México, este pez se caracteriza por su cuerpo alargado y comprimido lateralmente, con aletas dorsales y anales de gran tamaño. Su coloración varía desde un negro sólido hasta tonos más oscuros con destellos metálicos, dependiendo de la genética y el entorno. Los mollys negros son conocidos por su adaptabilidad a una amplia gama de condiciones de agua, lo que los convierte en una opción popular para acuarios comunitarios. Son omnívoros y se alimentan principalmente de algas, insectos y materia vegetal, lo que los convierte en excelentes limpiadores de acuarios. Su reproducción es ovovivípara, lo que significa que dan a luz crías vivas en lugar de poner huevos. Debido a su fácil reproducción y cuidado, los mollys negros son apreciados tanto por aficionados novatos como por experimentados acuaristas.            </p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/molly1.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Molly como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Volumen del acuario:</b> Se recomienda un acuario de al menos 20 galones (aproximadamente 75 litros) para un pequeño grupo de Mollies. Cuanto más grande sea el acuario, mejor, ya que proporciona más espacio para nadar y reduce la acumulación de desechos.</li>
                            <li><b> pH:</b>   El pH del agua debe mantenerse entre 7.5 y 8.5 para replicar las condiciones de su hábitat natural en aguas tropicales.</li>
                            <li><b>Temperatura del agua:</b>  El rango de temperatura ideal para los Mollies está entre 24°C y 28°C (75°F - 82°F). Mantener la temperatura dentro de este rango ayuda a mantener a los peces saludables y activos.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/molly2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Molly como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Dureza del agua:</b> Los Mollies prefieren agua ligeramente dura a dura, con una dureza total (GH) de al menos 10 dGH.</li>
                            <li><b>Filtracion:</b> Un sistema de filtración eficiente es crucial para mantener la calidad del agua en el acuario. Un filtro que pueda manejar el volumen de agua del acuario y eliminar los desechos biológicos y químicos es esencial.</li>
                            <li><b>Escondites :</b>  Proporcionar plantas vivas y otros refugios como rocas, troncos o cuevas ayudará a que los Mollies se sientan seguros y reducirá el estrés.
                            </li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/molly3.jpeg">
                <div class="dev_content">
                    <div class="dev_title">El Molly como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> Los Mollies son omnívoros y se alimentan de una variedad de alimentos, incluidos escamas de calidad, pellets, alimentos congelados y alimentos vegetales frescos. Es importante ofrecer una dieta variada para garantizar una nutrición adecuada.
                            </li>
                            <li><b>Iluminacion:</b> Proporcionar iluminación adecuada es importante para el crecimiento de las plantas en el acuario, que pueden servir como refugio y fuente de alimento para los Mollies. Se puede usar iluminación LED de espectro completo con un temporizador para simular un ciclo de luz natural.</li>
                            <li><b>Mantenimiento y limpieza:</b> Realizar cambios parciales de agua regularmente (aproximadamente el 25% del volumen del acuario cada dos semanas) y monitorear los niveles de amoníaco, nitrito y nitrato son medidas clave para mantener un ambiente saludable para los Mollies.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/molly1.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/molly2.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/molly3.jpeg">
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
 
                <p class="questions__show"> La esperanza de vida del molly negro puede variar según las condiciones de cuidado. En acuarios bien mantenidos con agua limpia y parámetros adecuados, pueden vivir incluso más tiempo que en la naturaleza. Sin embargo, en entornos menos ideales, como acuarios sobrepoblados o con agua de mala calidad, su vida puede ser más corta.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> La reproducción de los molies negros es interesante debido a su método ovovivíparo. Esto significa que los huevos se desarrollan dentro del cuerpo de la hembra, donde eclosionan internamente, y luego las crías nacen vivas y completamente formadas. Esta adaptación les proporciona una ventaja de supervivencia, ya que las crías pueden comenzar a buscar alimento y refugio inmediatamente después del nacimiento.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">  La capacidad de las hembras de retener esperma puede conducir a camadas sucesivas sin la necesidad de un apareamiento constante. Esta adaptación biológica les permite a las hembras producir descendencia de manera continua, lo que contribuye a su alta tasa de reproducción. La frecuencia de reproducción puede aumentar si las condiciones ambientales son favorables y hay suficiente alimento disponible.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Huevos y crias
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">  Al nacer, las crías de molly negro son pequeñas réplicas de los adultos y pueden medir alrededor de 1 cm de longitud. Están equipadas con habilidades básicas de supervivencia, como la capacidad de buscar alimento y evitar depredadores. Las hembras suelen dar a luz en lugares seguros, como áreas con vegetación densa, para proteger a sus crías de los depredadores y aumentar sus posibilidades de supervivencia.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> En su hábitat natural en América Central, los molies negros pueden encontrarse en una variedad de entornos acuáticos, desde arroyos y ríos hasta lagos y estanques. Son peces adaptables que pueden sobrevivir en una amplia gama de condiciones de agua, lo que les permite habitar una variedad de hábitats. Aunque su estado de conservación generalmente no es motivo de preocupación, la pérdida de hábitat debido a la urbanización y la contaminación del agua son amenazas potenciales para sus poblaciones silvestres.</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        Los mollys negros suelen tener un color negro sólido, aunque pueden mostrar variaciones de color según la genética y las condiciones del medio ambiente.  </div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        Los mollys tienen un cuerpo alargado y comprimido lateralmente, con aletas bien desarrolladas.
</div>
    <div class="item">
        <h1><b>Aletas</b></h1>
        Tienen aletas pectorales, dorsales, ventrales, anales y caudales. Las aletas pectorales y ventrales son utilizadas para la locomoción y el equilibrio, mientras que las aletas dorsales y anales ayudan en la estabilidad durante la natación. La aleta caudal es la principal fuente de propulsión. </div>
  
    <div class="item ">
        <h1><b>Ojos</b></h1>
        Tienen ojos prominentes y bien desarrollados que les permiten una buena visión tanto en el agua clara como en la turbia.</div>
 
    <div class="item ">
        <h1><b>Boca</b></h1>
        La boca del molly está situada en la parte frontal de la cabeza y está adaptada para alimentarse de pequeños invertebrados y material vegetal.  </div>
        
    
         
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
