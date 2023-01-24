<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="/style.css">
  </head>
  <body>
    <?php
    class Movie {
        // variabili di istanza
        public $title;
        public $category;
        public $year;

        public function __construct($title, $category, $year) {
            $this->title = $title;
            $this->category = $category;
            $this->year = $year;
        }

        public function getInfo() {
            return " <div class= 'container'> <span class='title'> Titolo: </span> " . $this->title . "</br>" . "<span class='category'> Categoria: </span> " . $this->category .  "</br>" . "<span class='year'> Anno: </span>" . $this->year . "</br>" . "</br>" . "</br>" . "</div>";
        }

    }
    
    $movie1 = new Movie("Avatar 2", "Avventura, Azione", 2022);

    $movie2 = new Movie("Fast & Furious", "Azione", 2018);

    echo $movie1->getInfo() . $movie2->getInfo();
    ?>

  </body>
</html>
