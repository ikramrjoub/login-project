<?php 
if(isset($_POST['register'])){
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    echo "first Name is : " . $firstName . "<br/>" . " last Name is : " . $lastName . "<br/>";
    $email_mobile =$_POST['email-mobile'];
    echo "Email or Mobile : " . $email_mobile . "<br/>";
    $userpassword = $_POST['up-password'];
    echo "password is : " . $userpassword ."<br/>";
    $day = $_POST['birth-day'];
    $month = $_POST['birth-month'];
    $year = $_POST['birth-year'];
    echo "birthday is : "  . $day . "/" . $month . "/" . $year . "<br/>";
    $gender = $_POST['gen'];
    
        echo "gender is :  $gender"  ;
    
}
 else{
    echo "error 404";
}


echo '<pre>';
    print_r($_POST);
    echo '</pre>';


?>