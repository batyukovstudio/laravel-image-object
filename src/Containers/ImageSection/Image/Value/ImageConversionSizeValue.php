<?php

namespace BatyukovStudio\ImageObject\Containers\ImageSection\Image\Value;

use BatyukovStudio\ImageObject\Ship\Parents\Value\Value as ParentValue;

class ImageConversionSizeValue extends ParentValue
{

    public string $width;
    public string $height;
    public string $src;

    /**
     * @return string
     */
    public function getWidth(): string
    {
        return $this->width;
    }

    /**
     * @param string $width
     * @return $this
     */
    public function setWidth(string $width): self
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return string
     */
    public function getHeight(): string
    {
        return $this->height;
    }

    /**
     * @param string $height
     * @return $this
     */
    public function setHeight(string $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return string
     */
    public function getSrc(): string
    {
        return $this->src;
    }

    /**
     * @param string $src
     * @return $this
     */
    public function setSrc(string $src): self
    {
        $this->src = $src;
        return $this;
    }



}
