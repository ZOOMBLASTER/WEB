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
         <link rel="stylesheet" href="css/animalesM_12.css">
    
        <title>Pez leon</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">PEZ LEON</h1>
         <p class="landing__text"> Pterois </p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                
                Aunque no es tan catastrófico para los seres humanos, su veneno puede causar náuseas, dolores y problemas respiratorios. Esta especie ha invadido el océano Atlántico y muchos mares de donde no es originario, desplazando a especies nativas.
Los océanos tropicales albergan una riqueza inigualable permitida por las cálidas aguas. Además de tener un patrón de colores peculiar, sus aletas parecen una melena de león. Este aspecto le sirve para avisar de su peligrosidad y, de hecho, clasifica como uno de los peces más venenosos que existen. 
 </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/leon2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Pez leon como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Volumen del acuario:</b>  El pez león requiere un acuario de al menos 200 a 400 litros.</li>
                            <li><b> pH:</b>   La salinidad óptima para el pez león está entre 1.020 y 1.025 de gravedad específica.  El pH adecuado es entre 8.1 y 8.4</li>
                            <li><b>Temperatura del agua:</b>  Mantener la temperatura del agua dentro del rango de 24-28 °C (75-82 °F) es crucial para su salud y bienestar. Un calentador de acuario puede ser necesario para mantener una temperatura estable, especialmente en climas más fríos.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/leon3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Pez leon como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Sustrato:</b> Utiliza un fondo de arena coralina..</li>
                            <li><b>Filtracion:</b>  Dado que los peces león generan muchos desechos, es crucial contar con un filtro potente en el acuario. Esto ayudará a mantener la calidad del agua y eliminar sustancias tóxicas. Además, realiza cambios de agua periódicos para evitar la acumulación de residuos y mantener un ambiente saludable.</li>
                            <li><b>Escondites :</b>   El pez león es naturalmente tímido y nocturno. Por lo tanto, proporcionarle abundantes escondites es esencial para su bienestar. Rocas, cuevas y plantas acuáticas son excelentes opciones para crear lugares donde pueda esconderse y descansar. También puedes añadir anémonas de mar o corales al acuario.
                            </li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/leon4.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Pez angel como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> El pez león es principalmente carnívoro. Se alimenta de una variedad de presas, incluyendo crustáceos, como camarones y cangrejos, así como peces pequeños. 
                            </li>
                            <li><b>Iluminacion:</b>estándar o LED. Un sistema de iluminación entre 1 a 2 vatios por galón será suficiente para simular un ciclo de día y noche en el acuario</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/leon2.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/leon3.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/leon4.jpg">
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
 
                <p class="questions__show"> La esperanza de vida del pez león es de aproximadamente 15 años.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> : El pez león alcanza su madurez sexual alrededor del primer año de vida. Las hembras desovan hasta 15,000 huevos en cada ciclo reproductivo. Curiosamente, estos huevos son fertilizados por el macho de manera asexual, lo que significa que no requieren la presencia de una hembra para ser fecundados. Los huevos se incuban durante aproximadamente dos días, y luego nacen las crías</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">  La frecuencia de reproducción puede variar según varios factores, incluyendo la edad y la salud de los peces, así como las condiciones ambientales y la disponibilidad de pareja. </p>

             </div>
        </article>


        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Es una especie invasora que ha causado estragos en los ecosistemas marinos desde que se documentó su presencia por primera vez en el Mediterráneo hace más de 30 años. Aunque en su hábitat natural, que incluye el océano Índico y el Pacífico, su existencia es normal, se ha convertido en una plaga en las aguas del océano Atlántico, el Mar Caribe y el Mediterráneo</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        Generalmente, presenta un color rojizo a bronceado con rayas verticales oscuras. Estas rayas son anchas en el cuerpo y se vuelven oblicuas y estrechas hacia el área del pedúnculo caudal</div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        El pez león tiene un cuerpo comprimido lateralmente
</div>
    <div class="item">
        <h1><b>Aletas</b></h1>
        Sus aletas pectorales son muy largas y pueden crecer hasta un tamaño de 30 centímetros, una longitud mayor que la de su cuerpo. Cuando están desplegadas, recuerdan a un abanico</div>  
    <div class="item ">
        <h1><b>Ojo</b></h1>
        desde la parte superior de cada ojo, nace un largo tentáculo con bandas claras y oscuras.</div>
        <div class="item ">
            <h1><b>Dientes</b></h1>
            Posee dientes numerosos, pequeños y densamente agrupados tanto en la mandíbula superior como en la inferior. </div>
            <div class="item ">
                <h1><b>Cabeza</b></h1>
                tiene tres barras de tono marrón oscuro, incluyendo una línea inclinada a través del extremo del ojo, posee una mancha blanca brillante en la parte posterior de la base de la aleta pectoral.</div>
 
    
         
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

