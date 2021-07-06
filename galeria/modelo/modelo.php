

<?php
class Imagen extends Conexion{
  
  public function insertar($img){
    if(isset($_POST['insertarBtn'])){
      if(empty($_POST['titlePost']) &&
       empty($_POST['descriptionPost']) && empty($_POST['imagePost'])){
        
        echo '<script>alert("Fill in the blanks");</script>';      
      } else {
        
        $title= $_POST['titlePost'];
        $desc= $_POST['descriptionPost'];
        $image= $img->imageVal();
        
        $sql= 'INSERT INTO IMAGECRUD (TITLE, DESCRIPTION, 
           IMAGE) VALUES ("'.$title.'","'.$desc.'","'.$image.'")';
        
        $this->conectar()->query($sql);
        header('location: ../index.php');
      }
    }
  }
  
  public function mostrar(){
    $data= null;
    
    $sql= 'SELECT * FROM IMAGECRUD';
    if($consulta= $this->conectar()->query($sql)){
      while($row= $consulta->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row; 
      }
    }
    return $data;
  }
  
  public function eliminar($id){
    
    $sql= 'DELETE FROM IMAGECRUD WHERE ID="'.$id.'"';
    $this->conectar()->query($sql);
  }

}
?>