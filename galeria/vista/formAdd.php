

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Galeria</title>

  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark px-5">
      <a class="navbar-brand">Agrega tu imagen</a>
      <div class="form-inline">
        <a href='../index.php'>
          <button class="btn btn-light mr-2 my-2 my-sm-0" 
           type="submit">administrar imagenes</button>
        </a>
        <a href='../../mensajes.php'>
          <button class="btn btn-light my-2 my-sm-0" 
           type="submit">Ir a mensajes</button>
        </a>
      </div>
    </nav>
    <br>

    <div class="container">
      <div class='row'>
        <div class='col-md-8 card'>
          <h4 class='m-3'>Agregar imagen</h4><hr>
          <form action='../modelo/valImagen.php' method='post' 
           class='card-body' enctype="multipart/form-data">
            <input type='text' class='form-control mb-3' 
             name='titlePost' placeholder='Nombre'>
            <input type='text' class='form-control mb-3' 
             name='descriptionPost' placeholder='Descripcion'>
            
            
            <div class="input-group mb-3">
              <div class="custom-file">
                <input type="file" class="custom-file-input" 
                 id="inputGroupFile02" name='imagePost'>
                <label class="custom-file-label"
                 for="inputGroupFile02">Selecciona imagen</label>
              </div>
            </div>
                 
            <input type='submit' class='btn btn-block btn-primary' 
             name='insertarBtn' value='Enviar'>
          </form>
        </div>
      </div>
    </div>
    <br>
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
   <!-- Optional JavaScript -->
  <script>

  $('.custom-file-input').on('change', function(event) {
    var inputFile = event.currentTarget;
    
    $(inputFile).parent()
        .find('.custom-file-label')
        .html(inputFile.files[0].name);
  });

  </script>
  </body>
</html>