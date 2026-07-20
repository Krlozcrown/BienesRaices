<?php 

    require 'includes/app.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 Años de Experiencia
                </blockquote>
                <p>Curabitur quis sapien dictum, euismod dolor non, sollicitudin tortor. Phasellus eleifend sodales erat, at pellentesque eros porta vel. In in eleifend risus. Ut luctus sed tortor ut cursus. Phasellus viverra lorem non ultricies porttitor. Etiam eu elementum diam, nec porta metus. Cras eu ligula a orci blandit molestie. Donec quis eleifend sem. Ut ullamcorper accumsan lorem, id faucibus quam efficitur sed. Nulla pulvinar finibus augue mollis consequat. Nunc varius, justo ut finibus porttitor, diam nisl rhoncus lorem, et efficitur turpis lacus vitae mi. Nullam lectus dui, molestie in odio id, auctor tincidunt sapien. Quisque eu sollicitudin erat, non varius mauris. Sed sed purus quis turpis consequat auctor venenatis eget erat. Morbi id purus tellus. Donec auctor ipsum quis mi auctor tincidunt.</p>
                <p>Maecenas nec risus nec metus scelerisque eleifend et a libero. Phasellus scelerisque sollicitudin consectetur. Duis luctus sed ligula vel posuere. Proin posuere aliquam nibh, nec cursus sapien tincidunt eget. Phasellus tincidunt auctor ullamcorper. Donec consequat malesuada posuere. Vivamus eu venenatis eros. Nunc eros velit, lacinia id luctus at, euismod eget dolor. Nunc velit purus, varius eu ultrices non, efficitur quis ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque id quo perspiciatis aut delectus, officia ullam. Doloribus est hic, provident tempora, nesciunt exercitationem harum, similique alias quisquam iste explicabo eos.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque id quo perspiciatis aut delectus, officia ullam. Doloribus est hic, provident tempora, nesciunt exercitationem harum, similique alias quisquam iste explicabo eos.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque id quo perspiciatis aut delectus, officia ullam. Doloribus est hic, provident tempora, nesciunt exercitationem harum, similique alias quisquam iste explicabo eos.</p>
            </div>
        </div>
    </section>

<?php 
    incluirTemplate('footer');
?>