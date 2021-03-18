<?php

// require_once __DIR__ . '/../vendor/autoload.php';
require '../src/Item.php';
require '../src/GildedRose.php';
use GildedRose\GildedRose;
use GildedRose\Item;


$items = array(
    new Item('+5 Dexterity Vest', 10, 20),
    new Item('Aged Brie', 2, 0),
    new Item('Elixir of the Mongoose', 5, 7),
    new Item('Sulfuras, Hand of Ragnaros', 0, 80),
    new Item('Sulfuras, Hand of Ragnaros', -1, 80),
    new Item('Backstage passes to a TAFKAL80ETC concert', 15, 20),
    new Item('Backstage passes to a TAFKAL80ETC concert', 10, 4),
    new Item('Backstage passes to a TAFKAL80ETC concert', 5, 4),
    // this conjured item does not work properly yet
    new Item('Conjured Mana Cake', 3, 6)
);

$app = new GildedRose($items);

$days = 15;
// if (count($argv) > 1) {
//     $days = (int) $argv[1];
// }

for ($i = 0; $i < $days; $i++) {
    echo nl2br("-------- day $i --------\n" . PHP_EOL);
    echo nl2br("name, sellIn, quality\n" . PHP_EOL);
    foreach ($items as $item) {
        echo nl2br ($item . PHP_EOL."\n");
    }
    echo PHP_EOL;
    $app->updateQuality();
}
