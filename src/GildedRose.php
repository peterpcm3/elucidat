<?php

namespace App;

class GildedRose
{
    private $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function getItem($which = null)
    {
        return ($which === null
            ? $this->items
            : $this->items[$which]
        );
    }

    public function nextDay()
    {
        foreach ($this->items as $item) {
            switch ($item->name) {
                case AgedBrieItem::getNameIdentifier($item):
                    AgedBrieItem::nextDay($item);
                    break;

                case SulfurasItem::getNameIdentifier($item):
                    SulfurasItem::nextDay($item);
                    break;

                case BackstageItem::getNameIdentifier($item):
                    BackstageItem::nextDay($item);
                    break;

                case ConjuredItem::getNameIdentifier($item):
                    ConjuredItem::nextDay($item);
                    break;

                default:
                    BaseItem::nextDay($item);
            }
        }
    }
}
