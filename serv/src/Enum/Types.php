<?php


namespace App\Enum;


class Types
{
    const HEBERGEMENT_LOCATIF = "HEBERGEMENT_LOCATIF";
    const PATRIMOINE_CULTUREL = "PATRIMOINE_CULTUREL";
    const RESTAURATION = "RESTAURATION";
    const COMMERCE_ET_SERVICE = "COMMERCE_ET_SERVICE";
    const EQUIPEMENT = "EQUIPEMENT";
    const HOTELLERIE = "HOTELLERIE";

    static public function getAll()
    {
        return [
            self::HEBERGEMENT_LOCATIF,
            self::PATRIMOINE_CULTUREL,
            self::RESTAURATION,
            self::COMMERCE_ET_SERVICE,
            self::EQUIPEMENT,
            self::HOTELLERIE,
        ];
    }

}