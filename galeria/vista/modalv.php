

<!-- Modal -->
<div class="modal fade" id="mdl<?php echo $row['ID'];?>" 
tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
        <?php echo $row['TITLE']; ?></h5>
        <button type="button" class="close" 
        data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-body">
        <?php echo $row['DESCRIPTION']; ?>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" 
        data-dismiss="modal">Cerrar</button>
       
      </div>
    </div>
  </div>
</div>