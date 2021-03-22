<?php

for($i=1;$i<=100;$i++)

{

    if(primo($i))

        echo "El número ".$i." es primo";

    else

        echo "El número ".$i." NO es primo";

}

function primo($num)

{

    $cont=0;

    // Funcion que recorre todos los numero desde el 2 hasta el valor recibido

    for($i=2;$i<=$num;$i++)

    {

        if($num%$i==0)

        {

            # Si se puede dividir por algun numero mas de una vez, no es primo

            if(++$cont>1)

                return false;

        }

    }

    return true;

}

?>