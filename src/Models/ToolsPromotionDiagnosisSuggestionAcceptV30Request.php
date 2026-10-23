<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsPromotionDiagnosisSuggestionAcceptV30Request implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $advertiserId = null;

    /**
     * @var string
     */
    protected ?string $diagnosisId = null;

    /**
     * @var int
     */
    protected ?int $promotionId = null;

    /**
     * @var \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30RequestToolsInner[]
     */
    protected ?array $tools = null;

    /**
     * @return int
     */
    public function getAdvertiserId(): ?int
    {
        return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return self
     */
    public function setAdvertiserId(?int $advertiserId): self
    {
        $this->advertiserId = $advertiserId;
        return $this;
    }

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
     * @return \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30RequestToolsInner[]
     */
    public function getTools(): ?array
    {
        return $this->tools;
    }

    /**
     * @param \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30RequestToolsInner[] $tools
     * @return self
     */
    public function setTools(?array $tools): self
    {
        $this->tools = $tools;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->advertiserId !== null) {
            $result['advertiser_id'] = $this->advertiserId;
        }
        if ($this->diagnosisId !== null) {
            $result['diagnosis_id'] = $this->diagnosisId;
        }
        if ($this->promotionId !== null) {
            $result['promotion_id'] = $this->promotionId;
        }
        if ($this->tools !== null) {
            $result['tools'] = $this->tools;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['advertiser_id'] ?? null) !== null) {
            $obj->advertiserId = (int) $v;
        }
        if (($v = $data['diagnosis_id'] ?? null) !== null) {
            $obj->diagnosisId = (string) $v;
        }
        if (($v = $data['promotion_id'] ?? null) !== null) {
            $obj->promotionId = (int) $v;
        }
        if (($v = $data['tools'] ?? null) !== null && is_array($v)) {
            $obj->tools = array_map(fn ($vv) => \Oceanengine\Models\ToolsPromotionDiagnosisSuggestionAcceptV30RequestToolsInner::fromArray($vv), $v);
        }
        return $obj;
    }
}
