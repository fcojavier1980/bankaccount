<?php 

class Accountconnect {
    
    public static function variable_login_query($sql, $param_post=null) {
        

            $db_host="localhost";
            $db_nombre="pruebas";
            $db_usuario="root";
            $db_contra=""; 
            $total_results = 0;   

            try {
                $conn = new PDO("mysql:host=$db_host;dbname=$db_nombre", $db_usuario, $db_contra);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $result=$conn->prepare($sql);
                $result->setFetchMode(PDO::FETCH_ASSOC);
                $result->execute(array('%'.$param_post.'%'));
                $result_num = $result->rowCount();
                if($result_num < 1){
                    $control ="No ha sido correcto el acceso";
                }else{
                    $display['usuarios'] = array(); 
                    while($row = $result->fetch()){
                        $display['usuarios'][] = $row;   
                    }  
                    $total_results = count($display['usuarios']);   
                    $datos_pasados = $display['usuarios'];  
                    $userpath = 'view/usuario.php?id='.$display['usuarios'][0]['id'];
                    header("Location:". APPPATH . $userpath);
                         
                }
            }
            catch(PDOException $e)
                {
                echo "<h1 style='color:red;'>¡ERROR!</h1></br>";    
                echo $sql . "<br>" . $e->getMessage();
                }

            $conn = null;  
                    
        
        if($total_results > 0){
        return $datos_pasados;
        }else{
            return $total_results;
        } 
    }

    public static function variable_select_query($sql, $param_post=null) {

            $db_host="localhost";
            $db_nombre="pruebas";
            $db_usuario="root";
            $db_contra=""; 
            $total_results = 0;   

            try {
                $conn = new PDO("mysql:host=$db_host;dbname=$db_nombre", $db_usuario, $db_contra);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $result=$conn->prepare($sql);
                $result->setFetchMode(PDO::FETCH_ASSOC);
                $result->execute(array('%'.$param_post.'%'));
                $result_num = $result->rowCount();
                if($result_num < 1){

                }else{
                    $display['usuarios'] = array(); 
                    while($row = $result->fetch()){
                        $display['usuarios'][] = $row;   
                    }  
                    $total_results = count($display['usuarios']);   
                    $datos_pasados = $display['usuarios'];  

                }
            }
            catch(PDOException $e)
                {
                echo "<h1 style='color:red;'>¡ERROR!</h1></br>";    
                echo $sql . "<br>" . $e->getMessage();
                }

            $conn = null;  
                    
        
        if($total_results > 0){
        return $datos_pasados;
        }
    }

    public static function variable_update_query($sql, $block, $id ,$param_post=null) {

            $db_host="localhost";
            $db_nombre="pruebas";
            $db_usuario="root";
            $db_contra=""; 
            $total_results = 0;   

            try {
                $conn = new PDO("mysql:host=$db_host;dbname=$db_nombre", $db_usuario, $db_contra);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $result=$conn->prepare($sql);
                $result->setFetchMode(PDO::FETCH_ASSOC);
                $result->execute(array('%'.$param_post.'%'));
                $result_num = $result->rowCount();
                if($result_num < 1){

                }else{
                    header("Location: ../view/" . $block. ".php?id=" .$id);      
                }

            }
            catch(PDOException $e)
                {
                echo "<h1 style='color:red;'>¡ERROR!</h1></br>";    
                echo $sql . "<br>" . $e->getMessage();
                }

            $conn = null;  
                    
        if($total_results > 0){
        return $datos_pasados;
        }
    } 	

}