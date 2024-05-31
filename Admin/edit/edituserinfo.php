<?php

require(__DIR__ . "/../../connections/connection.php");

if (isset($_POST['upd_userfname'])){


    $uid = $_POST['uID'];
    $upd_userfname = $_POST['upd_userfname'];
    $upd_usermname = $_POST['upd_usermname'];
    $upd_userlname = $_POST['upd_userlname'];
    $sql1 = $conn->prepare("UPDATE tbl_user_info SET user_fname = :user_fname, user_mname = :user_mname, user_lname = :user_lname, WHERE user_info_id = :user_info_id");

    if($sql1->execute()){
        echo "Success";
    } else {
        echo "Failed";
    }


}
?>