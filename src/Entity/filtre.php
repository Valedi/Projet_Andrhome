<?php


namespace App\Entity;


class filtre
{
    private $desc_prix;
    /**
     * @var int
     */

    private $asc_prix;

    /**
     * @return mixed
     */
    public function getDescPrix()
    {
        return $this->desc_prix;
    }

    /**
     * @param mixed $desc_prix
     */
    public function setDescPrix(int $desc_prix): void
    {
        $this->desc_prix = $desc_prix;
    }

    /**
     * @return int
     */
    public function getAscPrix(): int
    {
        return $this->asc_prix;
    }

    /**
     * @param int $asc_prix
     */
    public function setAscPrix(int $asc_prix): void
    {
        $this->asc_prix = $asc_prix;
    }

}