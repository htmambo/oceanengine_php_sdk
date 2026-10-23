<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsDiagnosisSuggestionGetV30ResponseData implements \JsonSerializable
{
    /**
     * @var string
     */
    protected ?string $diagnosisId = null;

    /**
     * @var string
     */
    protected ?string $expireTimestamp = null;

    /**
     * @var \Oceanengine\Models\ToolsDiagnosisSuggestionGetV30ResponseDataPromotionSuggestionsInner[]
     */
    protected ?array $promotionSuggestions = null;

    /**
     * @return string
     */
    public function getDiagnosisId(): ?string
    {
        return $this->diagnosisId;
    }

    /**
     * @param string $diagnosisId
     * @return self
     */
    public function setDiagnosisId(?string $diagnosisId): self
    {
        $this->diagnosisId = $diagnosisId;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpireTimestamp(): ?string
    {
        return $this->expireTimestamp;
    }

    /**
     * @param string $expireTimestamp
     * @return self
     */
    public function setExpireTimestamp(?string $expireTimestamp): self
    {
        $this->expireTimestamp = $expireTimestamp;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsDiagnosisSuggestionGetV30ResponseDataPromotionSuggestionsInner[]
     */
    public function getPromotionSuggestions(): ?array
    {
        return $this->promotionSuggestions;
    }

    /**
     * @param \Oceanengine\Models\ToolsDiagnosisSuggestionGetV30ResponseDataPromotionSuggestionsInner[] $promotionSuggestions
     * @return self
     */
    public function setPromotionSuggestions(?array $promotionSuggestions): self
    {
        $this->promotionSuggestions = $promotionSuggestions;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->diagnosisId !== null) {
            $result['diagnosis_id'] = $this->diagnosisId;
        }
        if ($this->expireTimestamp !== null) {
            $result['expire_timestamp'] = $this->expireTimestamp;
        }
        if ($this->promotionSuggestions !== null) {
            $result['promotion_suggestions'] = $this->promotionSuggestions;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['diagnosis_id'] ?? null) !== null) {
            $obj->diagnosisId = (string) $v;
        }
        if (($v = $data['expire_timestamp'] ?? null) !== null) {
            $obj->expireTimestamp = (string) $v;
        }
        if (($v = $data['promotion_suggestions'] ?? null) !== null && is_array($v)) {
            $obj->promotionSuggestions = array_map(fn ($vv) => \Oceanengine\Models\ToolsDiagnosisSuggestionGetV30ResponseDataPromotionSuggestionsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
