<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ToolsNoBidSuggestBidV2Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ToolsNoBidSuggestBidV2FilteringFlowControlMode
     */
    protected ?string $flowControlMode = null;

    /**
     * @var \Oceanengine\Models\ToolsNoBidSuggestBidV2FilteringPricing
     */
    protected ?string $pricing = null;

    /**
     * @return \Oceanengine\Models\ToolsNoBidSuggestBidV2FilteringFlowControlMode
     */
    public function getFlowControlMode(): ?string
    {
        return $this->flowControlMode;
    }

    /**
     * @param \Oceanengine\Models\ToolsNoBidSuggestBidV2FilteringFlowControlMode $flowControlMode
     * @return self
     */
    public function setFlowControlMode(?string $flowControlMode): self
    {
        $this->flowControlMode = $flowControlMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ToolsNoBidSuggestBidV2FilteringPricing
     */
    public function getPricing(): ?string
    {
        return $this->pricing;
    }

    /**
     * @param \Oceanengine\Models\ToolsNoBidSuggestBidV2FilteringPricing $pricing
     * @return self
     */
    public function setPricing(?string $pricing): self
    {
        $this->pricing = $pricing;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->flowControlMode !== null) {
            $result['flow_control_mode'] = $this->flowControlMode;
        }
        if ($this->pricing !== null) {
            $result['pricing'] = $this->pricing;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['flow_control_mode'] ?? null) !== null) {
            $obj->flowControlMode = (string) $v;
        }
        if (($v = $data['pricing'] ?? null) !== null) {
            $obj->pricing = (string) $v;
        }
        return $obj;
    }
}
