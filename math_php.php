<html>
<head>
</head>

<body>

<?php
    echo(pi()) ;

    echo("<br>");

    function min_max()
    {
        $min_ = min(0 , 1 , 1 , 0 ,-2);
        print($min_) ;
        echo("<br>") ;

    }

min_max();

function logical($a , $b )
{   
    if( $a <> $b)
        echo("not equal") ;
    else
        echo("equal");
}
echo("<br>");
logical(1,10);

echo("<br>");


function check_switch($a)
{
    switch($a)
    {
        case 12 :
            echo("Yes got it");
            break ;
        case 13:
            echo("not got") ;
            break ;
        default:
            echo("No match found");
        
    }
}


check_switch(15) ;

echo("<br>");
function prnt()
{   
    $i = 1 ;
    $sum = 0 ;
    while( $i <= 100)
    {
        $sum += $i ;
        ++$i ;
    }
    return($sum) ;
}

echo "the result is = " .prnt();
echo("<br>") ;

?>


</body>
</html>