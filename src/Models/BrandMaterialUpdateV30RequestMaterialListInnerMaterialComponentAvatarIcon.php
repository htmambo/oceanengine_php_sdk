<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAvatarIcon implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAvatarIconImage
     */
    protected ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAvatarIconImage $image = null;

    /**
     * @return \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAvatarIconImage
     */
    public function getImage(): ?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAvatarIconImage
    {
        return $this->image;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAvatarIconImage $image
     * @return self
     */
    public function setImage(?\Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAvatarIconImage $image): self
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
            $obj->image = \Oceanengine\Models\BrandMaterialUpdateV30RequestMaterialListInnerMaterialComponentAvatarIconImage::fromArray($v);
        }
        return $obj;
    }
}
