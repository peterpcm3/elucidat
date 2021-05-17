<?php

namespace App;

interface GildedRoseItemInterface
{
    public static function calculateQuality(Item $item);
    public static function calculateSellIn(Item $item);
    public static function nextDay(Item $item);
    public static function getNameIdentifier(Item $item);
}
