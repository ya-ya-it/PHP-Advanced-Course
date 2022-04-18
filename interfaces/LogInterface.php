<?php

namespace Interface;

interface LogInterface {
    // always public!
    // only method name and params
    public function log(string $message);
}