<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>score_card</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<center>
<?php 
    require 'dbconfig.php';
    session_start(); 
    

        $rucked = 0;
        for($i=1;$i<6;$i++){
            $fetchqry = "SELECT * FROM `php` where id=$i"; 
            $result=mysqli_query($con,$fetchqry);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            if($row['ans'] == $row['userans']){
                $rucked += 1;
            }
        }
?>
<body style=" background-color: #770bb6; color: white; font-size: 9rem;">
    <h1 style="font-size: 7rem; text-decoration: underline;">SCORE CARD</h1>
    <h1 style="font-size: 7rem;"> 0<?php echo $rucked ;?> / 05</h1>
    </center>

    
    <button type="button" id="submit" class="btn btn-success" onclick="funct();" style="margin-left: 42rem;">ALL QUIZZES</button>
    <script>
        document.getElementById("submit").addEventListener("click", funct);
        function funct() {
            window.location.href = "showpage.php";
        }
        
    </script>
</body>
</html>