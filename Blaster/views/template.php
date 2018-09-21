<!DOCTYPE html>
<html lang="es">
<head>
<title>proyecto peliculas</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="views/images/icons/favicon.ico"/>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

<link href="views/plugins/fontawesome-free-5.3.1-web/css/all.css" rel="stylesheet" type="text/css">



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" type="text/css" href="views/css/main.css">

</head>

<body>

	 <?php 
        $modulos = new Enlaces();
        $modulos -> enlacesController();
    ?>


<!--====================================================================================-->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="views/js/main.js"></script>
  
  <script>

    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" activeDos", "");
    }
    document.getElementById(cityName).style.display = "block";


  
}

function on(elculodecristian) {
      document.getElementById(elculodecristian).style.display = "block";
      document.getElementById(elculodecristian).play();
    }

  

      window.onclick = function(event) {
        var modal = document.getElementsByClassName("overlay");
        for (var i = 0; i < modal.length; i++) {
            
            if (event.target == modal[i]) {
              modal[i].style.display = "none";
              modal[i].load();
              modal[i].pause();

          }}
        }
          

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
    
      
  </script>


</body>

</html>
