<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class EbpAccountCreateV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\EbpAccountCreateV30ResponseDataResultsInner[]
     */
    protected ?array $results = null;

    /**
     * @return \Oceanengine\Models\EbpAccountCreateV30ResponseDataResultsInner[]
     */
    public function getResults(): ?array
    {
        return $this->results;
    }

    /**
     * @param \Oceanengine\Models\EbpAccountCreateV30ResponseDataResultsInner[] $results
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
            $obj->results = array_map(fn ($vv) => \Oceanengine\Models\EbpAccountCreateV30ResponseDataResultsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
