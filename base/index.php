<?php

    class movie{
        public $titolo;
        public $generi;
        public $lingue;
        public $punteggio;

        public function __construct($title, $genres, $languages, $score){
            $this->setTitolo($title);
            $this->setGenere($genres);
            $this->setLingua($languages);
            $this->setScore($score);
        }

        public function setTitolo($title){
            if(is_string($title)){
                $this->titolo = $title;
            }else{
                echo "Errore!! Hai inserito un titolo non consentito! <br>";
            }
        }

        public function setGenere($genres){
            if(is_string($genres) || is_array($genres)){
                $this->generi = $genres;
            }else{
                echo "Errore!! Hai inserito generi non consentiti! <br>";
            }
        }

        public function getGeneri(){
            $generi = "";
            if(is_array($this->generi) && count($this->generi) > 1){
                foreach($this->generi as $genere){
                    $generi .= $genere . ", ";
                }
                $generi = rtrim($generi, ", ");
            }else{
                $generi = $this->generi;
            }

            return $generi;
        }

        public function setLingua($languages){
            if(is_string($languages) || is_array($languages)){
                $this->lingue = $languages;
            }else{
                echo "Errore!! Hai inserito lingue non consentiti! <br>";
            }
        }

        public function getLingue(){
            $lingue = "";
            if(is_array($this->lingue) && count($this->lingue) > 1){
                foreach($this->lingue as $lingua){
                    $lingue .= $lingua . ", ";
                }
                $lingue = rtrim($lingue, ", ");
            }else{
                $lingue = $this->lingue;
            }

            return $lingue;
        }

        public function setScore($valutazione){
            if(is_numeric($valutazione) && $valutazione >= 0 && $valutazione <= 10){
                $this->punteggio = $valutazione;
            }else{
                echo "Errore!! Hai inserito un punteggio non consentito! <br>";
            }
        }

        

       
    }

    $HarryPotter = new movie("Harry Potter", ["Avventure", "Fantasy"], ["Italiano", "Inglese", "Francese", "Tedesco"], 8);
    echo "<b>Titolo film:</b>" . " " . $HarryPotter->titolo . "<br>";
    echo "<b>Genere:</b>" . " " . $HarryPotter->getGeneri() . "<br>";
    echo "<b>Lingue:</b>" . " " . $HarryPotter->getLingue() . "<br>";
    echo "<b>Punteggio:</b>" . " " . $HarryPotter->punteggio . "<br>";

    echo "<br><br><hr><br><br>";

    $StarWars = new movie("Star Wars", ["Avventure", "Action", "Science Finction"], ["Italiano", "Inglese", "Spagnolo"], 8.5);
    echo "<b>Titolo film:</b>" . " " . $StarWars->titolo . "<br>";
    echo "<b>Genere:</b>" . " " . $StarWars->getGeneri() . "<br>";
    echo "<b>Lingue:</b>" . " " . $StarWars->getLingue() . "<br>";
    echo "<b>Punteggio:</b>" . " " . $StarWars->punteggio . "<br>";


   
?>