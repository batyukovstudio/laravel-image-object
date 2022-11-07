<?php

namespace BatyukovStudio\LaravelImageObject\Containers\ImageSection\Image\Value;

use BatyukovStudio\LaravelImageObject\Ship\Parents\Value\Value as ParentValue;

class ImageConversionValue extends ParentValue
{

    public string $mimeType;

    public bool $isOriginal;

    public imageConversionSizesCollection $imageConversionSizesCollection;

    public function __construct()
    {
        $this->imageConversionSizesCollection = new imageConversionSizesCollection();
    }

    /**
     * @return string
     */
    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    /**
     * @param string $mimeType
     * @return $this
     */
    public function setMimeType(string $mimeType): self
    {
        $this->mimeType = $mimeType;
        return $this;
    }

    /**
     * @return imageConversionSizesCollection
     */
    public function getImageConversionSizesCollection(): imageConversionSizesCollection
    {
        return $this->imageConversionSizesCollection;
    }

    /**
     * @param imageConversionSizesCollection $imageConversionSizesCollection
     * @return $this
     */
    public function setImageConversionSizesCollection(imageConversionSizesCollection $imageConversionSizesCollection): self
    {
        $this->imageConversionSizesCollection = $imageConversionSizesCollection;
        return $this;
    }

    /**
     * @return bool
     */
    public function isOriginal(): bool
    {
        return $this->isOriginal;
    }

    /**
     * @param bool $isOriginal
     * @return $this
     */
    public function setIsOriginal(bool $isOriginal): self
    {
        $this->isOriginal = $isOriginal;
        return $this;
    }




}
