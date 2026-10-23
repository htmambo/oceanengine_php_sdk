<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AicMixcutTaskSaveV30ResponseData implements \JsonSerializable
{
    /**
     * 保存结果信息
     * @var \Oceanengine\Models\AicMixcutTaskSaveV30ResponseDataResultsInner[]
     */
    protected ?array $results = null;

    /**
     * 保存结果信息
     * @return \Oceanengine\Models\AicMixcutTaskSaveV30ResponseDataResultsInner[]
     */
    public function getResults(): ?array
    {
        return $this->results;
    }

    /**
     * 保存结果信息
     * @param \Oceanengine\Models\AicMixcutTaskSaveV30ResponseDataResultsInner[] $results
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
            $obj->results = array_map(fn ($vv) => \Oceanengine\Models\AicMixcutTaskSaveV30ResponseDataResultsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
