<?php
$steps=8000;
if ($steps<=5000)
{
    echo "Fitness level is Beginner";
}
else if ($steps>5000 and $steps<=10000)
{
    echo "Fitness level is Intermediate";
}
else 
{
    echo "Fitness level is Advanced";
}
?>
