<?php
/**
 * Created by PhpStorm.
 * User: maedc
 * Date: 18/1/2016
 * Time: 4:10 PM
 */

namespace Test\Providers;

use Collective\Html\HtmlServiceProvider as CollectiveHtmlServiceProvider;
use Test\Components\HtmlBuilder;
class HtmlServiceProvider extends CollectiveHtmlServiceProvider
{
    protected function registerHtmlBuilder()
    {
        $this->app->bindShared('html', function($app)
        {
            return new HtmlBuilder($app['config'],$app['view'],$app['url']);
        });
    }
}