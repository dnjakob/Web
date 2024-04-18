<?php
class Lieblingsspiel {
    public $spiel;
    public $hersteller;

    public function __construct($spiel, $hersteller)
    {
        $this->spiel = $spiel;
        $this->hersteller = $hersteller;
    }

    public function message() {
        return "Mein Lieblingsspiel lautet " . $this->spiel . ", welches von 
        " . $this->hersteller . " veröffentlicht worden ist.";
    }
}


$meinLieblingsspiel = new Lieblingsspiel($_POST["spiel"], $_POST["hersteller"]);
echo $meinLieblingsspiel -> message();

?>