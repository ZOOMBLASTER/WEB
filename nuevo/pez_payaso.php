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
         <link rel="stylesheet" href="css/animalesM_15.css">
    
        <title>Pez payaso</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">PEZ PAYASO</h1>
         <p class="landing__text"> Amphiprion ocellaris </p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                
                Una de las especies de peces más conocidas, sin lugar a dudas, es el pez payaso, gracias a su aparición en películas como "Buscando a Nemo" o "Buscando a Dory". Gracias al protagonista de la película, el conocido Nemo, muchos empezaron a sentir curiosidad por saber más de esta especie, la cual resulta muy vistosa y popular entre los niños.
 </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/payaso2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Pez paysao como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Volumen del acuario:</b>  Lo ideal es tener un acuario de al menos 30 litros de capacidad</li>
                            <li><b> pH:</b>  La salinidad debe estar en un rango de 1.020 a 1.025 en la escala de densidad. Debe mantenerse entre 8.1 y 8.4 para replicar las condiciones naturales del pez payaso.</li>
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
                            <li><b>Sustrato:</b> Utiliza arena de aragonita como sustrato. La arena de aragonita ayuda a mantener los niveles de pH y la dureza del agua. Proporciona un lugar para que los peces payaso busquen alimento y se escondan. Evita sustratos afilados o gravas.</li>
                            <li><b>Filtracion:</b> Utiliza un sistema de filtración de buena calidad. La corriente generada por el filtro debe ser suave o amortiguada por decoraciones o plantas para evitar que agite demasiado la columna de agua. Realiza un cambio parcial de agua del 30% cada semana</li>
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
                            <li><b>Alimentación:</b> son omnívoros y comen tanto comida seca como húmeda. Ofrece una dieta equilibrada que incluya alimentos comerciales específicos para peces marinos, como escamas o gránulos. También puedes complementar con alimentos frescos como camarones, mejillones y trozos de pescado. Aliméntalos una o dos veces al día en pequeñas cantidades para evitar el exceso de comida y mantener la calidad del agua.
                            </li>
                            <li><b>Iluminacion:</b>requieren niveles de iluminación moderados a altos, imitando su hábitat natural en arrecifes poco profundos.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/payaso2.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/payaso3.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/payaso4.jpg">
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
 
                <p class="questions__show"> Liberan los huevos en el agua, que flotan hasta formar parte del plancton. Muchos de estos huevos son consumidos por otros animales que viven o se alimentan de plancton. Cuando los huevos eclosionan, los peces alevines desarrollan placas blindadas para protegerse, ya que son muy vulnerables.</p>

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
                <p class="questions__show"> El pez payaso habita en aguas tropicales alrededor de los arrecifes de coral. Puede encontrarse en los océanos Atlántico, Índico y Pacífico. Existen más de 100 especies de peces mariposa en todo el mundo, cada una con sus propias características y colores brillantes</p>

             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        colores brillantes y llamativos. El naranja con rayas blancas es el más común, pero también existen especies de color rojo, rosa o amarillo.</div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        ovalados y comprimidos lateralmente. 
</div>
    <div class="item">
        <h1><b>Aletas</b></h1>
        tienen una aleta caudal redonda que mide entre 80 y 160 milímetros..</div>  
    <div class="item ">
        <h1><b>Tamaño</b></h1>
        oscila entre 10 y 18 cm. Las hembras son más grandes que los machos, y en esta especie, las dominantes son las hembras.</div>
        <div class="item ">
            <h1><b>Mucosa</b></h1>
            en su piel les protege de las sustancias urticantes segregadas por las anémonas, permitiéndoles vivir entre ellas sin efectos adversos.</div>
            <div class="item ">

 
    
         
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
