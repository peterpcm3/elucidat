<?php

namespace App;

class ConjuredItem extends BaseItem
{
    const NAME_IDENTIFIER = 'Conjured Mana Cake';

    public static function calculateQuality(Item $item)
    {
        $item->quality = $item->quality - 2;

        if ($item->quality < 0) {
            $item->quality = 0;
        }
    }

    public static function calculateSellIn(Item $item)
    {
        $item->sellIn --;

        if ($item->sellIn < 0) {
            self::calculateQuality($item);
        }
    }
}
