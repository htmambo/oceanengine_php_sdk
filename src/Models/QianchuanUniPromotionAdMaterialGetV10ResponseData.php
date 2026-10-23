<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanUniPromotionAdMaterialGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInner[]
     */
    protected ?array $adMaterialInfos = null;

    /**
     * @var \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInner[]
     */
    public function getAdMaterialInfos(): ?array
    {
        return $this->adMaterialInfos;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInner[] $adMaterialInfos
     * @return self
     */
    public function setAdMaterialInfos(?array $adMaterialInfos): self
    {
        $this->adMaterialInfos = $adMaterialInfos;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataPageInfo $pageInfo): self
    {
        $this->pageInfo = $pageInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adMaterialInfos !== null) {
            $result['ad_material_infos'] = $this->adMaterialInfos;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_material_infos'] ?? null) !== null && is_array($v)) {
            $obj->adMaterialInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataAdMaterialInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanUniPromotionAdMaterialGetV10ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
