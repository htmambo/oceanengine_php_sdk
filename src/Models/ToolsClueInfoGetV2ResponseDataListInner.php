<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueInfoGetV2ResponseDataListInner implements \JsonSerializable
{
    /**
     * 线索id
     * @var int
     */
    protected ?int $clueId = null;

    /**
     * 返款标签 (1 参与返款、2 支持赔付)
     * @var \Oceanengine\Models\ToolsClueInfoGetV2ResponseDataListInnerRefundTagListInner[]
     */
    protected ?array $refundTagList = null;

    /**
     * 线索id
     * @return int
     */
    public function getClueId(): ?int
    {
        return $this->clueId;
    }

    /**
     * 线索id
     * @param int $clueId
     * @return self
     */
    public function setClueId(?int $clueId): self
    {
        $this->clueId = $clueId;
        return $this;
    }

    /**
     * 返款标签 (1 参与返款、2 支持赔付)
     * @return \Oceanengine\Models\ToolsClueInfoGetV2ResponseDataListInnerRefundTagListInner[]
     */
    public function getRefundTagList(): ?array
    {
        return $this->refundTagList;
    }

    /**
     * 返款标签 (1 参与返款、2 支持赔付)
     * @param \Oceanengine\Models\ToolsClueInfoGetV2ResponseDataListInnerRefundTagListInner[] $refundTagList
     * @return self
     */
    public function setRefundTagList(?array $refundTagList): self
    {
        $this->refundTagList = $refundTagList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->clueId !== null) {
            $result['clue_id'] = $this->clueId;
        }
        if ($this->refundTagList !== null) {
            $result['refund_tag_list'] = $this->refundTagList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['clue_id'] ?? null) !== null) {
            $obj->clueId = (int) $v;
        }
        if (($v = $data['refund_tag_list'] ?? null) !== null && is_array($v)) {
            $obj->refundTagList = array_map(fn ($vv) => \Oceanengine\Models\ToolsClueInfoGetV2ResponseDataListInnerRefundTagListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
