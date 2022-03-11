<?php
    // fichero con funciones de ayuda (helpers)
    function verArray($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    function validar1($personas){
        $errorNombre = array("nombre" => "Introduce el nombre");
        $errorApellido = array("apellidos" => "Introduce los apellidos");
        $errorMail = array("mail" => "Introduce el mail");
        for ($i=0; $i < sizeof($personas); $i++) { 
            if(!empty($personas[$i]["nombre"])){
                if(!empty($personas[$i]["apellidos"])){
                    if(!empty($personas[$i]["mail"])){
                        if(strpos($personas[$i]["mail"], "@")){
                            echo "<hr>";
                            echo "<p>ESTA ENTRADA ES CORRECTA</p> " . verArray($personas[$i]);
                        }
                        else{
                            echo "<p>La entrada de " . $personas[$i]["nombre"] . $personas[$i]["apellidos"] . $personas[$i]["mail"] . " es INCORRECTA y el error es: </p><p>" . verArray($errorMail) . "</p>";

                        }
                    }
                    else{
                        echo "<p>La entrada de " . $personas[$i]["nombre"] . $personas[$i]["apellidos"] . $personas[$i]["mail"] . " es INCORRECTA y el error es: </p><p>" . verArray($errorMail)  . "</p>";
                    }
                }
                else{
                    echo "<p>La entrada de " . $personas[$i]["nombre"] . $personas[$i]["apellidos"] . $personas[$i]["mail"] . " es INCORRECTA y el error es: </p><p>" . verArray($errorApellido)  . "</p>";
                }
            }
            else{
                echo "<p>La entrada de " . $personas[$i]["nombre"] . $personas[$i]["apellidos"] . $personas[$i]["mail"] . " es INCORRECTA y el error es: </p><p>" . verArray($errorNombre)  . "</p>";
            }
        }
        
    }
?>
