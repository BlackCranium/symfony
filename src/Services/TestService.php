<?php


namespace App\Services;


class TestService
{
    private $kurs = 69;
    public function convert(int $rub)
    {
        return $rub/$this->kurs;
    }
}