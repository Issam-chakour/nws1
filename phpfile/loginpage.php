<?php
$message = '';
$error = '';
$error_signup = '';
// connect to database
$db = mysqli_connect('localhost', 'root', '', 'newsmar');
//  <!-- sign in -->

if (isset($_POST["login"])) {

    // error $_POST["Password"] undefined //
    $_POST["Password"] = '';
    $ps = $_POST["Password"];
    $query = "SELECT * FROM loginadmin ";
    $results = mysqli_query($db, $query);

    session_start();
    $ps = $_POST["Password"];
    while ($row = mysqli_fetch_assoc($results)) {
        if ($row["username"] === $_POST["username"] && password_verify($_POST["password"], $row["password"])) {

            $_SESSION["USERNAME"] = $_POST["username"];
            $_SESSION["LOGIN"] = true;
            $_SESSION["typeuser"] = $row["typeuser"];
            header("location: admincontrol.php ");
        }
    }
    if (!isset($_SESSION['LOGIN'])) {
        $error = "<p class='text-danger'>error account not find </p> </br>";
    }
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        $error = "<p class='text-danger'> enter username/password </p> </br>";
    }
}


?>
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login" />
    <meta name="author" content="issam" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body dir="rtl">
    <div class="container">
        <header>
            <h1 style="color:black;">تسجيل <span style="color:#EF711D;">الدخول</span></h1>
        </header>
        <section>
            <div id="container_demo">
                <a class="hiddenanchor" id="toregister"></a>
                <a class="hiddenanchor" id="tologin"></a>
                <div id="wrapper">
                    <div id="login" class="animate form">
                        <form method="post">

                            <!-- LOG IN FORM -->
                            <!-- LOG IN FORM -->

                            <h1 style="color:black;">Log in</h1>
                            <p>
                                <label for="username" data-icon="u"> إسم المستخسدم </label>
                                <input name="username" type="text" placeholder="إسم المستخسدم" />
                            </p>
                            <p>
                                <label for="password" class="youpasswd" data-icon="p"> كلمة السر </label>
                                <input name="password" type="password" placeholder="eg. X8df!90EO" />
                            </p>
                            <?php
                            if (isset($error)) {
                                echo $error;
                            }
                            ?>
                            <p class="login button">
                                <input style="background-color: #EF711D; color:#fff;" type="submit" name="login" value="Login" />
                            </p>

                        </form>
                    </div>
                    <div id="register" class="animate form">


                    </div>

                </div>
            </div>
        </section>
    </div>
</body>

</html>