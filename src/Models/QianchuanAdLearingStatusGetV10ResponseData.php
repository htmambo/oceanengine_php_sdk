<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanAdLearingStatusGetV10ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanAdLearingStatusGetV10ResponseDataListInner[]
     */
    protected ?array $list = null;

    /**
     * @return \Oceanengine\Models\QianchuanAdLearingStatusGetV10ResponseDataListInner[]
     */
    public function getList(): ?array
    {
        return $this->list;
    }

    /**
     * @param \Oceanengine\Models\QianchuanAdLearingStatusGetV10ResponseDataListInner[] $list
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
            $obj->list = array_map(fn ($vv) => \Oceanengine\Models\QianchuanAdLearingStatusGetV10ResponseDataListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
