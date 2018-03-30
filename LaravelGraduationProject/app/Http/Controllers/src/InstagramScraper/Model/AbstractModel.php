<?php

//namespace InstagramScraper\Model;
namespace App\Http\Controllers\src\InstagramScraper\Model;
use App\Http\Controllers\src\InstagramScraper\Traits\ArrayLikeTrait;
use App\Http\Controllers\src\InstagramScraper\Traits\InitializerTrait;

/**
 * Class AbstractModel
 * @package InstagramScraper\Model
 */
abstract class AbstractModel implements \ArrayAccess
{
    use InitializerTrait, ArrayLikeTrait;

    /**
     * @var array
     */
    protected static $initPropertiesMap = [];

    /**
     * @return array
     */
    public static function getColumns()
    {
        return \array_keys(static::$initPropertiesMap);
    }
}