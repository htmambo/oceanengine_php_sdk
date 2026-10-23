<?php

declare(strict_types=1);

namespace Oceanengine\Models;

class AudiencePackageGetV30Filtering implements \JsonSerializable
{
    /**
     * @var \Oceanengine\Models\AudiencePackageGetV30FilteringAdType
     */
    protected ?string $adType = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageGetV30FilteringDeliveryRange
     */
    protected ?string $deliveryRange = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageGetV30FilteringLandingType
     */
    protected ?string $landingType = null;

    /**
     * @var \Oceanengine\Models\AudiencePackageGetV30FilteringMarketingGoal
     */
    protected ?string $marketingGoal = null;

    /**
     * @var string
     */
    protected ?string $name = null;

    /**
     * @return \Oceanengine\Models\AudiencePackageGetV30FilteringAdType
     */
    public function getAdType(): ?string
    {
        return $this->adType;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageGetV30FilteringAdType $adType
     * @return self
     */
    public function setAdType(?string $adType): self
    {
        $this->adType = $adType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageGetV30FilteringDeliveryRange
     */
    public function getDeliveryRange(): ?string
    {
        return $this->deliveryRange;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageGetV30FilteringDeliveryRange $deliveryRange
     * @return self
     */
    public function setDeliveryRange(?string $deliveryRange): self
    {
        $this->deliveryRange = $deliveryRange;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageGetV30FilteringLandingType
     */
    public function getLandingType(): ?string
    {
        return $this->landingType;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageGetV30FilteringLandingType $landingType
     * @return self
     */
    public function setLandingType(?string $landingType): self
    {
        $this->landingType = $landingType;
        return $this;
    }

    /**
     * @return \Oceanengine\Models\AudiencePackageGetV30FilteringMarketingGoal
     */
    public function getMarketingGoal(): ?string
    {
        return $this->marketingGoal;
    }

    /**
     * @param \Oceanengine\Models\AudiencePackageGetV30FilteringMarketingGoal $marketingGoal
     * @return self
     */
    public function setMarketingGoal(?string $marketingGoal): self
    {
        $this->marketingGoal = $marketingGoal;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array<string,mixed>
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize(): array
    {
        $result = [];
        if ($this->adType !== null) {
            $result['ad_type'] = $this->adType;
        }
        if ($this->deliveryRange !== null) {
            $result['delivery_range'] = $this->deliveryRange;
        }
        if ($this->landingType !== null) {
            $result['landing_type'] = $this->landingType;
        }
        if ($this->marketingGoal !== null) {
            $result['marketing_goal'] = $this->marketingGoal;
        }
        if ($this->name !== null) {
            $result['name'] = $this->name;
        }
        return $result;
    }

    public static function fromArray(array $data): self
    {
        $obj = new self();
        if (($v = $data['ad_type'] ?? null) !== null) {
            $obj->adType = (string) $v;
        }
        if (($v = $data['delivery_range'] ?? null) !== null) {
            $obj->deliveryRange = (string) $v;
        }
        if (($v = $data['landing_type'] ?? null) !== null) {
            $obj->landingType = (string) $v;
        }
        if (($v = $data['marketing_goal'] ?? null) !== null) {
            $obj->marketingGoal = (string) $v;
        }
        if (($v = $data['name'] ?? null) !== null) {
            $obj->name = (string) $v;
        }
        return $obj;
    }
}
