<?php

namespace BatyukovStudio\ImageObject\Containers\ImageSection\Image\Value;

use BatyukovStudio\ImageObject\Ship\Parents\Value\Collection as ParentCollection;
use BatyukovStudio\ImageObject\Ship\Parents\Value\Value;

class ImagesCollection extends ParentCollection
{

    protected static function prepareItem(mixed $item): Value
    {
        $value = ImageValue::run();
        return $value;
    }

}
