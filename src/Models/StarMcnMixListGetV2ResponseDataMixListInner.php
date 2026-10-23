<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarMcnMixListGetV2ResponseDataMixListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarMcnMixListGetV2ResponseDataMixListInnerAuthorInfo
     */
    protected ?\Oceanengine\Models\StarMcnMixListGetV2ResponseDataMixListInnerAuthorInfo $authorInfo = null;

    /**
     * @var \Oceanengine\Models\StarMcnMixListGetV2ResponseDataMixListInnerBaseInfo
     */
    protected ?\Oceanengine\Models\StarMcnMixListGetV2ResponseDataMixListInnerBaseInfo $baseInfo = null;

    /**
     * 计费指标
     * @var array<string,int>
     */
    protected ?array $billIndicatorAggData = null;

    /**
     * 剧集基础指标
     * @var array<string,int>
     */
    protected ?array $itemSeqAggData = null;

    /**
     * @return \Oceanengine\Models\StarMcnMixListGetV2ResponseDataMixListInnerAuthorInfo
     */
    public function getAuthorInfo(): ?\Oceanengine\Models\StarMcnMixListGetV2ResponseDataMixListInnerAuthorInfo
    {
        return $this->authorInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnMixListGetV2ResponseDataMixListInnerAuthorInfo $authorInfo
     * @return self
     */
    public function setAuthorInfo(?\Oceanengine\Models\StarMcnMixListGetV2ResponseDataMixListInnerAuthorInfo $authorInfo): self
    {
        $this->authorInfo = $authorInfo;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\StarMcnMixListGetV2ResponseDataMixListInnerBaseInfo
     */
    public function getBaseInfo(): ?\Oceanengine\Models\StarMcnMixListGetV2ResponseDataMixListInnerBaseInfo
    {
        return $this->baseInfo;
    }

    /**
     * @param \Oceanengine\Models\StarMcnMixListGetV2ResponseDataMixListInnerBaseInfo $baseInfo
     * @return self
     */
    public function setBaseInfo(?\Oceanengine\Models\StarMcnMixListGetV2ResponseDataMixListInnerBaseInfo $baseInfo): self
    {
        $this->baseInfo = $baseInfo;
        return $this;
    }

    /**
     * 计费指标
     * @return array<string,int>
     */
    public function getBillIndicatorAggData(): ?array
    {
        return $this->billIndicatorAggData;
    }

    /**
     * 计费指标
     * @param array<string,int> $billIndicatorAggData
     * @return self
     */
    public function setBillIndicatorAggData(?array $billIndicatorAggData): self
    {
        $this->billIndicatorAggData = $billIndicatorAggData;
        return $this;
    }

    /**
     * 剧集基础指标
     * @return array<string,int>
     */
    public function getItemSeqAggData(): ?array
    {
        return $this->itemSeqAggData;
    }

    /**
     * 剧集基础指标
     * @param array<string,int> $itemSeqAggData
     * @return self
     */
    public function setItemSeqAggData(?array $itemSeqAggData): self
    {
        $this->itemSeqAggData = $itemSeqAggData;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->authorInfo !== null) {
            $result['author_info'] = $this->authorInfo;
        }
        if ($this->baseInfo !== null) {
            $result['base_info'] = $this->baseInfo;
        }
        if ($this->billIndicatorAggData !== null) {
            $result['bill_indicator_agg_data'] = $this->billIndicatorAggData;
        }
        if ($this->itemSeqAggData !== null) {
            $result['item_seq_agg_data'] = $this->itemSeqAggData;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['author_info'] ?? null) !== null && is_array($v)) {
            $obj->authorInfo = \Oceanengine\Models\StarMcnMixListGetV2ResponseDataMixListInnerAuthorInfo::fromArray($v);
        }
        if (($v = $data['base_info'] ?? null) !== null && is_array($v)) {
            $obj->baseInfo = \Oceanengine\Models\StarMcnMixListGetV2ResponseDataMixListInnerBaseInfo::fromArray($v);
        }
        if (($v = $data['bill_indicator_agg_data'] ?? null) !== null && is_array($v)) {
            $obj->billIndicatorAggData = $v;
        }
        if (($v = $data['item_seq_agg_data'] ?? null) !== null && is_array($v)) {
            $obj->itemSeqAggData = $v;
        }
        return $obj;
    }
}
