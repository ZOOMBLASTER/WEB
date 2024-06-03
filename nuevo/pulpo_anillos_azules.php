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
         <link rel="stylesheet" href="css/animalesM_5.css">
    
        <title>Pulpo de anillos azules</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
        
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">Pulpo de anillos azules</h1>
         <p class="landing__text">Hapalochlaena lunulata</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                El Pulpo de Anillos Azules es uno de los animales más fascinantes y peligrosos del mar. Conocido por su pequeño tamaño, su camuflaje y sus mortales picaduras, este invertebrado es un verdadero depredador. El pulpo de anillos azules es un animal extremadamente venenoso. Estos pequeños pulpos son comunes en los arrecifes de coral tropicales y subtropicales y en las marismas de los océanos Pacífico e Índico, desde el sur de Japón hasta Australia.  

            </p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/pulpoanillado1.jpg">
                <div class="dev_content">
                    <div class="dev_title">El pulpo de anillos azules como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Tamaño del acuario:</b> Elige un acuario de mayor tamaño, ya que los pulpos no pueden vivir en un espacio pequeño.</li>
                            <li><b> Filtración eficiente:</b>  Los pulpos dejan muchos restos de alimentos por lo que un skimmer seria muy recomendable.</li>
                            <li><b>Temperatura del agua:</b>  Entre 10 y 20º C. El acuario debe estar tapado herméticamente para evitar huidas.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/pulpoanillado2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El pulpo de anillos azules como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Control químico del agua:</b> El Ph debe estar entorno a 8 y la salinidad entorno a 30 y 38. Este pulpo es muy resistente a los demás parámetros del agua.</li>
                            <li><b>Escondites:</b>   Las rocas deberán tener cuevas para ser usadas como escondites.</li>
                            <li><b>Sustrato:</b>   Diferentes tipos de arenas y rocas para que se camuflen.</li>
                            </ul> 
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/pulpoanillado3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El pulpo de anillos azules como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> Este pulpo se alimenta de pequeños crustáceos como camarones y también de peces una vez al día y a la misma hora normalmente. No se debe sobrealimentar, la comida debe ser consumida en 5 o 10 minutos, después de este tiempo la quitaremos. Si el alimento es congelado debe descongelarse antes.</li>
                            <li><b>Iluminacion:</b> No utilice ninguna iluminación fuerte en el tanque y manténgalo alejado de la luz solar. Prefieren vivir en la oscuridad y tolerarán una luz débil durante el día y ninguna luz por la noche.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/pulpoanillado1.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/pulpoanillado2.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/pulpoanillado3.jpg">
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
 
                <p class="questions__show"> En promedio, viven alrededor de uno a cuatro años</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show">  El pulpo de anillos azules se reproduce sexualmente. Durante el apareamiento, el macho va a colocar paquetes de esperma, mediante el hectocótilo, bajo el manto de la hembra. Después, la hembra depositará alrededor de 50 huevos, los cuales cuidará en su espalda. Pasado un tiempo, los huevos eclosionarán, y los pulpos recién nacidos se esconderán bajo el manto de su madre hasta que puedan ser capaces de valerse por sí mismos. En el tiempo que la hembra cuide de sus crías, su manto tendrá colores que apartarán a los depredadores de atacar a su descendencia.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Mimetismo
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> EL color de su cuerpo puede variar dependiendo de la actividad que esté realizando. Por ejemplo, si el pulpo de anillos azules se encuentra cazando a su presa, entonces se mimetizará con el entorno para despistarlo y poder atacarlo. Por el contrario, si se encuentra en situación de amenaza, cambiará su color azul a uno más intenso rápidamente, aprovechando el amenazante color de sus anillos para recordarles la toxicidad de su veneno.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Se encuentra únicamente en las aguas cálidas de la costa del Pacífico, principalmente en las regiones que van desde Japón hasta Australia.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">¡Cuidado!
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Su veneno es altamente tóxico y puede ser peligroso para los seres humanos.</p>

             </div>
        </article>

    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        Son conocidos por su coloración única: amarillo pálido o cuerpo beige cubierto de anillos azules vibrantes. Los anillos azules son una señal de advertencia para los depredadores potenciales, indicando que el pulpo es venenoso y debe evitarse.</div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
         Tiene alrededor de 60 anillos azules repartidos por todo su cuerpo y tentáculos. Presenta 3 tipos de células con pigmentos: cromatóforos, que le sirven para mimetizarse con su entorno; iridóforos y leucóforos, que reflejan y refractan la luz. Su piel puede variar en diseños y texturas. Se menciona que probablemente actué como órgano de comunicación entre ellos, y para apartar a sus depredadores.</div>
    <div class="item">
        <h1><b>Tentáculos</b></h1>
         Posee entre 8 y 10 tentáculos.</div>
  
    <div class="item ">
        <h1><b>Cabeza</b></h1> 
        Su cabeza es ligeramente aplanada dorsoventralmente y termina en punta.</div>
 
    <div class="item ">
        <h1><b>Ojos</b></h1>
       Muy desarrollados, similares a las de los vertebrados.</div>
    
    <div class="item ">
         <h1><b>Pico</b></h1>
        Una vez que su presa está muerta, el pulpo usa su poderosa boca en forma de pico para comerla.</div>

    <div class="item ">
        <h1><b>Tamaño</b></h1>
        Entre 5 y 10 cm de largo, su peso medio es de aproximadamente 80 gramos.</div>
              
         
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
