<?php
class Message
{
    public static function setMsg($text, $type)
    {
        if ($type === 'error') {
            $_SESSION['errorMsg'] = $text;
        } elseif ($type === 'success') {
            $_SESSION['successMsg'] = $text;
        }
    }
}
