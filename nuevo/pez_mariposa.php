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
         <link rel="stylesheet" href="css/animalesM_14.css">
    
        <title>Pez mariposa</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
        
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">PEZ MARIPOSA</h1>
         <p class="landing__text"> Chaetodon </p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                
                El pez mariposa, con su asombroso despliegue de colores y patrones, se encuentra entre los más extendidos por los arrecifes del mundo entero. Aunque algunas especies presentan colores apagados, la mayoría luce intrincados patrones con llamativos fondos azules, rojos, naranjas o amarillos. Muchos tienen bandas oscuras alrededor de los ojos y puntos redondos en forma de ojo en los flancos para confundir a los depredadores, que no saben a qué extremo atacar ni en qué dirección huirá. Existen alrededor de 114 especies de pez mariposa
 </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/mariposa1.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Pez mariposa como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Volumen del acuario:</b>  Requiere un acuario de al menos 200 a 400 litros.</li>
                            <li><b> pH:</b>   La salinidad óptima para el pez león está entre 1.020 y 1.025 de gravedad específica.  El pH adecuado es entre 8.1 y 8.4</li>
                            <li><b>Temperatura del agua:</b>  Mantener la temperatura del agua dentro del rango de 24-28 °C (75-82 °F) es crucial para su salud y bienestar. Un calentador de acuario puede ser necesario para mantener una temperatura estable, especialmente en climas más fríos.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/mariposa2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Pez mariposa como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Sustrato:</b> El sustrato en el acuario del pez mariposa debe ser arenoso o de grano fino. Esto imita el fondo marino natural y proporciona un lugar para que el pez busque alimento y se sienta seguro</li>
                            <li><b>Filtracion:</b>  Es crucial contar con un filtro potente en el acuario. Esto ayudará a mantener la calidad del agua y eliminar sustancias tóxicas. Además, realiza cambios de agua periódicos para evitar la acumulación de residuos y mantener un ambiente saludable.</li>
                            <li><b>Escondites :</b>   Incluye rocas, cuevas y corales vivos para que puedan encontrar refugio y esconderse cuando sea necesario
                            </li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/mariposa3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Pez mariposa como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> Los peces mariposa africanos son omnívoros y aceptan una variedad de alimentos. Proporciónales una dieta equilibrada que incluya alimentos vivos, congelados y secos, Copépodos, artemias, dafnias, gusanos de sangre y escamas de pescado son opciones adecuadas.
                            </li>
                            <li><b>Iluminacion:</b>Opta por luces LED específicas para acuarios. Estas ofrecen una amplia gama de colores y son eficientes en términos de energía. Asegúrate de que la intensidad de la luz sea adecuada para el tipo de acuario y las plantas o corales que tengas. Establece un horario regular para la iluminación, imitando el ciclo natural del día y la noche. Elige una luz que proporcione un espectro completo para favorecer el crecimiento de las plantas y realzar los colores de los peces</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/mariposa1.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/mariposa2.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/mariposa3.jpg">
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
 
                <p class="questions__show"> En la naturaleza, el pez mariposa vive aproximadamente 7 años, pero en acuarios puede llegar a vivir hasta 10 años.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> El pez mariposa mantiene a su pareja durante toda su vida. Liberan los huevos en el agua, que flotan hasta formar parte del plancton. Muchos de estos huevos son consumidos por otros animales que viven o se alimentan de plancton. Cuando los huevos eclosionan, los peces alevines desarrollan placas blindadas para protegerse, ya que son muy vulnerables.</p>

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
                <p class="questions__show"> El pez mariposa habita en aguas tropicales alrededor de los arrecifes de coral. Puede encontrarse en los océanos Atlántico, Índico y Pacífico. Existen más de 100 especies de peces mariposa en todo el mundo, cada una con sus propias características y colores brillantes</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        Son conocidos por sus brillantes colores y estriados patrones de manchas en negro, blanco, azul, rojo, naranja y amarillo. Algunas especies presentan manchas en los costados y bandas oscuras alrededor de los ojos, similares a los patrones de las alas de las mariposas</div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        ovalados y comprimidos lateralmente. Su forma se asemeja a un disco.
</div>
    <div class="item">
        <h1><b>Aletas</b></h1>
        Poseen aletas dorsal y anal amplias que ondean como alas cuando nadan.</div>  
    <div class="item ">
        <h1><b>Tamaño</b></h1>
        El tamaño del pez mariposa varía según la especie. Algunos pueden medir apenas 2 centímetros, mientras que otros llegan hasta los 30 centímetros de longitud</div>
        <div class="item ">
            <h1><b>Ojos</b></h1>
            Los peces mariposa tienen ojos grandes y llamativos. En muchos casos, presentan círculos y manchas negras alrededor de los ojos, lo que les da una apariencia única y atractiva.</div>
            <div class="item ">
                <h1><b>Boca</b></h1>
                La boca del pez mariposa es pequeña y puntiaguda</div>
 
    
         
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
