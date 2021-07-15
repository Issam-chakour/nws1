<!doctype html>
<html lang="ar" dir="rtl">

<head>
	<title> home </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="../css/style.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-gXt9imSW0VcJVHezoNQsP+TNrjYXoGcrqBZJpry9zJt8PCQjobwmhMGaDHTASo9N" crossorigin="anonymous">

	
</head>



<div class="container">
  <div class="row">
  <!-- all news-->
  <?php
    // connect to database
    $db = mysqli_connect('localhost', 'root', '', 'newsmar');

	if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($db,$_GET['id']);

        $query = "select * from news where id=$id ";
        $result = mysqli_query($db, $query);
        
        $new = mysqli_fetch_assoc($result);
        if (!$result) {
            die("Error in database");
        }
        


        
    }

    if($new){
        $cat = $new['category'];
        $db = mysqli_connect('localhost', 'root', '', 'newsmar');
        $sql = "select * from news where category='$cat' limit 2 ";
        $data = mysqli_query($db, $sql);
    }
    ?>

<div class="col-md-10">
	
<?php
    if ($new) { ?>
	<div class="card" style="width: 100%;">
  <img src="../img/img.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title  "><?php echo $new['topic'] ?></h5>
    <p class="card-text ">كاتب المقال:  <?php echo $new['author'] ?>  </p>
	<p class="card-text "><small class="text-muted">تاريخ النشر: <?php echo $new['datecreated'] ?>   </small></p>
    <p class="card-text">  <?php echo $new['details'] ?></p>

    <div class="row">
<p class="h5 mt-5">أخبار ذات صلة</p>
<?php
    while ($row = mysqli_fetch_assoc($data)) { ?>
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
</div>   
<?php } ?>

</div>
<!-- end ... news-->
<div class="col-md-2" id="side">
	side
  </div>
 

    
  </div>