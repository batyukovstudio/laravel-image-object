<?php

namespace BatyukovStudio\LaravelImageObject\Ship\Parents\Transformers;

use BatyukovStudio\LaravelImageObject\Ship\Parents\Values\Value;

abstract class Transformer
{

    abstract public function transform(mixed $data): Value;

}
