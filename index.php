<?php
// Código PHP puede ir antes del HTML
?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="Autor" content="Carlos Francisco Tovar Perez">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndexProgramaciónWeb</title>
    <!-- Enlace a Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!--link de los estilos de boostrap-->
    <!--como nota2 existe la posibilidad de que en vez del link, selecciones la carpeta si es que descargas los estilos, pero es mas facil con el link-->
    <!--en mi caso seria <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css"> -->
</head>
<body style="background-color: lightblue;">
	<!--desde aqui hasta el final del contenedor tendremos todo el carrusel-->
    <div class="container mt-5">
        <h2 class="text-center">Prácticas Programación Web</h2>
        <br>
        <!-- Carrusel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <!--primer practica-->
            <div class="carousel-inner"><!--como dato, siempre el primer slider del carrusel inicia como inner y el resto como items-->
                <div class="carousel-item active">
                    <a href="Practica1Tovar.html">
                    	<!--de forma local seria algo como <a href="TovarPracticas/Practica1Tovar.html"></a>-->
                        <img src="https://fbi.cults3d.com/uploaders/17223299/illustration-file/aa6fe273-6086-4307-80dd-631039c3c47d/1.png" class="d-block w-100" width="auto" height="550" title="Práctica1" alt="Practica 1">
                    </a>
                    <br><br><br><br><br>
                    <div class="carousel-caption d-none d-md-block">
			<a href="Practica1Tovar.html">
                        <h5>Práctica1</h5>
                        <p>Práctica 7 Octubre</p>
			</a>
                    </div>
                </div>
                <!--segunda practica-->
                <div class="carousel-item"><!--aqui como es segundo slider ya inicia como item-->
                    <a href="Practica2Tovar.html"><!--aqui tambien dependiendo si es para el hosting cambia-->
                    	<!--de forma local seria algo como <a href="TovarPracticas/Practica2Tovar.html"></a>-->

                        <img src="https://fbi.cults3d.com/uploaders/16165612/illustration-file/ff600f7d-c24a-4ada-b153-72cb4bfa5e25/Umbreon01.jpg" class="d-block w-100" width="auto" height="550" title="Práctica2" alt="Practica 2">
                        <br><br><br><br><br>
                    </a>
                    <div class="carousel-caption d-none d-md-block">
			<a href="Practica2Tovar.html">
                        <h5>Práctica2</h5>
                        <p>Práctica 10 Octubre</p>
			</a>
                    </div>
                </div>
                <!--tercer practica-->
                <div class="carousel-item">
                    <a href="Practica3Tovar.html">
                        <img src="https://fbi.cults3d.com/uploaders/16165612/illustration-file/3fcd6a96-998e-425d-bcc1-427881649817/Jolteon01.jpg" class="d-block w-100" width="auto" height="550" alt="Practica 3">
                        <br><br><br><br><br>
                    </a>
                    <div class="carousel-caption d-none d-md-block">
			<a href="Practica3Tovar.html">
                        <h5>Práctica3</h5>
                        <p>Práctica 15 Octubre</p>
			</a>
                    </div>
                </div>
 		<!--Cuarta practica-->
		 <div class="carousel-item">
                    <a href="Practica4Tovar.html">
                        <img src="https://i.ytimg.com/vi/97R8g30fru0/maxresdefault.jpg" class="d-block w-100" width="auto" height="550" title="practica 4" alt="practica 4">
                        <br><br><br><br><br>
                    </a>
                    <div class="carousel-caption d-none d-md-block">
			<a href="Practica4Tovar.html">
                        <h5>Práctica4</h5>
                        <p>Práctica 17 Octubre</p>
			</a>
                    </div>
                </div>

		     <!--Quinta practica-->
		<div class="carousel-item">
                    <a href="Practica5Tovar.html">
                        <img src="https://fbi.cults3d.com/uploaders/23713714/illustration-file/027e5579-823e-4b50-807a-22eb8df8a221/ds.jpg" class="d-block w-100" width="auto" height="550" alt="Practica 5">
                        <br><br><br><br><br>
                    </a>
                    <div class="carousel-caption d-none d-md-block">
			<a href="Practica5Tovar.html">
                        <h5>Práctica5</h5>
                        <p>Práctica 24 Octubre</p>
			</a>
                    </div>
                </div>

		    <!--Sexta Práctoca-->
		<div class="carousel-item">
                    <a href="Practica6Tovar.html">
                        <img src="https://images.cults3d.com/vUAkmmGAqoRYmHrHuXxIiH9FHTQ=/516x516/filters:no_upscale():format(webp)/https://fbi.cults3d.com/uploaders/31029651/illustration-file/56ddf0b7-514c-42b2-9a2c-db1374603fb2/Imagen18_002.png" class="d-block w-100" width="auto" height="550" alt="Practica 6">
                        <br><br><br><br><br>
                    </a>
                    <div class="carousel-caption d-none d-md-block">
			<a href="Practica6Tovar.html">
                        <h5>Práctica6</h5>
                        <p>Práctica 30 Octubre</p>
			</a>
                    </div>
                </div>

            </div>
		
            <!--Botones del carrusel-->
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>

   <!--lo mismo que dije arriba, este es con link para mas facilidad pero se puede hacer de forma distinta si instalaste el boostrap	-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--en mi caso seria
    nota:en este caso el popper viene dentro del boostrap.bundle.js asi que no es necesario instalar nada mas y queda asi:
    <script src="bootstrap4/js/bootstrap.bundle.jss"></script>
    <script src="jquery-3.7.1.min,map"></script>	
	-->


</body>
</html>
