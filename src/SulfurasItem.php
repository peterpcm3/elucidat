<?php

namespace App;

class SulfurasItem extends BaseItem
{
    const NAME_IDENTIFIER = 'Sulfuras, Hand of Ragnaros';

    public static function calculateQuality(Item $item)
    {

    }

    public static function calculateSellIn(Item $item)
    {

    }

    public static function nextDay(Item $item)
    {
        self::calculateSellIn($item);
        self::calculateQuality($item);
    }
}
