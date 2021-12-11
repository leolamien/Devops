<?php

use PHPUnit\Framework\TestCase;

class berlin_clock
{
    public function minutes(int $number): string
    {
        $minute = '';
        for ($i = 1; $i <= $number; $i++) {
            $minute .= '1';
        }
        return $minute;
    }

    public function fiveMinutes(int $number): string
    {
        $result = $number / 5;
        $minute = '';
        for ($i = 1; $i <= $result; $i++) {
            $minute .= '1';
        }
        return $minute;
    }

    public function hours(int $number): string
    {
        $hour = '';
        for ($i = 1; $i <= $number; $i++) {
            $hour .= '1';
        }
        return $hour;
    }

    public function fiveHours(int $number): string
    {
        $result = $number / 5;
        $hour = '';
        for ($i = 1; $i <= $result; $i++) {
            $hour .= '1';
        }
        return $hour;
    }

    public function seconds(int $number): string
    {
        $sec = '0';
        if ($number % 2 == 0) {
            $sec = '1';
        }
        return $sec;
    }

    public function boucle(int $number)
    {
        $allume = '';
        for ($i = 1; $i <= $number; $i++) {
            $allume .= '1';
        }
        return $allume;
    }

    public function heureEntiere(int $hours, $minute, $second): string
    {
        $nbHeureParCinq = $hours / 5;
        $nbHeure = $hours - floor($nbHeureParCinq) * 5;
        $nbMinuteParDeCinq = $minute / 5;
        $nbMinute = $minute - floor($nbMinuteParDeCinq) * 5;
        $nbLampeHourParCinq= $this->boucle($nbHeureParCinq);
        $nbLampeHour = $this->boucle($nbHeure);
        $nbLampeMinuteParCinq = $this->boucle($nbMinuteParDeCinq);
        $nbLampeMinute = $this->boucle($nbMinute);
        $nbLampeSecond = $this->seconds($second);
        $horlogeEntier = $nbLampeHourParCinq. ' ' .$nbLampeHour. ' ' .$nbLampeMinuteParCinq. ' ' .$nbLampeMinute. ' ' .$nbLampeSecond;
        return $horlogeEntier;
    }

}