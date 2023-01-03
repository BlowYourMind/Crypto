<?php

namespace App\Models;

class CryptoAssets
{
    private string $name;
    private string $symbol;
    private float $price;
    private float $percentChange1h;
    private float $percentChange24h;
    private float $percentChange7d;

    public function __construct(string $name, string $symbol, float $price, float $percentChange1h, float $percentChange24h, float $percentChange7d)
    {
        $this->name = $name;
        $this->symbol = $symbol;
        $this->price = $price;
        $this->percentChange1h = $percentChange1h;
        $this->percentChange24h = $percentChange24h;
        $this->percentChange7d = $percentChange7d;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): string
    {
        if ($this->price > 0.9) {
            return number_format($this->price, 2);
        } elseif ($this->price < 0.001) {
            return number_format($this->price, 8);
        } else {
            return number_format($this->price, 4);
        }
    }

    public function getSymbol(): string
    {
        return $this->symbol;
    }

    public function getPercentChange1h(): float
    {
        if ($this->percentChange1h > -0.004 && $this->percentChange1h < 0.004) {
            $this->percentChange1h = 0;
        }
        return round($this->percentChange1h, 2);
    }

    public function getPercentChange7d(): float
    {
        if ($this->percentChange7d > -0.004 && $this->percentChange7d < 0.004) {
            $this->percentChange7d = 0;
        }
        return round($this->percentChange7d, 2);
    }

    public function getPercentChange24h(): float
    {
        if ($this->percentChange24h > -0.004 && $this->percentChange24h < 0.004) {
            $this->percentChange24h = 0;
        }
        return round($this->percentChange24h, 2);
    }

}
