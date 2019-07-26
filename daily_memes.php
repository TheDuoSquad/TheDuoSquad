<?php
include "conn.php";
$sql = 'SELECT * FROM memes';
$s = $conn->prepare($sql);
$s->execute();
$result = $s->fetchALL();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weekly Memes</title>
</head>
<div class="container">
<ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="daily_memes.php">Weekly Memes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="OG_Memes.php">Og Memes</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="Thanos_Memes.php">Thanos Memes</a>
                </li>
              </ul>
<?php
if ($result && $s->rowCount() > 0) {
    //the foreach takes all the data and splits it into each row
    //as whatever variable you named it
    foreach ($result as $row) {?>
     <img src="<?php  echo $row['img'];?>" alt=""> 

   <?php }
}
?>


<img src="https://i.imgur.com/XQAEvnR.jpg" alt="">

<img src="https://i.imgflip.com/2oj0r3.jpg" alt="">
<img src="" alt="">
             
<body>
    
<img src="https://pm1.narvii.com/6709/8529a6a766711a9f5e905e257cdced7e7e3c52e3_hq.jpg" alt="">







</body>
</html>
