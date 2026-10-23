<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdMaterialGetV10ResponseData implements \JsonSerializable
{
    /**
     * 返回的素材信息列表
     * @var \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInner[]
     */
    protected ?array $adMaterialInfos = null;

    /**
     * @var \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataPageInfo $pageInfo = null;

    /**
     * 返回的素材信息列表
     * @return \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInner[]
     */
    public function getAdMaterialInfos(): ?array
    {
        return $this->adMaterialInfos;
    }

    /**
     * 返回的素材信息列表
     * @param \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInner[] $adMaterialInfos
     * @return self
     */
    public function setAdMaterialInfos(?array $adMaterialInfos): self
    {
        $this->adMaterialInfos = $adMaterialInfos;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataPageInfo $pageInfo): self
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
            $obj->adMaterialInfos = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataAdMaterialInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\QianchuanAdMaterialGetV10ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
