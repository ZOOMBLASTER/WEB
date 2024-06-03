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
         <link rel="stylesheet" href="css/animalesS_3.css">
    
        <title>Cangrejo Fiddelr</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">CANGREJO FIDDLER</h1>
         <p class="landing__text"> UCA </p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                
                Los cangrejos son animales muy famosos y conocidos. Vemos referencias a ellos en todas partes y a grandes rasgos conocemos su apariencia. Sobre todo, destacan por la tenazas que poseen, que utilizan para defenderse y otros motivos.
•	Pero entre ellos existe uno llamado el cangrejo violinista. Su nombre es muy llamativo, ¿será acaso que este crustáceo sea una especie de virtuoso del violín?
 
 </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/fiddler1.jpeg">
                <div class="dev_content">
                    <div class="dev_title">El cangrejo fiddler como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Volumen del acuario:</b>  tanque de 10 galones.</li>
                            <li><b> pH:</b>   Monitorea los niveles de salinidad (SG 1.005), pH (7.2 - 8.5) y nitratos (menos de 40 ppm) para mantener un ambiente saludable
                                •	Tamaño del acuario: al menos 10 galones para un solo cangrejo
                                </li>
                            <li><b>Temperatura del agua:</b>  Mantener la temperatura del agua dentro del rango de 24-28 °C (75-82 °F) es crucial para su salud y bienestar. Un calentador de acuario puede ser necesario para mantener una temperatura estable, especialmente en climas más fríos.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/fiddler2.jpeg">
                <div class="dev_content">
                    <div class="dev_title">El cangrejo fiddler como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Sustrato:</b> : La arcilla es una buena opción frente a la grava o la arena, ya que proporciona más nutrientes para la vegetación y mejora la calidad del agua</li>
                            <li><b>Filtracion:</b>  Es crucial contar con un filtro potente en el acuario. Esto ayudará a mantener la calidad del agua y eliminar sustancias tóxicas. Además, realiza cambios de agua periódicos para evitar la acumulación de residuos y mantener un ambiente saludable.</li>
                            <li><b>Escondites :</b>  Puedes usar madera flotante, rocas, macetas de arcilla volteadas, cuevas de resina y plantas vivas.
                            </li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/fiddler3.jpeg">
                <div class="dev_content">
                    <div class="dev_title">El cangrejo fiddler como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b>omnívoros. En su dieta, consumen otros crustáceos pequeños, gusanos, animales muertos y restos de plantas. En cautiverio, puedes alimentarlos con frutas, vegetales e insectos
                            </li>
                            <li><b>Iluminacion:</b>Proporciona una fuente de luz adecuada para estimular su comportamiento natural y resaltar sus colores brillantes.
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/fiddler1.jpeg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/fiddler2.jpeg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/fiddler3.jpeg">
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
 
                <p class="questions__show"> pueden vivir hasta 2 años con el cuidado adecuado.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> Los cangrejos violinistas atraen a sus parejas mediante feromonas, señales visuales y acústicas. Las hembras llevan los huevos adheridos a su abdomen, donde los protegen hasta que eclosionan. </p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> aproximadamente dos veces al año. </p>

             </div>
        </article>


        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> El hábitat natural de los cangrejos violinistas está amenazado por la construcción de infraestructuras turísticas, la contaminación y el cambio climático. La destrucción de los manglares y la sobreexplotación de las playas también han afectado a sus poblaciones. Viven en áreas costeras, como playas y manglares. Prefieren hábitats con sustratos arenosos y aguas poco profundas.</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        Rojo o Pardo, naranja brillante. Varía según su hábitat y alimentación</div>
    <div class="item">
        <h1><b>patas</b></h1>
        Tiene ocho patas en total. Las dos primeras patas, conocidas como quelípedos, son las más grandes y fuertes. Estas pinzas se utilizan tanto para la defensa como para la captura de presas. Las patas restantes se utilizan para caminar y cavar en la arena.
</div>
    <div class="item">
        <h1><b>abdomen</b></h1>
        Blando y Curvo: tiene un abdomen sin exoesqueleto, lo que lo hace vulnerable ante los depredadores. Para protegerse, busca conchas vacías de moluscos y se introduce en ellas, sosteniéndolas con la parte superior de su cuerpo mientras camina.</div>  
    <div class="item ">
        <h1><b>Antenas</b></h1>
        Posee dos antenas largas para tocar y dos antenas cortas para olfatear y detectar sabores. </div>
        <div class="item ">
            <h1><b>Ojos</b></h1>
            ubicados en tallos en la cabeza y tienen la capacidad de descomponer la imagen en varias piezas.</div>
            <div class="item ">
                <h1><b>Branquias</b></h1>
                Tanto las branquias como su abdomen deben permanecer húmedos para que pueda respirar.</div>
 
    
         
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
