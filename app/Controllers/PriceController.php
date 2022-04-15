<?php

namespace App\Controllers;

use App\Enums\CountryEnum;
use App\Enums\CountryPriceEnum;
use App\Enums\MilkPriceEnum;
use App\Enums\TaxEnum;

class PriceController
{
    const PRICE_SAUCE = 0.5;
    const COMPLIMENT = 1;

    public function index()
    {
        require_once APP_ROOT . '/views/menu.php';
    }

    public function getPrice(): string
    {
        $country = $_POST['country'];
        $serving = $_POST['serving'];
        $compliment = $_POST['compliment'] ?? null;
        $sauce = $_POST['sauce'] ?? null;

        if (!$country) {
            return 'Field must be filled!';
        }

        if (!$serving) {
            return 'Field must be filled!';
        }

        $price = $this->calcFullPrice($country, $serving, $sauce);

        if ($compliment) {
            $price = $price + self::COMPLIMENT;
        }

        return "Result: $price $";
    }

    private function calcFullPrice(string $country, int $serving, ?string $sauce)
    {
        $countries = CountryEnum::from($country);
        $tax = TaxEnum::toArray()[$countries->getValue()];
        $priceCountry = CountryPriceEnum::toArray()[$countries->getValue()];
        $priceMilk = MilkPriceEnum::toArray()[$countries->getValue()];

        $price = $serving * ($priceCountry + $priceMilk);

        if ($sauce) {
            $price = $price + $serving * (self::PRICE_SAUCE);
        }

        $taxPercent = 1 + ($tax / 100);

        return $price * $taxPercent;
    }
}
