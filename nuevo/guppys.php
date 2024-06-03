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
         <link rel="stylesheet" href="css/animales_9.css">
    
        <title>Guppy</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">Guppy</h1>
         <p class="landing__text">Poecilia reticulata</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                
El Poecilia reticulata, comúnmente conocido como el guppy, es una especie fascinante de pez de agua dulce que cautiva a los aficionados de la acuariofilia por su belleza y comportamiento vibrante. Originario de América del Sur, este pequeño pez presenta una coloración deslumbrante y variada, con tonos que van desde el rojo intenso hasta el azul brillante, adornados con patrones llamativos y atractivos. Su cuerpo alargado y esbelto está marcado por una cola bifurcada, característica que agrega gracia a su movimiento ágil y juguetón dentro del acuario. Además de su apariencia cautivadora, el guppy es conocido por su resistencia y adaptabilidad, lo que lo convierte en una opción popular para aquellos que desean iniciarse en el mundo de la acuariofilia. Su naturaleza vivaz y social lo hace destacar en entornos comunitarios, donde interactúa de manera animada con otros peces. El guppy es un ejemplo encantador de la diversidad y la maravilla del reino acuático, deleitando a los observadores con su encanto colorido y su vitalidad inagotable.
            </p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/guppy1.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Guppy como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Volumen del acuario:</b> Se recomienda un acuario de al menos 20 litros (aproximadamente 5 galones) para mantener un pequeño grupo de guppys. Sin embargo, cuanto más grande sea el acuario, mejor, ya que proporciona más espacio y estabilidad para los peces.</li>
                            <li><b> pH:</b>   El pH del agua debe estar entre 7.0 y 8.0 para los guppys. Son bastante adaptables, pero prefieren un pH ligeramente alcalino.</li>
                            <li><b>Temperatura del agua:</b>  Los guppys prefieren aguas cálidas, con una temperatura ideal que oscila entre los 24°C y los 28°C (75°F - 82°F). Es importante mantener la temperatura dentro de este rango para su salud y bienestar.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/guppy2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Guppy como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Dureza del agua:</b> A los guppys les va bien en aguas con una dureza moderada a dura, con valores de dureza total (GH) entre 8 y 12 dH y dureza de carbonatos (KH) entre 5 y 15 dH.</li>
                            <li><b>Filtracion:</b> Un sistema de filtración adecuado es esencial para mantener la calidad del agua. Se recomienda un filtro que pueda manejar el volumen de agua del acuario y proporcionar una buena circulación y filtración mecánica, biológica y química.</li>
                            <li><b>Escondites :</b>  Proporciona plantas vivas o artificiales, así como refugios y lugares para explorar. A los guppys les gusta explorar su entorno y también aprecian lugares donde puedan esconderse cuando se sientan estresados.
                            </li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/guppy3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Guppy como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> Ofrece una dieta variada que incluya alimentos en escamas, alimentos vivos y congelados. Los guppys son omnívoros y disfrutan de una variedad de alimentos, incluidos los alimentos vegetales y proteicos.
                            </li>
                            <li><b>Iluminacion:</b> Proporciona una iluminación moderada en el acuario. No necesitan una intensidad luminosa extrema, pero asegúrate de que haya suficiente luz para mantener las plantas (si las tienes) y para su bienestar general.</li>
                            <li><b>Mantenimiento y limpieza:</b> Realiza cambios parciales de agua regularmente para mantener la calidad del agua. Elimina los desechos y los restos de comida del fondo del acuario y asegúrate de que el filtro esté limpio y funcionando correctamente.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/guppy1.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/guppy2.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/guppy3.jpg">
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
 
                <p class="questions__show"> La esperanza de vida del guppy puede variar según diversos factores, como el cuidado proporcionado, la genética individual y las condiciones del entorno. En condiciones ideales de acuario, donde se mantienen parámetros de agua estables y se proporciona una alimentación adecuada, es más probable que los guppies alcancen su máxima longevidad. Sin embargo, factores como el estrés, enfermedades, la calidad del agua y la competencia con otros peces pueden influir en su vida útil.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> La capacidad de reproducción de los guppies es asombrosa, y es una de las razones por las que son tan populares en acuarios comunitarios. Las hembras pueden retener el esperma de un solo apareamiento y utilizarlo para fertilizar múltiples camadas, lo que les permite dar a luz con frecuencia sin necesidad de un macho presente. Esta adaptación reproductiva ha contribuido a su éxito como especie, ya que les permite aumentar rápidamente su población en entornos favorables.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">  La frecuencia con la que las hembras guppy dan a luz puede depender de varios factores ambientales y biológicos. Por ejemplo, las hembras pueden aumentar la frecuencia de sus camadas en respuesta a la disponibilidad de alimentos y a la temperatura del agua. En condiciones óptimas, una hembra guppy puede dar a luz aproximadamente cada mes y medio, lo que significa que pueden producir numerosas generaciones en un corto período de tiempo.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Huevos y crias
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">  A diferencia de algunos otros peces que ponen huevos, los guppies dan a luz crías vivas. Esto significa que las crías nacen completamente formadas y capaces de valerse por sí mismas desde el momento del nacimiento. Esta adaptación proporciona a las crías una mejor oportunidad de supervivencia, ya que no tienen que preocuparse por los depredadores que podrían atacar los huevos. Además, la capacidad de las hembras para retener el esperma y fertilizar múltiples camadas les permite maximizar la cantidad de crías producidas.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> En su hábitat natural, los guppies desempeñan un papel importante en los ecosistemas acuáticos, ya que son una fuente de alimento para muchos depredadores y ayudan a controlar las poblaciones de insectos y otros organismos acuáticos. Sin embargo, debido a su resistencia y capacidad de reproducción rápida, los guppies pueden convertirse en una especie invasora en algunas regiones donde son introducidos por el ser humano. Esto puede tener efectos negativos en las poblaciones de peces nativos y en la biodiversidad general del ecosistema.</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        Los guppys son conocidos por sus colores vibrantes y patrones únicos. La coloración puede variar mucho dependiendo de la variedad genética y la selección artificial.    </div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        Los guppys tienen un cuerpo alargado y delgado, con una forma que a menudo se describe como similar a la de un torpedo.
</div>
    <div class="item">
        <h1><b>Aletas</b></h1>
        Tienen varias aletas que les ayudan en la natación y en la comunicación visual. Esto incluye una aleta dorsal (ubicada en la parte superior del cuerpo), aletas pectorales y pélvicas (en los lados), una aleta anal (en la parte inferior) y una aleta caudal (en la parte trasera), que es a menudo muy vistosa y puede tener diferentes formas, dependiendo de la variante de guppy.    </div>
  
    <div class="item ">
        <h1><b>Sistema reproductivo</b></h1>
        Los machos tienen un gonopodio, un órgano reproductor modificado que utilizan para la transferencia de esperma durante la reproducción. Las hembras tienen una aleta anal más grande y redondeada que los machos, que es donde se produce la fecundación interna.    </div>
 
    <div class="item ">
        <h1><b>Sentidos</b></h1>
        Los guppys tienen sentidos desarrollados, como la visión aguda y la capacidad de percibir vibraciones en el agua a través de una línea lateral sensible.    </div>


         
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
