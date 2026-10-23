<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsHotMaterialDeriveAdoptV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsHotMaterialDeriveAdoptV30ResponseDataResultsInner[]
     */
    protected ?array $results = null;

    /**
     * @return \Oceanengine\Models\ToolsHotMaterialDeriveAdoptV30ResponseDataResultsInner[]
     */
    public function getResults(): ?array
    {
        return $this->results;
    }

    /**
     * @param \Oceanengine\Models\ToolsHotMaterialDeriveAdoptV30ResponseDataResultsInner[] $results
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
            $obj->results = array_map(fn ($vv) => \Oceanengine\Models\ToolsHotMaterialDeriveAdoptV30ResponseDataResultsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
