<?php

namespace App;

class BaseItem implements GildedRoseItemInterface
{
    const NAME_IDENTIFIER = '';

    public static function calculateQuality(Item $item)
    {
        if($item->sellIn < 0) {
            $item->quality = $item->quality - 2;
        }
        else {
            $item->quality--;
        }

        if ($item->quality < 0) {
            $item->quality = 0;
        }
    }

    public static function calculateSellIn(Item $item)
    {
        $item->sellIn --;
    }

    public static function nextDay(Item $item)
    {
        static::calculateSellIn($item);
        static::calculateQuality($item);
    }

    public static function getNameIdentifier(Item $item)
    {
        return static::NAME_IDENTIFIER;
    }
}
