<?php 
require BASEPATH.'app/model/m_login.php';
require BASEPATH.'app/view/partials/header.php';
?>

    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page" style="font-weight: bold;">LOGIN</li>
      </ol>
    </nav>         
         <form id="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
                <div style="margin-top: 60px; margin-left: 10%;"><span  style="margin-right: 10px;">EMAIL</span><input type="text" name="email"/></div>
                <div style="margin-top: 20px; margin-left: 10%;"><span style="margin-right: 10px;">PASSWORD</span><input type="password" name="password" /></div>
                <div style="margin-top: 40px; margin-left: 10%;">
                    <input type="submit" id="button_ok" name="btnAceptar" value="ACEPTAR">
                </div>                          
        </form>   
        <div style="margin-top: 40px; margin-left: 10%; color: red;">
        <?php 
        if(isset($control)){
            echo $control;
        }
        ?>
        </div>             