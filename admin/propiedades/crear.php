<?php 

    require '../../includes/app.php';

    use App\Propiedad;
    use App\Vendedor;
    use Intervention\Image\ImageManager as Image;
    use Intervention\Image\Drivers\Gd\Driver;


    estaAutenticado();

    $propiedad = new Propiedad;

    //Consulta para obtener todos los vendedores
    $vendedores = Vendedor::all();

    //Arreglo con mensaje de errores   
    $errores = Propiedad::getErrores();


    //Ejecutar el código después de que el usuario envía el formulario
    if($_SERVER['REQUEST_METHOD'] === 'POST'){

        $propiedad = new Propiedad($_POST['propiedad']);

        //Generar un nombre único
        $nombreImagen = md5(uniqid(rand(), true)). ".jpg";

        if ($_FILES['propiedad']['tmp_name']['imagen']) {
            $manager = new Image(Driver::class);
            $image = $manager->read($_FILES['propiedad']['tmp_name']['imagen'])->cover(800,600);
            $propiedad->setImagen($nombreImagen);
        }

        $errores = $propiedad->validar();

        

    //Revisar que el array de errores este vacio
    if(empty($errores)){


        /**Subida de archivos */

        if(!is_dir(CARPETA_IMAGENES)){
             mkdir(CARPETA_IMAGENES);
        }

        //Guarda la imagen en el servidor
        $imagen->save(CARPETA_IMAGENES . $nombreImagen);

        //Guardar en la base de datos 
        $propiedad->guardar(); 

    }


}



    incluirTemplate('header');
?>


    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin/index.php" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error):  ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">

        <?php include '../../includes/templates/formulario_propiedades.php'; ?>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>