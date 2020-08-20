<?php
// core_oop_diffs_private.php 
class Base { 
    public function getInfo() { 
        $this->info(); 
    }
    public function getFixedInfo() {
        $this->info();
    } 
    final private function info() { 
        echo __METHOD__ . PHP_EOL;
    } 
}
class Info extends Base { 
    public function getInfo() { 
        $this->info(); 
    }
    private function info() { 
        echo __METHOD__ . PHP_EOL;
    } 
} 
$base = new Base();
$base->getInfo();
$base->getFixedInfo();

$info = new Info();
$info->getInfo();
$info->getFixedInfo();
