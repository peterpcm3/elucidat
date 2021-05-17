<?php

namespace App;

class AgedBrieItem extends BaseItem
{
    const NAME_IDENTIFIER = 'Aged Brie';

    public static function calculateQuality(Item $item)
    {
        $item->quality++;

        if ($item->quality > 50) {
            $item->quality = 50;
        }
    }

    public static function calculateSellIn(Item $item)
    {
        $item->sellIn --;

        if ($item->sellIn < 0) {
            self::calculateQuality($item);
        }
    }

    public static function nextDay(Item $item)
    {
        static::calculateQuality($item);
        static::calculateSellIn($item);
    }
}
