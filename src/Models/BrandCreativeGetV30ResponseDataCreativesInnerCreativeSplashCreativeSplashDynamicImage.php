<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashDynamicImage implements \JsonSerializable
{
    /**
     * 背景图片列表
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashDynamicImageImageInfoBkListInner[]
     */
    protected ?array $imageInfoBkList = null;

    /**
     * 图片列表
     * @var \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashDynamicImageImageInfoListInner[]
     */
    protected ?array $imageInfoList = null;

    /**
     * 背景图片列表
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashDynamicImageImageInfoBkListInner[]
     */
    public function getImageInfoBkList(): ?array
    {
        return $this->imageInfoBkList;
    }

    /**
     * 背景图片列表
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashDynamicImageImageInfoBkListInner[] $imageInfoBkList
     * @return self
     */
    public function setImageInfoBkList(?array $imageInfoBkList): self
    {
        $this->imageInfoBkList = $imageInfoBkList;
        return $this;
    }

    /**
     * 图片列表
     * @return \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashDynamicImageImageInfoListInner[]
     */
    public function getImageInfoList(): ?array
    {
        return $this->imageInfoList;
    }

    /**
     * 图片列表
     * @param \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashDynamicImageImageInfoListInner[] $imageInfoList
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
            $obj->imageInfoBkList = array_map(fn ($vv) => \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashDynamicImageImageInfoBkListInner::fromArray($vv), $v);
        }
        if (($v = $data['image_info_list'] ?? null) !== null && is_array($v)) {
            $obj->imageInfoList = array_map(fn ($vv) => \Oceanengine\Models\BrandCreativeGetV30ResponseDataCreativesInnerCreativeSplashCreativeSplashDynamicImageImageInfoListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
