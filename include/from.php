<?php


$FirestName = $_POST['firstname'];
$LastName = $_POST['lastname'];
$Email = $_POST['email'];


$errors = [
  'firstnameErrors' => '',
  'lastnameErrors' => '',
  'emailErrors' => '',
];


if(isset($_POST['submit']))
{


if(empty($FirestName)){ 
 $errors['firstnameErrors'] = 'الاسم الاول فارغ';
}

if(empty($LastName)){
  $errors['lastnameErrors'] = 'الاسم الاخير فارغ';
}

if(empty($Email)){
  $errors['emailErrors'] = 'الايميل فارغ ';

}elseif(!filter_var($Email, FILTER_VALIDATE_EMAIL)){
  $errors['emailErrors'] = 'الرجاء كتابة الايميل بشكل صحيح ';
}





  if(!array_filter($errors)){

 
    $FirestName =   mysqli_real_escape_string($conn,$_POST['firstname'] );   
    $LastName   =   mysqli_real_escape_string($conn,$_POST['lastname'] );    
    $Email      =   mysqli_real_escape_string($conn,$_POST['email'] ); 


    $sql=" INSERT INTO users(FirestName , LastName, Email)
    VALUES('$FirestName','$LastName','$Email')";

    if(mysqli_query($conn, $sql)){

      header('Location:'.$_SERVER['PHP_SELF']);
    }else{
     
      echo 'Error: '.mysqli_error($conn);
    }

  }


}

