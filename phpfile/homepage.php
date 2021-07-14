<!doctype html>
<html lang="ar" dir="rtl">

<head>
	<title> home </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="../css/styleh.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

	
</head>

<body dir="rtl">
	<div>
	<h1>NEWS</h1>
	</div>

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
			<a href="#" class="d-flex align-items-center justify-content-center "><span
					class="fa fa-facebook "><i class="sr-only">Facebook</i></span></a>
			<a href="#" class="d-flex align-items-center justify-content-center"><span
					class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			<a href="#" class="d-flex align-items-center justify-content-center"><span
					class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			<a href="#" class="d-flex align-items-center justify-content-center"><span
					class="fa fa-youtube"><i class="sr-only">youtube</i></span></a>
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
<div class="container">
  <div class="row">
  <!-- all news-->
  <div class="col-md-9">
    <?php
    // connect to database
    $db = mysqli_connect('localhost', 'root', '', 'newsmar');


    $query = "select * from news ";
    $result = mysqli_query($db, $query);

    if (!$result) {
      die("Error in database");
    }
    ?>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {

echo "<div class='posts' >" ;
echo '<h2 class="topic-post" >' . $row['topic'] . '</h2>';
echo '<p>' . ' كاتب المقال : ' . $row['author']  .'</p>';
echo '<p>' . 'تاريخ النشر : ' . $row['datecreated'] . '</p>';
echo '<img class="img-posts" src="../img/img.jpg" alt="news">' ;
echo '<p class="details" >' . $row['details'] . '</p>';
echo  '<div>';

echo '</div>';
echo "</div>" ;
} ?>
  </div>
 

  <!-- end ... news-->
  <div class="col-md-3" id="side">
      side
    </div>
    
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
					class="fa fa-facebook fa-2x "><i class="sr-only">Facebook</i></span></a>
			<a href="#" class="d-flex align-items-center justify-content-center"><span
					class="fa fa-twitter fa-2x"><i class="sr-only">Twitter</i></span></a>
			<a href="#" class="d-flex align-items-center justify-content-center"><span
					class="fa fa-instagram fa-2x"><i class="sr-only">Instagram</i></span></a>
			<a href="#" class="d-flex align-items-center justify-content-center"><span
					class="fa fa-youtube fa-2x"><i class="sr-only">youtube</i></span></a>
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