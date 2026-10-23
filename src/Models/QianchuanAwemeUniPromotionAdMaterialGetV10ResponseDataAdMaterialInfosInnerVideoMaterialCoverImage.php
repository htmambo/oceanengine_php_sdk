<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAwemeUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInnerVideoMaterialCoverImage implements \JsonSerializable
{
    /**
     * 高
     * @var int
     */
    protected ?int $height = null;

    /**
     * 图片id
     * @var string
     */
    protected ?string $id = null;

    /**
     * 图片链接
     * @var string
     */
    protected ?string $imageUrl = null;

    /**
     * 宽
     * @var int
     */
    protected ?int $width = null;

    /**
     * 高
     * @return int
     */
    public function getHeight(): ?int
    {
        return $this->height;
    }

    /**
     * 高
     * @param int $height
     * @return self
     */
    public function setHeight(?int $height): self
    {
        $this->height = $height;
        return $this;
    }

    /**
     * 图片id
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * 图片id
     * @param string $id
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * 图片链接
     * @return string
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * 图片链接
     * @param string $imageUrl
     * @return self
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    /**
     * 宽
     * @return int
     */
    public function getWidth(): ?int
    {
        return $this->width;
    }

    /**
     * 宽
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
        if ($this->id !== null) {
            $result['id'] = $this->id;
        }
        if ($this->imageUrl !== null) {
            $result['image_url'] = $this->imageUrl;
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
        if (($v = $data['id'] ?? null) !== null) {
            $obj->id = (string) $v;
        }
        if (($v = $data['image_url'] ?? null) !== null) {
            $obj->imageUrl = (string) $v;
        }
        if (($v = $data['width'] ?? null) !== null) {
            $obj->width = (int) $v;
        }
        return $obj;
    }
}
