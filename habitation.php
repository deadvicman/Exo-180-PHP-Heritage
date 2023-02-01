<?php
class Habitation{
    public String $pays;
    public String $ville;
    public Int $Postal;
    public Int $Chambres;
    public Int $Piece;

    /**
     * @param String $pays
     * * @param String $ville
     * @param Int $Postal
     * @param Int $Chambres
     * @param Int $Piece
     */

    public function __construct(string $pays,string $ville,int $Postal,int $Chambres,int $Piece)
    {
        $this->pays = $pays;
        $this->ville = $ville;
        $this->Postal = $Postal;
        $this->Chambres = $Chambres;
        $this->Piece = $Piece;
    }

    public function getPays(): string
    {
        return $this->pays;
    }

    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }

    public function getVille(): string
    {
        return $this->ville;
    }


    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    public function getPostal(): int
    {
        return $this->Postal;
    }

    public function setPostal(int $Postal): void
    {
        $this->Postal = $Postal;
    }

    public function getChambres(): int
    {
        return $this->Chambres;
    }

    public function setChambres(int $Chambres): void
    {
        $this->Chambres = $Chambres;
    }

    public function getPiece(): int
    {
        return $this->Piece;
    }

    public function setPiece(int $Piece): void
    {
        $this->Piece = $Piece;
    }
}


