<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentDynamicFullScreen implements \JsonSerializable
{
    /**
     * 底图
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentDynamicFullScreenImageInfoBkListInner[]
     */
    protected ?array $imageInfoBkList = null;

    /**
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentDynamicFullScreenImageInfoListInner[]
     */
    protected ?array $imageInfoList = null;

    /**
     * 底图
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentDynamicFullScreenImageInfoBkListInner[]
     */
    public function getImageInfoBkList(): ?array
    {
        return $this->imageInfoBkList;
    }

    /**
     * 底图
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentDynamicFullScreenImageInfoBkListInner[] $imageInfoBkList
     * @return self
     */
    public function setImageInfoBkList(?array $imageInfoBkList): self
    {
        $this->imageInfoBkList = $imageInfoBkList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentDynamicFullScreenImageInfoListInner[]
     */
    public function getImageInfoList(): ?array
    {
        return $this->imageInfoList;
    }

    /**
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentDynamicFullScreenImageInfoListInner[] $imageInfoList
     * @return self
     */
    public function setImageInfoList(?array $imageInfoList): self
    {
        $this->imageInfoList = $imageInfoList;
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
        if ($this->imageInfoList !== null) {
            $result['image_info_list'] = $this->imageInfoList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['image_info_bk_list'] ?? null) !== null && is_array($v)) {
            $obj->imageInfoBkList = array_map(fn ($vv) => \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentDynamicFullScreenImageInfoBkListInner::fromArray($vv), $v);
        }
        if (($v = $data['image_info_list'] ?? null) !== null && is_array($v)) {
            $obj->imageInfoList = array_map(fn ($vv) => \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentDynamicFullScreenImageInfoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
