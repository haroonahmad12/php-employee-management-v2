<?php
class LoginModel extends Model
{
    function verifyUser($email, $pass)
    {
        $users = parent::get("SELECT * FROM users");

        var_dump($users[0]["email"]);

        if ($email === $users[0]["email"] && $pass === $users[0]["password"]){
            session_start();
            $_SESSION["email"]= $email;
        }

    }

    // $userJson = file_get_contents("../../resources/users.json");
    // $userData = json_decode($userJson, true);

    // if ($email == $userData["users"][0]["email"] && password_verify($pass, $userData["users"][0]["password"])) {
    //     session_start();

    //     $_SESSION["email"] = $email;
    //     $_SESSION["name"] = $userData["users"][0]["name"];
    //     $_SESSION["expTime"] = 10;
    //     $_SESSION["time"] = time();

    //     header("Location:../dashboard.php");
    // } else {
    //     session_start();

    //     $_SESSION["wrongLogin"] = "Wrong email or password!";
    //     header("Location:../../index.php");

}

