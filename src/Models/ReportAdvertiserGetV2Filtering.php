<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class ReportAdvertiserGetV2Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\ReportAdvertiserGetV2FilteringDeliveryMode[]
     */
    protected ?array $deliveryMode = null;

    /**
     * @var \Oceanengine\Models\ReportAdvertiserGetV2FilteringPlatformVersion
     */
    protected ?string $platformVersion = null;

    /**
     * @return \Oceanengine\Models\ReportAdvertiserGetV2FilteringDeliveryMode[]
     */
    public function getDeliveryMode(): ?array
    {
        return $this->deliveryMode;
    }

    /**
     * @param \Oceanengine\Models\ReportAdvertiserGetV2FilteringDeliveryMode[] $deliveryMode
     * @return self
     */
    public function setDeliveryMode(?array $deliveryMode): self
    {
        $this->deliveryMode = $deliveryMode;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\ReportAdvertiserGetV2FilteringPlatformVersion
     */
    public function getPlatformVersion(): ?string
    {
        return $this->platformVersion;
    }

    /**
     * @param \Oceanengine\Models\ReportAdvertiserGetV2FilteringPlatformVersion $platformVersion
     * @return self
     */
    public function setPlatformVersion(?string $platformVersion): self
    {
        $this->platformVersion = $platformVersion;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->deliveryMode !== null) {
            $result['delivery_mode'] = $this->deliveryMode;
        }
        if ($this->platformVersion !== null) {
            $result['platform_version'] = $this->platformVersion;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['delivery_mode'] ?? null) !== null && is_array($v)) {
            $obj->deliveryMode = $v;
        }
        if (($v = $data['platform_version'] ?? null) !== null) {
            $obj->platformVersion = (string) $v;
        }
        return $obj;
    }
}
