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
         <link rel="stylesheet" href="css/animalesM_2.css">
    
        <title>Medusa invertida</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">Medusa invertida</h1>
         <p class="landing__text">Cassiopea xamachana</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                Estas intrigantes medusas desempeñan un papel esencial en los ecosistemas marinos, y sus adaptaciones únicas continúan cautivando a científicos y entusiastas de la naturaleza por igual. Su característica umbrela plana descansa en el fondo del mar, mientras que su subumbrella convexa y sus brazos orales miran hacia arriba. Es un escifozoo bentónico que presenta una relación simbiótica con las zooxantelas ubicadas en su mesoglea. Estas algas unicelulares proporcionan a la medusa un color verdoso o parduzco y ayudan a obtener parte de su carbono.  

            </p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/medusaacropolis2.jpg">
                <div class="dev_content">
                    <div class="dev_title">La medusa invertida como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Tamaño del acuario:</b> Existen tres formatos de medusario: de 10 L, de 19 L y de 30 L. Elige el tamaño del acuario según la cantidad de medusas que planeas mantener. Cuanto más grande, mejor. Una regla general es proporcionar al menos 10 galones de agua por medusa. Las medusas prosperan en el movimiento suave y continuo del agua. Considere agregar una bomba de circulación para crear un flujo de agua natural dentro del acuario.</li>
                            <li><b> Filtración eficiente:</b>  Los acuarios Kreisel y Pseudo-Kreisel son recomendados para medusas como la Cassiopea. Hay 3 tipos de filtración: mecánica, química y biológica. Intente realizar un cambio de agua del 10 al 20 % cada dos a cuatro semanas</li>
                            <li><b>Temperatura del agua:</b>  Las medusas son animales muy sensibles a la temperatura y sus oscilaciones, normalmente viven en un rango entre los 22º y 26º C.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/medusaacropolis3.jpeg">
                <div class="dev_content">
                    <div class="dev_title">La medusa invertida como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Control químico del agua:</b> Las medusas Cassiopea prefieren un nivel de salinidad de 30 a 35 partes por mil. La mayoría de las especies de medusas prefieren agua ligeramente alcalina con un pH entre 8,0 y 8,4. Es importante utilizar agua sin cloro. Los cambios bruscos de temperatura o salinidad pueden estresar a las medusas.</li>
                            <li><b>Sustrato :</b>   Las medusas invertidas son bentónicas, (se fijan al sustrato arenoso mediante su umbrela). Extienden sus tentáculos para que puedan recibir suficiente luz para que las algas que viven dentro de sus tentáculos realicen el proceso de fotosíntesis. Evita sustratos rugosos o afilados que puedan dañar sus delicados tejidos.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/medusaacropolis4.jpg">
                <div class="dev_content">
                    <div class="dev_title">La medusa invertida como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> Dependen de sus zooxantelas para cubrir una parte de sus necesidades energéticas a través de la fotosíntesis. Se debe proporcionar una dieta variada de artemia viva o congelada y otras presas pequeñas. Se les debe alimentar con pequeñas cantidades de alimento varias veces al día.</li>
                            <li><b>Iluminacion:</b> Las medusas prefieren un ambiente con poca luz. Las luces brillantes pueden estresarlos y provocar problemas de salud. Se recomienda utilizar luces LED con brillo ajustable.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/medusaacropolis2.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/medusaacropolis3.jpeg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/medusaacropolis4.jpg">
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
 
                <p class="questions__show"> Su esperanza de vida en la naturaleza ronda los 12 meses, aunque en cautividad puede ser mantenida por más de 2 años.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> La reproducción ocurre en diferentes etapas: Reproducción sexual (los adultos liberan células sexuales en el agua, los gametos se fecundan, produciendo una larva que se convierte en un pólipo). Reproducción asexual (los pólipos producen medusas, estas medusas crecen y liberan gametos, completando el ciclo). Puede ocurrir durante todo el año, en especial en verano.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">¡Cuidado!
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Su picadura es leve salvo en casos de hipersensibilidad o contacto con mucosas.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Dato curioso
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Una especie de cangrejo llamada Dorippe frascone a menudo transporta un ejemplar de medusa invertida sobre su caparazón. Los tentáculos urticantes de la medusa disuaden a los depredadores del cangrejo.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Se encuentra comúnmente en ecosistemas costeros tropicales y subtropicales poco profundos, como manglares y lechos de pastos marinos.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Se encuentra comúnmente en ecosistemas costeros tropicales y subtropicales poco profundos, como manglares y lechos de pastos marinos.</p>
             </div>
        </article>
    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        Por lo general, son de color marrón o beige, lo que les ayuda a mezclarse con el fondo arenoso o rocoso del acuario.</div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        Tienen un cuerpo aplanado en forma de platillo con tentáculos orientados hacia arriba.</div>
    <div class="item">
        <h1><b>Tentáculos</b></h1>
        Posee 8 largos tentáculos bucales ramificado con gran capacidad para estirarse y retraerse, útiles para obtener el alimento y protegerse, con células llenas de veneno (nematocistos).</div>
  
    <div class="item ">
        <h1><b>Campana, cúpula o "umbrela"</b></h1> 
        Tiene forma redondeada o cúbica, y es una especie de saco con bordes ondulados, compuesto por dos capas de tejido (epidermis y gastrodermis) separadas por una sustancia gelatinosa (mesoglea) que le da volumen.</div>
 
    <div class="item ">
        <h1><b>Boca</b></h1>
       Tienen un orificio que funciona como boca y ano al mismo tiempo, conectado con una especie de bolsa digestiva denominada "cavidad gastrovascular".</div>
    
            <div class="item ">
                <h1><b>Tamaño</b></h1>
               Alcanza un diámetro de 30-35 cm.</div>

              
         
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
