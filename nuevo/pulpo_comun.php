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
         <link rel="stylesheet" href="css/animalesM_4.css">
    
        <title>Pulpo común</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
  
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">Pulpo común</h1>
         <p class="landing__text">Octopus vulgaris</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                es un animal muy inteligente que se cree que tiene el mismo nivel de inteligencia y razonamiento que un gato. Se sabe que abren frascos cerrados con comida dentro y descubren cómo escapar de los tanques. Algunos cuidadores relatan que pueden distinguir entre diferentes personas. De hecho, son tan inteligentes que los cuidadores aficionados informan que no es inusual que un pulpo salga de su tanque, se deslice hacia uno cercano y se coma los peces y crustáceos, y luego regrese a su propio tanque «hogar». Una de las razones por las que el pulpo se ha vuelto popular entre los aficionados a los acuarios es que es una criatura con la que realmente puedes interactuar. Pueden ser entrenados y pueden aprender a ser alimentados a mano.  

            </p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/as4.jpg">
                <div class="dev_content">
                    <div class="dev_title">El pulpo común como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Tamaño del acuario:</b> Elige un acuario de mayor tamaño, ya que los pulpos no pueden vivir en un espacio pequeño. puede vivir en un tanque de un tamaño mínimo de 50 galones.</li>
                            <li><b> Filtración eficiente:</b>  Cambio de agua: Cambia el 25% del agua del tanque cada 2 semanas. Necesitan una fuerte filtración, ya que son comedores desordenados y arrojan su piel al agua con frecuencia, lo que hace que se ensucie más rápido. Un skimmer de proteínas de alta calidad ayudará a mantener el agua limpia y bien oxigenada.</li>
                            <li><b>Temperatura del agua:</b>  Entre 22 y 26 º C.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/pulpo_comun2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El pulpo común como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Control químico del agua:</b> Monitorea la salinidad y asegúrate de que el pH esté alrededor de 8.2, y el amoníaco a cero. La salinidad, debe estar entre 1,022 y 1,023. Asegúrate de que su tanque no tenga cobre en ninguna parte. Es tóxico y puede matar a tu pulpo.</li>
                            <li><b>Escondites:</b>   Proporciona refugios rocosos y corrientes suaves para que se sientan seguros.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/pulpo_comun3.jpg">
                <div class="dev_content">
                    <div class="dev_title">La medusa invertida como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> Los pulpos son carnívoros y se alimentan principalmente de moluscos, crustáceos y distintas clases de pescado. También pueden comer caracoles. Su pico fuerte y poderoso les permite desmembrar las presas y tragar los trozos de comida enteros. Algunos pulpos como mascota también pueden aceptar alimentos congelados o descongelados. Su pulpo debe ser alimentado una vez al día.</li>
                            <li><b>Iluminacion:</b> No utilice ninguna iluminación fuerte en el tanque y manténgalo alejado de la luz solar. Prefieren vivir en la oscuridad y tolerarán una luz débil durante el día y ninguna luz por la noche.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/as4.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/pulpo_comun2.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/pulpo_comun3.jpg">
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
 
                <p class="questions__show"> Un pulpo mascota vive entre ocho y 10 meses, aunque algunos pueden vivir hasta dos años.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> Así como se da en muchas especies de animales, los pulpos se reproducen mediante unas estructuras conocidas como espermatóforos. Este no es más que una especie de saco o bolsa en la cual se encuentran contenidos todos los espermatozoides producidos por el macho. En los pulpos, los machos, haciendo uso del hectocótilo introducen el espermatóforo en la cavidad paleal de la hembra para que pueda ocurrir la fecundación de los huevos. La fecundación es interna, son ovíparos y tienen desarrollo directo o indirecto. Para iniciar el proceso de cópula, el pulpo macho puede montar a la hembra o bien solo situarse junto a ella.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Compañeros de tanque
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Dado que el pulpo es carnívoro y agresivo, no puede vivir en un tanque con otras criaturas acuáticas. Cazarán y comerán activamente cualquier pez o crustáceo que agregues a un tanque. También son criaturas tímidas, por lo que tener compañeros de tanque los pondría ansiosos y estresados. Un pulpo que está estresado puede emitir tinta para defenderse y esto puede ser tóxico para el pulpo en un espacio tan pequeño. Las únicas criaturas que puedes poner de manera segura en el tanque son una estrella de mar o un erizo de mar sin púas. Incluso colocar dos pulpos juntos no funcionará, ya que uno eventualmente matará y canibalizará al otro.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Se pueden encontrar en una amplia gama de ambientes marinos, de aguas costeras poco profundas a las profundidades del océano. Se sabe que habitan arrecifes rocosos, los arrecifes de coral, lechos de pastos marinos y incluso fondos arenosos o fangosos. Estas criaturas adaptables tienen la capacidad de camuflarse, lo que les permite mezclarse perfectamente con su entorno.</p>

             </div>
        </article>

    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        Presenta una amplia gama de colores, lo que le permite adaptarse a diferentes ambientes y camuflarse efectivamente. Mientras la coloración exacta puede variar según factores como el estado de ánimo y el entorno, los pulpos comunes a menudo exhiben tonos de marrón, rojo, naranja y rosa.</div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
         Alargado y de forma cilíndrica. esta cubierto de un manto suave y flexible, que proporciona protección. Tienen un saco donde se produce la tinta que liberan para escapar del peligro. En realidad, quien se encarga de producir la tinta es una glándula. La cantidad de tinta depende de la especie de pulpo y el tamaño.</div>
    <div class="item">
        <h1><b>Tentáculos</b></h1>
         Los ocho tentáculos del pulpo común están revestidos con filas de ventosas, que utiliza para varias tareas, incluida la caza, la exploración y la manipulación.</div>
  
    <div class="item ">
        <h1><b>Cabeza</b></h1> 
        La cabeza de un pulpo es muy grande, bulbosa, y tiene una forma distinta que se reconoce al instante.</div>
 
    <div class="item ">
        <h1><b>Ojos</b></h1>
       Muy desarrollados, similares a las de los vertebrados. El pulpo común tiene ojos grandes y redondos excelente visión, lo que le permite detectar presas y navegar por su entorno.</div>
    
    <div class="item ">
         <h1><b>Pico</b></h1>
        Situado en el centro de sus tentáculos, lo usa para romper conchas abiertas y consume su presa.</div>

    <div class="item ">
        <h1><b>Tamaño</b></h1>
        Puede variar, pero en promedio, miden alrededor 12 a 36 pulgadas (30 a 90 centímetros) de longitud, con un peso de aproximadamente 6 a 22 libras (3 a 10 kilogramos). Las hembras son mas grandes que los machos.</div>
              
         
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
