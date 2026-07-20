<?php 

    require 'includes/funciones.php';
    incluirTemplate('header');
?>



    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la Propiedad">
        </picture>

         <p class="informacion-meta">Escrito el: <span>20/10/2025</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
            <p>Curabitur quis sapien dictum, euismod dolor non, sollicitudin tortor. Phasellus eleifend sodales erat, at pellentesque eros porta vel. In in eleifend risus. Ut luctus sed tortor ut cursus. Phasellus viverra lorem non ultricies porttitor. Etiam eu elementum diam, nec porta metus. Cras eu ligula a orci blandit molestie. Donec quis eleifend sem. Ut ullamcorper accumsan lorem, id faucibus quam efficitur sed. Nulla pulvinar finibus augue mollis consequat. Nunc varius, justo ut finibus porttitor, diam nisl rhoncus lorem, et efficitur turpis lacus vitae mi. Nullam lectus dui, molestie in odio id, auctor tincidunt sapien. Quisque eu sollicitudin erat, non varius mauris. Sed sed purus quis turpis consequat auctor venenatis eget erat. Morbi id purus tellus. Donec auctor ipsum quis mi auctor tincidunt.</p>
            <p>Maecenas nec risus nec metus scelerisque eleifend et a libero. Phasellus scelerisque sollicitudin consectetur. Duis luctus sed ligula vel posuere. Proin posuere aliquam nibh, nec cursus sapien tincidunt eget. Phasellus tincidunt auctor ullamcorper. Donec consequat malesuada posuere. Vivamus eu venenatis eros. Nunc eros velit, lacinia id luctus at, euismod eget dolor. Nunc velit purus, varius eu ultrices non, efficitur quis ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>