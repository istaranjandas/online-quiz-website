<!DOCTYPE html>
<html>
<body style="background-color: #770bb6;">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<h1 style="color:white; font-size:3rem; padding:2rem;">JAVA Quiz</h1>

<?php 
require 'dbconfig.php';
session_start(); 
?>
<form action="" method="post"><?php

$fetchqry = "SELECT * FROM `java` where id='1'"; 
$result=mysqli_query($con,$fetchqry);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 ?>
<div style="background-color: white; padding:2rem;" class="jumbotron jumbotron-fluid">
    <h2><?php echo $row['que'] ?></h2>
    <label>
        <input type="radio" name="radio1" value="<?php echo $row['option 1'] ?>"><?php echo $row['option 1'] ?>
    </label><br>
    <label>
        <input type="radio" name="radio1" value="<?php echo $row['option 2'] ?>"><?php echo $row['option 2'] ?>
    </label><br>
    <label>
        <input type="radio" name="radio1" value="<?php echo $row['option 3'] ?>"><?php echo $row['option 3'] ?>
    </label><br>
    <label>
        <input type="radio" name="radio1" value="<?php echo $row['option 4'] ?>"><?php echo $row['option 4'] ?>
    </label><br>
</div>   
    

<?php
    
        if(isset($_POST['radio1'])) 
        { 
            $userselected1 = $_POST['radio1'];
        }
        
        
    

?>
<?php
$fetchqry = "SELECT * FROM `java` where id='2'"; 
$result=mysqli_query($con,$fetchqry);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);?>
<div style="background-color: white; padding:2rem;" class="jumbotron jumbotron-fluid">
    <h2><?php echo $row['que'] ?></h2>
    <label>
        <input type="radio" name="radio2" value="<?php echo $row['option 1'] ?>"><?php echo $row['option 1'] ?>
    </label><br>
    <label>
        <input type="radio" name="radio2" value="<?php echo $row['option 2'] ?>"><?php echo $row['option 2'] ?>
    </label><br>
    <label>
        <input type="radio" name="radio2" value="<?php echo $row['option 3'] ?>"><?php echo $row['option 3'] ?>
    </label><br>
    <label>
        <input type="radio" name="radio2" value="<?php echo $row['option 4'] ?>"><?php echo $row['option 4'] ?>
    </label><br>
    </div>
    

<?php
        if(isset($_POST['radio2'])) 
        { 
            $userselected2 = $_POST['radio2'];
        }
?>

<?php
$fetchqry = "SELECT * FROM `java` where id='3'"; 
$result=mysqli_query($con,$fetchqry);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);?>
<div style="background-color: white; padding:2rem;" class="jumbotron jumbotron-fluid">
    <h2><?php echo $row['que'] ?></h2>
    <label>
        <input type="radio" name="radio3" value="<?php echo $row['option 1'] ?>"><?php echo $row['option 1'] ?>
    </label><br>
    <label>
        <input type="radio" name="radio3" value="<?php echo $row['option 2'] ?>"><?php echo $row['option 2'] ?>
    </label><br>
    <label>
        <input type="radio" name="radio3" value="<?php echo $row['option 3'] ?>"><?php echo $row['option 3'] ?>
    </label><br>
    <label>
        <input type="radio" name="radio3" value="<?php echo $row['option 4'] ?>"><?php echo $row['option 4'] ?>
    </label><br>
    </div>
    

<?php

    if(isset($_POST['radio3'])) 
    { 
        $userselected3 = $_POST['radio3'];
    }

?>
<?php
    $fetchqry = "SELECT * FROM `java` where id='4'"; 
    $result=mysqli_query($con,$fetchqry);

    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<div style="background-color: white; padding:2rem;" class="jumbotron jumbotron-fluid">
    <h2><?php echo $row['que'] ?></h2>
    <label>
        <input type="radio" name="radio4" value="<?php echo $row['option 1'] ?>"><?php echo $row['option 1'] ?>
    </label><br>
    <label>
        <input type="radio" name="radio4" value="<?php echo $row['option 2'] ?>"><?php echo $row['option 2'] ?>
    </label><br>
    <label>
        <input type="radio" name="radio4" value="<?php echo $row['option 3'] ?>"><?php echo $row['option 3'] ?>
    </label><br>
    <label>
        <input type="radio" name="radio4" value="<?php echo $row['option 4'] ?>"><?php echo $row['option 4'] ?>
    </label><br>
</div>   

<?php
        if(isset($_POST['radio4'])) 
        { 
            $userselected4 = $_POST['radio4'];
        }
?>

<?php

$fetchqry = "SELECT * FROM `java` where id='5'"; 
$result=mysqli_query($con,$fetchqry);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);?>
<div style="background-color: white; padding:2rem;" class="jumbotron jumbotron-fluid">
    <h2><?php echo $row['que'] ?></h2>
    <label>
        <input type="radio" name="radio5" value="<?php echo $row['option 1'] ?>"><?php echo $row['option 1'] ?>
    </label><br>
    <label>
        <input type="radio" name="radio5" value="<?php echo $row['option 2'] ?>"><?php echo $row['option 2'] ?>
    </label><br>
    <label>
        <input type="radio" name="radio5" value="<?php echo $row['option 3'] ?>"><?php echo $row['option 3'] ?>
    </label><br>
    <label>
        <input type="radio" name="radio5" value="<?php echo $row['option 4'] ?>"><?php echo $row['option 4'] ?>
    </label><br>
    
    <input style="margin-top:3rem;"class="btn btn-primary" type="submit" name="submit" vlaue="Get Values">  
</form>
    </div>
<?php
    if(isset($_POST['radio5'])) 
    { 
        $userselected5 = $_POST['radio5'];      
    }

    if(isset($_POST['submit']))
    {
        $fetchqry2 = "UPDATE java SET userans='$userselected1' WHERE id='1'"; 
        $result2 = mysqli_query($con,$fetchqry2);
        $fetchqry2 = "UPDATE java SET userans='$userselected2' WHERE id='2'"; 
        $result2 = mysqli_query($con,$fetchqry2);
        $fetchqry2 = "UPDATE java SET userans='$userselected3' WHERE id='3'"; 
        $result2 = mysqli_query($con,$fetchqry2);
        $fetchqry2 = "UPDATE java SET userans='$userselected4' WHERE id='4'"; 
        $result2 = mysqli_query($con,$fetchqry2);
        $fetchqry2 = "UPDATE java SET userans='$userselected5' WHERE id='5'"; 
        $result2 = mysqli_query($con,$fetchqry2);
        header("Location: score_card2.php");
    }

    
?>



</form>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
