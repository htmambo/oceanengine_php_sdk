<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class DpaAssetV2ListV2ResponseData implements \JsonSerializable
{
    /**
     * 投放条件列表
     * @var \Oceanengine\Models\DpaAssetV2ListV2ResponseDataAssetListInner[]
     */
    protected ?array $assetList = null;

    /**
     * @var \Oceanengine\Models\DpaAssetV2ListV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\DpaAssetV2ListV2ResponseDataPageInfo $pageInfo = null;

    /**
     * 投放条件列表
     * @return \Oceanengine\Models\DpaAssetV2ListV2ResponseDataAssetListInner[]
     */
    public function getAssetList(): ?array
    {
        return $this->assetList;
    }

    /**
     * 投放条件列表
     * @param \Oceanengine\Models\DpaAssetV2ListV2ResponseDataAssetListInner[] $assetList
     * @return self
     */
    public function setAssetList(?array $assetList): self
    {
        $this->assetList = $assetList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\DpaAssetV2ListV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\DpaAssetV2ListV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\DpaAssetV2ListV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\DpaAssetV2ListV2ResponseDataPageInfo $pageInfo): self
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
        if ($this->assetList !== null) {
            $result['asset_list'] = $this->assetList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['asset_list'] ?? null) !== null && is_array($v)) {
            $obj->assetList = array_map(fn ($vv) => \Oceanengine\Models\DpaAssetV2ListV2ResponseDataAssetListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\DpaAssetV2ListV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
