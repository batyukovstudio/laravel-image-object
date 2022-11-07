<?php

namespace BatyukovStudio\LaravelImageObject\Ship\Parents\Value;

use Illuminate\Support\Str;

abstract class Value
{
    public static function run(): static
    {
        $static = new static();
        $static->mount();
        return $static;
    }


    public function toArray(): array
    {
        $result = [];
        $vars = get_object_vars($this);

        foreach ($vars as $name => $value) {
            if ($value instanceof \Illuminate\Support\Collection) {
                $result[Str::snake($name)] = $value->toArray();
            } else {
                $result[Str::snake($name)] = $value;
            }
        }
        return $result;
    }

    /**
     * @return string
     */
    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    protected function mount(): void
    {

    }
}
