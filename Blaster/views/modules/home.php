<div class="row">
	<div class="col l4 icons" style="display: inline-block;"><span><i class="fab fa-instagram">&nbsp</i>Blasterimport</span> </div>
	<div class="col l4">
		
		<div class="carousel carrusel">
		    <a class="carousel-item" onclick="openCity(event, 'uno')" href="#one!"><img src="views/images/caratula.jpg" alt=""></a>

		    <a class="carousel-item" onclick="openCity(event, 'dos')" href="#two!"><img src="views/images/vengadores.jpg"></a>

		    <a class="carousel-item"  onclick="openCity(event, 'tres')" href="#three!" ><img src="views/images/thor.png"></a>

		    <a class="carousel-item"  onclick="openCity(event, 'uno')" href="#four!"><img src="views/images/caratula.jpg"></a>

		    <a class="carousel-item"  onclick="openCity(event, 'dos')" href="#five!"><img src="views/images/vengadores.jpg"></a>
  		</div>
	</div>
	<div class="col l4">
		<button class="botones" style="background-color: rgba(47, 72, 88,0.6); float:right;width: 60%;height: 80px;font-size: 28px;">Descargar <i class="fa fa-download"></i></button>
	</div>

</div>
	
<video  class="overlay" id="culito">
  <source src="views/peliculas/35.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<video  class="overlay" id="culitoDos">
  <source src="https://www.w3schools.com/html/movie.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<div class="container-fluid">
	<div class="row">
		<div class="col l4 listaPelis">
			
			<h3>Peliculas</h3>
			<p style="opacity: 0;">Lista de peliculas</p>
			<div class="tab">
			  <button class="tablinks" onclick="openCity(event, 'uno')" id="defaultOpen">221542 &nbsp|&nbsp  Piratas del Caribe En Mareas Misteriosas</button>
			  <button class="tablinks" onclick="openCity(event, 'dos')">221542 &nbsp|&nbsp Los Vengadores - Infinity War</button>
			  <button class="tablinks" onclick="openCity(event, 'tres')">221542 &nbsp|&nbsp Thor - Ragnarok</button>
			  <button class="tablinks" onclick="openCity(event, 'uno')" id="defaultOpen">221542 &nbsp|&nbsp  Piratas del Caribe En Mareas Misteriosas</button>
			  <button class="tablinks" onclick="openCity(event, 'dos')">221542 &nbsp|&nbsp Los Vengadores - Infinity War</button>
			  <button class="tablinks" onclick="openCity(event, 'tres')">221542 &nbsp|&nbsp Thor - Ragnarok</button><button class="tablinks" onclick="openCity(event, 'uno')" id="defaultOpen">221542 &nbsp|&nbsp  Piratas del Caribe En Mareas Misteriosas</button>
			  <button class="tablinks" onclick="openCity(event, 'dos')">221542 &nbsp|&nbsp Los Vengadores - Infinity War</button>
			  <button class="tablinks" onclick="openCity(event, 'tres')">221542 &nbsp|&nbsp Thor - Ragnarok</button><button class="tablinks" onclick="openCity(event, 'uno')" id="defaultOpen">221542 &nbsp|&nbsp  Piratas del Caribe En Mareas Misteriosas</button>
			  <button class="tablinks" onclick="openCity(event, 'dos')">221542 &nbsp|&nbsp Los Vengadores - Infinity War</button>
			  <button class="tablinks" onclick="openCity(event, 'tres')">221542 &nbsp|&nbsp Thor - Ragnarok</button><button class="tablinks" onclick="openCity(event, 'uno')" id="defaultOpen">221542 &nbsp|&nbsp  Piratas del Caribe En Mareas Misteriosas</button>
			  <button class="tablinks" onclick="openCity(event, 'dos')">221542 &nbsp|&nbsp Los Vengadores - Infinity War</button>
			  <button class="tablinks" onclick="openCity(event, 'tres')">221542 &nbsp|&nbsp Thor - Ragnarok</button>
			</div>

			<button class="botones" >Antiguas <i class="fas fa-caret-down"></i></button>
			<button class="botones" style="float: right;">Nuevas <i class="fas fa-caret-up"></i></button>

		</div>
		<div id="uno" class="col l4 cardos tabcontent" style="padding: 0;">
			<img class="caratula" src="views/images/caratula.jpg" alt="">

			<p> <strong>Piratas del Caribe</strong>  <br> Genero: Accion <br> Precio: 80 BsS <br> Peso: 5.0Gb<br>Codig: 0822554</p>
			<button onclick="on('culito')"><h4>Ver trailer&nbsp&nbsp&nbsp<i class="fa fa-play-circle"></i></h4></button>
		</div>

		<div id="dos" class="col l4 cardos tabcontent" style="padding: 0;">
			<img class="caratula" src="views/images/vengadores.jpg" alt="">
			<p><strong>22152 - Los Vengadores - Infinity War</strong> <br> Genero: Accion <br> Duracion: 2:00:00 <br> Peso: 5.0Gb<br>Codig: 2322554</p>
			<button onclick="on('culitoDos')"><h4>Ver trailer&nbsp&nbsp&nbsp<i class="fa fa-play-circle"></i></h4></button>
		</div>

		<div id="tres" class="col l4 cardos tabcontent" style="padding: 0;">
			<img class="caratula" src="views/images/thor.png" alt="">
			<p><strong>Thor - Ragnarok</strong> <br> Genero: Accion <br> Duracion: 1:55:00 <br> Peso: 5.0Gb <br>Codig: 0122554</p>
			<button onclick="on('culito')"><h4>Ver trailer&nbsp&nbsp&nbsp<i class="fa fa-play-circle"></i></h4> </button>
		</div>
		<div class="col l4 generos">
				<h2 style="text-align: center;border-radius: 20px; ">Categorias </h2>
				<button class="categorias activo">Alfabetico<i class="fa fa-language"></i></button>
				<button class="categorias activo">Lanzamiento<i class="fa fa-star"></i></button>
				<button class="categorias activo">Aventura<i class="fa fa-rocket"></i></button>
				<button class="categorias activo">Comedia<i class="fa fa-laugh-squint"></i></button>
				<button class="categorias activo">Romance<i class="fa fa-heart"></i></button>
				<button class="categorias activo">Drama<i class="far fa-sad-cry"></i></button>
				<button class="categorias activo">Accion<i class="fas fa-fire"></i></button>
				<button class="categorias activo">Terror<i class="fa fa-skull"></i></button>
				<button class="categorias activo">Musicales<i class="fa fa-music"></i></button>
				<button class="categorias activo">Ficcion<i class="fab fa-drupal"></i></button>
				<button class="categorias activo">Suspenso<i class="far fa-meh-blank"></i></button>
				<button class="categorias activo">Infantiles<i class="fab fa-fort-awesome"></i></button>
				<button class="categorias activo">Clasicas<i class="fa fa-glasses"></i></button>
				
		</div>
	</div>

</div>


