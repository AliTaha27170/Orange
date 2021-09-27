<?php
//ما في الاسفل كله لارسال بيانات الى الداتا بيس 





INCLUDE ('../connect.php');

      
        if (isset($_POST ['signup']))
        { 
        
$name=$_POST[ 'name'];
$email=$_POST[ 'email'];
$pass=$_POST[ 'pass'];
$pass1=$_POST[ 'pass1'];




//الاظافة الى الداتا بيس
$sql = " INSERT INTO users ( username, email,password,repassword ) VALUES ( '$name' , '$email','$pass' , '$pass1') " ;
 
//امر تنفيذ امر الداتا بيس المتغير الي اسمه سي قيو ال اعلاه 
$query = mysqli_query($connect, $sql);


    

        }


?>