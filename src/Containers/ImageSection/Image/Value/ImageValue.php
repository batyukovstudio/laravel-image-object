<?php

namespace BatyukovStudio\LaravelImageObject\Containers\ImageSection\Image\Value;

use BatyukovStudio\LaravelImageObject\Ship\Parents\Value\Value as ParentValue;

class ImageValue extends ParentValue
{

    public string $alt;

    public ImageConversionsCollection $imageConversionsCollection;

    public ImageConversionsCollection $imageGalleryConversionsCollection;

    public bool $isWithGallery;

    public function __construct()
    {
        $this->imageConversionsCollection = new ImageConversionsCollection();
        $this->imageGalleryConversionsCollection = new ImageConversionsCollection();
    }

    /**
     * @return string
     */
    public function getAlt(): string
    {
        return $this->alt;
    }

    /**
     * @param string $alt
     * @return $this
     */
    public function setAlt(string $alt): self
    {
        $this->alt = $alt;
        return $this;
    }

    /**
     * @return ImageConversionsCollection
     */
    public function getImageConversionsCollection(): ImageConversionsCollection
    {
        return $this->imageConversionsCollection;
    }

    /**
     * @param ImageConversionsCollection $imageConversionsCollection
     * @return $this
     */
    public function setImageConversionsCollection(ImageConversionsCollection $imageConversionsCollection): self
    {
        $this->imageConversionsCollection = $imageConversionsCollection;
        return $this;
    }

    /**
     * @param bool $isWithGallery
     * @return $this
     */
    public function setWithGallery(bool $isWithGallery): self
    {
        $this->isWithGallery = $isWithGallery;
        return $this;
    }

    /**
     * @return bool
     */
    public function isWithGallery(): bool
    {
        return $this->isWithGallery;
    }

    /**
     * @return imageConversionsCollection
     */
    public function getImageGalleryConversionsCollection(): imageConversionsCollection
    {
        return $this->imageGalleryConversionsCollection;
    }

    /**
     * @param imageConversionsCollection $imageGalleryConversionsCollection
     * @return $this
     */
    public function setImageGalleryConversionsCollection(imageConversionsCollection $imageGalleryConversionsCollection): self
    {
        $this->imageGalleryConversionsCollection = $imageGalleryConversionsCollection;
        return $this;
    }


}
