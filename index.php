<?php
$nb = rand(0,1000);
$nb2 = rand(0,1000);
$i = 1;
while($nb2 != $nb)
{    
    $nb2 = rand(0,1000);
    $i++;
}
echo "Il a fallu ".$i." tirages pour arriver à trouver le bon nombre";
?>