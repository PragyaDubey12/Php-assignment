<!-- 1.	Create a program for a shopping cart. If the total price is over Rs. 5000, apply a 10% discount; otherwise, log the original price. -->
<?php
$price= 5999;
if ($price>=5000)
{
    $d_price=$price-($price*0.1);
}
else
{
    $d_price=$price;
}
echo "Total price to be given".$d_price;
?>
