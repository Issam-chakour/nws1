<!DOCTYPE html>
<?php
// connect to database
$db = mysqli_connect('localhost', 'root', '', 'newsmar');

// when login ...
session_start();
if (!isset($_SESSION['LOGIN'])) {
    header('Location: loginpage.php');
    exit();
}


if (isset($_POST['del'])) {

    $newid1 = $_POST['newid'];
    $newtopic1 = $_POST['newtopic'];
    $newdetails1 = $_POST['newdetails'];

    $sqls = " DELETE FROM news WHERE id='$newid1' ";
    mysqli_query($db, $sqls);
    header('location: admincontrol.php');
}

if (isset($_POST['edit'])) {
    $newid1 = $_POST['newid'];
    $newtopic1 = $_POST['newtopic'];
    $newdetails1 = $_POST['newdetails'];

    $sqls = " UPDATE  news SET `topic`= '$newtopic1' , `details`='$newdetails1' WHERE id='$newid1' ";

    mysqli_query($db, $sqls);
    header('location: admincontrol.php');
}
if (isset($_POST["logout"])) {
    session_unset();
    session_destroy();
    header("location: loginpage.php");
}


?>

<html lang="en">

<head>

    <title> </title>
    <link rel="stylesheet" type="text/css" href="./css/style1.css">
</head>

<body dir="rtl">
    <div class="headerhome">
        <?php if ($_SESSION["typeuser"] === "مدير") {  ?>
            <h2>صفحة المدير </h2>

        <?php } ?>
        <?php if ($_SESSION["typeuser"] === "كاتب") {  ?>

            <h2>صفحة الكاتب </h2>
        <?php } ?>


        <h2>
            <?php echo "welcome " . " " . $_SESSION["USERNAME"]  ?>
        </h2>

    </div>
    <form method="post" class="style1.css" action="admincontrol.php" style="text-align: center">
        <button style="width: 150px;height: 50px;font-size: x-large;color: #0026ff"><a href="homepage.php" target="_target">الصفحة الرئيسية </a></button>
        <button style="width: 150px;height: 50px;font-size: x-large;color: #0026ff"><a href="addnews.php">إضافة خبر جديد </a></button>
        <?php if ($_SESSION["typeuser"] === "مدير") {  ?>
            <button style="width: 150px;height: 50px;font-size: x-large;color: #0026ff"><a href="signuppage.php">اضافة كاتب</a></button>

        <?php } ?>

    </form>
    <form method='post'> <button style="background-color: #EF711D; border: none; color:aliceblue;" id='btn' type='submit' name='logout'> LOGOUT </button> </form>

    <!-- dashboard -->

    <form method="post">

        <!-- dashboard-->

        <aside>

            <div id="div">

                <h2> dashboard</h2>

                <!-- input id -->
                <legend>Id</legend>
                <input type="number" name="newid"> <br>
                <!-- input Address -->
                <legend> TPIC </legend>
                <input type="text" name="newtopic"> <br>
                <!-- input Address -->
                <legend> DETAILS </legend>
                <input type="text" name="newdetails"> <br>

                <!-- button action -->
                <button name="del">Delete</button>
                <button name="edit">Edite</button>

            </div>

        </aside>

    </form>
    <!-- FORM end -->
    </div>

    <!-- dashboard ... END-->

    <!-- Posts news -->

    <table dir="rtl" style="font-size: 30px;width:100%">
        <tr>
            <th> ت</th>
            <th>القسم</th>
            <th>عنوان الخبر</th>
            <th>التفاصيل</th>

        </tr>
        <td> <?php
                // connect to database
                $db = mysqli_connect('localhost', 'root', '', 'newsmar');

                $query = "select * from news ";
                $result = mysqli_query($db, $query);

                if (!$result) {
                    die("Error in query");
                }
                ?>
            <?php

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<li>' . $row['id'] . '</li>';
            } ?></td>


        <td> <?php

                $query = "select * from news ";
                $result = mysqli_query($db, $query);

                if (!$result) {
                    die("Error in query");
                }
                ?>
            <?php

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<li>' . $row['category'] . '</li>';
            } ?></td>

        <td> <?php

                $query = "select * from news ";
                $result = mysqli_query($db, $query);

                if (!$result) {
                    die("Error in query");
                }
                ?>
            <?php

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<li>' . $row['topic'] . '</li>';
            } ?></td>

        <td> <?php

                $query = "select * from news ";
                $result = mysqli_query($db, $query);

                if (!$result) {
                    die("Error in query");
                }
                ?>
            <?php

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<li>' . $row['details'] . '</li>';
            } ?></td>



        <tr>
            <td>
            </td>


</body>


</html>