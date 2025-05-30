<?php

class Point
{
    private float $x;
    private float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function moveX(float $distance): void
    {
        $this->x += $distance;
    }

    public function moveY(float $distance): void
    {
        $this->y += $distance;
    }

    public function getX(): float
    {
        return $this->x;
    }

    public function getY(): float
    {
        return $this->y;
    }
}