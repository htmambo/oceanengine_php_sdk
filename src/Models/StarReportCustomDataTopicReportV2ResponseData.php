<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarReportCustomDataTopicReportV2ResponseData implements \JsonSerializable
{
    /**
     * 对应请求的数据主题数组
     * @var \Oceanengine\Models\StarReportCustomDataTopicReportV2ResponseDataDataInner[]
     */
    protected ?array $data = null;

    /**
     * 请求的任务Id
     * @var int
     */
    protected ?int $demandId = null;

    /**
     * 请求的交付物Id
     * @var int
     */
    protected ?int $itemId = null;

    /**
     * 对应请求的数据主题数组
     * @return \Oceanengine\Models\StarReportCustomDataTopicReportV2ResponseDataDataInner[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }

    /**
     * 对应请求的数据主题数组
     * @param \Oceanengine\Models\StarReportCustomDataTopicReportV2ResponseDataDataInner[] $data
     * @return self
     */
    public function setData(?array $data): self
    {
        $this->data = $data;
        return $this;
    }

    /**
     * 请求的任务Id
     * @return int
     */
    public function getDemandId(): ?int
    {
        return $this->demandId;
    }

    /**
     * 请求的任务Id
     * @param int $demandId
     * @return self
     */
    public function setDemandId(?int $demandId): self
    {
        $this->demandId = $demandId;
        return $this;
    }

    /**
     * 请求的交付物Id
     * @return int
     */
    public function getItemId(): ?int
    {
        return $this->itemId;
    }

    /**
     * 请求的交付物Id
     * @param int $itemId
     * @return self
     */
    public function setItemId(?int $itemId): self
    {
        $this->itemId = $itemId;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->data !== null) {
            $result['data'] = $this->data;
        }
        if ($this->demandId !== null) {
            $result['demand_id'] = $this->demandId;
        }
        if ($this->itemId !== null) {
            $result['item_id'] = $this->itemId;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['data'] ?? null) !== null && is_array($v)) {
            $obj->data = array_map(fn ($vv) => \Oceanengine\Models\StarReportCustomDataTopicReportV2ResponseDataDataInner::fromArray($vv), $v);
        }
        if (($v = $data['demand_id'] ?? null) !== null) {
            $obj->demandId = (int) $v;
        }
        if (($v = $data['item_id'] ?? null) !== null) {
            $obj->itemId = (int) $v;
        }
        return $obj;
    }
}
