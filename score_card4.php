<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>score_card</title>
</head>
<center>
<?php 
    require 'dbconfig.php';
    session_start(); 
        $rucked1 = 0;
            for($i=1;$i<6;$i++){
                $fetchqry = "SELECT * FROM `js` where id=$i"; 
                $result=mysqli_query($con,$fetchqry);
                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                if($row['ans'] == $row['userans']){
                    $rucked1 += 1;
                }
            }
?>

<body style=" background-color: black; color: white; font-size: 9rem;">

    <h1 style="font-size: 7rem; text-decoration: underline;">SCORE CARD</h1>
    <h1 > 0<?php echo $rucked1 ;?> / 05</h1>
    </center>
</body>
</html>       
    
    