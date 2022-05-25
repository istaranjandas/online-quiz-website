<!DOCTYPE html>
<html>
<body>
<h1>Online Quiz</h1>
<?php 
require 'dbconfig.php';
session_start(); 
$_SESSION["jstest"] = "1";


?>
<form action="" method="post"><?php

$fetchqry = "SELECT * FROM `js` where id='1'"; 
$result=mysqli_query($con,$fetchqry);

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 ?>
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
    
    

<?php
    
        if(isset($_POST['radio1'])) 
        { 
            $userselected1 = $_POST['radio1'];
        }
        
        
    

?>
<?php
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

    

<?php
        if(isset($_POST['radio2'])) 
        { 
            $userselected2 = $_POST['radio2'];
        }
?>

<?php
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

    

<?php

    if(isset($_POST['radio3'])) 
    { 
        $userselected3 = $_POST['radio3'];
    }

?>
<?php
    $fetchqry = "SELECT * FROM `js` where id='4'"; 
    $result=mysqli_query($con,$fetchqry);

    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
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
    

<?php
        if(isset($_POST['radio4'])) 
        { 
            $userselected4 = $_POST['radio4'];
        }
?>

<?php

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
    
    <input type="submit" name="submit" vlaue="Get Values">  
</form>

<?php
    if(isset($_POST['radio5'])) 
    { 
        $userselected5 = $_POST['radio5'];      
    }

    if(isset($_POST['submit']))
    {
        $fetchqry2 = "UPDATE js SET userans='$userselected1' WHERE id='1'"; 
        $result2 = mysqli_query($con,$fetchqry2);
        $fetchqry2 = "UPDATE js SET userans='$userselected2' WHERE id='2'"; 
        $result2 = mysqli_query($con,$fetchqry2);
        $fetchqry2 = "UPDATE js SET userans='$userselected3' WHERE id='3'"; 
        $result2 = mysqli_query($con,$fetchqry2);
        $fetchqry2 = "UPDATE js SET userans='$userselected4' WHERE id='4'"; 
        $result2 = mysqli_query($con,$fetchqry2);
        $fetchqry2 = "UPDATE js SET userans='$userselected5' WHERE id='5'"; 
        $result2 = mysqli_query($con,$fetchqry2);
        header("Location: score_card4.php");
    }

    
?>



</form>
</body>
</html>
