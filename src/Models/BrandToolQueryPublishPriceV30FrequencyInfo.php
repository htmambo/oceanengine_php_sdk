<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandToolQueryPublishPriceV30FrequencyInfo implements \JsonSerializable
{
    /**
     * 频控信息
     * @var int
     */
    protected ?int $frequency = null;

    /**
     * @var \Oceanengine\Models\BrandToolQueryPublishPriceV30FrequencyInfoFrequencyStatus
     */
    protected ?string $frequencyStatus = null;

    /**
     * 频控信息
     * @return int
     */
    public function getFrequency(): ?int
    {
        return $this->frequency;
    }

    /**
     * 频控信息
     * @param int $frequency
     * @return self
     */
    public function setFrequency(?int $frequency): self
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\BrandToolQueryPublishPriceV30FrequencyInfoFrequencyStatus
     */
    public function getFrequencyStatus(): ?string
    {
        return $this->frequencyStatus;
    }

    /**
     * @param \Oceanengine\Models\BrandToolQueryPublishPriceV30FrequencyInfoFrequencyStatus $frequencyStatus
     * @return self
     */
    public function setFrequencyStatus(?string $frequencyStatus): self
    {
        $this->frequencyStatus = $frequencyStatus;
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
        return $obj;
    }
}
