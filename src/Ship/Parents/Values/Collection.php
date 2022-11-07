<?php

namespace BatyukovStudio\LaravelImageObject\Ship\Parents\Value;

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
     * @param string|null $imageTransformerClass
     * @return static
     */
    public static function run(Arrayable|array $items, string $imageTransformerClass = null): static
    {
        if ($imageTransformerClass !== null){
            foreach ($items as $key => $item) {
                $items[$key] = $imageTransformerClass::transform($item);
            }
        }

        return new static($items);
    }

}
