<?php

namespace App\Enums;

enum FoodOption: string
{
    case MEAT = 'meat';
    case FISH = 'fish';
    case VEGA = 'vega';

    public function label(): string
    {
        return match ($this) {
            self::MEAT => 'Vlees',
            self::FISH => 'Vis',
            self::VEGA => 'Vegetarisch',
        };
    }
}
