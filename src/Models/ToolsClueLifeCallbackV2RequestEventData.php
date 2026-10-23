<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsClueLifeCallbackV2RequestEventData implements \JsonSerializable
{
    /**
     * @var int
     */
    protected ?int $dealSubAmount = null;

    /**
     * @var \Oceanengine\Models\ToolsClueLifeCallbackV2EventDataReasonCode
     */
    protected ?string $reasonCode = null;

    /**
     * @var string
     */
    protected ?string $reasonMessage = null;

    /**
     * @return int
     */
    public function getDealSubAmount(): ?int
    {
        return $this->dealSubAmount;
    }

    /**
     * @param int $dealSubAmount
     * @return self
     */
    public function setDealSubAmount(?int $dealSubAmount): self
    {
        $this->dealSubAmount = $dealSubAmount;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsClueLifeCallbackV2EventDataReasonCode
     */
    public function getReasonCode(): ?string
    {
        return $this->reasonCode;
    }

    /**
     * @param \Oceanengine\Models\ToolsClueLifeCallbackV2EventDataReasonCode $reasonCode
     * @return self
     */
    public function setReasonCode(?string $reasonCode): self
    {
        $this->reasonCode = $reasonCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getReasonMessage(): ?string
    {
        return $this->reasonMessage;
    }

    /**
     * @param string $reasonMessage
     * @return self
     */
    public function setReasonMessage(?string $reasonMessage): self
    {
        $this->reasonMessage = $reasonMessage;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->dealSubAmount !== null) {
            $result['deal_sub_amount'] = $this->dealSubAmount;
        }
        if ($this->reasonCode !== null) {
            $result['reason_code'] = $this->reasonCode;
        }
        if ($this->reasonMessage !== null) {
            $result['reason_message'] = $this->reasonMessage;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['deal_sub_amount'] ?? null) !== null) {
            $obj->dealSubAmount = (int) $v;
        }
        if (($v = $data['reason_code'] ?? null) !== null) {
            $obj->reasonCode = (string) $v;
        }
        if (($v = $data['reason_message'] ?? null) !== null) {
            $obj->reasonMessage = (string) $v;
        }
        return $obj;
    }
}
