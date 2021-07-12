<!DOCTYPE html>
<?php

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'newsmar');

// when login ...
session_start();
if (!isset($_SESSION['LOGIN'])) {
    header('Location: loginpage.php');
    exit();
} else if ($_SESSION["typeuser"] !== "مدير") {
    header('Location: admincontrol.php');
    exit();
    // i will remove this ...
}
//   <!-- sign up --> <!-- sign up --> <!-- sign up --> <!-- sign up --> <!-- sign up --> <!-- sign up -->

//  


if (isset($_POST["signup"])) {
    $ps = $_POST["Password"];
    $password_hash = password_hash($ps, PASSWORD_DEFAULT);
    $username =  $_POST["username"];
    $type =  $_POST["typeadmin"];
    if (empty($_POST["username"])) {
        $error_signup = "<label  class='text-danger' >Enter username </label>";
    } else if (empty($password_hash)) {
        $error_signup = "<label class='text-danger'>Enter Password</label>";
    } elseif (empty($_POST["username"])) {
        $error_signup = "<label class='text-danger'>Enter Type</label>";
    } else {

        $query = " INSERT INTO loginadmin(username,password ,typeuser)VALUES('$username','$password_hash' , '$type')";
        $result = mysqli_query($db, $query);
    }
}

if (isset($_POST["logout"])) {
    session_unset();
    session_destroy();
    header("location: loginpage.php");
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add writer</title>
</head>


<body dir="rtl">

    <!-- SIGN UP -->
    <!-- SIGN UP -->
    <!-- SIGN UP -->
    <!-- SIGN UP -->
    <!-- SIGN UP -->
    <form method="post">
        <h1> إظافة مدير / كاتب </h1>
        <?php
        if (isset($error_signup)) {
            echo $error_signup;
        }
        ?>
        <p>
            <label for="username" data-icon="u">إسم المستخدم</label>
            <input name="username" type="text" placeholder="username" />
        </p>

        <p>
            <label for="Password" data-icon="p"> كلمة السر </label>
            <input type="password" name="Password" placeholder="eg. X8df!90EO" />
        </p>
        <p>
            <label for="typeadmin" data-icon="p"> الصفة </label>
            <select name="typeadmin">
                <option value="مدير"> مدير </option>
                <option value="كاتب"> كاتب </option>
            </select>
        </p>
        <p>
            <input style="background-color:#EF711D; color:#fff;" type="submit" name="signup" value="signup" />
        </p>
        <?php
        if (isset($message)) {
            echo $message;
        }
        ?>
    </form>
    <form method='post'> <button style="background-color: #EF711D; border: none; color:aliceblue;" id='btn' type='submit' name='logout'> LOGOUT </button> </form>

</body>

</html>