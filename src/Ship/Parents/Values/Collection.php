<?php

namespace BatyukovStudio\LaravelImageObject\Ship\Parents\Value;

use BatyukovStudio\LaravelImageObject\Ship\Parents\Transformers\ImageTransformer;
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
     * @return static
     */
    public static function run(Arrayable|array $items): static
    {
        return new static($items);
    }

    /**
     * @param Arrayable|array $items
     * @param ImageTransformer $imageTransformerClass
     * @return static
     */
    protected static function runWithPreparing(Arrayable|array $items, ImageTransformer $imageTransformerClass): static
    {
        foreach ($items as $key => $item) {
            $items[$key] = app($imageTransformerClass)->transform($item);
        }
        return new static($items);
    }
}
