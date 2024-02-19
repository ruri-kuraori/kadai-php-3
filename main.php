<?php

namespace ruri\Main;

require_once 'human.php';

use ruri\Main\Animal\human;

class Main {
    static function start(){
        
        $tanaka = new Human('田中太郎',25,'電車');
        $suzuki = new Human('鈴木次郎',30,'野球');
        $sato = new Human('佐藤花子',20,'映画');
        
        $tanaka->say();
        $tanaka->think();
        $suzuki->say();
        $suzuki->think();
        $sato->say();
        $suzuki->think();
    }
}

Main::start();