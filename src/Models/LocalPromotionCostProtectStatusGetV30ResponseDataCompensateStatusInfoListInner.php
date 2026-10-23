<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class LocalPromotionCostProtectStatusGetV30ResponseDataCompensateStatusInfoListInner implements \JsonSerializable
{
    /**
     * @var float
     */
    protected ?float $compensateAmount = null;

    /**
     * 成本保障结束原因
     * @var \Oceanengine\Models\LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons[]
     */
    protected ?array $compensateEndReasons = null;

    /**
     * 成本保障失效原因
     * @var \Oceanengine\Models\LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons[]
     */
    protected ?array $compensateInvalidReasons = null;

    /**
     * @var \Oceanengine\Models\LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus
     */
    protected ?string $compensateStatus = null;

    /**
     * @var string
     */
    protected ?string $compensateUrl = null;

    /**
     * 单元id
     * @var int
     */
    protected ?int $promotion = null;

    /**
     * @return float
     */
    public function getCompensateAmount(): ?float
    {
        return $this->compensateAmount;
    }

    /**
     * @param float $compensateAmount
     * @return self
     */
    public function setCompensateAmount(?float $compensateAmount): self
    {
        $this->compensateAmount = $compensateAmount;
        return $this;
    }

    /**
     * 成本保障结束原因
     * @return \Oceanengine\Models\LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons[]
     */
    public function getCompensateEndReasons(): ?array
    {
        return $this->compensateEndReasons;
    }

    /**
     * 成本保障结束原因
     * @param \Oceanengine\Models\LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateEndReasons[] $compensateEndReasons
     * @return self
     */
    public function setCompensateEndReasons(?array $compensateEndReasons): self
    {
        $this->compensateEndReasons = $compensateEndReasons;
        return $this;
    }

    /**
     * 成本保障失效原因
     * @return \Oceanengine\Models\LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons[]
     */
    public function getCompensateInvalidReasons(): ?array
    {
        return $this->compensateInvalidReasons;
    }

    /**
     * 成本保障失效原因
     * @param \Oceanengine\Models\LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateInvalidReasons[] $compensateInvalidReasons
     * @return self
     */
    public function setCompensateInvalidReasons(?array $compensateInvalidReasons): self
    {
        $this->compensateInvalidReasons = $compensateInvalidReasons;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus
     */
    public function getCompensateStatus(): ?string
    {
        return $this->compensateStatus;
    }

    /**
     * @param \Oceanengine\Models\LocalPromotionCostProtectStatusGetV30DataCompensateStatusInfoListCompensateStatus $compensateStatus
     * @return self
     */
    public function setCompensateStatus(?string $compensateStatus): self
    {
        $this->compensateStatus = $compensateStatus;
        return $this;
    }

    /**
     * @return string
     */
    public function getCompensateUrl(): ?string
    {
        return $this->compensateUrl;
    }

    /**
     * @param string $compensateUrl
     * @return self
     */
    public function setCompensateUrl(?string $compensateUrl): self
    {
        $this->compensateUrl = $compensateUrl;
        return $this;
    }

    /**
     * 单元id
     * @return int
     */
    public function getPromotion(): ?int
    {
        return $this->promotion;
    }

    /**
     * 单元id
     * @param int $promotion
     * @return self
     */
    public function setPromotion(?int $promotion): self
    {
        $this->promotion = $promotion;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->compensateAmount !== null) {
            $result['compensate_amount'] = $this->compensateAmount;
        }
        if ($this->compensateEndReasons !== null) {
            $result['compensate_end_reasons'] = $this->compensateEndReasons;
        }
        if ($this->compensateInvalidReasons !== null) {
            $result['compensate_invalid_reasons'] = $this->compensateInvalidReasons;
        }
        if ($this->compensateStatus !== null) {
            $result['compensate_status'] = $this->compensateStatus;
        }
        if ($this->compensateUrl !== null) {
            $result['compensate_url'] = $this->compensateUrl;
        }
        if ($this->promotion !== null) {
            $result['promotion'] = $this->promotion;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['compensate_amount'] ?? null) !== null) {
            $obj->compensateAmount = (float) $v;
        }
        if (($v = $data['compensate_end_reasons'] ?? null) !== null && is_array($v)) {
            $obj->compensateEndReasons = $v;
        }
        if (($v = $data['compensate_invalid_reasons'] ?? null) !== null && is_array($v)) {
            $obj->compensateInvalidReasons = $v;
        }
        if (($v = $data['compensate_status'] ?? null) !== null) {
            $obj->compensateStatus = (string) $v;
        }
        if (($v = $data['compensate_url'] ?? null) !== null) {
            $obj->compensateUrl = (string) $v;
        }
        if (($v = $data['promotion'] ?? null) !== null) {
            $obj->promotion = (int) $v;
        }
        return $obj;
    }
}
