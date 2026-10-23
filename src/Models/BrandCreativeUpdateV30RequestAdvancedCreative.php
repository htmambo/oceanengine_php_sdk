<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeUpdateV30RequestAdvancedCreative implements \JsonSerializable
{
    /**
     * 时长
     * @var int
     */
    protected ?int $duration = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeImage
     */
    protected ?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeImage $image = null;

    /**
     * 时长
     * @return int
     */
    public function getDuration(): ?int
    {
        return $this->duration;
    }

    /**
     * 时长
     * @param int $duration
     * @return self
     */
    public function setDuration(?int $duration): self
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeImage
     */
    public function getImage(): ?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeImage
    {
        return $this->image;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeImage $image
     * @return self
     */
    public function setImage(?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeImage $image): self
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
            $obj->image = \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeImage::fromArray($v);
        }
        return $obj;
    }
}
