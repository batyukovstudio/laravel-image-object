<?php

namespace BatyukovStudio\ImageObject\Containers\ImageSection\Image\Value;

use BatyukovStudio\ImageObject\Ship\Parents\Value\Collection as ParentCollection;
use BatyukovStudio\ImageObject\Ship\Parents\Value\Value;


class ImageConversionsCollection extends ParentCollection
{

    protected static function prepareItem(mixed $item): Value
    {
        $imageConversionValue = ImageConversionValue::run();
        return $imageConversionValue;
    }
}
