<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class CdpBrandGetV30ResponseData implements \JsonSerializable
{
    /**
     * 品牌所属类别
     * @var \Oceanengine\Models\CdpBrandGetV30ResponseDataBrandCategoryInfoInner[]
     */
    protected ?array $brandCategoryInfo = null;

    /**
     * @var \Oceanengine\Models\CdpBrandGetV30ResponseDataBrandInfoDataInner[]
     */
    protected ?array $brandInfoData = null;

    /**
     * 品牌所属类别
     * @return \Oceanengine\Models\CdpBrandGetV30ResponseDataBrandCategoryInfoInner[]
     */
    public function getBrandCategoryInfo(): ?array
    {
        return $this->brandCategoryInfo;
    }

    /**
     * 品牌所属类别
     * @param \Oceanengine\Models\CdpBrandGetV30ResponseDataBrandCategoryInfoInner[] $brandCategoryInfo
     * @return self
     */
    public function setBrandCategoryInfo(?array $brandCategoryInfo): self
    {
        $this->brandCategoryInfo = $brandCategoryInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\CdpBrandGetV30ResponseDataBrandInfoDataInner[]
     */
    public function getBrandInfoData(): ?array
    {
        return $this->brandInfoData;
    }

    /**
     * @param \Oceanengine\Models\CdpBrandGetV30ResponseDataBrandInfoDataInner[] $brandInfoData
     * @return self
     */
    public function setBrandInfoData(?array $brandInfoData): self
    {
        $this->brandInfoData = $brandInfoData;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->brandCategoryInfo !== null) {
            $result['brand_category_info'] = $this->brandCategoryInfo;
        }
        if ($this->brandInfoData !== null) {
            $result['brand_info_data'] = $this->brandInfoData;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['brand_category_info'] ?? null) !== null && is_array($v)) {
            $obj->brandCategoryInfo = array_map(fn ($vv) => \Oceanengine\Models\CdpBrandGetV30ResponseDataBrandCategoryInfoInner::fromArray($vv), $v);
        }
        if (($v = $data['brand_info_data'] ?? null) !== null && is_array($v)) {
            $obj->brandInfoData = array_map(fn ($vv) => \Oceanengine\Models\CdpBrandGetV30ResponseDataBrandInfoDataInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
