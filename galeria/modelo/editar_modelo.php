

<?php
class ImagenEdit extends Conexion{

  public function select($id){
    $data= null;
    
    $sql= 'SELECT * FROM IMAGECRUD WHERE ID="'.$id.'"';
    if($consulta= $this->conectar()->query($sql)){
      while($row= $consulta->fetch(PDO::FETCH_ASSOC)){
        $data[] = $row; 
      }
    }
    return $data;
  }
  
  public function update($id){
    if(isset($_POST['editarBtn'])){
      if(empty($_POST['titlePostEdit']) && 
         empty($_POST['descriptionPostEdit'])){

        echo '<script>alert("Fill in the blanks");</script>';      
      } else {
        
        $title= $_POST['titlePostEdit'];
        $desc= $_POST['descriptionPostEdit'];
        
        $sql= 'UPDATE IMAGECRUD SET TITLE = "'.$title.'", 
              DESCRIPTION= "'.$desc.'" WHERE ID = "'.$id.'"';
        $this->conectar()->query($sql);
        header('location: ../index.php');
      }
    }
  
  }
}