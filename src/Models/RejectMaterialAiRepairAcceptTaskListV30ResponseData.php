<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class RejectMaterialAiRepairAcceptTaskListV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\RejectMaterialAiRepairAcceptTaskListV30ResponseDataResultListInner[]
     */
    protected ?array $resultList = null;

    /**
     * @return \Oceanengine\Models\RejectMaterialAiRepairAcceptTaskListV30ResponseDataResultListInner[]
     */
    public function getResultList(): ?array
    {
        return $this->resultList;
    }

    /**
     * @param \Oceanengine\Models\RejectMaterialAiRepairAcceptTaskListV30ResponseDataResultListInner[] $resultList
     * @return self
     */
    public function setResultList(?array $resultList): self
    {
        $this->resultList = $resultList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->resultList !== null) {
            $result['result_list'] = $this->resultList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['result_list'] ?? null) !== null && is_array($v)) {
            $obj->resultList = array_map(fn ($vv) => \Oceanengine\Models\RejectMaterialAiRepairAcceptTaskListV30ResponseDataResultListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
