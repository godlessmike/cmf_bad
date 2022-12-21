<?php

/** 
 * Class Response
 * 
 * @author Michał Borowiec <michal@cursed.pl>
 * @package app\core
*/

namespace app\core;

class Response {

    public function setStatusCode(int $code) {
        http_response_code($code);
    }
}