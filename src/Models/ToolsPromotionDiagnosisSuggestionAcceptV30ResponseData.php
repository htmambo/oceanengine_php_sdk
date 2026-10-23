<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionDiagnosisSuggestionAcceptV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30ResponseDataSuggestionAcceptFailedInner[]
     */
    protected ?array $suggestionAcceptFailed = null;

    /**
     * @var string[]
     */
    protected ?array $suggestionAccepted = null;

    /**
     * @return \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30ResponseDataSuggestionAcceptFailedInner[]
     */
    public function getSuggestionAcceptFailed(): ?array
    {
        return $this->suggestionAcceptFailed;
    }

    /**
     * @param \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30ResponseDataSuggestionAcceptFailedInner[] $suggestionAcceptFailed
     * @return self
     */
    public function setSuggestionAcceptFailed(?array $suggestionAcceptFailed): self
    {
        $this->suggestionAcceptFailed = $suggestionAcceptFailed;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getSuggestionAccepted(): ?array
    {
        return $this->suggestionAccepted;
    }

    /**
     * @param string[] $suggestionAccepted
     * @return self
     */
    public function setSuggestionAccepted(?array $suggestionAccepted): self
    {
        $this->suggestionAccepted = $suggestionAccepted;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->suggestionAcceptFailed !== null) {
            $result['suggestion_accept_failed'] = $this->suggestionAcceptFailed;
        }
        if ($this->suggestionAccepted !== null) {
            $result['suggestion_accepted'] = $this->suggestionAccepted;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['suggestion_accept_failed'] ?? null) !== null && is_array($v)) {
            $obj->suggestionAcceptFailed = array_map(fn ($vv) => \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30ResponseDataSuggestionAcceptFailedInner::fromArray($vv), $v);
        }
        if (($v = $data['suggestion_accepted'] ?? null) !== null && is_array($v)) {
            $obj->suggestionAccepted = $v;
        }
        return $obj;
    }
}
