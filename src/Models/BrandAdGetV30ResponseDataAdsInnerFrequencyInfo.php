<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandAdGetV30ResponseDataAdsInnerFrequencyInfo implements \JsonSerializable
{
    /**
     * 周期频控
     * @var int
     */
    protected ?int $frequency = null;

    /**
     * @var \Oceanengine\Models\BrandAdGetV30DataAdsFrequencyInfoFrequencyStatus
     */
    protected ?string $frequencyStatus = null;

    /**
     * 触达次数
     * @var int
     */
    protected ?int $reachTarget = null;

    /**
     * 周期频控
     * @return int
     */
    public function getFrequency(): ?int
    {
        return $this->frequency;
    }

    /**
     * 周期频控
     * @param int $frequency
     * @return self
     */
    public function setFrequency(?int $frequency): self
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandAdGetV30DataAdsFrequencyInfoFrequencyStatus
     */
    public function getFrequencyStatus(): ?string
    {
        return $this->frequencyStatus;
    }

    /**
     * @param \Oceanengine\Models\BrandAdGetV30DataAdsFrequencyInfoFrequencyStatus $frequencyStatus
     * @return self
     */
    public function setFrequencyStatus(?string $frequencyStatus): self
    {
        $this->frequencyStatus = $frequencyStatus;
        return $this;
    }

    /**
     * 触达次数
     * @return int
     */
    public function getReachTarget(): ?int
    {
        return $this->reachTarget;
    }

    /**
     * 触达次数
     * @param int $reachTarget
     * @return self
     */
    public function setReachTarget(?int $reachTarget): self
    {
        $this->reachTarget = $reachTarget;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->frequency !== null) {
            $result['frequency'] = $this->frequency;
        }
        if ($this->frequencyStatus !== null) {
            $result['frequency_status'] = $this->frequencyStatus;
        }
        if ($this->reachTarget !== null) {
            $result['reach_target'] = $this->reachTarget;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['frequency'] ?? null) !== null) {
            $obj->frequency = (int) $v;
        }
        if (($v = $data['frequency_status'] ?? null) !== null) {
            $obj->frequencyStatus = (string) $v;
        }
        if (($v = $data['reach_target'] ?? null) !== null) {
            $obj->reachTarget = (int) $v;
        }
        return $obj;
    }
}
