<?php

namespace App\Service;

/**
 * Class DateStuff
 * @author Yann Le Scouarnec <bunkermaster@gmail.com>
 * @package App\Service
 */
class DateStuff
{
    public function getAge($dateTime)
    {
        // gestion de la typeError si type pas DateTime
        $diff = $dateTime->diff(new \DateTime());

        return $diff->y;
    }
}