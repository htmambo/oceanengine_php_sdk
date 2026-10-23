<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanCarouselGetV10ResponseDataCarouselsInnerImagesInner implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $height = null;

    /**
     * @var string
     */
    protected ?string $imageId = null;

    /**
     * @var int
     */
    protected ?int $imageMaterialId = null;

    /**
     * @var float
     */
    protected ?float $ratio = null;

    /**
     * @var string
     */
    protected ?string $url = null;

    /**
     * @var int
     */
    protected ?int $width = null;

    /**
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageId(): ?string
    {
        return $this->imageId;
    }

    /**
     * @param string $imageId
     * @return self
     */
    public function setImageId(?string $imageId): self
    {
        $this->imageId = $imageId;
        return $this;
    }

    /**
     * @return int
     */
    public function getImageMaterialId(): ?int
    {
        return $this->imageMaterialId;
    }

    /**
     * @param int $imageMaterialId
     * @return self
     */
    public function setImageMaterialId(?int $imageMaterialId): self
    {
        $this->imageMaterialId = $imageMaterialId;
        return $this;
    }

    /**
     * @return float
     */
    public function getRatio(): ?float
    {
        return $this->ratio;
    }

    /**
     * @param float $ratio
     * @return self
     */
    public function setRatio(?float $ratio): self
    {
        $this->ratio = $ratio;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return self
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return self
     */
    public function setWidth(?int $width): self
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->height !== null) {
            $result['height'] = $this->height;
        }
        if ($this->imageId !== null) {
            $result['image_id'] = $this->imageId;
        }
        if ($this->imageMaterialId !== null) {
            $result['image_material_id'] = $this->imageMaterialId;
        }
        if ($this->ratio !== null) {
            $result['ratio'] = $this->ratio;
        }
        if ($this->url !== null) {
            $result['url'] = $this->url;
        }
        if ($this->width !== null) {
            $result['width'] = $this->width;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['height'] ?? null) !== null) {
            $obj->height = (int) $v;
        }
        if (($v = $data['image_id'] ?? null) !== null) {
            $obj->imageId = (string) $v;
        }
        if (($v = $data['image_material_id'] ?? null) !== null) {
            $obj->imageMaterialId = (int) $v;
        }
        if (($v = $data['ratio'] ?? null) !== null) {
            $obj->ratio = (float) $v;
        }
        if (($v = $data['url'] ?? null) !== null) {
            $obj->url = (string) $v;
        }
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (int) $v;
        }
        return $obj;
    }
}
