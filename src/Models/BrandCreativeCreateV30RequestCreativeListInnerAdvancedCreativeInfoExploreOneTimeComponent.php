<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponent implements \JsonSerializable
{
    /**
     * 组件弹出时间
     * @var int
     */
    protected ?int $advancedDuration = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeAfterImage
     */
    protected ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeAfterImage $wipeAfterImage = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeBeforeImage
     */
    protected ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeBeforeImage $wipeBeforeImage = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeImage
     */
    protected ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeImage $wipeImage = null;

    /**
     * 擦一擦文案
     * @var string
     */
    protected ?string $wipeText = null;

    /**
     * 组件弹出时间
     * @return int
     */
    public function getAdvancedDuration(): ?int
    {
        return $this->advancedDuration;
    }

    /**
     * 组件弹出时间
     * @param int $advancedDuration
     * @return self
     */
    public function setAdvancedDuration(?int $advancedDuration): self
    {
        $this->advancedDuration = $advancedDuration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeAfterImage
     */
    public function getWipeAfterImage(): ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeAfterImage
    {
        return $this->wipeAfterImage;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeAfterImage $wipeAfterImage
     * @return self
     */
    public function setWipeAfterImage(?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeAfterImage $wipeAfterImage): self
    {
        $this->wipeAfterImage = $wipeAfterImage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeBeforeImage
     */
    public function getWipeBeforeImage(): ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeBeforeImage
    {
        return $this->wipeBeforeImage;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeBeforeImage $wipeBeforeImage
     * @return self
     */
    public function setWipeBeforeImage(?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeBeforeImage $wipeBeforeImage): self
    {
        $this->wipeBeforeImage = $wipeBeforeImage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeImage
     */
    public function getWipeImage(): ?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeImage
    {
        return $this->wipeImage;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeImage $wipeImage
     * @return self
     */
    public function setWipeImage(?\Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeImage $wipeImage): self
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
            $obj->wipeAfterImage = \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeAfterImage::fromArray($v);
        }
        if (($v = $data['wipe_before_image'] ?? null) !== null && is_array($v)) {
            $obj->wipeBeforeImage = \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeBeforeImage::fromArray($v);
        }
        if (($v = $data['wipe_image'] ?? null) !== null && is_array($v)) {
            $obj->wipeImage = \Oceanengine\Models\BrandCreativeCreateV30RequestCreativeListInnerAdvancedCreativeInfoExploreOneTimeComponentWipeImage::fromArray($v);
        }
        if (($v = $data['wipe_text'] ?? null) !== null) {
            $obj->wipeText = (string) $v;
        }
        return $obj;
    }
}
