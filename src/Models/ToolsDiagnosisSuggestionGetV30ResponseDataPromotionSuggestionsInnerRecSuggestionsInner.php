<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsDiagnosisSuggestionGetV30ResponseDataPromotionSuggestionsInnerRecSuggestionsInner implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $recSuggestionContent = null;

    /**
     * @var string
     */
    protected ?string $recSuggestionMode = null;

    /**
     * @var string
     */
    protected ?string $recSuggestionName = null;

    /**
     * @var string
     */
    protected ?string $recSuggestionReason = null;

    /**
     * @var \Oceanengine\Models\ToolsDiagnosisSuggestionGetV30ResponseDataPromotionSuggestionsInnerRecSuggestionsInnerRecSuggestionToolsInner[]
     */
    protected ?array $recSuggestionTools = null;

    /**
     * @var int
     */
    protected ?int $recSuggestionType = null;

    /**
     * @return string
     */
    public function getRecSuggestionContent(): ?string
    {
        return $this->recSuggestionContent;
    }

    /**
     * @param string $recSuggestionContent
     * @return self
     */
    public function setRecSuggestionContent(?string $recSuggestionContent): self
    {
        $this->recSuggestionContent = $recSuggestionContent;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecSuggestionMode(): ?string
    {
        return $this->recSuggestionMode;
    }

    /**
     * @param string $recSuggestionMode
     * @return self
     */
    public function setRecSuggestionMode(?string $recSuggestionMode): self
    {
        $this->recSuggestionMode = $recSuggestionMode;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecSuggestionName(): ?string
    {
        return $this->recSuggestionName;
    }

    /**
     * @param string $recSuggestionName
     * @return self
     */
    public function setRecSuggestionName(?string $recSuggestionName): self
    {
        $this->recSuggestionName = $recSuggestionName;
        return $this;
    }

    /**
     * @return string
     */
    public function getRecSuggestionReason(): ?string
    {
        return $this->recSuggestionReason;
    }

    /**
     * @param string $recSuggestionReason
     * @return self
     */
    public function setRecSuggestionReason(?string $recSuggestionReason): self
    {
        $this->recSuggestionReason = $recSuggestionReason;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsDiagnosisSuggestionGetV30ResponseDataPromotionSuggestionsInnerRecSuggestionsInnerRecSuggestionToolsInner[]
     */
    public function getRecSuggestionTools(): ?array
    {
        return $this->recSuggestionTools;
    }

    /**
     * @param \Oceanengine\Models\ToolsDiagnosisSuggestionGetV30ResponseDataPromotionSuggestionsInnerRecSuggestionsInnerRecSuggestionToolsInner[] $recSuggestionTools
     * @return self
     */
    public function setRecSuggestionTools(?array $recSuggestionTools): self
    {
        $this->recSuggestionTools = $recSuggestionTools;
        return $this;
    }

    /**
     * @return int
     */
    public function getRecSuggestionType(): ?int
    {
        return $this->recSuggestionType;
    }

    /**
     * @param int $recSuggestionType
     * @return self
     */
    public function setRecSuggestionType(?int $recSuggestionType): self
    {
        $this->recSuggestionType = $recSuggestionType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->recSuggestionContent !== null) {
            $result['rec_suggestion_content'] = $this->recSuggestionContent;
        }
        if ($this->recSuggestionMode !== null) {
            $result['rec_suggestion_mode'] = $this->recSuggestionMode;
        }
        if ($this->recSuggestionName !== null) {
            $result['rec_suggestion_name'] = $this->recSuggestionName;
        }
        if ($this->recSuggestionReason !== null) {
            $result['rec_suggestion_reason'] = $this->recSuggestionReason;
        }
        if ($this->recSuggestionTools !== null) {
            $result['rec_suggestion_tools'] = $this->recSuggestionTools;
        }
        if ($this->recSuggestionType !== null) {
            $result['rec_suggestion_type'] = $this->recSuggestionType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['rec_suggestion_content'] ?? null) !== null) {
            $obj->recSuggestionContent = (string) $v;
        }
        if (($v = $data['rec_suggestion_mode'] ?? null) !== null) {
            $obj->recSuggestionMode = (string) $v;
        }
        if (($v = $data['rec_suggestion_name'] ?? null) !== null) {
            $obj->recSuggestionName = (string) $v;
        }
        if (($v = $data['rec_suggestion_reason'] ?? null) !== null) {
            $obj->recSuggestionReason = (string) $v;
        }
        if (($v = $data['rec_suggestion_tools'] ?? null) !== null && is_array($v)) {
            $obj->recSuggestionTools = array_map(fn ($vv) => \Oceanengine\Models\ToolsDiagnosisSuggestionGetV30ResponseDataPromotionSuggestionsInnerRecSuggestionsInnerRecSuggestionToolsInner::fromArray($vv), $v);
        }
        if (($v = $data['rec_suggestion_type'] ?? null) !== null) {
            $obj->recSuggestionType = (int) $v;
        }
        return $obj;
    }
}
