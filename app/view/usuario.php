<?php 
require '../../config.php';
require BACKPATH.'model/m_usuario.php';
require BACKPATH.'../app/view/partials/header.php';
?>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page" style="font-weight: bold;">USUARIO</li>
        </ol>
      </nav>        
      <div class="input-group mb-3" style="width: 50%; margin-left: 50px; margin-top: 30px;">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1" style="width: 150px;">NOMBRE</span>
        </div>
        <input type="text" class="form-control" placeholder="<?= $user_info[0]['nombre']; ?>" aria-label="Username" aria-describedby="basic-addon1" readonly>
      </div>

      <div class="input-group mb-3" style="width: 50%; margin-left: 50px;">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon2" style="width: 150px;">APELLIDOS</span>
        </div>      
        <input type="text" class="form-control" placeholder="<?= $user_info[0]['apellidos']; ?>" aria-label="Surname" aria-describedby="basic-addon2" readonly>
      </div>

      <div class="input-group mb-3" style="width: 50%; margin-left: 50px;">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon4" style="width: 150px;">EMAIL</span>
        </div>      
        <input type="text" class="form-control" placeholder="<?= $user_info[0]['email']; ?>" aria-label="Surname" aria-describedby="basic-addon3" readonly>
      </div>  
      <div class="input-group mb-3" style="width: 50%; margin-left: 50px;">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon4" style="width: 150px;">TELEFONO</span>
        </div>      
        <input type="text" class="form-control" placeholder="<?= $user_info[0]['telefono']; ?>" aria-label="Surname" aria-describedby="basic-addon4" readonly>
      </div>
      <label for="basic-url" style="margin-left: 30px; font-weight: bold; margin-top: 60px;">DATOS PENDIENTES DE RELLENAR</label>
      <form id="formulario" action="../model/m_usuario.php" method="post"> 
        <div class="input-group mb-3" style="width: 50%; margin-left: 50px; margin-top: 30px;">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon5" style="width: 150px;">IBAN *</span>
          </div>
          <input type="text" class="form-control" value="<?= $user_info[0]['iban'] != '' ? $user_info[0]['iban'] : ''?>" name="iban" id="iban" required aria-describedby="basic-addon5">
 
        </div>
        <div style="margin-bottom: 40px; margin-left: 50px; color: green;">
            <?php 
            if($user_info[0]['iban'] !=""){ ?>
               IBAN ACTUALIZADO 
            <?php } ?>
        </div>         
        <div class="input-group mb-3" style="width: 50%; margin-left: 50px;">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon6" style="width: 150px;">DNI</span>
          </div>
          <input type="text" class="form-control" placeholder="<?= $user_info[0]['dni'] != '' ? $user_info[0]['dni'] : ''?>" name="dni" id="dni" aria-describedby="basic-addon6">
        </div> 
        <div style="margin-bottom: 40px; margin-left: 50px; color: green;">
            <?php 
            if($user_info[0]['dni'] !=""){ ?>
               DNI ACTUALIZADO 
            <?php } ?>
        </div>          
      </div>
        <div class="input-group mb-3" style="width: 50%; margin-left: 50px;">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon7" style="width: 150px;">FACTURACION</span>
          </div>
          <input type="text" class="form-control" placeholder="<?= $user_info[0]['facturation'] != '' ? $user_info[0]['facturation'] : ''?>" name="facturation" id="facturation" aria-describedby="basic-addon7">
        </div>  
        <div style="margin-bottom: 40px; margin-left: 50px; color: green;">
            <?php 
            if($user_info[0]['facturation'] !=""){ ?>
               DIRECCION DE FACTURACION ACTUALIZADA 
            <?php } ?>
        </div>         
        <input type="hidden" class="form-control" value="<?= $user_info[0]['id']; ?>" name="id" id="id" aria-describedby="basic-addon8">
        <div style="width: 50%; margin: 0 auto;">
          <input type="submit" id="button_ok" name="btnAceptar" value="ACEPTAR">
        </div>  
                     
      </form>                
