<?php

ini_set("memory_limit", "1024M");
header("Content-type: text/plain");
echo date("H:m:s"), "\n";

for ($i = 0; $i < 1000; $i++)
{

    echo date("H:m:s"),"\n";

    for ($r = 0; $r < 100000; $r++){
    	$X.=  tan(M_LNPI+log(ceil(  date("s")*M_PI*M_LNPI+100)));
    }

    ob_flush();
    flush();

}

echo "work! $x";

?>
