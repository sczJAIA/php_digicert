<?php

declare(strict_types=1);

namespace GildedRose;

final class GildedRose
{
    /**
     * @var Item[]
     */
    private $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            switch ($item->name) {
                case 'Aged Brie':
                    $item->quality++;
                    $item->sell_in -= 1;
                    if ($item->sell_in <= 0) {
                        $item->sell_in += 1;
                    }
                    if ($item->quality >= 50) {
                        $item->quality = 50;
                    }
                    break;
                case 'Backstage passes to a TAFKAL80ETC concert':
                    $item->quality++;
                    $item->sell_in -= 1;
                    if ($item->sell_in <= 10) {
                        $item->quality += 1;
                    }
                    if ($item->sell_in <= 5) {
                        $item->quality += 1;
                    }
                    if ($item->sell_in <= 0) {
                        $item->quality = 0;
                    }
                    if ($item->quality >= 50) {
                        $item->quality = 50;
                    }
                    break;
                case 'Sulfuras, Hand of Ragnaros':
                    $item->sell_in = $item->sell_in;
                    $item->quality = $item->quality;
                    break;
                case 'Conjured Mana Cake':
                    $item->sell_in--;
                    $item->quality -= 2;
                    if ($item->sell_in <= 0) {
                        $item->sell_in = 0;
                    }
                    if ($item->quality <= 0) {
                        $item->quality = 0;
                    }
                    break;
                default:
                    $item->sell_in--;
                    $item->quality--;
                    if ($item->sell_in <= 0) {
                        $item->sell_in = 0;
                    }
                    if ($item->quality <= 0) {
                        $item->quality = 0;
                    }
                    break;
            }


            // if ($item->name != 'Aged Brie' and $item->name != 'Backstage passes to a TAFKAL80ETC concert') {
            //     if ($item->quality > 0) {
            //         if ($item->name != 'Sulfuras, Hand of Ragnaros') {
            //             $item->quality = $item->quality - 1;
            //         }
            //     }
            // } else {
            //     if ($item->quality < 50) {
            //         $item->quality = $item->quality + 1;
            //         if ($item->name == 'Backstage passes to a TAFKAL80ETC concert') {
            //             if ($item->sell_in < 11) {
            //                 if ($item->quality < 50) {
            //                     $item->quality = $item->quality + 1;
            //                 }
            //             }
            //             if ($item->sell_in < 6) {
            //                 if ($item->quality < 50) {
            //                     $item->quality = $item->quality + 1;
            //                 }
            //             }
            //         }
            //     }
            // }
            // if ($item->name == 'Conjured Mana Cake') {
            //     if ($item->quality > 0 && $item->quality <= 50) {
            //         $item->quality = $item->quality - 1;
            //     }
            // }


            // if ($item->name != 'Sulfuras, Hand of Ragnaros') {
            //     $item->sell_in = $item->sell_in - 1;
            // }

            // if ($item->sell_in < 0) {
            //     if ($item->name != 'Aged Brie') {
            //         if ($item->name != 'Backstage passes to a TAFKAL80ETC concert') {
            //             if ($item->quality > 0) {
            //                 if ($item->name != 'Sulfuras, Hand of Ragnaros') {
            //                     $item->quality = $item->quality - 1;
            //                 }
            //             }
            //         } else {
            //             $item->quality = $item->quality - $item->quality;
            //             echo $item->quality;
            //         }
            //     } else {
            //         if ($item->quality < 50) {
            //             $item->quality = $item->quality + 1;
            //         }
            //     }
            // }
        }
    }
}
