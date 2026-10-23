<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPoiGetV30ResponseDataPoiListInnerBindMarketPageInfosInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\LocalPoiGetV30ResponseDataPoiListInnerBindMarketPageInfosInnerBindToolPackInfo
     */
    protected ?\Oceanengine\Models\LocalPoiGetV30ResponseDataPoiListInnerBindMarketPageInfosInnerBindToolPackInfo $bindToolPackInfo = null;

    /**
     * 营销页id
     * @var int
     */
    protected ?int $marketPageId = null;

    /**
     * @return \Oceanengine\Models\LocalPoiGetV30ResponseDataPoiListInnerBindMarketPageInfosInnerBindToolPackInfo
     */
    public function getBindToolPackInfo(): ?\Oceanengine\Models\LocalPoiGetV30ResponseDataPoiListInnerBindMarketPageInfosInnerBindToolPackInfo
    {
        return $this->bindToolPackInfo;
    }

    /**
     * @param \Oceanengine\Models\LocalPoiGetV30ResponseDataPoiListInnerBindMarketPageInfosInnerBindToolPackInfo $bindToolPackInfo
     * @return self
     */
    public function setBindToolPackInfo(?\Oceanengine\Models\LocalPoiGetV30ResponseDataPoiListInnerBindMarketPageInfosInnerBindToolPackInfo $bindToolPackInfo): self
    {
        $this->bindToolPackInfo = $bindToolPackInfo;
        return $this;
    }

    /**
     * 营销页id
     * @return int
     */
    public function getMarketPageId(): ?int
    {
        return $this->marketPageId;
    }

    /**
     * 营销页id
     * @param int $marketPageId
     * @return self
     */
    public function setMarketPageId(?int $marketPageId): self
    {
        $this->marketPageId = $marketPageId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->bindToolPackInfo !== null) {
            $result['bind_tool_pack_info'] = $this->bindToolPackInfo;
        }
        if ($this->marketPageId !== null) {
            $result['market_page_id'] = $this->marketPageId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['bind_tool_pack_info'] ?? null) !== null && is_array($v)) {
            $obj->bindToolPackInfo = \Oceanengine\Models\LocalPoiGetV30ResponseDataPoiListInnerBindMarketPageInfosInnerBindToolPackInfo::fromArray($v);
        }
        if (($v = $data['market_page_id'] ?? null) !== null) {
            $obj->marketPageId = (int) $v;
        }
        return $obj;
    }
}
