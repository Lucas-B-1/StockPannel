<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname)){
        header("Location: index.php?error=Identifiant requis");
        exit();
    }else if(empty($pass)){
        header("Location: index.php?error=Mot de passe requis");
        exit();
    }else{
        $sql = "SELECT * FROM `login` WHERE user='$uname' AND pass='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_assoc($result);
            if($row['user'] === $uname && $row['pass'] === $pass){
               $_SESSION['user'] = $row['user'];
               $_SESSION['name'] = $row['name'];
               $_SESSION['id'] = $row['id'];
               header("Location: home.php");
               exit();
            }else{
                header("Location: index.php?error=Identifiant ou mot de passe incorrect");
                exit();
            }
        }else{
            header("Location: index.php?error=Identifiant ou mot de passe incorrect");
            exit();
        }
    }
}