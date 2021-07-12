<!DOCTYPE html>
<?php  include('server1.php');

// when login ...

if(!isset($_SESSION['LOGIN']) ){
    header('Location: loginpage.php');
    exit();
}

if (isset($_POST["logout"])) {
    session_unset();
    session_destroy();
    header("location: loginpage.php");
}
?>

<html>

<head>

	<title> </title>
	<link rel="stylesheet" type="text/css" href="./css/style1.css">
</head>

<body dir="rtl">
	<div class="headerhome">
		<h2>  إضافة خبر جديد </h2>
	</div>
	<form action="">
	<button style="width: 150px;height: 50px;font-size: x-large;color: #0026ff"><a href="admincontrol.php">صفحة المدير</a></button>

	<button style="width: 150px;height: 50px;font-size: x-large;color: #0026ff"><a href="homepage.php"  target="_target">الصفحة الرئيسية </a></button>
	</form>
	<form method='post'> <button style="background-color: #EF711D; border: none; color:aliceblue;" id='btn' type='submit' name='logout'> LOGOUT </button> </form>

	<form method="post" action="addnews.php">

		<div class="input-group">

			<label>القسم</label>
			<select name="category" style="font-size:x-large;width:200px" value="<?php echo $category; ?>">
				<option>الأخبار الوطنية</option>
				<option>الأخبار الدولية</option>
				<option>الأخبار الرياضية</option>
				<option>أخرى</option>
			</select>
			<div class="input-group">
				<label> عنوان الخبر </label>
				<input type="text" name="topic" style="font-size:x-large;width:200px" value="<?php echo $topic; ?>">

				<div class="input-groups">
					<label> التفاصيل</label>
					<input type="text" name="details" style="font-size:x-large;width:400px;height:300px" value="<?php echo $details; ?>">

					
<div>
<p>صاحب(ة) وتاريخ المقال :</p>
<input name="author" type="text" disabled value="<?php echo  $_SESSION["USERNAME"] ?>" >
<input name="datecreated" type="text"  value="<?php echo  date("Y/m/d "). "". date(" h:i:sa") ?>" /> 
</div>
					
<!-- btn add post -->
					<div class="input-group">
						<button type="submit" style="font-size:x-large;width:100px" name="add">اضافة</button>
					</div>

	</form>
</body>


</html>