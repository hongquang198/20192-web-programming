<?php

class Page {

    public $page = "page 1";
    public $title = "My page 1";
    public $year = 2020;
    public $copyright = "Copyrighted, Trademark 2000";

    public function addHeader($header) {
        print $header . "<br>";
    }

    function addContent($content) {
        print $content . "<br>";
    }

    function addFooter($footer) {
        print $footer . "<br>";
    }

    function get($header, $content, $footer) {
        return $header . $content . $footer;
    }

}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

