<?php
    //include "includes/cabecera.php";
    include "Empleado.php";
    include "EmpleadoPlantilla.php";
    include "EmpleadoPorComision.php";
    include "PruebaPolimorf.php";
    include "Empresa.php";
    
    $resultado = "<h1>Empleado:</h1>";
    //Descomentar para hacer la prueba del punto 3.
    /*$empleado1 = new Empleado("Unai", "Perez", "12345678");
    $resultado .= $empleado1->mostrar();
    $empleado2 = new Empleado("Iñaki", "Tiraplegui", "987456321");
    $resultado .= $empleado2->mostrar();*/

    $resultado .= "<h1>Metodos de la clase EmpleadoPlantilla</h1>";
    $empleadoYo = new EmpleadoPlantilla("Iker", "Iparraguirre", "10-123987-12", 1000, 100);
    $empleadoOtro = new EmpleadoPlantilla("Lola", "Etxegaray", "14-78451589-75", 760, 200);
    $resultado .= $empleadoYo->mostrar();
    $resultado .= "<p>Los ingresos con el metodo ingresos(): " . $empleadoYo->ingresos() . "</p>";
    $resultado .= $empleadoOtro->mostrar();
    $resultado .= "<p>Los ingresos con el metodo ingresos(): " . $empleadoOtro->ingresos() . "</p>";
    
    $resultado .= "<h1>Metodos de la clase EmpleadoPorComision</h1>";
    $empleadoUno = new EmpleadoPorComision("Maria", "Belhobide", "18-56895475-56", 10, 2, 5);
    $empleadoDos = new EmpleadoPorComision("Irune", "Arratibel", "15-5265212-22",50, 1, 10);
    $resultado .= $empleadoUno->mostrar();
    $resultado .= "<p>Los ingresos con el metodo ingresos(): " . $empleadoUno->ingresos() . "</p>";
    $resultado .= $empleadoDos->mostrar();
    $resultado .= "<p>Los ingresos con el metodo ingresos(): " . $empleadoDos->ingresos() . "</p>";

    $resultado .= "<h1>Metodos de la clase PruebaPolimorf</h1>";
    $resultado .= "<p>Los ingresos de Belhobide son: " . PruebaPolimorf::calcular($empleadoUno) . "</p>";
    $resultado .= "<p>Los ingresos de Arratibel son: " . PruebaPolimorf::calcular($empleadoDos) . "</p>";

    $resultado .= "<h1>Metodos de la clase Empleado</h1>";
    $empleadoTres = new EmpleadoPlantilla("Karmele", "Arocena", "22-45561256-20", 1200, 200);
    $miEmpresa = new Empresa();
    $miEmpresa->addEmpleado($empleadoUno);
    $miEmpresa->addEmpleado($empleadoOtro);
    $miEmpresa->addEmpleado($empleadoTres);
    $resultado .= $miEmpresa->listarEmpleados();
    $resultado .= "<p>La suma de los ingresos es: " . $miEmpresa->sumaIngresos() . "</p>";

    include "includes/vista_resultado.php";
    //include "includes/pie.php";
?>