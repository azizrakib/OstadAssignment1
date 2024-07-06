<?php
$num1=4;
$num2=5;
$num3=6;

printf("The numbers are- %d ,%d and %d \n", $num1, $num2, $num3); 

// if($num1>$num2){
//     if($num1>$num3){
//         printf("The Lagerst number is %d",$num1);
//     }else{
//       printf("The Lagerst number is %d",$num3);  
//     }
// }else{
//     if($num2>$num3){
//         printf("The Lagerst number is %d",$num2);
//     }else{
//         printf("The Lagerst number is %d",$num3);
//     }
// }


if($num1>$num2 && $num1>$num3){
    printf("The Lagerst number is %d",$num1);
}else if($num2>$num1 && $num2>$num3){
    printf("The Lagerst number is %d",$num2);
}else if($num3>$num1 && $num3>$num2){
    printf("The Lagerst number is %d",$num3);
}
?>