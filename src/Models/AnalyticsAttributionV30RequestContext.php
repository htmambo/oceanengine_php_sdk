<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AnalyticsAttributionV30RequestContext implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AnalyticsAttributionV30RequestContextAd
     */
    protected ?\Oceanengine\Models\AnalyticsAttributionV30RequestContextAd $ad = null;

    /**
     * @var \Oceanengine\Models\AnalyticsAttributionV30RequestContextDevice
     */
    protected ?\Oceanengine\Models\AnalyticsAttributionV30RequestContextDevice $device = null;

    /**
     * @return \Oceanengine\Models\AnalyticsAttributionV30RequestContextAd
     */
    public function getAd(): ?\Oceanengine\Models\AnalyticsAttributionV30RequestContextAd
    {
        return $this->ad;
    }

    /**
     * @param \Oceanengine\Models\AnalyticsAttributionV30RequestContextAd $ad
     * @return self
     */
    public function setAd(?\Oceanengine\Models\AnalyticsAttributionV30RequestContextAd $ad): self
    {
        $this->ad = $ad;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AnalyticsAttributionV30RequestContextDevice
     */
    public function getDevice(): ?\Oceanengine\Models\AnalyticsAttributionV30RequestContextDevice
    {
        return $this->device;
    }

    /**
     * @param \Oceanengine\Models\AnalyticsAttributionV30RequestContextDevice $device
     * @return self
     */
    public function setDevice(?\Oceanengine\Models\AnalyticsAttributionV30RequestContextDevice $device): self
    {
        $this->device = $device;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->ad !== null) {
            $result['ad'] = $this->ad;
        }
        if ($this->device !== null) {
            $result['device'] = $this->device;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad'] ?? null) !== null && is_array($v)) {
            $obj->ad = \Oceanengine\Models\AnalyticsAttributionV30RequestContextAd::fromArray($v);
        }
        if (($v = $data['device'] ?? null) !== null && is_array($v)) {
            $obj->device = \Oceanengine\Models\AnalyticsAttributionV30RequestContextDevice::fromArray($v);
        }
        return $obj;
    }
}
