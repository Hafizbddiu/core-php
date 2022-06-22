<?php
// $a=10;
// $b=20;
// $c=30;
// if($a>$b && $a>$c){
//     echo " A is Bigger ";
// }
// else if($b>$a && $b>$c){
//     echo " B is Bigger ";
// }else{
//     echo "C is Bigger ";
// }
$d=date("D");
// echo $d;
if($d=="Fri"){
    echo "Happy weekend";
}
else if($d=="Sat"){
    echo "Saterday Start workday";
}
else if($d=="Sun"){
    echo "Sunday Great Day";
}
else if($d=="Mon"){
    echo "Monday Great Day";
}
else if($d=="Thu"){
    echo "Thu Great Day";
}
else if($d=="Wed"){
    echo "Wed Great Day";
}
else{
    echo " working day";
}
?>