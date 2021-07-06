<?php
session_start();
ob_start();
if($_SESSION['global']==0)
{
header("Location:login.php");
}




?>


<?php
include("php/conexionDB.php");

$query =  "SELECT * FROM contacto";
$resultado = mysqli_query($conex,$query);

 ?>








<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Panel Administrador</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="js/jspdf.min.js">
    <link rel="stylesheet" href="js/jspdf.plugin.autotable.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.html">Artropologia  </a>

      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="galeria/index.php">Galeria</a>
        </li>
        </ul>
      </div>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="login.php">Salir</a>
        </li>
      </ul>
    </nav>
  

  

 

  <script type="text/javascript">
    function ver(datos){
      d = datos.split('||');
      $('#id').val(d[0]);
    }
  </script>


<script type="text/javascript">
  function agregarD(datos){
    d = datos.split('||');
    $('#nombreT').val(d[0]);
    $('#talleris').val(d[1]);
    $('#cupop').val(d[2]);
  }
</script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


 




<center><font size=10 color=orange>Mensajes en la pagina</font></center>
        <br><br>


 <div class="container" id="administrador">
      <table class="table">
        <thead class="thead-dark">
          

          <tr>

            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Mensaje</th>
             <th scope="col">ID</th>
            <th scope="col">Acciones</th>
            
          </tr>
        </thead>
        <tbody>
      <?php

        include("php/conexionDB.php");
        $query = mysqli_query($conex,"SELECT * FROM contacto");



        while ($row = mysqli_fetch_array($query)) {
          $datos = $row['nombre']."||".$row['email']."||".$row['mensaje']."||".$row['id'];
          ?>

            <tr>
              
              <td><?php echo $row['nombre'];?>  </td>
              <td><?php echo $row['email'];?>  </td>
              <td><?php echo $row['mensaje']; ?></td>
                 <td><?php echo $row['id']; ?></td>

              
              <td>
                
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modalEliminarc" onclick="verc('<?php echo $datos ?>')"> Eliminar</button>
              </td>
            </tr>

          <?php
        }
       ?>
       </tbody>
      </table>
    </div>

    <br><br>


 <!-- Modal Elimnar Taller -->
  <div class="modal fade" id="modalEliminarc" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Eliminar mensaje</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <h5>Eliminar mensaje</h5>
          <form class="" method="post">
            <input type="text" class="form-control" id="id2" name="id2"  >
            <br>
            <button style="float:right" name="btnDel" class="btn btn-danger" type="submit">Eliminar</button>

            <?php
            include("php/conexionDB.php");
            if (isset($_POST['btnDel'])) {
              if(strlen($_POST['id2']) >= 1 ){
                $tdel = trim($_POST['id2']);

                $sqlDel = " DELETE FROM contacto WHERE id='$tdel' ";

                $execsqlDel = mysqli_query($conex,$sqlDel);

                if ($execsqlDel) {
                  echo "
                  <script type='text/javascript'>

                    alert('Eliminado con exito');
                    window.location='mensajes.php';

                  </script>

                  ";

                }else{

                  echo "
                  <script type='text/javascript'>

                    alert('Ocurrio un error...');
                    window.location='admin.php';

                  </script>

                  ";

                }

              }else{
                echo "
                <script type='text/javascript'>

                  alert('Hay campos vacios');
                  window.location='admin.php';

                </script>

                ";
              }
            }
            ?>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    function verc(datos){
      d = datos.split('||');
      $('#id2').val(d[3]);
    }
  </script>

      













  <script type="text/javascript">
    function ver2(datos){
      d = datos.split('||');
      $('#idc').val(d[0]);
    }
  </script>


<script type="text/javascript">
  function agregarD(datos){
    d = datos.split('||');
    $('#nombreT').val(d[0]);
    $('#talleris').val(d[1]);
    $('#cupop').val(d[2]);
  }
</script>




  </body>
</html>