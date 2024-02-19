<?php

namespace ruri\Main\Animal;

trait Thinkable {
    public function think(){
        
        print '私は'.$this->hobby .'について考えています。';
}
}