<?php
session_start();
require("./connections/connection.php");

if(isset($_SESSION['userid'])){
    if($_SESSION['userlevel'] == 'admin' ){
        header("location: Admin/admin.php");
    } else {
        header("location: Accountant/accountant.php");
    }
}  
// else {
//     header("Location: index.php");
// }
if(isset($_POST['username'])){

    $uname = $_POST['username'];
    $pword =  $_POST['password'];

    // Prepare Statement
    $sql = $conn->prepare("SELECT * FROM tbl_user WHERE username = :username");

    if (!$sql){
        echo "Statement not prepared";
    } else {
        // Bind Parameters
        $sql->bindParam(":username",$uname,PDO::PARAM_STR);

        // Execute Sql Statement
        $sql->execute();

        if($sql->rowCount() > 0 ){
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $hashed_password = $row['password'];

            if(password_verify($pword, $hashed_password)){
                $userlevel = $row['userlevel'];
                $_SESSION['userid'] = $row['uid'];
                $_SESSION['username'] = $row['username'];

                if($userlevel === "Administrator"){
                    $_SESSION['userlevel'] = "admin";
                    echo "admin";
                } else {
                    $_SESSION['userlevel'] = "accountant";
                    echo "accountant";
                }
            } else {
            echo "Incorrect Password";
            }

        } else {
        echo "No User is Found";
        }
    }
    
} else {
    echo "Invalid Request";
}

?>