<?php

// src/App/JoboardBundle/Utils/Joboard.php

namespace App\JoboardBundle\Utils;

class Joboard
{
    /**
     * Замена пробелов на тире и приведение к ниж. регистру
     * @param string $text
     * @return string
     */
    static public function slugify($text)
    {
        // Замена пробелов на тире
        $text = preg_replace('/ +/', '-', $text);
        // Приведение текста к нижнему регистру
        $text = mb_strtolower( trim($text, '-'), 'utf-8');

        return $text;
    }
}