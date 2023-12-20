<?php

// $URL = "https://randomuser.me/api/";
$URL = "https://randomuser.me/api/?results=5";

$res = file_get_contents($URL);
// echo $res;

$data = json_decode($res);
$listUsers = $data->results;

// if(isset($data)){
//   print_r($data);
// } else {
//   echo "no se encontro la data";
// }

?>

<ul>
  <?php foreach ($listUsers as $user) {?>
    <li><?php echo "ciudad: ".$user->location->city;?></li>
  <?php } ?>
</ul>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <?php
      foreach($listUsers as $user) {
        echo "<li>".$user->name->first."</li>";
      }
    ?>
  </ul>
</body>
</html>