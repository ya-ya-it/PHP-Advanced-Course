<?php
namespace App;

use Countable;
use Interface\LogInterface;
use Interface\PrintInterface;

class Logger implements LogInterface, PrintInterface, Countable {
    private $string = "";

    public function log (string $message) {
        return $message . ' logged!' . "\n";
    }

    // Interface implemented - implement ALL methods from the interface
    public function print (string $message) {
        return $message . ' printed!' . "\n";
    }
    
    public function save (string $message) {
        $this->string = $message;
    }

    public function count() {
        return strlen($this->string);
    }
}