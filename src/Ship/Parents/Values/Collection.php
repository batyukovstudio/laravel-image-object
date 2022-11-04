<?php

namespace BatyukovStudio\ImageObject\Ship\Parents\Value;

use Illuminate\Contracts\Support\Arrayable;

abstract class Collection extends \Illuminate\Support\Collection
{
    /**
     * @return array|mixed[]
     */
    public function toArray()
    {
        return $this->map(fn($value) => $value->toArray())->all();
    }

    /**
     * @param Arrayable|array $items
     * @return static
     */
    public static function run(Arrayable|array $items): static
    {
        foreach ($items as $key => $item) {
            $items[$key] = static::prepareItem($item);
        }
        return new static($items);
    }

    /**
     * @param mixed $item
     * @return Value
     */
    abstract protected static function prepareItem(mixed $item): Value;
}
