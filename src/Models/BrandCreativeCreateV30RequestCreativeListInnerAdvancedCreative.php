<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreative implements \JsonSerializable
{
    /**
     * 图片弹出时间
     * @var int
     */
    protected ?int $duration = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeImage
     */
    protected ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeImage $image = null;

    /**
     * 图片弹出时间
     * @return int
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * 图片弹出时间
     * @param int $duration
     * @return self
     */
    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeImage
     */
    public function getImage(): ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeImage
    {
        return $this->image;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeImage $image
     * @return self
     */
    public function setImage(?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeImage $image): self
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->duration !== null) {
            $result['duration'] = $this->duration;
        }
        if ($this->image !== null) {
            $result['image'] = $this->image;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['duration'] ?? null) !== null) {
            $obj->duration = (int) $v;
        }
        if (($v = $data['image'] ?? null) !== null && is_array($v)) {
            $obj->image = \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeImage::fromArray($v);
        }
        return $obj;
    }
}
