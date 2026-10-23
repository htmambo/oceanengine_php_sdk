<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class SecurityGetConsultResultV30ResponseData implements \JsonSerializable
{
    /**
     * 申诉结果列表
     * @var \Oceanengine\Models\SecurityGetConsultResultV30ResponseDataResultsInner[]
     */
    protected ?array $results = null;

    /**
     * 申诉结果列表
     * @return \Oceanengine\Models\SecurityGetConsultResultV30ResponseDataResultsInner[]
     */
    public function getResults(): ?array
    {
        return $this->results;
    }

    /**
     * 申诉结果列表
     * @param \Oceanengine\Models\SecurityGetConsultResultV30ResponseDataResultsInner[] $results
     * @return self
     */
    public function setResults(?array $results): self
    {
        $this->results = $results;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->results !== null) {
            $result['results'] = $this->results;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['results'] ?? null) !== null && is_array($v)) {
            $obj->results = array_map(fn ($vv) => \Oceanengine\Models\SecurityGetConsultResultV30ResponseDataResultsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
