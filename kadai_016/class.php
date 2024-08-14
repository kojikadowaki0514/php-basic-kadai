<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    class Food {
      private $name;
      private $price;

      function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;        
      }

      function show_price() {
        echo $this->price;
      }
    }

    class Animal {
      private $name;
      private $height;
      private $weight;

      function __construct(string $name, float $height, float $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }

      function show_height() {
        echo $this->height;
      }
    }

    $food = new Food('ptato', 250);
    print_r($food);
    
    echo '<br>';

    $animal = new Animal('dog', 60, 5000);
    print_r($animal);

    echo '<br>';

    $food->show_price();
    
    echo '<br>';

    $animal->show_height();

    ?>
  </p>
</body>