<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsEbpMaterialAuthCreateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsEbpMaterialAuthCreateV30ResponseDataFailedListInner[]
     */
    protected ?array $failedList = null;

    /**
     * @return \Oceanengine\Models\ToolsEbpMaterialAuthCreateV30ResponseDataFailedListInner[]
     */
    public function getFailedList(): ?array
    {
        return $this->failedList;
    }

    /**
     * @param \Oceanengine\Models\ToolsEbpMaterialAuthCreateV30ResponseDataFailedListInner[] $failedList
     * @return self
     */
    public function setFailedList(?array $failedList): self
    {
        $this->failedList = $failedList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->failedList !== null) {
            $result['failed_list'] = $this->failedList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['failed_list'] ?? null) !== null && is_array($v)) {
            $obj->failedList = array_map(fn ($vv) => \Oceanengine\Models\ToolsEbpMaterialAuthCreateV30ResponseDataFailedListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
