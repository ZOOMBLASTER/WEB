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
         <link rel="stylesheet" href="css/animales_13.css">
    
        <title>Pez disco</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
  
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">PEZ DISCO</h1>
         <p class="landing__text">  Symphysodon spp </p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                

                Symphysodon spp., conocidos comúnmente como discos, son peces de agua dulce reconocidos por su belleza y comportamiento fascinante. Originarios de las cuencas fluviales de América del Sur, estos peces exhiben una gama deslumbrante de colores y patrones en sus cuerpos redondeados y comprimidos lateralmente. Su distintiva forma discoidal les otorga una apariencia elegante y aerodinámica en el agua. Los discos son altamente apreciados en el acuarismo debido a su tranquilidad y sociabilidad, así como a su capacidad para formar fuertes lazos con sus cuidadores. Además de su atractivo estético, estos peces son conocidos por su comportamiento territorial y su cuidado parental meticuloso, lo que los convierte en especímenes fascinantes para observar y criar en entornos de acuario adecuadamente cuidados. </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/disco2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Pez disco como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Volumen del acuario:</b>    Se recomienda un acuario grande para los peces disco, preferiblemente de al menos 75 galones (aproximadamente 284 litros) para proporcionar suficiente espacio para nadar y evitar el estrés por hacinamiento.</li>
                            <li><b> pH:</b>   :  El pH del agua debe estar ligeramente ácido, entre 6.0 y 7.0, ya que los peces disco son nativos de aguas blandas y ácidas en su hábitat natural.</li>
                            <li><b>Temperatura del agua:</b>  Los peces disco son sensibles a los cambios de temperatura, por lo que mantener el agua entre 26-30°C (79-86°F) es ideal para su salud.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/disco3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Pez disco como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Dureza del agua:</b> Prefieren aguas suaves, con una dureza entre 1-10 dH (dureza de carbonatos) y 1-4 dGH (dureza general). Esto puede lograrse utilizando agua destilada o tratando el agua del grifo adecuadamente.</li>
                            <li><b>Filtracion:</b> La calidad del agua es crucial. Debes mantener los niveles de amoníaco, nitritos y nitratos en niveles bajos utilizando un buen sistema de filtración y realizando cambios parciales de agua regularmente.</li>
                            <li><b>Escondites :</b>    Agrega plantas vivas y troncos o raíces para proporcionar áreas de escondite y crear un entorno natural. Evita objetos afilados que puedan dañar sus delicadas aletas.
                            </li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/disco4.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Pez disco como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> Ofrece una dieta variada que incluya alimentos de calidad específicamente formulados para peces disco, como escamas, pellets o incluso alimentos congelados como artemia o larvas de mosquito.
                            </li>
                            <li><b>Iluminacion:</b>Proporciona una iluminación suave y difusa en el acuario, ya que los peces disco prefieren áreas sombreadas y se estresan con demasiada luz directa.</li>
                            <li><b>Compañeros de acuario:</b> Elige compañeros de acuario pacíficos y que compartan preferencias de agua similares, como algunos tetras, corydoras y otocinclus. Evita peces agresivos o que puedan competir por el espacio o la comida.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/disco2.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/disco3.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/disco4.jpg">
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
 
                <p class="questions__show"> En la naturaleza, la longevidad del pez disco suele ser de unos 10 a 15 años. Sin embargo, en condiciones de cuidado adecuado en cautiverio, pueden vivir hasta 15 años o incluso más.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> Los peces disco son conocidos por su comportamiento reproductivo. La reproducción puede ocurrir cuando los peces alcanzan la madurez sexual, generalmente entre los 8 y 12 meses de edad. Durante el cortejo, los discos muestran comportamientos como la limpieza de superficies, movimientos de natación sincronizados y cambios en el color del cuerpo.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">  La frecuencia de reproducción puede variar dependiendo de las condiciones del acuario y la salud de los peces, pero pueden reproducirse varias veces al año, especialmente si se proporcionan condiciones adecuadas.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Huevos y crias
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show">   Después del desove, los huevos son fertilizados por el macho y la hembra. Los huevos son depositados en una superficie plana, como una roca o una hoja de planta, y son cuidados y protegidos por ambos padres. Después de aproximadamente 2-3 días, los huevos eclosionan y las crías emergen. Durante las primeras semanas, las crías se alimentan de un saco vitelino y luego pueden alimentarse de pequeños organismos vivos, como infusorios, yemas de huevo y alimentos comerciales para crías.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> En su hábitat natural, el pez disco enfrenta algunas amenazas, como la degradación del hábitat debido a la deforestación, la contaminación y la captura para el comercio de acuarios. Sin embargo, aún se considera una especie de preocupación menor en términos de conservación, ya que sus poblaciones en la naturaleza no están actualmente en peligro inminente de extinción. Sin embargo, es importante tomar medidas para proteger su hábitat y regular el comercio para garantizar su sostenibilidad a largo plazo.</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        Los peces disco son conocidos por su llamativa coloración y patrones únicos, que pueden variar según la especie y la ubicación geográfica. Su coloración a menudo incluye tonos brillantes de azul, verde, rojo y amarillo, lo que los hace muy populares entre los aficionados a la acuariofilia.</div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        Los peces disco tienen un cuerpo discoidal, que es redondeado y aplanado lateralmente. Esta forma les permite moverse fácilmente entre las plantas acuáticas y otros obstáculos en su entorno natural.
</div>
    <div class="item">
        <h1><b>Aletas</b></h1>
        Tienen varias aletas que les ayudan a moverse y a mantener el equilibrio. Estas incluyen las aletas dorsal, anal y caudal. Las aletas pectorales y ventrales también son importantes para la maniobrabilidad y la estabilidad.</div>  
    <div class="item ">
        <h1><b>Boca</b></h1>
        Tienen una boca pequeña y orientada hacia arriba, adaptada para alimentarse principalmente de pequeños invertebrados y material vegetal. Sus dientes son finos y están diseñados para triturar alimentos blandos.</div>
 
   
         
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
