<!DOCTYPE html>
<html>
<body style="background-color: #770bb6;">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<h1 style="color:white; font-size:3rem; padding:2rem;">JS PREP</h1>


<?php 

require 'dbconfig.php';
session_start(); 



?>
<form action="" method="post"><?php

$fetchqry = "SELECT * FROM `js` where id='1'"; 
$result=mysqli_query($con,$fetchqry);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);?>
    <h2><?php echo $row['que'] ?> <?php?></h2>
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
    <input type="submit" name="submit1" value="Show Answers">
    
    
</form>
<?php
    if(isset($_POST['submit1'])){
        if(isset($_POST['radio1'])) { $userselected = $_POST['radio1'];
    
            $fetchqry2 = "UPDATE js SET userans='$userselected' WHERE id='1'"; 
            $result2 = mysqli_query($con,$fetchqry2);echo $userselected; ?> <br> <?php
            echo $row['ans']; 
    }
}
?>
<form action="" method="post"><?php
$fetchqry = "SELECT * FROM `js` where id='2'"; 
$result=mysqli_query($con,$fetchqry);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);?>
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
    <input type="submit" name="submit2" value="Show Answers">
    
</form>
<?php
    if(isset($_POST['submit2'])){
        if(isset($_POST['radio2'])) { $userselected = $_POST['radio2'];
    
            $fetchqry2 = "UPDATE js SET userans='$userselected' WHERE id='2'"; 
            $result2 = mysqli_query($con,$fetchqry2);echo $userselected; ?> <br> <?php
            echo $row['ans']; 
    }
}
?>

<form action="" method="post"><?php
$fetchqry = "SELECT * FROM `js` where id='3'"; 
$result=mysqli_query($con,$fetchqry);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);?>
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
    <input type="submit" name="submit3" value="Show Answers">
    
</form>
<?php
    if(isset($_POST['submit3'])){
        if(isset($_POST['radio3'])) { $userselected = $_POST['radio3'];
    
            $fetchqry2 = "UPDATE js SET userans='$userselected' WHERE id='3'"; 
            $result2 = mysqli_query($con,$fetchqry2);echo $userselected; ?> <br> <?php
            echo $row['ans']; 
    }
}
?>
<form action="" method="post"><?php

$fetchqry = "SELECT * FROM `js` where id='4'"; 
$result=mysqli_query($con,$fetchqry);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);?>
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
    <input type="submit" name="submit4" value="Show Answers">
    
</form>
<?php
    if(isset($_POST['submit4'])){
        if(isset($_POST['radio4'])) { $userselected = $_POST['radio4'];
    
            $fetchqry2 = "UPDATE js SET userans='$userselected' WHERE id='4'"; 
            $result2 = mysqli_query($con,$fetchqry2);echo $userselected;?> <br> <?php
            echo $row['ans']; 
    }
}
?>

<form action="" method="post"><?php

$fetchqry = "SELECT * FROM `js` where id='5'"; 
$result=mysqli_query($con,$fetchqry);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);?>
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
    <input type="submit" name="submit5" value="Show Answers">
    
</form>
<?php
    if(isset($_POST['submit5'])){
        if(isset($_POST['radio5'])) { $userselected = $_POST['radio5'];
    
            $fetchqry2 = "UPDATE js SET userans='$userselected' WHERE id='5'"; 
            $result2 = mysqli_query($con,$fetchqry2);echo $userselected; ?> <br> <?php
            echo $row['ans']; 
    }
}
?>



</form>
</body>
</html>
