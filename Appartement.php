<?php
class Appartement extends Habitation{
    private $garage;

    /**
     * @param $garage
     */
    public function __construct($pays, $ville, $Postal, $Chambres, $Piece, $garage) {
        parent::__construct($pays, $ville, $Postal, $Chambres, $Piece);
        $this->garage = $garage;
    }

    public function getGarage() {
        return $this->garage;
    }

    public function setGarage($garage) {
        $this->garage = $garage;
    }

}