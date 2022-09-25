<?php
include "Message.php";
class Question extends Message{
    private $traite;

    public function __construct($numero,$date,$texte,$traite){
        parent::__construct($numero,$date,$texte);
        $this->$traite=$traite;
    }

    public function getTraite(){
        return $this->$traite;
    }

    public function setTraite($traite){
        $this->$traite=$traite;
    }

    public function __toString(){
        return parent::__toString() . "\traire : $this-> traite ";
    }

}

?>