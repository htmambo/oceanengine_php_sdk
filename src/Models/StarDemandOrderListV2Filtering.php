<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class StarDemandOrderListV2Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\StarDemandOrderListV2FilteringUniversalOrderStatus
     */
    protected ?string $universalOrderStatus = null;

    /**
     * @return \Oceanengine\Models\StarDemandOrderListV2FilteringUniversalOrderStatus
     */
    public function getUniversalOrderStatus(): ?string
    {
        return $this->universalOrderStatus;
    }

    /**
     * @param \Oceanengine\Models\StarDemandOrderListV2FilteringUniversalOrderStatus $universalOrderStatus
     * @return self
     */
    public function setUniversalOrderStatus(?string $universalOrderStatus): self
    {
        $this->universalOrderStatus = $universalOrderStatus;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->universalOrderStatus !== null) {
            $result['universal_order_status'] = $this->universalOrderStatus;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['universal_order_status'] ?? null) !== null) {
            $obj->universalOrderStatus = (string) $v;
        }
        return $obj;
    }
}
