<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAdvancedCardImage implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAdvancedCardImageImage
     */
    protected ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAdvancedCardImageImage $image = null;

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAdvancedCardImageImage
     */
    public function getImage(): ?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAdvancedCardImageImage
    {
        return $this->image;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAdvancedCardImageImage $image
     * @return self
     */
    public function setImage(?\Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAdvancedCardImageImage $image): self
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
        if ($this->image !== null) {
            $result['image'] = $this->image;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image'] ?? null) !== null && is_array($v)) {
            $obj->image = \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentAdvancedCardImageImage::fromArray($v);
        }
        return $obj;
    }
}
