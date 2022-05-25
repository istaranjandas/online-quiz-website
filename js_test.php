<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
</head>
<body style="background-color: #770bb6;">
    <h1 style="color:white; font-size:3rem; padding:2rem;">JS Quiz</h1>
    <?php 
        require 'dbconfig.php';
        session_start(); 
    ?>
    <form action="" method="post">
        <?php
            $fetchqry = "SELECT * FROM `js` where id='1'"; 
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
            $fetchqry = "SELECT * FROM `js` where id='2'"; 
            $result=mysqli_query($con,$fetchqry);

            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        ?>
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
            $fetchqry = "SELECT * FROM `js` where id='3'"; 
            $result=mysqli_query($con,$fetchqry);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        ?>
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
            $fetchqry = "SELECT * FROM `js` where id='4'"; 
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
            $fetchqry = "SELECT * FROM `js` where id='5'"; 
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

            <input type="submit" name="submit" class="btn btn-primary">
        </div>
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
                ?>
                <script>
                    window.location.href = "score_card4.php";
                </script>
                <?php
            }
        ?>
    </form>
</body>
</html>