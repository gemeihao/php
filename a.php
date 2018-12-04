<?php
for ($a = 1;$a<=9;$a++){
    for ($b=1;$b<=$a;$b++){
        echo $b."*".$a."=".$a*$b."\t";
    }
    echo  nl2br("\n");
}
?>