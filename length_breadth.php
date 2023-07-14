<?php
echo "Enter the length of rectangle: ";
fscanf(STDIN,"%d", $a);
echo "Enter the breadth of the rectangle: ";
fscanf(STDIN,"%d", $b);
$c=$a*$b;
fprintf(STDOUT,"area=%d",$c);
print("\n");
?>