<?php
 include 'conn.php';
 session_start();
 if (isset($_POST['login_btn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // $role = $_POST['role'];
    if (empty($username)) {
        echo 'Please Enter Username';
    }else if(empty($password)){
        echo 'Please Enter Password';
    }
    // else if(empty($role)){
    //     echo 'Please Select Role';
    // }
    else{

        $check = "SELECT id,user_type FROM accounts WHERE BINARY user_email = '$username' AND BINARY password = '$password'";
        $stmt = $conn->prepare($check);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            
            foreach($stmt->fetchALL() as $x){
                $user_type = $x['user_type'];
            }
            if($user_type == 'admin'){
                $_SESSION['username'] = $username;
                header('location: page/admin/dashboard.php');
            }else if($user_type == 'client'){
                $_SESSION['username'] = $username;
                header('location: page/client/dashboard.php');    
            }
        }else{
            echo 'Wrong Username or Password';
        }
    }
 }
 if (isset($_POST['Logout'])) {
    session_unset();
    session_destroy();
    header('location: ../index.php');
 }


?>