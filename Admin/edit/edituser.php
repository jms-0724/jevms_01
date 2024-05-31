<?php

require(__DIR__ . "/../../connections/connection.php");

if (isset($_POST['upd_username'])){


    $uid = $_POST['uId'];
    $username = $_POST['upd_username'];
    $password = $_POST['upd_password'];
    $userlevel = $_POST['upd_userlevel'];
    $sql1 = $conn->prepare("UPDATE tbl_user SET username = :username, password = :password, userlevel = :userlevel WHERE uid = :uid");
    $sql1->bindParam(':username', $username);
    $sql1->bindParam(':password', $password);
    $sql1->bindParam(':userlevel', $userlevel);
    $sql1->bindParam(':uid', $uid);

    if($sql1->execute()){
        echo "Success";
    } else {
        echo "Failed";
    }


}
?>