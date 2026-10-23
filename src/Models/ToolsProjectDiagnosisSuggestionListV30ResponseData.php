<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsProjectDiagnosisSuggestionListV30ResponseData implements \JsonSerializable
{
    /**
     * 项目诊断建议列表
     * @var \Oceanengine\Models\ToolsProjectDiagnosisSuggestionListV30ResponseDataResultsInner[]
     */
    protected ?array $results = null;

    /**
     * 项目诊断建议列表
     * @return \Oceanengine\Models\ToolsProjectDiagnosisSuggestionListV30ResponseDataResultsInner[]
     */
    public function getResults(): ?array
    {
        return $this->results;
    }

    /**
     * 项目诊断建议列表
     * @param \Oceanengine\Models\ToolsProjectDiagnosisSuggestionListV30ResponseDataResultsInner[] $results
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
            $obj->results = array_map(fn ($vv) => \Oceanengine\Models\ToolsProjectDiagnosisSuggestionListV30ResponseDataResultsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
