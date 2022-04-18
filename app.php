<?php
// namespace App;
include "length.php";
include "weight.php";
use Length\Collection as LengthCollection;


class Collection {
    public static function get() {
        echo "km, m, sm";
    }
}

LengthCollection::get();