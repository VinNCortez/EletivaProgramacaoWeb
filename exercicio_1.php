<?php

class Point{
    private static int $objects_counter = 0;

    private int $x;
    private int $y;


    public function __construct(int $x, int $y){
        $this->x = $x;
        $this->y = $y;

        self::$objects_counter += 1;
    }


    public static function getInstancesCounter(): int
    {
        return self::$objects_counter;
    }


    public static function distanceBetweenCordinates(int $x1, int $y1, int $x2, int $y2): float
    {
        $distance = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
        return round($distance, 2);
    }


    public function setX(int $x): void
    {
        $this->x = $x;
    }


    public function setY(int $y): void
    {
        $this->y = $y;
    }


    public function getX(): int
    {
        return $this->x;
    }


    public function getY(): int
    {
        return $this->y;
    }


    public function deslocate(int $destiny_x, int $destiny_y): void
    {
        $this->setX($destiny_x);
        $this->sety($destiny_y);
    }


    public function distanceFromOtherPoint(self $ponto): float
    {
        return self::distanceBetweenCordinates($this->x, $this->y, $ponto->x, $ponto->y);
    }

    public function  distanceFromOtherCordinates(int $x, int $y): float
    {
        return self::distanceBetweenCordinates($this->x, $this->y, $x, $y);
    }
}