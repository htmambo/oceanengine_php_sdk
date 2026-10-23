<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponent implements \JsonSerializable
{
    /**
     * 组件弹出时间
     * @var int
     */
    protected ?int $advancedDuration = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeAfterImage
     */
    protected ?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeAfterImage $wipeAfterImage = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeBeforeImage
     */
    protected ?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeBeforeImage $wipeBeforeImage = null;

    /**
     * @var \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeImage
     */
    protected ?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeImage $wipeImage = null;

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
     * @return \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeAfterImage
     */
    public function getWipeAfterImage(): ?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeAfterImage
    {
        return $this->wipeAfterImage;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeAfterImage $wipeAfterImage
     * @return self
     */
    public function setWipeAfterImage(?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeAfterImage $wipeAfterImage): self
    {
        $this->wipeAfterImage = $wipeAfterImage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeBeforeImage
     */
    public function getWipeBeforeImage(): ?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeBeforeImage
    {
        return $this->wipeBeforeImage;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeBeforeImage $wipeBeforeImage
     * @return self
     */
    public function setWipeBeforeImage(?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeBeforeImage $wipeBeforeImage): self
    {
        $this->wipeBeforeImage = $wipeBeforeImage;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeImage
     */
    public function getWipeImage(): ?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeImage
    {
        return $this->wipeImage;
    }

    /**
     * @param \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeImage $wipeImage
     * @return self
     */
    public function setWipeImage(?\Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeImage $wipeImage): self
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
            $obj->wipeAfterImage = \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeAfterImage::fromArray($v);
        }
        if (($v = $data['wipe_before_image'] ?? null) !== null && is_array($v)) {
            $obj->wipeBeforeImage = \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeBeforeImage::fromArray($v);
        }
        if (($v = $data['wipe_image'] ?? null) !== null && is_array($v)) {
            $obj->wipeImage = \Oceanengine\Models\BrandCreativeUpdateV30RequestAdvancedCreativeInfoExploreOneTimeComponentWipeImage::fromArray($v);
        }
        if (($v = $data['wipe_text'] ?? null) !== null) {
            $obj->wipeText = (string) $v;
        }
        return $obj;
    }
}
