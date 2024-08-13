<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    $nums = [15, 4, 18, 23, 10];

    function sort_2way($array, $order){
      if($order) {
        sort($array);
        echo '昇順ソートします。<br>';
        foreach ($array as $num) {
          echo $num . '<br>';
        }
      } else {
        rsort($array);
        echo '降順ソートします。<br>';
        foreach ($array as $num) {
          echo $num . '<br>';
        }
      }
    }

    sort_2way($nums, true);
    sort_2way($nums, false);
  

    
    ?>
  </p>
</body>
</html>