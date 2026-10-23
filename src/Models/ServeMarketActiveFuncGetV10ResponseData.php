<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ServeMarketActiveFuncGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ServeMarketActiveFuncGetV10ResponseDataFuncListInner[]
     */
    protected ?array $funcList = null;

    /**
     * @return \Oceanengine\Models\ServeMarketActiveFuncGetV10ResponseDataFuncListInner[]
     */
    public function getFuncList(): ?array
    {
        return $this->funcList;
    }

    /**
     * @param \Oceanengine\Models\ServeMarketActiveFuncGetV10ResponseDataFuncListInner[] $funcList
     * @return self
     */
    public function setFuncList(?array $funcList): self
    {
        $this->funcList = $funcList;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->funcList !== null) {
            $result['func_list'] = $this->funcList;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['func_list'] ?? null) !== null && is_array($v)) {
            $obj->funcList = array_map(fn ($vv) => \Oceanengine\Models\ServeMarketActiveFuncGetV10ResponseDataFuncListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
