<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectMaterialCreateV30RequestImageMaterialListInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $imageId = null;

    /**
     * @var \Oceanengine\Models\OcProjectMaterialCreateV30ImageMaterialListImageMode
     */
    protected ?string $imageMode = null;

    /**
     * @var string
     */
    protected ?string $images = null;

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
     * @return \Oceanengine\Models\OcProjectMaterialCreateV30ImageMaterialListImageMode
     */
    public function getImageMode(): ?string
    {
        return $this->imageMode;
    }

    /**
     * @param \Oceanengine\Models\OcProjectMaterialCreateV30ImageMaterialListImageMode $imageMode
     * @return self
     */
    public function setImageMode(?string $imageMode): self
    {
        $this->imageMode = $imageMode;
        return $this;
    }

    /**
     * @return string
     */
    public function getImages(): ?string
    {
        return $this->images;
    }

    /**
     * @param string $images
     * @return self
     */
    public function setImages(?string $images): self
    {
        $this->images = $images;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->imageId !== null) {
            $result['image_id'] = $this->imageId;
        }
        if ($this->imageMode !== null) {
            $result['image_mode'] = $this->imageMode;
        }
        if ($this->images !== null) {
            $result['images'] = $this->images;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_id'] ?? null) !== null) {
            $obj->imageId = (string) $v;
        }
        if (($v = $data['image_mode'] ?? null) !== null) {
            $obj->imageMode = (string) $v;
        }
        if (($v = $data['images'] ?? null) !== null) {
            $obj->images = (string) $v;
        }
        return $obj;
    }
}
