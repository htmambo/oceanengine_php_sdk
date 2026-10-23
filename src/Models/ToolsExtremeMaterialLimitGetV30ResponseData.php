<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsExtremeMaterialLimitGetV30ResponseData implements \JsonSerializable
{
    /**
     * 历史命中记录列表（含 WARN 与 LIMIT），受 start_date/end_date 参数控制。无命中或豁免主体均返回空数组。
     * @var \Oceanengine\Models\ToolsExtremeMaterialLimitGetV30ResponseDataRecordsInner[]
     */
    protected ?array $records = null;

    /**
     * 历史命中记录列表（含 WARN 与 LIMIT），受 start_date/end_date 参数控制。无命中或豁免主体均返回空数组。
     * @return \Oceanengine\Models\ToolsExtremeMaterialLimitGetV30ResponseDataRecordsInner[]
     */
    public function getRecords(): ?array
    {
        return $this->records;
    }

    /**
     * 历史命中记录列表（含 WARN 与 LIMIT），受 start_date/end_date 参数控制。无命中或豁免主体均返回空数组。
     * @param \Oceanengine\Models\ToolsExtremeMaterialLimitGetV30ResponseDataRecordsInner[] $records
     * @return self
     */
    public function setRecords(?array $records): self
    {
        $this->records = $records;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->records !== null) {
            $result['records'] = $this->records;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['records'] ?? null) !== null && is_array($v)) {
            $obj->records = array_map(fn ($vv) => \Oceanengine\Models\ToolsExtremeMaterialLimitGetV30ResponseDataRecordsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
