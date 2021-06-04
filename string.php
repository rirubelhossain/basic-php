<?php

class a{

    public $a ;
    public $b ;

    function get($a , $b )
    {
        $this->a = $a;
        $this->b = $b;
    }

}

$var = new a ;

echo $var.get(1,2);


$sort_again = array(2, 1, 4 ,3);
sort($sort_again);

$count_2 = count($sort_again) ;

echo "the total element is = ".$count_2 ;




?>