<?php

class VOD
{
    private array $films;
    private int $price;

    private static int $subscribersTotal = 0;

    public function __construct(array $films, int $price)
    {
        $this->setPrice($price);
        $this->setFilms($films);
    }

    public static function getTotalSubscribers()
    {
        return self::$subscribersTotal;
    }

    public function addAbo () {
        self::$subscribersTotal++;
    }

    /**
     * @return array
     */
    public function getFilms(): array
    {
        return $this->films;
    }

    /**
     * @param array $films
     */
    public function setFilms(array $films): void
    {
        $this->films = $films;
    }

    /**
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }
}