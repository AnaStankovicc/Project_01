<?php

function emptyInputRegistration($name, $email, $username, $password) {
    //   $result;
      if (empty($name) || empty($email) || empty($username) || empty($password)) {
        $result = true;
      } 
      else {
        $result= false;
      }
      return $result;
}

function invalidUsername($username) {
	// $result;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function invalidEmail($email) {
	// $result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}


function UserExists($conn, $username, $email) {
    $sql = "SELECT * FROM `korisnici` WHERE username = ? OR email = ?;";
      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
           header("location: ../registration1.php?error=stmtfailed");
          exit();
      }
  
      mysqli_stmt_bind_param($stmt, "ss", $username, $username);
      mysqli_stmt_execute($stmt);

      $resultData = mysqli_stmt_get_result($stmt);

      if ($row = mysqli_fetch_assoc($resultData)) {
           return $row;
         

      } else {
          $result = false;
          return $result;
      }

      mysqli_stmt_close($stmt);

    }

    function createUser($conn, $email, $username, $password) {
        $sql = "INSERT INTO `korisnici` (`username`,`password`,`email`) VALUES (?,?,?);";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
               header("location: ../registration1.php?error=stmtfailed");
              exit();
          }

          $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
      
          mysqli_stmt_bind_param($stmt, "sss", $username, $hashedPassword , $email);
          mysqli_stmt_execute($stmt);
          mysqli_stmt_close($stmt);
          header("Location: ../registration1.php?registration=success");
    
          $resultData = mysqli_stmt_get_result($stmt);
    
          if ($row = mysqli_fetch_assoc($resultData)) {
               return $row;
             
    
          } else {
              $result = false;
              return $result;
          }
    
          mysqli_stmt_close($stmt);
    
        }

        function emptyInputLogin($user, $password) {
            // $result;
            if (empty($user) || empty($password)) {
                $result = true;
            }
            else {
                $result = false;
            }
            return $result;
        }

        function loginUser($conn, $user, $password) {
            $userExists = UserExists($conn, $user, $user);
        
            if ($userExists === false) {
                header("location: ../login.login.php?error=loginerror");
                exit();
            }
        
            // $passwordHashed = $userExists['password'];
            // $checkPassword = password_verify($password, $passwordHashed );
        
            // if ($checkPassword === false) {
            //     header("location: ../login.login.php?error=wronglogin");
            //     exit();
            // }

            // else if ($checkPassword === true) {
                session_start();
                $_SESSION["userid"] = $userExists["id"];
                $_SESSION["username"] = $userExists["username"];
                header("location: ../login.login.php");
                exit();
            }
        //}
?>

