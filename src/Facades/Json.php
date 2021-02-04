<?php

namespace Finagin\Json\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string encode($value, int $options = \Finagin\Json\Contracts\Json::DEFAULT_OPTIONS, int $depth = \Finagin\Json\Contracts\Json::DEPTH)
 * @method static array|object decode(string $json, int $options = \Finagin\Json\Contracts\Json::DEFAULT_OPTIONS, bool $assoc = false)
 * @method static array decodeAsArray(string $json, int $options = \Finagin\Json\Contracts\Json::DEFAULT_OPTIONS)
 * @method static object decodeAsObject(string $json, int $options = \Finagin\Json\Contracts\Json::DEFAULT_OPTIONS)
 * @see \Finagin\Json\Contracts\Json
 */
class Json extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Finagin\Json\Contracts\Json::class;
    }
}
