<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
  </head>
  <body>
    <p>
      <?php
      
      function soat_2way($array, $order){
        if($order){
          echo "昇順にソートします。<br>";
          sort($array);
          } 

          else {
            echo "降順にソートします。<br>";
            rsort($array);
        }

        foreach($array as $num){
          echo $num . '<br>';
        } 
      }
      
      $nums = [15, 4, 18, 23, 10];
      soat_2way($nums, true);
      soat_2way($nums, false);
      

      ?>
    </p>
  </body>
</html>