<?php
function mVerificaSesion(){
    if (isset($_SESSION["SSValida"])){
        if ($_SESSION["SSValida"] != 1){
            return 0;
        }
        return 1;
    }else
        return 0;
}
          
?> 
