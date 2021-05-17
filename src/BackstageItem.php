<?php

namespace App;

class BackstageItem extends BaseItem
{
    const NAME_IDENTIFIER = 'Backstage passes to a TAFKAL80ETC concert';

    public static function calculateQuality(Item $item)
    {
        $item->quality++;

        if ($item->sellIn < 11) {
            $item->quality++;
        }

        if ($item->sellIn < 6) {
            $item->quality++;
        }

        if ($item->sellIn < 0) {
            $item->quality = 0;
        }

        if ($item->quality > 50) {
            $item->quality = 50;
        }
    }

    public static function calculateSellIn(Item $item)
    {
        $item->sellIn --;

        if($item->sellIn < 0) {
            self::calculateQuality($item);
        }
    }

    public static function nextDay(Item $item)
    {
        static::calculateQuality($item);
        static::calculateSellIn($item);
    }
}
