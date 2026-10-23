<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentDynamicNoneFullScreen implements \JsonSerializable
{
    /**
     * 静态底图
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentDynamicNoneFullScreenImageInfoBkListInner[]
     */
    protected ?array $imageInfoBkList = null;

    /**
     * 图片
     * @var \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentDynamicNoneFullScreenImageInfoListInner[]
     */
    protected ?array $imageInfoList = null;

    /**
     * 静态底图
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentDynamicNoneFullScreenImageInfoBkListInner[]
     */
    public function getImageInfoBkList(): ?array
    {
        return $this->imageInfoBkList;
    }

    /**
     * 静态底图
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentDynamicNoneFullScreenImageInfoBkListInner[] $imageInfoBkList
     * @return self
     */
    public function setImageInfoBkList(?array $imageInfoBkList): self
    {
        $this->imageInfoBkList = $imageInfoBkList;
        return $this;
    }

    /**
     * 图片
     * @return \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentDynamicNoneFullScreenImageInfoListInner[]
     */
    public function getImageInfoList(): ?array
    {
        return $this->imageInfoList;
    }

    /**
     * 图片
     * @param \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentDynamicNoneFullScreenImageInfoListInner[] $imageInfoList
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
            $obj->imageInfoBkList = array_map(fn ($vv) => \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentDynamicNoneFullScreenImageInfoBkListInner::fromArray($vv), $v);
        }
        if (($v = $data['image_info_list'] ?? null) !== null && is_array($v)) {
            $obj->imageInfoList = array_map(fn ($vv) => \Oceanengine\Models\BrandMaterialListV30ResponseDataMaterialsInnerMaterialComponentDynamicNoneFullScreenImageInfoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
