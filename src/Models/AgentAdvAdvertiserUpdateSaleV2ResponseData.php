<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AgentAdvAdvertiserUpdateSaleV2ResponseData implements \JsonSerializable
{
    /**
     * json返回结果
     * @var \Oceanengine\Models\AgentAdvAdvertiserUpdateSaleV2ResponseDataResultsInner[]
     */
    protected ?array $results = null;

    /**
     * json返回结果
     * @return \Oceanengine\Models\AgentAdvAdvertiserUpdateSaleV2ResponseDataResultsInner[]
     */
    public function getResults(): ?array
    {
        return $this->results;
    }

    /**
     * json返回结果
     * @param \Oceanengine\Models\AgentAdvAdvertiserUpdateSaleV2ResponseDataResultsInner[] $results
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
            $obj->results = array_map(fn ($vv) => \Oceanengine\Models\AgentAdvAdvertiserUpdateSaleV2ResponseDataResultsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
