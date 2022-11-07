<?php

namespace BatyukovStudio\LaravelImageObject\Containers\ImageSection\Image\Value;

use BatyukovStudio\LaravelImageObject\Ship\Parents\Value\Collection as ParentCollection;
use BatyukovStudio\LaravelImageObject\Ship\Parents\Value\Value;

class ImagesCollection extends ParentCollection
{

    protected static function prepareItem(mixed $item): Value
    {
        $value = ImageValue::run();
        return $value;
    }

}
