<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <?php

    $array = array("Alamin", "sheikh", "muhammad");

    foreach($array as $loopdata) {
      echo "my name is ".$loopdata."<br/>";
    }

    function discount($x){
      $val = $x * .50;
      echo "Here is 50% of what you wrote: " .$val;
    }
    discount(100)


    ?>
  </body>
</html>
