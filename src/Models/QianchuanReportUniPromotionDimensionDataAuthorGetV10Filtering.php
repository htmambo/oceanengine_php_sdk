<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class QianchuanReportUniPromotionDimensionDataAuthorGetV10Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringOrderPlatform
     */
    protected ?string $orderPlatform = null;

    /**
     * @var \Oceanengine\Models\QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringSmartBidType
     */
    protected ?string $smartBidType = null;

    /**
     * @return \Oceanengine\Models\QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringOrderPlatform
     */
    public function getOrderPlatform(): ?string
    {
        return $this->orderPlatform;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringOrderPlatform $orderPlatform
     * @return self
     */
    public function setOrderPlatform(?string $orderPlatform): self
    {
        $this->orderPlatform = $orderPlatform;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringSmartBidType
     */
    public function getSmartBidType(): ?string
    {
        return $this->smartBidType;
    }

    /**
     * @param \Oceanengine\Models\QianchuanReportUniPromotionDimensionDataAuthorGetV10FilteringSmartBidType $smartBidType
     * @return self
     */
    public function setSmartBidType(?string $smartBidType): self
    {
        $this->smartBidType = $smartBidType;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->orderPlatform !== null) {
            $result['order_platform'] = $this->orderPlatform;
        }
        if ($this->smartBidType !== null) {
            $result['smart_bid_type'] = $this->smartBidType;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['order_platform'] ?? null) !== null) {
            $obj->orderPlatform = (string) $v;
        }
        if (($v = $data['smart_bid_type'] ?? null) !== null) {
            $obj->smartBidType = (string) $v;
        }
        return $obj;
    }
}
