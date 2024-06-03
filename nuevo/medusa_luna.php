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
         <link rel="stylesheet" href="css/animalesM_3.css">
    
        <title>Medusa luna</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">Medusa luna</h1>
         <p class="landing__text">Aurelia aurita</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                Es quizás la especie de medusa más conocida y conservada. Reciben su nombre por su apariencia translúcida, parecida a la de una luna, y su suave movimiento. La medusa Luna es inofensiva para los humanos. Las medusas lunares son una opción popular para los entusiastas de los acuarios debido a sus requisitos de cuidado relativamente fáciles. Aunque poseer una medusa en un acuario garantiza un espectáculo muy bello, el mantenimiento de esta especie tiene un alto costo, por todos los detalles a los que se debe atender a la hora de confeccionar los acuarios para ella.  

            </p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/medusaluna2.jpg">
                <div class="dev_content">
                    <div class="dev_title">La medusa luna como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Tamaño del acuario:</b> Existen tres formatos de medusario: de 10 L, de 19 L y de 30 L. Elige el tamaño del acuario según la cantidad de medusas que planeas mantener. Cuanto más grande, mejor. Una regla general es proporcionar al menos 10 galones de agua por medusa.</li>
                            <li><b> Filtración eficiente:</b>  Hay 3 tipos de filtración: mecánica, química y biológica. Intente realizar un cambio de agua del 10 al 20 % cada dos a cuatro semanas. Las medusas luna son capaces de filtrar el agua que las rodea para obtener nutrientes disueltos.</li>
                            <li><b>Temperatura del agua:</b>  Entre 15 y 26 º C.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/medusaluna3.jpeg">
                <div class="dev_content">
                    <div class="dev_title">La medusa luna como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Control químico del agua:</b> Un nivel de salinidad de 30 a 35 partes por mil. El nivel de pH adecuado es de 8.0 a 8.3. C. En cuanto a la salinidad, puede sobrevivir en diferentes niveles, desde muy bajos (con menos del 1 %) hasta casi el 40 %. Aunque el ambiente ideal para esta especie debe tener una salinidad de 23 partes por mil o más.</li>
                            <li><b>Sustrato :</b>   Evita utilizar sustratos convencionales como rocas, corales o grava. Las medusas son criaturas delicadas, y estos sustratos pueden rasgar sus tejidos. Se recomienda un sustrato aireado y ligero, como la arcilla. Esto proporcionará un entorno seguro.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/medusaluna4.jpeg">
                <div class="dev_content">
                    <div class="dev_title">La medusa invertida como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> Se alimentan principalmente de plancton pequeño, como la salmuera o langostinos. Además, su dieta se puede complementar con alimento específico para medusas disponible comercialmente, que suele ser una mezcla equilibrada de plancton y otros nutrientes. La alimentación debe realizarse varias veces al día, ya que las medusas lunares tienen una tasa metabólica alta.</li>
                            <li><b>Iluminacion:</b> Proporciona una iluminación suave y difusa. Las medusas luna son sensibles a la luz y pueden detectar cambios en la intensidad lumínica. Evita la luz directa y brusca para evitar estrés.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/medusaluna2.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/medusaluna3.jpeg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/medusaluna4.jpeg">
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
 
                <p class="questions__show"> En cautiverio, su esperanza de vida es mayor que en cautiverio. Algunos informes sugieren que pueden vivir varios años bajo las condiciones y cuidados adecuados.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> En verano, las medusas luna participan en un rito diario de liberación de huevos y esperma. Este proceso las debilita y las deja hambrientas, y al final, es probable que mueran. Las medusas luna pueden hacerlo muy bien en cautiverio si se les proporciona un entorno adecuado. En este entorno, consumen salmuera de camarón como alimento.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproducción
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Cada verano.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> En su hábitat natural, las medusas luna suelen vivir hasta aproximadamente seis meses. Se la puede encontrar en la superficie de aguas alrededor de todo el mundo excepto en zonas de temperaturas muy bajas, en algunas zonas como indonesio o China son utilizadas de alimento para el ser humano. Las podremos encontrar en soledad o en grupos pequeños.</p>

             </div>
        </article>

    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        Su color es transparente, aunque puede presentar patrones o rayas de tenues coloraciones. Además, posee algunas estructuras de su cuerpo de colores variados.</div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        Se distinguen por tener la forma de una seta u hongo. Su constitución es muy simple, pues carecen de esqueleto y de órganos como el corazón o el cerebro. Tampoco posee tráquea, pulmones o branquias, por lo que respira mediante la difusión del oxígeno del agua gracias a una delgada membrana que recubre su cuerpo.</div>
    <div class="item">
        <h1><b>Tentáculos</b></h1>
         Alrededor de su sombrilla, cuelgan numerosos y delgados tentáculos, gracias a los cuales es capaz de orientarse, percibir olores, detectar cambios de iluminación y atrapar su alimento.</div>
  
    <div class="item ">
        <h1><b>Campana, cúpula o "umbrela"</b></h1> 
        Tiene apariencia gelatinosa y una delicada belleza..</div>
 
    <div class="item ">
        <h1><b>Gónadas</b></h1>
       Se presentan en forma de herraduras dispuestas simétricamente en torno al centro de la sombrilla. En el caso de los machos estas pueden ser blancas o amarillas, mientras las hembras poseen gónadas rosas o violetas.</div>
    
            <div class="item ">
                <h1><b>Tamaño</b></h1>
               El diámetro de su sombrilla puede oscilar entre los 25 y los 40 cm y, aunque las medusas de mayor tamaño pueden llegar a medir 2 metros de longitud, por lo general no exceden los 5 centímetros de largo.</div>

              
         
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
