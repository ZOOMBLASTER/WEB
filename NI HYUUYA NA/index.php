<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/estilos.css">

    <title>Ni Hyruuya Na'</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="index.html" class="nav__logo">NI HY<strong>RUUYA NA'</strong></a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="agua_dulce.html" class="nav__link">Agua dulce</a>
                    </li>

                    <li class="nav__item">
                        <a href="agua_salada.html" class="nav__link">Agua salada</a>
                    </li>

                    <li class="nav__item">
                        <a href="agua_salobre.html" class="nav__link">Agua salobre</a>
                    </li>

                    <li class="nav__item">
                        <a href="simulador.php" class="nav__link">Simulador</a>
                    </li>

                    <li class="nav__item">
                        <a href="nosotros.html" class="nav__link">Nosotros</a>
                    </li>


                </ul>
                <!-- Close button -->
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <div class="nav__actions">
                <!-- Search button -->
                <i class="ri-search-line nav__search" id="search-btn"></i>

                <!-- Login button -->
                <i class="ri-user-line nav__login" id="login-btn"></i>

                <!-- Toggle button -->
                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
    </header>
    <!--==================== SEARCH ====================-->
    <div class="search" id="search">
        <form action="#" class="search__form">
            <i class="ri-search-line search__icon"></i>
            <input type="search" placeholder="¿Qué estás buscando?" class="search__input">

            <ul class="search__results" id="search-results">
                <!-- Ejemplos de elementos buscables -->
                <li><a href="agua_dulce.html" data-searchable>Agua dulce</a></li>
                <li><a href="agua_salada.html" data-searchable>Agua salada</a></li>
                <li><a href="agua_salobre.html" data-searchable>Agua salobre</a></li>
                <li><a href="ajolote.html" data-searchable>Axolote</a></li>
                <li><a href="barbo.html" data-searchable>Barbo tigre</a></li>
                <li><a href="betta.html" data-searchable>Betta</a></li>
                <li><a href="caballito_de_mar.html" data-searchable>Caballito de mar</a></li>
                <li><a href="camaron_cristal.html" data-searchable>Camaron cristal</a></li>
                <li><a href="cangrejo_de_rio.html" data-searchable>Cangrejo de rio</a></li>
                <li><a href="caracol_manzana.html" data-searchable>Caracol manzana</a></li>
                <li><a href="cocodrilo_enano.html" data-searchable>Cocodrilo enano</a></li>
                <li><a href="fiddler.html" data-searchable>Cangrejo fiddler</a></li>
                <li><a href="goldfish.html" data-searchable>Goldfish</a></li>
                <li><a href="guppys.html" data-searchable>Guppy</a></li>
                <li><a href="hermitaño.html" data-searchable>Cangrejo hermitaño</a></li>
                <li><a href="medusa_acropolis.html" data-searchable>Medusa acropolis</a></li>
                <li><a href="medusa_luna.html" data-searchable>Medusa luna</a></li>
                <li><a href="molly.html" data-searchable>Molly</a></li>
                <li><a href="nosotros.html" data-searchable>Nosotros</a></li>
                <li><a href="pez_angel_emperador.html" data-searchable>Pez angel emperador</a></li>
                <li><a href="pez_angel.html" data-searchable>Pez angel</a></li>
                <li><a href="pez_arquero.html" data-searchable>Pez arquero</a></li>
                <li><a href="pez_cirujano.html" data-searchable>Pez cirujano</a></li>
                <li><a href="pez_cirujano_amarillo.html" data-searchable>Pez cirujano amarillo</a></li>
                <li><a href="pez_damisela.html" data-searchable>Pez damisela</a></li>
                <li><a href="pez_disco.html" data-searchable>Pez disco</a></li>
                <li><a href="pez_escorpion.html" data-searchable>Pez escorpion</a></li>
                <li><a href="pez_globo.html" data-searchable>Pez globo</a></li>
                <li><a href="pez_gobio.html" data-searchable>Pez gobio</a></li>
                <li><a href="pez_leon.html" data-searchable>Pez leon</a></li>
                <li><a href="pez_mandarin.html" data-searchable>Pez mandarin</a></li>
                <li><a href="pez_mariposa.html" data-searchable>Pez mariposa</a></li>
                <li><a href="pez_payaso.html" data-searchable>Pez payaso</a></li>
                <li><a href="platys.html" data-searchable>Platy</a></li>
                <li><a href="pompom.html" data-searchable>Cangrejo pom pom</a></li>
                <li><a href="porcelana.html" data-searchable>Cangrejo de porcelana</a></li>
                <li><a href="pulpo_anillos_azules.html" data-searchable>Pulpo anillos azules</a></li>
                <li><a href="pulpo_comun.html" data-searchable>Pulpo comun</a></li>
                <li><a href="tetra.html" data-searchable>Tetra</a></li>
                <li><a href="tortuga_orejas_rojas.html" data-searchable>Tortuga orejas rojas</a></li>
                <li><a href="vampiro.html" data-searchable>Cangrejo vampiro</a></li>


            </ul>

        </form>
        <i class="ri-close-line search__close" id="search-close"></i>
    </div>

    <!--==================== LOGIN ====================-->
    <div class="login" id="login">
        <form action="php/login.php" method="POST" class="login__form">
            <h2 class="login__title">Iniciar sesion</h2>

            <div class="login__group">
                <div>
                    <label for="email" class="login__label">Correo electronico</label>
                    <input type="email" placeholder="Ingresa tu correo" name="email" class="login__input">
                </div>

                <div>
                    <label for="password" class="login__label">Contraseña</label>
                    <input type="password" placeholder="Ingresa tu contraseña" name="password" class="login__input">
                </div>
            </div>

            <div>
                <p class="login__signup">
                    No tienes una cuenta? <a href="registro.html" id="crear-cuenta">Crear cuenta</a>
                </p>

                <a href="perfil.php" class="login__forgot">
                    Mi perfil
                </a>

                <button type="submit" class="login__button" name="btninicio">Ingresa</button>
            </div>
        </form>
        <div id="message" class="login__message"></div>
        <i class="ri-close-line login__close" id="login-close"></i>
    </div>


    <!--==================== LANDING ====================-->
    <article class="landing">
        <div class="landing__content">
            <h1 class="landing__title">Aprende y practica la crianza de peces.</h1>
            <p class="landing__text">Utiliza la herramienta para principiantesde la pagina para poder emular tu propio
                acuario
                para poder comprender y saber todo acerca de las distintas especies de mascotas acuaticas domesticas .
            </p>
            <a href="simulador.html" class="cta">Comienza ahora</a>
        </div>
    </article>

    <section class="container about">
        <h2 class="subtitle">¿Qué necesitamos saber?</h2>
        <p class="about__paragraph">Aprenderás sobre las necesidades fundamentales de cada tipo de animal doméstico,
            como los requisitos dietéticos, el espacio y el ambiente adecuados para vivir, así como la atención médica
            básica que requieren</p>

        <div class="about__main">
            <article class="about__icons">
                <img src="images/pez.png" class="about__icon">
                <h3 class="about__title">Hábitat y ambiente</h3>
                <p class="about__paragrah">Parámetros del agua necesarios para mantener un entorno
                    saludable para las especies acuáticas</p>
            </article>

            <article class="about__icons">
                <img src="images/piscicultura.png" class="about__icon">
                <h3 class="about__title">Alimentación y nutrición</h3>
                <p class="about__paragrah">Necesidades dietéticas, incluidos los tipos de alimentos adecuados
                    , la frecuencia de alimentación y las porciones adecuadas.</p>
            </article>

            <article class="about__icons">
                <img src="images/consejos.png" class="about__icon">
                <h3 class="about__title">Cuidados especiales y enfermedades</h3>
                <p class="about__paragrah">Las enfermedades comunes que pueden afectar a las especies acuáticas
                    domésticas
                    y cómo prevenirlas o tratarlas. </p>
            </article>
        </div>
    </section>

    <section class="knowledge">
        <div class="knowledge__container container">
            <div class="knowledege__texts">
                <h2 class="ksubtitle">Obten asesoria sobre especies con un profesional</h2>
                <p class="knowledge__paragraph">Si necesitas ayuda con una especie distinta, poco comun o con alguna
                    diferencia con los demas de su especie.
                    especies en cautiverio, salvajes y con mutaciones
                </p>
                <a href="#footer" class="cta">Contactanos</a>
            </div>

            <figure class="knowledge__picture">
                <img src="images/favicon.png" class="knowledge__img">
            </figure>
        </div>
    </section>


    <section class="slider habitats">
        <h2 class="ssubtitle">Aprende más acerca de los distintos tipos de habitats</h2>
        <div class="slider">
            <div class="list">
                <div class="item">
                    <div class="image-container">
                        <img src="images/agua_dulce.jpg" alt="">
                        <div class="text-overlay">
                            <h2>Agua Dulce</h2>
                            <p>El agua dulce, vital para la vida en la Tierra, fluye en ríos serpenteantes y tranquilos
                                lagos, reflejando los tonos del cielo y del paisaje circundante. Su transparencia invita
                                a mirar hacia abajo, revelando un mundo submarino de plantas ondulantes y peces de
                                colores brillantes. Su sabor es puro y refrescante, un bálsamo para la sed y un regalo
                                para el paladar. Los sonidos que acompañan al agua dulce son serenos y relajantes: el
                                murmullo suave de un arroyo, el chapoteo alegre de una cascada o el silencio tranquilo
                                de un lago al amanecer. Es el hogar de una diversidad de flora y fauna, desde nenúfares
                                delicados hasta majestuosos árboles que se reflejan en su superficie.</p>
                            <a href="agua_dulce.html" class="bcta">Comienza ahora</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="image-container">
                        <img src="images/agua_salada.jpg" alt="">
                        <div class="text-overlay">
                            <h2>Agua Salada</h2>
                            <p>El agua salada, omnipresente en los océanos y mares del mundo, es una sinfonía de azules
                                profundos y verdes etéreos. Su salinidad se percibe en el aire y se siente en la lengua
                                al respirar cerca de la costa. Las olas danzan en una coreografía perpetua, rompiendo
                                con fuerza contra acantilados de roca o suavemente acariciando playas de arena dorada.
                                El sabor salado que caracteriza este tipo de agua es inconfundible, impregnando el aire
                                y otorgando una frescura que te invita a sumergirte en sus profundidades. La vida marina
                                bulle en su seno, desde los diminutos plancton hasta majestuosas ballenas, creando un
                                ecosistema vibrante y lleno de misterio.</p>
                            <a href="agua_salada.html" class="bcta">Comienza ahora</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="image-container">
                        <img src="images/agua_salobre.jpg" alt="">
                        <div class="text-overlay">
                            <h2>Agua Salobre</h2>
                            <p>El agua salobre, una amalgama de lo dulce y lo salado, es un paisaje líquido
                                en constante cambio. Se encuentra en estuarios y deltas, donde los ríos encuentran
                                el mar y se mezclan en una danza de colores y sabores. Su salinidad es más suave que
                                la del agua salada, pero aún se percibe en el aire y en el gusto del agua. Las marismas
                                y manglares que bordean sus orillas son hogar de una biodiversidad única, adaptada a la
                                fluctuación de la salinidad y las mareas. El agua salobre es un lugar de transición,
                                donde
                                los ecosistemas terrestres y marinos se entrelazan en una sinfonía de vida y movimiento.
                            </p>
                            <a href="agua_salobre.html" class="bcta">Comienza ahora</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="buttons">
                <button id="prev">
                    <</button> <button id="next">>
                </button>
            </div>
            <ul class="dots">
                <li class="active"></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </section>

    <section class="questions container">
        <h2 class="psubtitle">Preguntas frecuentes</h2>
        <p class="questions__paragraph">Las dudas mas frecuentes de personas que cuidan un mascota acuatica por primera
            vez</p>

        <section class="questions__container">
            <article class="questions__padding">
                <div class="questions__answer">
                    <h3 class="questions__title">¿Qué equipo necesito para tener una mascota aacuatica?
                        <span class="questions__arrow">
                            <img src="./images/arrow.svg" class="questions__img">
                        </span>
                    </h3>

                    <p class="questions__show">Para mantener una mascota acuática adecuadamente, necesitarás algunos
                        equipos esenciales. Esto incluye un acuario del tamaño apropiado para la especie que elijas, un
                        filtro eficiente para mantener el agua limpia, un calentador para mantener la temperatura
                        adecuada, y un termómetro para monitorearla. La iluminación adecuada puede ser necesaria, junto
                        con decoraciones como plantas y cuevas para enriquecer el ambiente. Un acondicionador de agua es
                        esencial para tratar el agua del grifo, mientras que alimentos apropiados y una red para
                        alimentar son indispensables. </p>
                </div>
            </article>

            <article class="questions__padding">
                <div class="questions__answer">
                    <h3 class="questions__title">¿Qué comida es la mejor para mi mascota acuatica?
                        <span class="questions__arrow">
                            <img src="./images/arrow.svg" class="questions__img">
                        </span>
                    </h3>

                    <p class="questions__show">La comida ideal para mascotas acuáticas varía según la especie. Los peces
                        tropicales prefieren escamas, pellets o alimentos vivos como larvas de mosquito. Los peces de
                        agua fría necesitan escamas o pellets específicos para ellos. Invertebrados como camarones
                        pueden comer comida específica o restos de comida de peces con vegetales frescos. Anfibios
                        acuáticos como ranas disfrutan de grillos, gusanos y pellets para anfibios. Es clave investigar
                        las necesidades dietéticas específicas de cada especie para garantizar una alimentación
                        adecuada.</p>
                </div>
            </article>

            <article class="questions__padding">
                <div class="questions__answer">
                    <h3 class="questions__title">¿Cada cuanto esnecesario realizar un mantenimineto del habitat

                        ?
                        <span class="questions__arrow">
                            <img src="./images/arrow.svg" class="questions__img">
                        </span>
                    </h3>

                    <p class="questions__show">El mantenimiento del hábitat de una mascota acuática es esencial para
                        asegurar un entorno limpio y saludable. Se recomienda realizar un cambio parcial de agua cada
                        1-2 semanas, limpiar el filtro y las decoraciones regularmente, y realizar pruebas de agua cada
                        1-2 semanas para monitorear los niveles de contaminantes. También es importante mantener el
                        equipo del acuario en buen estado y podar las plantas vivas si es necesario. Adaptar la
                        frecuencia del mantenimiento según las necesidades individuales de tu acuario garantizará el
                        bienestar de tus mascotas acuáticas.</p>
                </div>
            </article>
        </section>



        <section>
            <h2 class="asubtitle">Articulos que podrian interesarte</h2>
            <div class="art-slider">
                <!-- list Items -->
                <div class="art-list">
                    <div class="art-item active">
                        <img src="images/1.jpg">
                        <div class="art-content">
                            <p>RECOMENDACIONES GENERALES</p>
                            <h2>Medidas basicas de cuidados y mantenimineto de peces</h2>
                            <p> En esta completa guía, aprenderás todos los secretos para mantener a tus peces felices y
                                saludables. Desde el emocionante ciclo del agua hasta la elección de los alimentos
                                adecuados, pasando por la importancia de mantener los parámetros del agua en equilibrio,
                                ¡te convertirás en un experto en el cuidado de tus amigos acuáticos!
                            </p>
                            <a href="art_1.html" class="ccta">Comienza ahora</a>
                        </div>
                    </div>
                    <div class="art-item">
                        <img src="images/2.jpg">
                        <div class="art-content">
                            <p>CONSEJOS</p>
                            <h2>Lo que debes saber antes de adquirir peces</h2>
                            <p>
                                Aprende mas acerca de las cosas que debes tener en cuenta al momento de adquirir peces y
                                así no tengas problemas
                                ¡Descubre todo lo que necesitas saber antes de adquirir peces con nuestro artículo
                                exclusivo: "Lo que debes saber antes de adquirir peces"! Sumérgete en un mundo
                                fascinante donde aprenderás sobre los secretos del cuidado adecuado de estos hermosos
                                seres acuáticos.
                            </p>
                            <a href="art_2.html" class="ccta">Comienza ahora</a>
                        </div>
                    </div>
                    <div class="art-item">
                        <img src="images/3.jpeg">
                        <div class="art-content">
                            <p>SUGERENCIAS DE COMPRA</p>
                            <h2>Mascotas acuaticas mas populares</h2>
                            <p>
                                ¡Sumérgete en el fascinante mundo de las mascotas acuáticas más populares con nuestro
                                artículo exclusivo! Descubre una amplia variedad de criaturas fascinantes que harán de
                                tu hogar un oasis de vida acuática. Desde exóticos peces tropicales hasta adorables
                                tortugas de agua dulce, nuestro artículo te guiará a través de las maravillas del mundo
                                subacuático. </p>
                            <a href="art_3.html" class="ccta">Comienza ahora</a>

                        </div>
                    </div>
                    <div class="art-item">
                        <img src="images/4.jpg">
                        <div class="art-content">
                            <p>SIGNOS DE ALERTA</p>
                            <h2>Las enfermedades mas comunes en peces de acuario</h2>
                            <p>

                                ¡Descubre el fascinante mundo de la acuariofilia con nuestro artículo sobre las
                                enfermedades más comunes en peces de acuario! Sumérgete en un océano de conocimiento
                                mientras aprendes a identificar, prevenir y tratar las dolencias que pueden afectar a
                                tus queridos peces. Desde manchas blancas hasta síntomas de estrés, este artículo te
                                enseñará a reconocer los signos tempranos de enfermedades, brindándote las herramientas
                                necesarias para mantener un acuario vibrante y saludable. </p>
                            <a href="art_4.html" class="ccta">Comienza ahora</a>

                        </div>
                    </div>
                    <div class="art-item">
                        <img src="images/5.jpg">
                        <div class="art-content">
                            <p>OPCIONES DIFERENTES</p>
                            <h2>Mascotas alternativas que no son peces</h2>
                            <p>
                                Explora un universo acuático más allá de los típicos peces de acuario y descubre una
                                variedad emocionante de compañeros acuáticos que pueden convertirse en tus amigos más
                                queridos.

                                Desde adorables camarones y cangrejos hasta exóticas medusas y pulpos, nuestro artículo
                                te presenta una amplia gama de mascotas acuáticas que cautivarán tu imaginación y
                                llenarán tu vida de alegría y fascinación. </p>
                            <a href="art_5.html" class="ccta">Comienza ahora</a>

                        </div>
                    </div>
                    <div class="art-item">
                        <img src="images/6.jpg">
                        <div class="art-content">
                            <p>PECES EXOTICOS</p>
                            <h2>Los peces mas exoticos que puedes tener</h2>
                            <p>
                                ¿Estás listo para agregar un toque de extravagancia a tu acuario? Este artículo te
                                guiará a través de una selección cuidadosamente curada de las especies más
                                extraordinarias de peces que puedes tener. Desde los vibrantes peces disco hasta los
                                misteriosos peces globo, cada uno tiene su propio encanto único que transformará tu
                                acuario en un oasis de belleza exótica.</p>
                            <a href="art_6.html" class="ccta">Comienza ahora</a>

                        </div>
                    </div>
                    <div class="art-item">
                        <img src="images/7.jpg">
                        <div class="art-content">
                            <p>SITUACIONES DE PELIGRO</p>
                            <h2>Errores mas comunes al cuidar peces</h2>
                            <p>
                                ¡Descubre los secretos para convertirte en un experto acuarista con nuestro artículo
                                exclusivo: "Errores más comunes al cuidar peces"! Sumérgete en un mundo fascinante de
                                vida acuática mientras aprendes los errores típicos que cometen los amantes de los peces
                                y cómo evitarlos.

                                ¿Estás sobrealimentando a tus peces sin darte cuenta? ¿Tu acuario parece una sopa verde
                                en lugar de un oasis cristalino? ¡No te preocupes más! Nuestro artículo te enseñará los
                                trucos para alimentar a tus peces de manera adecuada y mantener la calidad del agua en
                                niveles óptimos. </p>
                            <a href="art_7.html" class="ccta">Comienza ahora</a>

                        </div>
                    </div>
                    <div class="art-item">
                        <img src="images/8.jpg">
                        <div class="art-content">
                            <p>RECOMENDACIONES DE EQUIPO</p>
                            <h2>Equipo recomendado para cuidar peces</h2>
                            <p>

                                ¡Descubre el artículo definitivo sobre el equipo recomendado para cuidar peces!
                                Sumérgete en un mundo de conocimiento acuático y aprende los secretos para mantener un
                                acuario vibrante y saludable. Desde los tanques adecuados hasta la filtración de primera
                                calidad, este artículo te guiará en cada paso del camino hacia el éxito en la cría de
                                peces. </p>
                            <a href="art_8.html" class="ccta">Comienza ahora</a>

                        </div>
                    </div>
                </div>
                <!-- Button arrows -->
                <div class="art-arrows">
                    <button id="art-prev">
                        <</button> <button id="art-next">>
                    </button>
                </div>
                <!-- Thumbnail -->
                <div class="art-thumbnail">
                    <div class="art-item active">
                        <img src="images/1.jpg">
                        <div class="art-content">
                            Recomendacioes generales
                        </div>
                    </div>
                    <div class="art-item">
                        <img src="images/2.jpg">
                        <div class="art-content">
                            Consejos
                        </div>
                    </div>
                    <div class="art-item">
                        <img src="images/3.jpeg">
                        <div class="art-content">
                            Sugerencias de compra
                        </div>
                    </div>
                    <div class="art-item">
                        <img src="images/4.jpg">
                        <div class="art-content">
                            Signos de alerta
                        </div>
                    </div>
                    <div class="art-item">
                        <img src="images/5.jpg">
                        <div class="art-content">
                            Opciones diferentes
                        </div>
                    </div>
                    <div class="art-item">
                        <img src="images/6.jpg">
                        <div class="art-content">
                            Peces inusuales
                        </div>
                    </div>
                    <div class="art-item">
                        <img src="images/7.jpg">
                        <div class="art-content">
                            Situaciones de peligro
                        </div>
                    </div>
                    <div class="art-item">
                        <img src="images/8.jpg">
                        <div class="art-content">
                            Recomendaciones de equipo
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2 class="nsubtitle">¿Quieres saber mas sobre las personas que estan detras de este proyecto?</h2>
            <div class="us">
                <p class="ntext">Este proyecto es desarrollado por un estudiante del Instituto Tecnologico Superior de
                    Teposcolula</p>
                <a href="nosotros.html" class="dcta">Aprende mas</a>
        </section>
    </section>



    <footer id="footer">
        <div class="footerContainer">
            <div class="socialIcons">
                <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://mail.google.com/"><i class="fa-brands fa-google-plus"></i></a>
                <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="footerNav">
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="agua_dulce.html">Especies de agua dulce</a></li>
                    <li><a href="agua_salada.html">Especies de agua salada</a></li>
                    <li><a href="agua_salobre.html">Especies de agua salobre</a></li>
                    <li><a href="simulador.html">Similador</a></li>
                    <li><a href="nosotros.html">Nosotros</a></li>
                </ul>
            </div>

        </div>
        <div class="footerBottom">
            <p>Copyright &copy;2023; Designed by <span class="designer">Ni Hyruuya Na'</span></p>
        </div>
    </footer>


    <script src="js/menu.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
    <script src="js/habitats.js"></script>
    <script src="js/articulo.js"></script>
    <script src="js/buscador.js"></script>

</body>

</html>
