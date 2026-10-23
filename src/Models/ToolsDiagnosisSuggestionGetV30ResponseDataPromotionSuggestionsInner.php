<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsDiagnosisSuggestionGetV30ResponseDataPromotionSuggestionsInner implements \JsonSerializable
{
    /**
     * @var string[]
     */
    protected ?array $hitScenes = null;

    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @var \Oceanengine\Models\ToolsDiagnosisSuggestionGetV30ResponseDataPromotionSuggestionsInnerRecSuggestionsInner[]
     */
    protected ?array $recSuggestions = null;

    /**
     * @return string[]
     */
    public function getHitScenes(): ?array
    {
        return $this->hitScenes;
    }

    /**
     * @param string[] $hitScenes
     * @return self
     */
    public function setHitScenes(?array $hitScenes): self
    {
        $this->hitScenes = $hitScenes;
        return $this;
    }

    /**
     * @return int
     */
    public function getPromotionId(): ?int
    {
        return $this->promotionId;
    }

    /**
     * @param int $promotionId
     * @return self
     */
    public function setPromotionId(?int $promotionId): self
    {
        $this->promotionId = $promotionId;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsDiagnosisSuggestionGetV30ResponseDataPromotionSuggestionsInnerRecSuggestionsInner[]
     */
    public function getRecSuggestions(): ?array
    {
        return $this->recSuggestions;
    }

    /**
     * @param \Oceanengine\Models\ToolsDiagnosisSuggestionGetV30ResponseDataPromotionSuggestionsInnerRecSuggestionsInner[] $recSuggestions
     * @return self
     */
    public function setRecSuggestions(?array $recSuggestions): self
    {
        $this->recSuggestions = $recSuggestions;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->hitScenes !== null) {
            $result['hit_scenes'] = $this->hitScenes;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        if ($this->recSuggestions !== null) {
            $result['rec_suggestions'] = $this->recSuggestions;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['hit_scenes'] ?? null) !== null && is_array($v)) {
            $obj->hitScenes = $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['rec_suggestions'] ?? null) !== null && is_array($v)) {
            $obj->recSuggestions = array_map(fn ($vv) => \Oceanengine\Models\ToolsDiagnosisSuggestionGetV30ResponseDataPromotionSuggestionsInnerRecSuggestionsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
