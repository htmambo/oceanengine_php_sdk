<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CarouselAdGetV2ResponseDataCarouselsInnerImagesInner implements \JsonSerializable
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
     * @var \Oceanengine\Models\CarouselAdGetV2ResponseDataCarouselsInnerImagesInnerImageSubject
     */
    protected ?\Oceanengine\Models\CarouselAdGetV2ResponseDataCarouselsInnerImagesInnerImageSubject $imageSubject = null;

    /**
     * @var float
     */
    protected ?float $ratio = null;

    /**
     * @var int
     */
    protected ?int $size = null;

    /**
     * @var array<string,mixed>
     */
    protected ?array $url = null;

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
     * @return \Oceanengine\Models\CarouselAdGetV2ResponseDataCarouselsInnerImagesInnerImageSubject
     */
    public function getImageSubject(): ?\Oceanengine\Models\CarouselAdGetV2ResponseDataCarouselsInnerImagesInnerImageSubject
    {
        return $this->imageSubject;
    }

    /**
     * @param \Oceanengine\Models\CarouselAdGetV2ResponseDataCarouselsInnerImagesInnerImageSubject $imageSubject
     * @return self
     */
    public function setImageSubject(?\Oceanengine\Models\CarouselAdGetV2ResponseDataCarouselsInnerImagesInnerImageSubject $imageSubject): self
    {
        $this->imageSubject = $imageSubject;
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
     * @return int
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return self
     */
    public function setSize(?int $size): self
    {
        $this->size = $size;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    public function getUrl(): ?array
    {
        return $this->url;
    }

    /**
     * @param array<string,mixed> $url
     * @return self
     */
    public function setUrl(?array $url): self
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
        if ($this->imageSubject !== null) {
            $result['image_subject'] = $this->imageSubject;
        }
        if ($this->ratio !== null) {
            $result['ratio'] = $this->ratio;
        }
        if ($this->size !== null) {
            $result['size'] = $this->size;
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
        if (($v = $data['image_subject'] ?? null) !== null && is_array($v)) {
            $obj->imageSubject = \Oceanengine\Models\CarouselAdGetV2ResponseDataCarouselsInnerImagesInnerImageSubject::fromArray($v);
        }
        if (($v = $data['ratio'] ?? null) !== null) {
            $obj->ratio = (float) $v;
        }
        if (($v = $data['size'] ?? null) !== null) {
            $obj->size = (int) $v;
        }
        if (($v = $data['url'] ?? null) !== null && is_array($v)) {
            $obj->url = $v;
        }
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (int) $v;
        }
        return $obj;
    }
}
