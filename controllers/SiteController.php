<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

/** 
 * Class Site Controller
 * 
 * @author Michał Borowiec <michal@cursed.pl>
 * @package app\controllers
*/

class SiteController extends Controller {
    public function home() {
        $params = [
            'name' => "Janek",
        ];

        return $this->render('home', $params);
    }

    public function contact() {
        return $this->render('contact');
    }

    public function handleContact(Request $request) {
        $body = $request->getBody();
        var_dump($body);
    }
}