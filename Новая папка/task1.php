
<?php

function convert_to_int($value): int
{
    return $value;
}

convert_to_int(1.2);

var_dump(convert_to_int(1.2));





function convert_to_float($value): float
{
    return $value ;
}

convert_to_float('8.222');

var_dump(convert_to_float('8.222'));






function convert_to_string($value): string
{
    return $value;
}

convert_to_string(222);

var_dump(convert_to_string(222));







function convert_to_bool($value): bool
{
    return $value;
}

convert_to_bool(1);

var_dump(convert_to_bool(1));





function convert_to_array($array = array("1",  "2" , "3")): array
{
    return array();
}

convert_to_array(1, 2, 3, );

var_dump(convert_to_array(1, 2, 3, ));




function convert_to_null($value)
{
    return null;
}

convert_to_null(0);

var_dump(convert_to_null(0));

?>



