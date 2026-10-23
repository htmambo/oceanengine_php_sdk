<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class BrandOrderListV30ResponseDataOrdersInnerFrequencyInfo implements \JsonSerializable
{
    /**
     * 频控次数
     * @var int
     */
    protected ?int $frequency = null;

    /**
     * 是否启用
     * @var int
     */
    protected ?int $frequencyStatus = null;

    /**
     * 频控次数
     * @return int
     */
    public function getFrequency(): ?int
    {
        return $this->frequency;
    }

    /**
     * 频控次数
     * @param int $frequency
     * @return self
     */
    public function setFrequency(?int $frequency): self
    {
        $this->frequency = $frequency;
        return $this;
    }

    /**
     * 是否启用
     * @return int
     */
    public function getFrequencyStatus(): ?int
    {
        return $this->frequencyStatus;
    }

    /**
     * 是否启用
     * @param int $frequencyStatus
     * @return self
     */
    public function setFrequencyStatus(?int $frequencyStatus): self
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
            $obj->frequencyStatus = (int) $v;
        }
        return $obj;
    }
}
