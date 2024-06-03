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
         <link rel="stylesheet" href="css/animalesM_11.css">
    
        <title>Pez globo</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  <!--==================== Landing ====================-->
  
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">PEZ GLOBO</h1>
         <p class="landing__text">Tetraodontidae</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                El pez globo, también conocido como fugu, es uno de los peces más fascinantes del mundo marino. Estos peces se caracterizan por su habilidad para inflarse, convirtiéndose en una bola de espinas que los protege de los depredadores. Incluso, son considerados una delicadeza en la gastronomía japonesa, aunque es importante mencionar que su preparación es altamente peligrosa debido a la presencia de tetrodotoxina, una sustancia altamente tóxica que se encuentra en algunos órganos del pez. </p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/globo1.jpg">
                <div class="dev_content">
                    <div class="dev_title">El pez globo como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Tamaño del acuario:</b> : El tamaño mínimo del acuario para un pez globo es de 10 galones. Sin embargo, si puedes permitirlo y quieres proporcionarles el mejor hábitat posible, te recomiendo un acuario más grande, cercano a los 20 o 30 galones.</li>
                            <li><b> Filtración eficiente:</b>  Un filtro de alta calidad puede ayudar a eliminar los desechos, el exceso de desechos y los químicos dañinos del agua, creando un ambiente limpio y saludable para tus peces Además, realiza cambios regulares de agua (entre el 10 % y el 20 % del volumen total) para eliminar los desechos acumulados y reponer los minerales esenciales en el agua
                                </li>
                            <li><b>Temperatura del agua:</b>  Para mantener esta especie en condiciones óptimas, es necesario mantener la temperatura del agua entre 24°C y 28°C. Los cambios bruscos de temperatura pueden estresar a los peces y hacerlos más susceptibles a las enfermedades</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/globo2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El pez globo como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Control químico del agua:</b>Se debe mantener un pH ligeramente alcalino, en torno a 7.5-8.5. Aunque el pez globo es de agua dulce, al tenerlo en cautiverio es necesario que se agregue sal al agua para obtener un agua parcialmente salada</li>
                            <li><b>Escondites:</b> : Proporciona suficientes escondites y plantas vivas en el acuario para que el pez globo pueda explorar y sentirse seguro.</li>
                            <li><b>Sustrato:</b>  Utiliza rocas, troncos y plantas acuáticas para crear escondites y zonas de descanso. Asegúrate de que la decoración sea robusta y resistente, ya que los peces globo pueden morder y dañar objetos</li>
                            </ul> 
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/globo3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El pez globo como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> Los peces globo son carnívoros. Su dieta consiste principalmente en crustáceos, moluscos, pequeños peces y materia vegetal. Es importante proporcionarles una alimentación adecuada y variada, incluyendo alimentos vivos, congelados y secos.</li>
                            <li><b>Iluminacion:</b> : Dado que el pez globo reside en las profundidades del océano, experimenta una falta de luz solar natural. Esto hace que su coloración sea más oscura. Si tienes un acuario con iluminación artificial, opta por una luz tenue y ten en cuenta que el pez globo exhibirá tonos más oscuros
                                </li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/globo1.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/globo2.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/globo3.jpg">
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
 
                <p class="questions__show"> En promedio, pueden vivir entre 3 y 5 años. Sin embargo, con el cuidado adecuado, su vida útil puede extenderse aún más.
                    </p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> El pez globo se reproduce de manera sexual mediante huevos. Son ovíparos. Durante el cortejo, los machos crean formas en la arena para atraer a las hembras. Estas pueden depositar sus huevos en estas estructuras. Los huevos eclosionan después de aproximadamente 4 días, y el macho cuida de ellos hasta que salen del cascarón</p>

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
                <p class="questions__show"> El pez globo se encuentra en aguas costeras poco profundas, como arrecifes de coral y zonas rocosas. </p>

             </div>
        </article>

    </section>


<section>
    <h2 class="ssubtitle">Anatomia</h2>
 <div class="slider">
    <div class="item">
        <h1><b>Coloracion</b></h1>
        La piel del pez globo varía según la especie y puede ser amarilla, verde, marrón o incluso negra.</div>
    <div class="item">
        <h1><b>Cuerpo</b></h1>
        Su piel es áspera y carece de escamas. El pez globo tiene un cuerpo robusto. Tienen espinas largas en la piel que evitan que sean comidos por depredadores.</div>
    <div class="item">
        <h1><b>Tamaño</b></h1>
        Varían en tamaño, desde apenas 2.5 centímetros hasta los más grandes de 60 centímetros. Son criaturas agresivas y prefieren vivir en solitario cuando son adultos.</div>
  
    <div class="item ">
        <h1><b>Cabeza</b></h1> 
        tiene una cabeza grande y ancha.</div>
 
    <div class="item ">
        <h1><b>Veneno</b></h1>
        Posee un par de glándulas de veneno ubicadas en los lados de su cabeza. Estas contienen una toxina llamada cianotoxina. Cuando se siente amenazado, el pez globo puede liberar esta toxina.</div>
    
    <div class="item ">
         <h1><b>Inflacion</b></h1>
         : Cuando se siente en peligro, el pez globo puede inflarse como un globo. Su estómago es flexible y puede succionar agua para lograr inflarse.</div>


              
         
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
