<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanMaterialGetV10ResponseData implements \JsonSerializable
{
    /**
     * 返回的素材信息列表
     * @var \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInner[]
     */
    protected ?array $adMaterialInfos = null;

    /**
     * @var \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * 返回的素材信息列表
     * @return \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInner[]
     */
    public function getAdMaterialInfos(): ?array
    {
        return $this->adMaterialInfos;
    }

    /**
     * 返回的素材信息列表
     * @param \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInner[] $adMaterialInfos
     * @return self
     */
    public function setAdMaterialInfos(?array $adMaterialInfos): self
    {
        $this->adMaterialInfos = $adMaterialInfos;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanMaterialGetV10ResponseDataPageInfo $pageInfo): self
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
            $obj->adMaterialInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataAdMaterialInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanMaterialGetV10ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
