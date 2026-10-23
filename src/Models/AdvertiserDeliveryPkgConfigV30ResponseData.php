<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AdvertiserDeliveryPkgConfigV30ResponseData implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfig
     */
    protected ?\Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfig $industryConfig = null;

    /**
     * @return \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfig
     */
    public function getIndustryConfig(): ?\Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfig
    {
        return $this->industryConfig;
    }

    /**
     * @param \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfig $industryConfig
     * @return self
     */
    public function setIndustryConfig(?\Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfig $industryConfig): self
    {
        $this->industryConfig = $industryConfig;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->industryConfig !== null) {
            $result['industry_config'] = $this->industryConfig;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['industry_config'] ?? null) !== null && is_array($v)) {
            $obj->industryConfig = \Oceanengine\Models\AdvertiserDeliveryPkgConfigV30ResponseDataIndustryConfig::fromArray($v);
        }
        return $obj;
    }
}
