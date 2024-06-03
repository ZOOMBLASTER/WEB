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
         <link rel="stylesheet" href="css/animalesM_1.css">
    
        <title>Caballito de mar</title>
        <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
       
        
  <article class="landing">
     <div class="landing__content">
         <h1 class="landing__title">Caballito de mar</h1>
         <p class="landing__text">Hippocampus sp</p>
     </div>
  </article>

  <section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="ksubtitle">Descripcion</h2>
            <p class="knowledge__paragraph">
                
                Los caballitos de mar o hipocampos son un grupo de peces marinos pertenecientes al género Hippocampus. Reciben este nombre debido a la forma de su cabeza, que se asemeja a la de los caballos. Su forma de nadar es muy diferente a la de otros peces. Tienen el cuerpo en ángulo recto con la cabeza, lo que no se da en ningún otro género conocido de peces. Para comunicarse con sus congéneres, causan chasquidos con rápidos movimientos en su cabeza, haciendo rozar una parte del cráneo con una parte de su esqueleto externo. Este sonido también es perceptible en cautividad, cada vez que aspiran una presa con su tubo bucal.
¡Existen cerca de 50 especies de estos animales acuáticos!
Si decides tener un caballito de mar como mascota, prepárate para invertir tiempo, esfuerzo y recursos para proporcionarles un entorno adecuado y satisfacer sus necesidades únicas.  

            </p>
        </div>
    </div>
 </section>

 


    <!-- carousel -->
    <div class="dev_carousel">
        <!-- dev list item -->
        <div class="dev_list">
            <div class="dev_item">
                <img src="images/caballitodemar2.jpg">
                <div class="dev_content">
                    <div class="dev_title">El Caballito de mar como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Tamaño del acuario:</b> Capacidad de al menos 30 a 50 galones (alrededor de 113 a 189 litros) para mantener a un par de caballitos de mar.</li>
                            <li><b> Filtración eficiente:</b>  Un sistema de filtración eficiente es fundamental. Realiza cambios de agua regulares, preferiblemente cada semana, para mantener el agua limpia y saludable.</li>
                            <li><b>Temperatura del agua:</b>  Mantén la temperatura del agua entre 22 y 28 grados Celsius. Los caballitos de mar son sensibles a los cambios bruscos de temperatura, así que asegúrate de mantenerla constante.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/caballitodemar3.jpg">
                <div class="dev_content">
                    <div class="dev_title">El caballito de mar como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <!-- lorem 50 -->
                        <ul>
                            <li><b>Control químico del agua:</b> Mantén los niveles de amoníaco y nitrito en cero, y los nitratos lo más bajos posible. El pH ideal debe estar entre 7.2 y 8.4. La dureza del agua debe ser moderada a alta, y la dureza de carbonatos debe mantenerse estable para evitar fluctuaciones del pH.</li>
                            <li><b>Sustrato :</b>   Es preferible utilizar un sustrato arenoso o gravoso. Debe tener una profundidad de al menos 2 a 3 pulgadas.</li>
                            </ul>
                    </div>
                    
                </div>
            </div>
            <div class="dev_item">
                <img src="images/caballitodemar4.jpg">
                <div class="dev_content">
                    <div class="dev_title">El caballito de mar como mascota</div>
                    <div class="dev_topic">Medidas para un acuario</div>
                    <div class="dev_des">
                        <ul>
                            <li><b>Alimentación:</b> Los caballitos de mar se alimentan principalmente de pequeños crustáceos, anélidos, larvas de cnidarios y peces alevines. No son muy exigentes con sus presas; lo único que piden es que les quepan en la boca. En el acuario, puedes ofrecerles alimentos congelados como artemia o mysis.</li>
                            <li><b>Iluminacion:</b> Los caballitos de mar prefieren una iluminación tenue. Luces demasiado brillantes o directas, pueden estresarlos. La duración de la luz debe ser tropical, alrededor de 12 horas. Debes mantener un horario regular para encender y apagar la iluminación. Asegúrate de que la iluminación no eleve demasiado la temperatura del acuario.</li>
                            <li><b>Escondites:</b> Rocas vivas o estructuras artificiales permiten que los caballitos de mar se anclen y se escondan; se sienten cómodos entre algas y vegetación; Crea pequeñas cuevas o escondites utilizando rocas apiladas o conchas.</li>
                        </div>
                    
                </div>
            </div>
        </div>
        <!-- dev thumbnail -->
        <div class="dev_thumbnail">
            <div class="dev_item">
                <img src="images/caballitodemar2.jpg">
                <div class="dev_content">
                    
                </div>
            </div>
            <!-- more dev items -->
            <div class="dev_item">
                <img src="images/caballitodemar3.jpg">
                <div class="dev_content">
                   
                </div>
            </div>
            <div class="dev_item">
                <img src="images/caballitodemar4.jpg">
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
 
                <p class="questions__show"> Los caballitos de mar suelen vivir alrededor de 1 a 5 años. La esperanza de vida puede variar según la especie y las condiciones ambientales en las que se encuentren.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>
 
                <p class="questions__show"> En esta especie, es el macho quien se ocupa del desarrollo de los huevos. La hembra usa su ovopositor para insertar los huevos maduros dentro de la bolsa incubadora del macho, donde son fertilizados. Esta bolsa, (marsupio), permite diferenciar externamente los sexos y se transforma para facilitar nutrientes a los embriones. En unas tres semanas, los embriones están preparados para afrontar la vida.</p>

            </div>
        </article>
 
        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Frecuencia de reproduccion
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Este ciclo tiene lugar cada primavera y cada otoño.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Especie amenazada
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> La contaminación de los océanos, el cambio climático y las intervenciones sobre las costas, provocan la destrucción del hábitat en el que viven, así como la pesca sin control, son los principales causantes de la disminución del número de ejemplares en las aguas del planeta.</p>

             </div>
        </article>

        <article class="questions__padding">
            <div class="questions__answer">
                <h3 class="questions__title">Estado en la naturaleza
                    <span class="questions__arrow">
                        <img src="./images/arrow.svg" class="questions__img">
                    </span>
                </h3>                    
                <p class="questions__show"> Habitan en aguas tropicales y templadas poco profundas alrededor del mundo. Se concentran principalmente en las zonas indo-pacífica y atlántica, donde existe una gran biodiversidad. Puedes encontrarlos en lugares como arrecifes de coral, zonas con abundante vegetación de algas o manglares.</p>

             </div>
        </article>
    </section>


    <section>
        <h2 class="ssubtitle">Anatomia</h2>
     <div class="slider">
        <div class="item">
            <h1><b>Coloracion</b></h1>
            Suelen tener tonos neutros desde el beige hasta el castaño y el negro. Dependiendo de la especie, también pueden mostrar colores más exóticos como naranjas fluorescentes y profundos púrpuras. Pueden estar manchados, moteados o rayados, y algunos están adornados con volantes de piel, puntas y coronas.</div>
        <div class="item">
            <h1><b>Cuerpo</b></h1>
            Está cubierto por una armadura de placas o anillos de constitución ósea. Adoptan una posición erecta y se impulsan con su aleta dorsal. Su cuerpo se soporta gracias a la columna vertebral.
    </div>
        <div class="item">
            <h1><b>Cola</b></h1>
            No tienen aleta anal; tienen una cola prensil que se enrolla en espiral y les permite aferrarse a corales y plantas subacuáticas.</div>
      
        <div class="item ">
            <h1><b>Branquias</b></h1> A diferencia de otros peces, sus branquias no tienen filamentos cartilaginosos ordenados, sino que parecen un conjunto de mechones dispuestos al azar.</div>
     
        <div class="item ">
            <h1><b>Olfato</b></h1>
            El sentido del olfato está ubicado en unas fosas olfativas situadas delante de los ojos, que filtran el agua y son analizadas con precisión por células especializadas.</div>
        
            <div class="item ">
                <h1><b>Oído</b></h1>
                Está compuesto por unos pequeños huesos llamados otolitos, que son utilizados para recibir vibraciones externas.</div>
    
                <div class="item ">
                    <h1><b>Tamaño</b></h1>
                   Los caballitos de mar presentan una amplia variedad de tamaños. Su longitud puede oscilar entre un centímetro y medio hasta 35 centímetros.</div>
    
                    
    
             
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
