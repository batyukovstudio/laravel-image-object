<?php

namespace BatyukovStudio\LaravelImageObject\Containers\ImageSection\Image\Value;

use BatyukovStudio\LaravelImageObject\Ship\Parents\Value\Collection as ParentCollection;
use BatyukovStudio\LaravelImageObject\Ship\Parents\Value\Value;


class ImageConversionSizesCollection extends ParentCollection
{
    protected static function prepareItem(mixed $item): Value
    {
        $value = ImageConversionSizeValue::run();
        return $value;
    }
}
