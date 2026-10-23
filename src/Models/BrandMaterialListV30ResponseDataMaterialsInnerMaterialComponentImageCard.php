<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentImageCard implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advancedDuration = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentImageCardImage
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentImageCardImage $image = null;

    /**
     * @return int
     */
    public function getAdvancedDuration(): ?int
    {
        return $this->advancedDuration;
    }

    /**
     * @param int $advancedDuration
     * @return self
     */
    public function setAdvancedDuration(?int $advancedDuration): self
    {
        $this->advancedDuration = $advancedDuration;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentImageCardImage
     */
    public function getImage(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentImageCardImage
    {
        return $this->image;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentImageCardImage $image
     * @return self
     */
    public function setImage(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentImageCardImage $image): self
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
        if ($this->advancedDuration !== null) {
            $result['advanced_duration'] = $this->advancedDuration;
        }
        if ($this->image !== null) {
            $result['image'] = $this->image;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advanced_duration'] ?? null) !== null) {
            $obj->advancedDuration = (int) $v;
        }
        if (($v = $data['image'] ?? null) !== null && is_array($v)) {
            $obj->image = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentImageCardImage::fromArray($v);
        }
        return $obj;
    }
}
