<?php

namespace Trinhnk\HtmlDomParser\Facades;

use Illuminate\Support\Facades\Facade;

class HtmlDomParser extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'html-dom-parser';
    }
}
