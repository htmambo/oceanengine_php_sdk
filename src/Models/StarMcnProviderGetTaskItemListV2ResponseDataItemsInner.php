<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnProviderGetTaskItemListV2ResponseDataItemsInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerExtraItemInfo
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerExtraItemInfo $extraItemInfo = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfo
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfo $itemInfo = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemTaskProviderInfo
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemTaskProviderInfo $itemTaskProviderInfo = null;

    /**
     * @var \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerStarAdUniteItemInfo
     */
    protected ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerStarAdUniteItemInfo $starAdUniteItemInfo = null;

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerExtraItemInfo
     */
    public function getExtraItemInfo(): ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerExtraItemInfo
    {
        return $this->extraItemInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerExtraItemInfo $extraItemInfo
     * @return self
     */
    public function setExtraItemInfo(?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerExtraItemInfo $extraItemInfo): self
    {
        $this->extraItemInfo = $extraItemInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfo
     */
    public function getItemInfo(): ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfo
    {
        return $this->itemInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfo $itemInfo
     * @return self
     */
    public function setItemInfo(?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfo $itemInfo): self
    {
        $this->itemInfo = $itemInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemTaskProviderInfo
     */
    public function getItemTaskProviderInfo(): ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemTaskProviderInfo
    {
        return $this->itemTaskProviderInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemTaskProviderInfo $itemTaskProviderInfo
     * @return self
     */
    public function setItemTaskProviderInfo(?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemTaskProviderInfo $itemTaskProviderInfo): self
    {
        $this->itemTaskProviderInfo = $itemTaskProviderInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerStarAdUniteItemInfo
     */
    public function getStarAdUniteItemInfo(): ?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerStarAdUniteItemInfo
    {
        return $this->starAdUniteItemInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerStarAdUniteItemInfo $starAdUniteItemInfo
     * @return self
     */
    public function setStarAdUniteItemInfo(?\Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerStarAdUniteItemInfo $starAdUniteItemInfo): self
    {
        $this->starAdUniteItemInfo = $starAdUniteItemInfo;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->extraItemInfo !== null) {
            $result['extra_item_info'] = $this->extraItemInfo;
        }
        if ($this->itemInfo !== null) {
            $result['item_info'] = $this->itemInfo;
        }
        if ($this->itemTaskProviderInfo !== null) {
            $result['item_task_provider_info'] = $this->itemTaskProviderInfo;
        }
        if ($this->starAdUniteItemInfo !== null) {
            $result['star_ad_unite_item_info'] = $this->starAdUniteItemInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['extra_item_info'] ?? null) !== null && is_array($v)) {
            $obj->extraItemInfo = \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerExtraItemInfo::fromArray($v);
        }
        if (($v = $data['item_info'] ?? null) !== null && is_array($v)) {
            $obj->itemInfo = \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemInfo::fromArray($v);
        }
        if (($v = $data['item_task_provider_info'] ?? null) !== null && is_array($v)) {
            $obj->itemTaskProviderInfo = \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerItemTaskProviderInfo::fromArray($v);
        }
        if (($v = $data['star_ad_unite_item_info'] ?? null) !== null && is_array($v)) {
            $obj->starAdUniteItemInfo = \Oceanengine\Models\StarMcnProviderGetTaskItemListV2ResponseDataItemsInnerStarAdUniteItemInfo::fromArray($v);
        }
        return $obj;
    }
}
