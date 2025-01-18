<?php

class html{
    public static function doctype():void{
        echo "<!DOCTYPE html>".PHP_EOL;
    }
    public static function footer($open = true):void{
        echo $open ? "<footer>".PHP_EOL:"</footer>".PHP_EOL;
    }
    public static function div($open = true):void{
        echo $open ? "<div>".PHP_EOL:"</div>".PHP_EOL;
    }
}



?>