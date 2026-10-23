<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticNoneFullScreen implements \JsonSerializable
{
    /**
     * 背景图
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticNoneFullScreenImageInfoBkListInner[]
     */
    protected ?array $imageInfoBkList = null;

    /**
     * 背景图
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticNoneFullScreenImageInfoBkListInner[]
     */
    public function getImageInfoBkList(): ?array
    {
        return $this->imageInfoBkList;
    }

    /**
     * 背景图
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticNoneFullScreenImageInfoBkListInner[] $imageInfoBkList
     * @return self
     */
    public function setImageInfoBkList(?array $imageInfoBkList): self
    {
        $this->imageInfoBkList = $imageInfoBkList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->imageInfoBkList !== null) {
            $result['image_info_bk_list'] = $this->imageInfoBkList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_info_bk_list'] ?? null) !== null && is_array($v)) {
            $obj->imageInfoBkList = array_map(fn ($vv) => \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentStaticNoneFullScreenImageInfoBkListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
