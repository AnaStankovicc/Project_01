<?php
include_once("../php/initdb.php");
if(isset($_POST['login-submit'])) {
    $conn = new mysqli('localhost','root','', 'projekat');

    $user = $_POST['user'];
    $password = $_POST['psw'];

    require_once 'funkcije.php';

    if (emptyInputLogin($user, $password) !== false) {
        header("Location: ../login.login.php?error=emptyfields");
        exit();
    }

   loginUser($conn, $user, $password);

} 
else {
    header("Location: ./login.login.php");
        exit();
}


//    include_once("../php/initdb.php");
//    if(isset($_POST['login-submit'])) {
//        $conn = new mysqli('localhost','root','', 'projekat');
   
//        $user = $_POST['user'];
//        $password = $_POST['psw'];

//     if (empty($emailuid) || empty($password)) {
//         header("Location: ../index1.php?error=emptyfields");
//         exit();
//     }
//     else {
//         $sql = "SELECT*FROM `korisnici` WHERE `username`=? OR `email`=?;";
//         $stmt = mysqli_stmt_init($conn);
//         if(!mysqli_stmt_prepare($stmt,$sql)) {
//             header("Location: ../index1.php?error=sqlerror");
//         exit();
//         }
//         else {

//            mysqli_stmt_bind_param($stmt, "ss", $emailuid, $emailuid);
//            mysqli_stmt_execute($stmt);
//            $result = mysqli_stmt_get_result($stmt);
//            if ($row = mysqli_fetch_assoc($result)) {
             
//              $pswCheck = password_verify($password, $row['password']);
//              if ($pswCheck == false) {
//               header("Location: ../index1.php?error=wrongpwd1");
//               exit();
//              }

//              else if($pswCheck == true) {
//                  session_start();
//                  $_SESSION['id'] = $row['id'];
//                  $_SESSION['username'] = $row['username'];
//                  $_SESSION['email'] = $row['email'];

//                  header("Location: ../index1.php?login=success");
//                  exit();
//              }
//              else {
//                 header("Location: ../index1.php?error=wrongpwd2");
//                 exit();
//              }

//            }
//            else {
//             header("Location: ../index1.php?error=nouser");
//             exit();
//            }

//         }
//     }

// }

// else {
//     header("Location: ../shop1.php");
//     exit();
// }


?>