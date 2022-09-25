<?php

class Message {
    private $numero;
    private $date;
    private $texte;

    public function __construct($numero, $date, $texte){
        $this->$numero = $numero;
        $this->$date = $date;
        $this-> $texte = $texte;
    }

    public function getNumero(){
        return $this->$numero;
    }

    public function setNumero($numero){
        $this->$numero = $numero;
    }

    public function getDate(){
        return $this->$date;
    }

    public function setDate($date){
        $this->$date=$date;
    }

    public function getTexte(){
        return $texte;
    }

    public function setTexte($texte){
        $this->$texte=$texte;
    }

    public function __toString(){
        return "\numero : $this->numero" . "\date : $this->date" . "\texte : $this->texte" ;
    }
}

?>