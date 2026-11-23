<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandMaHalfSelfCreativeInfoGetV30ResponseData implements \JsonSerializable
{
    /**
     * 半自助创意信息列表
     * @var \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInner[]
     */
    protected ?array $creativeInfos = null;

    /**
     * @var \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataPageInfo $pageInfo = null;

    /**
     * 半自助创意信息列表
     * @return \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInner[]
     */
    public function getCreativeInfos(): ?array
    {
        return $this->creativeInfos;
    }

    /**
     * 半自助创意信息列表
     * @param \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInner[] $creativeInfos
     * @return self
     */
    public function setCreativeInfos(?array $creativeInfos): self
    {
        $this->creativeInfos = $creativeInfos;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataPageInfo $pageInfo): self
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
        if ($this->creativeInfos !== null) {
            $result['creative_infos'] = $this->creativeInfos;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['creative_infos'] ?? null) !== null && is_array($v)) {
            $obj->creativeInfos = array_map(fn ($vv) => \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataCreativeInfosInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\BrandMaHalfSelfCreativeInfoGetV30ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
