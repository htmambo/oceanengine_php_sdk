<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEgg implements \JsonSerializable
{
    /**
     * 是否开启
     * @var bool
     */
    protected ?bool $enable = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggFarImage
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggFarImage $farImage = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggMediumImage
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggMediumImage $mediumImage = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggNearImage
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggNearImage $nearImage = null;

    /**
     * 是否开启
     * @return bool
     */
    public function getEnable(): ?bool
    {
        return $this->enable;
    }

    /**
     * 是否开启
     * @param bool $enable
     * @return self
     */
    public function setEnable(?bool $enable): self
    {
        $this->enable = $enable;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggFarImage
     */
    public function getFarImage(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggFarImage
    {
        return $this->farImage;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggFarImage $farImage
     * @return self
     */
    public function setFarImage(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggFarImage $farImage): self
    {
        $this->farImage = $farImage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggMediumImage
     */
    public function getMediumImage(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggMediumImage
    {
        return $this->mediumImage;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggMediumImage $mediumImage
     * @return self
     */
    public function setMediumImage(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggMediumImage $mediumImage): self
    {
        $this->mediumImage = $mediumImage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggNearImage
     */
    public function getNearImage(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggNearImage
    {
        return $this->nearImage;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggNearImage $nearImage
     * @return self
     */
    public function setNearImage(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggNearImage $nearImage): self
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
        if ($this->farImage !== null) {
            $result['far_image'] = $this->farImage;
        }
        if ($this->mediumImage !== null) {
            $result['medium_image'] = $this->mediumImage;
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
        if (($v = $data['far_image'] ?? null) !== null && is_array($v)) {
            $obj->farImage = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggFarImage::fromArray($v);
        }
        if (($v = $data['medium_image'] ?? null) !== null && is_array($v)) {
            $obj->mediumImage = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggMediumImage::fromArray($v);
        }
        if (($v = $data['near_image'] ?? null) !== null && is_array($v)) {
            $obj->nearImage = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticTwistEggNearImage::fromArray($v);
        }
        return $obj;
    }
}
