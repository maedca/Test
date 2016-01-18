<?php

namespace Test\Components;
use Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;
class HtmlBuilder extends CollectiveHtmlBuilder
{
    public static function menu(){
        return view('partials/menu');
    }
}