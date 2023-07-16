<?php
print "Enter the first number: ";
fscanf(STDIN,"%d",$first_number);
print "Enter the second number: ";
fscanf(STDIN,"%d",$second_number);
fprintf(STDOUT,"BEFORE SWAP: %d",$first_number);
fprintf(STDOUT,"BEFORE SWAP : %d",$second_number);
$swap_01 = $first_number;
$first_number=$second_number;
$second_number=$swap_01;
echo "\n";
fprintf(STDOUT,"AFTER SWAP: %d",$first_number);
echo "\n";
fprintf(STDOUT,"AFTER SWAP : %d",$second_number);
?>