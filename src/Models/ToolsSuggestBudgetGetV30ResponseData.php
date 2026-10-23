<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsSuggestBudgetGetV30ResponseData implements \JsonSerializable
{
    /**
     * 预算列表
     * @var \Oceanengine\Models\ToolsSuggestBudgetGetV30ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * 预算列表
     * @return \Oceanengine\Models\ToolsSuggestBudgetGetV30ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * 预算列表
     * @param \Oceanengine\Models\ToolsSuggestBudgetGetV30ResponseDataListInner[] $list
     * @return self
     */
    public function setList(?array $list): self
    {
        $this->list = $list;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->list !== null) {
            $result['list'] = $this->list;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['list'] ?? null) !== null && is_array($v)) {
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\ToolsSuggestBudgetGetV30ResponseDataListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
