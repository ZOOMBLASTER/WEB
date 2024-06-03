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
         <link rel="stylesheet" href="css/animalesM_6.css">
    
        <title>Pez ángel emperador</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">Pez ángel emperador </h1>
         <p class="landing__text">Pomacanthus imperator</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                Especie de actinopterigio perciforme pomacántido que habita en los arrecifes coralinos del Indopacífico. Destaca por sus atractivos colores y su notable transformación del estado juvenil al adulto. Este majestuoso pez se alimenta de esponjas y algas que se encuentran en sus entornos de arrecifes de coral, y su dieta omnívora es esencial para su supervivencia en la naturaleza. ¡Una verdadera maravilla submarina!. 
            </p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/emperador1.jpg">
                <div class="dev_content">
                    <div class="dev_title">El pez ángel emperador como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Tamaño del acuario:</b> 470 litros para un ejemplar o 680 para una pareja.</li>
                            <li><b> Filtración eficiente:</b>  Un buen sistema de filtración es esencial para mantener la calidad del agua. Cambios de agua quincenales del 15%.</li>
                            <li><b>Temperatura del agua:</b>  22 a 28 °C.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/emperador2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El pez ángel emperador como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Control químico del agua:</b> Gravedad específica del agua de 1.023 a 1.025 SG. pH de 8.1 a 8.4.</li>
                            <li><b>Escondites:</b>    Ambiente enriquecido con rocas y corales vivos donde pueda refugiarse y explorar.</li>
                            <li><b>Sustrato:</b>   Arena fina y grava.</li>
                            </ul> 
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/emperador3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El pez ángel emperador como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> Es fundamental que le proporciones a los Ángel todo tipo de alimentos preparados, congelados y vivos. Puedes mezclar alimentos vegetales, carnosos como calamares picados, vieiras y camarones, también alimentos preparados con esponja marina y tunicados. Para mejorar el color de tus peces, puedes preparar una mezcla de mejillón, calamar y espinacas. Aliméntalo de 2 a 3 veces al día en cantidades pequeñas.</li>
                            <li><b>Iluminacion:</b> Cualquiera, pero necesitan una iluminación decente similar a los arrecifes o pueden desarrollar HLLE (erosión de la cabeza y línea lateral).</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/emperador1.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/emperador2.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/emperador3.jpg">
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
 
                <p class="questions__show"> En su entorno natural, estos peces pueden vivir más de 30 años.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show">  En su hábitat natural, estos peces forman parejas monógamas y realizan una danza de apareamiento antes de liberar los huevos en el agua. Una vez que los huevos eclosionan, los padres se encargan de proteger y cuidar a las crías hasta que puedan valerse por sí mismas. se reproducen en parejas monógamas y su ciclo reproductivo está relacionado con los ciclos lunares.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproducción
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Dado que la reproducción en cautiverio es poco común, no hay una frecuencia específica para la reproducción en acuarios domésticos.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Se encuentra en áreas donde abundan las algas, como arrecifes o lagunas. Cuando no está alimentándose, generalmente reside en grietas de roca, cuevas o debajo de pequeñas repisas para protegerse de los depredadores más grandes.</p>

             </div>
        </article>

    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        Los ejemplares adultos tienen líneas horizontales amarillas y azules que recorren su cuerpo. Estas líneas comienzan detrás de las branquias y terminan justo antes de la aleta de la cola, que es de color amarillo. La aleta anal es oscura y su terminación es blanca.</div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
         El pez ángel emperador adulto tiene un cuerpo grueso, comprimido lateralmente y ligeramente alargado.</div>
    <div class="item">
        <h1><b>Forma</b></h1>
         Ovalada.</div>
  
    <div class="item ">
        <h1><b>Aletas</b></h1> 
        Son grandes y llamativas. Destacan especialmente la aleta dorsal y la aleta anal, que presentan una forma puntiaguda y prolongada.</div>
 
    <div class="item ">
        <h1><b>Boca</b></h1>
       El pez ángel emperador tiene una pequeña boca con dientes diminutos. Esta característica le permite alimentarse selectivamente de las delicias más sabrosas que encuentra en su entorno submarino.</div>
    
    <div class="item ">
         <h1><b>Ojos</b></h1>
        Son prominentes, lo que le ayuda a detectar presas y explorar su hábitat. Estos ojos son esenciales para su supervivencia y le permiten navegar entre los arrecifes coralinos en busca de alimento y refugio.</div>

    <div class="item ">
        <h1><b>Tamaño</b></h1>
        Tamaño máximo de aproximadamente 40 cm.</div>
              
         
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
		<h3>Salamandra jaspeada</h3>Línea lateral
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
