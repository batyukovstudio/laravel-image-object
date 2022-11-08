<?php

namespace BatyukovStudio\LaravelImageObject\Containers\ImageSection\Image\Value;

use BatyukovStudio\LaravelImageObject\Ship\Parents\Values\Value as ParentValue;

class ImageConversionValue extends ParentValue
{

    public string $mimeType;

    public bool $isOriginal;

    public ImageConversionSizesCollection $imageConversionSizesCollection;

    public function __construct()
    {
        $this->imageConversionSizesCollection = new ImageConversionSizesCollection();
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
     * @return ImageConversionSizesCollection
     */
    public function getImageConversionSizesCollection(): ImageConversionSizesCollection
    {
        return $this->imageConversionSizesCollection;
    }

    /**
     * @param ImageConversionSizesCollection $imageConversionSizesCollection
     * @return $this
     */
    public function setImageConversionSizesCollection(ImageConversionSizesCollection $imageConversionSizesCollection): self
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
