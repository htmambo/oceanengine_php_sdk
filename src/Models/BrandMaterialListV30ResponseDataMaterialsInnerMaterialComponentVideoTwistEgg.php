<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentVideoTwistEgg implements \JsonSerializable
{
    /**
     * @var bool
     */
    protected ?bool $enable = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentVideoTwistEggNearImage
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentVideoTwistEggNearImage $nearImage = null;

    /**
     * @return bool
     */
    public function getEnable(): ?bool
    {
        return $this->enable;
    }

    /**
     * @param bool $enable
     * @return self
     */
    public function setEnable(?bool $enable): self
    {
        $this->enable = $enable;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentVideoTwistEggNearImage
     */
    public function getNearImage(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentVideoTwistEggNearImage
    {
        return $this->nearImage;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentVideoTwistEggNearImage $nearImage
     * @return self
     */
    public function setNearImage(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentVideoTwistEggNearImage $nearImage): self
    {
        $this->nearImage = $nearImage;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->enable !== null) {
            $result['enable'] = $this->enable;
        }
        if ($this->nearImage !== null) {
            $result['near_image'] = $this->nearImage;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['enable'] ?? null) !== null) {
            $obj->enable = (bool) $v;
        }
        if (($v = $data['near_image'] ?? null) !== null && is_array($v)) {
            $obj->nearImage = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentVideoTwistEggNearImage::fromArray($v);
        }
        return $obj;
    }
}
