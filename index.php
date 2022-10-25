<?php

class Movie {

public $titolo;
public $regista;
public $attore;
public $anno;

  function __construct($_titolo, $_regista, $_attore, $_anno) {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->attore = $_attore;
        $this->anno = $_anno;  
   }

   
  public function stampaFilm() {
        echo '<h2>'. 'Title:' .$this->titolo . '</h2>';
        echo '<h3>'. 'Movie Director:'. $this->regista . '</h3>';
        echo '<h3>'. 'Main Actor:' .$this->attore . '</h3>';
        echo '<h4>'. 'Exit Date:' . $this->anno. '</h4>';
        echo '<hr>';
}

}

 $filmOne = new Movie('Cast-away','Robert Zemeckis', 'Tom Hanks', '2001');
 $filmTwo = new Movie('Titanic', 'Leonardo DiCaprio','James Cameron', '1998');


 $filmOne->stampaFilm();
 $filmTwo->stampaFilm()







?>