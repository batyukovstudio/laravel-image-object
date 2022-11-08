<?php

namespace BatyukovStudio\LaravelImageObject\Ship\Parents\Transformers;

use BatyukovStudio\LaravelImageObject\Ship\Parents\Values\Value;

abstract class Transformer
{

    abstract public static function transform(mixed $data): Value;

}
