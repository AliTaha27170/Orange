<?php




$connect = mysqli_connect("localhost", "root","0553210166","sand");








//هاذي احذفه بعدين
    if (mysqli_connect_errno ()){
        
        echo " connection error : " .mysqli_connect_error();
        
    }else {
        
        echo "connect okkkk";
        
    }



?>