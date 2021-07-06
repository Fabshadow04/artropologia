

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Galeria de imagenes</title>
<style>
#ajustarimagen{
width:350px;
height: 240px;
object-fit:cover;
}

</style>
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark px-5">
      <a class="navbar-brand">Galeria de imagenes</a>
      <div class="form-inline">
       
        <a href='../index.html'>
          <button class="btn btn-light my-2 my-sm-0" 
           type="submit">Inicio</button>
        </a>
      </div>
    </nav>
    <br>

    <div class="container">
      <div class="card-columns">
        <?php
          
        include_once 'modelo/conexion.php';
        include_once 'modelo/modelo.php';
        
        $image = new Imagen();
        $rows = $image->mostrar();
        if(!empty($rows)){
          foreach($rows as $row){
        ?>
        <div class="card" data-toggle="modal" 
          data-target="#mdl<?php echo $row['ID'];?>">
          <img class="card-img-top" alt="" id="ajustarimagen"
          src="/galleryCrud/imagesRecop/<?php
          echo $row['IMAGE'];?>">
          <div class='p-3'>
            <h5><?php echo $row['TITLE']; ?></h5>
            <button class="btn btn-info float-right mb-3">Acerca de</button>
          </div>
        </div>
        <?php include 'vista/modalv.php';?>
      <?php }  } ?>    
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>