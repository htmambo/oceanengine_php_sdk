<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ChargeInfoOrderNoGetV30ResponseData implements \JsonSerializable
{
    /**
     * 充值信息
     * @var \Oceanengine\Models\ChargeInfoOrderNoGetV30ResponseDataResultInner[]
     */
    protected ?array $result = null;

    /**
     * 充值信息
     * @return \Oceanengine\Models\ChargeInfoOrderNoGetV30ResponseDataResultInner[]
     */
    public function getResult(): ?array
    {
        return $this->result;
    }

    /**
     * 充值信息
     * @param \Oceanengine\Models\ChargeInfoOrderNoGetV30ResponseDataResultInner[] $result
     * @return self
     */
    public function setResult(?array $result): self
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->result !== null) {
            $result['result'] = $this->result;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['result'] ?? null) !== null && is_array($v)) {
            $obj->result = array_map(fn ($vv) => \Oceanengine\Models\ChargeInfoOrderNoGetV30ResponseDataResultInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
