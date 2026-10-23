<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInnerSceneListInner implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListScene
     */
    protected ?string $scene = null;

    /**
     * @var \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInnerSceneListInnerSuggestionsInner[]
     */
    protected ?array $suggestions = null;

    /**
     * @return \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListScene
     */
    public function getScene(): ?string
    {
        return $this->scene;
    }

    /**
     * @param \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30DataSuggestionListSceneListScene $scene
     * @return self
     */
    public function setScene(?string $scene): self
    {
        $this->scene = $scene;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInnerSceneListInnerSuggestionsInner[]
     */
    public function getSuggestions(): ?array
    {
        return $this->suggestions;
    }

    /**
     * @param \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInnerSceneListInnerSuggestionsInner[] $suggestions
     * @return self
     */
    public function setSuggestions(?array $suggestions): self
    {
        $this->suggestions = $suggestions;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->scene !== null) {
            $result['scene'] = $this->scene;
        }
        if ($this->suggestions !== null) {
            $result['suggestions'] = $this->suggestions;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['scene'] ?? null) !== null) {
            $obj->scene = (string) $v;
        }
        if (($v = $data['suggestions'] ?? null) !== null && is_array($v)) {
            $obj->suggestions = array_map(fn ($vv) => \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInnerSceneListInnerSuggestionsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
