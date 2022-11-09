<?php

namespace BatyukovStudio\LaravelImageObject\Ship\Parents\Values;

use BatyukovStudio\LaravelImageObject\Ship\Parents\Transformers\Transformer;
use Illuminate\Contracts\Support\Arrayable;

abstract class Collection extends \Illuminate\Support\Collection
{

    /**
     * @return array
     */
    public function toArray(): array
    {
        return $this->map(fn($value) => $value->toArray())->all();
    }

    /**
     * @param Arrayable|array $items
     * @param Transformer|null $transformer
     * @return static
     */
    public static function run(Arrayable|array $items, Transformer $transformer = null): static
    {
        if ($transformer !== null){
            foreach ($items as $key => $item) {
                $items[$key] = $transformer->transform($item);
            }
        }

        return new static($items);
    }

}
