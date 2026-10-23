<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class OcProjectToolsCompensateHistoryListGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\OcProjectToolsCompensateHistoryListGetV30ResponseDataCompensateHistoryListInner[]
     */
    protected ?array $compensateHistoryList = null;

    /**
     * @return \Oceanengine\Models\OcProjectToolsCompensateHistoryListGetV30ResponseDataCompensateHistoryListInner[]
     */
    public function getCompensateHistoryList(): ?array
    {
        return $this->compensateHistoryList;
    }

    /**
     * @param \Oceanengine\Models\OcProjectToolsCompensateHistoryListGetV30ResponseDataCompensateHistoryListInner[] $compensateHistoryList
     * @return self
     */
    public function setCompensateHistoryList(?array $compensateHistoryList): self
    {
        $this->compensateHistoryList = $compensateHistoryList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->compensateHistoryList !== null) {
            $result['compensate_history_list'] = $this->compensateHistoryList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['compensate_history_list'] ?? null) !== null && is_array($v)) {
            $obj->compensateHistoryList = array_map(fn ($vv) => \Oceanengine\Models\OcProjectToolsCompensateHistoryListGetV30ResponseDataCompensateHistoryListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
