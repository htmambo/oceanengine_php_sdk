<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionDiagnosisSuggestionGetV30ResponseData implements \JsonSerializable
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
     * @var \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInner[]
     */
    protected ?array $suggestionList = null;

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
     * @return \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInner[]
     */
    public function getSuggestionList(): ?array
    {
        return $this->suggestionList;
    }

    /**
     * @param \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInner[] $suggestionList
     * @return self
     */
    public function setSuggestionList(?array $suggestionList): self
    {
        $this->suggestionList = $suggestionList;
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
        if ($this->suggestionList !== null) {
            $result['suggestion_list'] = $this->suggestionList;
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
        if (($v = $data['suggestion_list'] ?? null) !== null && is_array($v)) {
            $obj->suggestionList = array_map(fn ($vv) => \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionGetV30ResponseDataSuggestionListInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
