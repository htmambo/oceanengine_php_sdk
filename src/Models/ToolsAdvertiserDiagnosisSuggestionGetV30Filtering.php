<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsAdvertiserDiagnosisSuggestionGetV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30FilteringSuggestionType[]
     */
    protected ?array $suggestionType = null;

    /**
     * @return \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30FilteringSuggestionType[]
     */
    public function getSuggestionType(): ?array
    {
        return $this->suggestionType;
    }

    /**
     * @param \Oceanengine\Models\ToolsAdvertiserDiagnosisSuggestionGetV30FilteringSuggestionType[] $suggestionType
     * @return self
     */
    public function setSuggestionType(?array $suggestionType): self
    {
        $this->suggestionType = $suggestionType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->suggestionType !== null) {
            $result['suggestion_type'] = $this->suggestionType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['suggestion_type'] ?? null) !== null && is_array($v)) {
            $obj->suggestionType = $v;
        }
        return $obj;
    }
}
