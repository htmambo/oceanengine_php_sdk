<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTime implements \JsonSerializable
{
    /**
     * 组件弹出时间（单位：秒）
     * @var int
     */
    protected ?int $advancedDuration = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeAfterImage
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeAfterImage $wipeAfterImage = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeBeforeImage
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeBeforeImage $wipeBeforeImage = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeImage
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeImage $wipeImage = null;

    /**
     * 擦一擦文案
     * @var string
     */
    protected ?string $wipeText = null;

    /**
     * 组件弹出时间（单位：秒）
     * @return int
     */
    public function getAdvancedDuration(): ?int
    {
        return $this->advancedDuration;
    }

    /**
     * 组件弹出时间（单位：秒）
     * @param int $advancedDuration
     * @return self
     */
    public function setAdvancedDuration(?int $advancedDuration): self
    {
        $this->advancedDuration = $advancedDuration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeAfterImage
     */
    public function getWipeAfterImage(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeAfterImage
    {
        return $this->wipeAfterImage;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeAfterImage $wipeAfterImage
     * @return self
     */
    public function setWipeAfterImage(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeAfterImage $wipeAfterImage): self
    {
        $this->wipeAfterImage = $wipeAfterImage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeBeforeImage
     */
    public function getWipeBeforeImage(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeBeforeImage
    {
        return $this->wipeBeforeImage;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeBeforeImage $wipeBeforeImage
     * @return self
     */
    public function setWipeBeforeImage(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeBeforeImage $wipeBeforeImage): self
    {
        $this->wipeBeforeImage = $wipeBeforeImage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeImage
     */
    public function getWipeImage(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeImage
    {
        return $this->wipeImage;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeImage $wipeImage
     * @return self
     */
    public function setWipeImage(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeImage $wipeImage): self
    {
        $this->wipeImage = $wipeImage;
        return $this;
    }

    /**
     * 擦一擦文案
     * @return string
     */
    public function getWipeText(): ?string
    {
        return $this->wipeText;
    }

    /**
     * 擦一擦文案
     * @param string $wipeText
     * @return self
     */
    public function setWipeText(?string $wipeText): self
    {
        $this->wipeText = $wipeText;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advancedDuration !== null) {
            $result['advanced_duration'] = $this->advancedDuration;
        }
        if ($this->wipeAfterImage !== null) {
            $result['wipe_after_image'] = $this->wipeAfterImage;
        }
        if ($this->wipeBeforeImage !== null) {
            $result['wipe_before_image'] = $this->wipeBeforeImage;
        }
        if ($this->wipeImage !== null) {
            $result['wipe_image'] = $this->wipeImage;
        }
        if ($this->wipeText !== null) {
            $result['wipe_text'] = $this->wipeText;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advanced_duration'] ?? null) !== null) {
            $obj->advancedDuration = (int) $v;
        }
        if (($v = $data['wipe_after_image'] ?? null) !== null && is_array($v)) {
            $obj->wipeAfterImage = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeAfterImage::fromArray($v);
        }
        if (($v = $data['wipe_before_image'] ?? null) !== null && is_array($v)) {
            $obj->wipeBeforeImage = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeBeforeImage::fromArray($v);
        }
        if (($v = $data['wipe_image'] ?? null) !== null && is_array($v)) {
            $obj->wipeImage = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentExploreOneTimeWipeImage::fromArray($v);
        }
        if (($v = $data['wipe_text'] ?? null) !== null) {
            $obj->wipeText = (string) $v;
        }
        return $obj;
    }
}
