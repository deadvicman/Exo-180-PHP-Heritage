<?php

require "habitation.php";

class Maison extends Habitation{
    public Bool $jardin;
    public Int $etages;
    public Bool $garage;

    /**
     * @param bool $jardin
     * @param Int $etages
     * @param bool $garage
     */
    public function __construct($pays, $ville, $Postal, $Chambres, $Piece, $jardin, $etages, $garage)
    {
        parent::__construct($pays, $ville, $Postal, $Chambres, $Piece);
        $this->jardin = $jardin;
        $this->etages = $etages;
        $this->garage = $garage;
    }

    /**
     * @param bool $jardin
     * @param Int $etages
     * @param bool $garage
     */
    /**
     * @return bool
     */
    public function isJardin(): bool
    {
        return $this->jardin;
    }

    /**
     * @param bool $jardin
     */
    public function setJardin(bool $jardin): void
    {
        $this->jardin = $jardin;
    }

    /**
     * @return Int
     */
    public function getEtages(): int
    {
        return $this->etages;
    }

    /**
     * @param Int $etages
     */
    public function setEtages(int $etages): void
    {
        $this->etages = $etages;
    }

    /**
     * @return bool
     */
    public function isGarage(): bool
    {
        return $this->garage;
    }

    /**
     * @param bool $garage
     */
    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }

}