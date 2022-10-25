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
 echo'<div class="container">';
        echo '<h1>'. 'Titolo:' .$this->titolo . '</h1>';
        echo '<p>'. 'Regista:'. $this->regista . '</p>';
        echo '<p>'. 'Attore:' .$this->attore . '</p>';
        echo '<p>'. 'Anno:' . $this->anno. '</p>';
        echo '<hr>';
        
'</div>';
}

}

 $filmOne = new Movie('Cast-away','Robert Zemeckis', 'Tom Hanks', '2001');
 $filmTwo = new Movie('Titanic', 'Leonardo DiCaprio','James Cameron', '1998');
 $filmThree = new Movie('Forrest Gump' , 'Tom Hanks','Robert Zemeckis', '1994');



 $filmOne->stampaFilm();
 $filmTwo->stampaFilm();
 $filmThree->stampaFilm()

?>


<style>
.container{
text-align: center;
color: white;
}

body{
background-color: black;
}


</style>