<?php
$title = "APPLICATION SUBMITTED SUCCESFULLY" ;
echo "<br>";
echo "<br>";
echo "<br>";
include 'includes/header.php';
?>

<div class="card text-center">
  <div class="card-header">
    Thank You <?php echo $_POST['name']  ?>
  </div>
  <div class="card-body">
    <h5 class="card-title">Name:     <?php echo $_POST['name'] ?> </h5>
    <p style="text-align:center" class="card-text">Mobile Number:  <?php  echo $_POST['mobile'] ?></p>
    <p class="card-text" >Email id:     <?php   echo $_POST['email'] ?> </p>
    <p class="card-text">Date of Birth:     <?php echo $_POST['dob'] ?></p>
    <p class="card-text">Address:     <?php echo $_POST['address']?></p>
    <p class="card-text">Coaching:     <?php echo $_POST['coaching']  ?></p>





    <a href="#" class="btn btn-primary">Download PDF</a>
  </div>
  <div class="card-footer text-muted">
    Print this application and visit our office within 15 days
  </div>
</div>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

echo "<br>";

include 'includes/footer.php';

?>