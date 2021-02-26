<html>
<head>
</head>

<body>

<?php

function loop()
{
    for($i = 0 ; $i < 10 ; ++$i)
    {   
        if( $i == 4)
        {
            continue ;
        }
        echo("The number is = $i <br>") ;    

    }
        
        
}

loop();

?>


</body>
</html>