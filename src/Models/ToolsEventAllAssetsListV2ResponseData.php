<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEventAllAssetsListV2ResponseData implements \JsonSerializable
{
    /**
     * 账户下的资产列表，不支持查询已删除的资产
     * @var \Oceanengine\Models\ToolsEventAllAssetsListV2ResponseDataAssetListInner[]
     */
    protected ?array $assetList = null;

    /**
     * @var \Oceanengine\Models\ToolsEventAllAssetsListV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\ToolsEventAllAssetsListV2ResponseDataPageInfo $pageInfo = null;

    /**
     * 账户下的资产列表，不支持查询已删除的资产
     * @return \Oceanengine\Models\ToolsEventAllAssetsListV2ResponseDataAssetListInner[]
     */
    public function getAssetList(): ?array
    {
        return $this->assetList;
    }

    /**
     * 账户下的资产列表，不支持查询已删除的资产
     * @param \Oceanengine\Models\ToolsEventAllAssetsListV2ResponseDataAssetListInner[] $assetList
     * @return self
     */
    public function setAssetList(?array $assetList): self
    {
        $this->assetList = $assetList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsEventAllAssetsListV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\ToolsEventAllAssetsListV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\ToolsEventAllAssetsListV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\ToolsEventAllAssetsListV2ResponseDataPageInfo $pageInfo): self
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
            $obj->assetList = array_map(fn ($vv) => \Oceanengine\Models\ToolsEventAllAssetsListV2ResponseDataAssetListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\ToolsEventAllAssetsListV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
