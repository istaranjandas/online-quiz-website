<!DOCTYPE html>
<html>
<body>
<h1>Online Quiz</h1>
<?php 

require 'dbconfig.php';
session_start(); 



?>
<form action="" method="post"><?php

$fetchqry = "SELECT * FROM `python` where id='1'"; 
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
    
            $fetchqry2 = "UPDATE python SET userans='$userselected' WHERE id='1'"; 
            $result2 = mysqli_query($con,$fetchqry2);echo $userselected; ?> <br> <?php
            echo $row['ans']; 
    }
}
?>
<form action="" method="post"><?php
$fetchqry = "SELECT * FROM `python` where id='2'"; 
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
    
            $fetchqry2 = "UPDATE python SET userans='$userselected' WHERE id='2'"; 
            $result2 = mysqli_query($con,$fetchqry2);echo $userselected; ?> <br> <?php
            echo $row['ans']; 
    }
}
?>

<form action="" method="post"><?php
$fetchqry = "SELECT * FROM `python` where id='3'"; 
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
    
            $fetchqry2 = "UPDATE python SET userans='$userselected' WHERE id='3'"; 
            $result2 = mysqli_query($con,$fetchqry2);echo $userselected; ?> <br> <?php
            echo $row['ans']; 
    }
}
?>
<form action="" method="post"><?php

$fetchqry = "SELECT * FROM `python` where id='4'"; 
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
    
            $fetchqry2 = "UPDATE python SET userans='$userselected' WHERE id='4'"; 
            $result2 = mysqli_query($con,$fetchqry2);echo $userselected;?> <br> <?php
            echo $row['ans']; 
    }
}
?>

<form action="" method="post"><?php

$fetchqry = "SELECT * FROM `python` where id='5'"; 
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
    
            $fetchqry2 = "UPDATE python SET userans='$userselected' WHERE id='5'"; 
            $result2 = mysqli_query($con,$fetchqry2);echo $userselected; ?> <br> <?php
            echo $row['ans']; 
    }
}
?>



</form>
</body>
</html>
