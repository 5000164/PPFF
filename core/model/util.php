<?php

class UtilModel
{
    public static function escape($string)
    {
        return htmlspecialchars($string);
    }
}
