<?php

class DB extends NOOF
{
    public static function pdo()
    {
        new PDO("mysql:host=localhost;dbname=noof", "root", "1234");
    }
}
