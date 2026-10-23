<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarChallengeItemsDataV2ResponseData implements \JsonSerializable
{
    /**
     * 投后数据
     * @var \Oceanengine\Models\StarChallengeItemsDataV2ResponseDataDataListInner[]
     */
    protected ?array $dataList = null;

    /**
     * @var \Oceanengine\Models\StarChallengeItemsDataV2ResponseDataPageInfo
     */
    protected ?\Oceanengine\Models\StarChallengeItemsDataV2ResponseDataPageInfo $pageInfo = null;

    /**
     * 投后数据
     * @return \Oceanengine\Models\StarChallengeItemsDataV2ResponseDataDataListInner[]
     */
    public function getDataList(): ?array
    {
        return $this->dataList;
    }

    /**
     * 投后数据
     * @param \Oceanengine\Models\StarChallengeItemsDataV2ResponseDataDataListInner[] $dataList
     * @return self
     */
    public function setDataList(?array $dataList): self
    {
        $this->dataList = $dataList;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarChallengeItemsDataV2ResponseDataPageInfo
     */
    public function getPageInfo(): ?\Oceanengine\Models\StarChallengeItemsDataV2ResponseDataPageInfo
    {
        return $this->pageInfo;
    }

    /**
     * @param \Oceanengine\Models\StarChallengeItemsDataV2ResponseDataPageInfo $pageInfo
     * @return self
     */
    public function setPageInfo(?\Oceanengine\Models\StarChallengeItemsDataV2ResponseDataPageInfo $pageInfo): self
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
        if ($this->dataList !== null) {
            $result['data_list'] = $this->dataList;
        }
        if ($this->pageInfo !== null) {
            $result['page_info'] = $this->pageInfo;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data_list'] ?? null) !== null && is_array($v)) {
            $obj->dataList = array_map(fn ($vv) => \Oceanengine\Models\StarChallengeItemsDataV2ResponseDataDataListInner::fromArray($vv), $v);
        }
        if (($v = $data['page_info'] ?? null) !== null && is_array($v)) {
            $obj->pageInfo = \Oceanengine\Models\StarChallengeItemsDataV2ResponseDataPageInfo::fromArray($v);
        }
        return $obj;
    }
}
