<?php
include_once("../php/initdb.php");
if (isset($_POST['reg-submit'])) {
    $conn = new mysqli('localhost','root','', 'projekat');

    // require("funkcije.php");

    $name = $_POST['reg-name'];
    $email = $_POST['reg-email'];
    $username = $_POST['reg-username'];
    $password = $_POST['reg-password'];


    // if(emptyInputRegistration($name, $email, $username, $password) !== false) {
    //     header("Location: ../registration1.php?error=emptyinput");
    //     exit();
    // }
    // if(invalidUsername($username) !== false) {
    //     header("Location: ../registration1.php?error=invaliduid");
    //     exit();
    // }
    // if(invalidEmail($email) !== false) {
    //     header("Location: ../registration1.php?error=invalidemail");
    //     exit();
    // }
    // if(UserExists($conn, $username, $email) !== false) {
    //     header("Location: ../registration1.php?error=usernametaken");
    //     exit();
    // }

    // createUser($conn, $email, $username, $password);




    
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       header("Location: ../registration1.php?error=invalidmail&uid=".$username);
        exit();
     }

     else {
         $sql = "INSERT INTO `korisnici` (`username`,`password`, `email`) VALUES (?,?,?)";
         $stmt = mysqli_stmt_init($conn);
         if (!mysqli_stmt_prepare($stmt, $sql)) {
             header("Location: ../registration1.php?error=sqlerror");
             exit();
         }
         else {
            //  $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

             mysqli_stmt_bind_param($stmt, "sss", $username, $password, $email);
             mysqli_stmt_execute($stmt);
             header("Location: ../login.login.php?signup=success");
             exit();
         }
     }

     mysqli_stmt_close($stmt);
     mysqli_close($conn);

}

else {
    header("Location: ../registration1.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once('initdb.php') ?>
</body>
</html>