<?php

namespace BatyukovStudio\LaravelImageObject\Ship\Parents\Transformers;

use BatyukovStudio\LaravelImageObject\Containers\ImageSection\Image\Value\ImageValue;

abstract class ImageTransformer
{

    abstract public static function transform(mixed $imageData): ImageValue;

}
