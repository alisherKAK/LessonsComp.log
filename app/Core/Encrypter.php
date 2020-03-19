<?php


namespace Step\Core;


final class Encrypter
{
    static function encrypt($str) {
        return password_hash($str, PASSWORD_DEFAULT);
    }

    static function validate($str, $hash) : bool {
        return password_verify($str, $hash);
    }

}