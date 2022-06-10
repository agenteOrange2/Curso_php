<?php
    echo "<br />";

    //Ejercicio 1: return
    function validarUsuario($email){

            //empty es para evaluar que haya un valor en el campo
        if(empty($email)){
            echo"El email esta vacio";
            //Para que ya no haga la funcion de abajo se coloca un return
            return;
        }
        //Si va el campo vacio, queremos impedir que se ejecute este c[odigo]
        switch ($email) {
            case 'Elliot@fsociety.com':
                echo "Hello friend";
                break;
                case 'tyrell@fsociety.com':
                    echo "Bonsoir Elliot";
                    break;
            
            default:
                echo"Goodbye friend";
                break;
        }
    }

    validarUsuario("Elliot@fsociety.com");
    echo "<br />";
    validarUsuario("tyrell@fsociety.com");
    echo "<br />";
    validarUsuario("");
