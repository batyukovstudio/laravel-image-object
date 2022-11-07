<?php

namespace BatyukovStudio\LaravelImageObject\Containers\ImageSection\Image\Value;

use BatyukovStudio\LaravelImageObject\Ship\Parents\Value\Collection as ParentCollection;
use BatyukovStudio\LaravelImageObject\Ship\Parents\Value\Value;


class ImageConversionsCollection extends ParentCollection
{

    protected static function prepareItem(mixed $item): Value
    {
        $imageConversionValue = ImageConversionValue::run();
        return $imageConversionValue;
    }
}
