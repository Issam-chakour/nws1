<!doctype html>
<html lang="ar" dir="rtl">

<head>
	<title> home </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="../css/style.css">

	<!--  -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

	<!--  -->


	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

	<!--  -->

	

	


	
</head>

<body dir="rtl">
<marquee behavior="slide" direction="right"  > <?php 
  // connect to database
  $db = mysqli_connect('localhost', 'root', '', 'newsmar');

  $sql = "select * from news";
    $data = mysqli_query($db, $sql);
while ($row = mysqli_fetch_assoc($data)) {
	echo "  <p class='title' >" .$row['topic'] ." ". '<i class="far fa-newspaper"></i>' . "  "  . "</p>";
 }
?>
</marquee>


<nav class="navbar navbar-expand-lg navbar-dark" id="nav-bg" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav  mt-2 mt-lg-0" id="mynav">
     
	  <li class="nav-item dropdown"  >
        <a class="nav-link dropdown-toggle"  href="#" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
		الأخبار
        </a>
        <ul class="dropdown-menu " aria-labelledby="navbarScrollingDropdown">
		<li><a class="dropdown-item   active " href="homepage.php">الرئيسية </a></li>
          <li><a class="dropdown-item " href="nat_news.php"> الأخبار الوطنية </a></li>
          <li><a class="dropdown-item  " href="int_news.php"> الأخبار الدولية </a></li>
          <li><a class="dropdown-item " href="sports_news.php"> الأخبار الرياضية </a></li>
		  <li><a class="dropdown-item " href="others_news.php">  أخرى </a></li>
        </ul>
	  </li>
	  <li class="nav-item"  >
        <a class="nav-link ml-2" href="about.php"> من نحن </a>
      </li>
	  <li class="nav-item ">
        <a class="nav-link ml-2" href="callus.php">اتصل بنا </a>
      </li>
	  <li  class="nav-item ">
        <a  class="nav-link ml-2" href="#">COVID-19 </a>
      </li>
     
	  <div class="col-md-2 d-flex" >
	<div class="social-media">
		<p class="d-flex" id="nav-icon" >
			<a href="#" class="d-flex align-items-center justify-content-center ">
			<i class="fab fa-facebook-f"></i></a>
			<a href="#" class="d-flex align-items-center justify-content-center">
			<i class="fab fa-instagram"></i>
			</a>
			<a href="#" class="d-flex align-items-center justify-content-center">
			<i class="fab fa-twitter"></i>
			</a>
			<a href="#" class="d-flex align-items-center justify-content-center">
			<i class="fab fa-youtube"></i>
			</a>
		</p>
	</div>
</div>
    </ul>
  </div>
</nav>
<!-- header -->
<div class="container">
<div class="row">
<div class="col-12">
<h1 >HEADER2</h1> 
</div>
</div>
</div>

<!-- body -->
<div class="mx-3">
  <div class="row">
  <!-- all news-->
  <?php
    // connect to database
    $db = mysqli_connect('localhost', 'root', '', 'newsmar');
	
	
    $query = "select * from news order by id desc ";
    $result = mysqli_query($db, $query);
	
    if (!$result) {
		die("Error in database");
    }


	$sql = "select * from news order by id desc limit 5";
    $data = mysqli_query($db, $sql);
	
    if (!$result) {
		die("Error in database");
    }

    ?>


	<div class="col-md-3" id="side">
		<div class="row">
		<?php
			while ($row = mysqli_fetch_assoc($data)) { ?>
			<div class="col-md-12">
			<div class="card" style="width: 18rem;">
				<ul class="list-group list-group-flush">
					<li class="list-group-item"><?php echo $row['topic'] ?></li>
					<li class="list-group-item">كاتب المقال:  <?php echo $row['author'] ?></li>
				</ul>
			</div>	
			</div>
			
			
			
		<?php } ?>
	</div>
  </div>


<div class="col-md-9">
	<div class="row">
<?php
    while ($row = mysqli_fetch_assoc($result)) { ?>
	 <div class="col-md-6">
		<a class="link" href="news.php?id=<?php echo $row['id'] ?>">
	 <div class="card mb-3 height" style="max-width: 540px">
	 <div class="row g-0">
		<div class="col-md-4">
		<img src="../img/img.jpg" class="img-fluid rounded-start" alt="...">
		</div>
		<div class="col-md-8">
		<div class="card-body">
			<h5 class="card-title"><?php echo $row['topic'] ?></h5>
			<p class="card-text">كاتب المقال:  <?php echo $row['author'] ?>  </p>
			<p class="card-text"><small class="text-muted">تاريخ النشر: <?php echo $row['datecreated'] ?>   </small></p>
		</div>
	 </div>
	</div>
	</div>
	</a>
</div>
	
	
	
<?php } ?>
</div>
</div>
<!-- end ... news-->

 

    
  </div>
</div>
  <footer>

<div class="col-md-4 d-flex">

	  <!-- As a link -->
<nav class="navbar">
  <a class="navbar-brand" href="about.php">من نحن </a>
</nav>
<nav class="navbar">
  <a class="navbar-brand" href="about.php">اتصل بنا   </a>
</nav>
<nav class="navbar">
  <a class="navbar-brand" href="about.php"> COVID-19 </a>
</nav>
	<div class="social-media" >
		<p class="d-flex" id="footer-icon">
			<a href="#" class="d-flex align-items-center justify-content-center "><span
			class="fab fa-facebook-f"><i class="sr-only">Facebook</i></span></a>
			<a href="#" class="d-flex align-items-center justify-content-center"><span
			class="fab fa-twitter"><i class="sr-only">Twitter</i></span></a>
			<a href="#" class="d-flex align-items-center justify-content-center"><span
			class="fab fa-instagram"><i class="sr-only">Instagram</i></span></a>
			<a href="#" class="d-flex align-items-center justify-content-center"><span
			class="fab fa-youtube"><i class="sr-only">youtube</i></span></a>
		</p>
	</div>
</div>
    </ul>
  </div>
 
 
</footer>


	<!-- bootstrap link -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
		integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
		crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
		crossorigin="anonymous"></script>

</body>

</html>