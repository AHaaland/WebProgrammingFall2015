<?php
require_once '../inc/global.php';
class Person {
    public static function Get(){
        return FetchAll("SELECT * FROM FitFriend_Users");
    }
}