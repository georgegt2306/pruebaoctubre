<?php
 
$decimal=$_GET['decimal'];
$transformar=$_GET['transformar'];


echo("LA TRANSFORMACIÓN A BASE".$transformar." ES: ". llamar($decimal,$transformar));



    function llamar($n1, $n2){
        
        $acumulador=[];
        
        while ($n1 > $n2) {  
            
            $primerarray= @($n1/$n2);
            $segundoarray= gcd($n1,$n2);
            array_push($acumulador,$segundoarray);

            $n1= intval($primerarray); 
                   
        }
        array_push($acumulador,$n1);

        $invertir= array_reverse($acumulador);

        $respuesta= implode("", $invertir);

        return $respuesta;

    }



	function gcd($a, $b) {
       $t=0;
       $fijo=$b;
     

        while ($b != 0) {          
          $t = $b;
          $b = $a % $b;
          $t2= @($a/$fijo);
      
          $a = $t;

          if(is_float($t2)) break;
                 
        }

        return $b;
	}

?>